<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute を承認してください。',
    'active_url'           => ':attribute は有効なURLではありません。',
    'after'                => ':attribute には、:date 以降の日付を指定してください。',
    'after_or_equal'       => ':attribute には、:date 以降もしくは同日時を指定してください。',
    'alpha'                => ':attribute にはアルファベッドのみ使用できます。',
    'alpha_dash'           => ':attribute には、英数字とダッシュ(-)及び下線(_)が使用できます。',
    'alpha_num'            => ':attribute には英数字のみ使用できます。',
    'array'                => ':attribute には配列を指定してください。',
    'before'               => ':attribute には、:date 以前の日付を指定してください。',
    'before_or_equal'      => ':attribute には、:date 以前もしくは同日時を指定してください。',
    'between'              => [
        'numeric' => ':attribute には、:min から :max までの数値を指定してください。',
        'file'    => ':attribute には、:min KBから :max KBまでのファイルを指定してください。',
        'string'  => ':attribute には、:min 文字から :max 文字までの文字列を指定してください。',
        'array'   => ':attribute には、:min 個から :max 個までの要素を指定してください。',
    ],
    'boolean'              => ':attribute には、true か false を指定してください。',
    'confirmed'            => ':attribute と確認フィールドが一致していません。',
    'date'                 => ':attribute は正しい日付ではありません。',
    'date_equals'          => ':attribute には、:date と同じ日付を指定してください。',
    'date_format'          => ':attribute は :format 書式と一致していません。',
    'different'            => ':attribute と :other には、異なる値を指定してください。',
    'digits'               => ':attribute は :digits 桁である必要があります。',
    'digits_between'       => ':attribute は :min 桁から :max 桁の間である必要があります。',
    'dimensions'           => ':attribute の画像サイズが無効です。',
    'distinct'             => ':attribute に重複した値があります。',
    'email'                => ':attribute は有効なメールアドレス形式で指定してください。',
    'exists'               => '選択された :attribute は正しくありません。',
    'file'                 => ':attribute にはファイルを指定してください。',
    'filled'               => ':attribute には値を指定してください。',
    'gt'                   => [
        'numeric' => ':attribute には、:value より大きな値を指定してください。',
        'file'    => ':attribute には、:value KBより大きなファイルを指定してください。',
        'string'  => ':attribute には、:value 文字より多くの文字を指定してください。',
        'array'   => ':attribute には、:value 個より多くの要素を指定してください。',
    ],
    'gte'                  => [
        'numeric' => ':attribute には、:value 以上の値を指定してください。',
        'file'    => ':attribute には、:value KB以上のファイルを指定してください。',
        'string'  => ':attribute には、:value 文字以上の文字を指定してください。',
        'array'   => ':attribute には、:value 個以上の要素を指定してください。',
    ],
    'image'                => ':attribute には画像ファイルを指定してください。',
    'in'                   => '選択された :attribute は正しくありません。',
    'in_array'             => ':attribute は :other に存在しません。',
    'integer'              => ':attribute には整数を指定してください。',
    'ip'                   => ':attribute には有効なIPアドレスを指定してください。',
    'ipv4'                 => ':attribute には有効なIPv4アドレスを指定してください。',
    'ipv6'                 => ':attribute には有効なIPv6アドレスを指定してください。',
    'json'                 => ':attribute には正しいJSON文字列を指定してください。',
    'lt'                   => [
        'numeric' => ':attribute には、:value より小さな値を指定してください。',
        'file'    => ':attribute には、:value KBより小さなファイルを指定してください。',
        'string'  => ':attribute には、:value 文字より少ない文字を指定してください。',
        'array'   => ':attribute には、:value 個より少ない要素を指定してください。',
    ],
    'lte'                  => [
        'numeric' => ':attribute には、:value 以下の値を指定してください。',
        'file'    => ':attribute には、:value KB以下のファイルを指定してください。',
        'string'  => ':attribute には、:value 文字以下の文字を指定してください。',
        'array'   => ':attribute には、:value 個以下の要素を指定してください。',
    ],
    'max'                  => [
        'numeric' => ':attribute には、:max 以下の値を指定してください。',
        'file'    => ':attribute には、:max KB以下のファイルを指定してください。',
        'string'  => ':attribute には、:max 文字以下の文字列を指定してください。',
        'array'   => ':attribute には、:max 個以下の要素を指定してください。',
    ],
    'mimes'                => ':attribute には :values タイプのファイルを指定してください。',
    'mimetypes'            => ':attribute には :values タイプのファイルを指定してください。',
    'min'                  => [
        'numeric' => ':attribute には、少なくとも :min を指定してください。',
        'file'    => ':attribute には、少なくとも :min KBのファイルを指定してください。',
        'string'  => ':attribute は、少なくとも :min 文字以上にしてください。',
        'array'   => ':attribute には、少なくとも :min 個の要素を含めてください。',
    ],
    'not_in'               => '選択された :attribute は正しくありません。',
    'not_regex'            => ':attribute の形式が正しくありません。',
    'numeric'              => ':attribute には数値を指定してください。',
    'password'             => 'パスワードが正しくありません。',
    'present'              => ':attribute が存在している必要があります。',
    'regex'                => ':attribute の形式が正しくありません。',
    'required'             => ':attribute は必須です。',
    'required_if'          => ':other が :value の場合、:attribute は必須です。',
    'required_unless'      => ':other が :values でない限り、:attribute は必須です。',
    'required_with'        => ':values が指定されている場合、:attribute は必須です。',
    'required_with_all'    => ':values が全て指定されている場合、:attribute は必須です。',
    'required_without'     => ':values が指定されていない場合、:attribute は必須です。',
    'required_without_all' => ':values のいずれも指定されていない場合、:attribute は必須です。',
    'same'                 => ':attribute と :other が一致している必要があります。',
    'size'                 => [
        'numeric' => ':attribute には :size を指定してください。',
        'file'    => ':attribute には :size KBのファイルを指定してください。',
        'string'  => ':attribute は :size 文字である必要があります。',
        'array'   => ':attribute には :size 個の要素を含めてください。',
    ],
    'starts_with'          => ':attribute は、次のいずれかで始まる必要があります: :values',
    'string'               => ':attribute には文字を指定してください。',
    'timezone'             => ':attribute には有効なタイムゾーンを指定してください。',
    'unique'               => ':attribute の値は既に存在しています。',
    'uploaded'             => ':attribute のアップロードに失敗しました。',
    'url'                  => ':attribute は有効なURLではありません。',
    'uuid'                 => ':attribute は有効なUUIDである必要があります。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'カスタムメッセージ',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'title'=>'タイトル',
        'content'=>'ブログ内容'
    ],

];
  
