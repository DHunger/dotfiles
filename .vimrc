no <up> ddkP
no <left> <Nop>
no <right> <Nop>
no <down> ddp

ino <up> <Nop>
ino <left> <Nop>
ino <right> <Nop>
ino <down> <Nop>

vno <up> <Nop>
vno <left> <Nop>
vno <right> <Nop>
vno <down> <Nop>

"" Tab Navigation
ino <C-h> <ESC>:tabprevious<CR>a
ino <C-l> <ESC>:tabnext<CR>a
vno <C-h> <ESC>:tabprevious<CR>
vno <C-l> <ESC>:tabnext<CR>
no <C-h> :tabprevious<CR>
no <C-l> :tabnext<CR>

""Buffer Navigation
no <C-up> :vsplit<CR>
no <C-left> <C-w>h
no <C-right> <C-w>l

"" set colortheme
colorscheme delek

"" enable utf-8
set encoding=utf-8
set fileencoding=utf-8

"" Pathogen

call pathogen#infect()
syntax on
filetype plugin indent on

"" NERDTree Shortcuts
no <C-t> :NERDTreeToggle<CR>
no <C-f> :NERDTreeFocus<CR>

""Line Numbers
set number relativenumber

""Autosave
ino <ESC> <ESC>:w<CR>
ino <C-ESC> <ESC>:w<CR>

"" Auto Center
no G Gzz
no gg ggzz
no { {zz
no } }zz

"" matching thingies
ino <leader>" ""<ESC>i
ino <leader>' ''<ESC>i
ino <leader>( ()<ESC>i
ino <leader>{ {}<ESC>i
ino <leader>[ []<ESC>i

""HTML Replace
""iabbr ü &uuml;
""iabbr Ü &Uuml;
""iabbr ö &ouml;
""iabbr Ö &Ouml;
""iabbr ä &auml;
""iabbr Ä &Äuml;
""iabbr ß &szlig;
ino <leader><CR> <br /><CR>
