# blacklist-filter
Filter incoming connections from blacklisted zones

Blacklists should be .txt files under /blacklists directory, named according to a country's iso code.
Check code to edit redirect URLs

blacklisted zone URL example:
http://YOUR-DOMAIN/PATH/?f95bd403-bf16-4dc9-bf7d-d64f3f5fcd00&zone=110317-.io01QLHYMkLGsTBTLtZ&country=us&clickID={kp}

required GET parameters:
- zone
- country
