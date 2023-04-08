<?php

return [

    /*
    |--------------------------------------------------------------------------
    | バリデーション言語ファイル
    |--------------------------------------------------------------------------
    |
    | 以下の言語行には、バリデータクラスで使用されるデフォルトのエラーメッセージが含まれています。
    | サイズルールなど、いくつかのルールには複数のバージョンがあります。各メッセージをここで調整してください。
    |
    */

    'accepted' => ':attributeフィールドは承認されなければなりません。',
    'accepted_if' => ':otherが:valueの場合、:attributeフィールドは承認されなければなりません。',
    'active_url' => ':attributeフィールドは有効なURLである必要があります。',
    'after' => ':attributeフィールドは:dateより後の日付でなければなりません。',
    'after_or_equal' => ':attributeフィールドは:date以降の日付でなければなりません。',
    'alpha' => ':attributeフィールドは文字のみを含める必要があります。',
    'alpha_dash' => ':attributeフィールドは、文字、数字、ダッシュ、アンダースコアのみを含める必要があります。',
    'alpha_num' => ':attributeフィールドは、文字と数字のみを含める必要があります。',
    'array' => ':attributeフィールドは配列である必要があります。',
    'ascii' => ':attributeフィールドは単バイト英数字文字と記号のみを含める必要があります。',
    'before' => ':attributeフィールドは:dateより前の日付でなければなりません。',
    'before_or_equal' => ':attributeフィールドは:date以前の日付でなければなりません。',
    'between' => [
        'array' => ':attributeフィールドは:minと:maxの間のアイテム数でなければなりません。',
        'file' => ':attributeフィールドは:minと:maxキロバイトの間でなければなりません。',
        'numeric' => ':attributeフィールドは:minと:maxの間でなければなりません。',
        'string' => ':attributeフィールドは:minと:max文字の間でなければなりません。',
    ],
    'boolean' => ':attributeフィールドはtrueまたはfalseである必要があります。',
    'confirmed' => ':attributeフィールドの確認が一致しません。',
    'current_password' => 'パスワードが間違っています。',
    'date' => ':attributeフィールドは有効な日付でなければなりません。',
    'date_equals' => ':attributeフィールドは:dateと等しい日付でなければなりません。',
    'date_format' => ':attributeフィールドは:format形式に一致する必要があります。',
    'decimal' => ':attributeフィールドは:decimal小数点以下の桁数でなければなりません。',
    'declined' => ':attributeフィールドは拒否されなければなりません。',
    'declined_if' => ':otherが:valueの場合、:attributeフィールドは拒否されなければなりません。',
    'different' => ':attributeフィールドと:otherは異なっている必要があります。',
    'digits' => ':attributeフィールドは:digits桁でなければなりません。',
    'digits_between' => ':attributeフィールドは:min桁から:max桁の間でなければなりません。',
    'dimensions' => ':attributeフィールドは無効な画像サイズです。',
    'distinct' => ':attributeフィールドに重複した値があります。',
    'doesnt_end_with' => ':attributeフィールドは次のうちのいずれかで終わってはなりません: :values。',
    'doesnt_start_with' => ':attributeフィールドは次のうちのいずれかで始まってはなりません: :values。',
    'email' => ':attributeフィールドは有効なメールアドレスでなければなりません。',
    'ends_with' => ':attributeフィールドは次のいずれかで終わらなければなりません: :values。',
    'enum' => '選択された:attributeは無効です。',
    'exists' => '選択された:attributeは無効です。',
    'file' => ':attributeフィールドはファイルでなければなりません。',
    'filled' => ':attributeフィールドには値が必要です。',
    'gt' => [
        'array' => ':attributeフィールドは:valueより多くのアイテムが必要です。',
        'file' => ':attributeフィールドは:valueキロバイトより大きい必要があります。',
        'numeric' => ':attributeフィールドは:valueより大きい必要があります。',
        'string' => ':attributeフィールドは:value文字より多く必要です。',
    ],
    'gte' => [
        'array' => ':attributeフィールドは:valueアイテム以上必要です。',
        'file' => ':attributeフィールドは:valueキロバイト以上である必要があります。',
        'numeric' => ':attributeフィールドは:value以上である必要があります。',
        'string' => ':attributeフィールドは:value文字以上である必要があります。',
    ],
    'image' => ':attributeフィールドは画像でなければなりません。',
    'in' => '選択された:attributeは無効です。',
    'in_array' => ':attributeフィールドは:otherに存在しなければなりません。',
    'integer' => ':attributeフィールドは整数でなければなりません。',
    'ip' => ':attributeフィールドは有効なIPアドレスでなければなりません。',
    'ipv4' => ':attributeフィールドは有効なIPv4アドレスでなければなりません。',
    'ipv6' => ':attributeフィールドは有効なIPv6アドレスでなければなりません。',
    'json' => ':attributeフィールドは有効なJSON文字列でなければなりません。',
    'lowercase' => ':attribute フィールドはすべて小文字でなければなりません。',
    'lt' => [
        'array' => ':attributeフィールドは:valueより少ないアイテムが必要です。',
        'file' => ':attributeフィールドは:valueキロバイトより小さい必要があります。',
        'numeric' => ':attributeフィールドは:valueより小さい必要があります。',
        'string' => ':attributeフィールドは:value文字より少ない必要があります。',
    ],
    'lte' => [
        'array' => ':attributeフィールドは:valueアイテム以下である必要があります。',
        'file' => ':attributeフィールドは:valueキロバイト以下である必要があります。',
        'numeric' => ':attributeフィールドは:value以下である必要があります。',
        'string' => ':attributeフィールドは:value文字以下である必要があります。',
    ],
    'mac_address' => ':attribute フィールドは有効なMACアドレスでなければなりません。',
    'max' => [
        'array' => ':attributeフィールドは:maxアイテム以下である必要があります。',
        'file' => ':attributeフィールドは:maxキロバイト以下である必要があります。',
        'numeric' => ':attributeフィールドは:max以下である必要があります。',
        'string' => ':attributeフィールドは:max文字以下である必要があります。',
    ],
    'max_digits' => ':attribute フィールドは :max 桁を超えてはなりません。',
    'mimes' => ':attributeフィールドは:valuesタイプのファイルでなければなりません。',
    'mimetypes' => ':attributeフィールドは:valuesタイプのファイルでなければなりません。',
    'min' => [
        'array' => ':attributeフィールドは:minアイテム以上である必要があります。',
        'file' => ':attributeフィールドは:minキロバイト以上である必要があります。',
        'numeric' => ':attributeフィールドは:min以上である必要があります。',
        'string' => ':attributeフィールドは:min文字以上である必要があります。',
    ],
    'min_digits' => ':attribute フィールドは少なくとも :min 桁必要です。',
    'missing' => ':attribute フィールドが欠けている必要があります。',
    'missing_if' => ':other が :value の場合、:attribute フィールドが欠けている必要があります。',
    'missing_unless' => ':other が :value でない場合、:attribute フィールドが欠けている必要があります。',
    'missing_with' => ':values が存在する場合、:attribute フィールドが欠けている必要があります。',
    'missing_with_all' => ':values が存在する場合、:attribute フィールドが欠けている必要があります。',
    'multiple_of' => ':attributeフィールドは:valueの倍数である必要があります。',
    'not_in' => '選択された:attributeは無効です。',
    'not_regex' => ':attributeフィールドの形式が無効です。',
    'numeric' => ':attributeフィールドは数値でなければなりません。',
    'password' => [
        'letters' => ':attribute フィールドには少なくとも1つの文字が含まれている必要があります。',
        'mixed' => ':attribute フィールドには少なくとも1つの大文字と1つの小文字が含まれている必要があります。',
        'numbers' => ':attribute フィールドには少なくとも1つの数字が含まれている必要があります。',
        'symbols' => ':attribute フィールドには少なくとも1つの記号が含まれている必要があります。',
        'uncompromised' => '指定された :attribute はデータ漏洩で使用されています。別の :attribute を選択してください。',
    ],
    'present' => ':attributeフィールドが存在しなければなりません。',
    'prohibited' => ':attributeフィールドは禁止されています。',
    'prohibited_if' => ':attributeフィールドは:otherが:valueの場合、禁止されています。',
    'prohibited_unless' => ':attributeフィールドは:otherが:valuesのいずれかでない限り、禁止されています。',
    'prohibits' => ':attribute フィールドは、:other が存在しないことを要求します。',
    'relatable' => 'この:attributeはリソースに関連付けることができません。',
    'required' => ':attributeフィールドは必須です。',
    'required_array_keys' => ':attribute フィールドには、:values のエントリが含まれている必要があります。',
    'required_if' => ':otherフィールドが:valueの場合、:attributeフィールドは必須です。',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless' => ':otherフィールドが:valuesのいずれかでない場合、:attributeフィールドは必須です。',
    'required_with' => ':valuesが存在する場合、:attributeフィールドは必須です。',
    'required_with_all' => ':valuesがすべて存在する場合、:attributeフィールドは必須です。',
    'required_without' => ':valuesが存在しない場合、:attributeフィールドは必須です。',
    'required_without_all' => ':valuesがすべて存在しない場合、:attributeフィールドは必須です。',
    'same' => ':attributeフィールドと:otherは一致しなければなりません。',
    'size' => [
        'array' => ':attributeフィールドは:sizeアイテムである必要があります。',
        'file' => ':attributeフィールドは:sizeキロバイトである必要があります。',
        'numeric' => ':attributeフィールドは:sizeである必要があります。',
        'string' => ':attributeフィールドは:size文字である必要があります。',
    ],
    'starts_with' => ':attributeフィールドは次のいずれかで始まらなければなりません: :values。',
    'string' => ':attributeフィールドは文字列でなければなりません。',
    'timezone' => ':attributeフィールドは有効なタイムゾーンでなければなりません。',
    'unique' => ':attributeは既に存在しています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'uppercase' => ':attribute フィールドはすべて大文字でなければなりません。',
    'url' => ':attributeフィールドの形式が無効です。',
    'ulid' => ':attribute フィールドは有効なULIDでなければなりません。',
    'uuid' => ':attributeフィールドは有効なUUIDでなければなりません。',

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション言語行
    |--------------------------------------------------------------------------
    |
    | ここでは、属性に対してカスタムバリデーションメッセージを指定できます。
    | "attribute.rule" の規則で行を名前付けすることができます。
    | これにより、特定の属性ルールに対するカスタム言語行を素早く指定できます。
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション属性
    |--------------------------------------------------------------------------
    |
    | 次の言語行は、属性プレースホルダをもっと読みやすいものに置き換えるために使用されます。
    | 例えば、"email" の代わりに "Eメールアドレス" などです。これは単純に、メッセージをもっと表現豊かにするためです。
    |
    */

    'attributes' => [],

];
