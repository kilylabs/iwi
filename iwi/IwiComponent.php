<?php

Yii::import('vendor.kilylabs.iwi.iwi.Iwi');
Yii::import('vendor.kilylabs.iwi.iwi.vendors.image.CImageComponent');

/**
 * Description of CImageComponent
 *
 * @author Administrator
 */
class IwiComponent extends CImageComponent
{
    public function load($image)
    {
        $config = array(
            'driver' => $this->driver,
            'params' => $this->params,
        );

        return new Iwi($image, $config);
    }
}

?>
