<?php
/**
 * Archive Quinigol Template (Enhanced)
 * 
 * Template for displaying Quinigol archive/listing page with modern styling
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
    border-color: #f39c12;
}

.filter-button {
    background: linear-gradient(135deg, #f39c12, #f1c40f);
    color: white;
    padding: 12px 25px;
    border: none;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(243, 156, 18, 0.3);
}

.filter-button:hover {
    background: linear-gradient(135deg, #f1c40f, #f4d03f);
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(243, 156, 18, 0.4);
}

.team-search-section {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 15px;
    background: #f8f9fa;
    border-radius: 8px;
    border: 2px solid #e9ecef;
}

.team-input {
    flex: 1;
    padding: 12px;
    border: 2px solid #e9ecef;
    border-radius: 8px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.team-input:focus {
    outline: none;
    border-color: #f39c12;
}

.search-team-button {
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

.search-team-button:hover {
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
    background: linear-gradient(135deg, #f39c12, #f1c40f);
    color: white;
    border-color: #f39c12;
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
    border-color: #f39c12;
}

.card-header {
    background: linear-gradient(135deg, #f39c12, #f1c40f);
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

.quinigol-matches {
    margin-bottom: 20px;
    overflow-x: auto;
    border-radius: 8px;
    border: 2px solid #f8f9fa;
}

.quinigol-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.9rem;
    background: white;
}

.quinigol-table th {
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    padding: 12px 8px;
    text-align: left;
    font-weight: 700;
    color: #2c3e50;
    border-bottom: 2px solid #f39c12;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.quinigol-table td {
    padding: 10px 8px;
    border-bottom: 1px solid #f1f2f6;
    transition: all 0.3s ease;
}

.quinigol-table tr:hover td {
    background: #f8f9fa;
}

.quinigol-table tr:last-child td {
    border-bottom: none;
}

.match-number {
    width: 40px;
    text-align: center;
    font-weight: 700;
    color: #f39c12;
    background: rgba(243, 156, 18, 0.1);
}

.team-names {
    font-weight: 500;
    color: #2c3e50;
    max-width: 200px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.result {
    width: 80px;
    text-align: center;
    font-weight: 700;
    border-radius: 6px;
    padding: 4px 8px;
    margin: 0 auto;
    font-size: 1rem;
}

.home-win {
    background: linear-gradient(135deg, #27ae60, #2ecc71);
    color: white;
    box-shadow: 0 2px 8px rgba(39, 174, 96, 0.3);
}

.draw {
    background: linear-gradient(135deg, #3498db, #5dade2);
    color: white;
    box-shadow: 0 2px 8px rgba(52, 152, 219, 0.3);
}

.away-win {
    background: linear-gradient(135deg, #e74c3c, #ec7063);
    color: white;
    box-shadow: 0 2px 8px rgba(231, 76, 60, 0.3);
}

.goals-summary {
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

.goals-home {
    color: #27ae60;
}

.goals-draw {
    color: #3498db;
}

.goals-away {
    color: #e74c3c;
}

.view-details-btn {
    background: linear-gradient(135deg, #f39c12, #f1c40f);
    color: white;
    padding: 12px 25px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(243, 156, 18, 0.3);
    width: 100%;
    justify-content: center;
    margin-top: 15px;
}

.view-details-btn:hover {
    background: linear-gradient(135deg, #f1c40f, #f4d03f);
    transform: translateY(-2px);
    text-decoration: none;
    color: white;
    box-shadow: 0 6px 16px rgba(243, 156, 18, 0.4);
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
    color: #f39c12;
    border: 2px solid #f39c12;
    padding: 10px 15px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    min-width: 45px;
    text-align: center;
}

.page-numbers:hover, .page-numbers.current {
    background: #f39c12;
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
    border-color: #f39c12;
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
    
    .team-search-section {
        flex-direction: column;
        gap: 15px;
    }
    
    .quinigol-table {
        font-size: 0.8rem;
    }
    
    .quinigol-table th,
    .quinigol-table td {
        padding: 8px 4px;
    }
    
    .goals-summary {
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
                    <a href="<?php echo home_url('/quinigol/'); ?>"><span class="icon">🥅</span> El Quinigol</a>
                </div>
            </div>
        </nav>
    </div>
</header>

<div class="lottery-archive-container">
    
    <div class="lottery-archive-header">
        <h1 class="lottery-archive-title">
            <span class="lottery-archive-icon">🥅</span>
            El Quinigol Results Archive
        </h1>
        <p class="lottery-archive-subtitle">Browse all Quinigol football pool results. Filter by date or search for specific matches.</p>
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
                    <option value="goals-desc">Highest Scoring</option>
                </select>
            </div>
            <div class="filter-item">
                <label class="filter-label">&nbsp;</label>
                <button class="filter-button" onclick="filterResults()">🔍 Filter Results</button>
            </div>
        </div>
        
        <!-- Team Search -->
        <div class="team-search-section">
            <label class="filter-label">⚽ Search Team:</label>
            <input type="text" class="team-input" id="team-name" placeholder="Enter team name (e.g., Real Madrid, Barcelona)" maxlength="50">
            <button class="search-team-button" onclick="searchTeam()">🔍 Search</button>
        </div>
        
        <div class="quick-filters">
            <button class="quick-filter active" data-period="all">All Results</button>
            <button class="quick-filter" data-period="week">Last Week</button>
            <button class="quick-filter" data-period="month">Last Month</button>
            <button class="quick-filter" data-period="year">This Season</button>
        </div>
    </div>
    
    <!-- Archive Grid -->
    <div class="lottery-archive-grid">
        
        <?php if (have_posts()) : ?>
            
            <?php while (have_posts()) : the_post(); ?>
                
                <div class="lottery-archive-card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <a href="<?php the_permalink(); ?>">🥅 <?php the_title(); ?></a>
                        </h3>
                        
                        <?php 
                        $draw_date = get_post_meta(get_the_ID(), '_draw_date', true);
                        if ($draw_date) : ?>
                            <div class="card-subtitle"><?php echo date('F j, Y', strtotime($draw_date)); ?></div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="card-body">
                        <!-- Goals Summary -->
                        <?php 
                        $total_goals = 0;
                        $home_wins = 0;
                        $draws = 0;
                        $away_wins = 0;
                        
                        for ($i = 1; $i <= 6; $i++) {
                            $home_goals = get_post_meta(get_the_ID(), '_match_' . $i . '_home_goals', true);
                            $away_goals = get_post_meta(get_the_ID(), '_match_' . $i . '_away_goals', true);
                            
                            if (is_numeric($home_goals) && is_numeric($away_goals)) {
                                $total_goals += $home_goals + $away_goals;
                                
                                if ($home_goals > $away_goals) $home_wins++;
                                elseif ($home_goals < $away_goals) $away_wins++;
                                else $draws++;
                            }
                        }
                        ?>
                        
                        <div class="goals-summary">
                            <div class="summary-item">
                                <div class="summary-label">Total Goals</div>
                                <div class="summary-value"><?php echo $total_goals; ?></div>
                            </div>
                            <div class="summary-item">
                                <div class="summary-label">Home Wins</div>
                                <div class="summary-value goals-home"><?php echo $home_wins; ?></div>
                            </div>
                            <div class="summary-item">
                                <div class="summary-label">Draws</div>
                                <div class="summary-value goals-draw"><?php echo $draws; ?></div>
                            </div>
                            <div class="summary-item">
                                <div class="summary-label">Away Wins</div>
                                <div class="summary-value goals-away"><?php echo $away_wins; ?></div>
                            </div>
                        </div>
                        
                        <div class="quinigol-matches">
                            <table class="quinigol-table">
                                <thead>
                                    <tr>
                                        <th class="match-number">#</th>
                                        <th class="team-names">Match</th>
                                        <th class="result">Score</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    // Display all 6 matches
                                    for ($i = 1; $i <= 6; $i++) :
                                        $home_team = get_post_meta(get_the_ID(), '_match_' . $i . '_home', true);
                                        $away_team = get_post_meta(get_the_ID(), '_match_' . $i . '_away', true);
                                        $home_goals = get_post_meta(get_the_ID(), '_match_' . $i . '_home_goals', true);
                                        $away_goals = get_post_meta(get_the_ID(), '_match_' . $i . '_away_goals', true);
                                        
                                        if ($home_team && $away_team && is_numeric($home_goals) && is_numeric($away_goals)) : 
                                            $result_class = '';
                                            if ($home_goals > $away_goals) {
                                                $result_class = 'home-win';
                                            } elseif ($home_goals < $away_goals) {
                                                $result_class = 'away-win';
                                            } else {
                                                $result_class = 'draw';
                                            }
                                            ?>
                                            <tr>
                                                <td class="match-number"><?php echo $i; ?></td>
                                                <td class="team-names"><?php echo esc_html($home_team . ' - ' . $away_team); ?></td>
                                                <td class="result">
                                                    <div class="<?php echo $result_class; ?>"><?php echo esc_html($home_goals . '-' . $away_goals); ?></div>
                                                </td>
                                            </tr>
                                        <?php endif;
                                    endfor; ?>
                                </tbody>
                            </table>
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
                <p>No Quinigol draws found for the selected criteria.</p>
            </div>
            
        <?php endif; ?>
        
    </div>
    
    <!-- Information Section -->
    <div class="lottery-info-section">
        <div class="lottery-info-grid">
            <div class="lottery-info-card">
                <h3>🎮 How to Play</h3>
                <p>El Quinigol is a Spanish football pool betting game focused on predicting the exact score of 6 football matches. Predict the number of goals each team will score for a chance to win prizes.</p>
                <a href="#" class="lottery-btn">Learn More</a>
            </div>
            
            <div class="lottery-info-card">
                <h3>🏆 Prize Categories</h3>
                <p>Quinigol offers multiple prize categories based on how many match scores you correctly predict. Match all 6 results to win the top prize!</p>
                <a href="#" class="lottery-btn">View Prizes</a>
            </div>
            
            <div class="lottery-info-card">
                <h3>📅 Draw Schedule</h3>
                <p>Quinigol draws take place weekly during the football season, typically on weekends. Check back for the latest results!</p>
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

// Team search functionality
function searchTeam() {
    const teamName = document.getElementById('team-name').value.trim();
    
    if (!teamName) {
        alert('Please enter a team name to search');
        return;
    }
    
    if (teamName.length < 3) {
        alert('Please enter at least 3 characters for team search');
        return;
    }
    
    // This would implement actual team search logic
    alert(`Searching for Quinigol matches with team: "${teamName}"\n\nThis would search through all Quinigol draws to find matches involving this team.`);
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
                    // Football season typically runs from August to May
                    const currentMonth = today.getMonth();
                    if (currentMonth >= 7) { // August onwards
                        dateFrom = today.getFullYear() + '-08-01';
                    } else { // January to July
                        dateFrom = (today.getFullYear() - 1) + '-08-01';
                    }
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
    
    // Team search input validation and enter key support
    const teamInput = document.getElementById('team-name');
    teamInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            searchTeam();
        }
    });
    
    // Add autocomplete suggestions for common teams
    const commonTeams = ['Real Madrid', 'Barcelona', 'Atletico Madrid', 'Sevilla', 'Valencia', 'Villarreal', 'Real Sociedad', 'Athletic Bilbao'];
    
    teamInput.addEventListener('input', function() {
        const value = this.value.toLowerCase();
        // You could implement autocomplete dropdown here
        console.log('Team search input:', value);
    });
});
</script>

<?php get_footer(); ?>
