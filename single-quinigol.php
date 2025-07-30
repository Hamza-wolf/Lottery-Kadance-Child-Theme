<?php
/**
 * Single Quinigol Template - Complete Lottery Results (Enhanced Version)
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

.quinigol-results-display {
    display: flex;
    flex-direction: column;
    gap: 20px;
    margin: 20px 0;
}

.matches-section {
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

.matches-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
    gap: 15px;
    margin: 20px 0;
}

.match-result {
    background: white;
    border: 2px solid #e9ecef;
    border-radius: 12px;
    padding: 15px 10px;
    text-align: center;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.match-result:hover {
    border-color: #e84393;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(232, 67, 147, 0.2);
}

.match-number {
    font-size: 0.9rem;
    font-weight: bold;
    color: #666;
    text-transform: uppercase;
}

.goals-display {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
    font-size: 1.5rem;
    font-weight: bold;
    color: #2c3e50;
}

.goals-home, .goals-away {
    background: #e84393;
    color: white;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
}

.goals-separator {
    color: #666;
    font-size: 1.2rem;
}

.teams-info {
    font-size: 0.8rem;
    color: #666;
    text-align: center;
    line-height: 1.2;
}

.goal-range {
    background: #f8f9fa;
    border: 2px solid #e84393;
    border-radius: 12px;
    padding: 15px;
    text-align: center;
    margin: 15px 0;
}

.range-title {
    font-size: 1rem;
    font-weight: bold;
    color: #e84393;
    margin-bottom: 10px;
}

.range-values {
    display: flex;
    justify-content: center;
    gap: 10px;
    flex-wrap: wrap;
}

.range-value {
    background: #e84393;
    color: white;
    padding: 8px 12px;
    border-radius: 20px;
    font-weight: bold;
    font-size: 0.9rem;
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

.quinigol-special {
    background: linear-gradient(135deg, #e84393, #d63384);
    color: white;
    padding: 20px;
    border-radius: 15px;
    text-align: center;
    margin: 20px 0;
}

.football-goals-theme {
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 20"><text y="15" font-size="12" fill="%23e84393">🥅🥅🥅🥅🥅</text></svg>') repeat-x;
    padding: 10px 0;
    text-align: center;
}

.winning-combination {
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    border: 2px solid #e84393;
    padding: 20px;
    border-radius: 15px;
    margin: 20px 0;
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
    
    .matches-grid {
        grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
        gap: 10px;
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
    
    .goals-home, .goals-away {
        width: 30px;
        height: 30px;
        font-size: 1rem;
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
                    <a href="<?php echo home_url('/quinigol/'); ?>"><span class="icon">🥅</span> Quinigol</a>
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
        
        function parse_quinigol_results($results) {
            if (empty($results)) return [];
            
            if (is_array($results)) {
                return $results;
            }
            
            // Parse string format for goal predictions
            if (is_string($results)) {
                $parsed = [];
                
                // Try different separators
                if (strpos($results, ',') !== false) {
                    return explode(',', $results);
                } elseif (strpos($results, '-') !== false) {
                    return explode('-', $results);
                } elseif (strpos($results, '|') !== false) {
                    return explode('|', $results);
                } else {
                    // Parse as space-separated values
                    return array_filter(explode(' ', trim($results)));
                }
            }
            
            return [];
        }
        
        function parse_goal_ranges($ranges) {
            if (empty($ranges)) return [];
            
            if (is_array($ranges)) {
                return $ranges;
            }
            
            // Parse goal range format like "0-1,2-3,4-6,7+"
            if (is_string($ranges)) {
                return array_filter(explode(',', $ranges));
            }
            
            return [];
        }
        
        // Enhanced data retrieval with comprehensive fallbacks
        $draw_date = get_post_meta(get_the_ID(), '_draw_date', true);
        $draw_number = get_post_meta(get_the_ID(), '_draw_number', true) 
                    ?: get_post_meta(get_the_ID(), '_draw_id', true)
                    ?: get_post_meta(get_the_ID(), '_numero_sorteo', true)
                    ?: get_post_meta(get_the_ID(), '_jornada', true);
        
        // Enhanced prize/jackpot detection - Quinigol specific
        $advertised_jackpot = get_post_meta(get_the_ID(), '_advertised_jackpot', true) 
                           ?: get_post_meta(get_the_ID(), '_jackpot', true)
                           ?: get_post_meta(get_the_ID(), '_prize_amount', true)
                           ?: get_post_meta(get_the_ID(), '_bote', true)
                           ?: get_post_meta(get_the_ID(), '_premio_especial', true);
        
        // Quinigol specific results - goal predictions
        $quinigol_results_raw = get_post_meta(get_the_ID(), '_quinigol_results', true) 
                             ?: get_post_meta(get_the_ID(), '_goal_results', true)
                             ?: get_post_meta(get_the_ID(), '_results', true)
                             ?: get_post_meta(get_the_ID(), '_winning_combination', true)
                             ?: get_post_meta(get_the_ID(), '_combinacion_ganadora', true);
        
        $quinigol_results = parse_quinigol_results($quinigol_results_raw);
        
        // Goal ranges (0-1, 2-3, 4-6, 7+)
        $goal_ranges_raw = get_post_meta(get_the_ID(), '_goal_ranges', true) 
                        ?: get_post_meta(get_the_ID(), '_rangos_goles', true)
                        ?: get_post_meta(get_the_ID(), '_goal_categories', true);
        
        $goal_ranges = parse_goal_ranges($goal_ranges_raw);
        
        // Match information with goals
        $matches_info = get_post_meta(get_the_ID(), '_matches_info', true) 
                     ?: get_post_meta(get_the_ID(), '_partidos', true)
                     ?: get_post_meta(get_the_ID(), '_equipos_goles', true);
        
        // Specific goal predictions for matches
        $match_goals = get_post_meta(get_the_ID(), '_match_goals', true) 
                    ?: get_post_meta(get_the_ID(), '_goles_partidos', true);
        
        // Financial data with fallbacks
        $total_bets = get_post_meta(get_the_ID(), '_total_bets', true) 
                   ?: get_post_meta(get_the_ID(), '_bets_received', true)
                   ?: get_post_meta(get_the_ID(), '_apuestas_totales', true);
        
        $collected = get_post_meta(get_the_ID(), '_collected', true) 
                  ?: get_post_meta(get_the_ID(), '_total_collected', true)
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
            $prize_breakdown = get_post_meta(get_the_ID, '_categories', true);
        }
        if (empty($prize_breakdown)) {
            $prize_breakdown = get_post_meta(get_the_ID(), '_categorias_premios', true);
        }
        
        // Technical details
        $season = get_post_meta(get_the_ID(), '_season', true) 
               ?: get_post_meta(get_the_ID(), '_temporada', true);
        $matchday = get_post_meta(get_the_ID(), '_matchday', true) 
                 ?: get_post_meta(get_the_ID(), '_jornada', true);
        $draw_time = get_post_meta(get_the_ID(), '_draw_time', true);
        $next_draw_date = get_post_meta(get_the_ID(), '_next_draw_date', true);
        
        // Quinigol specific fields
        $league_name = get_post_meta(get_the_ID(), '_league_name', true) ?: 'Spanish Liga';
        $draw_frequency = get_post_meta(get_the_ID(), '_draw_frequency', true) ?: 'Weekly';
        
        // Get ALL meta data for debugging
        $all_meta = get_post_meta(get_the_ID());
    ?>
    
    <a href="<?php echo home_url(); ?>" class="back-button">
        ← Back to Results
    </a>
    
    <div class="lottery-single-header">
        <h1 class="lottery-game-title">
            <span class="lottery-game-icon">🥅</span>
            <?php the_title(); ?>
        </h1>
        <p class="lottery-game-subtitle">
            Draw Date: <?php echo esc_html($draw_date ? date('F j, Y', strtotime($draw_date)) : 'N/A'); ?>
            <?php if ($draw_number): ?>
                | Draw #<?php echo esc_html($draw_number); ?>
            <?php endif; ?>
            <?php if ($matchday): ?>
                | Matchday <?php echo esc_html($matchday); ?>
            <?php endif; ?>
        </p>
    </div>

    <div class="lottery-content-grid">
        <div class="main-content">
            <!-- Quinigol Results (Enhanced for Goal Betting) -->
            <div class="info-card">
                <h2 class="card-title">🥅 Quinigol Results</h2>
                
                <div class="quinigol-special">
                    <h3 style="margin: 0 0 15px 0;">⚽ Football Goal Predictions</h3>
                    <div class="football-goals-theme"></div>
                </div>
                
                <div class="quinigol-results-display">
                    <?php if (!empty($goal_ranges)): ?>
                    <!-- Goal Ranges Display -->
                    <div class="goal-range">
                        <div class="range-title">🎯 Winning Goal Ranges</div>
                        <div class="range-values">
                            <?php 
                            foreach($goal_ranges as $range) {
                                echo '<div class="range-value">' . esc_html(trim($range)) . '</div>';
                            }
                            ?>
                        </div>
                        <p style="margin: 10px 0 0 0; color: #666; font-size: 0.9rem;">Goal ranges for different match categories</p>
                    </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($quinigol_results)): ?>
                    <!-- Individual Match Goal Results -->
                    <div class="matches-section">
                        <div class="section-title">🏟️ Match Goal Results</div>
                        <div class="matches-grid">
                            <?php 
                            $match_count = min(6, count($quinigol_results)); // Quinigol typically has 6 matches
                            for ($i = 0; $i < $match_count; $i++) {
                                $result = $quinigol_results[$i];
                                $match_num = $i + 1;
                                
                                // Parse goal result (could be "2-1", "0-0", "3+", etc.)
                                if (strpos($result, '-') !== false) {
                                    $goals = explode('-', $result);
                                    $home_goals = trim($goals[0]);
                                    $away_goals = trim($goals[1]);
                                } else {
                                    // Single value or range
                                    $home_goals = $result;
                                    $away_goals = '';
                                }
                                
                                echo '<div class="match-result">';
                                echo '<div class="match-number">Match ' . $match_num . '</div>';
                                
                                if ($away_goals !== '') {
                                    echo '<div class="goals-display">';
                                    echo '<div class="goals-home">' . esc_html($home_goals) . '</div>';
                                    echo '<div class="goals-separator">-</div>';
                                    echo '<div class="goals-away">' . esc_html($away_goals) . '</div>';
                                    echo '</div>';
                                    echo '<div class="teams-info">Final Score</div>';
                                } else {
                                    echo '<div class="goals-display">';
                                    echo '<div class="goals-home">' . esc_html($home_goals) . '</div>';
                                    echo '</div>';
                                    echo '<div class="teams-info">Goal Range</div>';
                                }
                                
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                    
                    <!-- Winning Combination -->
                    <div class="winning-combination">
                        <h4>🏆 Winning Combination</h4>
                        <p style="font-size: 1.2rem; font-weight: bold; color: #e84393; margin: 10px 0;">
                            <?php echo esc_html(implode(' | ', $quinigol_results)); ?>
                        </p>
                        <p style="margin: 10px 0 0 0; color: #666; font-size: 0.9rem;">Goal predictions for matches</p>
                    </div>
                    
                    <?php else: ?>
                        <p style="color: #666; font-style: italic; text-align: center;">Quinigol results not available</p>
                    <?php endif; ?>
                </div>
            </div>
            
            <!-- League Information -->
            <?php if ($season || $matchday || $league_name): ?>
            <div class="info-card">
                <h2 class="card-title">🏆 League Information</h2>
                <div class="stats-grid">
                    <?php if ($league_name): ?>
                    <div class="stat-item">
                        <div class="stat-label">League</div>
                        <div class="stat-value"><?php echo esc_html($league_name); ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($season): ?>
                    <div class="stat-item">
                        <div class="stat-label">Season</div>
                        <div class="stat-value"><?php echo esc_html($season); ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($matchday): ?>
                    <div class="stat-item">
                        <div class="stat-label">Matchday</div>
                        <div class="stat-value"><?php echo esc_html($matchday); ?></div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($draw_frequency): ?>
                    <div class="stat-item">
                        <div class="stat-label">Draw Frequency</div>
                        <div class="stat-value"><?php echo esc_html($draw_frequency); ?></div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- Draw Statistics -->
            <?php if ($total_bets || $collected || $advertised_jackpot || $prizes_total || $total_winners) : ?>
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
                        <div class="stat-label">Special Prize</div>
                        <div class="stat-value jackpot-value">
                            <?php echo safe_currency_format($advertised_jackpot); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($total_bets) : ?>
                    <div class="stat-item">
                        <div class="stat-label">Total Bets</div>
                        <div class="stat-value"><?php echo safe_number_format($total_bets); ?></div>
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
                        echo '<p>This Quinigol draw took place on <strong>' . esc_html($draw_date ? date('F j, Y', strtotime($draw_date)) : 'N/A') . '</strong>.</p>';
                        if ($matchday) {
                            echo '<p>This was matchday <strong>' . esc_html($matchday) . '</strong> of the ' . esc_html($season ?: 'current season') . '.</p>';
                        }
                        if ($advertised_jackpot) {
                            echo '<p>The special prize for this draw was <strong>' . safe_currency_format($advertised_jackpot) . '</strong>.</p>';
                        }
                        echo '<p>Quinigol is Spain\'s football goal prediction game where players predict the number of goals in selected matches.</p>';
                        echo '<p>Players win by correctly predicting goal ranges or exact scores across multiple football matches.</p>';
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
                    <a href="<?php echo home_url('/quinigol/'); ?>" class="quick-link-btn">🥅 More Quinigol</a>
                </div>
            </div>
            
            <!-- About This Draw -->
            <div class="info-card">
                <h3 class="card-title">ℹ️ About This Draw</h3>
                <p>This Quinigol draw took place on <strong><?php echo esc_html($draw_date ? date('F j, Y', strtotime($draw_date)) : 'N/A'); ?></strong>.</p>
                <?php if ($matchday) : ?>
                <p>Matchday <strong><?php echo esc_html($matchday); ?></strong> of the <?php echo esc_html($season ?: 'current season'); ?>.</p>
                <?php endif; ?>
                <?php if ($advertised_jackpot) : ?>
                <p>Special prize: <strong><?php echo safe_currency_format($advertised_jackpot); ?></strong>.</p>
                <?php endif; ?>
                <p>Quinigol is Spain's football goal prediction betting game.</p>
            </div>
            
            <!-- How to Play Quinigol -->
            <div class="info-card">
                <h3 class="card-title">🎮 How to Play Quinigol</h3>
                <ul style="margin: 0; padding-left: 20px;">
                    <li><strong>Predict goals:</strong> Choose goal ranges for matches</li>
                    <li><strong>6 matches:</strong> Usually 6 selected matches</li>
                    <li><strong>Goal ranges:</strong> 0-1, 2-3, 4-6, 7+ goals</li>
                    <li><strong>Exact scores:</strong> Some variants use exact scores</li>
                    <li><strong>Multiple bets:</strong> Different combinations allowed</li>
                    <li>Based on real football match results</li>
                </ul>
            </div>
            
            <!-- Goal Ranges -->
            <div class="info-card">
                <h3 class="card-title">⚽ Goal Range System</h3>
                <div style="background: #f8f9fa; padding: 15px; border-radius: 8px;">
                    <div style="margin: 5px 0;"><strong>0-1 goals:</strong> Low-scoring matches</div>
                    <div style="margin: 5px 0;"><strong>2-3 goals:</strong> Average-scoring matches</div>
                    <div style="margin: 5px 0;"><strong>4-6 goals:</strong> High-scoring matches</div>
                    <div style="margin: 5px 0;"><strong>7+ goals:</strong> Very high-scoring matches</div>
                </div>
                <p style="margin-top: 10px; font-size: 0.9rem; color: #666;">Predict the total goals in each match!</p>
            </div>
            
            <!-- Betting Strategy -->
            <div class="info-card">
                <h3 class="card-title">🎯 Betting Strategy</h3>
                <div style="display: flex; flex-direction: column; gap: 10px;">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <span style="color: #e84393; font-size: 1.5rem;">🥅</span>
                        <span>Analyze team scoring patterns</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <span style="color: #e84393; font-size: 1.5rem;">📊</span>
                        <span>Consider defensive records</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <span style="color: #e84393; font-size: 1.5rem;">⚽</span>
                        <span>Watch weather conditions</span>
                    </div>
                </div>
            </div>
            
            <!-- Match Categories -->
            <?php if (!empty($goal_ranges)): ?>
            <div class="info-card">
                <h3 class="card-title">📋 This Draw's Categories</h3>
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <?php foreach($goal_ranges as $range): ?>
                        <div style="background: #e84393; color: white; padding: 8px 12px; border-radius: 15px; text-align: center; font-weight: bold;">
                            <?php echo esc_html(trim($range)); ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                <p style="margin-top: 10px; font-size: 0.9rem; color: #666;">Goal ranges for this specific draw</p>
            </div>
            <?php endif; ?>
            
            <!-- Football Goal Betting -->
            <div class="info-card">
                <h3 class="card-title">🏆 Goal Betting Tradition</h3>
                <p>Quinigol focuses specifically on goal prediction, making it unique among Spanish betting games.</p>
                <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; margin: 10px 0;">
                    <div style="margin: 5px 0;"><strong>Goal-focused</strong> betting system</div>
                    <div style="margin: 5px 0;"><strong>Statistical analysis</strong> of team performance</div>
                    <div style="margin: 5px 0;"><strong>Weekly draws</strong> based on league matches</div>
                </div>
                <p style="font-size: 0.9rem; color: #666;">Perfect for football statistics enthusiasts!</p>
            </div>
        </div>
    </div>
    
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
