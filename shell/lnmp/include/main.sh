#!/bin/bash


Download_File()
{
    #cd ${download_dir}
    local URL=$1
    local File_Name=$2
    if [ -s ${File_Name} ]; then
        echo 'File exists'
    else
        wget -O ${File_Name} ${URL}
    fi
}

Tar_File()
{
    local File_Name=$1
    local Dir_Name=$2
    cd ${cur_dir}/src
    [[ -d ${File_Name} ]] && rm -fr ${File_Name}
    tar zxvf ${File_Name}
    cd ${Dir_Name}
}




