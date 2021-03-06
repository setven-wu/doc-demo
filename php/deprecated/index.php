<?php

/**
 * <p>"@deprecated" : 被此标记的函数或者成员方法表示下个版本将会被废弃，告知适用方不再推荐使用此方法</p>
 *
 * <b>此标签建议在PHPStorm中打开此演示文档，可以看到具体的标签效果</b>
 */
class TagDeprecated
{
    /**
     * <1>.表示此方法将在未来会被废弃
     *
     * @deprecated
     */
    public static function willBeDeprecated()
    {
    }

    /**
     * <2>.表示此方法将在未来指定版本会被废弃
     *
     * @deprecated 1.0.0
     */
    public static function willBeDeprecatedNextVersion()
    {
    }

    /**
     * <3>.过气的接口1.0版本,请使用最新接口V2
     *
     * @see TagDeprecated::apiV2()
     * @deprecated 3.0.0 此方法以被废弃，请使用最新方法v2
     */
    public static function apiV1()
    {
    }

    /**
     * V1已经过时了，我就是最靓的V2方法
     */
    public static function apiV2()
    {
    }
}

// 普通标记
TagDeprecated::willBeDeprecated();
// 标记未来将要废弃的版本
TagDeprecated::willBeDeprecatedNextVersion();
// 方法因升级而被废弃，需要配合@see标签使用
TagDeprecated::apiV1();
