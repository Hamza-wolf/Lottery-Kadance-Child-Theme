<?php
/**
 * Archive Loteria Nacional Template (Enhanced)
 * 
 * Template for displaying Loteria Nacional archive/listing page with modern styling
 */

get_header(); ?>

<style>
/* Force override all theme styles */
body {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
    min-height: 100vh;
}

.site-container, .content-area, .entry-content {
    background: transparent !important;
    max-width: none !important;
    padding: 0 !important;
    margin: 0 !important;
}

.site-header { display: none !important; }
.site-footer { display: none !important; }

/* Custom Header Navigation */
.custom-lottery-header {
    background: #003366;
    color: #fff;
    position: sticky;
    top: 0;
    z-index: 1000;
    width: 100%;
    padding: 0 24px;
    height: 64px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}

.header-logo {
    font-size: 1.35rem;
    color: #fff;
    font-weight: bold;
    text-decoration: none;
    letter-spacing: 1px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.header-logo:hover {
    color: #fff;
    text-decoration: none;
}

.main-nav {
    display: flex;
    align-items: center;
    gap: 22px;
}

.main-nav > a {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    padding: 8px 14px;
    border-radius: 5px;
    transition: background 0.2s;
    display: flex;
    align-items: center;
    gap: 6px;
}

.main-nav > a:hover {
    background: #002244;
    color: #fff;
    text-decoration: none;
}

.dropdown {
    position: relative;
}

.dropdown-toggle {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    padding: 8px 14px;
    border-radius: 5px;
    transition: background 0.2s;
    display: flex;
    align-items: center;
    gap: 6px;
    cursor: pointer;
}

.dropdown-toggle:hover {
    background: #002244;
    color: #fff;
    text-decoration: none;
}

.dropdown-menu {
    display: none;
    position: absolute;
    left: 0;
    top: 110%;
    background: #fff;
    color: #003366;
    min-width: 180px;
    box-shadow: 0 8px 30px rgba(0,0,0,0.10);
    border-radius: 8px;
    padding: 10px 0;
    z-index: 200;
}

.dropdown:hover .dropdown-menu {
    display: block;
}

.dropdown-menu a {
    display: flex;
    align-items: center;
    gap: 6px;
    color: #003366;
    padding: 10px 22px;
    text-decoration: none;
    font-weight: 500;
    transition: background 0.18s, color 0.18s;
}

.dropdown-menu a:hover {
    background: #f1f6fc;
    color: #002244;
    text-decoration: none;
}

/* Modern Archive Page Styles */
.lottery-archive-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 30px 20px;
}

.lottery-archive-header {
    background: rgba(255,255,255,0.95);
    backdrop-filter: blur(10px);
    padding: 40px;
    border-radius: 20px;
    text-align: center;
    margin-bottom: 30px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.1);
}

.lottery-archive-title {
    font-size: 3rem;
    font-weight: 800;
    color: #2c3e50;
    margin: 0 0 10px 0;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
}

.lottery-archive-icon {
    font-size: 3.5rem;
    filter: drop-shadow(0 4px 8px rgba(0,0,0,0.2));
}

.lottery-archive-subtitle {
    font-size: 1.3rem;
    color: #7f8c8d;
    margin: 0;
}

/* Filter Section */
.archive-filter-section {
    background: white;
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 30px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    border: 2px solid #e8f4fd;
}

.filter-title {
    font-size: 1.4rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.filter-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-bottom: 20px;
}

