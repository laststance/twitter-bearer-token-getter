# Twitter Bearertoken Getter

This is a CLI tool for developers using twitter api.([Official document](https://dev.twitter.com/oauth/reference/post/oauth2/token))

In order to acquire a bearer token, you need to send a POST request directly to the endpoint of twitter api.

We have to send some information to the 'Authorization' HTTP Header with credentialization, the process is a little troublesome.

It is a tool to alleviate such trouble and to obtain a bearer token easily.

# Environment
rather php 5

# Requirements
1. Consumer Key(API Key)
2. Consumer Secret (API Secret)

# Installation

```
git clone git@github.com:ryota-murakami/twitter-bearertoken-getter.git
```

# Run

```
cd twitter-bearertoken-getter
./getBearerToken.php
```

After Run,
You will be prompted for the consumer key and consumer secret interactively at the terminal so please enter them according to the console message.

If the above two information are correctly entered, a bearer token will be displayed on the terminal.
