<?php
namespace developit\slug;

use developit\slug\helpers\Inflector;
use Yii;
use yii\base\InvalidConfigException;
use yii\behaviors\SluggableBehavior;
use yii\db\BaseActiveRecord;
use yii\helpers\ArrayHelper;
use yii\validators\UniqueValidator;

/**
 * PesianSluggableBehavior automatically fills the specified attribute with a value that can be used a slug in a URL.
 *
 * To use SluggableBehavior, insert the following code to your ActiveRecord class:
 *
 * ```php
 * use developit\slug\PesianSluggableBehavior;
 *
 * public function behaviors()
 * {
 *     return [
 *         [
 *             'class' => PesianSluggableBehavior::className(),
 *             'attribute' => 'title',
 *             // 'slugAttribute' => 'slug',
 *         ],
 *     ];
 * }
 * ```
 *
 * By default, SluggableBehavior will fill the `slug` attribute with a value that can be used a slug in a URL
 * when the associated AR object is being validated.
 *
 * Because attribute values will be set automatically by this behavior, they are usually not user input and should therefore
 * not be validated, i.e. the `slug` attribute should not appear in the [[\yii\base\Model::rules()|rules()]] method of the model.
 *
 * If your attribute name is different, you may configure the [[slugAttribute]] property like the following:
 *
 * ```php
 * public function behaviors()
 * {
 *     return [
 *         [
 *             'class' => PesianSluggableBehavior::className(),
 *             'slugAttribute' => 'alias',
 *         ],
 *     ];
 * }
 * ```
 *
 */
class PesianSluggableBehavior extends SluggableBehavior
{
    /**
     * This method is called by [[getValue]] to generate the slug.
     * You may override it to customize slug generation.
     * The default implementation calls [[\yii\helpers\Inflector::slug()]] on the input strings
     * concatenated by dashes (`-`).
     * @param array $slugParts an array of strings that should be concatenated and converted to generate the slug value.
     * @return string the conversion result.
     */
    protected function generateSlug($slugParts)
    {
        return Inflector::slug(implode('-', $slugParts));
    }
}
