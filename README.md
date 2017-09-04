[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Certly/functions?utm_source=RapidAPIGitHub_CertlyFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Certly Package
Certly develops a number of APIs to retrieve threat intelligence.
* Domain: [certly.io](https://landing.certly.io/)
* Credentials: token

## How to get credentials: 
1. Sign in [certly.io](https://guard.certly.io/).
2. Navigate to dashboard.
3. Copy API key

 ## Custom datatypes:
  |Datatype|Description|Example
  |--------|-----------|----------
  |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
  |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
  |List|Simple array|```["123", "sample"]```
  |Select|String with predefined values|```sample```
  |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 
## Certly.lookupUrl
This is what you want to call when scanning URLs from user-generated content.

| Field| Type       | Description
|------|------------|----------
| token| Credentials| Your certly token
| raw  | String     | Comment or forum post which will be parsed by Certly for URLs.
| url  | String     | If you do not specify raw, you must specify the URL to scan here.
| ip   | String     | You are encouraged to optionally pass the visitor's IPv4 address in this field.

