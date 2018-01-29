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

"" set colortheme
colorscheme delek

"" Pathogen

call pathogen#infect()
syntax on
filetype plugin indent on

"" NERDTree Shortcuts
no <C-t> :NERDTreeToggle<CR>
no <C-f> :NERDTreeFocus<CR>

"" Tab keys
no <C-Tab> :tabnext<CR>
no <C-S-Tab> :tabpreveous<CR>
ino <C-Tab> <ESC>:tabnext<CR>
ino <C-S-Tab> <ESC>:tabprevious<CR>

"" Auto Center
no G Gzz
no gg ggzz
no [ [zz
no ] ]zz

"" matching thingies
ino <leader>" ""<ESC>i
ino <leader>' ''<ESC>i
ino <leader>( ()<ESC>i
ino <leader>{ {}<ESC>i
ino <leader>[ []<ESC>i
