# System Thinking & Project Reflection

## 1. Problem Overview

The objective of this project was to build a functional, responsive, and SEO-optimized WordPress landing page for a real estate brand (Worknoon), while demonstrating technical implementation, performance optimization, and system-level thinking.

---

## 2. Approach to the Solution

The project was approached by combining speed of development with scalability and SEO best practices.

### Architecture:

* **WordPress** as the core CMS
* **Elementor** for front-end page building
* **WPForms Lite** for handling user contact submissions
* **Yoast SEO** for on-page SEO structure
* **Performance plugin** for caching and speed optimization
* **Google Analytics** for tracking user behavior

The goal was to create a modular and easily extendable system while maintaining performance.

---

## 3. Key Decisions and Why

* **Elementor** was chosen for rapid UI development and responsiveness
* **WPForms Lite** was used for quick and reliable form integration
* **Yoast SEO** was implemented to handle meta tags, sitemap, and SEO structure
* A caching plugin was added to improve load time and Core Web Vitals

These decisions prioritized efficiency, usability, and maintainability.

---

## 4. Tradeoffs Considered

* Page builders like Elementor increase DOM size and can impact performance
* Using multiple plugins improves functionality but may introduce overhead
* A custom theme would offer better performance but require more development time

The chosen approach balanced speed of delivery with acceptable performance.

---

## 5. Challenges Encountered and Solutions

* **Hosting limitations (InfinityFree):** File upload limits and server restrictions
  → Worked around by optimizing file sizes and adjusting deployment approach

* **HTTP 500 error after deployment:**
  → Debugged by checking server configuration and file structure

* **Performance optimization:**
  → Resolved using caching plugins and optimizing assets

---

## 6. Affiliate Tracking / Onboarding Systems

Although not fully implemented, an affiliate or referral system can be integrated using:

* Tools like FirstPromoter for tracking referrals and conversions
* Custom implementation using:

  * Unique referral links
  * User meta tracking
  * Event-based tracking in WordPress

This would allow tracking of user acquisition and reward distribution.

---

## 7. Experience with Tools like FirstPromoter

While not directly implemented in this project, tools like FirstPromoter provide:

* Automated referral tracking
* Dashboard for affiliates
* Integration with web applications

Such tools are useful for scaling user acquisition systems without building from scratch.

---

## 8. What I Would Improve

If rebuilding the project:

* Develop a **custom WordPress theme** to reduce dependency on page builders
* Implement **Custom Post Types (CPTs)** for property listings
* Improve **Core Web Vitals** further by reducing unused CSS/JS
* Add a **backend dashboard** for managing listings dynamically
* Implement structured internal linking for better SEO

