<?php
/**
 * Optimized Front Page Template - Smooth Performance
 * Cool design without heavy animations
 */

get_header(); ?>

<!-- SEO & Structured Data (JSON-LD) -->
<?php
// Dynamic meta title/description
$site_name = get_bloginfo('name');
$site_desc = get_bloginfo('description');
$page_title = "Latest Lottery Results, Winning Numbers & Jackpots | $site_name";
$page_desc = "Get the most up-to-date lottery results, winning numbers, jackpots, stats, and play tips for all Spanish state lotteries, including EuroMillions, La Primitiva, and more. Updated daily!";
$canonical_url = home_url();
?>
<title><?php echo esc_html($page_title); ?></title>
<meta name="description" content="<?php echo esc_attr($page_desc); ?>">
<link rel="canonical" href="<?php echo esc_url($canonical_url); ?>">
<meta property="og:title" content="<?php echo esc_html($page_title); ?>">
<meta property="og:description" content="<?php echo esc_attr($page_desc); ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo esc_url($canonical_url); ?>">
<meta property="og:site_name" content="<?php echo esc_html($site_name); ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo esc_html($page_title); ?>">
<meta name="twitter:description" content="<?php echo esc_attr($page_desc); ?>">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "<?php echo esc_html($site_name); ?>",
  "url": "<?php echo esc_url($canonical_url); ?>",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "<?php echo esc_url($canonical_url); ?>/?s={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>

<style>
/* Performance-focused styles with minimal animations */
body.home {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
    min-height: 100vh;
    overflow-x: hidden;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
}

.site-container, .content-area, .entry-content {
    background: transparent !important;
    max-width: none !important;
    padding: 0 !important;
    margin: 0 !important;
}

.site-header { display: none !important; }
.site-footer { display: none !important; }

/* Simple static background pattern */
.background-pattern {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    opacity: 0.08;
    background-image: 
        radial-gradient(circle at 25% 25%, #fff 2px, transparent 2px),
        radial-gradient(circle at 75% 75%, #fff 1px, transparent 1px);
    background-size: 50px 50px, 30px 30px;
    pointer-events: none;
}

/* Optimized Glass Header */
.custom-lottery-header {
    background: rgba(0, 51, 102, 0.9);
    backdrop-filter: blur(15px);
    color: #fff;
    position: sticky;
    top: 0;
    z-index: 1000;
    width: 100%;
    padding: 0 24px;
    height: 70px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.2);
    border-bottom: 1px solid rgba(255,255,255,0.15);
    transition: background 0.3s ease;
}

.custom-lottery-header:hover {
    background: rgba(0, 51, 102, 0.95);
}

.header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    max-width: 1400px;
    margin: 0 auto;
    height: 100%;
}

.header-logo {
    font-size: 1.5rem;
    color: #fff;
    font-weight: 800;
    text-decoration: none;
    letter-spacing: 2px;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: transform 0.2s ease;
}

.header-logo:hover {
    color: #fff;
    text-decoration: none;
    transform: scale(1.05);
}

.main-nav {
    display: flex;
    align-items: center;
    gap: 30px;
}

.main-nav > a {
    color: #fff;
    text-decoration: none;
    font-weight: 600;
    padding: 10px 18px;
    border-radius: 25px;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 8px;
    background: rgba(255,255,255,0.1);
    border: 1px solid rgba(255,255,255,0.1);
}

.main-nav > a:hover {
    background: rgba(255,255,255,0.2);
    color: #fff;
    text-decoration: none;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    border-color: rgba(255,255,255,0.3);
}

.dropdown {
    position: relative;
}

.dropdown-toggle {
    color: #fff;
    text-decoration: none;
    font-weight: 600;
    padding: 10px 18px;
    border-radius: 25px;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    background: rgba(255,255,255,0.1);
    border: 1px solid rgba(255,255,255,0.1);
}

.dropdown-toggle:hover {
    background: rgba(255,255,255,0.2);
    color: #fff;
    text-decoration: none;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    border-color: rgba(255,255,255,0.3);
}

.dropdown-menu {
    display: none;
    position: absolute;
    right: 0;
    top: 110%;
    background: rgba(255,255,255,0.95);
    backdrop-filter: blur(15px);
    color: #003366;
    min-width: 220px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    border-radius: 15px;
    padding: 15px 0;
    z-index: 300;
    border: 1px solid rgba(255,255,255,0.2);
}

