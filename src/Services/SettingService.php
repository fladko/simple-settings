<?php


namespace Fladko\SimpleSettings\Services;

use Fladko\SimpleSettings\Model\Setting;

class SettingService
{
    /**
     * @param $name
     * @return |null
     */
    public static function getByName($name)
    {
        $setting = Setting::where('name', $name)->first();
        return $setting['data']['value'] ?? null;
    }

    /**
     * @param $name
     * @param null $value
     * @return mixed
     */
    public static function setNew($name, $value = null)
    {
        return Setting::create([
            'name' => $name,
            'data' => [
                'value' => $value
            ]
        ]);
    }

}
