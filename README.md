# php-cs-fixer-rules

Shared [PHP-CS-Fixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer) rule sets.

## Files

| File | Purpose |
|------|---------|
| `.php-cs-fixer.dist.php` | Full ruleset (almost every non-deprecated rule) |
| `.php-cs-fixer.dist.min.php` | Minimal ruleset for quick smoke tests |

## Usage

Copy the desired file into your project as `.php-cs-fixer.dist.php` (or require/include it from your own config), then run:

```bash
vendor/bin/php-cs-fixer fix --config=.php-cs-fixer.dist.php --dry-run --diff
```

The full ruleset has `riskyAllowed` enabled. Adjust `Finder` paths (`src` by default) to match your project layout.

## Notes (full ruleset)

- Deprecated rules were migrated to their successors (e.g. `braces` → `braces_position` + related, `new_with_braces` → `new_with_parentheses`, `visibility_required` → `modifier_keywords`).
- Intentionally left **disabled**: `native_constant_invocation`, `native_function_casing`, `native_function_invocation`, `phpdoc_add_missing_param_annotation`, `simplified_null_return`.
- Intentionally **omitted** (conflicts or needs project-specific config):
  - `group_import` (conflicts with `single_import_per_statement`)
  - `not_operator_with_space` (conflicts with `not_operator_with_successor_space`)
  - `general_attribute_remove` / `general_phpdoc_annotation_remove` (require an explicit remove list)
