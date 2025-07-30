<?php
/**
 * Single EuroDreams Template - Complete Lottery Results (Enhanced Version)
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

/* Modern Single Lottery Page Styles */
.lottery-single-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 30px 20px;
}

.lottery-single-header {
    background: rgba(255,255,255,0.95);
    backdrop-filter: blur(10px);
    padding: 40px;
    border-radius: 20px;
    text-align: center;
    margin-bottom: 30px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.1);
}

.lottery-game-title {
    font-size: 3rem;
    font-weight: 800;
    color: #2c3e50;
    margin: 0 0 10px 0;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
}

.lottery-game-icon {
    font-size: 3.5rem;
    filter: drop-shadow(0 4px 8px rgba(0,0,0,0.2));
}

.lottery-game-subtitle {
    font-size: 1.3rem;
    color: #7f8c8d;
    margin: 0;
}

.lottery-content-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 30px;
    margin-top: 30px;
}

.main-content {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.sidebar-content {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.info-card {
    background: white;
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    border: 2px solid #e8f4fd;
    transition: all 0.3s ease;
}

.info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.15);
    border-color: #3498db;
}

.card-title {
    font-size: 1.4rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.winning-numbers-display {
    display: flex;
    flex-direction: column;
    gap: 20px;
    margin: 20px 0;
}

.numbers-section {
    text-align: center;
}

.section-title {
    font-size: 1.1rem;
    font-weight: bold;
    color: #2c3e50;
    margin-bottom: 15px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.numbers-row {
    display: flex;
    justify-content: center;
    gap: 12px;
    flex-wrap: wrap;
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
    font-weight: bold;
    font-size: 1.2rem;
    box-shadow: 0 4px 12px rgba(52, 152, 219, 0.4);
    transition: all 0.3s ease;
}

.number-ball:hover {
    transform: scale(1.2) rotate(10deg);
    box-shadow: 0 6px 16px rgba(52, 152, 219, 0.6);
}

.main-ball {
    background: linear-gradient(135deg, #3498db, #2980b9);
    box-shadow: 0 4px 12px rgba(52, 152, 219, 0.4);
}

.dream-number {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #9b59b6, #8e44ad);
    box-shadow: 0 4px 12px rgba(155, 89, 182, 0.4);
    font-size: 1.4rem;
    border: 3px solid #fff;
    position: relative;
}

.dream-number::before {
    content: '💭';
    position: absolute;
    top: -15px;
    right: -10px;
    font-size: 1.5rem;
    background: #fff;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.complementary-number {
    background: linear-gradient(135deg, #f39c12, #e67e22);
    box-shadow: 0 4px 12px rgba(243, 156, 18, 0.4);
}

.reintegro-number {
    background: linear-gradient(135deg, #e74c3c, #c0392b);
    box-shadow: 0 4px 12px rgba(231, 76, 60, 0.4);
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
    margin: 20px 0;
}

.stat-item {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 12px;
    text-align: center;
    border: 2px solid #e9ecef;
    transition: all 0.3s ease;
}

.stat-item:hover {
    background: #e8f4fd;
    border-color: #3498db;
    transform: translateY(-3px);
}

.stat-label {
    font-size: 0.9rem;
    color: #6c757d;
    font-weight: 600;
    margin-bottom: 8px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    display: block;
}

.stat-value {
    font-size: 1.4rem;
    font-weight: 700;
    color: #2c3e50;
    display: block;
}

.jackpot-value {
    color: #e74c3c !important;
    font-size: 1.8rem !important;
}

.monthly-prize {
    color: #9b59b6 !important;
    font-size: 1.6rem !important;
}

.prize-breakdown {
    margin-top: 20px;
}

.prize-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.prize-table th,
.prize-table td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #e9ecef;
}

.prize-table th {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.prize-table tr:hover {
    background: #f8f9fa;
}

.back-button {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #3498db, #2980b9);
    color: white;
    padding: 12px 25px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(52, 152, 219, 0.3);
    margin-bottom: 20px;
}

.back-button:hover {
    background: linear-gradient(135deg, #2980b9, #1f5f8b);
    transform: translateY(-2px);
    text-decoration: none;
    color: white;
    box-shadow: 0 6px 16px rgba(52, 152, 219, 0.4);
}

.quick-link-btn {
    background: linear-gradient(135deg, #28a745, #20c997);
    color: white;
    padding: 10px 20px;
    border-radius: 20px;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
    box-shadow: 0 3px 10px rgba(40, 167, 69, 0.3);
    margin-bottom: 10px;
    width: 100%;
    justify-content: center;
}

.quick-link-btn:hover {
    background: linear-gradient(135deg, #218838, #1e7e34);
    transform: translateY(-2px);
    text-decoration: none;
    color: white;
    box-shadow: 0 5px 15px rgba(40, 167, 69, 0.4);
}

.debug-info {
    background: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: 8px;
    padding: 15px;
    margin-top: 20px;
    font-family: monospace;
    font-size: 12px;
    max-height: 300px;
    overflow-y: auto;
}

.eurodreams-special {
    background: linear-gradient(135deg, #9b59b6, #8e44ad);
    color: white;
    padding: 20px;
    border-radius: 15px;
    text-align: center;
    margin: 20px 0;
}

.monthly-winner-info {
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    border: 2px solid #9b59b6;
    padding: 20px;
    border-radius: 15px;
    margin: 20px 0;
}

@media (max-width: 768px) {
    .lottery-content-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .lottery-game-title {
        font-size: 2rem;
    }
    
    .lottery-game-icon {
        font-size: 2.5rem;
    }
    
    .stats-grid {
        grid-template-columns: 1fr;
    }
    
    .numbers-row {
        justify-content: center;
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

<div class="lottery-single-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); 
        
        // Helper functions
        function safe_number_format($value, $decimals = 0) {
            if (empty($value) || !is_numeric($value)) return 'N/A';
            return number_format($value, $decimals);
        }
        
        function safe_currency_format($value) {
            if (empty($value) || !is_numeric($value)) return 'N/A';
            return '€' . number_format($value, 2);
        }
        
        function parse_numbers($numbers) {
            if (empty($numbers)) return [];
            
            if (is_array($numbers)) {
                return array_filter($numbers, function($n) { return !empty($n); });
            }
            
            // Try different separators
            $separators = [',', '-', '|', ';', ' ', "\n", "\r\n"];
            foreach ($separators as $sep) {
                if (strpos($numbers, $sep) !== false) {
                    $nums = explode($sep, $numbers);
                    return array_filter(array_map('trim', $nums), function($n) { return !empty($n) && is_numeric($n); });
                }
            }
            
            // If no separator found, check if it's a single number
            if (is_numeric(trim($numbers))) {
                return [trim($numbers)];
            }
            
            return [];
        }
        
        // Enhanced data retrieval with comprehensive fallbacks
        $draw_date = get_post_meta(get_the_ID(), '_draw_date', true);
        $draw_number = get_post_meta(get_the_ID(), '_draw_number', true) 
                    ?: get_post_meta(get_the_ID(), '_draw_id', true)
                    ?: get_post_meta(get_the_ID(), '_numero_sorteo', true);
        
        // Enhanced jackpot detection - EuroDreams specific
        $advertised_jackpot = get_post_meta(get_the_ID(), '_advertised_jackpot', true) 
                           ?: get_post_meta(get_the_ID(), '_jackpot', true)
                           ?: get_post_meta(get_the_ID(), '_prize_amount', true)
                           ?: get_post_meta(get_the_ID(), '_jackpot_amount', true)
                           ?: get_post_meta(get_the_ID(), '_monthly_prize', true)
                           ?: get_post_meta(get_the_ID(), '_first_category_prize', true);
        
        // Monthly prize specific to EuroDreams
        $monthly_prize = get_post_meta(get_the_ID(), '_monthly_prize', true)
                      ?: get_post_meta(get_the_ID(), '_premio_mensual', true);
        
        $monthly_years = get_post_meta(get_the_ID(), '_monthly_years', true) ?: 30;
        
        // Enhanced winning numbers handling
        $winning_numbers_raw = get_post_meta(get_the_ID(), '_winning_numbers', true) 
                            ?: get_post_meta(get_the_ID(), '_numbers', true)
                            ?: get_post_meta(get_the_ID(), '_main_numbers', true)
                            ?: get_post_meta(get_the_ID(), '_numeros_ganadores', true);
        
        $winning_numbers = parse_numbers($winning_numbers_raw);
        
        // EuroDreams specific - Dream Number
        $dream_number = get_post_meta(get_the_ID(), '_dream_number', true) 
                     ?: get_post_meta(get_the_ID(), '_numero_sueno', true)
                     ?: get_post_meta(get_the_ID(), '_bonus_number', true);
        
        // Special numbers with multiple fallbacks
        $complementary_number = get_post_meta(get_the_ID(), '_complementary_number', true) 
                             ?: get_post_meta(get_the_ID(), '_complementary', true)
                             ?: get_post_meta(get_the_ID(), '_complementario', true);
        
        $reintegro = get_post_meta(get_the_ID(), '_reintegro', true) 
                  ?: get_post_meta(get_the_ID(), '_reintegro_number', true);
        
        // Financial data with fallbacks
        $bets_received = get_post_meta(get_the_ID(), '_bets_received', true) 
                      ?: get_post_meta(get_the_ID(), '_total_bets', true)
                      ?: get_post_meta(get_the_ID(), '_apuestas_recibidas', true);
        
        $collected = get_post_meta(get_the_ID(), '_collected', true) 
                  ?: get_post_meta(get_the_ID(), '_total_collected', true)
                  ?: get_post_meta(get_the_ID(), '_sales', true)
                  ?: get_post_meta(get_the_ID(), '_recaudacion', true);
        
        $european_earnings = get_post_meta(get_the_ID(), '_european_earnings', true)
                          ?: get_post_meta(get_the_ID(), '_ingresos_europeos', true);
        
        $prizes_total = get_post_meta(get_the_ID(), '_prizes_total', true) 
                     ?: get_post_meta(get_the_ID(), '_total_prizes', true)
                     ?: get_post_meta(get_the_ID(), '_total_premios', true);
        
        $total_winners = get_post_meta(get_the_ID(), '_total_winners', true)
                      ?: get_post_meta(get_the_ID(), '_ganadores_total', true);
        
        $rollover_amount = get_post_meta(get_the_ID(), '_rollover_amount', true)
                        ?: get_post_meta(get_the_ID(), '_acumulado', true);
        
        // Prize breakdown with enhanced handling
        $prize_breakdown = get_post_meta(get_the_ID(), '_prize_breakdown', true);
        if (empty($prize_breakdown)) {
            $prize_breakdown = get_post_meta(get_the_ID(), '_prizes', true);
        }
        if (empty($prize_breakdown)) {
            $prize_breakdown = get_post_meta(get_the_ID(), '_categories', true);
        }
        
        // Technical details
        $draw_machine = get_post_meta(get_the_ID(), '_draw_machine', true);
        $draw_set = get_post_meta(get_the_ID(), '_draw_set', true);
        $draw_time = get_post_meta(get_the_ID(), '_draw_time', true);
        $draw_location = get_post_meta(get_the_ID(), '_draw_location', true);
        $next_draw_date = get_post_meta(get_the_ID(), '_next_draw_date', true);
        
        // EuroDreams specific fields
        $participating_countries = get_post_meta(get_the_ID(), '_participating_countries', true);
        $draw_frequency = get_post_meta(get_the_ID(), '_draw_frequency', true) ?: 'Monday & Thursday';
        
        // Get ALL meta data for debugging
        $all_meta = get_post_meta(get_the_ID());
    ?>
    
    <a href="<?php echo home_url(); ?>" class="back-button">
        ← Back to Results
    </a>
    
    <div class="lottery-single-header">
        <h1 class="lottery-game-title">
            <span class="lottery-game-icon">💭</span>
            <?php the_title(); ?>
        </h1>
        <p class="lottery-game-subtitle">
            Draw Date: <?php echo esc_html($draw_date ? date('F j, Y', strtotime($draw_date)) : 'N/A'); ?>
            <?php if ($draw_number): ?>
                | Draw #<?php echo esc_html($draw_number); ?>
            <?php endif; ?>
        </p>
    </div>

    <div class="lottery-content-grid">
        <div class="main-content">
            <!-- Winning Numbers (Enhanced for EuroDreams) -->
            <div class="info-card">
                <h2 class="card-title">🎯 Winning Numbers</h2>
                
                <div class="winning-numbers-display">
                    <!-- Main Numbers Section -->
                    <div class="numbers-section">
                        <div class="section-title">🔢 Main Numbers (1-40)</div>
                        <div class="numbers-row">
                            <?php 
                            if (!empty($winning_numbers)) {
                                foreach($winning_numbers as $num) {
                                    echo '<div class="number-ball main-ball">' . esc_html($num) . '</div>';
                                }
                            } else {
                                echo '<p style="color: #666; font-style: italic;">Main numbers not available</p>';
                            }
                            ?>
                        </div>
                    </div>
                    
                    <!-- Dream Number Section -->
                    <?php if (!empty($dream_number)): ?>
                    <div class="numbers-section">
                        <div class="section-title">💭 Dream Number (1-5)</div>
                        <div class="numbers-row">
                            <div class="number-ball dream-number"><?php echo esc_html($dream_number); ?></div>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <!-- Additional Numbers if available -->
                    <?php if (!empty($complementary_number)): ?>
                    <div class="numbers-section">
                        <div class="section-title">🔮 Complementary Number</div>
                        <div class="numbers-row">
                            <div class="number-ball complementary-number"><?php echo esc_html($complementary_number); ?></div>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($reintegro)): ?>
                    <div class="numbers-section">
                        <div class="section-title">🎲 Reintegro</div>
                        <div class="numbers-row">
                            <div class="number-ball reintegro-number"><?php echo esc_html($reintegro); ?></div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            
            <!-- Monthly Prize Information -->
            <?php if ($monthly_prize || $advertised_jackpot): ?>
            <div class="info-card">
                <h2 class="card-title">💰 Prize Information</h2>
                <div class="eurodreams-special">
                    <h3 style="margin: 0 0 15px 0;">🏆 Top Prize Winner</h3>
                    <?php if ($monthly_prize): ?>
                        <div style="font-size: 2rem; font-weight: bold; margin: 10px 0;">
                            <?php echo safe_currency_format($monthly_prize); ?> per month
                        </div>
                        <div style="font-size: 1.2rem;">
                            For <?php echo esc_html($monthly_years); ?> years = <?php echo safe_currency_format($monthly_prize * 12 * $monthly_years); ?> total
                        </div>
                    <?php elseif ($advertised_jackpot): ?>
                        <div style="font-size: 2rem; font-weight: bold; margin: 10px 0;">
                            <?php echo safe_currency_format($advertised_jackpot); ?>
                        </div>
                    <?php endif; ?>
                </div>
                
                <?php if ($monthly_prize): ?>
                <div class="monthly-winner-info">
                    <h4>💭 What this means:</h4>
                    <ul style="margin: 10px 0; padding-left: 20px;">
                        <li><strong>Monthly payments:</strong> <?php echo safe_currency_format($monthly_prize); ?> every month</li>
                        <li><strong>Duration:</strong> <?php echo esc_html($monthly_years); ?> years guaranteed</li>
                        <li><strong>Annual total:</strong> <?php echo safe_currency_format($monthly_prize * 12); ?> per year</li>
                        <li><strong>Life-changing:</strong> Financial security for decades!</li>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            
            <!-- Draw Statistics -->
            <?php if ($bets_received || $collected || $european_earnings || $prizes_total || $total_winners || $rollover_amount) : ?>
            <div class="info-card">
                <h2 class="card-title">📊 Draw Statistics</h2>
                <div class="stats-grid">
                    <?php if ($draw_number) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Draw Number</div>
                        <div class="stat-value"><?php echo esc_html($draw_number); ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($monthly_prize) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Monthly Prize</div>
                        <div class="stat-value monthly-prize">
                            <?php echo safe_currency_format($monthly_prize); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($bets_received) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Bets Received</div>
                        <div class="stat-value"><?php echo safe_number_format($bets_received); ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($total_winners) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Total Winners</div>
                        <div class="stat-value"><?php echo safe_number_format($total_winners); ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($collected) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Total Collected</div>
                        <div class="stat-value"><?php echo safe_currency_format($collected); ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($european_earnings) : ?>
                    <div class="stat-item">
                        <div class="stat-label">European Earnings</div>
                        <div class="stat-value"><?php echo safe_currency_format($european_earnings); ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($prizes_total) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Total Prizes</div>
                        <div class="stat-value"><?php echo safe_currency_format($prizes_total); ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($rollover_amount) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Rollover Amount</div>
                        <div class="stat-value"><?php echo safe_currency_format($rollover_amount); ?></div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- Technical Details -->
            <?php if ($draw_machine || $draw_set || $draw_time || $draw_location || $next_draw_date || $participating_countries) : ?>
            <div class="info-card">
                <h2 class="card-title">⚙️ Draw Details</h2>
                <div class="stats-grid">
                    <?php if ($participating_countries) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Participating Countries</div>
                        <div class="stat-value"><?php echo esc_html($participating_countries); ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($draw_frequency) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Draw Frequency</div>
                        <div class="stat-value"><?php echo esc_html($draw_frequency); ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($draw_location) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Draw Location</div>
                        <div class="stat-value"><?php echo esc_html($draw_location); ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($draw_time) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Draw Time</div>
                        <div class="stat-value"><?php echo esc_html($draw_time); ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($draw_machine) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Draw Machine</div>
                        <div class="stat-value"><?php echo esc_html($draw_machine); ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($draw_set) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Draw Set</div>
                        <div class="stat-value"><?php echo esc_html($draw_set); ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($next_draw_date) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Next Draw Date</div>
                        <div class="stat-value"><?php echo esc_html(date('F j, Y', strtotime($next_draw_date))); ?></div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- Prize Breakdown -->
            <?php if (!empty($prize_breakdown) && (is_array($prize_breakdown) || is_object($prize_breakdown))) : ?>
            <div class="info-card">
                <h2 class="card-title">🏆 Prize Breakdown</h2>
                <div class="prize-breakdown">
                    <table class="prize-table">
                        <thead>
                            <tr>
                                <th>Prize Category</th>
                                <th>Winners</th>
                                <th>Prize per Winner</th>
                                <th>Total Prize</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if (is_array($prize_breakdown)) {
                                foreach ($prize_breakdown as $category => $data) {
                                    if (is_array($data) || is_object($data)) {
                                        $data = (array) $data;
                                        $winners = $data['winners'] ?? $data['ganadores'] ?? 'N/A';
                                        $prize = $data['prize_per_winner'] ?? $data['prize'] ?? $data['premio'] ?? 0;
                                        $total = $data['total_prize'] ?? $data['total'] ?? ($winners * $prize);
                                        
                                        echo '<tr>';
                                        echo '<td><strong>' . esc_html($category) . '</strong></td>';
                                        echo '<td>' . esc_html($winners) . '</td>';
                                        echo '<td>' . safe_currency_format($prize) . '</td>';
                                        echo '<td>' . safe_currency_format($total) . '</td>';
                                        echo '</tr>';
                                    }
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- Draw Details Content -->
            <div class="info-card">
                <h2 class="card-title">📝 About This Draw</h2>
                <div class="content">
                    <?php 
                    $content = get_the_content();
                    if (!empty($content)) {
                        the_content();
                    } else {
                        echo '<p>This EuroDreams lottery draw took place on <strong>' . esc_html($draw_date ? date('F j, Y', strtotime($draw_date)) : 'N/A') . '</strong>.</p>';
                        if ($monthly_prize) {
                            echo '<p>The top prize winner will receive <strong>' . safe_currency_format($monthly_prize) . ' per month for ' . esc_html($monthly_years) . ' years</strong> - a total of <strong>' . safe_currency_format($monthly_prize * 12 * $monthly_years) . '</strong>!</p>';
                        } elseif ($advertised_jackpot) {
                            echo '<p>The advertised jackpot for this draw was <strong>' . safe_currency_format($advertised_jackpot) . '</strong>.</p>';
                        }
                        echo '<p>EuroDreams offers life-changing prizes with its unique monthly payment system, providing financial security for decades.</p>';
                        echo '<p>Check the winning numbers above and compare them with your ticket to see if you won!</p>';
                    }
                    ?>
                </div>
            </div>
            
            
        
        <div class="sidebar-content">
            <!-- Quick Links -->
            <div class="info-card">
                <h3 class="card-title">🔗 Quick Links</h3>
                <div style="display: flex; flex-direction: column; gap: 10px;">
                    <a href="<?php echo home_url(); ?>" class="quick-link-btn">🏠 Home</a>
                    <a href="<?php echo home_url('/results/'); ?>" class="quick-link-btn">🏆 All Results</a>
                    <a href="<?php echo home_url('/eurodreams/'); ?>" class="quick-link-btn">💭 More EuroDreams</a>
                </div>
            </div>
            
            <!-- About This Draw -->
            <div class="info-card">
                <h3 class="card-title">ℹ️ About This Draw</h3>
                <p>This EuroDreams draw took place on <strong><?php echo esc_html($draw_date ? date('F j, Y', strtotime($draw_date)) : 'N/A'); ?></strong>.</p>
                <?php if ($monthly_prize) : ?>
                <p>The top prize winner receives <strong><?php echo safe_currency_format($monthly_prize); ?> per month for <?php echo esc_html($monthly_years); ?> years</strong>!</p>
                <?php elseif ($advertised_jackpot) : ?>
                <p>The advertised jackpot for this draw was <strong><?php echo safe_currency_format($advertised_jackpot); ?></strong>.</p>
                <?php endif; ?>
                <p>EuroDreams offers life-changing monthly prizes across multiple European countries.</p>
            </div>
            
            <!-- How to Play EuroDreams -->
            <div class="info-card">
                <h3 class="card-title">🎮 How to Play EuroDreams</h3>
                <ul style="margin: 0; padding-left: 20px;">
                    <li><strong>6 main numbers</strong> from 1 to 40</li>
                    <li><strong>1 Dream number</strong> from 1 to 5</li>
                    <li>Top prize: €20,000/month for 30 years</li>
                    <li>Multiple prize tiers available</li>
                    <li>Draws every <strong>Monday & Thursday</strong></li>
                    <li>Available across Europe</li>
                </ul>
            </div>
            
            <!-- Monthly Prize Breakdown -->
            <?php if ($monthly_prize): ?>
            <div class="info-card">
                <h3 class="card-title">💰 Prize Structure</h3>
                <div style="background: #f8f9fa; padding: 15px; border-radius: 8px;">
                    <div style="margin: 5px 0;"><strong>Monthly:</strong> <?php echo safe_currency_format($monthly_prize); ?></div>
                    <div style="margin: 5px 0;"><strong>Yearly:</strong> <?php echo safe_currency_format($monthly_prize * 12); ?></div>
                    <div style="margin: 5px 0;"><strong>Total (<?php echo esc_html($monthly_years); ?> years):</strong> <?php echo safe_currency_format($monthly_prize * 12 * $monthly_years); ?></div>
                </div>
                <p style="margin-top: 10px; font-size: 0.9rem; color: #666;">Guaranteed monthly payments provide long-term financial security!</p>
            </div>
            <?php endif; ?>
            
            <!-- European Coverage -->
            <div class="info-card">
                <h3 class="card-title">🇪🇺 European Lottery</h3>
                <p>EuroDreams is available in multiple European countries including:</p>
                <div style="font-size: 0.9rem; color: #666;">
                    Spain, France, Belgium, Luxembourg, Austria, and more participating nations.
                </div>
                <p style="margin-top: 10px;">The unique monthly prize structure makes it different from traditional lotteries!</p>
            </div>
        </div>
    </div>
    
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
