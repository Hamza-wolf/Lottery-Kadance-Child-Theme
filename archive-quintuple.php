<?php
/**
 * Archive Quintuple Plus Template (Enhanced)
 * 
 * Template for displaying Quintuple Plus archive/listing page with modern styling
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
    border-color: #3498db;
}

.filter-button {
    background: linear-gradient(135deg, #3498db, #2980b9);
    color: white;
    padding: 12px 25px;
    border: none;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(52, 152, 219, 0.3);
}

.filter-button:hover {
    background: linear-gradient(135deg, #2980b9, #1f5f99);
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(52, 152, 219, 0.4);
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
    background: linear-gradient(135deg, #3498db, #2980b9);
    color: white;
    border-color: #3498db;
    transform: translateY(-2px);
}

/* Archive Grid */
.lottery-archive-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
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
    border-color: #3498db;
}

.card-header {
    background: linear-gradient(135deg, #3498db, #2980b9);
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

.quintuple-races {
    margin-bottom: 20px;
}

.quintuple-race {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 20px;
    margin-bottom: 12px;
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    border-radius: 12px;
    border: 2px solid #e9ecef;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.quintuple-race::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 6px;
    background: linear-gradient(180deg, #3498db, #2980b9);
    transition: all 0.3s ease;
}

.quintuple-race:hover {
    transform: translateX(5px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    border-color: #3498db;
    background: linear-gradient(135deg, rgba(52, 152, 219, 0.05), #f8f9fa);
}

.quintuple-race-name {
    font-weight: 700;
    color: #2c3e50;
    font-size: 1rem;
    display: flex;
    align-items: center;
    gap: 10px;
}

.race-icon {
    font-size: 1.2rem;
    color: #3498db;
}

.quintuple-race-number {
    background: linear-gradient(135deg, #3498db, #2980b9);
    color: white;
    padding: 8px 16px;
    border-radius: 8px;
    font-weight: 700;
    font-size: 1.1rem;
    box-shadow: 0 4px 12px rgba(52, 152, 219, 0.3);
    transition: all 0.3s ease;
    min-width: 50px;
    text-align: center;
}

.quintuple-race:hover .quintuple-race-number {
    transform: scale(1.05);
    box-shadow: 0 6px 16px rgba(52, 152, 219, 0.4);
}

.race-summary {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px;
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    border-radius: 8px;
    margin-bottom: 20px;
    border: 2px solid #e9ecef;
}

.summary-item {
    text-align: center;
}

.summary-label {
    font-size: 0.8rem;
    color: #6c757d;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 5px;
}

.summary-value {
    font-size: 1.2rem;
    font-weight: 700;
    color: #2c3e50;
}

.races-count {
    color: #3498db;
}

.view-details-btn {
    background: linear-gradient(135deg, #3498db, #2980b9);
    color: white;
    padding: 12px 25px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(52, 152, 219, 0.3);
    width: 100%;
    justify-content: center;
    margin-top: 15px;
}

.view-details-btn:hover {
    background: linear-gradient(135deg, #2980b9, #1f5f99);
    transform: translateY(-2px);
    text-decoration: none;
    color: white;
    box-shadow: 0 6px 16px rgba(52, 152, 219, 0.4);
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
    color: #3498db;
    border: 2px solid #3498db;
    padding: 10px 15px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    min-width: 45px;
    text-align: center;
}

.page-numbers:hover, .page-numbers.current {
    background: #3498db;
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
    border-color: #3498db;
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
    
    .quintuple-race {
        flex-direction: column;
        gap: 10px;
        text-align: center;
        padding: 15px;
    }
    
    .race-summary {
        flex-direction: column;
        gap: 10px;
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
                    <a href="<?php echo home_url('/quiniela/'); ?>"><span class="icon">📝</span> La Quiniela</a>
                </div>
            </div>
        </nav>
    </div>
</header>

<div class="lottery-archive-container">
    
    <div class="lottery-archive-header">
        <h1 class="lottery-archive-title">
            <span class="lottery-archive-icon">🏆</span>
            Quíntuple Plus Results Archive
        </h1>
        <p class="lottery-archive-subtitle">Browse all Quintuple Plus draw results. Filter by date or search for specific races.</p>
    </div>
    
    <!-- Filter Section -->
    <div class="archive-filter-section">
        <h2 class="filter-title">🔍 Filter Results</h2>
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
                    <option value="races-desc">Most Races</option>
                </select>
            </div>
            <div class="filter-item">
                <label class="filter-label">&nbsp;</label>
                <button class="filter-button" onclick="filterResults()">🔍 Filter Results</button>
            </div>
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
                            <a href="<?php the_permalink(); ?>">🏆 <?php the_title(); ?></a>
                        </h3>
                        
                        <?php 
                        $draw_date = get_post_meta(get_the_ID(), '_draw_date', true);
                        if ($draw_date) : ?>
                            <div class="card-subtitle"><?php echo date('F j, Y', strtotime($draw_date)); ?></div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="card-body">
                        <!-- Race Summary -->
                        <?php 
                        $race_count = 0;
                        for ($i = 1; $i <= 5; $i++) {
                            $race_name = get_post_meta(get_the_ID(), '_race_' . $i . '_name', true);
                            if ($race_name) $race_count++;
                        }
                        ?>
                        
                        <div class="race-summary">
                            <div class="summary-item">
                                <div class="summary-label">Total Races</div>
                                <div class="summary-value races-count"><?php echo $race_count; ?></div>
                            </div>
                            <div class="summary-item">
                                <div class="summary-label">Game Type</div>
                                <div class="summary-value">Horse Racing</div>
                            </div>
                        </div>
                        
                        <div class="quintuple-races">
                            <?php 
                            // Display all 5 races
                            for ($i = 1; $i <= 5; $i++) :
                                $race_name = get_post_meta(get_the_ID(), '_race_' . $i . '_name', true);
                                $race_number = get_post_meta(get_the_ID(), '_race_' . $i . '_number', true);
                                
                                if ($race_name && $race_number) : ?>
                                    <div class="quintuple-race">
                                        <div class="quintuple-race-name">
                                            <span class="race-icon">🏇</span>
                                            Race <?php echo $i; ?>: <?php echo esc_html($race_name); ?>
                                        </div>
                                        <div class="quintuple-race-number"><?php echo esc_html($race_number); ?></div>
                                    </div>
                                <?php endif;
                            endfor; ?>
                        </div>
                        
                        <a href="<?php the_permalink(); ?>" class="view-details-btn">👁️ View Full Results & Prizes</a>
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
                <p>No Quintuple Plus draws found for the selected criteria.</p>
            </div>
            
        <?php endif; ?>
        
    </div>
    
    <!-- Information Section -->
    <div class="lottery-info-section">
        <div class="lottery-info-grid">
            <div class="lottery-info-card">
                <h3>🎮 How to Play</h3>
                <p>Quintuple Plus is a Spanish horse racing lottery. Predict the winners of 5 consecutive races for a chance to win the jackpot! Each race requires selecting the winning horse number.</p>
                <a href="#" class="lottery-btn">Learn More</a>
            </div>
            
            <div class="lottery-info-card">
                <h3>🏆 Prize Categories</h3>
                <p>Quintuple Plus offers multiple prize categories based on how many races you correctly predict. Match all 5 races to win the top prize! Even partial matches can win prizes.</p>
                <a href="#" class="lottery-btn">View Prizes</a>
            </div>
            
            <div class="lottery-info-card">
                <h3>📅 Draw Schedule</h3>
                <p>Quintuple Plus draws take place on racing days throughout the week. Each draw features 5 carefully selected horse races from Spanish racetracks.</p>
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
});
</script>

<?php get_footer(); ?>
