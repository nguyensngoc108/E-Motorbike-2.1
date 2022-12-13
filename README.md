# TopTech - E-commerce Django App Project

[![Build Status](https://travis-ci.org/adrian80z/e-commerce.svg?branch=master)](https://travis-ci.org/adrian80z/e-commerce)

**Link to live version - [TopTech](https://e-toptech.herokuapp.com/)**

TopTech is a e-commerce web application that allows users to search for products stored in database, add them to shopping cart and then make payment using Stripe. App has login system functionality. The guest user is able to browse, search and add product to cart only. Checkout and payment option is available for registerd users.

## UX

The purpose of the the project is to create a e-commerce app for everyone interested in shopping online. Layout is simple and clear. Project is accesible through all modern browsers on both desktop and mobile devices. For build the front-end functionality CSS, HTML and JavaScript is used and for back-end logic, Python with Django framework is used. As it's e-commerce app payments options is available by using Stripe API.

#### User Stories

- As a user I want easily search for product - it is achieved by using search bar available on menubar
- As a user I want to find more details about product - after click on selected product user is redirected to page with all details about chosen product
- As a user I want to add product to cart - user is able to add product to cart and select quantity if required (1 is default value)
- As a user I want to update / delete items from cart - user is able to update and delete items on cart page
- As a user I want to pay for chosen product - after registration/login user is able to access checkout page
- As a business owner I want to expand my business and increase sales
  - it is achieved by building online presence

#### Layout

The layout is simple and consistent through all modern browsers. The project has been designed with a mobile first approach and it is fully responsive across devices. To achieve this Bootstrap 4 components library was used along with custom styles.
Project consist following pages:

- Products(homepage)
  - page where are displayed all products in form of card with image and short info about specs and price of each product
- Product Details
  - Page include all details about selected product - image, description, main components summary, price and add to cart button with input field allowing select product quantity
- Cart page / empty cart
  - Page allows to review what is in cart - Image thumbnail is displayed along with product name and possibility for user to change quantity or delete item completely.
    Page include total price for all product placed in cart. Below that there are two buttons, one placed on right hand side and second on the left hand side of the screen allowing user to continue shopping(left button) or go to checkout(right button). When we remove all items cart icon is displayed with short info that cart is empty and user can go back shopping by clicking _Continue Shopping_ button
- Search page / no search results
  - Page displays searching results in form similar to homepage. There is a card with image and short info about specs and price of each product.
    When keyword enter into searchbox isn't match any product, search icon is displayed along with text informing user that product is not found.
- Checkout page (available after user login)
  - Page similar to cart page but the difference is that user can't update any product details. This is summary before payment. Page displays product thumbnail, name, quantity, price and total price. Below that user has payment form to fill in with user details and card details. After payment user is redirected to homepage.
- Login
  - Page allows user to login (user get access to checkout page and payment functionality)
- Registration
  - Page allows user to create an account (user get access to login functionality)

#### Wireframes

- [Mobile Layout](https://github.com/adrian80z/e-commerce/tree/master/wireframes/Mobile)
- [Desktop Layaut](https://github.com/adrian80z/e-commerce/tree/master/wireframes/Desktop)

## Features

The app can be accessible with or without user registration, but in that case some features will be available after registration only (checkout).
Anyone is able to perform search, view results, all details about selected product, add product to cart, view and modify product on cart page.

#### Existing Features

- search bar - allows user to search product by keyword. Return all products where search keywords appears
- login/register system - allows user access full app functionality
- logout
- back to top arrow - scrolling to top of page
- flash messages apperars after user login/registration, add/update/delete and purchase product (disappears after 5s)
- user can't access payment page without registration/login
- after adding product to cart small badge with product quantity appears on menubar beside cart icon
- Stripe payment integration
- short product info cards on homepage
- function preventing access restricted page(checkout) without registration/login

#### Features Left to Implement

- add some gallery image on product details page
- create categories (category model has been created and relation to product exist, but there is no views implemented for categories)
- create pagination
- create contact page
- add confirmation email after purchase (currently only flash message appears)
- add filters to search option (currently only search by any keyword is available)
- customers reviews

## Technologies used

- **[Heroku](https://heroku.com/)** - is a platform that enables developers to build, run, and operate applications entirely in the cloud
- **[GitHub](https://github.com/)** - provides hosting for software development version control using Git.
- **[Git](https://git-scm.com/)** - version-control system for tracking changes in source code during software development.
- **[Google Fonts](https://fonts.google.com/)** - library of free licensed fonts, an interactive web directory for browsing the library, and APIs for conveniently using the fonts via CSS ('Lato' font used in this project).
- **[Python](https://www.python.org/)** - programming language.
- **[JavaScript](https://en.wikipedia.org/wiki/JavaScript)** - used to program the behavior of Web pages.
- **[jQuery](https://jquery.com)** - JavaScript library designed to simplify HTML DOM tree traversal and manipulation
- **[HTML5](https://en.wikipedia.org/wiki/HTML5)** - standard markup language for creating Web pages.
- **[CSS3](https://en.wikipedia.org/wiki/Cascading_Style_Sheets#CSS_3)** - used to define styles for Web pages, including the design, layout and variations in display for different devices and screen sizes.
- **[VS Code](https://code.visualstudio.com/)** - code editor redefined and optimized for building and debugging modern web and cloud applications.
- **[Bootstrap 4](https://getbootstrap.com/)** - free and open-source CSS framework directed at responsive, mobile-first front-end web development.
- **[AWS S3](https://aws.amazon.com/)** - service offered by Amazon Web Services that provides object storage through a web service interface.
- **[Django](https://docs.djangoproject.com/en/1.11/)** - a Python-based free and open-source web framework, which follows the model-template-view architectural pattern.
- **[Stipe](https://stripe.com/ie)** - a payment company that allows individuals and businesses to make and receive payments over the Internet
- **[Balsamiq](https://balsamiq.com/)** - a web-based user interface design tool for creating wireframe
- **[Travis Ci](travis-ci.org)** - hosted continuous integration service used to build and test software projects hosted at GitHub and Bitbucket.

## Testing

### Automated testing

For the testing following tools and services was used:

- **[Chrome Developer Tools](https://developers.google.com/web/tools/chrome-devtools)** - a set web authoring and debugging tools built into Google Chrome.
- **[CSS Validation](https://jigsaw.w3.org/css-validator/)** -service helps to check validity of Cascading Style Sheets (CSS).
- **[Markup Validation](https://validator.w3.org/)** - helps check the validity of Web documents.
- **[JSLint](https://jslint.com/)** - a static code analysis tool used for checking if JavaScript source code complies with coding rules.

All validation tests passed: no errors in the DevTools console. CSS and JavaScript have correct syntax as well. The HTML validator did not recognise the Django template tags which resulted in showing errors.

The website was constantly tested by Travis CI each time it was pushed to git. All test are passed as is indicated on the top of this README.MD file page by green Travis CI icon.

### Manual testing

Manual testing was performed by clicking every element on page which can be clicked.

1. Search form

   - Available all the time on menubar
   - Try to submit empty form and verify that an error message about required fields appear - form doesn't have required attribute. After submiting returning page with all available products.
   - Try to submit the form with valid input and verify that a success message appears (after entering keyword user is redirected to results page and the product matches searching criteria are displayed)

2) Login form page

   - Go to Products(homepage) page
   - Click Log in link on navigation bar (user is redirected to login page)
   - Try to submit empty form and verify that an error message about required fields appear(required field message appears)
   - Try to submit the form with valid input and verify that a success message appears (user is redirected to homepage with successful login message)
   - Try to submit the form with invalid input and verify that a error message appears (_Your username or password is incorrect_ message appears)

3. Registration form page

   - Go to Product(homepage) page
   - Click Log in link on navigation bar (user is redirected to registration page)
   - Click _Create account_ button below the login form
   - Try to submit empty form and verify that an error message about required fields appear (required field message appears)
   - Try to submit the form with valid input and verify that a success message appears (user is redirected to homepage with success message)
   - Try to submit the form with invalid input and verify that a error message appears (_Unable to register your account_ message appears)
   - Click _Sign In_ under _Create account_ button (user is redirected to login page with success message)

4. Add to cart form

   - Go to Product details page
   - Try to submit empty form and verify that an error message about required fields appear (required message appears)
   - Try to submit the form with valid input and verify that a success message appears (_Item added to your cart. View cart_ message appears)
   - Try to submit the form with invalid input and verify that a error message appears.(field has html5 type _number_ attribute and initial default value 1 preventing entering invalid input)

5. Cart form

   - Go to the Cart page
   - Try to submit empty form and verify that an error message about required fields appear (required message appears)
   - Try to submit the form with valid input and verify that a success message appears (_Cart updated_ message appears)
   - Try to submit the form with invalid input and verify that a error message appears (field has html5 type _number_ attribute preventing entering invalid input and also has initial value number of the specific item, which was selected on _add to cart_ page)
   - Click _Trash_ icon - item is deleted from cart (message appears)
   - Click _Shoppig_ button (user is redirected to products page (homepage))
   - Click _Checkout_ button (user is redirected to checkout page)

6. Payment user details/ credit card form

   - Go to Checkout page
   - Try to submit empty form and verify that an error message about required fields appear (required message appears)
   - Try to submit the form with valid input and verify that a success message appears (user is redirected to homepage and message appears)
   - Try to submit the form with invalid input and verify that a error message appears (use different card number cause error message appears)

   All fields in user details form have required attribute. Credit card forms has required attr set to false as there is some issue and payment cannot be successfully proceed.

   For Stripe payment test following details need to be used:

   Card number - 4242424242424242

   CVC - any 3 digit number

   Expiry date - any date in the future

8) Site navigation

   - Click on _Home_ link (redirect to index/homepage)
   - Click on logo/brand link (redirect to index/homepage)
   - Click on _Log in_ link (redirect to login page form)
   - Click on _Register_ link (redirect to registration page form)
   - Click on _Cart_ link (redirect to cart page)
   - Click on _Logout_ link (user is logged out)
   - Click on Back to top arrow icon (page is scrolling up)

   All links are working and pointing to correct place.There are no dead links.

9) Services(homepage)
   - Click on selected product card (user is redirected to chosen product on product details page)

## Deployment

The project was developed, committed to git and pushed to GitHub using Visual Studio Code IDE.

The project was deployed using Heroku as a hosting platform. Static files and media files are stored using AWS S3 storage service.


#### Acknowledgements

- I received inspiration for this project through internet research. I visited websites such as [Currys](https://www.currys.ie/ieen/computing/laptops/laptops/315_3226_30328_xx_xx/xx-criteria.html), [Harvey Norman](https://www.harveynorman.ie/computing/laptops/), [D.I.D](https://www.did.ie/laptops-notebooks) and watched youtube tutorials, which helped me to put all the pieces together.
- Many thanks to my mentor Victor Miclovich for all suggestions and possible solutions to various issues encountered during project development process.
