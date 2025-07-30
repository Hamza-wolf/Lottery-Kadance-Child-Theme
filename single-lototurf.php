<?php
/**
 * Single Lototurf Template - Complete Lottery Results (Enhanced Version)
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

.horse-number {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #8b4513, #654321);
    box-shadow: 0 4px 12px rgba(139, 69, 19, 0.4);
    position: relative;
    border: 3px solid #fff;
}

.horse-number::before {
    content: '🏇';
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

.race-number {
    background: linear-gradient(135deg, #27ae60, #229954);
    box-shadow: 0 4px 12px rgba(39, 174, 96, 0.4);
}

.finishing-position {
    background: linear-gradient(135deg, #f39c12, #e67e22);
    box-shadow: 0 4px 12px rgba(243, 156, 18, 0.4);
}

.track-number {
    background: linear-gradient(135deg, #9b59b6, #8e44ad);
    box-shadow: 0 4px 12px rgba(155, 89, 182, 0.4);
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

.lototurf-special {
    background: linear-gradient(135deg, #8b4513, #654321);
    color: white;
    padding: 20px;
    border-radius: 15px;
    text-align: center;
    margin: 20px 0;
}

.race-info {
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    border: 2px solid #8b4513;
    padding: 20px;
    border-radius: 15px;
    margin: 20px 0;
}

.horse-racing-theme {
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 20"><text y="15" font-size="12" fill="%23654321">🏇🏇🏇🏇🏇</text></svg>') repeat-x;
    padding: 10px 0;
    text-align: center;
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
                    return array_filter(array_map('trim', $nums), function($n) { return !empty($n); });
                }
            }
            
            // If no separator found, check if it's a single number
            if (!empty(trim($numbers))) {
                return [trim($numbers)];
            }
            
            return [];
        }
        
        // Enhanced data retrieval with comprehensive fallbacks
        $draw_date = get_post_meta(get_the_ID(), '_draw_date', true);
        $draw_number = get_post_meta(get_the_ID(), '_draw_number', true) 
                    ?: get_post_meta(get_the_ID(), '_draw_id', true)
                    ?: get_post_meta(get_the_ID(), '_numero_sorteo', true);
        
        // Enhanced jackpot detection - Lototurf specific
        $advertised_jackpot = get_post_meta(get_the_ID(), '_advertised_jackpot', true) 
                           ?: get_post_meta(get_the_ID(), '_jackpot', true)
                           ?: get_post_meta(get_the_ID(), '_prize_amount', true)
                           ?: get_post_meta(get_the_ID(), '_jackpot_amount', true);
        
        // Enhanced winning numbers handling
        $winning_numbers_raw = get_post_meta(get_the_ID(), '_winning_numbers', true) 
                            ?: get_post_meta(get_the_ID(), '_numbers', true)
                            ?: get_post_meta(get_the_ID(), '_main_numbers', true)
                            ?: get_post_meta(get_the_ID(), '_numeros_ganadores', true);
        
        $winning_numbers = parse_numbers($winning_numbers_raw);
        
        // Lototurf specific - Horse Racing related numbers
        $horse_numbers_raw = get_post_meta(get_the_ID(), '_horse_numbers', true) 
                          ?: get_post_meta(get_the_ID(), '_caballos', true)
                          ?: get_post_meta(get_the_ID(), '_numeros_caballos', true);
        
        $horse_numbers = parse_numbers($horse_numbers_raw);
        
        $race_numbers_raw = get_post_meta(get_the_ID(), '_race_numbers', true) 
                         ?: get_post_meta(get_the_ID(), '_carreras', true)
                         ?: get_post_meta(get_the_ID(), '_numeros_carreras', true);
        
        $race_numbers = parse_numbers($race_numbers_raw);
        
        $finishing_positions_raw = get_post_meta(get_the_ID(), '_finishing_positions', true) 
                                ?: get_post_meta(get_the_ID(), '_posiciones', true)
                                ?: get_post_meta(get_the_ID(), '_orden_llegada', true);
        
        $finishing_positions = parse_numbers($finishing_positions_raw);
        
        // Track and race information
        $track_name = get_post_meta(get_the_ID(), '_track_name', true) 
                    ?: get_post_meta(get_the_ID(), '_hipodromo', true)
                    ?: get_post_meta(get_the_ID(), '_pista', true);
        
        $race_type = get_post_meta(get_the_ID(), '_race_type', true) 
                   ?: get_post_meta(get_the_ID(), '_tipo_carrera', true);
        
        $track_condition = get_post_meta(get_the_ID(), '_track_condition', true) 
                         ?: get_post_meta(get_the_ID(), '_estado_pista', true);
        
        // Financial data with fallbacks
        $bets_received = get_post_meta(get_the_ID(), '_bets_received', true) 
                      ?: get_post_meta(get_the_ID(), '_total_bets', true)
                      ?: get_post_meta(get_the_ID(), '_apuestas_recibidas', true);
        
        $collected = get_post_meta(get_the_ID(), '_collected', true) 
                  ?: get_post_meta(get_the_ID(), '_total_collected', true)
                  ?: get_post_meta(get_the_ID(), '_sales', true)
                  ?: get_post_meta(get_the_ID(), '_recaudacion', true);
        
        $prizes_total = get_post_meta(get_the_ID(), '_prizes_total', true) 
                     ?: get_post_meta(get_the_ID(), '_total_prizes', true)
                     ?: get_post_meta(get_the_ID(), '_total_premios', true);
        
        $total_winners = get_post_meta(get_the_ID(), '_total_winners', true)
                      ?: get_post_meta(get_the_ID(), '_ganadores_total', true);
        
        // Prize breakdown with enhanced handling
        $prize_breakdown = get_post_meta(get_the_ID(), '_prize_breakdown', true);
        if (empty($prize_breakdown)) {
            $prize_breakdown = get_post_meta(get_the_ID(), '_prizes', true);
        }
        if (empty($prize_breakdown)) {
            $prize_breakdown = get_post_meta(get_the_ID(), '_categories', true);
        }
        
        // Technical details
        $draw_time = get_post_meta(get_the_ID(), '_draw_time', true);
        $draw_location = get_post_meta(get_the_ID(), '_draw_location', true);
        $next_draw_date = get_post_meta(get_the_ID(), '_next_draw_date', true);
        
        // Lototurf specific fields
        $participating_races = get_post_meta(get_the_ID(), '_participating_races', true) ?: 6;
        $draw_frequency = get_post_meta(get_the_ID(), '_draw_frequency', true) ?: 'Multiple times per week';
        
        // Get ALL meta data for debugging
        $all_meta = get_post_meta(get_the_ID());
    ?>
    
    <a href="<?php echo home_url(); ?>" class="back-button">
        ← Back to Results
    </a>
    
    <div class="lottery-single-header">
        <h1 class="lottery-game-title">
            <span class="lottery-game-icon">🏇</span>
            <?php the_title(); ?>
        </h1>
        <p class="lottery-game-subtitle">
            Draw Date: <?php echo esc_html($draw_date ? date('F j, Y', strtotime($draw_date)) : 'N/A'); ?>
            <?php if ($draw_number): ?>
                | Draw #<?php echo esc_html($draw_number); ?>
            <?php endif; ?>
            <?php if ($track_name): ?>
                | 🏇 <?php echo esc_html($track_name); ?>
            <?php endif; ?>
        </p>
    </div>

    <div class="lottery-content-grid">
        <div class="main-content">
            <!-- Winning Numbers (Enhanced for Lototurf) -->
            <div class="info-card">
                <h2 class="card-title">🎯 Winning Numbers & Race Results</h2>
                
                <div class="winning-numbers-display">
                    <!-- Main Lottery Numbers -->
                    <?php if (!empty($winning_numbers)): ?>
                    <div class="numbers-section">
                        <div class="section-title">🔢 Lottery Numbers</div>
                        <div class="numbers-row">
                            <?php 
                            foreach($winning_numbers as $num) {
                                echo '<div class="number-ball main-ball">' . esc_html($num) . '</div>';
                            }
                            ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <!-- Horse Numbers -->
                    <?php if (!empty($horse_numbers)): ?>
                    <div class="numbers-section">
                        <div class="section-title">🏇 Horse Numbers</div>
                        <div class="numbers-row">
                            <?php 
                            foreach($horse_numbers as $horse) {
                                echo '<div class="number-ball horse-number">' . esc_html($horse) . '</div>';
                            }
                            ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <!-- Race Numbers -->
                    <?php if (!empty($race_numbers)): ?>
                    <div class="numbers-section">
                        <div class="section-title">🏁 Race Numbers</div>
                        <div class="numbers-row">
                            <?php 
                            foreach($race_numbers as $race) {
                                echo '<div class="number-ball race-number">' . esc_html($race) . '</div>';
                            }
                            ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <!-- Finishing Positions -->
                    <?php if (!empty($finishing_positions)): ?>
                    <div class="numbers-section">
                        <div class="section-title">🥇 Finishing Order</div>
                        <div class="numbers-row">
                            <?php 
                            foreach($finishing_positions as $position) {
                                echo '<div class="number-ball finishing-position">' . esc_html($position) . '</div>';
                            }
                            ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if (empty($winning_numbers) && empty($horse_numbers) && empty($race_numbers) && empty($finishing_positions)): ?>
                        <p style="color: #666; font-style: italic; text-align: center;">Race results not available</p>
                    <?php endif; ?>
                </div>
            </div>
            
            <!-- Race Information -->
            <?php if ($track_name || $race_type || $track_condition): ?>
            <div class="info-card">
                <h2 class="card-title">🏇 Race Information</h2>
                <div class="lototurf-special">
                    <h3 style="margin: 0 0 15px 0;">🏁 Race Details</h3>
                    <div class="horse-racing-theme"></div>
                </div>
                
                <div class="race-info">
                    <?php if ($track_name): ?>
                        <div style="margin: 10px 0;"><strong>🏇 Track:</strong> <?php echo esc_html($track_name); ?></div>
                    <?php endif; ?>
                    
                    <?php if ($race_type): ?>
                        <div style="margin: 10px 0;"><strong>🏁 Race Type:</strong> <?php echo esc_html($race_type); ?></div>
                    <?php endif; ?>
                    
                    <?php if ($track_condition): ?>
                        <div style="margin: 10px 0;"><strong>🌤️ Track Condition:</strong> <?php echo esc_html($track_condition); ?></div>
                    <?php endif; ?>
                    
                    <?php if ($participating_races): ?>
                        <div style="margin: 10px 0;"><strong>🏇 Number of Races:</strong> <?php echo esc_html($participating_races); ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- Draw Statistics -->
            <?php if ($bets_received || $collected || $advertised_jackpot || $prizes_total || $total_winners) : ?>
            <div class="info-card">
                <h2 class="card-title">📊 Draw Statistics</h2>
                <div class="stats-grid">
                    <?php if ($draw_number) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Draw Number</div>
                        <div class="stat-value"><?php echo esc_html($draw_number); ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($advertised_jackpot) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Advertised Prize</div>
                        <div class="stat-value jackpot-value">
                            <?php echo safe_currency_format($advertised_jackpot); ?>
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
                    
                    <?php if ($prizes_total) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Total Prizes</div>
                        <div class="stat-value"><?php echo safe_currency_format($prizes_total); ?></div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- Technical Details -->
            <?php if ($draw_time || $draw_location || $next_draw_date || $draw_frequency) : ?>
            <div class="info-card">
                <h2 class="card-title">⚙️ Draw Details</h2>
                <div class="stats-grid">
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
                        echo '<p>This Lototurf draw took place on <strong>' . esc_html($draw_date ? date('F j, Y', strtotime($draw_date)) : 'N/A') . '</strong>.</p>';
                        if ($advertised_jackpot) {
                            echo '<p>The advertised prize for this draw was <strong>' . safe_currency_format($advertised_jackpot) . '</strong>.</p>';
                        }
                        if ($track_name) {
                            echo '<p>🏇 The races took place at <strong>' . esc_html($track_name) . '</strong>.</p>';
                        }
                        echo '<p>Lototurf combines the excitement of lottery numbers with horse racing predictions, creating a unique gaming experience.</p>';
                        echo '<p>Players predict both lottery numbers and horse race outcomes for a chance to win!</p>';
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
                    <a href="<?php echo home_url('/lototurf/'); ?>" class="quick-link-btn">🏇 More Lototurf</a>
                </div>
            </div>
            
            <!-- About This Draw -->
            <div class="info-card">
                <h3 class="card-title">ℹ️ About This Draw</h3>
                <p>This Lototurf draw took place on <strong><?php echo esc_html($draw_date ? date('F j, Y', strtotime($draw_date)) : 'N/A'); ?></strong>.</p>
                <?php if ($advertised_jackpot) : ?>
                <p>The advertised prize for this draw was <strong><?php echo safe_currency_format($advertised_jackpot); ?></strong>.</p>
                <?php endif; ?>
                <?php if ($track_name) : ?>
                <p>🏇 Races took place at <strong><?php echo esc_html($track_name); ?></strong>.</p>
                <?php endif; ?>
                <p>Lototurf combines lottery excitement with horse racing predictions.</p>
            </div>
            
            <!-- How to Play Lototurf -->
            <div class="info-card">
                <h3 class="card-title">🎮 How to Play Lototurf</h3>
                <ul style="margin: 0; padding-left: 20px;">
                    <li><strong>Predict race outcomes</strong> from selected races</li>
                    <li><strong>Choose lottery numbers</strong> based on results</li>
                    <li>Combines <strong>horse racing</strong> and lottery</li>
                    <li>Multiple betting options available</li>
                    <li>Unique <strong>sports lottery</strong> experience</li>
                    <li>Based on real horse race results</li>
                </ul>
            </div>
            
            <!-- Race Information -->
            <div class="info-card">
                <h3 class="card-title">🏇 Race System</h3>
                <div style="background: #f8f9fa; padding: 15px; border-radius: 8px;">
                    <div style="margin: 5px 0;"><strong>Races:</strong> Usually 6-8 races per draw</div>
                    <div style="margin: 5px 0;"><strong>Predictions:</strong> Horse finishing positions</div>
                    <div style="margin: 5px 0;"><strong>Numbers:</strong> Based on race outcomes</div>
                    <div style="margin: 5px 0;"><strong>Prizes:</strong> Multiple prediction tiers</div>
                </div>
                <p style="margin-top: 10px; font-size: 0.9rem; color: #666;">A unique combination of sport and chance!</p>
            </div>
            
            <!-- Track Information -->
            <?php if ($track_name || $track_condition): ?>
            <div class="info-card">
                <h3 class="card-title">🏁 Track Details</h3>
                <?php if ($track_name): ?>
                    <div style="margin: 10px 0;"><strong>🏇 Track:</strong> <?php echo esc_html($track_name); ?></div>
                <?php endif; ?>
                
                <?php if ($track_condition): ?>
                    <div style="margin: 10px 0;"><strong>🌤️ Condition:</strong> <?php echo esc_html($track_condition); ?></div>
                <?php endif; ?>
                
                <?php if ($race_type): ?>
                    <div style="margin: 10px 0;"><strong>🏁 Race Type:</strong> <?php echo esc_html($race_type); ?></div>
                <?php endif; ?>
                
                <p style="margin-top: 10px; font-size: 0.9rem; color: #666;">Track conditions affect race outcomes and betting strategies.</p>
            </div>
            <?php endif; ?>
        </div>
    </div>
    
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
