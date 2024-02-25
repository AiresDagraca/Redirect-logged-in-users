# Redirect Logged-In Users Excluding Admins

This WordPress snippet redirects logged-in users, excluding administrators, away from specified pages to a designated URL. It's particularly useful for restricting access to certain content on your site based on user roles.

## Features

- Redirects logged-in users away from specified pages.
- Excludes administrators from the redirect to allow full access.
- Customizable for any page ID and redirection URL.

## Installation

1. **Copy the Snippet**: Copy the provided PHP code.
2. **Add to WordPress**: Paste the code into your theme's `functions.php` file or a custom plugin.

## Configuration

### Set Restricted Page IDs
Replace the placeholder in the `$restricted_page_ids` array with the actual IDs of the pages you want to restrict.

```php
$restricted_page_ids = array(133); // Replace 133 with your actual page IDs


