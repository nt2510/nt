#!/bin/bash


Download_File()
{
    #cd ${download_dir}
    URL=$1
    File_Name=$2
    if [ -s ${File_Name} ]; then
        echo 'File exists'
    else
        wget -O ${File_Name} ${URL}
    fi
}