.filter-item {
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.filter-label {
    font-weight: 600;
    color: #2c3e50;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.filter-select, .filter-input {
    padding: 12px;
    border: 2px solid #e9ecef;
    border-radius: 8px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.filter-select:focus, .filter-input:focus {
    outline: none;
    border-color: #e74c3c;
}

.filter-button {
    background: linear-gradient(135deg, #e74c3c, #c0392b);
    color: white;
    padding: 12px 25px;
    border: none;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
}

.filter-button:hover {
    background: linear-gradient(135deg, #c0392b, #a93226);
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(231, 76, 60, 0.4);
}

.number-search-section {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 15px;
    background: #f8f9fa;
    border-radius: 8px;
    border: 2px solid #e9ecef;
}

.number-input {
    flex: 1;
    padding: 12px;
    border: 2px solid #e9ecef;
    border-radius: 8px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.number-input:focus {
    outline: none;
    border-color: #e74c3c;
}

.check-button {
    background: linear-gradient(135deg, #28a745, #20c997);
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(40, 167, 69, 0.3);
}

.check-button:hover {
    background: linear-gradient(135deg, #218838, #1e7e34);
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(40, 167, 69, 0.4);
}

.quick-filters {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    padding-top: 20px;
    border-top: 1px solid #e9ecef;
}

.quick-filter {
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    color: #2c3e50;
    border: 2px solid #e9ecef;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.quick-filter:hover, .quick-filter.active {
    background: linear-gradient(135deg, #e74c3c, #c0392b);
    color: white;
    border-color: #e74c3c;
    transform: translateY(-2px);
}

/* Archive Grid */
.lottery-archive-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
    margin-bottom: 40px;
}

.lottery-archive-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    border: 2px solid #e8f4fd;
    transition: all 0.3s ease;
    position: relative;
}

.lottery-archive-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.15);
    border-color: #e74c3c;
}

.card-header {
    background: linear-gradient(135deg, #e74c3c, #c0392b);
    color: white;
    padding: 20px;
    position: relative;
    overflow: hidden;
}

.card-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: 0.1;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="none" stroke="white" stroke-width="2"/></svg>') repeat;
}

.card-title {
    font-size: 1.4rem;
    font-weight: 700;
    margin: 0 0 10px 0;
    position: relative;
    z-index: 1;
}

.card-title a {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 10px;
}

.card-title a:hover {
    text-decoration: none;
    color: white;
}

.card-subtitle {
    font-size: 0.9rem;
    opacity: 0.9;
    margin: 0;
    position: relative;
    z-index: 1;
}

.card-body {
    padding: 25px;
}

.nacional-prizes {
    margin-bottom: 20px;
}

.nacional-prize {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 20px;
    margin-bottom: 12px;
    border-radius: 12px;
    border: 2px solid transparent;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.nacional-prize::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 6px;
    height: 100%;
    transition: all 0.3s ease;
}

.nacional-prize:hover {
    transform: translateX(5px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.nacional-prize.first {
    background: linear-gradient(135deg, rgba(231, 76, 60, 0.1), rgba(192, 57, 43, 0.05));
    border-color: rgba(231, 76, 60, 0.2);
}

.nacional-prize.first::before {
    background: linear-gradient(180deg, #e74c3c, #c0392b);
}

.nacional-prize.second {
    background: linear-gradient(135deg, rgba(52, 152, 219, 0.1), rgba(41, 128, 185, 0.05));
    border-color: rgba(52, 152, 219, 0.2);
}

.nacional-prize.second::before {
    background: linear-gradient(180deg, #3498db, #2980b9);
}

.nacional-prize.third {
    background: linear-gradient(135deg, rgba(46, 204, 113, 0.1), rgba(39, 174, 96, 0.05));
    border-color: rgba(46, 204, 113, 0.2);
}

.nacional-prize.third::before {
    background: linear-gradient(180deg, #2ecc71, #27ae60);
}

.prize-label {
    font-weight: 700;
    color: #2c3e50;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.prize-number {
    font-weight: 800;
    font-size: 1.4rem;
    padding: 8px 16px;
    border-radius: 8px;
    background: rgba(255,255,255,0.9);
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.nacional-prize.first .prize-number {
    color: #e74c3c;
    background: linear-gradient(135deg, rgba(231, 76, 60, 0.1), rgba(255,255,255,0.9));
}

.nacional-prize.second .prize-number {
    color: #3498db;
    background: linear-gradient(135deg, rgba(52, 152, 219, 0.1), rgba(255,255,255,0.9));
}

.nacional-prize.third .prize-number {
    color: #2ecc71;
    background: linear-gradient(135deg, rgba(46, 204, 113, 0.1), rgba(255,255,255,0.9));
}

.nacional-additional-info {
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 20px;
    border: 2px solid #e9ecef;
    transition: all 0.3s ease;
}

.nacional-additional-info:hover {
    border-color: #e74c3c;
    background: linear-gradient(135deg, rgba(231, 76, 60, 0.05), #f8f9fa);
}

.additional-info-item {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    align-items: center;
    justify-content: space-between;
}

.info-section {
    display: flex;
    align-items: center;
    gap: 8px;
}

.info-label {
    font-weight: 700;
    color: #2c3e50;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.info-value {
    font-weight: 600;
    color: #e74c3c;
    font-size: 1.1rem;
    padding: 4px 12px;
    background: rgba(231, 76, 60, 0.1);
    border-radius: 6px;
}

.view-details-btn {
    background: linear-gradient(135deg, #e74c3c, #c0392b);
    color: white;
    padding: 12px 25px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
    width: 100%;
    justify-content: center;
    margin-top: 15px;
}

.view-details-btn:hover {
    background: linear-gradient(135deg, #c0392b, #a93226);
    transform: translateY(-2px);
    text-decoration: none;
    color: white;
    box-shadow: 0 6px 16px rgba(231, 76, 60, 0.4);
}

/* Pagination */
.lottery-pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    margin: 40px 0;
}

.page-numbers {
    background: white;
    color: #e74c3c;
    border: 2px solid #e74c3c;
    padding: 10px 15px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    min-width: 45px;
    text-align: center;
}

.page-numbers:hover, .page-numbers.current {
    background: #e74c3c;
    color: white;
    text-decoration: none;
}

/* Info Section */
.lottery-info-section {
    background: rgba(255,255,255,0.95);
    backdrop-filter: blur(10px);
    padding: 50px;
    border-radius: 20px;
    margin: 40px 0;
    box-shadow: 0 8px 32px rgba(0,0,0,0.1);
}

.lottery-info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.lottery-info-card {
    background: white;
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    border: 2px solid #e8f4fd;
    text-align: center;
    transition: all 0.3s ease;
}

.lottery-info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.15);
    border-color: #e74c3c;
}

.lottery-info-card h3 {
    font-size: 1.4rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 15px;
}

.lottery-info-card p {
    color: #7f8c8d;
    line-height: 1.6;
    margin-bottom: 20px;
}

.lottery-btn {
    background: linear-gradient(135deg, #28a745, #20c997);
    color: white;
    padding: 12px 25px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(40, 167, 69, 0.3);
}

.lottery-btn:hover {
    background: linear-gradient(135deg, #218838, #1e7e34);
    transform: translateY(-2px);
    text-decoration: none;
    color: white;
    box-shadow: 0 6px 16px rgba(40, 167, 69, 0.4);
}

/* No Results State */
.no-results {
    text-align: center;
    padding: 60px 20px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    border: 2px solid #e8f4fd;
    grid-column: 1 / -1;
}

.no-results-icon {
    font-size: 4rem;
    margin-bottom: 20px;
    opacity: 0.5;
}

.no-results h3 {
    font-size: 1.5rem;
    color: #2c3e50;
    margin-bottom: 10px;
}

.no-results p {
    color: #7f8c8d;
    font-size: 1.1rem;
}

@media (max-width: 768px) {
    .lottery-archive-title {
        font-size: 2rem;
    }
    
    .lottery-archive-icon {
        font-size: 2.5rem;
    }
    
    .lottery-archive-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .filter-grid {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .nacional-prize {
        flex-direction: column;
        gap: 10px;
        text-align: center;
    }
    
    .additional-info-item {
        flex-direction: column;
        gap: 10px;
        text-align: center;
    }
    
    .main-nav {
        gap: 10px;
    }
    
    .main-nav > a, .dropdown-toggle {
        padding: 6px 10px;
        font-size: 0.9rem;
    }
    
    .header-logo {
        font-size: 1.1rem;
    }
    
    .lottery-info-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .quick-filters {
        gap: 5px;
    }
    
    .quick-filter {
        font-size: 0.8rem;
        padding: 6px 12px;
    }
    
    .number-search-section {
        flex-direction: column;
        gap: 15px;
    }
}
</style>

<!-- Custom Header Navigation -->
<header class="custom-lottery-header">
    <div class="header-container">
        <a href="<?php echo home_url(); ?>" class="header-logo">
            <span class="icon">🎲</span> Lottery Home
        </a>
        <nav class="main-nav">
            <a href="<?php echo home_url(); ?>"><span class="icon">🏠</span> Home</a>
            <a href="<?php echo home_url('/results/'); ?>"><span class="icon">🏆</span> Results</a>
            <div class="dropdown">
                <a href="#" class="dropdown-toggle"><span class="icon">🔢</span> Lottery Games <span class="icon">▾</span></a>
                <div class="dropdown-menu">
                    <a href="<?php echo home_url('/euromillions/'); ?>"><span class="icon">💶</span> EuroMillions</a>
                    <a href="<?php echo home_url('/bonoloto/'); ?>"><span class="icon">🍀</span> Bonoloto</a>
                    <a href="<?php echo home_url('/primitiva/'); ?>"><span class="icon">🌱</span> La Primitiva</a>
                    <a href="<?php echo home_url('/elgordo/'); ?>"><span class="icon">🐷</span> El Gordo</a>
                    <a href="<?php echo home_url('/eurodreams/'); ?>"><span class="icon">💭</span> EuroDreams</a>
                    <a href="<?php echo home_url('/lototurf/'); ?>"><span class="icon">🏇</span> Lototurf</a>
                    <a href="<?php echo home_url('/quintupleplus/'); ?>"><span class="icon">5️⃣</span> Quíntuple Plus</a>
                    <a href="<?php echo home_url('/nacional/'); ?>"><span class="icon">🎫</span> Loteria Nacional</a>
                </div>
            </div>
        </nav>
    </div>
</header>

<div class="lottery-archive-container">
    
    <div class="lottery-archive-header">
        <h1 class="lottery-archive-title">
            <span class="lottery-archive-icon">🎫</span>
            Loteria Nacional Results Archive
        </h1>
        <p class="lottery-archive-subtitle">Browse all Loteria Nacional draw results. Filter by date or search for specific numbers.</p>
    </div>
    
    <!-- Filter Section -->
    <div class="archive-filter-section">
        <h2 class="filter-title">🔍 Search & Filter</h2>
        <div class="filter-grid">
            <div class="filter-item">
                <label class="filter-label">Date From</label>
                <input type="date" class="filter-input" id="date-from">
            </div>
            <div class="filter-item">
                <label class="filter-label">Date To</label>
                <input type="date" class="filter-input" id="date-to">
            </div>
            <div class="filter-item">
                <label class="filter-label">Sort By</label>
                <select class="filter-select" id="sort-by">
                    <option value="date-desc">Newest First</option>
                    <option value="date-asc">Oldest First</option>
                    <option value="prize-desc">Highest Prize</option>
                </select>
            </div>
            <div class="filter-item">
                <label class="filter-label">&nbsp;</label>
                <button class="filter-button" onclick="filterResults()">🔍 Filter Results</button>
            </div>
        </div>
        
        <!-- Ticket Number Search -->
        <div class="number-search-section">
            <label class="filter-label">🎫 Check Ticket Number:</label>
            <input type="text" class="number-input" id="ticket-number" placeholder="Enter your 5-digit ticket number" maxlength="5">
            <button class="check-button" onclick="checkTicketNumber()">✨ Check</button>
        </div>
        
        <div class="quick-filters">
            <button class="quick-filter active" data-period="all">All Results</button>
            <button class="quick-filter" data-period="week">Last Week</button>
            <button class="quick-filter" data-period="month">Last Month</button>
            <button class="quick-filter" data-period="year">This Year</button>
        </div>
    </div>
    
    <!-- Archive Grid -->
    <div class="lottery-archive-grid">
        
        <?php if (have_posts()) : ?>
            
            <?php while (have_posts()) : the_post(); ?>
                
                <div class="lottery-archive-card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <a href="<?php the_permalink(); ?>">🎫 <?php the_title(); ?></a>
                        </h3>
                        
                        <?php 
                        $draw_date = get_post_meta(get_the_ID(), '_draw_date', true);
                        if ($draw_date) : ?>
                            <div class="card-subtitle"><?php echo date('F j, Y', strtotime($draw_date)); ?></div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="card-body">
                        <div class="nacional-prizes">
                            <?php 
                            $first_prize = get_post_meta(get_the_ID(), '_first_prize', true);
                            $second_prize = get_post_meta(get_the_ID(), '_second_prize', true);
                            $third_prize = get_post_meta(get_the_ID(), '_third_prize', true);
                            
                            if ($first_prize) : ?>
                                <div class="nacional-prize first">
                                    <div class="prize-label">🥇 First Prize</div>
                                    <div class="prize-number"><?php echo esc_html($first_prize); ?></div>
                                </div>
                            <?php endif; 
                            
                            if ($second_prize) : ?>
                                <div class="nacional-prize second">
                                    <div class="prize-label">🥈 Second Prize</div>
                                    <div class="prize-number"><?php echo esc_html($second_prize); ?></div>
                                </div>
                            <?php endif; 
                            
                            if ($third_prize) : ?>
                                <div class="nacional-prize third">
                                    <div class="prize-label">🥉 Third Prize</div>
                                    <div class="prize-number"><?php echo esc_html($third_prize); ?></div>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <?php 
                        $fraction = get_post_meta(get_the_ID(), '_fraction', true);
                        $series = get_post_meta(get_the_ID(), '_series', true);
                        if ($fraction || $series) : ?>
                        <div class="nacional-additional-info">
                            <div class="additional-info-item">
                                <?php if ($fraction) : ?>
                                <div class="info-section">
                                    <span class="info-label">Fraction:</span>
                                    <span class="info-value"><?php echo esc_html($fraction); ?></span>
                                </div>
                                <?php endif; ?>
                                
                                <?php if ($series) : ?>
                                <div class="info-section">
                                    <span class="info-label">Series:</span>
                                    <span class="info-value"><?php echo esc_html($series); ?></span>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <a href="<?php the_permalink(); ?>" class="view-details-btn">👁️ View Full Results</a>
                    </div>
                </div>
                
            <?php endwhile; ?>
            
            <!-- Pagination -->
            <div class="lottery-pagination">
                <?php 
                echo paginate_links(array(
                    'prev_text' => '‹ Previous',
                    'next_text' => 'Next ›',
                    'type' => 'plain',
                    'before_page_number' => '',
                    'after_page_number' => '',
                )); 
                ?>
            </div>
            
        <?php else : ?>
            
            <div class="no-results">
                <div class="no-results-icon">🔍</div>
                <h3>No Results Found</h3>
                <p>No Loteria Nacional draws found for the selected criteria.</p>
            </div>
            
        <?php endif; ?>
        
    </div>
    
    <!-- Information Section -->
    <div class="lottery-info-section">
        <div class="lottery-info-grid">
            <div class="lottery-info-card">
                <h3>🎮 How to Play</h3>
                <p>Loteria Nacional is Spain's oldest and most traditional lottery. Purchase a ticket with a 5-digit number for a chance to win various prizes including the famous "El Gordo" jackpot.</p>
                <a href="#" class="lottery-btn">Learn More</a>
            </div>
            
            <div class="lottery-info-card">
                <h3>🏆 Prize Categories</h3>
                <p>Loteria Nacional offers multiple prize categories. The first prize (El Gordo) is the jackpot, followed by second and third prizes, plus many smaller prizes and special draws.</p>
                <a href="#" class="lottery-btn">View Prizes</a>
            </div>
            
            <div class="lottery-info-card">
                <h3>📅 Draw Schedule</h3>
                <p>Loteria Nacional draws take place every Thursday and Saturday. Special draws like the Christmas Lottery (El Gordo) are held annually on December 22nd.</p>
                <a href="#" class="lottery-btn">Set Reminder</a>
            </div>
        </div>
    </div>
    
</div>

<script>
// Simple filter functionality
function filterResults() {
    const dateFrom = document.getElementById('date-from').value;
    const dateTo = document.getElementById('date-to').value;
    const sortBy = document.getElementById('sort-by').value;
    
    console.log('Filter:', { dateFrom, dateTo, sortBy });
    // You can implement AJAX filtering here or form submission
}

// Ticket number checking
function checkTicketNumber() {
    const ticketNumber = document.getElementById('ticket-number').value;
    
    if (!ticketNumber) {
        alert('Please enter a ticket number to check');
        return;
    }
    
    if (ticketNumber.length !== 5) {
        alert('Please enter a valid 5-digit ticket number');
        return;
    }
    
    // This would implement actual ticket checking logic
    alert(`Checking ticket number: ${ticketNumber}\n\nThis would search through all draws to find if this number has won any prizes.`);
}

// Quick filter buttons
document.addEventListener('DOMContentLoaded', function() {
    const quickFilters = document.querySelectorAll('.quick-filter');
    quickFilters.forEach(button => {
        button.addEventListener('click', function() {
            quickFilters.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            const period = this.dataset.period;
            console.log('Quick filter:', period);
            
            // Set date inputs based on period
            const today = new Date();
            let dateFrom = '';
            let dateTo = today.toISOString().split('T')[0];
            
            switch(period) {
                case 'week':
                    const weekAgo = new Date(today.getTime() - 7 * 24 * 60 * 60 * 1000);
                    dateFrom = weekAgo.toISOString().split('T')[0];
                    break;
                case 'month':
                    const monthAgo = new Date(today.getFullYear(), today.getMonth() - 1, today.getDate());
                    dateFrom = monthAgo.toISOString().split('T')[0];
                    break;
                case 'year':
                    dateFrom = today.getFullYear() + '-01-01';
                    break;
                case 'all':
                    dateFrom = '';
                    dateTo = '';
                    break;
            }
            
            document.getElementById('date-from').value = dateFrom;
            document.getElementById('date-to').value = dateTo;
        });
    });
    
    // Ticket number input validation
    const ticketInput = document.getElementById('ticket-number');
    ticketInput.addEventListener('input', function() {
        // Only allow numbers
        this.value = this.value.replace(/[^0-9]/g, '');
        
        // Limit to 5 digits
        if (this.value.length > 5) {
            this.value = this.value.slice(0, 5);
        }
    });
    
    // Allow checking with Enter key
    ticketInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            checkTicketNumber();
        }
    });
});
</script>

<?php get_footer(); ?>
