<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 09.03.2015
 */
namespace skeeks\cms\query;

use skeeks\cms\components\Cms;
use yii\db\ActiveQuery;

/**
 * Class CmsActiveQuery
 * @package skeeks\cms\query
 */
class CmsActiveQuery extends ActiveQuery
{
    public function active($state = true)
    {
        return $this->andWhere(['active' => ($state == true ? Cms::BOOL_Y : Cms::BOOL_N)]);
    }

    public function def($state = true)
    {
        return $this->andWhere(['def' => ($state == true ? Cms::BOOL_Y : Cms::BOOL_N)]);
    }
}