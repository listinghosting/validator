<?php
namespace Whsuite\Validator;

use \Symfony\Component\Translation\Translator as Translator;
use \Illuminate\Validation\Factory as Validation;

class Validator  {

    public function init($lang = 1)
    {
        $language = \App::get('configs')->get('languages.' . $lang);

        if (! is_object($language)) {

            throw new \Exception('Language object not found');
        }

        $t = new Translator($language->slug);

        return new Validation($t);
    }

}