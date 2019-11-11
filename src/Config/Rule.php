<?php

declare(strict_types=1);

namespace Joolen\CS\Config;

class Rule extends Config
{
    /**
     * Whether to allow risky rules.。
     *
     * @var bool
     */
    public const RISKEY_ALLOWED = true;

    /**
     * Rule list for PHP7.1 and above.
     *
     * @var array
     */
    public const RULES = [
        '@PHP71Migration' => true,
        '@PHP71Migration:risky' => true,
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'align_multiline_comment' => ['comment_type' => 'phpdocs_like'],
        'array_syntax' => ['syntax' => 'short'],
        'blank_line_before_statement' => false,
        'cast_spaces' => ['space' => 'none'],
        'combine_consecutive_unsets' => true,
        'concat_space' => ['spacing' => 'one'],
        'global_namespace_import' => [
            'import_classes' => true,
            'import_constants' => null,
            'import_functions' => null,
        ],
        'heredoc_to_nowdoc' => true,
        'is_null' => ['use_yoda_style' => false],
        'list_syntax' => null,
        'native_function_invocation' => false,
        'no_extra_consecutive_blank_lines' => ['tokens' => ['continue', 'parenthesis_brace_block', 'extra', 'return']],
        'no_multiline_whitespace_before_semicolons' => true,
        'no_null_property_initialization' => true,
        'no_php4_constructor' => true,
        'no_short_echo_tag' => false,
        'no_superfluous_elseif' => true,
        'no_superfluous_phpdoc_tags' => false,
        'no_unneeded_curly_braces' => true,
        'no_unneeded_final_method' => true,
        'no_unreachable_default_argument_value' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'non_printable_character' => ['use_escape_sequences_in_strings' => true],
        'not_operator_with_space' => false,
        'not_operator_with_successor_space' => false,
        'php_unit_strict' => true,
        'phpdoc_add_missing_param_annotation' => ['only_untyped' => false],
        'phpdoc_annotation_without_dot' => null,
        'phpdoc_no_alias_tag' => false,
        'phpdoc_order' => true,
        'phpdoc_separation' => false,
        'phpdoc_summary' => null,
        'phpdoc_types_order' => true,
        'return_type_declaration' => true,
        'single_trait_insert_per_statement' => false,
        'strict_comparison' => true,
        'strict_param' => true,
        'void_return' => false,
        'yoda_style' => false,
    ];

    /**
     * @param string $name config name
     */
    public function __construct(string $name = 'php-default')
    {
        parent::__construct($name);
    }
}