.dropdown:hover .dropdown-menu {
    display: block;
    animation: fadeIn 0.2s ease;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

.dropdown-menu a {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #003366;
    padding: 12px 25px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.2s ease;
}

.dropdown-menu a:hover {
    background: rgba(102, 126, 234, 0.1);
    color: #002244;
    text-decoration: none;
    transform: translateX(8px);
}

/* HERO Section - Simplified */
.lottery-hero {
    padding: 60px 20px;
    max-width: 1400px;
    margin: 0 auto;
    position: relative;
}

.lottery-header {
    background: rgba(255,255,255,0.95);
    backdrop-filter: blur(15px);
    padding: 60px 40px;
    border-radius: 25px;
    text-align: center;
    margin-bottom: 50px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    border: 2px solid rgba(255,255,255,0.3);
}

.lottery-title {
    font-size: clamp(2.5rem, 5vw, 3.5rem);
    font-weight: 900;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin: 0 0 20px 0;
}

.lottery-subtitle {
    font-size: 1.4rem;
    color: #7f8c8d;
    margin: 0 0 30px 0;
    line-height: 1.6;
}

.hero-features {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 30px;
}

.hero-feature {
    text-align: center;
    padding: 25px 20px;
    background: rgba(255,255,255,0.8);
    backdrop-filter: blur(10px);
    border-radius: 18px;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    border: 2px solid rgba(255,255,255,0.5);
}

.hero-feature:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

.hero-feature-icon {
    font-size: 2.5rem;
    margin-bottom: 12px;
    display: block;
}

.hero-feature h3 {
    font-size: 1.1rem;
    font-weight: 700;
    margin: 0 0 10px 0;
    color: #2c3e50;
}

.hero-feature p {
    color: #7f8c8d;
    font-size: 0.95rem;
    margin: 0;
    line-height: 1.5;
}

/* Stats Bar - No heavy animations */
.stats-bar {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 25px;
    margin: 40px 0;
}

.stat-card {
    background: rgba(255,255,255,0.9);
    backdrop-filter: blur(15px);
    padding: 30px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    border: 2px solid rgba(255,255,255,0.3);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.15);
}

.stat-number {
    font-size: 3rem;
    font-weight: 800;
    background: linear-gradient(135deg, #28a745, #20c997);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 10px;
    display: block;
}

.stat-label {
    color: #6c757d;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.9rem;
}

/* Category Results Section */
.category-results-section {
    margin: 50px 0;
}

.section-title {
    font-size: clamp(2rem, 4vw, 2.8rem);
    font-weight: 800;
    background: rgba(255,255,255,0.95);
    backdrop-filter: blur(15px);
    color: #2c3e50;
    padding: 30px 40px;
    border-radius: 20px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    border: 2px solid rgba(255,255,255,0.3);
    margin: 0 auto 40px auto;
    text-align: center;
    max-width: 800px;
    line-height: 1.3;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: -20px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, #667eea, #764ba2);
    border-radius: 2px;
}

.section-subtitle {
    text-align: center;
    font-size: 1.2rem;
    color: rgba(255,255,255,0.95);
    margin-bottom: 40px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(10px);
    padding: 18px 30px;
    border-radius: 25px;
    border: 1px solid rgba(255,255,255,0.2);
    line-height: 1.6;
}

/* Optimized Lottery Cards */
.results-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 30px;
    margin: 50px 0;
}

.lottery-card {
    background: rgba(255,255,255,0.95);
    backdrop-filter: blur(15px);
    border-radius: 25px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    border: 2px solid rgba(255,255,255,0.4);
}

.lottery-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.2);
    border-color: rgba(102, 126, 234, 0.5);
}

/* Different themes for each lottery */
.lottery-card.euromillions .card-header {
    background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
}

.lottery-card.bonoloto .card-header {
    background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
}

