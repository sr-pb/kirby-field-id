# Kirby Field ID

Generates a unique ID for fields until UUID's are implemented in structure fields.

It's just an extension of `k-text-field` with a unique value.

Can be useful for global tags created within a structure:

```yaml
fields:
  tags:
    type: structure
    label: Tags
    fields:
      title:
        type: text
      id:
        type: fieldid
```

## Installation

### Download

Download and copy this repository to `/site/plugins/field-id`.

### Git submodule

```
git submodule add https://github.com/sr-pb/kirby-field-id.git site/plugins/field-id.
```
