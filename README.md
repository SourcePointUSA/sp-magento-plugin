<img src="/images/logo.png" width=25%>

# Sourcepoint CMP Magento Plugin

Sourcepoint's CMP Magento plugin enables your organization to quickly and easily deploy a consent message experience configured within the Sourcepoint portal onto your webpage for multiple regulatory and industry frameworks.

- [Prerequisites](#prerequisites)
- [Install Sourcepoint CMP Magento Plugin](#install-sourcepoint-magento-plugin)
- [Configure Sourcepoint CMP Magento Plugin](#configure-sourcepoint-magento-plugin)
- [Support](#support)

> The following sections assume that you have configured the necessary vendor lists, messages and other campaign entities for your web property within the Sourcepoint portal. [Click here](https://docs.sourcepoint.com/hc/en-us) to visit the Sourcepoint help center for more information.

## Prerequisites

The following prerequisites must be satisfied in order to utilize the Sourcepoint Magento plugin:

- **Sourcepoint Script Version**? Compatible with web properties using multi-campaign (4.x.x) 
- **Magento Version:** Magento 2.x.x+
- **PHP Version:** PHP 8+

## Install Sourcepoint CMP Magento Plugin

The plugin supports two installation methods:

- [Using Composer](#using-composer)
- [Manually](#manually)

### Using Composer

Install the Sourcepoint Magento plugin using Composer by performing the following:

1. Navigate to the root of your Magento installation
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

1. Download and unzip the plugin
2. Copy the contents to `app/code/Sourcepoint/Sourcepointcmp`
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

## Configure Sourcepoint CMP Magento Plugin

> Ensure that your organization has configured the necessary vendor list(s) and campaign entities for your web property within the Sourcepoint portal before saving your configuration. [Click here](https://docs.sourcepoint.com/hc/en-us) to visit the Sourcepoint help center for more information.

Once the Sourcepoint CMP Magento plugin is installed, navigate to **Stores** and click **Configuration** from the menu. Select the **Sourcepoint CMP Configuration** tab.

From the subsequent page your organization can enter its account information, campaign message types, and add any custom code to Sourcepoint event callbacks. Please refer to the tables below on each availble field

#### Sourcepoint Consent Management and Campaign Settings

The following fields identify for your organization's account, property, and message configuration in Sourcepoint's tags.

| **Field**                    | **Description**                                                                                                                                                                                                                                                                                                                                                                           |
| ---------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Switch on the CMP Experience | Indicates whether the CMP messaging experience being configured in the plugin should be added to your webpage.                                                                                                                                                                                                                                                                            |
| Sourcepoint Account ID       | The `accountId` value associates the property with your organization's Sourcepoint account. Your organization's `accountId` can be retrieved by contacting your Sourcepoint Account Manager or via the **My Account** page in your Sourcepoint account.                                                                                                                                   |
| propertyHref                 | Maps the implementation to a specific URL as set up in the Sourcepoint account dashboard.                                                                                                                                                                                                                                                                                                 |
| joinHref                     | When enabled, will ensure that all directory regular expression functionality works in conjunction with the propertyHref parameter. The joinHref parameter is solely used to test your implementation across different servers while still allowing for URL RegEx matching. For these reasons, Sourcepoint strongly recommends that joinHref is enabled to ensure full CMP functionality. |
| CNAME'd baseEndpoint         | The baseEndpoint is a single server endpoint that serves the messaging experience. By default the baseEndpoint is https://cdn.privacy-mgmt.com however it can be changed to a [CNAME first-party subdomain](https://docs.sourcepoint.com/hc/en-us/articles/4405397441043-Configure-subdomain-with-CNAME-DNS-record) to persist first-party cookies on Safari web browser.                 |
| Enable GDPR                  | Enable if your property has a GDPR TCF message campaign configured for the web property.                                                                                                                                                                                                                                                                                                  |
| Enable USNAT                 | Enable if your property has a U.S. Multi-State Privacy message campaign configured for the web property.                                                                                                                                                                                                                                                                                  |
| Enable CCPA (Legacy US)      | Enable if your property has a U.S. Privacy (Legacy) message campaign configured for the web property.                                                                                                                                                                                                                                                                                     |

#### Sourcepoint Event Callbacks

The following callbacks can be utilized by your organization to include custom code to be executed in response to key events (e.g. when an end-user clicks a specific button). [Click here](https://docs.sourcepoint.com/hc/en-us/articles/4405397484307-Event-callbacks) for detailed information on the return data for each callback.
| **Event Callback** | **Description** |
|--------------------------|----------------------------------------------------------------------------------|
| `onConsentReady` | Event callback fires when the consent object is ready. |
| `onError` | Event callback fires when an error occurs. |
| `onMessageChoiceSelect` | Event callback fires when a call-to-action button in a message has been clicked. |
| `onPrivacyManagerAction` | Event callback fires when a privacy manager button has been clicked. |

Click **Save Config** when finished. If **Switch on the CMP Experience** is enabled, Sourcepoint's tags will be added to your webpage and your consent message experience will be delivered in accordance with your scenario configuration.

## Support

For any issues, please create a new issue in the [GitHub repository](https://github.com/SourcePointUSA/sp-magento-plugin).
