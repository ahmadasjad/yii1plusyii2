<?php

namespace ahmadasjad\yii1PlusYii2;

use Yii;
use yii\base\InvalidConfigException;
use yii\web\AssetBundle;

/**
 * @author Ahmad Asjad <ahmadcimage@gmail.com>
 */
class View  extends \yii\web\View
{
    /**
     * @param string $url
     * @param array $options Ignored
     * @param null $key Ignored
     */
    public function registerCssFile($url, $options = [], $key = null)
    {
        // Register in parent in order to trigger any errors with the parameters
        parent::registerCssFile($url, $options, $key);
        // Register using Yii1 client script
        $clientScript = Yii::app()->getClientScript();
        //$url = $this->getAssetsUrl() . $url;
        $clientScript->registerCssFile($url);
    }

    public function registerJsFile($url, $options = [], $key = null)
    {
        // Register in parent in order to trigger any errors with the parameters
        parent::registerJsFile($url, $options, $key);
        // Register using Yii1 client script
        $clientScript = Yii::app()->getClientScript();
        //$url = $this->getAssetsUrl() . $url;
        $clientScript->registerScriptFile($url);
    }

    public function registerJs($js, $position = self::POS_READY, $key = null)
    {
        // Register in parent in order to trigger any errors with the parameters
        parent::registerJs($js, $position, $key);
        // Register using Yii1 client script
        $clientScript = Yii::app()->getClientScript();
        $clientScript->registerScript(uniqid(), $js, $position);
    }

    /**
     * Usually performed within View->endBody() in Yii 2 themes.
     * We'll need to trigger this manually in our Yii 1 views or layouts (see README.md)
     */
    public function registerYii2Assets()
    {
        foreach (array_keys($this->assetBundles) as $bundle) {
            $this->registerAssetFiles($bundle);
        }
    }

}
