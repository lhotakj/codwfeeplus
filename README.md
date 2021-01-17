# codwfeeplus
A prestashop module for implementing Cash On Delivery with a fee with a lot of options.
## Features
* Compatible with multiple currencies and multiple shops
* Ability to either integrate the COD fee with the Carrier's fee, or add a dummy product in the order to reflect the fee with configurable tax.
* Many parameters to check for in order to apply the fee (cart total, delivery country, delivery zone, carrier, customer group, product categories, manufacturers, suppliers).
* Many ways to calculate the fee (fixed value, percentage of the cart value or a combination of the two).
* All parameters are defined in conditions, which each calculates a fee if is validated. You can choose to use the first one that was validated, or add all of the successful ones to define the fee.
* Ability to test a scenario to see if your condition will produce the desirable fee.
* Ability to store all the purchases done with this module, with a complete log of how the fee was calculated.
* Ability to check (or autocheck if configured) for an update.
## Installation
Just like any prestashop module. Just zip the codwfeeplus folder and upload your zip file to the prestashop modules page, selecting to add a module.
