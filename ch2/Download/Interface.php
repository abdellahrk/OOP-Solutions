<?php

interface IDownload
{
    public function getFileLocation();
    public function createDownloadLink();
}