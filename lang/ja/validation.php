<?php

return [

    /*
    |--------------------------------------------------------------------------
    | バリデーション言語行
    |--------------------------------------------------------------------------
    |
    | 以下の言語行はバリデーションルールに対応するデフォルトメッセージです。
    | ":attribute" はフィールド名に置き換えられます。
    |
    */

    'accepted'             => ':attribute を承認してください。',
    'active_url'           => ':attribute は有効なURLではありません。',
    'after'                => ':attribute には :date 以降の日付を指定してください。',
    'after_or_equal'       => ':attribute には :date 以降または同じ日付を指定してください。',
    'alpha'                => ':attribute には文字のみを指定してください。',
    'alpha_dash'           => ':attribute には文字、数字、ハイフン、アンダースコアのみを指定してください。',
    'alpha_num'            => ':attribute には文字と数字のみを指定してください。',
    'array'                => ':attribute には配列を指定してください。',
    'before'               => ':attribute には :date 以前の日付を指定してください。',
    'before_or_equal'      => ':attribute には :date 以前または同じ日付を指定してください。',
    'between'              => [
        'numeric' => ':attribute には :min から :max の間の数字を指定してください。',
        'file'    => ':attribute には :min KB から :max KB の間のファイルを指定してください。',
        'string'  => ':attribute は :min 文字から :max 文字の間で指定してください。',
        'array'   => ':attribute の項目は :min 個から :max 個の間で指定してください。',
    ],
    'boolean'              => ':attribute には true か false を指定してください。',
    'confirmed'            => ':attribute の確認が一致しません。',
    'date'                 => ':attribute は有効な日付ではありません。',
    'date_equals'          => ':attribute には :date と同じ日付を指定してください。',
    'date_format'          => ':attribute の形式は :format と一致しません。',
    'different'            => ':attribute と :other には異なる値を指定してください。',
    'digits'               => ':attribute は :digits 桁でなければなりません。',
    'digits_between'       => ':attribute は :min 桁から :max 桁の間で指定してください。',
    'dimensions'           => ':attribute の画像サイズが無効です。',
    'distinct'             => ':attribute の値が重複しています。',
    'email'                => ':attribute には有効なメールアドレスを指定してください。',
    'exists'               => '選択された :attribute は正しくありません。',
    'file'                 => ':attribute にはファイルを指定してください。',
    'filled'               => ':attribute に値を入力してください。',
    'gt'                   => [
        'numeric' => ':attribute には :value より大きい数字を指定してください。',
        'file'    => ':attribute には :value KB より大きいファイルを指定してください。',
        'string'  => ':attribute は :value 文字より長く指定してください。',
        'array'   => ':attribute の項目は :value 個より多く指定してください。',
    ],
    'gte'                  => [
        'numeric' => ':attribute には :value 以上の数字を指定してください。',
        'file'    => ':attribute には :value KB 以上のファイルを指定してください。',
        'string'  => ':attribute は :value 文字以上で指定してください。',
        'array'   => ':attribute の項目は :value 個以上で指定してください。',
    ],
    'image'                => ':attribute には画像を指定してください。',
    'in'                   => '選択された :attribute は正しくありません。',
    'in_array'             => ':attribute は :other に存在しません。',
    'integer'              => ':attribute には整数を指定してください。',
    'ip'                   => ':attribute には有効なIPアドレスを指定してください。',
    'ipv4'                 => ':attribute には有効なIPv4アドレスを指定してください。',
    'ipv6'                 => ':attribute には有効なIPv6アドレスを指定してください。',
    'json'                 => ':attribute には有効なJSON文字列を指定してください。',
    'lt'                   => [
        'numeric' => ':attribute には :value より小さい数字を指定してください。',
        'file'    => ':attribute には :value KB より小さいファイルを指定してください。',
        'string'  => ':attribute は :value 文字より短く指定してください。',
        'array'   => ':attribute の項目は :value 個より少なくしてください。',
    ],
    'lte'                  => [
        'numeric' => ':attribute には :value 以下の数字を指定してください。',
        'file'    => ':attribute には :value KB 以下のファイルを指定してください。',
        'string'  => ':attribute は :value 文字以下で指定してください。',
        'array'   => ':attribute の項目は :value 個以下で指定してください。',
    ],
    'max'                  => [
        'numeric' => ':attribute には :max 以下の数字を指定してください。',
        'file'    => ':attribute には :max KB 以下のファイルを指定してください。',
        'string'  => ':attribute は :max 文字以下で指定してください。',
        'array'   => ':attribute の項目は :max 個以下で指定してください。',
    ],
    'mimes'                => ':attribute には :values タイプのファイルを指定してください。',
    'mimetypes'            => ':attribute には :values タイプのファイルを指定してください。',
    'min'                  => [
        'numeric' => ':attribute には :min 以上の数字を指定してください。',
        'file'    => ':attribute には :min KB 以上のファイルを指定してください。',
        'string'  => ':attribute は :min 文字以上で指定してください。',
        'array'   => ':attribute の項目は :min 個以上で指定してください。',
    ],
    'not_in'               => '選択された :attribute は正しくありません。',
    'not_regex'            => ':attribute の形式が正しくありません。',
    'numeric'              => ':attribute には数字を指定してください。',
    'password'             => 'パスワードが正しくありません。',
    'present'              => ':attribute フィールドが存在している必要があります。',
    'regex'                => ':attribute の形式が正しくありません。',
    'required'             => ':attribute は必須です。',
    'required_if'          => ':attribute は :other が :value の場合必須です。',
    'required_unless'      => ':attribute は :other が :values でない場合必須です。',
    'required_with'        => ':attribute は :values がある場合必須です。',
    'required_with_all'    => ':attribute は :values がある場合必須です。',
    'required_without'     => ':attribute は :values がない場合必須です。',
    'required_without_all' => ':attribute は :values が全てない場合必須です。',
    'same'                 => ':attribute と :other が一致する必要があります。',
    'size'                 => [
        'numeric' => ':attribute は :size でなければなりません。',
        'file'    => ':attribute は :size KB でなければなりません。',
        'string'  => ':attribute は :size 文字でなければなりません。',
        'array'   => ':attribute の項目は :size 個でなければなりません。',
    ],
    'starts_with'          => ':attribute は次のいずれかで始まる必要があります: :values',
    'string'               => ':attribute には文字列を指定してください。',
    'timezone'             => ':attribute には有効なタイムゾーンを指定してください。',
    'unique'               => ':attribute はすでに存在しています。',
    'uploaded'             => ':attribute のアップロードに失敗しました。',
    'url'                  => ':attribute の形式が正しくありません。',
    'uuid'                 => ':attribute は有効なUUIDである必要があります。',

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション属性
    |--------------------------------------------------------------------------
    |
    | ":attribute" をよりわかりやすい名前に置き換えることができます。
    |
    */

    'attributes' => [],

];
