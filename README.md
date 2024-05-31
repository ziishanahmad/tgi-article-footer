Sure, here is the detailed code for your `README.md` file:

```markdown
# TGI Article Footer

This is a WordPress plugin that adds a custom footer to your articles.

## Description

The TGI Article Footer plugin appends a custom message at the end of each article. It is designed to enhance user engagement by providing additional information or calls-to-action.

## Features

- Adds a custom footer message to all single post articles.
- Customizable footer content through the plugin code.
- Simple and lightweight plugin.

## Installation

### From the WordPress Dashboard

1. Download the `tgi-article-footer.zip` file from the repository.
2. Navigate to the 'Plugins' menu in WordPress.
3. Click 'Add New'.
4. Click 'Upload Plugin'.
5. Choose the `tgi-article-footer.zip` file from your computer.
6. Click 'Install Now'.
7. Activate the plugin through the 'Plugins' menu in WordPress.

### Manual Installation

1. Download the `tgi-article-footer.zip` file from the repository.
2. Extract the contents of the zip file.
3. Upload the extracted `tgi-article-footer` folder to the `/wp-content/plugins/` directory.
4. Activate the plugin through the 'Plugins' menu in WordPress.

## Usage

Once activated, the plugin will automatically add a custom footer to all single posts. The default footer message is:

```
Thank you for reading! Visit our website for more articles.
```

You can customize the message in the footer by editing the plugin code in the `tgi-article-footer.php` file. Locate the following code block and modify the content within the `<p>` tags:

```php
$footer = '<div class="tgi-article-footer">';
$footer .= '<p>Thank you for reading! Visit our website for more articles.</p>';
$footer .= '</div>';
```

## Customization

### CSS Customization

The plugin includes a CSS file to style the footer. You can customize the styles by editing the `style.css` file located in the `css` directory. The default styles are:

```css
.tgi-article-footer {
    margin-top: 20px;
    padding: 10px;
    background-color: #f9f9f9;
    border-top: 1px solid #e9e9e9;
    text-align: center;
}
```

### Changing Footer Message

To change the footer message, edit the content in the `tgi_add_custom_footer` function in the `tgi-article-footer.php` file. For example:

```php
$footer = '<div class="tgi-article-footer">';
$footer .= '<p>Your new custom message here.</p>';
$footer .= '</div>';
```

## Frequently Asked Questions

### How can I disable the footer for a specific post?

Currently, the plugin does not support disabling the footer for specific posts. You can modify the plugin code to add this functionality if needed.

### Will this plugin slow down my website?

No, the TGI Article Footer plugin is lightweight and should not significantly impact your website's performance.

## Contributing

If you would like to contribute to the development of this plugin, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes and commit them (`git commit -am 'Add new feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.

## License

This plugin is licensed under the MIT License. See the LICENSE file for more details.
```
