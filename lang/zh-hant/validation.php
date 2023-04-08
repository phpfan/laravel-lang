<?php

return [

    /*
    |--------------------------------------------------------------------------
    | 驗証語言行
    |--------------------------------------------------------------------------
    |
    | 以下語言行包含驗証類使用的默認錯誤消息。
    | 其中一些規則有多個版本，例如尺寸規則。
    | 隨意調整這裡的每條消息。
    |
    */

    'accepted' => ':attribute 字段必須被接受。',
    'accepted_if' => '當 :other 爲 :value 時，:attribute 字段必須被接受。',
    'active_url' => ':attribute 字段必須是一個有效的 URL。',
    'after' => ':attribute 字段必須是 :date 之後的日期。',
    'after_or_equal' => ':attribute 字段必須是等於或晚於 :date 的日期。',
    'alpha' => ':attribute 字段隻能包含字母。',
    'alpha_dash' => ':attribute 字段隻能包含字母、數字、破折號和下劃線。',
    'alpha_num' => ':attribute 字段隻能包含字母和數字。',
    'array' => ':attribute 字段必須是一個數組。',
    'ascii' => ':attribute 字段隻能包含單字節字母數字字符和符號。',
    'before' => ':attribute 字段必須是 :date 之前的日期。',
    'before_or_equal' => ':attribute 字段必須是等於或早於 :date 的日期。',
    'between' => [
    'array' => ':attribute 字段必須在 :min 和 :max 項之間。',
        'file' => ':attribute 字段必須介於 :min 和 :max 千字節之間。',
        'numeric' => ':attribute 字段必須介於 :min 和 :max 之間。',
        'string' => ':attribute 字段必須介於 :min 和 :max 字符之間。',
    ],
    'boolean' => ':attribute 字段必須爲 true 或 false。',
    'confirmed' => ':attribute 字段的確認不匹配。',
    'current_password' => '密碼不正確。',
    'date' => ':attribute 字段必須是一個有效的日期。',
    'date_equals' => ':attribute 字段必須是等於 :date 的日期。',
    'date_format' => ':attribute 字段必須與格式 :format 相匹配。',
    'decimal' => ':attribute 字段必須有 :decimal 位小數。',
    'declined' => ':attribute 字段必須被拒絶。',
    'declined_if' => '當 :other 爲 :value 時，:attribute 字段必須被拒絶。',
    'different' => ':attribute 字段和 :other 必須不同。',
    'digits' => ':attribute 字段必須是 :digits 位數字。',
    'digits_between' => ':attribute 字段必須介於 :min 和 :max 位數字之間。',
    'dimensions' => ':attribute 字段的圖片尺寸無效。',
    'distinct' => ':attribute 字段具有重複值。',
    'doesnt_end_with' => ':attribute 字段不能以以下內容結尾：:values。',
    'doesnt_start_with' => ':attribute 字段不能以以下內容開頭：:values。',
    'email' => ':attribute 字段必須是一個有效的電子郵件地址。',
    'ends_with' => ':attribute 字段必須以以下內容結尾：:values。',
    'exclude_unless' => '除非 :other 爲 :values，否則 :attribute 字段必須排除。',
    'exclude_if' => '如果 :other 爲 :value，則 :attribute 字段必須排除。',
    'exists' => '選定的 :attribute 無效。',
    'file' => ':attribute 字段必須是一個文件。',
    'filled' => ':attribute 字段必須有一個值。',
    'gt' => [
    'array' => ':attribute 字段必須多於 :value 項。',
        'file' => ':attribute 字段必須大於 :value 千字節。',
        'numeric' => ':attribute 字段必須大於 :value。',
        'string' => ':attribute 字段必須多於 :value 個字符。',
    ],
    'gte' => [
    'array' => ':attribute 字段必須包含 :value 項或更多。',
        'file' => ':attribute 字段必須大於或等於 :value 千字節。',
        'numeric' => ':attribute 字段必須大於或等於 :value。',
        'string' => ':attribute 字段必須包含 :value 個字符或更多。',
    ],
    'image' => ':attribute 字段必須是一個圖像。',
    'in' => '選定的 :attribute 無效。',
    'in_array' => ':attribute 字段不存在於 :other 中。',
    'integer' => ':attribute 字段必須是一個整數。',
    'ip' => ':attribute 字段必須是一個有效的 IP 地址。',
    'ipv4' => ':attribute 字段必須是一個有效的 IPv4 地址。',
    'ipv6' => ':attribute 字段必須是一個有效的 IPv6 地址。',
    'json' => ':attribute 字段必須是一個有效的 JSON 字符串。',
    'lowercase' => ':attribute 字段必須爲小冩。',
    'lt' => [
    'array' => ':attribute 字段必須少於 :value 項。',
        'file' => ':attribute 字段必須小於 :value 千字節。',
        'numeric' => ':attribute 字段必須小於 :value。',
        'string' => ':attribute 字段必須少於 :value 個字符。',
    ],
    'lte' => [
    'array' => ':attribute 字段不能包含超過 :value 項。',
        'file' => ':attribute 字段必須小於或等於 :value 千字節。',
        'numeric' => ':attribute 字段必須小於或等於 :value。',
        'string' => ':attribute 字段必須包含 :value 個字符或更少。',
    ],
    'mac_address' => ':attribute 字段必須是有效的 MAC 地址。',
    'max' => [
    'array' => ':attribute 字段不能包含超過 :max 項。',
        'file' => ':attribute 字段不能大於 :max 千字節。',
        'numeric' => ':attribute 字段不能大於 :max。',
        'string' => ':attribute 字段不能多於 :max 個字符。',
    ],
    'max_digits' => ':attribute 字段不能超過 :max 位數字。',
    'mimes' => ':attribute 字段必須是 :values 類型的文件。',
    'mimetypes' => ':attribute 字段必須是以下類型的文件：:values。',
    'min' => [
    'array' => ':attribute 字段必須至少包含 :min 項。',
        'file' => ':attribute 字段必須至少爲 :min 千字節。',
        'numeric' => ':attribute 字段必須至少爲 :min。',
        'string' => ':attribute 字段必須至少包含 :min 個字符。',
    ],
    'min_digits' => ':attribute 字段至少需要 :min 位數字。',
    'missing' => ':attribute 字段必須缺失。',
    'missing_if' => '當 :other 爲 :value 時，:attribute 字段必須缺失。',
    'missing_unless' => '除非 :other 爲 :value，否則 :attribute 字段必須缺失。',
    'missing_with' => '當 :values 存在時，:attribute 字段必須缺失。',
    'missing_with_all' => '當 :values 都存在時，:attribute 字段必須缺失。',
    'multiple_of' => ':attribute 字段必須是 :value 的倍數。',
    'not_in' => '選定的 :attribute 無效。',
    'not_regex' => ':attribute 字段的格式無效。',
    'numeric' => ':attribute 字段必須是一個數字。',
    'password' => [
    'letters' => ':attribute 字段必須至少包含一個字母。',
        'mixed' => ':attribute 字段必須至少包含一個大冩字母和一個小冩字母。',
        'numbers' => ':attribute 字段必須至少包含一個數字。',
        'symbols' => ':attribute 字段必須至少包含一個符號。',
        'uncompromised' => '提供的 :attribute 曾出現在數據洩露中。請爲 :attribute 選擇一個不同的值。',
    ],
    'present' => ':attribute 字段必須存在。',
    'prohibited' => ':attribute 字段是禁止的。',
    'prohibited_if' => '當 :other 爲 :value 時，:attribute 字段是禁止的。',
    'prohibited_unless' => '除非 :other 在 :values 中，否則 :attribute 字段是禁止的。',
    'prohibits' => ':attribute 字段禁止 :other 存在。',
    'regex' => ':attribute 字段格式無效。',
    'required' => ':attribute 字段爲必填項。',
    'required_array_keys' => ':attribute 字段必須包含以下條目：:values。',
    'required_if' => '如果 :other 爲 :value，則 :attribute 字段爲必填項。',
    'required_unless' => '除非 :other 位於 :values 中，否則 :attribute 字段爲必填項。',
    'required_with' => '如果 :values 存在，則 :attribute 字段爲必填項。',
    'required_with_all' => '如果 :values 存在，則 :attribute 字段爲必填項。',
    'required_without' => '如果 :values 不存在，則 :attribute 字段爲必填項。',
    'required_without_all' => '如果 :values 都不存在，則 :attribute 字段爲必填項。',
    'same' => ':attribute 和 :other 字段必須匹配。',
    'size' => [
    'array' => ':attribute 字段必須包含 :size 項。',
        'file' => ':attribute 字段必須爲 :size 千字節。',
        'numeric' => ':attribute 字段必須爲 :size。',
        'string' => ':attribute 字段必須包含 :size 個字符。',
    ],
    'starts_with' => ':attribute 字段必須以以下內容開頭：:values。',
    'string' => ':attribute 字段必須是一個字符串。',
    'timezone' => ':attribute 字段必須是一個有效的時區。',
    'unique' => ':attribute 已經被佔用。',
    'uploaded' => ':attribute 上傳失敗。',
    'uppercase' => ':attribute 字段必須爲大冩。',
    'url' => ':attribute 字段的格式無效。',
    'ulid' => ':attribute 字段必須是有效的 ULID。',
    'uuid' => ':attribute 字段必須是一個有效的 UUID。',

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
    'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