.lottery-card.primitiva .card-header {
    background: linear-gradient(135deg, #27ae60 0%, #2ecc71 100%);
}

.lottery-card.elgordo .card-header {
    background: linear-gradient(135deg, #f39c12 0%, #d35400 100%);
}

.lottery-card.eurodreams .card-header {
    background: linear-gradient(135deg, #9b59b6 0%, #8e44ad 100%);
}

.lottery-card.lototurf .card-header {
    background: linear-gradient(135deg, #2ecc71 0%, #16a085 100%);
}

.lottery-card.quintupleplus .card-header {
    background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
}

.lottery-card.quiniela .card-header {
    background: linear-gradient(135deg, #8e44ad 0%, #9b59b6 100%);
}

.card-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 30px;
    text-align: center;
    color: white;
    position: relative;
}

.lottery-name {
    font-size: 1.6rem;
    font-weight: 800;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    text-shadow: 0 2px 8px rgba(0,0,0,0.3);
}

.lottery-icon {
    font-size: 2.2rem;
    filter: drop-shadow(0 3px 6px rgba(0,0,0,0.3));
}

.card-content {
    padding: 35px;
}

.info-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-bottom: 25px;
}

.info-item {
    text-align: center;
    padding: 20px;
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    border-radius: 15px;
    border: 2px solid rgba(255,255,255,0.5);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.info-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.1);
}

.info-label {
    font-size: 0.85rem;
    color: #6c757d;
    font-weight: 700;
    margin-bottom: 8px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.info-value {
    font-size: 1.2rem;
    font-weight: 800;
    color: #2c3e50;
}

.jackpot-value {
    color: #e74c3c !important;
    font-size: 1.4rem !important;
}

.numbers-section {
    margin: 25px 0;
}

.numbers-title {
    font-size: 1.1rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 20px;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.numbers-title::after {
    content: '';
    display: block;
    margin: 8px auto 0;
    width: 50px;
    height: 2px;
    background: linear-gradient(90deg, #667eea, #764ba2);
}

.numbers-display {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    justify-content: center;
}

.number-ball {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: linear-gradient(135deg, #3498db, #2980b9);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 800;
    font-size: 1.2rem;
    box-shadow: 0 4px 12px rgba(52, 152, 219, 0.3);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.number-ball:hover {
    transform: scale(1.15);
    box-shadow: 0 6px 18px rgba(52, 152, 219, 0.5);
}

.star-divider {
    width: 100%;
    text-align: center;
    margin: 15px 0;
    font-weight: bold;
    color: #f39c12;
    font-size: 1rem;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.card-footer {
    padding: 25px 35px;
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    border-top: 1px solid rgba(0,0,0,0.1);
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 15px;
}

.details-btn {
    background: linear-gradient(135deg, #28a745, #20c997);
    color: white;
    padding: 15px 30px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 700;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    transition: all 0.2s ease;
    box-shadow: 0 4px 12px rgba(40, 167, 69, 0.3);
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.9rem;
}

.details-btn:hover {
    background: linear-gradient(135deg, #218838, #1e7e34);
    transform: translateY(-2px);
    text-decoration: none;
    color: white;
    box-shadow: 0 6px 18px rgba(40, 167, 69, 0.4);
}

.view-archive-btn {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    padding: 12px 25px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.2s ease;
    box-shadow: 0 3px 10px rgba(102, 126, 234, 0.3);
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.view-archive-btn:hover {
    background: linear-gradient(135deg, #5a67d8, #6b46c1);
    transform: translateY(-2px);
    text-decoration: none;
    color: white;
    box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
}

/* No Results State */
.no-results {
    grid-column: 1 / -1;
    text-align: center;
    padding: 60px 40px;
    background: rgba(255,255,255,0.95);
    backdrop-filter: blur(15px);
    border-radius: 25px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    border: 2px solid rgba(255,255,255,0.3);
}

.no-results-icon {
    font-size: 5rem;
    margin-bottom: 20px;
    opacity: 0.4;
}

.no-results h3 {
    font-size: 2rem;
    color: #2c3e50;
    margin-bottom: 15px;
    font-weight: 700;
}

.no-results p {
    color: #7f8c8d;
    font-size: 1.2rem;
}

/* View All Section */
.view-all-section {
    text-align: center;
    margin-top: 60px;
}

.view-all-btn {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 20px 40px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 800;
    font-size: 1.2rem;
    display: inline-flex;
    align-items: center;
    gap: 15px;
    transition: all 0.2s ease;
    box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
    text-transform: uppercase;
    letter-spacing: 2px;
}

.view-all-btn:hover {
    background: linear-gradient(135deg, #5a67d8 0%, #6b46c1 100%);
    transform: translateY(-3px);
    text-decoration: none;
    color: white;
    box-shadow: 0 12px 30px rgba(102, 126, 234, 0.5);
}

/* SEO Content */
.seo-content {
    background: rgba(255,255,255,0.95);
    backdrop-filter: blur(15px);
    padding: 50px 40px;
    border-radius: 20px;
    margin: 50px 0;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    border: 2px solid rgba(255,255,255,0.3);
}

.seo-content h2 {
    font-size: 2.5rem;
    font-weight: 800;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 30px;
    text-align: center;
}

.content-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.content-block {
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    padding: 30px;
    border-radius: 15px;
    border: 2px solid rgba(255,255,255,0.5);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.content-block:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

.content-block h3 {
    font-size: 1.4rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.content-block p {
    color: #7f8c8d;
    line-height: 1.7;
    margin-bottom: 20px;
}

.learn-more-btn {
    background: linear-gradient(135deg, #3498db, #2980b9);
    color: white;
    padding: 10px 20px;
    border-radius: 20px;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.2s ease;
    font-size: 0.9rem;
}

.learn-more-btn:hover {
    background: linear-gradient(135deg, #2980b9, #1f5f99);
    transform: translateY(-2px);
    text-decoration: none;
    color: white;
    box-shadow: 0 4px 12px rgba(52, 152, 219, 0.4);
}

/* Social proof */
.social-proof {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 30px;
    margin: 40px 0;
    flex-wrap: wrap;
}

.social-stat {
    text-align: center;
    padding: 25px 20px;
    background: rgba(255,255,255,0.9);
    border-radius: 15px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    border: 2px solid rgba(255,255,255,0.4);
}

.social-stat:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.social-number {
    font-size: 2.5rem;
    font-weight: 800;
    color: #28a745;
    margin-bottom: 5px;
}

.social-label {
    color: #6c757d;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.8rem;
}

/* Responsive Design */
@media (max-width: 1200px) {
    .results-grid {
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 25px;
    }
}

@media (max-width: 768px) {
    .custom-lottery-header {
        padding: 0 15px;
        height: 65px;
    }
    
    .header-logo {
        font-size: 1.3rem;
    }
    
    .main-nav {
        gap: 20px;
    }
    
    .main-nav > a,
    .dropdown-toggle {
        padding: 8px 15px;
        font-size: 0.9rem;
    }
    
    .lottery-title {
        font-size: clamp(2rem, 6vw, 2.8rem);
    }
    
    .lottery-header {
        padding: 40px 25px;
    }
    
    .results-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .info-grid {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .stats-bar {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }
    
    .dropdown-menu {
        right: -50px;
        min-width: 180px;
    }
    
    .hero-features {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .content-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .social-proof {
        gap: 15px;
    }
    
    .card-footer {
        flex-direction: column;
        text-align: center;
    }
    
    .section-title {
        font-size: clamp(1.8rem, 5vw, 2.5rem);
        padding: 25px 20px;
    }
}

@media (max-width: 480px) {
    .lottery-hero {
        padding: 40px 15px;
    }
    
    .lottery-title {
        font-size: clamp(1.8rem, 7vw, 2.2rem);
    }
    
    .lottery-header {
        padding: 30px 20px;
    }
    
    .card-content {
        padding: 25px;
    }
    
    .number-ball {
        width: 45px;
        height: 45px;
        font-size: 1.1rem;
    }
    
    .view-all-btn {
        padding: 15px 30px;
        font-size: 1rem;
    }
    
    .main-nav {
        gap: 15px;
    }
    
    .seo-content {
        padding: 30px 20px;
    }
}

/* Screen reader only class */
.sr-only {
    position: absolute !important;
    width: 1px !important;
    height: 1px !important;
    padding: 0 !important;
    margin: -1px !important;
    overflow: hidden !important;
    clip: rect(0, 0, 0, 0) !important;
    white-space: nowrap !important;
    border: 0 !important;
}
</style>

<!-- Simple background pattern -->
<div class="background-pattern" aria-hidden="true"></div>

<!-- Custom Header Navigation -->
<header class="custom-lottery-header" role="banner" aria-label="Site Navigation">
    <div class="header-container">
        <a href="<?php echo home_url(); ?>" class="header-logo" aria-label="<?php echo esc_attr($site_name); ?> Homepage">
            <span class="icon" aria-hidden="true">🎲</span> Lottery Home
        </a>
        <nav class="main-nav" role="navigation" aria-label="Primary Site Navigation">
            <a href="<?php echo home_url(); ?>"><span class="icon" aria-hidden="true">🏠</span> Home</a>
            <a href="<?php echo home_url('/results/'); ?>"><span class="icon" aria-hidden="true">🏆</span> Results</a>
            <div class="dropdown">
                <a href="#" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false"><span class="icon" aria-hidden="true">🔢</span> All Games <span class="icon" aria-hidden="true">▼</span></a>
                <div class="dropdown-menu" role="menu">
                    <a href="<?php echo home_url('/euromillions/'); ?>" role="menuitem"><span class="icon" aria-hidden="true">💶</span> EuroMillions</a>
                    <a href="<?php echo home_url('/bonoloto/'); ?>" role="menuitem"><span class="icon" aria-hidden="true">🍀</span> Bonoloto</a>
                    <a href="<?php echo home_url('/primitiva/'); ?>" role="menuitem"><span class="icon" aria-hidden="true">🌱</span> La Primitiva</a>
                    <a href="<?php echo home_url('/elgordo/'); ?>" role="menuitem"><span class="icon" aria-hidden="true">🐷</span> El Gordo</a>
                    <a href="<?php echo home_url('/eurodreams/'); ?>" role="menuitem"><span class="icon" aria-hidden="true">💭</span> EuroDreams</a>
                    <a href="<?php echo home_url('/lototurf/'); ?>" role="menuitem"><span class="icon" aria-hidden="true">🏇</span> Lototurf</a>
                    <a href="<?php echo home_url('/quintupleplus/'); ?>" role="menuitem"><span class="icon" aria-hidden="true">5️⃣</span> Quíntuple Plus</a>
                    <a href="<?php echo home_url('/quiniela/'); ?>" role="menuitem"><span class="icon" aria-hidden="true">📝</span> La Quiniela</a>
                </div>
            </div>
        </nav>
    </div>
</header>

<main id="main-content" tabindex="-1" role="main" aria-label="Latest Spanish Lottery Results">

    <!-- Modern HERO with details and CTA -->
    <section class="lottery-hero" aria-labelledby="hero-main">
        <div class="lottery-header">
            <h1 id="hero-main" class="lottery-title">🎲 Latest Spanish Lottery Results</h1>
            <p class="lottery-subtitle">Get the most up-to-date winning numbers, jackpots, and prize breakdowns for all official Spanish state lotteries</p>
            
            <div class="hero-features">
                <div class="hero-feature">
                    <span class="hero-feature-icon" aria-hidden="true">⚡</span>
                    <h3>Real-Time Updates</h3>
                    <p>Results published within minutes of official draws</p>
                </div>
                <div class="hero-feature">
                    <span class="hero-feature-icon" aria-hidden="true">🎯</span>
                    <h3>Latest from Each Game</h3>
                    <p>See the newest result from every lottery category</p>
                </div>
                <div class="hero-feature">
                    <span class="hero-feature-icon" aria-hidden="true">📊</span>
                    <h3>Detailed Statistics</h3>
                    <p>Complete prize breakdowns and winning odds</p>
                </div>
                <div class="hero-feature">
                    <span class="hero-feature-icon" aria-hidden="true">📱</span>
                    <h3>Mobile Friendly</h3>
                    <p>Check results on-the-go from any device</p>
                </div>
            </div>
        </div>

        <!-- Interactive Live Stats Bar -->
        <section class="stats-bar" aria-labelledby="stats-title">
            <h2 id="stats-title" class="sr-only">Live Lottery Statistics</h2>
            <?php
            // Get total posts count for each lottery type
            $total_results = 0;
            $lottery_types = array('euromillions','bonoloto','primitiva','elgordo','eurodreams','lototurf','quintupleplus','quiniela');
            
            foreach($lottery_types as $type) {
                $count = wp_count_posts($type);
                $total_results += $count->publish;
            }
            
            // Get this week's results
            $week_args = array(
                'post_type' => $lottery_types,
                'posts_per_page' => -1,
                'date_query' => array(
                    array(
                        'after' => '1 week ago'
                    )
                )
            );
            $week_query = new WP_Query($week_args);
            $weekly_results = $week_query->found_posts;
            wp_reset_postdata();
            
            // Calculate total jackpot amount
            $total_jackpot = 0;
            foreach($lottery_types as $type) {
                $latest_args = array(
                    'post_type' => $type,
                    'posts_per_page' => 1,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $latest_query = new WP_Query($latest_args);
                if ($latest_query->have_posts()) {
                    $latest_query->the_post();
                    $jackpot = get_post_meta(get_the_ID(), '_advertised_jackpot', true);
                    if (empty($jackpot)) {
                        $jackpot = get_post_meta(get_the_ID(), '_jackpot', true);
                    }
                    if (is_numeric($jackpot)) {
                        $total_jackpot += $jackpot;
                    }
                }
                wp_reset_postdata();
            }
            ?>
            
            <div class="stat-card">
                <span class="stat-number" aria-label="<?php echo number_format($total_results); ?> total results"><?php echo number_format($total_results); ?></span>
                <div class="stat-label">Total Results</div>
            </div>
            
            <div class="stat-card">
                <span class="stat-number" aria-label="<?php echo number_format($weekly_results); ?> results this week"><?php echo number_format($weekly_results); ?></span>
                <div class="stat-label">This Week</div>
            </div>
            
            <div class="stat-card">
                <span class="stat-number" aria-label="<?php echo count($lottery_types); ?> lottery games"><?php echo count($lottery_types); ?></span>
                <div class="stat-label">Lottery Games</div>
            </div>
            
            <div class="stat-card">
                <span class="stat-number" aria-label="€<?php echo number_format($total_jackpot, 0); ?> combined jackpots"><?php echo $total_jackpot > 0 ? '€' . number_format($total_jackpot/1000000, 1) . 'M' : '∞'; ?></span>
                <div class="stat-label">Combined Jackpots</div>
            </div>
        </section>

        <!-- Latest Results by Category -->
        <section class="category-results-section" aria-labelledby="category-results">
            <h2 id="category-results" class="section-title">Latest Results by Category</h2>
            <p class="section-subtitle">🎯 Discover the newest winning numbers from each lottery game - updated instantly after every draw</p>
            
            <div class="results-grid">
                <?php
                // Define lottery types with their data
                $lottery_data = array(
                    'euromillions' => array('icon' => '💶', 'name' => 'EuroMillions', 'archive' => '/euromillions/'),
                    'bonoloto' => array('icon' => '🍀', 'name' => 'Bonoloto', 'archive' => '/bonoloto/'), 
                    'primitiva' => array('icon' => '🌱', 'name' => 'La Primitiva', 'archive' => '/primitiva/'),
                    'elgordo' => array('icon' => '🐷', 'name' => 'El Gordo', 'archive' => '/elgordo/'),
                    'eurodreams' => array('icon' => '💭', 'name' => 'EuroDreams', 'archive' => '/eurodreams/'),
                    'lototurf' => array('icon' => '🏇', 'name' => 'Lototurf', 'archive' => '/lototurf/'),
                    'quintupleplus' => array('icon' => '5️⃣', 'name' => 'Quíntuple Plus', 'archive' => '/quintupleplus/'),
                    'quiniela' => array('icon' => '📝', 'name' => 'La Quiniela', 'archive' => '/quiniela/')
                );

                $has_results = false;
                
                // Get latest result from each category
                foreach($lottery_data as $post_type => $data) {
                    $args = array(
                        'post_type' => $post_type,
                        'posts_per_page' => 1,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );
                    
                    $category_query = new WP_Query($args);
                    
                    if ($category_query->have_posts()) {
                        $has_results = true;
                        while ($category_query->have_posts()) {
                            $category_query->the_post();
                            
                            $draw_date = get_post_meta(get_the_ID(), '_draw_date', true);
                            
                            // Try multiple jackpot field names
                            $jackpot = get_post_meta(get_the_ID(), '_advertised_jackpot', true);
                            if (empty($jackpot)) {
                                $jackpot = get_post_meta(get_the_ID(), '_jackpot', true);
                            }
                            if (empty($jackpot)) {
                                $jackpot = get_post_meta(get_the_ID(), '_prize_amount', true);
                            }
                            
                            $numbers = get_post_meta(get_the_ID(), '_winning_numbers', true);
                            $star_numbers = get_post_meta(get_the_ID(), '_star_numbers', true);
                            $permalink = get_permalink();
                            $title = get_the_title();
                            
                            $icon = $data['icon'];
                            $lottery_name = $data['name'];
                            $archive_url = home_url($data['archive']);
                ?>
                
                <article class="lottery-card <?php echo esc_attr($post_type); ?>" aria-labelledby="card-<?php echo get_the_ID(); ?>">
                    <header class="card-header">
                        <h3 id="card-<?php echo get_the_ID(); ?>" class="lottery-name">
                            <span class="lottery-icon" aria-hidden="true"><?php echo $icon; ?></span>
                            <?php echo esc_html($lottery_name); ?>
                        </h3>
                    </header>
                    
                    <div class="card-content">
                        <div class="info-grid">
                            <div class="info-item">
                                <div class="info-label">Draw Date</div>
                                <div class="info-value" aria-label="Draw date: <?php echo esc_html($draw_date ? date('F j, Y', strtotime($draw_date)) : 'Date not available'); ?>">
                                    <?php echo esc_html($draw_date ? date('M j, Y', strtotime($draw_date)) : 'N/A'); ?>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Jackpot</div>
                                <div class="info-value jackpot-value" aria-label="Jackpot amount: <?php 
                                    if (!empty($jackpot) && is_numeric($jackpot)) {
                                        echo '€' . number_format($jackpot, 0);
                                    } elseif (!empty($jackpot)) {
                                        echo esc_html($jackpot);
                                    } else {
                                        echo 'Not available';
                                    }
                                ?>">
                                    <?php 
                                    if (!empty($jackpot) && is_numeric($jackpot)) {
                                        echo '€' . number_format($jackpot, 0);
                                    } elseif (!empty($jackpot)) {
                                        echo esc_html($jackpot);
                                    } else {
                                        echo 'N/A';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="numbers-section">
                            <div class="numbers-title">🎯 Winning Numbers</div>
                            <div class="numbers-display" role="list" aria-label="Winning numbers for <?php echo esc_attr($lottery_name); ?>">
                                <?php 
                                if (is_array($numbers) && !empty($numbers)) {
                                    foreach($numbers as $index => $num) {
                                        echo '<div class="number-ball" role="listitem" aria-label="Number ' . esc_attr($num) . '">' . esc_html($num) . '</div>';
                                    }
                                } elseif (!empty($numbers)) {
                                    // If it's a string, try to split it
                                    $nums = explode(',', $numbers);
                                    foreach($nums as $index => $num) {
                                        $clean_num = trim($num);
                                        if (!empty($clean_num)) {
                                            echo '<div class="number-ball" role="listitem" aria-label="Number ' . esc_attr($clean_num) . '">' . esc_html($clean_num) . '</div>';
                                        }
                                    }
                                } else {
                                    echo '<div style="text-align:center; color:#999; font-style:italic;" role="listitem">Numbers not available</div>';
                                }
                                
                                // Display star numbers if available
                                if (is_array($star_numbers) && !empty($star_numbers)) {
                                    echo '<div class="star-divider">⭐ Lucky Stars ⭐</div>';
                                    foreach($star_numbers as $index => $star) {
                                        echo '<div class="number-ball" style="background: linear-gradient(135deg, #f39c12, #e67e22);" role="listitem" aria-label="Star number ' . esc_attr($star) . '">' . esc_html($star) . '</div>';
                                    }
                                } elseif (!empty($star_numbers)) {
                                    echo '<div class="star-divider">⭐ Lucky Stars ⭐</div>';
                                    $stars = explode(',', $star_numbers);
                                    foreach($stars as $index => $star) {
                                        $clean_star = trim($star);
                                        if (!empty($clean_star)) {
                                            echo '<div class="number-ball" style="background: linear-gradient(135deg, #f39c12, #e67e22);" role="listitem" aria-label="Star number ' . esc_attr($clean_star) . '">' . esc_html($clean_star) . '</div>';
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    
                    <footer class="card-footer">
                        <a href="<?php echo esc_url($permalink); ?>" class="details-btn" aria-label="View full details for <?php echo esc_attr($title); ?>">
                            <span>View Details</span> <span aria-hidden="true">→</span>
                        </a>
                        <a href="<?php echo esc_url($archive_url); ?>" class="view-archive-btn" aria-label="View all <?php echo esc_attr($lottery_name); ?> results">
                            <span>All Results</span> <span aria-hidden="true">📚</span>
                        </a>
                    </footer>
                </article>
                
                <?php 
                        }
                    }
                    wp_reset_postdata();
                }
                
                if (!$has_results) {
                ?>
                    <div class="no-results" role="alert">
                        <div class="no-results-icon" aria-hidden="true">🎲</div>
                        <h3>No Lottery Results Found</h3>
                        <p>Please check back later for the latest lottery results!</p>
                    </div>
                <?php } ?>
            </div>
        </section>
        
        <div class="view-all-section">
            <a href="<?php echo home_url('/results/'); ?>" class="view-all-btn" aria-label="View all lottery results">
                <span>View All Categories</span> <span aria-hidden="true">🚀</span>
            </a>
        </div>
    </section>

    <!-- SEO Content Section -->
    <section class="seo-content" aria-labelledby="about-lotteries">
        <h2 id="about-lotteries">About Spanish State Lotteries</h2>
        <p style="text-align: center; font-size: 1.1rem; color: #7f8c8d; max-width: 800px; margin: 0 auto 40px;">
            Spain's official state lotteries offer some of Europe's most exciting gambling opportunities. From the massive EuroMillions jackpots to the traditional charm of La Primitiva, discover everything you need to know about Spain's premier lottery games.
        </p>
        
        <div class="content-grid">
            <div class="content-block">
                <h3><span aria-hidden="true">💶</span> EuroMillions</h3>
                <p>Europe's biggest lottery with jackpots reaching over €200 million. Play across 9 countries with draws every Tuesday and Friday. Match 5 numbers plus 2 Lucky Stars to win the life-changing jackpot.</p>
                <a href="<?php echo home_url('/euromillions/'); ?>" class="learn-more-btn" aria-label="Learn more about EuroMillions">Learn More <span aria-hidden="true">→</span></a>
            </div>
            
            <div class="content-block">
                <h3><span aria-hidden="true">🌱</span> La Primitiva</h3>
                <p>Spain's oldest and most beloved lottery since 1763. Pick 6 numbers from 1-49 and a Reintegro number. Draws every Thursday and Saturday with affordable tickets and great odds.</p>
                <a href="<?php echo home_url('/primitiva/'); ?>" class="learn-more-btn" aria-label="Learn more about La Primitiva">Learn More <span aria-hidden="true">→</span></a>
            </div>
            
            <div class="content-block">
                <h3><span aria-hidden="true">🍀</span> Bonoloto</h3>
                <p>The daily Spanish lottery with draws 6 times per week. Choose 6 numbers from 1-49 with excellent winning odds and affordable play. Perfect for regular players seeking frequent chances to win.</p>
                <a href="<?php echo home_url('/bonoloto/'); ?>" class="learn-more-btn" aria-label="Learn more about Bonoloto">Learn More <span aria-hidden="true">→</span></a>
            </div>
            
            <div class="content-block">
                <h3><span aria-hidden="true">🐷</span> El Gordo</h3>
                <p>The famous "Fat One" - Spain's weekly lottery with guaranteed prizes. Fixed jackpots every Sunday make this lottery unique. No rollover means someone always wins big every week.</p>
                <a href="<?php echo home_url('/elgordo/'); ?>" class="learn-more-btn" aria-label="Learn more about El Gordo">Learn More <span aria-hidden="true">→</span></a>
            </div>
            
            <div class="content-block">
                <h3><span aria-hidden="true">📝</span> La Quiniela</h3>
                <p>Spain's football pools betting system. Predict the outcomes of 14 selected football matches. Popular with sports fans who combine their football knowledge with lottery excitement.</p>
                <a href="<?php echo home_url('/quiniela/'); ?>" class="learn-more-btn" aria-label="Learn more about La Quiniela">Learn More <span aria-hidden="true">→</span></a>
            </div>
            
            <div class="content-block">
                <h3><span aria-hidden="true">🏇</span> Horse Racing</h3>
                <p>Lototurf and Quíntuple Plus offer thrilling horse racing lottery games. Predict race winners and experience the excitement of Spanish horse racing combined with lottery prizes.</p>
                <a href="<?php echo home_url('/lototurf/'); ?>" class="learn-more-btn" aria-label="Learn more about horse racing lotteries">Learn More <span aria-hidden="true">→</span></a>
            </div>
        </div>
    </section>

    <!-- Social Proof Section -->
    <section class="social-proof" aria-labelledby="social-proof-title">
        <h2 id="social-proof-title" class="sr-only">User Statistics and Social Proof</h2>
        <div class="social-stat">
            <div class="social-number" aria-label="Over 75,000 monthly users">75K+</div>
            <div class="social-label">Monthly Users</div>
        </div>
        <div class="social-stat">
            <div class="social-number" aria-label="Over 1.5 million page views">1.5M+</div>
            <div class="social-label">Page Views</div>
        </div>
        <div class="social-stat">
            <div class="social-number" aria-label="Results updated within 2 minutes">2min</div>
            <div class="social-label">Update Speed</div>
        </div>
        <div class="social-stat">
            <div class="social-number" aria-label="99.9% uptime reliability">99.9%</div>
            <div class="social-label">Uptime</div>
        </div>
    </section>

</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "name": "Latest Spanish Lottery Results by Category",
  "description": "<?php echo esc_js($page_desc); ?>",
  "url": "<?php echo esc_url($canonical_url); ?>",
  "mainEntity": {
    "@type": "ItemList",
    "itemListElement": [
      <?php
      // Generate structured data for lottery categories
      $structured_items = array();
      $position = 1;
      
      foreach($lottery_data as $post_type => $data) {
          $structured_items[] = '{
            "@type": "ListItem",
            "position": ' . $position . ',
            "item": {
              "@type": "Article",
              "name": "Latest ' . esc_js($data['name']) . ' Results",
              "url": "' . esc_url(home_url($data['archive'])) . '",
              "description": "Latest ' . esc_js($data['name']) . ' lottery results with winning numbers and prize information"
            }
          }';
          $position++;
      }
      
      echo implode(',', $structured_items);
      ?>
    ]
  },
  "publisher": {
    "@type": "Organization",
    "name": "<?php echo esc_js($site_name); ?>",
    "url": "<?php echo esc_url(home_url()); ?>"
  }
}
</script>

<script>
// Lightweight, performance-focused JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Simple hover effects for number balls
    const numberBalls = document.querySelectorAll('.number-ball');
    numberBalls.forEach(ball => {
        ball.addEventListener('click', function(e) {
            e.preventDefault();
            // Simple click effect
            this.style.transform = 'scale(1.2)';
            setTimeout(() => {
                this.style.transform = '';
            }, 300);
        });
    });
    
    // Dropdown functionality
    const dropdowns = document.querySelectorAll('.dropdown');
    dropdowns.forEach(dropdown => {
        const toggle = dropdown.querySelector('.dropdown-toggle');
        const menu = dropdown.querySelector('.dropdown-menu');
        
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            const expanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !expanded);
            menu.style.display = expanded ? 'none' : 'block';
        });
        
        // Close on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                toggle.setAttribute('aria-expanded', 'false');
                menu.style.display = 'none';
            }
        });
        
        // Close when clicking outside
        document.addEventListener('click', function(e) {
            if (!dropdown.contains(e.target)) {
                toggle.setAttribute('aria-expanded', 'false');
                menu.style.display = 'none';
            }
        });
    });
    
    // Simple scroll effect for header
    let lastScrollTop = 0;
    const header = document.querySelector('.custom-lottery-header');
    
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > lastScrollTop) {
            // Scrolling down
            header.style.transform = 'translateY(-5px)';
        } else {
            // Scrolling up
            header.style.transform = 'translateY(0)';
        }
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    }, { passive: true });
});
</script>

<?php get_footer(); ?>
