#!/bin/bash

export AWS_ACCESS_KEY_ID="AKIAIAGB5LTIBXQWGDGA"
export AWS_SECRET_ACCESS_KEY="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"

PATH=/usr/kerberos/sbin:/usr/kerberos/bin:/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/root/bin
NAME="trofeosIbericos.rar"
NEWNAME="trofeosIbericos_$(date +%Y-%m-%d_%H%M).rar"
UPLOAD_PATH="/home/winpc/upload"

if [ $# -ne 1 ] && ([ "$1" != "week" ] || [ "$1" != "day" ]);
then
        echo "Incorrect params!"
        echo "Usage: uploadTrofeos {week|day}"
        exit 3
fi

if [ -e $UPLOAD_PATH/$NAME ];
then

    cd $UPLOAD_PATH

    mv $NAME $NEWNAME

    OUT=1
    COUNT=0

    while [ ${OUT} -ne 0 ] && [ ${COUNT} -lt 3 ]; do


      if [ $1 == "day" ];
      then
            /usr/local/bin/aws s3 cp $NEWNAME  s3://metaleris-backups/day/ >> /tmp/upload_metaleris.log 2>&1

      elif [ $1 == "week" ];
      then
            /usr/local/bin/aws s3 cp $NEWNAME  s3://metaleris-backups/week/ >> /tmp/upload_metaleris.log 2>&1
      fi

      COUNT=`expr $COUNT + 1`

      if [ $? -eq 0 ];
      then
          rm -f $UPLOAD_PATH/$NEWNAME
          ${OUT}=0

      else
          echo "Fail to load $NAME to S3. Try it again!"
          ${OUT}=1
      fi

    done

else
  echo $NAME is not loaded from winpc yet! Please load it before start load to S3.
  exit 1

fi

echo "Upload succeeded!"


exit 0