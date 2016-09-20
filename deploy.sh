#!/bin/bash
filesChanged=$(git ls-files)
if [ ${#filesChanged[@]} -eq 0 ]; then
    echo "No files to update"
else
    for f in $filesChanged
    do
        echo "Uploading $f"
        curl --ftp-create-dirs -T $f -u pwc:ProvenWebConcepts5 ftp://195.110.59.207/www/dev/$f
    done
fi