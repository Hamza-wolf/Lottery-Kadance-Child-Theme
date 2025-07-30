<?php
/**
 * Single Bonoloto Template - Complete Lottery Results (Enhanced Version)
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
    flex-wrap: wrap;
    gap: 12px;
    justify-content: center;
    margin: 20px 0;
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

.star-number {
    background: linear-gradient(135deg, #f39c12, #e67e22);
    box-shadow: 0 4px 12px rgba(243, 156, 18, 0.4);
}

.complementary-number {
    background: linear-gradient(135deg, #9b59b6, #8e44ad);
    box-shadow: 0 4px 12px rgba(155, 89, 182, 0.4);
}

.reintegro-number {
    background: linear-gradient(135deg, #e74c3c, #c0392b);
    box-shadow: 0 4px 12px rgba(231, 76, 60, 0.4);
}

.bonus-number {
    background: linear-gradient(135deg, #27ae60, #229954);
    box-shadow: 0 4px 12px rgba(39, 174, 96, 0.4);
}

.lucky-star {
    background: linear-gradient(135deg, #8e44ad, #7d3c98);
    box-shadow: 0 4px 12px rgba(142, 68, 173, 0.4);
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

.section-divider {
    width: 100%;
    text-align: center;
    margin: 15px 0;
    font-weight: bold;
    color: #666;
    text-transform: uppercase;
    letter-spacing: 1px;
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
    
    .winning-numbers-display {
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
        
        // Enhanced jackpot detection
        $advertised_jackpot = get_post_meta(get_the_ID(), '_advertised_jackpot', true) 
                           ?: get_post_meta(get_the_ID(), '_jackpot', true)
                           ?: get_post_meta(get_the_ID(), '_prize_amount', true)
                           ?: get_post_meta(get_the_ID(), '_jackpot_amount', true)
                           ?: get_post_meta(get_the_ID(), '_primera_categoria', true)
                           ?: get_post_meta(get_the_ID(), '_first_category', true);
        
        // Enhanced winning numbers handling
        $winning_numbers_raw = get_post_meta(get_the_ID(), '_winning_numbers', true) 
                            ?: get_post_meta(get_the_ID(), '_numbers', true)
                            ?: get_post_meta(get_the_ID(), '_main_numbers', true)
                            ?: get_post_meta(get_the_ID(), '_numeros_ganadores', true);
        
        $winning_numbers = parse_numbers($winning_numbers_raw);
        
        // Special numbers with multiple fallbacks
        $complementary_number = get_post_meta(get_the_ID(), '_complementary_number', true) 
                             ?: get_post_meta(get_the_ID(), '_complementary', true)
                             ?: get_post_meta(get_the_ID(), '_complementario', true)
                             ?: get_post_meta(get_the_ID(), '_numero_complementario', true);
        
        $reintegro = get_post_meta(get_the_ID(), '_reintegro', true) 
                  ?: get_post_meta(get_the_ID(), '_reintegro_number', true)
                  ?: get_post_meta(get_the_ID(), '_numero_reintegro', true);
        
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
        
        $rollover_amount = get_post_meta(get_the_ID(), '_rollover_amount', true)
                        ?: get_post_meta(get_the_ID(), '_acumulado', true);
        
        $next_jackpot = get_post_meta(get_the_ID(), '_next_jackpot', true)
                     ?: get_post_meta(get_the_ID(), '_proximo_bote', true);
        
        // Prize breakdown with enhanced handling
        $prize_breakdown = get_post_meta(get_the_ID(), '_prize_breakdown', true);
        if (empty($prize_breakdown)) {
            $prize_breakdown = get_post_meta(get_the_ID(), '_prizes', true);
        }
        if (empty($prize_breakdown)) {
            $prize_breakdown = get_post_meta(get_the_ID(), '_categories', true);
        }
        if (empty($prize_breakdown)) {
            $prize_breakdown = get_post_meta(get_the_ID(), '_categorias', true);
        }
        
        // Technical details
        $draw_machine = get_post_meta(get_the_ID(), '_draw_machine', true)
                     ?: get_post_meta(get_the_ID(), '_maquina_sorteo', true);
        $draw_set = get_post_meta(get_the_ID(), '_draw_set', true)
                 ?: get_post_meta(get_the_ID(), '_juego_bolas', true);
        $draw_time = get_post_meta(get_the_ID(), '_draw_time', true)
                  ?: get_post_meta(get_the_ID(), '_hora_sorteo', true);
        $draw_location = get_post_meta(get_the_ID(), '_draw_location', true)
                      ?: get_post_meta(get_the_ID(), '_lugar_sorteo', true);
        $next_draw_date = get_post_meta(get_the_ID(), '_next_draw_date', true)
                       ?: get_post_meta(get_the_ID(), '_proximo_sorteo', true);
        
        // Get ALL meta data for debugging
        $all_meta = get_post_meta(get_the_ID());
    ?>
    
    <a href="<?php echo home_url(); ?>" class="back-button">
        ← Back to Results
    </a>
    
    <div class="lottery-single-header">
        <h1 class="lottery-game-title">
            <span class="lottery-game-icon">🍀</span>
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
            <!-- Winning Numbers (Enhanced) -->
            <div class="info-card">
                <h2 class="card-title">🎯 Winning Numbers</h2>
                <div class="winning-numbers-display">
                    <?php 
                    // Display main winning numbers
                    if (!empty($winning_numbers)) {
                        foreach($winning_numbers as $num) {
                            echo '<div class="number-ball">' . esc_html($num) . '</div>';
                        }
                    } else {
                        echo '<p>No winning numbers available</p>';
                    }
                    
                    // Display complementary number if available
                    if (!empty($complementary_number)) {
                        echo '<div class="section-divider">🔮 Complementary Number</div>';
                        echo '<div class="number-ball complementary-number">' . esc_html($complementary_number) . '</div>';
                    }
                    
                    // Display reintegro if available
                    if (!empty($reintegro)) {
                        echo '<div class="section-divider">🎲 Reintegro</div>';
                        echo '<div class="number-ball reintegro-number">' . esc_html($reintegro) . '</div>';
                    }
                    ?>
                </div>
            </div>
            
            <!-- Draw Statistics -->
            <?php if ($bets_received || $collected || $advertised_jackpot || $prizes_total || $total_winners || $rollover_amount || $next_jackpot) : ?>
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
                        <div class="stat-label">Advertised Jackpot</div>
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
                    
                    <?php if ($rollover_amount) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Rollover Amount</div>
                        <div class="stat-value"><?php echo safe_currency_format($rollover_amount); ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($next_jackpot) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Next Jackpot</div>
                        <div class="stat-value"><?php echo safe_currency_format($next_jackpot); ?></div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- Technical Details -->
            <?php if ($draw_machine || $draw_set || $draw_time || $draw_location || $next_draw_date) : ?>
            <div class="info-card">
                <h2 class="card-title">⚙️ Technical Details</h2>
                <div class="stats-grid">
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
                    
                    <?php if ($draw_time) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Draw Time</div>
                        <div class="stat-value"><?php echo esc_html($draw_time); ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($draw_location) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Draw Location</div>
                        <div class="stat-value"><?php echo esc_html($draw_location); ?></div>
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
                                <th>Category</th>
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
                                        $data = (array) $data; // Convert object to array
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
                <h2 class="card-title">📝 Draw Details</h2>
                <div class="content">
                    <?php 
                    $content = get_the_content();
                    if (!empty($content)) {
                        the_content();
                    } else {
                        echo '<p>This Bonoloto lottery draw took place on <strong>' . esc_html($draw_date ? date('F j, Y', strtotime($draw_date)) : 'N/A') . '</strong>.</p>';
                        if ($advertised_jackpot) {
                            echo '<p>The advertised jackpot for this draw was <strong>' . safe_currency_format($advertised_jackpot) . '</strong>.</p>';
                        }
                        echo '<p>Check the winning numbers above and compare them with your ticket to see if you won!</p>';
                        echo '<p>Bonoloto is one of Spain\'s most popular lottery games, with draws taking place multiple times per week.</p>';
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
                    <a href="<?php echo home_url('/bonoloto/'); ?>" class="quick-link-btn">🍀 More Bonoloto</a>
                </div>
            </div>
            
            <!-- About This Draw -->
            <div class="info-card">
                <h3 class="card-title">ℹ️ About This Draw</h3>
                <p>This Bonoloto draw took place on <strong><?php echo esc_html($draw_date ? date('F j, Y', strtotime($draw_date)) : 'N/A'); ?></strong>.</p>
                <?php if ($advertised_jackpot) : ?>
                <p>The advertised jackpot for this draw was <strong><?php echo safe_currency_format($advertised_jackpot); ?></strong>.</p>
                <?php endif; ?>
                <p>Bonoloto is one of Spain's most popular lottery games, drawn multiple times per week.</p>
            </div>
            
            <!-- How to Play -->
            <div class="info-card">
                <h3 class="card-title">🎮 How to Play Bonoloto</h3>
                <ul style="margin: 0; padding-left: 20px;">
                    <li>Choose 6 numbers from 1 to 49</li>
                    <li>Match all 6 numbers to win the jackpot</li>
                    <li>Additional prizes for matching 3, 4, or 5 numbers</li>
                    <li>Complementary number increases your chances</li>
                    <li>Reintegro gives you your money back</li>
                </ul>
            </div>
        </div>
    </div>
    
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
