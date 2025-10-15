# Junior Dev Signature

**Version:** 1.0  
**Author:** [Kayiira Edward](https://github.com/kayiira-edward)  
**License:** GPL2  

## Description
The **Junior Dev Signature** plugin is a simple WordPress plugin built as part of a practical assessment.  
It demonstrates how to use **WordPress hooks (actions and filters)** to extend site functionality.
The plugin adds a **custom footer message** and **modifies post titles** with a developer signature.
## Features
Adds a footer message:  
> *"Built by a Junior Developer © 2025"*

Appends a signature to post titles:  
> *"title_text" → "title_text | Junior Dev Project"*

>Lightweight — no dependencies or extra setup needed.  
>Uses WordPress native action (`wp_footer`) and filter (`the_title`).  
>Fully compatible with the **Twenty Twenty-Five** theme.

## File Structure
>junior-dev-signature/
       >>junior-dev-signature.php
## Installation
1. Download or clone this repository:
       git clone https://github.com/kayiira-edward/junior-dev-signature.git
2. Move the folder into your local WordPress installation:
    **wp-content/plugins/**
3. Go to your WordPress dashboard → Plugins → Installed Plugins.
4. Activate Junior Dev Signature.
