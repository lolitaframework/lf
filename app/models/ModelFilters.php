<?php

namespace lf;

class ModelFilters
{

    /**
     * upload_mimes Filter.
     */
    public static function addMimeSvg($mimes)
    {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }
}
