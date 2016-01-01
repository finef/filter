TODO
====

- FilterChain
```
FilterChain extends FilterAbstract implements IteratorAggregate, Coutable {
    addFilter(FilterInterface $filter)
    addFilters(array $filters)
    removeFilters()
    merge(FilterChain $chain)
    addFilterByName($name, FilterInterface $filter)
    addFiltersByName(array $filters)
    removeFilterByName($name)
}
```

- BaseName
- Blacklist
- Boolean
- UriSchemeSet {set/getDefaultScheme(), set/getScheme() }
