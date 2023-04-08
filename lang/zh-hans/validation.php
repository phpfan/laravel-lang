<?php

return [

    /*
    |--------------------------------------------------------------------------
    | 验证语言行
    |--------------------------------------------------------------------------
    |
    | 以下语言行包含验证类使用的默认错误消息。
    | 其中一些规则有多个版本，例如尺寸规则。
    | 随意调整这里的每条消息。
    |
    */

    'accepted' => ':attribute 字段必须被接受。',
    'accepted_if' => '当 :other 为 :value 时，:attribute 字段必须被接受。',
    'active_url' => ':attribute 字段必须是一个有效的 URL。',
    'after' => ':attribute 字段必须是 :date 之后的日期。',
    'after_or_equal' => ':attribute 字段必须是等于或晚于 :date 的日期。',
    'alpha' => ':attribute 字段只能包含字母。',
    'alpha_dash' => ':attribute 字段只能包含字母、数字、破折号和下划线。',
    'alpha_num' => ':attribute 字段只能包含字母和数字。',
    'array' => ':attribute 字段必须是一个数组。',
    'ascii' => ':attribute 字段只能包含单字节字母数字字符和符号。',
    'before' => ':attribute 字段必须是 :date 之前的日期。',
    'before_or_equal' => ':attribute 字段必须是等于或早于 :date 的日期。',
    'between' => [
        'array' => ':attribute 字段必须在 :min 和 :max 项之间。',
        'file' => ':attribute 字段必须介于 :min 和 :max 千字节之间。',
        'numeric' => ':attribute 字段必须介于 :min 和 :max 之间。',
        'string' => ':attribute 字段必须介于 :min 和 :max 字符之间。',
    ],
    'boolean' => ':attribute 字段必须为 true 或 false。',
    'confirmed' => ':attribute 字段的确认不匹配。',
    'current_password' => '密码不正确。',
    'date' => ':attribute 字段必须是一个有效的日期。',
    'date_equals' => ':attribute 字段必须是等于 :date 的日期。',
    'date_format' => ':attribute 字段必须与格式 :format 相匹配。',
    'decimal' => ':attribute 字段必须有 :decimal 位小数。',
    'declined' => ':attribute 字段必须被拒绝。',
    'declined_if' => '当 :other 为 :value 时，:attribute 字段必须被拒绝。',
    'different' => ':attribute 字段和 :other 必须不同。',
    'digits' => ':attribute 字段必须是 :digits 位数字。',
    'digits_between' => ':attribute 字段必须介于 :min 和 :max 位数字之间。',
    'dimensions' => ':attribute 字段的图片尺寸无效。',
    'distinct' => ':attribute 字段具有重复值。',
    'doesnt_end_with' => ':attribute 字段不能以以下内容结尾：:values。',
    'doesnt_start_with' => ':attribute 字段不能以以下内容开头：:values。',
    'email' => ':attribute 字段必须是一个有效的电子邮件地址。',
    'ends_with' => ':attribute 字段必须以以下内容结尾：:values。',
    'exclude_unless' => '除非 :other 为 :values，否则 :attribute 字段必须排除。',
    'exclude_if' => '如果 :other 为 :value，则 :attribute 字段必须排除。',
    'exists' => '选定的 :attribute 无效。',
    'file' => ':attribute 字段必须是一个文件。',
    'filled' => ':attribute 字段必须有一个值。',
    'gt' => [
        'array' => ':attribute 字段必须多于 :value 项。',
        'file' => ':attribute 字段必须大于 :value 千字节。',
        'numeric' => ':attribute 字段必须大于 :value。',
        'string' => ':attribute 字段必须多于 :value 个字符。',
    ],
    'gte' => [
        'array' => ':attribute 字段必须包含 :value 项或更多。',
        'file' => ':attribute 字段必须大于或等于 :value 千字节。',
        'numeric' => ':attribute 字段必须大于或等于 :value。',
        'string' => ':attribute 字段必须包含 :value 个字符或更多。',
    ],
    'image' => ':attribute 字段必须是一个图像。',
    'in' => '选定的 :attribute 无效。',
    'in_array' => ':attribute 字段不存在于 :other 中。',
    'integer' => ':attribute 字段必须是一个整数。',
    'ip' => ':attribute 字段必须是一个有效的 IP 地址。',
    'ipv4' => ':attribute 字段必须是一个有效的 IPv4 地址。',
    'ipv6' => ':attribute 字段必须是一个有效的 IPv6 地址。',
    'json' => ':attribute 字段必须是一个有效的 JSON 字符串。',
    'lowercase' => ':attribute 字段必须为小写。',
    'lt' => [
        'array' => ':attribute 字段必须少于 :value 项。',
        'file' => ':attribute 字段必须小于 :value 千字节。',
        'numeric' => ':attribute 字段必须小于 :value。',
        'string' => ':attribute 字段必须少于 :value 个字符。',
    ],
    'lte' => [
        'array' => ':attribute 字段不能包含超过 :value 项。',
        'file' => ':attribute 字段必须小于或等于 :value 千字节。',
        'numeric' => ':attribute 字段必须小于或等于 :value。',
        'string' => ':attribute 字段必须包含 :value 个字符或更少。',
    ],
    'mac_address' => ':attribute 字段必须是有效的 MAC 地址。',
    'max' => [
        'array' => ':attribute 字段不能包含超过 :max 项。',
        'file' => ':attribute 字段不能大于 :max 千字节。',
        'numeric' => ':attribute 字段不能大于 :max。',
        'string' => ':attribute 字段不能多于 :max 个字符。',
    ],
    'max_digits' => ':attribute 字段不能超过 :max 位数字。',
    'mimes' => ':attribute 字段必须是 :values 类型的文件。',
    'mimetypes' => ':attribute 字段必须是以下类型的文件：:values。',
    'min' => [
        'array' => ':attribute 字段必须至少包含 :min 项。',
        'file' => ':attribute 字段必须至少为 :min 千字节。',
        'numeric' => ':attribute 字段必须至少为 :min。',
        'string' => ':attribute 字段必须至少包含 :min 个字符。',
    ],
    'min_digits' => ':attribute 字段至少需要 :min 位数字。',
    'missing' => ':attribute 字段必须缺失。',
    'missing_if' => '当 :other 为 :value 时，:attribute 字段必须缺失。',
    'missing_unless' => '除非 :other 为 :value，否则 :attribute 字段必须缺失。',
    'missing_with' => '当 :values 存在时，:attribute 字段必须缺失。',
    'missing_with_all' => '当 :values 都存在时，:attribute 字段必须缺失。',
    'multiple_of' => ':attribute 字段必须是 :value 的倍数。',
    'not_in' => '选定的 :attribute 无效。',
    'not_regex' => ':attribute 字段的格式无效。',
    'numeric' => ':attribute 字段必须是一个数字。',
    'password' => [
        'letters' => ':attribute 字段必须至少包含一个字母。',
        'mixed' => ':attribute 字段必须至少包含一个大写字母和一个小写字母。',
        'numbers' => ':attribute 字段必须至少包含一个数字。',
        'symbols' => ':attribute 字段必须至少包含一个符号。',
        'uncompromised' => '提供的 :attribute 曾出现在数据泄露中。请为 :attribute 选择一个不同的值。',
    ],
    'present' => ':attribute 字段必须存在。',
    'prohibited' => ':attribute 字段是禁止的。',
    'prohibited_if' => '当 :other 为 :value 时，:attribute 字段是禁止的。',
    'prohibited_unless' => '除非 :other 在 :values 中，否则 :attribute 字段是禁止的。',
    'prohibits' => ':attribute 字段禁止 :other 存在。',
    'regex' => ':attribute 字段格式无效。',
    'required' => ':attribute 字段为必填项。',
    'required_array_keys' => ':attribute 字段必须包含以下条目：:values。',
    'required_if' => '如果 :other 为 :value，则 :attribute 字段为必填项。',
    'required_unless' => '除非 :other 位于 :values 中，否则 :attribute 字段为必填项。',
    'required_with' => '如果 :values 存在，则 :attribute 字段为必填项。',
    'required_with_all' => '如果 :values 存在，则 :attribute 字段为必填项。',
    'required_without' => '如果 :values 不存在，则 :attribute 字段为必填项。',
    'required_without_all' => '如果 :values 都不存在，则 :attribute 字段为必填项。',
    'same' => ':attribute 和 :other 字段必须匹配。',
    'size' => [
        'array' => ':attribute 字段必须包含 :size 项。',
        'file' => ':attribute 字段必须为 :size 千字节。',
        'numeric' => ':attribute 字段必须为 :size。',
        'string' => ':attribute 字段必须包含 :size 个字符。',
    ],
    'starts_with' => ':attribute 字段必须以以下内容开头：:values。',
    'string' => ':attribute 字段必须是一个字符串。',
    'timezone' => ':attribute 字段必须是一个有效的时区。',
    'unique' => ':attribute 已经被占用。',
    'uploaded' => ':attribute 上传失败。',
    'uppercase' => ':attribute 字段必须为大写。',
    'url' => ':attribute 字段的格式无效。',
    'ulid' => ':attribute 字段必须是有效的 ULID。',
    'uuid' => ':attribute 字段必须是一个有效的 UUID。',

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
