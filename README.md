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

## Usage
Once installed and configured, the function checks if a logged-in user (excluding administrators) is accessing any of the restricted pages. If so, the user is redirected to the specified URL. No additional action is required from the site administrator after setup.

## Customization Tips
- Multiple Pages: To restrict access to multiple pages, add their IDs to the $restricted_page_ids array.
- Role-Based Redirects: Modify the conditional check within the function to target different user roles or capabilities as needed.
  
## Support
This snippet is provided as-is without warranty. If you encounter any issues or require customization beyond the provided functionality, consider hiring a WordPress developer.

## Contributing
Feedback and contributions to improve this snippet are welcome. Please feel free to suggest enhancements or submit pull requests.

## License
This snippet is open-source and can be used freely in personal and commercial projects under the terms of the GNU General Public License.


```php
$restricted_page_ids = array(133); // Replace 133 with your actual page IDs
