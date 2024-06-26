# sp-magento-plugin

## Description
Provide a brief description of what your Magento plugin does. Mention the main features and the problem it solves.

## Prerequisites
- **Magento Version:** Specify the Magento versions your plugin is compatible with (e.g., Magento 2.4.x).
- **PHP Version:** Specify the PHP version required (e.g., PHP 7.4 or later).

## Installation
### Using Composer
1. Navigate to the root of your Magento installation.
2. Run the following command:
    ```sh
    composer require Sourcepoint/Sourcepointcmp
    ```
3. Enable the module:
    ```sh
    php bin/magento module:enable Sourcepoint_Sourcepointcmp
    ```
4. Run setup upgrade:
    ```sh
    php bin/magento setup:upgrade
    ```
5. Deploy static content (if in production mode):
    ```sh
    php bin/magento setup:static-content:deploy
    ```

### Manually
1. Download the plugin and unzip it.
2. Copy the contents to `app/code/Sourcepoint/Sourcepointcmp`.
3. Enable the module:
    ```sh
    php bin/magento module:enable Sourcepoint_Sourcepointcmp
    ```
4. Run setup upgrade:
    ```sh
    php bin/magento setup:upgrade
    ```
5. Deploy static content (if in production mode):
    ```sh
    php bin/magento setup:static-content:deploy
    ```

## Configuration
This Magento plugin adds a new tab in the Store Configuration allowing users to type in property and account settings. Additionally, it provides options to add code to the Sourcepoint event callbacks.
## Usage
Provide instructions on how to use the plugin. Include examples and screenshots if necessary.

## Contribution
Explain how others can contribute to the development of the plugin. Provide guidelines for contributing, such as code style, pull requests, etc.

## License
This plugin is licensed under the [MIT License](LICENSE).

## Support
For any issues, please create a new issue in the [GitHub repository](https://github.com/SourcePointUSA/sp-magento-plugin).
