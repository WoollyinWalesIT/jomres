
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/

/
/
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
D
E
S
C
'
,
 
'
R
e
s
e
r
v
e
s
 
r
Ã
 
p
i
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
S
H
O
W
P
R
O
F
I
L
E
S
'
,
 
'
M
o
s
t
r
a
r
 
p
e
r
f
i
l
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
Q
U
I
C
K
_
_
_
_
_
_
D
E
S
C
'
,
 
'
D
e
i
x
a
t
 
e
n
 
b
l
a
n
c
 
i
n
t
e
n
c
i
o
n
a
d
a
m
e
n
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
G
E
N
E
R
A
L
C
O
N
F
I
G
D
E
S
C
'
,
 
'
C
o
n
f
i
g
u
r
a
c
i
Ã
³
 
g
e
n
e
r
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
B
A
C
K
'
,
 
'
E
n
d
a
r
r
e
r
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
Y
E
S
'
,
 
'
S
Ã
­
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
N
O
'
,
 
'
N
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
N
E
W
T
A
R
I
F
F
'
,
 
'
N
o
u
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
N
E
W
P
R
O
P
E
R
T
Y
'
,
 
'
N
o
v
a
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
N
E
W
G
U
E
S
T
'
,
 
'
H
o
s
t
e
 
n
o
u
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
S
A
V
E
'
,
 
'
G
u
a
r
d
a
r
'
)
;

/
/
 
V
i
e
w
 
b
o
o
k
i
n
g
s

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
S
U
R
N
A
M
E
'
,
 
'
N
o
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
A
L
'
,
 
"
D
a
t
a
 
d
'
a
r
r
i
b
a
d
a
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
U
R
E
'
,
 
'
D
a
t
a
 
d
e
 
s
o
r
t
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
B
L
A
N
K
'
,
 
'
B
l
a
n
c
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
A
S
S
I
G
N
U
S
E
R
_
U
S
E
R
N
A
M
E
'
,
 
"
N
o
m
 
d
e
 
l
'
u
s
u
a
r
i
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
A
S
S
I
G
N
U
S
E
R
_
A
U
T
H
O
R
I
S
E
D
A
C
C
E
S
S
L
E
V
E
L
'
,
 
"
N
i
v
e
l
l
 
d
'
a
c
c
Ã
©
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
A
S
S
I
G
N
U
S
E
R
_
U
S
E
R
M
O
D
I
F
I
E
D
M
E
S
A
G
E
'
,
 
'
U
s
u
a
r
i
 
m
o
d
i
f
i
c
a
t
'
)
;

/
/
 
E
d
i
t
 
b
o
o
k
i
n
g
s

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
_
A
D
M
I
N
_
T
I
T
L
E
'
,
 
'
T
o
t
e
s
 
l
e
s
 
r
e
s
e
r
v
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
T
I
T
L
E
'
,
 
'
E
d
i
t
a
r
 
r
e
s
e
r
v
e
s
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
_
T
A
B
_
A
R
R
I
V
A
L
'
,
 
'
A
r
r
i
b
a
d
e
s
/
S
o
r
t
i
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
_
T
A
B
_
G
U
E
S
T
'
,
 
'
H
o
s
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
_
T
A
B
_
R
O
O
M
'
,
 
'
H
a
b
i
t
a
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
_
T
A
B
_
P
A
Y
M
E
N
T
'
,
 
'
P
a
g
a
m
e
n
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
A
R
R
I
V
A
L
F
I
R
S
T
N
A
M
E
_
E
X
P
L
'
,
 
'
N
o
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
A
R
R
I
V
A
L
S
U
R
N
A
M
E
_
E
X
P
L
'
,
 
'
C
o
g
n
o
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
S
P
E
C
I
A
L
R
E
Q
'
,
 
'
R
e
q
u
i
s
i
t
s
 
e
s
p
e
c
i
a
l
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
S
P
E
C
I
A
L
R
E
Q
_
D
I
S
C
L
A
I
M
E
R
'
,
 
'
O
b
s
e
r
v
i
 
s
i
 
u
s
 
p
l
a
u
 
q
u
e
 
a
l
g
u
n
s
 
r
e
q
u
i
s
i
t
s
 
e
s
p
e
c
i
a
l
s
 
p
o
d
e
n
 
i
n
c
u
r
r
i
r
 
e
n
 
r
e
c
Ã
 
r
r
e
c
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
C
A
N
C
E
L
B
O
O
K
I
N
G
'
,
 
'
C
a
n
c
e
l
i
 
l
a
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
H
O
U
S
E
_
E
X
P
L
'
,
 
'
E
l
 
n
Ã
º
m
e
r
o
 
o
 
n
o
m
 
d
e
 
l
a
 
c
a
s
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
S
T
R
E
E
T
_
E
X
P
L
'
,
 
'
C
a
r
r
e
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
T
O
W
N
_
E
X
P
L
'
,
 
'
C
i
u
d
a
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
P
O
S
T
C
O
D
E
_
E
X
P
L
'
,
 
'
C
o
d
i
 
p
o
s
t
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
L
A
N
D
L
I
N
E
_
E
X
P
L
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
t
e
l
Ã
¨
f
o
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
M
O
B
I
L
E
_
E
X
P
L
'
,
 
'
N
Ã
º
m
e
r
o
 
m
Ã
²
v
i
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
E
M
A
I
L
_
E
X
P
L
'
,
 
'
D
i
r
e
c
c
i
Ã
³
 
e
l
e
c
t
r
Ã
²
n
i
c
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
C
A
N
C
E
L
L
A
T
I
O
N
_
A
L
R
E
A
D
Y
B
O
O
K
E
D
I
N
'
,
 
"
N
o
 
p
o
t
 
c
a
n
c
e
l
a
r
 
a
q
u
e
s
t
a
 
r
e
s
e
r
v
a
,
 
p
e
r
q
u
Ã
¨
 
l
'
h
o
s
t
e
 
h
a
 
c
o
n
f
i
r
m
a
t
 
l
'
e
n
t
r
a
d
a
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
C
A
N
C
E
L
L
A
T
I
O
N
_
N
O
D
E
P
O
S
I
T
'
,
 
'
D
i
p
Ã
²
s
i
t
 
n
o
 
p
a
g
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
C
A
N
C
E
L
L
A
T
I
O
N
_
B
U
T
T
O
N
'
,
 
'
C
o
n
f
i
r
m
a
r
 
c
a
n
c
e
l
a
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
C
A
N
C
E
L
L
E
D
'
,
 
'
R
e
s
e
r
v
a
 
c
a
n
c
e
l
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
D
A
Y
S
T
O
A
R
R
I
V
A
L
'
,
 
'
D
i
e
s
 
p
e
r
 
a
r
r
i
b
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
T
Y
P
E
_
E
X
P
L
'
,
 
'
T
i
p
u
s
 
d
e
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
T
Y
P
E
_
B
L
A
C
K
'
,
 
'
N
e
g
r
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
T
Y
P
E
_
R
E
C
E
P
T
I
O
N
'
,
 
'
R
e
c
e
p
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
B
O
O
K
I
N
G
T
Y
P
E
_
I
N
T
E
R
N
E
T
'
,
 
'
I
n
t
e
r
n
e
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
N
A
M
E
'
,
 
"
N
o
m
 
d
e
 
l
'
h
a
b
i
t
a
c
i
Ã
³
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
N
U
M
B
E
R
'
,
 
"
N
Ã
º
m
e
r
o
 
d
e
 
l
'
h
a
b
i
t
a
c
i
Ã
³
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
F
L
O
O
R
'
,
 
'
P
i
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
D
I
S
A
B
L
E
D
'
,
 
'
A
c
c
Ã
©
s
 
d
e
n
e
g
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
M
A
X
P
E
O
P
L
E
'
,
 
'
M
Ã
 
x
i
m
 
d
e
 
c
l
i
e
n
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
C
L
A
S
S
_
A
B
B
V
'
,
 
"
T
i
p
u
s
 
d
'
h
a
b
i
t
a
c
i
Ã
³
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
C
L
A
S
S
_
D
E
S
C
'
,
 
"
D
e
s
c
r
i
p
c
i
Ã
³
 
d
e
 
l
'
h
a
b
i
t
a
c
i
Ã
³
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
F
E
A
T
U
R
E
S
_
L
I
S
T
'
,
 
"
L
l
i
s
t
a
 
d
e
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
q
u
e
s
 
d
e
 
l
'
h
a
b
i
t
a
c
i
Ã
³
n
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
_
P
A
I
D
'
,
 
'
D
i
p
Ã
²
s
i
t
 
p
a
g
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
_
P
A
I
D
_
U
P
D
A
T
E
'
,
 
'
I
n
t
r
o
d
u
Ã
¯
r
 
d
i
p
Ã
²
s
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
C
O
N
T
R
A
C
T
_
T
O
T
A
L
'
,
 
'
T
o
t
a
l
 
a
 
p
a
g
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
_
R
E
F
'
,
 
'
R
e
f
.
 
d
e
 
D
i
p
Ã
²
s
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
B
O
O
K
I
N
G
N
U
M
B
E
R
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
R
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
R
E
Q
U
I
R
E
D
'
,
 
'
D
i
p
Ã
²
s
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
S
A
V
E
M
E
S
S
A
G
E
'
,
 
'
D
i
p
Ã
²
s
i
t
 
s
a
l
v
a
t
'
)
;

/
/
 
E
d
i
t
 
L
a
n
g
u
a
g
e

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
2
_
T
I
T
L
E
'
,
 
'
H
a
b
i
t
a
c
i
o
n
s
 
d
i
s
p
o
n
i
b
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
2
_
P
R
O
P
E
R
T
Y
N
A
M
E
'
,
 
'
P
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
2
_
R
O
O
M
T
Y
P
E
'
,
 
"
T
i
p
u
s
 
d
'
h
a
b
i
t
a
c
i
Ã
³
"
)
;

/
/
 
D
i
s
p
l
a
y
 
g
u
e
s
t
 
f
o
r
m

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
D
I
S
P
G
U
E
S
T
_
E
D
I
T
D
E
T
A
I
L
S
'
,
 
"
E
d
i
t
a
r
 
d
e
t
a
l
l
s
 
d
'
h
o
s
t
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
D
I
S
P
G
U
E
S
T
_
F
I
R
S
T
N
A
M
E
'
,
 
'
N
o
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
D
I
S
P
G
U
E
S
T
_
S
U
R
N
A
M
E
'
,
 
'
C
o
g
n
o
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
D
I
S
P
G
U
E
S
T
_
H
O
U
S
E
'
,
 
'
C
a
s
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
D
I
S
P
G
U
E
S
T
_
S
T
R
E
E
T
'
,
 
'
C
a
r
r
e
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
D
I
S
P
G
U
E
S
T
_
T
O
W
N
'
,
 
'
C
i
u
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
D
I
S
P
G
U
E
S
T
_
P
O
S
T
C
O
D
E
'
,
 
'
C
o
d
i
 
P
o
s
t
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
D
I
S
P
G
U
E
S
T
_
L
A
N
D
L
I
N
E
'
,
 
'
T
e
l
Ã
¨
f
o
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
D
I
S
P
G
U
E
S
T
_
M
O
B
I
L
E
'
,
 
'
M
Ã
²
v
i
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
D
I
S
P
G
U
E
S
T
_
F
A
X
'
,
 
'
F
a
x
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
_
T
I
T
L
E
'
,
 
'
S
e
l
e
c
c
i
o
n
i
 
u
n
a
 
h
a
b
i
t
a
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
_
S
T
A
Y
D
A
Y
S
'
,
 
"
D
i
e
s
 
d
'
e
s
t
a
n
c
i
a
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
_
T
O
T
A
L
I
N
V
O
I
C
E
'
,
 
'
T
o
t
a
l
'
)
;

/
/
 
R
o
o
m
s
 
t
a
b

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
R
O
O
M
S
P
R
O
P
E
R
T
Y
C
O
N
F
I
G
_
T
I
T
L
E
'
,
 
'
V
e
g
i
 
h
a
b
i
t
a
c
i
o
n
s
 
i
 
c
o
n
f
i
g
u
r
a
c
i
Ã
³
 
d
e
 
l
e
s
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
q
u
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
T
A
B
_
R
O
O
M
'
,
 
'
H
a
b
i
t
a
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
T
A
B
_
R
O
O
M
F
E
A
T
U
R
E
S
'
,
 
'
H
b
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
q
u
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
T
A
B
_
R
O
O
M
T
Y
P
E
S
'
,
 
'
H
b
 
t
i
p
u
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
T
A
B
_
P
R
O
P
E
R
T
Y
S
'
,
 
'
P
r
o
p
i
e
t
a
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
T
A
B
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
'
,
 
'
P
r
o
p
.
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
q
u
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
L
I
N
K
'
,
 
'
H
a
b
i
t
a
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
T
Y
P
E
'
,
 
'
T
i
p
u
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
N
A
M
E
'
,
 
'
N
o
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
N
U
M
B
E
R
'
,
 
'
N
Ã
º
m
e
r
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
F
L
O
O
R
'
,
 
'
P
i
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
M
A
X
P
E
O
P
L
E
'
,
 
'
M
Ã
 
x
.
 
d
e
 
p
e
r
s
o
n
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
F
E
A
T
U
R
E
S
'
,
 
'
C
a
r
a
c
t
e
r
Ã
­
s
t
i
q
u
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
L
I
N
K
T
E
X
T
'
,
 
"
E
d
i
t
a
r
 
l
'
a
r
t
i
c
l
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
F
E
A
T
U
R
E
S
_
H
E
A
D
E
R
_
L
I
N
K
'
,
 
'
H
b
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
q
u
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
F
E
A
T
U
R
E
S
_
H
E
A
D
E
R
_
I
N
P
U
T
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
 
d
e
 
l
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
F
E
A
T
U
R
E
S
_
S
A
V
E
_
I
N
S
E
R
T
'
,
 
'
C
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
l
 
l
l
o
c
 
a
f
e
g
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
F
E
A
T
U
R
E
S
_
S
A
V
E
_
U
P
D
A
T
E
'
,
 
'
C
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
l
 
l
l
o
c
 
a
c
t
u
a
l
i
t
z
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
T
Y
P
E
S
_
H
E
A
D
E
R
_
L
I
N
K
'
,
 
'
H
b
 
t
i
p
u
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
T
Y
P
E
S
_
H
E
A
D
E
R
_
A
B
B
V
'
,
 
'
T
i
p
u
s
 
a
b
r
e
v
i
a
t
u
r
a
 
d
e
l
 
l
l
o
c
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
T
Y
P
E
S
_
H
E
A
D
E
R
_
D
E
S
C
'
,
 
"
D
e
s
c
r
i
p
c
i
Ã
³
 
d
e
 
t
i
p
u
s
 
d
e
 
l
'
h
a
b
i
t
a
c
i
Ã
³
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
T
Y
P
E
S
_
S
A
V
E
_
I
N
S
E
R
T
'
,
 
'
T
i
p
u
s
 
d
e
 
h
a
b
i
t
a
c
i
Ã
³
 
a
f
e
g
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
T
Y
P
E
S
_
L
I
N
K
T
E
X
T
'
,
 
'
E
d
i
t
a
r
 
a
r
t
i
c
l
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
N
A
M
E
'
,
 
'
N
o
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
S
T
R
E
E
T
'
,
 
'
C
a
r
r
e
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
T
O
W
N
'
,
 
'
C
i
u
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
R
E
G
I
O
N
'
,
 
'
R
e
g
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
C
O
U
N
T
R
Y
'
,
 
'
P
a
Ã
­
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
P
O
S
T
C
O
D
E
'
,
 
'
C
o
d
i
 
P
o
s
t
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
T
E
L
E
P
H
O
N
E
'
,
 
'
T
e
l
f
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
F
A
X
'
,
 
'
F
a
x
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
E
M
A
I
L
'
,
 
'
E
m
a
i
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
W
E
B
S
I
T
E
'
,
 
'
W
e
b
s
i
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
F
E
A
T
U
R
E
S
'
,
 
'
C
a
r
a
c
t
e
r
Ã
­
s
t
i
q
u
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
S
A
V
E
_
U
P
D
A
T
E
'
,
 
'
P
r
o
p
i
e
t
a
t
 
a
c
t
u
a
l
i
t
z
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
_
H
E
A
D
E
R
_
L
I
N
K
'
,
 
'
C
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
_
A
B
B
V
'
,
 
'
C
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
 
a
b
r
e
v
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
_
H
E
A
D
E
R
_
D
E
S
C
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
 
c
o
m
p
l
e
t
a
 
d
e
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
_
S
A
V
E
_
U
P
D
A
T
E
'
,
 
'
C
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
 
a
c
t
u
a
l
i
t
z
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
T
I
T
L
E
'
,
 
'
T
a
r
i
f
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
A
T
E
T
I
T
L
E
'
,
 
'
T
Ã
­
t
o
l
 
d
e
 
t
a
r
i
f
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
A
T
E
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
V
A
L
I
D
F
R
O
M
'
,
 
'
V
Ã
 
l
i
d
 
d
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
V
A
L
I
D
T
O
'
,
 
'
V
Ã
 
l
i
d
 
f
i
n
s
 
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
D
A
Y
'
,
 
'
T
a
r
i
f
a
 
p
e
r
 
n
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
M
I
N
D
A
Y
S
'
,
 
'
D
i
e
s
 
m
Ã
­
n
i
m
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
M
A
X
D
A
Y
S
'
,
 
'
D
i
e
s
 
m
Ã
 
x
i
m
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
M
I
N
P
E
O
P
L
E
'
,
 
'
P
e
r
s
o
n
e
s
 
m
Ã
­
n
i
m
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
M
A
X
P
E
O
P
L
E
'
,
 
'
P
e
r
s
o
n
e
s
 
m
Ã
 
x
i
m
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
C
L
A
S
S
'
,
 
"
T
i
p
u
s
 
d
e
 
l
'
H
b
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
I
G
N
O
R
E
P
P
N
'
,
 
'
I
g
n
o
r
a
r
 
P
P
P
N
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
A
L
L
O
W
W
E
'
,
 
'
P
e
r
m
e
t
r
e
 
c
a
p
s
 
d
e
 
s
e
t
m
a
n
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
L
I
N
K
T
E
X
T
'
,
 
'
E
d
i
t
a
r
 
a
r
t
i
c
l
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
L
I
N
K
T
E
X
T
C
L
O
N
E
'
,
 
'
C
o
p
i
a
r
 
a
r
t
i
c
l
e
 
i
d
Ã
¨
n
t
i
c
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
D
E
L
E
T
E
D
'
,
 
'
T
a
r
i
f
a
 
b
o
r
r
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
T
I
T
L
E
_
E
D
I
T
'
,
 
'
E
d
i
t
a
r
 
l
a
 
t
a
r
i
f
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
B
O
O
K
I
N
G
S
A
V
E
D
M
E
S
S
A
G
E
'
,
 
'
R
e
s
e
r
v
a
 
g
u
a
r
d
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
B
O
O
K
A
R
O
O
M
'
,
 
'
R
e
s
e
r
v
a
r
 
u
n
a
 
h
a
b
i
t
a
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
O
O
K
A
G
U
E
S
T
I
N
'
,
 
"
E
n
t
r
a
d
a
 
d
'
h
o
s
t
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
O
O
K
A
G
U
E
S
T
O
U
T
'
,
 
"
S
o
r
t
i
d
a
 
d
'
h
o
s
t
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
L
I
S
T
B
O
O
K
I
N
G
S
'
,
 
'
L
l
i
s
t
a
r
 
l
e
s
 
r
e
s
e
r
v
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
H
O
M
E
'
,
 
'
I
 
N
 
I
 
C
 
I
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
G
U
E
S
T
A
D
M
I
N
'
,
 
"
A
d
m
i
n
i
s
t
r
a
c
i
Ã
³
 
d
'
h
o
s
t
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
P
R
O
P
E
R
T
Y
A
D
M
I
N
'
,
 
'
A
d
m
i
n
i
s
t
r
a
c
i
Ã
³
 
d
e
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
S
U
B
M
I
T
B
U
T
T
O
N
_
C
H
E
C
K
A
V
A
I
L
A
B
I
L
I
T
Y
'
,
 
'
V
e
r
i
f
i
q
u
i
 
l
a
 
d
i
s
p
o
n
i
b
i
l
i
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
D
I
S
P
G
U
E
S
T
_
F
I
R
S
T
N
A
M
E
'
,
 
'
N
o
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
D
I
S
P
G
U
E
S
T
_
S
U
R
N
A
M
E
'
,
 
'
C
o
g
n
o
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
H
O
U
S
E
_
E
X
P
L
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
l
a
 
C
a
s
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
S
T
R
E
E
T
_
E
X
P
L
'
,
 
'
C
a
r
r
e
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
T
O
W
N
_
E
X
P
L
'
,
 
'
C
i
u
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
P
O
S
T
C
O
D
E
_
E
X
P
L
'
,
 
'
C
o
d
i
 
P
o
s
t
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
L
A
N
D
L
I
N
E
_
E
X
P
L
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
t
e
l
Ã
¨
f
o
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
M
O
B
I
L
E
_
E
X
P
L
'
,
 
'
M
Ã
²
v
i
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
2
_
N
O
R
O
O
M
S
I
N
R
A
N
G
E
'
,
 
'
N
o
 
h
i
 
h
a
 
h
a
b
i
t
a
c
i
o
n
s
 
d
i
s
p
o
n
i
b
l
e
s
 
c
a
p
a
c
e
s
 
d
e
 
s
a
t
i
s
f
e
r
 
e
l
s
 
p
a
r
Ã
 
m
e
t
r
e
s
 
e
s
p
e
c
i
f
i
c
a
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
B
O
O
K
I
N
G
M
A
D
E
'
,
 
'
<
c
e
n
t
e
r
>
G
r
Ã
 
c
i
e
s
 
p
e
r
 
f
e
r
 
l
a
 
s
e
v
a
 
r
e
s
e
r
v
a
 
a
m
b
 
n
o
s
a
l
t
r
e
s
.
 
E
s
p
e
r
e
m
 
q
u
e
 
v
o
s
t
Ã
¨
 
d
i
s
f
r
u
t
i
 
d
e
 
l
a
 
s
e
v
a
 
p
e
r
m
a
n
Ã
¨
n
c
i
a
.
<
b
r
>
<
b
r
>
 
<
b
>
S
i
 
u
s
 
p
l
a
u
,
 
n
o
t
i
 
q
u
e
 
a
i
x
Ã
²
 
Ã
©
s
 
n
o
m
Ã
©
s
 
u
n
a
 
r
e
s
e
r
v
a
 
p
r
e
l
i
m
i
n
a
r
,
 
i
 
n
o
 
s
e
r
Ã
 
 
c
o
n
f
i
r
m
a
d
a
 
f
i
n
s
 
q
u
e
 
v
o
s
t
Ã
©
 
r
e
b
i
 
e
l
 
s
e
u
 
e
m
a
i
l
 
d
e
 
c
o
n
f
i
r
m
a
c
i
Ã
³
 
p
e
r
 
p
a
r
t
 
n
o
s
t
r
a
.
<
/
c
e
n
t
e
r
>
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
B
O
O
K
I
N
_
T
I
T
L
E
'
,
 
"
E
n
t
r
a
d
a
 
d
'
h
o
s
t
e
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
B
O
O
K
I
N
_
G
U
E
S
T
B
O
O
K
E
D
I
N
'
,
 
"
E
n
t
r
a
d
a
 
d
'
h
o
s
t
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
B
O
O
K
O
U
T
_
T
I
T
L
E
'
,
 
"
S
o
r
t
i
d
a
 
d
'
h
o
s
t
e
"
)
;

/
/
 
C
o
n
f
i
g
 
p
a
n
e
l

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
U
P
P
L
I
M
E
N
T
S
'
,
 
'
S
u
p
l
e
m
e
n
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
S
'
,
 
'
T
a
r
i
f
e
s
 
&
 
M
o
n
e
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
J
O
M
R
E
S
_
F
I
L
E
_
U
P
L
O
A
D
S
'
,
 
'
F
i
t
x
e
r
s
 
p
u
j
a
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
U
P
P
L
I
M
E
N
T
S
_
S
I
N
G
L
E
P
E
R
S
O
N
'
,
 
'
N
o
m
Ã
©
s
 
s
u
p
l
e
m
e
n
t
s
 
p
e
r
 
p
e
r
s
o
n
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
U
P
P
L
I
M
E
N
T
S
_
S
I
N
G
L
E
P
E
R
S
O
N
_
D
E
S
C
'
,
 
'
R
e
c
o
r
d
i
 
m
a
r
c
a
r
 
"
S
Ã
­
"
 
s
i
 
v
o
s
t
Ã
©
 
v
o
l
 
c
a
r
r
e
g
a
r
 
n
o
m
Ã
©
s
 
s
u
p
l
e
m
e
n
t
s
 
d
e
 
p
e
r
s
o
n
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
U
P
P
L
I
M
E
N
T
S
_
S
I
N
G
L
E
P
E
R
S
O
N
_
C
O
S
T
'
,
 
'
N
o
m
Ã
©
s
 
c
a
r
r
e
g
a
r
 
s
u
p
l
e
m
e
n
t
 
d
e
 
p
e
r
s
o
n
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
D
E
P
O
S
I
T
_
I
S
P
E
R
C
E
N
T
A
G
E
'
,
 
'
E
l
 
D
i
p
Ã
²
s
i
t
 
r
e
q
u
e
r
e
i
x
 
p
e
r
c
e
n
t
a
t
g
e
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
D
E
P
O
S
I
T
_
I
S
P
E
R
C
E
N
T
A
G
E
_
D
E
S
C
'
,
 
'
E
l
 
d
i
p
Ã
²
s
i
t
 
Ã
©
s
 
u
n
 
p
e
r
c
e
n
t
a
t
g
e
 
d
e
 
l
a
 
s
u
m
a
 
d
e
 
l
a
 
r
e
s
e
r
v
a
?
 
S
i
 
n
o
,
 
e
l
 
d
i
p
Ã
²
s
i
t
 
a
p
l
i
c
a
t
 
Ã
©
s
 
u
n
 
v
a
l
o
r
 
f
i
x
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
D
E
P
O
S
I
T
_
V
A
L
U
E
'
,
 
'
E
l
 
d
i
p
Ã
²
s
i
t
 
v
a
 
r
e
q
u
e
r
i
r
 
e
l
 
v
a
l
o
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
S
_
P
E
R
'
,
 
'
P
e
r
 
p
e
r
s
o
n
a
,
 
p
e
r
 
n
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
S
_
P
E
R
_
D
E
S
C
'
,
 
'
E
s
c
u
l
l
i
 
"
S
Ã
­
"
 
s
i
 
v
o
s
t
Ã
©
 
v
o
l
 
c
Ã
 
r
r
e
c
s
 
p
e
r
 
p
e
r
s
o
n
a
-
p
e
r
-
n
i
t
.
 
S
i
 
n
o
,
 
l
l
a
v
o
r
s
 
e
l
s
 
c
o
s
t
o
s
 
e
s
 
c
a
l
c
u
l
a
r
a
n
 
e
n
 
b
a
s
e
 
a
 
h
a
b
i
t
a
c
i
Ã
³
-
p
e
r
-
n
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
U
P
L
O
A
D
S
_
F
I
L
E
S
I
Z
E
'
,
 
'
M
i
d
a
 
d
e
 
l
a
 
c
a
r
p
e
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
U
P
L
O
A
D
S
_
F
I
L
E
S
I
Z
E
_
D
E
S
C
'
,
 
'
M
Ã
 
x
.
 
M
i
d
a
 
d
e
 
c
a
r
p
e
t
a
 
e
n
 
K
i
l
o
b
y
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
B
O
O
K
E
D
'
,
 
'
R
e
s
e
r
v
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
O
N
F
I
R
M
A
T
I
O
N
_
R
E
S
E
R
V
A
T
I
O
N
_
D
E
T
A
I
L
S
'
,
 
'
D
e
t
a
l
l
s
 
d
e
 
l
a
 
r
e
s
e
r
v
a
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
O
N
F
I
R
M
A
T
I
O
N
_
R
E
S
E
R
V
A
T
I
O
N
_
S
M
A
L
L
P
R
I
N
T
_
B
I
N
D
I
N
G
C
O
N
T
R
A
C
T
'
,
 
'
S
e
 
l
i
 
r
e
c
o
r
d
a
 
q
u
e
 
u
n
a
 
r
e
s
e
r
v
a
 
Ã
©
s
 
u
n
 
c
o
n
t
r
a
c
t
e
 
l
e
g
a
l
m
e
n
t
 
o
b
l
i
g
a
t
o
r
i
,
 
s
i
 
p
e
r
 
a
l
g
u
n
a
 
r
a
Ã
³
 
v
o
s
t
Ã
¨
 
h
a
 
d
e
 
c
a
n
c
e
l
Â
·
l
a
r
 
o
 
a
c
u
r
t
a
r
 
l
a
 
s
e
v
a
 
r
e
s
e
r
v
a
 
l
l
a
v
o
r
s
 
s
e
r
Ã
 
 
e
n
c
a
r
a
 
r
e
s
p
o
n
s
a
b
l
e
 
d
e
 
p
a
g
a
r
 
l
a
 
q
u
a
n
t
i
t
a
t
 
c
o
m
p
l
e
t
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
O
N
F
I
R
M
A
T
I
O
N
_
R
E
S
E
R
V
A
T
I
O
N
_
S
M
A
L
L
P
R
I
N
T
_
C
A
N
C
E
L
L
A
T
I
O
N
C
H
A
R
G
E
S
_
I
N
T
R
O
'
,
 
"
<
i
>
L
a
 
c
a
n
c
e
l
Â
·
l
a
c
i
Ã
³
 
i
 
l
'
a
c
o
r
t
a
m
e
n
t
 
e
s
 
c
a
r
r
e
g
u
e
n
 
a
l
 
s
e
u
 
c
o
m
p
t
e
<
/
i
>
 
S
i
 
v
o
s
t
Ã
¨
 
c
a
n
c
e
l
Â
·
l
a
 
l
e
s
 
s
e
v
e
s
 
v
a
c
a
n
c
e
s
,
 
l
a
 
c
a
n
c
e
l
a
c
i
Ã
³
 
h
a
 
d
e
 
s
e
r
 
c
o
n
f
i
r
m
a
d
a
 
p
e
r
 
e
s
c
r
i
t
.
 
E
l
s
 
c
Ã
 
r
r
e
c
s
 
p
r
 
c
a
n
c
e
l
Â
·
l
a
c
i
Ã
³
 
s
Ã
³
n
:
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
O
N
F
I
R
M
A
T
I
O
N
_
R
E
S
E
R
V
A
T
I
O
N
_
S
M
A
L
L
P
R
I
N
T
_
A
R
R
I
V
A
L
D
A
T
E
T
O
1
4
D
A
Y
S
'
,
 
"
L
a
 
d
a
t
a
 
d
e
 
l
'
a
r
r
i
b
a
d
a
 
a
 
1
4
 
d
i
e
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
O
N
F
I
R
M
A
T
I
O
N
_
P
R
I
N
T
'
,
 
'
I
m
p
r
i
m
e
i
x
i
 
l
a
 
c
a
r
t
a
 
d
e
 
c
o
n
f
i
r
m
a
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
I
N
V
O
I
C
E
_
T
I
T
L
E
'
,
 
'
I
m
p
r
e
s
s
i
Ã
³
 
d
e
 
l
a
 
f
a
c
t
u
r
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
I
N
V
O
I
C
E
_
S
T
A
Y
N
I
G
H
T
S
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
n
i
t
s
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
I
N
V
O
I
C
E
_
C
O
S
T
P
E
R
N
I
G
H
T
'
,
 
'
C
o
s
t
 
p
e
r
 
n
i
t
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
I
N
V
O
I
C
E
_
L
E
T
T
E
R
_
G
R
A
N
D
T
O
T
A
L
'
,
 
'
S
u
m
a
 
t
o
t
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
I
N
V
O
I
C
E
_
P
R
I
N
T
'
,
 
'
I
m
p
r
i
m
i
r
 
f
a
c
t
u
r
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
D
D
S
E
R
V
I
C
E
_
T
I
T
L
E
'
,
 
'
A
f
e
g
e
i
x
i
 
e
l
 
s
e
r
v
e
i
 
p
e
r
 
f
a
c
t
u
r
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
D
D
S
E
R
V
I
C
E
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
 
d
e
l
 
s
e
r
v
e
i
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
D
D
S
E
R
V
I
C
E
_
V
A
L
U
E
'
,
 
'
V
a
l
o
r
 
d
e
l
 
S
e
r
v
e
i
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
D
D
S
E
R
V
I
C
E
_
B
O
O
K
I
N
G
D
E
S
C
'
,
 
'
A
l
t
r
e
s
 
a
r
t
i
c
l
e
s
 
f
a
c
t
u
r
a
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
D
D
S
E
R
V
I
C
E
_
S
A
V
E
M
E
S
S
A
G
E
'
,
 
'
A
r
t
i
c
l
e
 
a
f
e
g
i
t
 
a
 
l
a
 
f
a
c
t
u
r
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
U
P
L
O
A
D
_
I
M
A
G
E
'
,
 
'
P
u
j
a
r
 
i
m
a
t
g
e
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
I
L
E
_
U
P
L
O
A
D
'
,
 
'
A
r
x
i
u
 
p
u
j
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
O
D
D
S
'
,
 
'
P
r
o
b
a
b
i
l
i
t
a
t
s
 
i
 
t
e
r
m
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
E
R
R
O
R
C
H
E
C
K
I
N
G
'
,
 
'
C
r
i
d
a
r
 
l
l
i
s
t
a
 
d
e
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
E
R
R
O
R
C
H
E
C
K
I
N
G
_
D
E
S
C
'
,
 
'
M
a
r
q
u
i
 
a
q
u
e
s
t
a
 
o
p
c
i
Ã
³
 
a
 
S
i
 
p
e
r
 
v
e
u
r
e
 
u
n
 
l
o
g
 
d
e
l
s
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
 
u
t
i
l
i
t
z
a
t
s
 
a
l
 
f
i
n
a
l
 
d
e
 
l
a
 
f
u
l
l
a
 
d
e
s
p
r
Ã
©
s
 
d
e
 
q
u
e
 
J
o
m
r
e
s
 
c
o
m
p
l
e
t
i
 
l
a
 
s
e
v
a
 
e
x
e
c
u
c
i
Ã
³
.
 
Ã
‰
s
 
Ã
º
t
i
l
 
s
i
 
e
s
t
Ã
 
s
 
i
n
t
e
n
t
a
n
t
 
i
d
e
n
t
i
f
i
c
a
r
 
q
u
e
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
e
s
t
a
n
 
p
o
r
t
a
n
t
 
a
 
c
a
p
 
c
e
r
t
s
 
s
e
r
v
e
i
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
I
L
E
_
D
E
L
E
T
E
'
,
 
'
B
o
r
r
i
 
a
q
u
e
s
t
a
 
i
m
a
t
g
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
I
L
E
_
D
E
L
E
T
E
D
'
,
 
"
E
l
 
f
i
t
x
e
r
 
s
'
h
a
 
b
o
r
r
a
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
R
O
O
M
_
D
E
L
E
T
E
'
,
 
'
B
o
r
r
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
R
O
O
M
_
U
N
A
B
L
E
T
O
D
E
L
E
T
E
'
,
 
"
I
n
c
a
p
a
Ã
§
 
d
'
e
l
i
m
i
n
a
r
 
a
q
u
e
s
t
a
 
h
a
b
i
t
a
c
i
Ã
³
,
 
j
a
 
h
i
 
h
a
 
r
e
s
e
r
v
s
.
 
C
a
n
c
e
l
Â
·
l
i
 
a
q
u
e
s
t
e
s
 
r
e
s
e
r
v
e
s
 
i
 
t
o
r
n
i
 
a
 
i
n
t
e
n
t
a
r
-
h
o
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
R
O
O
M
_
D
E
L
E
T
E
D
'
,
 
"
C
a
r
c
a
t
e
r
Ã
­
s
t
i
c
a
 
d
'
h
a
b
i
t
a
c
i
Ã
³
 
e
l
i
m
i
n
a
d
a
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
R
O
O
M
F
E
A
T
U
R
E
_
D
E
L
E
T
E
'
,
 
"
B
o
r
r
i
 
l
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
l
'
h
a
b
i
t
a
c
i
Ã
³
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
R
O
O
M
F
E
A
T
U
R
E
_
U
N
A
B
L
E
T
O
D
E
L
E
T
E
'
,
 
"
I
m
p
o
s
s
i
b
l
e
 
e
l
i
m
i
n
a
r
 
a
q
u
e
s
t
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
l
'
h
a
b
i
t
a
c
i
Ã
³
,
 
e
s
t
Ã
 
 
a
s
s
i
g
n
a
d
a
 
o
 
o
c
u
p
a
d
a
.
 
E
l
i
m
i
n
i
 
l
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
'
a
q
u
e
s
t
e
s
 
h
a
b
i
t
a
c
i
o
n
s
 
i
 
t
o
r
n
i
 
a
 
i
n
t
e
n
t
a
r
-
h
o
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
R
O
O
M
F
E
A
T
U
R
E
_
D
E
L
E
T
E
D
'
,
 
"
C
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
l
'
h
a
b
i
t
a
c
i
Ã
³
 
b
o
r
r
a
d
a
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
_
D
E
L
E
T
E
'
,
 
'
B
o
r
r
a
r
 
l
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
_
U
N
A
B
L
E
T
O
D
E
L
E
T
E
'
,
 
"
I
m
p
o
s
s
i
b
l
e
 
e
l
i
m
i
n
a
r
 
a
q
u
e
s
t
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
,
 
e
s
t
Ã
¡
 
a
s
s
i
g
n
a
d
a
.
 
E
l
i
m
i
n
i
 
l
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
'
a
q
u
e
s
t
a
 
p
r
o
p
i
e
t
a
t
 
i
 
t
o
r
n
i
 
a
 
i
n
t
e
n
t
a
r
-
h
o
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
_
D
E
L
E
T
E
D
'
,
 
"
L
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
l
a
 
p
r
o
p
i
e
d
a
d
 
s
'
h
a
 
b
o
r
r
a
t
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
R
O
O
M
C
L
A
S
S
_
D
E
L
E
T
E
'
,
 
"
B
o
r
r
i
 
t
i
p
u
s
 
d
e
 
l
'
h
a
b
i
t
a
c
i
Ã
³
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
R
O
O
M
C
L
A
S
S
_
D
E
L
E
T
E
D
'
,
 
"
T
i
p
u
s
 
d
'
h
a
b
i
t
a
c
i
Ã
³
 
b
o
r
r
a
d
a
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
P
R
O
P
E
R
T
Y
_
D
E
L
E
T
E
'
,
 
'
B
o
r
r
i
 
l
a
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
P
R
O
P
E
R
T
Y
_
D
E
L
E
T
E
D
'
,
 
"
L
a
 
p
r
o
p
i
e
t
a
t
 
s
'
h
a
 
b
o
r
r
a
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
P
R
O
P
E
R
T
Y
_
D
E
L
E
T
E
_
N
O
R
I
G
H
T
S
'
,
 
'
V
o
s
t
Ã
©
 
n
o
 
t
Ã
©
 
e
l
s
 
p
e
r
m
i
s
o
s
 
p
e
r
 
a
 
b
o
r
r
a
r
 
a
q
u
e
s
t
a
 
p
r
o
p
i
e
t
a
t
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
U
P
L
O
A
D
S
_
I
M
A
G
E
S
_
W
I
D
T
H
_
L
A
R
G
E
'
,
 
"
A
m
p
l
a
d
a
 
d
'
i
m
a
t
g
e
 
g
r
a
n
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
M
A
P
P
I
N
G
L
I
N
K
'
,
 
'
F
a
g
i
 
c
l
i
c
k
 
p
e
r
 
a
 
v
e
u
r
e
 
e
l
 
m
a
p
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
P
R
O
P
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
C
H
E
C
K
I
N
T
I
M
E
S
'
,
 
"
H
o
r
a
r
i
 
d
'
e
n
t
r
a
d
a
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
A
R
E
A
A
C
T
I
V
I
T
I
E
S
'
,
 
"
A
c
t
i
v
i
t
a
t
s
 
d
e
 
l
'
Ã
 
r
e
a
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
D
R
I
V
I
N
G
D
I
R
E
C
T
I
O
N
S
'
,
 
'
D
i
r
e
c
c
i
o
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
A
I
R
P
O
R
T
S
'
,
 
'
A
e
r
o
p
o
r
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
O
T
H
E
R
T
R
A
N
S
P
O
R
T
'
,
 
'
A
l
t
r
e
s
 
t
r
a
n
s
p
o
r
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
P
O
L
I
C
I
E
S
D
I
S
C
L
A
I
M
E
R
S
'
,
 
'
P
o
l
Ã
­
t
i
q
u
e
s
 
i
 
r
e
c
l
a
m
a
c
i
o
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
P
R
O
P
E
R
T
I
E
S
L
I
S
T
I
N
G
_
T
H
I
S
P
R
O
P
E
R
T
Y
A
D
D
R
E
S
S
'
,
 
'
D
i
r
e
c
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
V
I
S
I
T
O
R
S
C
A
N
B
O
O
K
O
N
L
I
N
E
'
,
 
'
V
i
s
i
t
a
n
t
s
 
p
o
d
e
n
 
r
e
s
e
r
v
a
r
 
o
n
l
i
n
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
V
I
S
I
T
O
R
S
C
A
N
B
O
O
K
O
N
L
I
N
E
_
D
E
S
C
'
,
 
'
P
o
s
i
 
a
i
x
Ã
²
 
a
 
"
S
I
"
 
p
e
r
 
a
s
s
e
g
u
r
a
r
 
q
u
e
 
e
l
s
 
v
i
s
i
t
a
n
t
s
 
p
u
g
u
i
n
 
r
e
s
e
r
v
a
r
 
u
n
a
 
h
a
b
i
t
a
c
i
Ã
³
 
o
n
l
i
n
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
B
O
O
K
I
N
G
S
'
,
 
'
R
e
s
e
r
v
e
s
 
p
e
r
 
a
 
u
n
 
p
e
r
Ã
­
o
d
e
 
f
i
x
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
B
O
O
K
I
N
G
S
_
D
E
S
C
'
,
 
"
S
i
 
p
o
s
a
 
a
i
x
Ã
²
 
e
n
 
'
S
I
'
 
l
e
s
 
r
e
s
e
r
v
e
s
 
s
e
r
a
n
 
p
e
r
 
u
n
 
p
e
r
Ã
­
o
d
e
 
f
i
x
.
 
S
i
 
e
s
 
p
o
s
a
 
e
n
 
'
N
O
'
,
 
l
l
a
v
o
r
s
 
a
s
s
e
g
Ã
º
r
i
s
 
q
u
e
 
e
l
 
'
d
Ã
­
a
 
p
r
e
d
e
f
i
n
i
t
 
d
'
a
r
r
i
b
a
d
a
'
 
e
s
 
v
a
 
p
o
s
a
r
 
e
n
 
'
S
I
'
 
(
s
i
 
n
o
 
v
o
l
 
f
o
r
Ã
§
a
r
 
a
l
 
c
l
i
e
n
t
 
a
 
a
r
r
i
b
a
r
 
u
n
 
d
Ã
­
a
 
e
s
p
e
c
Ã
­
f
i
c
)
 
e
n
 
a
q
u
e
s
t
 
c
a
s
 
n
o
 
a
c
o
n
s
e
g
u
i
r
Ã
¡
 
m
o
l
t
e
s
 
e
n
t
r
a
d
e
s
 
a
l
 
c
a
l
e
n
d
a
r
i
 
d
e
 
d
i
s
p
o
n
i
b
i
l
i
t
a
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
'
,
 
'
P
e
r
Ã
­
o
d
e
 
d
e
 
R
e
s
e
r
v
e
s
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
B
O
O
K
I
N
G
'
,
 
'
R
e
s
e
r
v
a
r
 
u
n
a
 
H
b
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
_
N
U
M
B
E
R
O
F
P
E
R
I
O
D
S
'
,
 
'
M
Ã
 
x
.
 
p
e
r
Ã
­
o
d
e
s
,
 
p
.
e
.
 
3
x
7
 
p
e
r
Ã
­
o
d
e
s
 
=
 
2
1
 
d
i
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
I
N
G
L
E
R
O
O
M
P
R
O
P
E
R
T
Y
'
,
 
'
E
s
 
u
n
a
 
h
a
b
i
t
a
c
i
Ã
³
 
p
e
r
 
a
 
s
o
l
t
e
r
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
R
E
V
I
E
W
B
O
O
K
I
N
G
'
,
 
'
R
e
s
e
r
v
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
C
O
N
F
I
R
M
B
O
O
K
I
N
G
'
,
 
'
C
o
n
f
i
r
m
a
r
 
l
a
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
M
O
N
D
A
Y
'
,
 
'
D
i
l
l
u
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
T
U
E
S
D
A
Y
'
,
 
'
D
i
m
a
r
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
W
E
D
N
E
S
D
A
Y
'
,
 
'
D
i
m
e
c
r
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
T
H
U
R
S
D
A
Y
'
,
 
'
D
i
j
o
u
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
F
R
I
D
A
Y
'
,
 
'
D
i
v
e
n
d
r
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
S
A
T
U
R
D
A
Y
'
,
 
'
D
i
s
s
a
b
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
S
U
N
D
A
Y
'
,
 
'
D
i
u
m
e
n
g
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
M
O
N
D
A
Y
_
A
B
B
R
'
,
 
'
D
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
T
U
E
S
D
A
Y
_
A
B
B
R
'
,
 
'
D
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
W
E
D
N
E
S
D
A
Y
_
A
B
B
R
'
,
 
'
D
c
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
T
H
U
R
S
D
A
Y
_
A
B
B
R
'
,
 
'
D
j
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
F
R
I
D
A
Y
_
A
B
B
R
'
,
 
'
D
v
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
S
A
T
U
R
D
A
Y
_
A
B
B
R
'
,
 
'
D
b
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
S
U
N
D
A
Y
_
A
B
B
R
'
,
 
'
D
g
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
A
V
L
C
A
L
'
,
 
'
c
a
l
e
n
d
a
r
i
 
d
e
 
d
i
s
p
o
n
i
b
i
l
i
t
a
t
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
V
L
C
A
L
_
T
O
D
A
Y
C
O
L
O
U
R
'
,
 
'
E
l
 
c
o
l
o
r
 
d
e
l
 
t
i
p
u
s
 
d
e
 
l
l
e
t
r
a
 
p
e
r
 
a
 
l
a
 
d
a
t
a
 
a
c
t
u
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
V
L
C
A
L
_
I
N
M
O
N
T
H
F
A
C
E
'
,
 
'
E
l
 
c
o
l
o
r
 
d
e
l
 
t
i
p
u
s
 
d
e
 
l
l
e
t
r
a
 
p
e
r
 
d
i
e
s
 
e
n
 
e
l
 
m
e
s
 
d
e
 
d
e
s
p
l
e
g
a
m
e
n
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
V
L
C
A
L
_
O
U
T
M
O
N
T
H
F
A
C
E
'
,
 
'
E
l
 
c
o
l
o
r
 
d
e
l
 
t
i
p
u
s
 
d
e
 
l
l
e
t
r
a
 
p
e
r
 
d
i
e
s
 
n
o
 
e
n
 
e
l
 
m
e
s
 
d
e
 
d
e
s
p
l
e
g
a
m
e
n
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
V
L
C
A
L
_
I
N
B
G
C
O
L
O
U
R
'
,
 
'
C
o
l
o
r
 
d
e
 
f
o
n
s
 
p
e
r
 
d
i
e
s
 
q
u
a
n
 
l
a
 
p
r
o
p
i
e
t
a
t
/
e
s
p
a
i
 
e
s
t
Ã
 
 
d
i
s
p
o
n
i
b
l
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
V
L
C
A
L
_
O
U
T
B
G
C
O
L
O
U
R
'
,
 
'
C
o
l
o
r
 
d
e
 
f
o
n
s
 
p
e
r
 
d
i
e
s
 
q
u
a
n
 
n
o
 
e
s
 
m
o
s
t
r
a
 
m
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
V
L
C
A
L
_
O
C
C
U
P
I
E
D
C
O
L
O
U
R
'
,
 
'
C
o
l
o
r
 
d
e
 
f
o
n
s
 
p
e
r
 
d
i
e
s
 
o
c
u
p
a
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
V
L
C
A
L
_
P
R
O
V
I
S
I
O
N
A
L
C
O
L
O
U
R
'
,
 
"
C
o
l
o
r
 
d
e
 
f
o
n
s
 
p
e
r
 
a
 
r
e
s
e
r
v
a
r
 
p
r
o
v
i
s
i
o
n
a
l
m
e
n
t
 
e
l
s
 
e
s
p
a
i
s
 
(
r
e
s
e
r
v
e
s
 
p
e
r
 
a
 
u
n
 
d
i
p
Ã
²
s
i
t
 
q
u
e
 
n
o
 
s
'
h
a
 
p
r
Ã
¨
s
)
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
V
L
C
A
L
_
P
A
S
T
C
O
L
O
U
R
'
,
 
'
C
o
l
o
r
 
d
e
 
f
o
n
s
 
p
e
r
 
a
 
d
a
t
e
s
 
e
n
d
a
r
r
e
r
i
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
V
L
C
A
L
_
O
C
C
U
P
I
E
D
C
O
L
O
U
R
_
K
E
Y
'
,
 
'
O
c
u
p
a
t
/
n
o
 
d
i
s
p
o
n
i
b
l
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
V
L
C
A
L
_
I
N
M
O
N
T
H
F
A
C
E
_
K
E
Y
'
,
 
'
D
i
s
p
o
n
i
b
l
e
 
p
e
r
 
a
 
r
e
s
e
r
v
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
V
L
C
A
L
_
P
R
O
V
I
S
I
O
N
A
L
C
O
L
O
U
R
_
K
E
Y
'
,
 
'
R
e
s
e
r
v
e
s
 
p
r
o
v
i
s
i
o
n
a
l
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
Y
E
S
N
O
'
,
 
"
D
i
a
 
p
r
e
d
e
f
i
n
i
t
 
d
'
a
r
r
i
b
a
d
a
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
Y
E
S
N
O
_
D
E
S
C
'
,
 
'
N
o
m
Ã
©
s
 
p
e
r
 
a
l
s
 
l
l
o
c
s
 
q
u
e
 
o
f
e
r
e
i
x
e
n
 
l
e
s
 
r
e
s
e
r
v
e
s
 
f
i
x
e
s
 
d
e
l
 
p
e
r
Ã
­
o
d
e
.
 
E
s
c
u
l
l
i
 
e
l
 
d
i
a
 
e
n
 
q
u
e
 
h
a
n
 
d
e
 
c
o
m
e
n
Ã
§
a
r
 
l
e
s
 
a
r
r
i
b
a
d
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
D
A
Y
'
,
 
"
D
i
a
 
f
i
x
 
d
'
a
r
r
i
b
a
d
a
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
F
I
X
E
D
P
R
I
O
D
1
'
,
 
"
P
e
r
Ã
­
o
d
e
 
d
e
 
l
'
e
s
t
Ã
 
n
c
i
a
 
(
d
i
e
s
)
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
H
O
W
A
V
I
L
A
B
I
L
I
T
Y
_
C
A
L
E
N
D
A
R
'
,
 
'
M
o
s
t
r
a
r
 
l
a
 
d
i
s
p
o
n
i
b
i
l
i
t
a
t
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
H
O
W
A
V
I
L
A
B
I
L
I
T
Y
_
C
A
L
E
N
D
A
R
_
D
E
S
C
'
,
 
'
P
o
s
i
 
a
i
x
Ã
²
 
a
 
"
S
Ã
­
"
 
p
e
r
 
a
 
m
o
s
t
r
a
r
 
e
l
s
 
c
a
l
e
n
d
a
r
i
s
 
d
e
 
d
i
s
p
o
n
i
b
i
l
i
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
A
V
A
I
L
A
B
I
L
I
T
Y
'
,
 
'
D
i
s
p
o
n
i
b
i
l
i
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
C
A
L
E
N
D
A
R
_
C
L
I
C
K
D
A
T
E
S
'
,
 
'
C
l
i
c
k
 
e
n
 
u
n
a
 
d
a
t
a
 
l
l
i
u
r
e
 
p
e
r
 
a
 
v
e
u
r
e
 
e
l
 
f
o
r
m
u
l
a
r
i
 
d
e
 
r
e
s
e
r
v
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
B
L
A
C
K
B
O
O
K
I
N
G
'
,
 
'
R
e
s
e
r
v
e
s
 
n
e
g
r
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
B
L
A
C
K
B
O
O
K
I
N
G
_
N
E
W
'
,
 
'
N
o
v
e
s
 
R
e
s
e
r
v
e
s
 
n
e
g
r
e
s
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
D
E
L
E
T
E
G
U
E
S
T
'
,
 
'
B
o
r
r
a
r
 
h
o
s
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
D
E
L
E
T
E
G
U
E
S
T
_
G
U
E
S
T
D
E
L
E
T
E
D
'
,
 
'
H
o
s
t
e
 
b
o
r
r
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
D
E
L
E
T
E
G
U
E
S
T
_
U
N
A
B
L
E
T
O
D
E
L
E
T
E
G
U
E
S
T
'
,
 
'
I
n
c
a
p
a
Ã
§
 
d
e
 
b
o
r
r
a
r
 
a
q
u
e
s
t
 
h
o
s
t
e
 
j
a
 
q
u
e
 
t
Ã
©
 
r
e
s
e
r
v
e
s
 
o
b
e
r
t
e
s
.
 
C
a
n
c
e
l
Â
·
l
i
 
l
e
s
 
r
e
s
e
r
v
e
s
 
i
 
p
r
o
v
i
 
u
n
 
a
l
t
r
e
 
c
o
p
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
R
O
O
M
S
M
O
K
I
N
G
_
E
I
T
H
E
R
'
,
 
'
N
o
 
i
m
p
o
r
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
A
L
E
N
D
A
R
O
U
T
P
U
T
'
,
 
'
F
o
r
m
a
t
 
d
e
 
s
o
r
t
i
d
a
 
d
e
l
 
C
a
l
e
n
d
a
r
i
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
A
L
E
N
D
A
R
I
N
P
U
T
'
,
 
"
F
o
r
m
a
t
 
d
'
e
n
t
r
a
d
a
 
d
e
l
 
C
a
l
e
n
d
a
r
i
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
A
L
E
N
D
A
R
I
N
P
U
T
_
D
E
S
C
'
,
 
"
A
i
x
Ã
²
 
p
e
r
m
e
t
 
c
a
n
v
i
a
r
 
e
l
 
f
o
r
m
a
t
 
d
'
e
n
t
r
a
d
a
 
d
e
 
l
e
s
 
d
a
d
e
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
B
O
O
K
I
N
G
S
S
H
O
R
T
'
,
 
'
L
e
s
 
r
e
s
e
r
v
e
s
 
f
i
x
e
s
 
d
e
l
 
p
e
r
Ã
­
o
d
e
 
p
e
r
m
e
t
e
n
 
i
n
t
e
r
r
u
p
c
i
o
n
s
 
c
u
r
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
_
S
H
O
R
T
B
R
E
A
K
_
D
A
Y
S
'
,
 
"
L
o
n
g
i
t
u
d
 
d
'
i
n
t
e
r
r
u
p
c
i
Ã
³
 
c
u
r
t
a
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
U
B
L
I
S
H
E
D
'
,
 
'
P
u
b
l
i
c
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
P
A
Y
P
A
L
'
,
 
'
P
a
y
p
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
A
U
D
I
T
T
R
A
I
L
'
,
 
'
A
u
d
i
t
o
r
Ã
­
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
L
I
S
T
I
N
G
_
D
A
T
E
'
,
 
'
D
a
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
L
I
S
T
I
N
G
_
U
S
E
R
'
,
 
"
U
s
u
a
r
i
 
(
N
o
m
 
d
'
u
s
u
a
r
i
)
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
L
I
S
T
I
N
G
_
F
I
L
T
E
R
_
D
A
T
E
'
,
 
'
F
i
l
t
r
e
 
e
n
 
l
a
 
d
a
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
S
T
A
T
U
S
'
,
 
'
E
s
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
P
E
N
D
I
N
G
'
,
 
'
A
r
r
i
b
a
d
a
 
P
e
n
d
e
n
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
E
T
O
D
A
Y
'
,
 
'
A
r
r
i
b
a
d
e
s
 
a
v
u
i
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
R
E
S
I
D
E
N
T
'
,
 
'
R
e
s
i
d
e
n
t
 
a
c
t
u
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
T
O
D
A
Y
'
,
 
'
S
u
r
t
 
a
v
u
i
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
S
T
I
L
L
H
E
R
E
'
,
 
'
S
o
r
t
i
d
a
 
e
n
d
a
r
r
e
r
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
L
A
T
E
'
,
 
'
N
o
 
h
a
a
r
r
i
b
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
I
N
S
E
R
T
_
R
O
O
M
'
,
 
'
H
a
b
i
t
a
c
i
Ã
³
 
c
r
e
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
R
O
O
M
'
,
 
'
H
a
b
i
t
a
c
i
Ã
³
 
a
c
t
u
a
l
i
t
z
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
D
E
L
E
T
E
_
R
O
O
M
'
,
 
'
H
a
b
i
t
a
c
i
Ã
³
 
b
o
r
r
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
I
N
S
E
R
T
_
R
O
O
M
_
F
E
A
T
U
R
E
'
,
 
"
C
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
c
r
e
a
d
a
 
d
'
H
b
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
R
O
O
M
_
F
E
A
T
U
R
E
'
,
 
"
C
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
a
c
t
u
a
l
i
t
z
a
d
a
 
d
'
H
b
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
D
E
L
E
T
E
_
R
O
O
M
_
F
E
A
T
U
R
E
'
,
 
"
C
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
b
o
r
r
a
d
a
 
d
'
H
b
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
I
N
S
E
R
T
_
P
R
O
P
E
R
T
Y
'
,
 
'
P
r
o
p
i
e
t
a
t
 
c
r
e
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
P
R
O
P
E
R
T
Y
'
,
 
'
P
r
o
p
i
e
t
a
t
 
a
c
t
u
a
l
i
t
z
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
D
E
L
E
T
E
_
P
R
O
P
E
R
T
Y
'
,
 
'
P
r
o
p
i
e
t
a
t
 
b
o
r
r
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
E
D
I
T
_
P
R
O
P
E
R
T
Y
_
S
E
T
T
I
N
G
S
'
,
 
'
C
o
n
f
i
g
u
r
a
c
i
Ã
³
 
d
e
 
p
r
o
p
i
e
t
a
t
 
e
d
i
t
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
P
U
B
L
I
S
H
_
P
R
O
P
E
R
T
Y
'
,
 
'
P
r
o
p
i
e
t
a
t
s
 
p
u
b
l
i
c
a
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
I
N
S
E
R
T
_
T
A
R
I
F
F
'
,
 
'
T
a
r
i
f
a
 
c
r
e
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
T
A
R
I
F
F
'
,
 
'
T
a
r
i
f
a
 
a
c
t
u
a
l
i
t
z
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
A
D
D
S
E
R
V
I
C
E
'
,
 
'
A
f
e
g
i
r
 
c
Ã
 
r
r
e
c
s
 
p
e
r
 
s
e
r
v
e
i
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
B
O
O
K
E
D
G
U
E
S
T
I
N
'
,
 
'
H
o
s
t
e
 
E
n
t
r
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
E
N
T
E
R
E
D
D
E
P
O
S
I
T
'
,
 
'
D
i
p
Ã
²
s
i
t
 
i
n
g
r
e
s
s
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
I
N
S
E
R
T
_
G
U
E
S
T
'
,
 
'
H
o
s
t
e
 
c
r
e
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
G
U
E
S
T
'
,
 
'
H
o
s
t
e
 
a
c
t
u
a
l
i
t
z
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
B
O
O
K
E
D
_
R
O
O
M
'
,
 
'
H
a
b
i
t
a
c
i
Ã
³
 
r
e
s
e
r
v
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
I
N
S
E
R
T
_
E
X
T
R
A
'
,
 
'
E
x
t
r
a
 
c
r
e
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
E
X
T
R
A
'
,
 
'
E
x
t
r
a
 
A
c
t
u
a
l
i
t
z
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
D
E
L
E
T
E
_
E
X
T
R
A
'
,
 
'
E
x
t
r
a
 
B
o
r
r
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
P
U
B
L
I
S
H
_
E
X
T
R
A
'
,
 
'
E
x
t
r
a
 
E
x
t
r
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
B
L
A
C
K
B
O
O
K
I
N
G
'
,
 
'
R
e
s
e
r
v
a
 
n
e
g
r
a
 
i
n
t
r
o
d
u
Ã
¯
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
B
L
A
C
K
B
O
O
K
I
N
G
_
D
E
L
E
T
E
'
,
 
'
R
e
s
e
r
v
a
 
n
e
g
r
a
 
b
o
r
r
a
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
X
T
R
A
_
T
I
T
L
E
'
,
 
'
E
x
t
r
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
X
T
R
A
_
D
E
S
C
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
X
T
R
A
_
N
A
M
E
'
,
 
'
N
o
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
X
T
R
A
_
P
R
I
C
E
'
,
 
'
P
r
e
u
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
X
T
R
A
_
S
A
V
E
_
U
P
D
A
T
E
D
'
,
 
'
E
x
t
r
a
 
a
c
t
u
a
l
i
t
z
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
X
T
R
A
_
L
I
N
K
T
E
X
T
'
,
 
'
E
d
i
t
a
r
 
a
r
t
i
c
l
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
X
T
R
A
_
D
E
L
E
T
E
D
'
,
 
'
E
x
t
r
a
 
b
o
r
r
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
E
X
T
R
A
S
'
,
 
"
A
d
m
i
n
i
s
t
r
a
c
i
Ã
³
 
d
'
e
x
t
r
e
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
E
X
T
R
A
S
'
,
 
'
M
o
s
t
r
a
r
 
e
l
s
 
e
x
t
r
e
s
 
e
n
 
e
l
 
m
o
m
e
n
t
 
d
e
 
r
e
s
e
r
v
a
r
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
E
X
T
R
A
S
_
D
E
S
C
'
,
 
"
P
o
s
i
 
a
i
x
Ã
²
 
a
 
'
S
Ã
­
'
 
p
e
r
 
a
 
m
o
s
t
r
a
r
 
q
u
a
l
s
e
v
o
l
 
e
x
t
r
a
 
q
u
e
 
v
o
s
t
Ã
¨
 
d
e
s
i
t
g
i
 
o
f
e
r
i
r
 
a
 
l
'
h
o
s
t
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
B
O
O
K
I
N
G
_
E
X
T
R
A
S
_
H
E
L
P
'
,
 
'
E
x
t
r
e
s
 
o
p
c
i
o
n
a
l
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
L
A
C
K
B
O
O
K
I
N
G
S
_
B
B
S
T
A
R
T
S
'
,
 
"
D
i
a
 
d
'
i
n
i
c
i
 
d
e
 
R
e
s
e
r
v
a
 
n
e
g
r
a
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
L
A
C
K
B
O
O
K
I
N
G
S
_
B
B
S
E
R
V
I
C
E
R
E
S
U
M
E
S
'
,
 
'
S
e
r
v
e
i
s
 
a
c
t
u
a
l
s
 
r
e
s
u
m
i
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
L
A
C
K
B
O
O
K
I
N
G
S
'
,
 
'
A
d
m
i
n
i
s
t
r
a
c
i
Ã
³
 
d
e
 
R
e
s
e
r
v
a
 
n
e
g
r
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
L
A
C
K
B
O
O
K
I
N
G
S
_
S
T
A
G
E
2
_
E
R
R
O
R
'
,
 
'
E
r
r
o
r
 
a
l
 
r
e
s
e
r
v
a
r
 
a
q
u
e
s
t
e
s
 
h
a
b
i
t
a
c
i
o
n
s
,
 
u
n
a
 
o
 
m
Ã
©
s
 
d
e
 
l
e
s
 
h
a
b
i
t
a
c
i
o
n
s
 
q
u
e
 
v
o
s
t
Ã
¨
 
h
a
 
e
s
c
o
l
l
i
t
 
n
o
 
e
s
t
a
n
 
l
l
i
u
r
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
L
A
C
K
B
O
O
K
I
N
G
S
_
R
O
O
M
S
S
U
B
J
E
C
T
'
,
 
'
H
a
b
i
t
a
c
i
o
n
s
 
i
n
c
l
u
Ã
¯
d
e
s
 
e
n
 
R
e
s
e
r
v
a
 
n
e
g
r
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
L
A
C
K
B
O
O
K
I
N
G
S
_
N
O
B
B
O
O
K
I
N
G
S
'
,
 
'
N
o
 
h
i
 
h
a
 
R
e
s
e
r
v
a
 
n
e
g
r
a
 
e
n
 
l
a
 
l
l
i
s
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
S
T
A
R
S
'
,
 
"
N
Ã
º
m
e
r
o
 
d
'
e
s
t
r
e
l
l
e
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
R
E
S
E
T
'
,
 
'
R
e
p
o
s
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
P
A
Y
P
A
L
_
C
A
N
C
E
L
L
E
D
'
,
 
'
R
e
s
e
r
v
a
 
c
a
n
c
e
l
Â
·
l
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
S
E
A
R
C
H
_
H
E
R
E
'
,
 
'
B
u
s
q
u
i
 
a
q
u
Ã
­
 
p
e
r
 
a
:
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
C
U
R
R
E
N
C
Y
S
Y
M
B
O
L
'
,
 
'
S
Ã
­
m
b
o
l
 
d
e
 
m
o
n
e
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
C
U
R
R
E
N
C
Y
C
O
D
E
'
,
 
'
C
o
d
i
 
d
e
 
m
o
n
e
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
C
L
I
C
K
F
O
R
M
O
R
E
I
N
F
O
R
M
A
T
I
O
N
'
,
 
'
F
a
g
i
 
c
l
i
c
k
 
p
e
r
 
a
 
m
Ã
©
s
 
i
n
f
o
r
m
a
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
A
D
V
A
N
C
E
B
O
O
K
I
N
G
S
L
I
M
I
T
Y
E
S
N
O
'
,
 
'
Â
¿
L
i
m
i
t
a
r
 
l
e
s
 
r
e
s
e
r
v
e
s
 
a
n
t
i
c
i
p
a
d
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
A
D
V
A
N
C
E
B
O
O
K
I
N
G
S
L
I
M
I
T
Y
E
S
N
O
_
D
E
S
C
'
,
 
"
P
o
s
i
 
a
i
x
Ã
²
 
a
 
'
S
Ã
­
'
 
s
i
 
v
o
s
t
Ã
¨
 
v
o
l
 
l
i
m
i
t
a
r
 
l
e
s
 
r
e
s
e
r
v
e
s
 
a
n
t
i
c
i
p
a
d
e
s
 
(
u
t
i
l
i
t
z
a
r
 
e
l
 
p
r
Ã
²
x
i
m
 
c
a
m
p
 
p
e
r
 
a
 
p
o
s
a
r
 
e
l
 
l
Ã
­
m
i
t
 
e
n
 
t
e
r
m
e
s
 
d
e
 
d
i
e
s
)
.
 
S
i
 
v
o
s
t
Ã
¨
 
p
o
s
a
 
a
i
x
Ã
²
 
a
 
s
Ã
­
 
l
l
a
v
o
r
s
 
s
i
 
l
'
u
s
u
a
r
i
o
 
i
n
t
e
n
t
a
 
r
e
s
e
r
v
a
r
 
m
Ã
©
s
 
d
e
 
n
 
d
i
e
s
 
l
l
a
v
o
r
s
 
l
a
 
s
e
v
a
 
d
a
t
a
 
d
'
a
r
r
i
b
a
d
a
 
s
e
r
Ã
 
 
r
e
s
t
a
u
r
a
d
a
 
a
 
l
a
 
d
a
t
a
 
d
'
a
v
u
i
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
A
D
V
A
N
C
E
B
O
O
K
I
N
G
S
L
I
M
I
T
D
A
Y
S
'
,
 
'
D
i
e
s
 
d
e
 
r
e
s
e
r
v
e
s
 
a
n
t
i
c
i
p
a
d
e
s
 
e
s
t
a
n
 
l
i
m
i
t
a
t
s
 
a
:
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
F
R
O
N
T
_
R
O
O
M
T
A
X
'
,
 
'
I
m
p
o
s
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
R
O
O
M
T
A
X
'
,
 
"
I
V
A
 
d
e
 
l
'
h
a
b
i
t
a
c
i
Ã
³
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
R
O
O
M
T
A
X
_
F
I
X
E
D
'
,
 
'
I
m
p
o
s
t
 
f
i
x
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
R
O
O
M
T
A
X
_
P
E
R
C
E
N
T
A
G
E
'
,
 
"
P
e
r
c
e
n
t
a
t
g
e
 
d
'
i
m
p
o
s
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
E
U
R
O
T
A
X
'
,
 
'
I
m
p
o
s
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
E
U
R
O
T
A
X
_
P
E
R
C
E
N
T
A
G
E
'
,
 
"
P
e
r
c
e
n
t
a
t
g
e
 
d
'
i
m
p
o
s
t
o
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
A
R
C
H
I
V
E
'
,
 
'
A
r
x
i
v
a
r
 
t
o
t
s
 
e
l
s
 
r
e
g
i
s
t
r
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
'
,
 
'
L
e
s
 
n
o
s
t
r
e
s
 
t
a
r
i
f
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
T
I
T
L
E
'
,
 
'
N
o
m
 
d
e
 
t
a
r
i
f
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
D
E
S
C
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
 
d
e
 
t
a
r
i
f
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
R
O
O
M
T
Y
P
E
'
,
 
"
T
i
p
u
s
 
d
'
h
a
b
i
t
a
c
i
Ã
³
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
S
T
A
R
T
S
'
,
 
'
V
Ã
 
l
i
d
 
d
e
s
d
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
E
N
D
S
'
,
 
'
V
Ã
 
l
i
d
 
f
i
n
s
 
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
P
P
N
'
,
 
'
P
e
r
 
p
e
r
s
o
n
a
 
p
e
r
 
n
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
'
,
 
'
P
e
r
 
n
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
N
O
T
W
E
E
K
E
N
D
'
,
 
'
N
o
 
i
n
c
l
o
u
 
c
a
p
s
 
d
e
 
s
e
t
m
a
n
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
I
N
D
A
Y
S
'
,
 
'
D
i
e
s
 
m
Ã
­
n
i
m
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
A
X
D
A
Y
S
'
,
 
'
D
i
e
s
 
m
Ã
 
x
i
m
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
I
N
P
E
E
P
S
'
,
 
'
P
e
r
s
o
n
e
s
 
m
Ã
­
n
i
m
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
A
X
P
E
E
P
S
'
,
 
'
P
e
r
s
o
n
e
s
 
m
Ã
 
x
i
m
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
P
R
E
V
I
E
W
'
,
 
'
I
n
s
p
e
c
c
i
Ã
³
 
p
r
e
v
i
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
E
D
I
T
I
N
G
M
O
D
E
O
N
'
,
 
"
M
o
d
e
 
d
'
e
d
i
c
i
Ã
³
 
a
c
t
i
v
a
t
?
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
C
U
S
T
O
M
T
E
X
T
'
,
 
'
T
e
x
t
 
a
c
t
u
a
l
i
t
z
a
t
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
L
A
N
G
U
A
G
E
'
,
 
"
C
o
r
r
e
g
e
i
x
i
 
l
'
i
d
i
o
m
a
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
P
T
Y
P
E
'
,
 
'
T
i
p
u
s
 
d
e
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
P
T
Y
P
E
S
_
L
I
S
T
_
T
I
T
L
E
'
,
 
'
L
l
i
s
t
a
 
d
e
 
p
r
o
p
i
e
t
a
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
P
T
Y
P
E
S
_
L
I
S
T
_
T
I
T
L
E
_
E
D
I
T
'
,
 
'
E
d
i
t
a
r
 
t
i
p
u
s
 
d
e
 
p
r
o
p
i
e
t
a
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
P
T
Y
P
E
S
_
P
T
Y
P
E
'
,
 
'
T
i
p
u
s
 
d
e
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
P
T
Y
P
E
S
_
P
T
Y
P
E
_
D
E
S
C
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
 
d
e
 
t
i
p
u
s
 
d
e
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
P
T
Y
P
E
S
_
S
A
V
E
D
'
,
 
'
T
i
p
u
s
 
d
e
 
p
r
o
p
i
e
t
a
t
 
g
r
a
b
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
P
T
Y
P
E
S
_
D
E
L
E
T
E
D
'
,
 
'
T
i
p
u
s
 
d
e
 
p
r
o
p
i
e
t
a
t
 
b
o
r
r
a
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
D
I
T
B
O
O
K
I
N
G
_
R
E
M
A
I
N
D
E
R
T
O
P
A
Y
'
,
 
'
R
e
c
o
r
d
i
 
p
a
g
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
X
T
R
A
S
_
N
O
E
X
T
R
A
S
'
,
 
'
N
i
n
g
Ã
º
n
 
s
e
r
v
e
i
 
e
x
t
r
a
 
p
e
r
 
a
 
f
a
c
t
u
r
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
H
A
R
G
I
N
G
_
D
E
P
O
S
I
T
'
,
 
'
D
i
p
Ã
²
s
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
H
A
R
G
I
N
G
_
F
U
L
L
A
M
T
'
,
 
'
Q
u
a
n
t
i
t
a
t
 
c
o
m
p
l
e
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
H
A
R
G
I
N
G
_
C
O
N
F
I
G
'
,
 
'
Q
u
a
n
t
i
t
a
t
 
c
a
r
r
e
g
a
d
a
 
e
n
 
t
e
m
p
s
 
d
e
 
l
a
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
H
A
R
G
I
N
G
_
C
O
N
F
I
G
_
D
E
S
C
'
,
 
"
U
t
i
l
i
t
z
i
 
a
q
u
e
s
t
a
 
o
p
c
i
Ã
³
 
p
e
r
 
a
 
d
e
c
i
d
i
r
 
e
l
 
q
u
e
 
s
'
h
a
 
d
e
 
c
a
r
r
e
g
a
r
 
a
l
 
r
e
s
e
r
v
a
r
.
 
E
s
c
u
l
l
i
 
e
l
 
d
i
p
Ã
²
s
i
t
 
s
i
 
e
l
 
d
i
p
Ã
²
s
i
t
 
s
'
h
a
 
d
e
 
c
a
r
r
e
g
a
r
,
 
o
 
l
a
 
q
u
a
n
t
i
t
a
t
 
c
o
m
p
l
e
t
a
 
s
i
 
l
a
 
q
u
a
n
t
i
t
a
t
 
c
o
m
p
l
e
t
a
 
s
'
h
a
 
d
e
 
c
a
r
r
e
g
a
r
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
O
N
T
H
S
T
O
S
H
O
W
'
,
 
'
M
e
s
o
s
 
d
e
l
 
C
a
l
.
 
a
 
m
o
s
t
r
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
O
N
T
H
S
T
O
S
H
O
W
_
D
E
S
C
'
,
 
"
E
n
 
l
a
 
d
i
s
p
o
n
i
b
i
l
i
t
a
t
 
d
e
 
l
e
s
 
h
a
b
i
t
a
c
i
o
n
s
,
 
q
u
a
n
t
s
 
m
e
s
o
s
 
d
e
l
 
c
a
l
e
n
d
a
r
i
 
s
'
h
a
u
r
i
e
n
 
d
e
 
m
o
s
t
r
a
r
?
"
)
;

/
/
 
V
1
.
4

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
G
A
T
E
W
A
Y
L
I
S
T
'
,
 
'
P
a
s
a
r
e
l
Â
·
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
C
A
N
C
E
L
'
,
 
'
C
a
n
c
e
l
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
B
L
A
C
K
B
O
O
K
I
N
G
_
D
E
S
C
'
,
 
"
E
s
c
u
l
l
i
 
s
i
 
u
s
 
p
l
a
u
 
l
e
s
 
h
a
b
i
t
a
c
i
o
n
(
s
)
 
q
u
e
 
v
o
s
t
Ã
¨
 
d
e
s
i
t
j
a
 
t
e
n
i
r
 
f
o
r
a
 
d
e
 
s
e
r
v
e
i
,
 
i
 
l
e
s
 
d
a
t
e
s
 
r
e
l
e
v
a
n
t
s
.
 
<
b
r
>
S
i
 
u
n
a
 
h
a
b
i
t
a
c
i
Ã
³
 
n
o
 
t
Ã
©
 
u
n
a
 
m
a
r
c
a
,
 
n
o
 
e
s
 
p
o
t
 
i
n
c
l
u
i
r
 
e
n
 
l
a
 
R
e
s
e
r
v
a
 
n
e
g
r
a
 
f
i
n
s
 
q
u
e
 
t
o
t
e
s
 
l
e
s
 
r
e
s
e
r
v
e
s
 
e
s
t
i
g
u
i
n
 
c
o
m
p
l
e
t
e
s
/
c
a
n
c
e
l
Â
·
l
a
d
e
s
.
<
b
r
/
>
 
Q
u
a
n
 
v
o
s
t
Ã
¨
 
h
a
g
i
 
e
s
c
o
l
l
i
t
 
l
e
s
 
d
a
t
e
s
 
a
p
r
o
p
i
a
d
e
s
,
 
f
e
r
 
c
l
i
c
k
 
e
n
 
e
l
 
b
o
t
Ã
³
 
b
l
a
u
 
'
a
p
l
i
c
a
'
 
p
e
r
 
a
 
r
e
e
x
a
m
i
n
a
r
 
l
a
 
d
i
s
p
o
n
i
b
i
l
i
t
a
t
 
d
e
 
l
'
h
a
b
i
t
a
c
i
Ã
³
.
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
J
R
_
N
O
T
L
O
G
G
E
D
I
N
'
,
 
'
<
c
e
n
t
e
r
>
S
i
 
u
s
 
p
l
a
u
 
e
n
t
r
a
r
 
u
n
 
a
l
t
r
e
 
c
o
p
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
J
R
_
B
L
A
C
K
B
O
O
K
I
N
G
_
R
E
A
S
O
N
'
,
 
'
R
a
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
G
A
T
E
W
A
Y
_
U
S
E
G
A
T
E
W
A
Y
S
'
,
 
'
U
t
i
l
i
t
z
a
r
 
p
a
s
a
r
e
l
Â
·
l
e
s
 
d
e
 
P
a
g
a
m
e
n
t
s
 
e
n
 
L
Ã
­
n
e
a
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
G
A
T
E
W
A
Y
_
B
O
O
K
I
N
G
_
C
H
O
O
S
E
'
,
 
'
E
s
c
u
l
l
i
 
s
i
 
u
s
 
p
l
a
u
 
e
l
 
s
e
u
 
m
Ã
¨
t
o
d
e
 
d
e
 
p
a
g
a
m
e
n
t
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
G
A
T
E
W
A
Y
_
E
N
A
B
L
E
D
'
,
 
'
P
a
s
a
r
e
l
Â
·
l
e
s
 
d
e
 
P
a
g
a
m
e
n
t
s
 
e
n
 
L
Ã
­
n
e
a
 
p
e
r
m
Ã
¨
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
P
L
U
G
I
N
S
_
U
P
D
A
T
E
'
,
 
'
P
l
u
g
i
n
 
m
o
d
i
f
i
c
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
P
L
U
G
I
N
S
_
I
N
S
E
R
T
'
,
 
'
P
l
u
g
i
n
 
i
n
s
e
r
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
G
A
L
L
E
R
Y
L
I
N
K
'
,
 
'
V
e
u
r
e
 
l
a
 
w
e
b
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
G
A
L
L
E
R
Y
L
I
N
K
'
,
 
'
L
i
n
k
 
E
x
t
e
r
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
G
A
L
L
E
R
Y
L
I
N
K
_
D
E
S
C
'
,
 
'
P
o
s
i
 
e
l
 
l
i
n
k
 
d
e
l
 
s
e
u
 
w
e
b
s
i
t
e
 
a
q
u
Ã
­
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
C
R
E
D
I
T
C
A
R
D
_
E
D
I
T
'
,
 
'
E
d
i
t
a
r
 
T
a
r
j
e
t
a
 
d
e
 
c
r
Ã
¨
d
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
E
D
I
T
I
C
O
N
'
,
 
"
E
d
i
t
a
r
 
l
a
 
m
i
d
a
 
d
e
 
l
'
i
c
o
n
a
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
L
I
D
E
S
H
O
W
S
'
,
 
'
D
i
a
p
o
s
i
t
i
v
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
L
I
D
E
S
H
O
W
S
_
S
H
O
W
S
L
I
D
E
S
H
O
W
L
I
N
K
'
,
 
'
M
o
s
t
r
a
r
 
e
n
l
l
a
Ã
§
 
a
 
D
i
a
p
o
s
i
t
i
v
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
L
I
D
E
S
H
O
W
S
_
S
H
O
W
S
L
I
D
E
S
H
O
W
I
N
L
I
N
E
'
,
 
'
M
o
s
t
r
a
r
 
d
i
a
p
o
s
i
t
i
v
e
s
 
e
n
 
l
Ã
­
n
e
a
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
S
L
I
D
E
S
H
O
W
'
,
 
'
I
m
a
t
g
e
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
S
_
S
H
O
W
T
A
R
I
F
F
S
L
I
N
K
'
,
 
'
M
o
s
t
r
a
r
 
e
n
l
l
a
Ã
§
 
a
 
T
a
r
i
f
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
P
O
P
U
P
S
A
L
L
O
W
E
D
'
,
 
'
P
o
p
u
p
s
 
p
e
r
m
e
s
o
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
I
M
A
G
E
U
P
L
O
A
D
S
'
,
 
'
C
a
r
r
e
g
a
r
 
l
e
s
 
i
m
a
t
g
e
s
 
e
n
 
s
Ã
¨
r
i
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
_
T
A
B
S
_
M
I
S
C
'
,
 
'
M
i
s
c
e
l
Â
·
l
a
n
i
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
'
,
 
'
C
o
n
f
i
g
u
r
a
c
i
Ã
³
 
d
e
 
l
a
 
p
Ã
 
g
i
n
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
_
G
L
O
B
A
L
P
F
E
A
T
U
R
E
S
'
,
 
'
U
t
i
l
i
t
z
i
 
l
e
s
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
q
u
e
s
 
g
l
o
b
a
l
s
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
_
G
L
O
B
A
L
P
F
E
A
T
U
R
E
S
_
I
N
F
O
'
,
 
'
T
o
 
a
s
s
i
g
n
 
a
n
 
i
m
a
g
e
 
t
o
 
t
h
i
s
 
f
e
a
t
u
r
e
 
y
o
u
 
f
i
r
s
t
 
n
e
e
d
 
t
o
 
u
p
l
o
a
d
 
y
o
u
r
 
b
u
s
i
n
e
s
s
 
f
e
a
t
u
r
e
 
i
m
a
g
e
s
 
t
o
 
t
h
e
 
/
'
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
u
p
l
o
a
d
e
d
i
m
a
g
e
s
/
p
f
e
a
t
u
r
e
s
/
 
f
o
l
d
e
r
.
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
_
I
C
O
N
'
,
 
'
I
c
o
n
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
_
G
L
O
B
A
L
_
S
E
A
R
C
H
O
P
T
I
O
N
'
,
 
'
E
s
c
u
l
l
i
 
e
l
 
p
l
u
g
i
n
 
d
e
 
l
a
 
c
e
r
c
a
 
q
u
e
 
v
o
s
t
Ã
¨
 
d
e
s
i
t
g
i
 
u
t
i
l
i
t
z
a
r
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
N
O
R
E
S
U
L
T
S
'
,
 
'
<
b
>
H
o
 
s
e
n
t
o
,
 
l
a
 
s
e
v
a
 
c
e
r
c
a
 
n
o
 
h
a
 
t
r
o
b
a
t
 
r
e
s
u
l
t
a
t
s
.
 
M
o
d
i
f
i
q
u
i
 
s
i
 
u
s
 
p
l
a
u
 
l
a
 
s
e
v
a
 
c
e
r
c
a
 
i
 
p
r
o
v
i
 
u
n
 
a
l
t
r
e
 
c
o
p
.
<
/
b
>
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
R
E
Y
O
U
S
U
R
E
'
,
 
'
S
e
g
u
r
 
q
u
e
 
v
o
s
t
Ã
¨
 
d
e
s
i
t
j
a
 
f
e
r
 
a
i
x
Ã
²
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
B
O
O
K
T
H
I
S
P
R
O
P
E
R
T
Y
'
,
 
'
R
e
s
e
r
v
a
r
 
u
n
a
 
p
r
o
p
i
e
t
a
t
'
)
;

/
/
v
1
.
4
c

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
S
_
S
H
O
W
T
A
R
I
F
F
S
I
N
L
I
N
E
'
,
 
'
M
o
s
t
r
a
r
 
T
a
r
i
f
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
B
A
S
I
C
T
E
M
P
L
A
T
E
_
S
H
O
W
A
D
D
R
E
S
S
'
,
 
'
D
i
r
e
c
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
B
A
S
I
C
T
E
M
P
L
A
T
E
_
S
H
O
W
D
E
T
A
I
L
S
'
,
 
'
I
n
f
o
r
m
a
c
i
Ã
³
 
d
e
t
a
l
l
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
B
A
S
I
C
T
E
M
P
L
A
T
E
_
S
H
O
W
R
O
O
M
S
'
,
 
'
C
l
i
c
k
 
p
e
r
 
a
 
h
a
b
i
t
a
c
i
o
n
s
 
i
 
d
i
s
p
o
n
i
b
i
l
i
t
a
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
B
A
S
I
C
T
E
M
P
L
A
T
E
_
S
H
O
W
A
D
D
R
E
S
S
_
T
I
T
L
E
'
,
 
"
M
o
s
t
r
a
r
 
i
n
f
o
r
m
a
c
i
Ã
³
 
d
e
 
d
i
r
e
c
c
i
Ã
³
 
a
 
s
o
t
a
 
d
'
a
q
u
e
s
t
 
e
n
l
l
a
Ã
§
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
B
A
S
I
C
T
E
M
P
L
A
T
E
_
S
H
O
W
D
E
T
A
I
L
S
_
T
I
T
L
E
'
,
 
"
M
o
s
t
r
a
r
 
d
e
t
a
l
l
s
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
 
a
 
s
o
t
a
 
d
'
a
q
u
e
s
t
 
e
n
l
l
a
Ã
§
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
B
A
S
I
C
T
E
M
P
L
A
T
E
_
S
H
O
W
R
O
O
M
S
_
T
I
T
L
E
'
,
 
"
M
o
s
t
r
a
r
 
h
a
b
i
t
a
c
i
o
n
s
 
i
 
d
i
s
p
o
n
i
b
i
l
i
t
a
t
s
 
a
 
s
o
t
a
 
d
'
a
q
u
e
s
t
 
e
n
l
l
a
Ã
§
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
S
_
M
O
D
E
L
_
S
I
N
G
L
E
T
A
R
I
F
F
'
,
 
'
T
a
r
i
f
a
 
s
i
m
p
l
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
S
_
M
O
D
E
L
_
A
V
E
R
A
G
E
S
'
,
 
'
P
r
o
m
i
t
j
o
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
S
_
M
O
D
E
L
'
,
 
'
S
e
l
e
c
c
i
o
n
i
 
e
l
 
m
o
d
e
l
 
d
e
 
t
a
r
i
f
a
 
a
 
u
t
i
l
i
t
z
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
S
_
M
O
D
E
L
_
D
E
S
C
'
,
 
"
V
o
s
t
Ã
¨
 
t
Ã
©
 
d
i
s
p
o
n
i
b
l
e
 
d
o
s
 
m
Ã
¨
t
o
d
e
s
 
d
e
 
c
a
l
c
u
l
a
r
 
l
e
s
 
t
a
r
i
f
e
s
.
 
P
r
i
m
e
r
,
 
e
l
 
m
Ã
¨
t
o
d
e
 
d
e
 
'
t
a
r
i
f
a
 
s
i
m
p
l
e
'
 
e
l
 
q
u
a
l
 
p
e
r
m
e
t
 
o
f
e
r
t
a
r
 
d
i
f
e
r
e
n
t
s
 
t
a
r
i
f
e
s
 
a
 
l
'
h
o
s
t
e
 
i
 
e
l
 
c
Ã
 
l
c
u
l
 
p
e
r
 
e
s
t
a
d
a
 
Ã
©
s
 
e
l
 
m
a
t
e
i
x
 
p
e
r
 
a
 
t
o
t
a
 
l
a
 
e
s
t
a
n
c
i
a
 
c
o
m
p
l
e
t
a
.
 
A
i
x
Ã
²
 
Ã
©
s
 
Ã
º
t
i
l
 
q
u
a
n
 
v
o
l
e
m
 
o
f
e
r
i
r
 
d
i
f
e
r
e
n
t
s
 
t
a
r
i
f
e
s
 
p
e
r
 
a
 
u
n
a
 
m
a
t
e
i
x
a
 
d
a
t
a
.
 
E
s
c
u
l
l
i
 
l
'
a
l
t
r
e
 
m
Ã
¨
t
o
d
e
,
 
'
t
a
r
i
f
a
 
p
r
o
m
i
g
'
 
s
i
 
d
e
s
i
t
j
a
 
a
j
u
s
t
a
r
 
e
l
s
 
p
r
e
u
s
 
d
e
p
e
n
d
e
n
t
s
 
d
e
 
l
a
 
d
a
t
a
.
 
E
l
 
s
i
s
t
e
m
a
 
t
r
o
b
a
r
Ã
 
 
t
o
t
e
s
 
l
e
s
 
t
a
r
i
f
e
s
 
p
e
r
 
a
 
c
a
d
a
 
d
i
a
 
d
e
 
r
e
s
e
r
v
a
 
i
 
r
e
t
o
r
n
a
r
Ã
 
 
e
l
 
p
r
o
m
i
g
 
d
e
 
t
o
t
 
e
l
 
p
e
r
Ã
­
o
d
o
 
d
e
s
i
t
j
a
t
"
)
;

/
/
 
v
1
.
4
e

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
H
O
W
D
E
P
A
R
T
U
R
E
I
N
P
U
T
'
,
 
'
M
o
s
t
r
a
r
 
d
a
t
a
 
d
e
 
s
o
r
t
i
d
a
 
e
s
c
o
l
l
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
H
O
W
D
E
P
A
R
T
U
R
E
I
N
P
U
T
_
D
E
S
C
'
,
 
"
P
o
s
a
r
 
a
 
S
I
 
s
i
 
d
e
s
i
t
j
a
 
m
o
s
t
r
a
r
 
e
l
 
c
a
m
p
 
d
a
t
a
 
d
e
 
s
o
r
t
i
d
a
.
 
N
o
m
Ã
©
s
 
u
t
i
l
i
t
z
i
 
s
i
 
s
a
p
 
q
u
Ã
¨
 
f
e
r
,
 
l
a
 
d
a
t
a
 
d
e
 
s
o
r
t
i
d
a
 
s
e
m
p
r
e
 
s
'
a
c
t
i
v
a
r
Ã
 
 
e
l
 
d
i
a
 
d
e
s
p
r
Ã
©
s
 
d
e
 
l
'
a
r
r
i
b
a
d
a
.
"
)
;

/
/
 
v
1
.
4
f

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
P
R
O
P
E
R
T
Y
L
I
S
T
D
E
S
C
'
,
 
'
L
Ã
­
m
i
t
 
d
e
 
d
e
s
c
r
i
p
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
P
R
O
P
E
R
T
Y
L
I
S
T
D
E
S
C
_
D
E
S
C
'
,
 
'
A
i
x
Ã
²
 
l
i
m
i
t
a
 
l
a
 
q
u
a
n
t
i
d
a
d
 
d
e
 
c
a
r
Ã
 
c
t
e
r
s
 
m
o
s
t
r
a
t
s
 
q
u
a
n
 
e
s
 
d
e
s
c
r
i
u
 
u
n
a
 
p
r
o
p
i
e
t
a
t
.
'
)
;

/
/
 
v
1
.
4
g

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
D
A
T
E
F
O
R
M
A
T
S
T
Y
L
E
'
,
 
'
Â
¿
F
o
r
m
a
t
 
d
a
t
e
(
)
 
u
t
i
l
i
t
z
a
t
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
U
B
L
I
S
H
'
,
 
'
P
u
b
l
i
c
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
U
N
P
U
B
L
I
S
H
'
,
 
'
D
e
s
p
u
b
l
i
c
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
I
N
P
U
T
E
R
R
O
R
_
B
A
C
K
G
R
O
U
N
D
'
,
 
'
E
r
r
o
r
 
e
n
 
e
n
t
r
a
d
a
 
d
e
 
c
o
l
o
r
 
d
e
 
f
o
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
O
N
F
I
G
C
O
U
N
T
R
I
E
S
'
,
 
'
P
a
Ã
­
s
 
p
e
r
 
d
e
f
e
c
t
e
 
e
n
 
f
o
r
m
u
l
a
r
i
 
d
e
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
J
A
V
A
S
C
R
I
P
T
_
'
,
 
'
C
a
m
p
s
 
m
a
r
c
a
t
s
 
a
m
b
 
*
 
v
e
r
m
e
l
l
 
s
Ã
³
n
 
r
e
q
u
e
r
i
t
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
S
E
L
F
R
E
G
I
S
T
R
A
T
I
O
N
'
,
 
'
E
l
s
 
u
s
u
a
r
i
s
 
p
o
d
e
n
 
r
e
g
i
s
t
r
a
r
 
l
e
s
 
s
e
v
e
s
 
p
r
o
p
i
e
t
a
t
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
S
E
L
F
R
E
G
I
S
T
R
A
T
I
O
N
_
D
E
S
C
'
,
 
"
P
o
s
a
r
 
a
 
'
S
I
'
 
s
i
 
d
e
s
i
t
j
a
 
q
u
e
 
e
l
s
 
u
s
u
a
r
i
s
 
e
s
t
i
g
u
i
n
 
h
a
b
i
l
i
t
a
t
s
 
p
e
r
 
a
 
r
e
g
i
s
t
r
a
r
 
l
e
s
 
s
e
v
e
s
 
p
r
o
p
i
e
t
a
t
s
 
s
e
n
s
e
 
i
n
t
e
r
v
e
n
c
i
Ã
³
 
d
e
 
l
'
a
d
m
i
n
i
s
t
r
a
d
o
r
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
G
I
S
T
R
A
T
I
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
_
S
T
E
P
2
_
2
'
,
 
'
C
a
m
p
s
 
m
a
r
c
a
t
s
 
a
m
b
 
*
 
v
e
r
m
e
l
l
 
s
Ã
³
n
 
r
e
q
u
e
r
i
t
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
G
I
S
T
R
A
T
I
O
N
_
A
U
D
I
T
_
C
R
E
A
T
E
P
R
O
P
E
R
T
Y
'
,
 
'
P
r
o
p
i
e
t
a
t
 
c
r
e
a
d
a
'
)
;

/
/
 
v
1
.
4
i

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
O
N
T
H
S
_
S
T
A
R
T
O
F
Y
E
A
R
'
,
 
"
M
o
s
t
r
a
r
 
c
a
l
e
n
d
a
r
i
 
d
e
s
d
e
 
l
'
i
n
i
c
i
 
d
e
 
l
'
a
n
y
?
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
O
N
T
H
S
_
S
T
A
R
T
O
F
Y
E
A
R
_
D
E
S
C
'
,
 
"
E
l
 
c
a
l
e
n
d
a
r
i
 
d
e
 
d
i
s
p
o
n
i
b
i
l
i
t
a
t
 
e
s
 
m
o
s
t
r
a
r
Ã
 
 
d
e
s
d
e
 
l
'
i
n
i
c
i
 
d
e
 
l
'
a
n
y
 
a
c
t
u
a
l
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
N
U
M
B
E
R
O
F
R
O
O
M
S
A
V
A
I
L
A
B
L
E
'
,
 
'
H
a
b
i
t
a
c
i
o
n
s
 
d
i
s
p
o
n
i
b
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
A
C
K
T
O
P
R
O
P
E
R
T
Y
D
E
T
A
I
L
S
L
I
N
K
'
,
 
'
T
o
r
n
a
r
 
a
 
d
e
t
a
l
l
s
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
R
O
O
M
T
Y
P
E
S
'
,
 
"
T
i
p
u
s
 
d
'
h
a
b
i
t
a
c
i
Ã
³
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
_
G
L
O
B
A
L
_
S
E
A
R
C
H
O
P
T
I
O
N
_
R
A
N
D
O
M
L
I
M
I
T
'
,
 
'
L
Ã
­
m
i
t
 
d
e
 
c
e
r
c
a
 
a
l
e
a
t
o
r
i
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
W
G
O
O
G
L
E
C
U
R
R
E
N
C
Y
L
I
N
K
S
'
,
 
'
M
o
s
t
r
a
r
 
e
n
l
l
a
Ã
§
 
a
 
G
o
o
g
l
e
 
C
u
r
r
e
n
c
y
 
C
o
n
v
e
r
s
i
o
n
 
e
n
 
e
l
 
l
l
i
s
t
a
t
 
d
e
 
t
a
r
i
f
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
R
R
E
N
C
Y
C
O
N
V
E
R
S
I
O
N
T
E
X
T
'
,
 
'
C
o
n
v
e
r
t
i
r
 
p
r
e
u
 
a
 
:
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
L
L
O
W
H
T
M
L
E
D
I
T
O
R
'
,
 
'
P
e
r
m
e
t
r
e
 
a
l
s
 
u
s
u
a
r
i
s
 
e
d
i
t
a
r
 
u
t
i
l
i
t
z
a
n
t
 
e
d
i
t
o
r
s
 
H
T
M
L
?
'
)
;

/
/
 
v
2

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
"
U
t
i
l
i
t
z
i
 
a
q
u
e
s
t
 
f
o
r
m
u
l
a
r
i
 
p
e
r
 
a
 
f
e
r
 
l
a
 
s
e
v
a
 
r
e
s
e
r
v
a
.
 
M
o
g
u
i
 
e
l
 
c
u
r
s
o
r
 
s
o
b
r
e
 
l
e
s
 
i
m
t
g
e
s
 
d
e
 
'
i
'
 
p
e
r
 
a
 
m
Ã
©
s
 
i
n
f
o
r
m
a
c
i
Ã
³
 
s
o
b
r
e
 
l
a
 
c
o
l
u
m
n
a
.
 
M
o
d
i
f
i
q
u
i
 
e
l
s
 
s
e
u
s
 
d
e
t
a
l
l
s
 
d
e
l
 
r
e
g
i
s
t
r
e
 
c
o
m
 
l
a
 
d
a
t
a
 
d
'
a
r
r
i
b
a
d
a
 
i
 
s
o
r
t
i
d
a
 
i
 
e
l
 
n
Ã
º
m
e
r
o
 
d
'
h
o
s
t
e
s
,
 
l
l
a
v
o
r
s
 
s
e
l
e
c
c
i
o
n
i
 
l
a
 
h
a
b
i
t
a
c
i
Ã
³
 
q
u
e
 
d
e
s
i
t
g
i
 
d
e
 
l
a
 
l
l
i
s
t
a
 
d
e
 
d
i
s
p
o
n
i
b
i
l
i
t
a
t
.
 
P
r
e
m
i
 
s
o
b
r
e
 
q
u
a
l
s
e
v
o
l
 
h
a
b
i
t
a
c
i
Ã
³
 
d
i
s
p
o
n
i
b
l
e
 
p
e
r
 
a
 
a
g
r
e
g
a
r
-
l
a
 
a
 
l
a
 
s
e
v
a
 
r
e
s
e
r
v
a
.
 
Q
u
a
n
 
h
o
 
h
a
g
i
 
f
e
t
,
 
v
o
s
t
Ã
¨
 
p
o
t
 
a
f
e
g
i
r
 
q
u
a
l
s
e
v
o
l
 
e
x
t
r
a
 
o
p
t
a
t
i
u
,
 
t
a
m
b
Ã
©
 
p
o
t
 
p
r
o
p
o
r
c
i
o
n
a
r
 
e
l
s
 
s
e
u
s
 
d
e
t
a
l
l
s
 
d
e
 
d
i
r
e
c
c
i
Ã
³
.
 
Q
u
a
n
 
e
l
 
f
o
r
m
u
l
a
r
i
 
e
s
t
i
g
u
i
 
c
o
m
p
l
e
t
 
u
t
i
l
i
t
z
i
 
e
l
 
b
o
t
Ã
³
 
p
e
r
 
a
 
c
o
n
f
i
r
m
a
r
 
e
l
 
s
e
u
 
r
e
g
i
s
t
r
e
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
I
N
S
T
R
U
C
T
I
O
N
S
_
S
R
P
'
,
 
"
U
t
i
l
i
t
z
i
 
a
q
u
e
s
t
 
f
o
r
m
u
l
a
r
i
 
p
e
r
 
a
 
f
e
r
 
l
a
 
s
e
v
a
 
r
e
s
e
r
v
a
.
 
M
o
g
u
i
 
e
l
 
c
u
r
s
o
r
 
s
o
b
r
e
 
l
e
s
 
i
m
a
t
g
e
s
 
d
e
 
'
i
'
 
p
e
r
 
a
 
m
Ã
©
s
 
i
n
f
o
r
m
a
c
i
Ã
³
 
s
o
b
r
e
 
l
a
 
c
o
l
u
m
n
a
.
 
M
o
d
i
f
i
q
u
i
 
e
l
s
 
s
e
u
s
 
d
e
t
a
l
l
s
 
d
e
l
 
r
e
g
i
s
t
r
e
 
c
o
m
 
l
a
 
d
a
t
a
 
d
'
a
r
r
i
b
a
d
a
 
i
 
s
o
r
t
i
d
a
 
i
 
e
l
 
n
Ã
º
m
e
r
o
 
d
'
h
o
s
t
e
s
,
 
l
l
a
v
o
r
s
 
s
e
l
e
c
c
i
o
n
i
 
l
'
h
a
b
i
t
a
c
i
Ã
³
 
q
u
e
 
d
e
s
i
t
j
a
 
d
e
 
l
a
 
l
l
i
s
t
a
 
d
e
 
d
i
s
p
o
n
i
b
i
l
i
t
a
t
.
 
P
r
e
m
i
 
s
o
b
r
e
 
Q
u
a
l
s
e
v
o
l
 
h
a
b
i
t
a
c
i
Ã
³
 
d
i
s
p
o
n
i
b
l
e
 
p
e
r
 
a
 
a
f
e
g
i
r
-
l
a
 
a
 
l
a
 
s
e
v
a
 
r
e
s
e
r
v
a
.
 
Q
u
a
n
 
h
o
 
h
a
g
i
 
f
e
t
,
 
v
o
s
t
Ã
¨
 
p
o
t
 
a
f
e
g
i
r
 
q
u
a
l
s
e
v
o
l
 
e
x
t
r
a
 
o
p
t
a
t
i
u
,
 
t
a
m
b
Ã
©
 
p
o
t
 
p
r
o
p
o
r
c
i
o
n
a
r
 
e
l
s
 
s
e
u
s
 
d
e
t
a
l
l
s
 
d
e
 
d
i
r
e
c
c
i
Ã
³
.
 
Q
u
a
n
 
e
l
 
f
o
r
m
u
l
a
r
i
 
e
s
t
i
g
u
i
 
c
o
m
p
l
e
t
 
u
t
i
l
i
t
z
i
 
e
l
 
b
o
t
Ã
³
 
p
e
r
 
a
 
c
o
n
f
i
r
m
a
r
 
e
l
 
s
e
u
 
r
e
g
i
s
t
r
e
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
P
A
R
T
I
C
U
L
A
R
S
'
,
 
'
P
a
r
t
i
c
u
l
a
r
i
t
a
t
s
 
d
e
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
P
A
R
T
I
C
U
L
A
R
S
_
D
E
S
C
'
,
 
'
S
e
l
e
c
c
i
o
n
i
 
e
l
s
 
d
e
t
a
l
l
s
 
r
e
q
u
e
r
i
t
s
 
d
e
 
l
a
 
s
e
v
a
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
'
,
 
'
D
i
s
p
o
n
i
b
i
l
i
t
a
t
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
_
D
E
S
C
'
,
 
"
S
e
l
e
c
c
i
o
n
i
 
l
'
h
a
b
i
t
a
c
i
Ã
³
 
q
u
e
 
d
e
s
i
t
j
a
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
_
D
E
S
C
_
S
R
P
'
,
 
'
M
i
r
a
r
 
s
i
 
l
a
 
p
r
o
p
i
e
t
a
t
 
e
s
t
Ã
 
 
d
i
s
p
o
n
i
b
l
e
 
p
e
r
 
a
q
u
e
s
t
a
 
d
a
t
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
'
,
 
'
E
x
t
r
e
s
 
o
p
c
i
o
n
a
l
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
_
D
E
S
C
'
,
 
'
S
e
l
e
c
c
i
o
n
i
 
q
u
i
n
 
e
x
t
r
a
 
o
p
c
i
o
n
a
l
 
d
e
s
i
t
j
a
 
i
n
c
l
u
Ã
¯
r
 
e
n
 
l
a
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
P
E
R
D
A
Y
'
,
 
'
P
e
r
 
n
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
D
D
R
E
S
S
'
,
 
'
D
i
r
e
c
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
D
D
R
E
S
S
_
D
E
S
C
'
,
 
'
S
i
 
u
s
 
p
l
a
u
 
i
n
g
r
e
s
s
i
 
e
l
s
 
d
e
t
a
l
l
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
R
O
O
M
S
'
,
 
'
H
a
b
i
t
a
c
i
o
n
s
 
d
i
s
p
o
n
i
b
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
S
E
L
E
C
T
E
D
R
O
O
M
S
'
,
 
'
H
a
b
i
t
a
c
i
o
n
s
 
s
e
l
e
c
c
i
o
n
a
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
E
A
R
L
I
E
S
T
P
O
S
S
I
B
L
E
A
R
R
I
V
A
L
D
A
T
E
'
,
 
"
<
b
r
>
L
a
 
p
o
s
s
i
b
l
e
 
d
a
t
a
 
d
'
a
r
r
i
b
a
d
a
 
m
Ã
©
s
 
p
r
o
p
e
r
a
 
Ã
©
s
:
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
R
O
O
M
'
,
 
'
P
e
r
 
n
i
t
:
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
R
O
O
M
_
T
O
T
A
L
'
,
 
'
T
o
t
a
l
:
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
E
X
T
R
A
S
'
,
 
'
E
x
t
r
e
s
:
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
A
X
'
,
 
'
i
m
p
o
s
t
o
s
:
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
D
I
S
C
O
U
N
T
'
,
 
'
D
e
s
c
o
m
p
t
e
s
:
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
O
T
A
L
'
,
 
'
T
o
t
a
l
 
F
i
n
a
l
:
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
O
T
A
L
I
N
P
A
R
T
Y
'
,
 
'
H
o
s
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
C
L
I
C
K
H
E
R
E
C
A
P
T
I
O
N
'
,
 
'
C
l
i
c
k
 
p
e
r
 
a
 
a
f
e
g
i
r
 
a
q
u
e
s
t
a
 
h
a
b
i
t
a
c
i
Ã
³
 
a
 
l
a
 
s
e
v
a
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
C
L
I
C
K
H
E
R
E
C
A
P
T
I
O
N
_
R
E
M
O
V
E
'
,
 
'
C
l
i
c
k
 
p
e
r
 
a
 
e
l
i
m
i
n
a
r
 
a
q
u
e
s
t
a
 
h
a
b
i
t
a
c
i
Ã
³
 
d
e
 
l
a
 
s
e
v
a
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
V
A
R
I
A
N
C
E
S
_
C
U
S
T
O
M
E
R
T
Y
P
E
S
'
,
 
"
T
i
p
u
s
 
d
'
h
o
s
t
e
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
A
R
I
A
N
C
E
S
_
T
Y
P
E
'
,
 
'
T
i
p
u
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
A
R
I
A
N
C
E
S
_
T
Y
P
E
_
T
T
'
,
 
"
T
i
p
u
s
 
d
'
h
o
s
t
e
,
 
E
x
:
 
N
e
n
s
 
5
-
1
0
,
 
o
 
e
s
t
u
d
i
a
n
t
s
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
A
R
I
A
N
C
E
S
_
N
O
T
E
S
'
,
 
'
N
o
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
A
R
I
A
N
C
E
S
_
N
O
T
E
S
_
T
T
'
,
 
"
N
o
t
e
s
 
d
e
l
 
q
u
e
 
v
o
s
t
Ã
¨
 
p
o
t
 
v
o
l
e
r
 
f
e
r
 
r
e
s
p
e
c
t
e
 
a
 
a
q
u
e
s
t
 
t
i
p
u
s
 
d
'
h
o
s
t
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
A
R
I
A
N
C
E
S
_
M
A
X
I
M
U
M
'
,
 
'
M
Ã
 
x
i
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
A
R
I
A
N
C
E
S
_
M
A
X
I
M
U
M
_
T
T
'
,
 
"
M
Ã
 
x
i
m
 
n
Ã
º
m
e
r
o
 
d
'
a
q
u
e
s
t
 
t
i
p
u
s
 
d
'
h
o
s
t
e
 
q
u
e
 
p
o
t
 
s
e
r
 
s
e
l
e
c
c
i
o
n
a
t
 
e
n
 
l
a
 
r
e
s
e
r
v
a
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
A
R
I
A
N
C
E
S
_
I
S
P
E
R
C
E
N
T
A
G
E
'
,
 
'
Ã
‰
s
 
p
e
r
c
e
n
t
a
t
g
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
A
R
I
A
N
C
E
S
_
I
S
P
E
R
C
E
N
T
A
G
E
_
T
T
'
,
 
"
L
a
 
f
i
g
u
r
a
 
c
a
l
c
u
l
a
d
a
 
Ã
©
s
 
u
n
 
p
e
r
c
e
n
t
a
t
g
e
 
d
e
 
l
a
 
f
i
g
u
r
a
 
B
A
S
E
 
c
a
l
c
u
l
a
d
a
 
p
e
r
 
a
 
l
'
h
a
b
i
t
a
c
i
Ã
³
.
 
S
i
 
a
i
x
Ã
²
 
e
s
 
p
o
s
a
 
a
 
'
N
O
'
 
l
l
a
v
o
r
s
 
l
a
 
f
i
g
u
r
a
 
q
u
e
 
v
o
s
t
Ã
¨
 
e
s
p
e
c
i
f
i
c
a
 
s
i
m
p
l
e
m
e
n
t
 
s
'
a
f
e
g
e
i
x
 
o
 
s
u
b
s
t
r
a
e
i
x
 
d
e
l
 
v
a
l
o
r
 
B
A
S
E
 
d
e
 
l
'
h
a
b
i
t
a
c
i
Ã
³
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
A
R
I
A
N
C
E
S
_
P
O
S
N
E
G
'
,
 
'
A
f
e
g
i
r
 
v
a
r
i
Ã
 
n
c
i
a
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
A
R
I
A
N
C
E
S
_
P
O
S
N
E
G
_
T
T
'
,
 
"
L
a
 
f
i
g
u
r
a
 
c
a
l
c
u
l
a
d
a
 
s
'
a
f
e
g
e
i
x
 
o
 
e
l
i
m
i
n
a
 
d
e
 
l
a
 
f
i
g
u
r
a
 
B
A
S
E
 
c
a
l
c
u
l
a
d
a
 
p
e
r
 
a
 
l
'
h
a
b
i
t
a
c
i
Ã
³
.
 
P
o
s
i
 
a
i
x
Ã
²
 
a
 
'
N
O
'
 
s
i
 
v
o
s
t
Ã
¨
 
v
o
l
 
a
i
x
Ã
²
 
p
e
r
 
a
 
u
n
 
d
e
s
c
o
m
p
t
e
 
d
e
 
l
a
 
f
i
g
u
r
a
 
B
A
S
E
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
A
R
I
A
N
C
E
S
_
V
A
R
I
A
N
C
E
'
,
 
'
V
a
r
i
Ã
 
n
c
i
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
A
R
I
A
N
C
E
S
_
V
A
R
I
A
N
C
E
_
T
T
'
,
 
'
Q
u
a
n
t
i
t
a
t
 
a
 
v
a
r
i
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
R
E
O
R
D
E
R
_
C
U
S
T
O
M
E
R
T
Y
P
E
'
,
 
"
M
o
d
i
f
i
c
a
t
 
t
i
p
u
s
 
d
'
o
r
d
r
e
 
d
'
h
o
s
t
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
D
E
L
E
T
E
_
C
U
S
T
O
M
E
R
T
Y
P
E
'
,
 
"
E
l
i
m
i
n
a
t
 
t
i
p
u
s
 
d
'
h
o
s
t
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
I
N
S
E
R
T
_
C
U
S
T
O
M
E
R
T
Y
P
E
'
,
 
"
C
r
e
a
t
 
t
i
p
u
s
 
d
'
h
o
s
t
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
C
U
S
T
O
M
E
R
T
Y
P
E
'
,
 
"
A
c
t
u
a
l
i
t
z
a
t
 
t
i
p
u
s
 
d
'
h
o
s
t
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
C
U
S
T
O
M
E
R
T
Y
P
E
_
U
P
D
A
T
E
D
'
,
 
"
A
c
t
u
a
l
i
t
z
a
t
 
t
i
p
u
s
 
d
'
h
o
s
t
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
H
O
W
R
O
O
M
S
L
I
S
T
L
I
N
K
'
,
 
"
M
o
s
t
r
a
r
 
e
n
l
l
a
Ã
§
 
a
 
l
l
i
s
t
a
t
 
d
'
h
a
b
i
t
a
c
i
o
n
s
 
e
n
 
l
a
 
p
Ã
 
g
i
n
a
 
d
e
 
d
e
t
a
l
l
s
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
?
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
H
O
W
O
N
L
Y
A
V
L
C
A
L
'
,
 
"
Â
¿
M
o
s
t
r
a
r
 
<
b
>
n
o
m
Ã
©
s
<
/
b
>
 
l
l
i
s
t
a
t
 
d
e
 
d
i
s
p
o
n
i
b
i
l
i
t
a
t
 
d
'
h
a
b
i
t
a
c
i
o
n
s
 
p
e
r
 
c
a
l
e
n
d
a
r
i
?
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
H
O
W
O
N
L
Y
A
V
L
C
A
L
_
D
E
S
C
'
,
 
"
C
a
n
v
Ã
¯
i
 
a
i
x
Ã
²
 
a
 
'
S
Ã
­
'
 
p
e
r
 
a
 
d
e
s
a
c
t
i
v
a
r
 
d
e
s
p
l
e
g
a
m
e
n
t
 
d
e
l
 
t
Ã
­
t
o
l
 
d
e
 
p
r
o
p
i
e
t
a
t
 
i
 
d
e
t
a
l
l
s
,
 
p
e
r
 
a
 
q
u
e
 
n
o
m
Ã
©
s
 
e
l
 
c
a
l
e
n
d
a
r
i
 
d
e
 
d
i
s
p
o
n
i
b
i
l
i
t
a
t
 
d
'
h
a
b
i
t
a
c
i
o
n
s
 
s
i
g
u
i
 
v
i
s
t
 
e
n
 
l
a
 
s
e
c
c
i
Ã
³
 
d
e
 
d
e
t
a
l
l
s
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
.
 
P
e
n
s
a
t
 
p
e
r
 
a
 
u
s
u
a
r
i
s
 
q
u
e
 
a
l
q
u
i
l
e
n
 
l
e
s
 
h
a
b
i
t
a
c
i
o
n
s
 
d
e
 
l
e
s
 
p
r
o
p
i
e
t
a
t
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
M
I
N
I
M
U
M
I
N
T
E
R
V
A
L
'
,
 
'
I
n
t
e
r
v
a
l
 
m
Ã
­
n
i
m
 
d
e
 
A
r
r
i
b
a
d
a
-
S
o
r
t
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
M
I
N
I
M
U
M
I
N
T
E
R
V
A
L
_
D
E
S
C
'
,
 
"
L
'
i
n
t
e
r
v
a
l
 
m
Ã
­
n
i
m
 
e
n
 
l
a
 
r
e
s
e
r
v
a
 
e
n
t
r
e
 
l
e
s
 
d
a
t
e
s
 
d
'
a
r
r
i
b
a
d
a
 
i
 
s
o
r
t
i
d
a
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
B
O
O
K
I
N
G
F
O
R
M
_
S
H
O
W
R
O
O
M
N
O
'
,
 
"
L
l
i
s
t
a
t
 
d
'
h
a
b
i
t
a
c
i
o
n
s
 
e
n
 
l
a
 
r
e
s
e
r
v
a
 
m
o
s
t
r
a
 
n
Ã
º
m
e
r
o
 
d
'
h
a
b
i
t
a
c
i
Ã
³
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
B
O
O
K
I
N
G
F
O
R
M
_
S
H
O
W
R
O
O
M
N
A
M
E
'
,
 
"
L
l
i
s
t
a
t
 
d
'
h
a
b
i
t
a
c
i
o
n
s
 
e
n
 
l
a
 
r
e
s
e
r
v
a
 
m
o
s
t
r
a
 
n
o
m
 
d
'
h
a
b
i
t
a
c
i
Ã
³
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
B
O
O
K
I
N
G
F
O
R
M
_
S
H
O
W
T
A
R
I
F
F
T
I
T
L
E
'
,
 
"
L
l
i
s
t
a
t
 
d
'
h
a
b
i
t
a
c
i
o
n
s
 
e
n
 
l
a
 
r
e
s
e
r
v
a
 
m
o
s
t
r
a
 
l
l
i
s
t
a
t
 
d
e
 
t
a
r
i
f
e
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
O
R
D
E
R
'
,
 
'
O
r
d
r
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
Q
U
I
R
E
D
F
I
E
L
D
S
'
,
 
'
R
e
q
u
e
r
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
D
A
Y
S
B
E
F
O
R
E
F
I
R
S
T
B
O
O
K
I
N
G
'
,
 
"
D
i
e
s
 
a
b
a
n
s
 
d
e
 
l
'
a
r
r
i
b
a
d
a
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
D
A
Y
S
B
E
F
O
R
E
F
I
R
S
T
B
O
O
K
I
N
G
_
D
E
S
C
'
,
 
"
L
a
p
s
e
 
m
Ã
­
n
i
m
 
d
e
 
d
i
e
s
 
e
n
t
r
e
 
a
v
u
i
 
i
 
e
l
 
d
i
a
 
d
e
 
l
'
a
r
r
i
b
a
d
a
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
T
V
'
,
 
'
V
a
r
i
a
c
i
o
n
s
 
d
e
l
 
t
i
p
u
s
 
d
e
 
d
a
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
T
V
_
D
O
W
'
,
 
'
D
i
a
 
d
e
 
l
a
 
s
e
t
m
a
n
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
D
E
F
A
U
L
T
N
U
M
B
E
R
O
F
F
I
R
S
T
G
U
E
S
T
T
Y
P
E
'
,
 
"
T
i
p
u
s
 
d
'
h
o
s
t
e
 
p
e
r
 
d
e
f
e
c
t
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
D
E
F
A
U
L
T
N
U
M
B
E
R
O
F
F
I
R
S
T
G
U
E
S
T
T
Y
P
E
D
E
S
C
'
,
 
"
N
Ã
º
m
e
r
o
 
p
e
r
 
d
e
f
e
c
t
e
 
d
e
l
 
p
r
i
m
e
r
 
t
i
p
u
s
 
d
'
h
o
s
t
e
 
a
 
m
o
s
t
r
a
r
,
 
s
i
 
u
t
i
l
i
t
z
a
 
d
i
f
e
r
e
n
t
s
 
t
i
p
u
s
 
d
'
h
o
s
t
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
R
E
G
I
S
T
E
R
E
D
U
S
E
R
S
O
N
L
Y
B
O
O
K
'
,
 
'
N
o
m
Ã
©
s
 
e
l
s
 
u
s
u
a
r
i
s
 
r
e
g
i
s
t
r
a
t
s
 
p
o
d
e
n
 
r
e
s
e
r
v
a
r
 
e
n
 
l
Ã
­
n
e
a
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
G
I
S
T
E
R
E
D
U
S
E
R
S
O
N
L
Y
B
O
O
K
'
,
 
'
H
o
 
s
e
n
t
i
m
,
 
p
e
r
 
a
 
r
e
s
e
r
v
a
r
 
e
n
 
l
Ã
­
n
e
a
 
h
a
 
d
e
 
s
e
r
 
u
n
 
u
s
u
a
r
i
 
r
e
g
i
s
t
r
a
t
.
 
C
l
i
c
k
 
a
q
u
Ã
­
 
p
e
r
 
a
 
r
e
g
i
s
t
r
a
r
-
s
e
 
e
n
 
e
l
 
l
l
o
c
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
V
L
C
A
L
_
C
U
R
R
E
N
T
B
O
O
K
I
N
G
F
O
N
T
'
,
 
'
C
o
l
o
r
 
d
e
 
t
e
x
t
 
p
e
r
 
a
 
e
n
l
l
a
Ã
§
o
s
 
e
n
 
r
e
s
e
r
v
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
V
L
C
A
L
_
W
E
E
K
E
N
D
B
O
R
D
E
R
'
,
 
'
V
o
r
e
s
 
c
a
p
 
d
e
 
s
e
t
m
a
n
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
V
L
C
A
L
_
B
O
O
K
I
N
G
_
K
E
Y
'
,
 
'
H
a
b
i
t
a
c
i
Ã
³
 
r
e
s
e
r
v
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
V
L
C
A
L
_
B
L
A
C
K
_
K
E
Y
'
,
 
'
R
e
s
e
r
v
a
 
n
e
g
r
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
D
E
P
O
S
I
T
_
D
E
P
O
S
I
T
R
O
U
N
D
U
P
'
,
 
'
A
r
r
o
d
o
n
i
r
 
d
i
p
Ã
²
s
i
t
 
a
 
n
Ã
º
m
e
r
o
 
e
n
t
e
r
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
D
E
P
O
S
I
T
_
C
H
A
R
G
E
D
E
P
O
S
I
T
'
,
 
'
Â
¿
C
a
r
r
e
g
a
r
 
d
i
p
Ã
²
s
i
t
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
P
R
I
C
E
S
A
R
E
W
E
E
K
L
Y
'
,
 
'
C
Ã
 
r
r
e
c
s
 
d
e
 
t
a
r
i
f
e
s
 
d
e
s
a
t
s
 
c
o
m
 
f
i
g
u
r
e
s
 
s
e
t
m
a
n
a
l
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
P
R
I
C
E
S
A
R
E
W
E
E
K
L
Y
_
D
E
S
C
'
,
 
"
T
Ã
©
 
l
'
o
p
c
i
Ã
³
 
d
e
 
d
e
s
a
r
 
e
l
s
 
c
Ã
 
r
r
e
c
s
 
p
e
r
 
t
a
r
i
f
a
 
e
n
 
v
a
l
o
r
s
 
d
i
a
r
i
s
 
i
 
s
e
t
m
a
n
a
l
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
W
E
E
K
'
,
 
'
P
r
e
u
 
p
e
r
 
s
e
t
m
a
n
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
R
E
C
U
R
R
I
N
G
'
,
 
"
D
a
t
e
s
 
d
'
a
r
r
i
b
a
d
a
 
a
r
r
e
g
l
a
d
e
s
:
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
R
E
C
U
R
R
I
N
G
_
D
E
S
C
'
,
 
'
Q
u
a
n
 
a
q
u
e
s
t
a
 
o
p
c
i
Ã
³
 
Ã
©
s
 
s
e
l
e
c
c
i
o
n
a
d
a
,
 
e
l
s
 
n
Ã
º
m
e
r
o
s
 
d
e
 
l
e
s
 
d
a
t
e
s
 
s
Ã
³
n
 
m
o
s
t
r
a
d
a
s
 
e
n
 
e
l
 
m
e
n
Ã
º
 
d
e
s
p
l
e
g
a
b
l
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
A
R
R
I
V
A
L
D
A
T
E
_
I
N
V
A
L
I
D
'
,
 
"
D
a
t
a
 
d
'
a
r
r
i
b
a
d
a
 
i
n
c
o
r
r
e
c
t
a
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
D
E
P
A
R
T
U
R
E
D
A
T
E
_
I
N
V
A
L
I
D
'
,
 
'
D
a
t
a
 
d
e
 
s
o
r
t
i
d
a
 
i
n
c
o
r
r
e
c
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
B
O
O
K
I
N
G
_
T
O
O
_
S
H
O
R
T
1
'
,
 
"
L
a
 
r
e
s
e
r
v
a
 
Ã
©
s
 
m
o
l
t
 
c
u
r
t
a
.
 
E
s
 
n
e
c
e
s
s
i
t
e
n
 
d
i
v
e
r
s
o
s
 
d
i
e
s
 
e
n
t
r
e
 
l
'
a
r
r
i
b
a
d
a
 
i
 
l
a
 
s
o
r
t
i
d
a
:
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
B
O
O
K
I
N
G
_
T
O
O
_
S
H
O
R
T
2
'
,
 
"
L
'
i
n
t
e
r
v
a
l
 
Ã
©
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
G
U
E
S
T
_
T
Y
P
E
_
I
N
C
O
R
R
E
C
T
'
,
 
"
V
a
r
i
a
n
t
 
t
i
p
u
s
 
d
'
h
o
s
t
e
 
i
n
c
o
r
r
e
c
t
a
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
S
E
L
E
C
T
_
G
U
E
S
T
_
N
U
M
B
E
R
S
'
,
 
"
S
e
l
e
c
c
i
o
n
i
 
e
l
 
t
i
p
u
s
 
d
'
h
o
s
t
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
T
O
O
_
M
A
N
Y
_
I
N
_
P
A
R
T
Y
_
F
O
R
_
T
A
R
I
F
F
S
'
,
 
'
M
a
s
s
e
s
 
o
p
c
i
o
n
s
 
p
e
r
 
a
 
l
a
 
l
l
i
s
t
a
 
d
e
 
t
a
r
i
f
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
M
O
R
E
_
R
O
O
M
S
_
T
H
A
N
_
G
U
E
S
T
S
'
,
 
'
H
a
 
e
s
c
o
l
l
i
t
 
m
Ã
©
s
 
h
a
b
i
t
a
c
i
o
n
s
 
q
u
e
 
h
o
s
t
e
s
,
 
c
l
i
c
k
 
e
n
 
u
n
a
 
h
a
b
i
t
a
c
i
Ã
³
 
p
e
r
 
a
 
e
l
i
m
i
n
a
r
-
l
a
 
d
e
 
l
a
 
s
e
v
a
 
s
e
l
e
c
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
T
O
O
_
M
A
N
Y
_
G
U
E
S
T
S
_
F
O
R
_
B
E
D
S
'
,
 
'
M
a
s
s
e
s
 
h
o
s
t
e
s
 
p
e
r
 
a
l
s
 
l
l
i
t
s
 
d
i
s
p
o
n
i
b
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
C
H
O
O
S
E
_
M
O
R
E
_
R
O
O
M
S
'
,
 
'
N
e
c
e
s
s
i
t
a
 
m
Ã
©
s
 
h
a
b
i
t
a
c
i
o
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
S
E
L
E
C
T
_
A
_
R
O
O
M
'
,
 
'
E
s
c
u
l
l
i
 
u
n
a
 
h
a
b
i
t
a
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
F
I
R
S
T
N
A
M
E
'
,
 
'
N
o
m
 
r
e
q
u
e
r
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
S
U
R
N
A
M
E
'
,
 
'
C
o
g
n
o
m
 
r
e
q
u
e
r
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
H
O
U
S
E
N
O
'
,
 
'
N
o
.
 
c
a
s
a
 
r
e
q
u
e
r
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
S
T
R
E
E
T
'
,
 
'
C
a
r
r
e
r
 
r
e
q
u
e
r
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
T
O
W
N
'
,
 
'
P
o
b
l
e
 
r
e
q
u
e
r
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
R
E
G
I
O
N
'
,
 
'
R
e
g
i
Ã
³
 
r
e
q
u
e
r
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
P
O
S
T
C
O
D
E
'
,
 
'
C
o
d
i
 
p
o
s
t
a
l
 
r
e
q
u
e
r
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
C
O
U
N
T
R
Y
'
,
 
'
P
a
Ã
­
s
 
r
e
q
u
e
r
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
L
A
N
D
L
I
N
E
'
,
 
'
T
e
l
Ã
¨
f
o
n
 
r
e
q
u
e
r
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
C
E
L
L
P
H
O
N
E
'
,
 
'
M
Ã
²
v
i
l
 
r
e
q
u
e
r
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
E
M
A
I
L
'
,
 
'
E
m
a
i
l
 
r
e
q
u
e
r
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
R
P
_
W
E
H
A
V
E
V
A
C
A
N
C
I
E
S
'
,
 
'
T
e
n
i
m
 
V
A
C
A
N
T
S
!
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
N
O
R
O
O
M
S
S
E
L
E
C
T
E
D
Y
E
T
'
,
 
'
N
o
 
h
i
 
h
a
 
h
a
b
i
t
a
c
i
o
n
s
 
s
e
l
e
c
c
i
o
n
a
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
_
N
U
M
B
E
R
'
,
 
'
R
e
s
e
r
v
a
 
n
o
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
I
N
P
U
T
O
K
T
O
B
O
O
K
_
B
A
C
K
G
R
O
U
N
D
'
,
 
'
O
k
 
p
e
r
 
a
 
r
e
s
e
r
v
a
r
,
 
m
i
s
s
a
t
g
e
 
d
e
 
f
o
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
D
U
M
P
T
E
M
P
L
A
T
E
D
A
T
A
'
,
 
'
B
a
i
x
a
r
 
v
a
r
i
a
b
l
e
s
 
d
e
 
p
l
a
n
t
i
l
l
a
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
D
U
M
P
T
E
M
P
L
A
T
E
D
A
T
A
_
D
E
S
C
'
,
 
'
A
c
t
i
v
a
r
 
a
i
x
Ã
²
 
p
e
r
 
a
 
b
a
i
x
a
r
 
v
a
r
i
a
b
l
e
s
 
d
e
 
l
a
 
p
l
a
n
t
i
l
l
a
 
p
e
r
 
a
 
c
a
d
a
 
v
i
s
t
a
.
 
Ã
š
t
i
l
 
s
i
 
d
e
s
i
t
j
a
 
v
e
u
r
e
 
s
i
 
c
e
r
t
 
e
l
e
m
e
n
t
 
e
s
t
Ã
 
 
d
i
s
p
o
n
i
b
l
e
 
p
e
r
 
a
 
s
e
r
 
u
t
i
l
i
t
z
a
t
 
e
n
 
u
n
a
 
p
l
a
n
t
i
l
l
a
 
d
e
t
e
r
m
i
n
a
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
U
P
P
L
I
M
E
N
T
S
_
S
I
N
G
L
E
P
E
R
S
O
N
_
I
S
P
E
R
C
E
N
T
A
G
E
'
,
 
'
F
i
g
u
r
a
 
Ã
©
s
 
p
e
r
c
e
n
t
a
t
g
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
U
P
P
L
I
M
E
N
T
S
_
S
I
N
G
L
E
P
E
R
S
O
N
_
I
S
P
E
R
C
E
N
T
A
G
E
_
D
E
S
C
'
,
 
"
P
o
s
i
 
a
i
x
Ã
²
 
a
 
'
S
Ã
­
'
 
s
i
 
l
a
 
f
i
g
u
r
a
 
d
e
 
c
Ã
 
l
c
u
l
 
d
e
 
p
e
r
s
o
n
e
s
 
Ã
©
s
 
u
n
 
p
e
r
c
e
n
t
a
t
g
e
.
 
S
i
 
n
o
 
l
l
a
v
o
r
s
 
s
'
a
p
l
i
c
a
r
Ã
 
 
c
o
m
 
u
n
a
 
x
i
f
r
a
 
f
i
x
a
.
"
)
;

/
/
v
2
r
c
2

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
L
I
M
I
T
R
O
O
M
S
L
I
S
T
'
,
 
'
L
Ã
­
m
i
t
 
e
n
 
h
a
b
i
t
a
c
i
o
n
s
/
t
a
r
i
f
e
s
 
d
i
s
p
o
n
i
b
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
L
I
M
I
T
R
O
O
M
S
L
I
S
T
_
D
E
S
C
'
,
 
"
U
t
i
l
i
t
z
i
 
a
i
x
Ã
²
 
p
e
r
 
a
 
l
i
m
i
t
a
r
 
e
l
 
n
Ã
º
m
e
r
o
 
d
'
h
a
b
i
t
a
c
i
o
n
s
 
d
i
s
p
o
n
i
b
l
e
s
 
i
 
a
r
a
n
z
e
l
s
 
q
u
e
 
e
s
 
l
l
i
s
t
e
n
 
e
n
 
e
l
 
f
o
r
m
u
l
a
r
i
 
d
e
 
r
e
s
e
r
v
a
.
 
P
o
s
i
'
l
 
a
 
z
e
r
o
 
s
i
 
v
o
s
t
Ã
¨
 
n
o
 
v
o
l
 
h
a
b
i
l
i
t
a
r
 
l
i
m
i
t
a
c
i
o
n
s
.
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
R
P
_
W
E
H
A
V
E
N
O
V
A
C
A
N
C
I
E
S
'
,
 
'
N
O
 
h
i
 
h
a
 
V
A
C
A
N
T
S
!
'
)
;

/
/
 
T
r
a
n
s
l
a
t
e
 
f
r
o
m
 
h
e
r
e

/
/
 
I
n
t
r
o
d
u
c
e
d
 
i
n
 
v
2
.
5

/
/
 
v
2
.
6

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
T
N
O
W
'
,
 
'
R
e
s
e
r
v
i
 
a
r
a
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
J
R
C
O
N
F
I
G
_
G
L
O
B
A
L
E
D
I
T
I
N
G
'
,
 
"
M
o
d
e
 
d
'
e
d
i
c
i
Ã
³
 
G
l
o
b
a
l
?
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
J
R
C
O
N
F
I
G
_
G
L
O
B
A
L
E
D
I
T
I
N
G
_
D
E
S
C
'
,
 
"
V
a
g
i
 
a
m
b
 
c
o
m
p
t
e
 
a
m
b
 
a
q
u
e
s
t
a
 
f
u
n
c
i
Ã
³
.
 
S
i
 
s
'
e
s
t
a
b
l
e
i
x
 
e
n
 
S
Ã
­
,
 
e
l
 
m
o
d
e
 
d
'
e
d
i
c
i
Ã
³
 
a
f
e
c
t
a
r
Ã
 
 
e
l
 
t
e
x
t
 
a
 
m
e
s
u
r
a
 
p
e
r
 
a
 
t
o
t
e
s
 
l
e
s
 
p
r
o
p
i
e
t
a
t
s
 
e
n
 
e
l
 
s
i
s
t
e
m
a
 
p
e
r
 
a
 
l
a
 
c
o
n
s
t
a
n
t
 
q
u
e
 
s
'
e
s
t
Ã
 
 
e
d
i
t
a
n
t
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
J
R
C
O
N
F
I
G
_
G
L
O
B
A
L
C
U
R
R
E
N
C
Y
'
,
 
'
S
Ã
­
m
b
o
l
 
G
l
o
b
a
l
 
d
e
 
m
o
n
e
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
J
R
C
O
N
F
I
G
_
I
S
W
R
A
P
P
E
D
'
,
 
'
P
l
e
g
a
t
 
d
e
 
C
o
m
p
o
n
e
n
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
J
R
C
O
N
F
I
G
_
I
S
W
R
A
P
P
E
D
_
D
E
S
C
'
,
 
'
P
o
s
i
 
a
i
x
Ã
²
 
a
 
S
Ã
­
,
 
s
i
 
e
l
 
c
o
m
p
o
n
e
n
t
e
 
e
s
t
Ã
 
 
p
l
e
g
a
t
 
d
e
 
m
a
n
e
r
a
 
q
u
e
 
l
e
s
 
Ã
 
r
e
e
s
 
d
e
l
 
m
Ã
²
d
u
l
 
i
 
d
e
 
c
a
p
Ã
§
a
l
e
r
a
 
n
o
 
s
Ã
³
n
 
v
i
s
i
b
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
W
E
E
K
E
N
D
O
N
L
Y
'
,
 
'
N
o
m
Ã
©
s
 
c
a
p
s
 
d
e
 
S
e
t
m
a
n
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
W
E
E
K
E
N
D
D
A
Y
S
'
,
 
'
D
i
e
s
 
d
e
 
c
a
p
 
d
e
 
s
e
t
m
a
n
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
W
E
E
K
E
N
D
D
A
Y
S
_
D
E
S
C
'
,
 
"
E
s
t
a
b
l
e
i
x
i
 
e
l
s
 
s
e
u
s
 
d
i
e
s
 
d
e
 
c
a
p
 
d
e
 
s
e
t
m
a
n
a
.
 
T
a
r
i
f
e
s
 
q
u
e
 
p
e
r
m
e
t
i
n
 
o
 
n
o
 
c
a
p
s
 
d
e
 
s
e
t
m
a
n
a
 
t
i
n
d
r
a
n
 
a
q
u
e
s
t
a
 
o
p
c
i
Ã
³
 
e
n
 
c
o
m
p
t
e
 
a
l
 
g
e
n
e
r
a
r
 
l
a
 
l
l
i
s
t
a
 
d
'
h
a
b
i
t
a
c
i
o
n
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
D
I
T
P
R
O
P
E
R
T
Y
_
S
E
L
E
C
T
C
O
U
N
T
R
Y
'
,
 
"
S
e
l
e
c
c
i
o
n
i
 
e
l
 
s
e
u
 
p
a
Ã
­
s
 
a
b
a
n
s
 
d
'
a
f
e
g
i
r
 
a
l
t
r
a
 
i
n
f
o
r
m
a
c
i
Ã
³
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
D
I
T
P
R
O
P
E
R
T
Y
_
S
A
V
E
B
E
F
O
R
E
U
P
L
O
A
D
'
,
 
'
G
r
a
b
i
 
e
l
s
 
s
e
u
s
 
c
a
n
v
i
s
 
a
b
a
n
s
 
d
e
 
p
u
j
a
r
 
i
m
a
t
g
e
s
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
A
R
I
F
F
S
F
R
O
M
'
,
 
'
P
r
e
u
s
 
d
e
s
d
e
 
-
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
E
A
R
C
H
_
A
L
L
'
,
 
'
T
o
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
E
A
R
C
H
_
G
E
O
_
C
O
U
N
T
R
Y
S
E
A
R
C
H
'
,
 
'
C
e
r
c
a
 
p
e
r
 
p
a
Ã
­
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
E
A
R
C
H
_
G
E
O
_
R
E
G
I
O
N
S
E
A
R
C
H
'
,
 
'
C
e
r
c
a
 
p
e
r
 
r
e
g
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
E
A
R
C
H
_
G
E
O
_
T
O
W
N
S
E
A
R
C
H
'
,
 
'
C
e
r
c
a
 
p
e
r
 
c
i
u
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
E
A
R
C
H
_
F
E
A
T
U
R
E
_
I
N
F
O
'
,
 
'
F
u
n
c
i
Ã
³
 
d
e
 
c
e
r
c
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
E
A
R
C
H
_
B
U
T
T
O
N
'
,
 
'
B
u
s
c
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
E
A
R
C
H
_
D
E
S
C
R
I
P
T
I
O
N
_
I
N
F
O
'
,
 
'
E
s
c
r
i
g
u
i
 
u
n
a
 
p
a
r
a
u
l
a
 
e
n
 
e
l
 
q
u
a
d
r
e
 
i
 
p
r
e
m
i
 
e
l
 
b
o
t
Ã
³
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
E
A
R
C
H
_
D
E
S
C
R
I
P
T
I
O
N
_
L
A
B
E
L
'
,
 
'
P
a
r
a
u
l
e
s
 
d
e
 
c
e
r
c
a
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
E
A
R
C
H
_
A
V
L
_
I
N
F
O
'
,
 
'
S
i
 
u
s
 
p
l
a
u
,
 
i
n
t
r
o
d
u
e
i
x
i
 
l
a
 
s
e
v
a
 
a
r
r
i
b
a
d
a
 
p
r
e
v
i
s
t
a
 
i
 
l
a
 
d
a
t
a
 
d
e
 
s
o
r
t
i
d
a
 
i
 
p
r
e
m
i
 
e
l
 
b
o
t
Ã
³
 
p
e
r
 
a
 
b
u
s
c
a
r
 
h
a
b
i
t
a
c
i
o
n
s
 
d
i
s
p
o
n
i
b
l
e
s
 
e
n
 
l
e
s
 
d
a
t
e
s
 
e
s
c
o
l
l
i
d
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
E
A
R
C
H
_
P
T
Y
P
E
S
'
,
 
'
L
l
i
s
t
a
r
 
p
r
o
p
i
e
t
a
t
s
 
p
e
r
 
t
i
p
u
s
 
d
e
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
E
A
R
C
H
_
R
T
Y
P
E
S
'
,
 
"
L
l
i
s
t
a
r
 
p
r
o
p
i
e
t
a
t
s
 
p
e
r
 
t
i
p
u
s
 
d
'
h
a
b
i
t
a
c
i
Ã
³
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
O
R
T
O
R
D
E
R
_
D
E
F
A
U
L
T
'
,
 
'
P
e
r
 
d
e
f
e
c
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
O
R
T
O
R
D
E
R
_
P
R
O
P
E
R
T
Y
N
A
M
E
'
,
 
'
N
o
m
 
P
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
O
R
T
O
R
D
E
R
_
P
R
O
P
E
R
T
Y
R
E
G
I
O
N
'
,
 
'
R
e
g
i
Ã
³
 
P
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
O
R
T
O
R
D
E
R
_
P
R
O
P
E
R
T
Y
T
O
W
N
'
,
 
'
C
i
u
t
a
t
 
P
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
O
R
T
O
R
D
E
R
_
S
T
A
R
S
'
,
 
'
E
s
t
r
e
l
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
A
T
H
W
A
Y
_
P
R
O
P
E
R
T
Y
D
E
T
A
I
L
S
'
,
 
'
D
e
t
a
l
l
s
 
P
r
o
p
i
e
t
a
t
 
-
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
A
T
H
W
A
Y
_
B
O
O
K
I
N
G
F
O
R
M
'
,
 
'
F
o
r
m
u
l
a
r
i
 
d
e
 
R
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
U
P
D
A
T
E
A
D
D
R
E
S
S
B
U
T
T
O
N
'
,
 
'
A
c
t
u
a
l
i
t
z
i
 
l
a
 
s
e
v
a
 
d
i
r
e
c
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
B
L
O
C
K
U
I
M
E
S
S
A
G
E
S
_
R
E
C
H
E
C
K
I
N
G
R
O
O
M
A
V
I
A
L
A
B
I
L
I
T
Y
'
,
 
"
R
e
v
i
s
a
r
 
d
i
s
p
o
n
i
b
i
l
i
t
a
t
<
b
r
/
>
(
L
a
 
s
e
l
e
c
c
i
Ã
³
 
d
'
h
a
b
i
t
a
c
i
Ã
³
 
e
s
 
r
e
s
e
t
e
j
a
r
Ã
 
)
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
B
L
O
C
K
U
I
M
E
S
S
A
G
E
S
_
R
E
C
H
E
C
K
I
N
G
R
O
O
M
A
V
I
A
L
A
B
I
L
I
T
Y
_
S
R
P
'
,
 
'
R
e
v
i
s
a
r
 
d
i
s
p
o
n
i
b
i
l
i
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
B
L
O
C
K
U
I
M
E
S
S
A
G
E
S
_
C
H
A
N
G
I
N
G
E
X
T
R
A
'
,
 
'
M
o
d
i
f
i
q
u
i
 
e
l
s
 
s
e
u
s
 
e
x
t
r
e
s
 
o
p
c
i
o
n
a
l
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
B
L
O
C
K
U
I
M
E
S
S
A
G
E
S
_
C
H
A
N
G
I
N
G
R
O
O
M
S
E
L
E
C
T
I
O
N
'
,
 
"
C
a
n
v
i
i
 
l
a
 
s
e
v
a
 
s
e
l
e
c
c
i
Ã
³
 
d
'
h
a
b
i
t
a
c
i
Ã
³
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
B
L
O
C
K
U
I
M
E
S
S
A
G
E
S
_
U
P
D
A
T
I
N
G
A
D
D
R
E
S
S
'
,
 
'
A
c
t
u
a
l
i
t
z
i
 
l
a
 
s
e
v
a
 
d
i
r
e
c
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
B
L
O
C
K
U
I
M
E
S
S
A
G
E
S
_
A
D
D
R
E
S
S
I
N
P
U
T
E
R
R
O
R
'
,
 
'
H
o
 
s
e
n
t
i
m
 
u
n
a
 
o
 
m
Ã
©
s
 
d
a
d
e
s
 
d
e
 
d
i
r
e
c
c
i
Ã
³
 
s
Ã
³
n
 
i
n
c
o
r
r
e
c
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
B
O
O
K
I
N
G
F
O
R
M
_
S
H
O
W
R
O
O
M
I
M
A
G
E
'
,
 
'
I
m
a
t
g
e
 
H
a
b
i
t
a
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
R
R
E
N
C
Y
F
O
R
M
A
T
'
,
 
'
F
o
r
m
a
t
 
d
e
 
m
o
n
e
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
S
E
A
R
C
H
O
P
T
I
O
N
S
T
A
B
'
,
 
'
O
p
c
i
o
n
s
 
d
e
 
c
e
r
c
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
A
V
A
I
L
A
B
L
E
L
O
G
S
'
,
 
'
L
o
g
s
 
D
i
s
p
o
n
i
b
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
M
E
S
S
A
G
E
'
,
 
'
M
i
s
s
a
t
g
e
'
)
;

/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
 
J
o
m
r
e
s
 
2
.
6
.
3

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
M
O
D
E
_
N
O
R
M
A
L
'
,
 
'
N
o
r
m
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
M
O
D
E
_
A
D
V
A
N
C
E
D
'
,
 
'
A
v
a
n
Ã
§
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
M
O
D
E
_
T
A
R
I
F
F
T
Y
P
E
S
'
,
 
'
M
i
c
r
o
 
g
e
s
t
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
M
O
D
E
'
,
 
'
M
o
d
e
 
c
o
n
f
i
g
u
r
a
c
i
Ã
³
 
t
a
r
i
f
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
M
O
D
E
_
D
E
S
C
'
,
 
"
<
b
>
C
o
m
p
t
e
:
 
C
a
n
v
i
a
r
 
e
n
t
r
e
 
d
i
f
e
r
e
n
t
s
 
t
i
p
u
s
 
d
e
 
t
a
r
i
f
e
s
 
p
o
t
 
o
r
i
g
i
n
a
r
 
p
Ã
¨
r
d
u
a
 
d
e
 
d
a
d
e
s
.
 
V
e
g
i
 
l
e
s
 
n
o
t
e
s
 
a
 
c
o
n
t
i
n
u
a
c
i
Ã
³
 
r
e
s
p
e
c
t
e
 
a
 
a
i
x
Ã
²
<
/
b
>
.

<
b
r
/
>
<
b
r
/
>

T
Ã
©
 
t
r
e
s
 
o
p
c
i
o
n
s
 
p
e
r
 
a
 
c
o
n
f
i
g
u
r
a
r
 
l
e
s
 
t
a
r
i
f
e
s
.
<
b
r
/
>

M
o
d
e
 
N
o
r
m
a
l
:
 
P
o
t
s
 
t
e
n
i
r
 
u
n
a
 
t
a
r
i
f
a
 
p
e
r
 
c
a
d
a
 
t
i
p
u
s
 
d
'
h
a
b
i
t
a
c
i
Ã
³
,
 
a
i
x
Ã
²
 
Ã
©
s
 
v
Ã
 
l
i
d
 
p
e
r
 
a
l
s
 
s
e
g
Ã
¼
e
n
t
s
 
1
0
 
a
n
y
s
.
<
b
r
/
>

M
i
c
r
o
 
g
e
s
t
i
Ã
³
:
 
P
o
t
s
 
c
a
n
v
i
a
r
 
e
l
 
p
r
e
u
 
p
e
r
 
c
a
d
a
 
d
Ã
­
a
 
i
 
h
a
b
i
t
a
c
i
Ã
³
/
p
r
o
p
i
e
t
a
t
<
b
r
/
>

A
v
a
n
Ã
§
a
t
:
 
L
'
a
n
t
i
c
 
m
Ã
¨
t
o
d
e
 
J
o
m
r
e
s
 
d
e
 
g
e
n
e
r
a
r
 
t
a
r
i
f
e
s
<
b
r
/
>

<
b
r
/
>

E
l
s
 
d
i
f
e
r
e
n
t
s
 
m
o
d
e
s
 
d
e
 
t
a
r
i
f
e
s
 
l
i
 
p
e
r
m
e
t
e
n
 
e
s
c
o
l
l
i
r
 
e
l
 
m
Ã
¨
t
o
d
e
 
d
e
 
c
o
n
f
i
g
u
r
a
c
i
Ã
³
 
d
e
 
l
e
s
 
t
a
r
i
f
e
s
 
q
u
e
 
m
Ã
©
s
 
l
i
 
c
o
n
v
i
n
g
u
i
.
 
<
b
r
/
>

E
l
 
m
o
d
e
 
n
o
r
m
a
l
 
Ã
©
s
 
e
l
 
m
Ã
©
s
 
s
i
m
p
l
i
s
t
a
,
 
p
e
r
Ã
²
 
Ã
©
s
 
m
Ã
©
s
 
f
Ã
 
c
i
l
 
d
'
e
n
t
e
n
d
r
e
,
 
j
a
 
q
u
e
 
c
r
e
u
a
r
Ã
 
 
r
e
f
e
r
Ã
¨
n
c
i
a
 
d
'
h
a
b
i
t
a
c
i
o
n
s
 
i
 
t
a
r
i
f
e
s
 
a
 
t
i
p
u
s
 
d
'
h
a
b
i
t
a
c
i
Ã
³
/
p
r
o
p
i
e
t
a
t
 
i
 
l
i
 
p
e
r
m
e
t
 
c
o
n
f
i
g
u
r
a
r
 
l
e
s
 
h
a
b
i
t
a
c
i
o
n
s
 
i
 
e
l
s
 
p
r
e
u
s
 
e
n
 
l
a
 
m
a
t
e
i
x
a
 
p
Ã
 
g
i
n
a
.
 
<
b
r
/
>

M
i
c
r
o
 
g
e
s
t
i
Ã
³
 
l
i
 
p
e
r
m
e
t
 
v
a
r
i
a
r
 
e
l
s
 
t
i
p
u
s
 
e
n
 
e
l
 
d
Ã
­
a
 
a
 
d
Ã
­
a
 
s
e
n
s
e
 
h
a
v
e
r
 
d
e
 
g
e
s
t
i
o
n
a
r
 
u
n
 
m
u
n
t
 
d
e
 
t
a
r
i
f
e
s
,
 
q
u
e
 
e
s
 
r
e
a
l
i
t
z
a
 
p
e
r
 
l
o
t
s
 
d
e
 
r
e
f
e
r
Ã
¨
n
c
i
e
s
 
c
r
e
u
a
d
e
s
 
d
e
 
t
a
r
i
f
e
s
 
d
i
f
e
r
e
n
t
s
 
e
n
t
r
e
 
s
Ã
­
.
 
A
i
x
Ã
²
 
d
Ã
³
n
a
 
l
l
o
c
 
a
 
u
n
a
 
s
Ã
¨
r
i
e
 
d
e
 
t
a
r
i
f
e
s
 
q
u
e
 
s
'
h
a
n
 
c
r
e
a
t
 
p
e
r
 
a
 
q
u
e
 
a
b
a
r
q
u
i
n
 
u
n
 
p
e
r
Ã
­
o
d
e
 
d
e
 
t
e
m
p
s
,
 
p
e
r
Ã
²
 
n
o
 
e
s
 
p
o
d
e
n
 
a
p
l
i
c
a
r
 
u
n
a
 
t
a
r
i
f
a
 
s
o
b
r
e
 
u
n
a
 
a
l
t
r
a
.
 
<
b
r
/
>

M
o
d
e
 
a
v
a
n
Ã
§
a
t
 
l
i
 
p
e
r
m
e
t
 
c
r
e
a
r
 
u
n
a
 
h
a
b
i
t
a
c
i
Ã
³
 
i
 
a
s
o
c
i
a
r
-
l
a
 
a
m
b
 
u
n
 
t
i
p
u
s
 
d
'
h
a
b
i
t
a
c
i
Ã
³
.
 
A
 
c
o
n
t
i
n
u
a
c
i
Ã
³
,
 
c
r
e
a
 
u
n
a
 
t
a
r
i
f
a
 
q
u
e
 
s
'
a
s
s
o
c
i
a
 
a
m
b
 
u
n
 
t
i
p
u
s
 
d
'
h
a
b
i
t
a
c
i
Ã
³
.
 
L
'
Ã
º
s
 
d
'
a
q
u
e
s
t
 
m
Ã
¨
t
o
d
e
 
Ã
©
s
 
p
o
s
s
i
b
l
e
 
a
p
l
i
c
a
r
 
u
n
a
 
t
a
r
i
f
a
 
s
o
b
r
e
 
u
n
a
 
a
l
t
r
a
,
 
p
e
r
 
e
x
e
m
p
l
e
,
 
u
n
 
t
i
p
u
s
 
d
'
h
a
b
i
t
a
c
i
Ã
³
 
\
"
D
o
b
l
e
 
l
l
i
t
\
"
 
p
o
t
 
t
e
n
i
r
 
u
n
a
 
t
a
r
i
f
a
 
d
'
a
l
l
o
t
j
a
m
e
n
t
 
i
 
e
s
m
o
r
z
a
r
,
 
y
 
u
n
a
 
a
l
t
r
a
 
p
e
r
 
a
l
 
l
l
i
t
,
 
e
s
m
o
r
z
a
r
 
i
 
s
o
p
a
r
.
 
E
l
 
m
Ã
¨
t
o
d
e
 
a
v
a
n
Ã
§
a
t
 
r
e
q
u
e
r
e
i
x
 
u
n
a
 
m
i
c
a
 
m
Ã
©
s
 
d
'
a
t
e
n
c
i
Ã
³
 
a
l
s
 
d
e
t
a
l
l
s
,
 
j
a
 
q
u
e
 
Ã
©
s
 
p
o
s
i
b
l
e
 
d
e
s
a
s
s
o
c
i
a
r
 
u
n
a
 
h
a
b
i
t
a
c
i
Ã
³
 
o
 
t
a
r
i
f
a
 
d
'
u
n
 
t
i
p
u
s
 
d
'
h
a
b
i
t
a
c
i
Ã
³
/
p
r
o
p
i
e
t
a
t
 
o
 
c
o
n
f
i
g
u
r
a
r
-
l
a
 
i
n
c
o
r
r
e
c
t
a
m
e
n
t
 
v
Ã
 
l
i
d
a
 
d
e
s
d
e
 
i
 
f
i
n
s
 
l
e
s
 
d
a
t
e
s
,
 
p
e
r
Ã
²
 
d
Ã
³
n
a
 
o
p
c
i
o
n
s
 
d
e
 
c
o
n
f
i
g
u
r
a
c
i
Ã
³
 
q
u
e
 
e
l
s
 
a
l
t
r
e
s
 
m
o
d
e
s
 
n
o
 
o
f
e
r
e
i
x
e
n
.
 
<
b
r
/
>

<
b
r
/
>

D
e
g
u
t
 
a
 
q
u
e
 
e
l
s
 
m
o
d
e
s
 
N
o
r
m
a
l
 
i
 
M
i
c
r
o
 
g
e
s
t
i
Ã
³
 
r
e
q
u
e
r
e
i
x
e
n
 
u
n
a
 
p
o
s
a
d
a
 
a
 
p
u
n
t
 
e
s
p
e
c
Ã
­
f
i
c
a
 
d
'
h
a
b
i
t
a
c
i
o
n
s
 
i
 
t
a
r
i
f
e
s
 
p
e
r
 
a
l
 
m
o
d
e
 
d
e
 
t
r
e
b
a
l
l
a
r
 
e
l
 
s
i
s
t
e
m
a
 
p
o
t
 
s
e
r
 
n
e
c
e
s
s
a
r
i
 
t
o
r
n
a
r
 
a
 
s
i
t
u
a
r
 
a
l
g
u
n
e
s
 
d
a
d
e
s
 
p
e
r
 
a
 
f
e
r
 
l
e
s
 
c
o
n
f
i
g
u
r
a
c
i
o
n
s
 
d
e
 
l
'
a
c
t
u
a
l
 
c
o
m
p
a
t
i
b
l
e
 
a
m
b
 
e
l
 
m
o
d
e
 
d
'
e
d
i
c
i
Ã
³
 
a
c
t
u
a
l
 
t
a
r
i
f
a
.
 
<
b
r
/
>

<
b
r
/
>

N
o
r
m
a
l
 
-
>
 
A
v
a
n
Ã
§
a
t
.
 
S
e
n
s
e
 
c
a
n
v
i
s
.
 
L
e
s
 
t
a
r
i
f
e
s
 
v
i
g
e
n
t
s
 
e
s
 
m
a
n
t
e
n
e
n
.
 
<
b
r
/
>

N
o
r
m
a
l
 
-
>
 
M
i
c
r
o
 
g
e
s
t
i
Ã
³
.
 
T
o
t
e
s
 
l
e
s
 
t
a
r
i
f
e
s
 
e
x
i
s
t
e
n
t
s
 
s
'
e
l
i
m
i
n
e
n
.
 
<
b
r
/
>

A
v
a
n
Ã
§
a
t
 
-
>
 
N
o
r
m
a
l
.
 
T
o
t
e
s
 
l
e
s
 
t
a
r
i
f
e
s
 
e
x
i
s
t
e
n
t
s
 
s
'
e
l
i
m
i
n
e
n
.
 
<
b
r
/
>

A
v
a
n
Ã
§
a
t
 
-
>
 
M
i
c
r
o
 
g
e
s
t
i
Ã
³
.
 
T
o
t
e
s
 
l
e
s
 
t
a
r
i
f
e
s
 
e
x
i
s
t
e
n
t
s
 
s
'
e
l
i
m
i
n
e
n
.
 
<
b
r
/
>

M
i
c
r
o
 
g
e
s
t
i
Ã
³
 
-
>
 
A
v
a
n
Ã
§
a
t
.
 
T
o
t
e
s
 
l
e
s
 
r
e
f
e
r
Ã
¨
n
c
i
e
s
 
c
r
e
u
a
d
e
s
 
e
x
i
s
t
e
n
t
s
 
e
n
t
r
e
 
l
e
s
 
t
a
r
i
f
e
s
 
s
'
e
l
i
m
i
n
e
n
,
 
p
e
r
Ã
²
 
l
e
s
 
t
a
r
i
f
e
s
 
e
s
 
m
a
n
t
e
n
e
n
.
 
<
b
r
/
>

M
i
c
r
o
 
g
e
s
t
i
Ã
³
 
-
>
 
N
o
r
m
a
l
.
 
T
o
t
e
s
 
l
e
s
 
r
e
f
e
r
p
e
n
c
i
e
s
 
c
r
e
u
a
d
e
s
 
e
x
i
s
t
e
n
t
s
 
i
 
l
e
s
 
t
a
r
i
f
e
s
 
s
'
e
l
i
m
i
n
e
n
.
<
b
r
/
>
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
L
I
S
T
R
O
O
M
S
I
N
P
R
O
P
E
R
T
Y
D
E
T
A
I
L
S
'
,
 
"
M
o
s
t
r
a
r
 
l
a
 
l
l
i
s
t
a
 
d
'
h
a
b
i
t
a
c
i
o
n
s
 
e
n
 
e
l
 
f
u
l
l
 
d
e
 
d
e
t
a
l
l
?
"
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
T
Y
P
E
'
,
 
'
T
i
p
u
s
 
d
e
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
M
A
X
P
E
O
P
L
E
I
N
R
O
O
M
'
,
 
'
P
e
r
s
o
n
e
s
 
m
Ã
 
x
i
m
e
s
 
p
e
r
 
h
a
b
i
t
a
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
M
A
X
P
E
O
P
L
E
I
N
B
O
O
K
I
N
G
'
,
 
'
P
e
r
s
o
n
e
s
 
m
Ã
 
x
i
m
e
s
 
e
n
 
l
a
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
A
D
D
'
,
 
'
A
f
e
g
i
r
 
n
o
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
E
D
I
T
'
,
 
'
E
d
i
t
a
r
 
n
o
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
D
E
L
E
T
E
'
,
 
'
B
o
r
r
a
r
 
n
o
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
V
I
E
W
'
,
 
'
V
e
u
r
e
 
n
o
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
A
U
D
I
T
M
E
S
S
A
G
E
'
,
 
'
A
f
e
g
i
r
 
n
o
v
a
 
n
o
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
A
U
D
I
T
M
E
S
S
A
G
E
_
E
D
I
T
'
,
 
'
E
d
i
t
a
r
 
n
o
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
A
U
D
I
T
M
E
S
S
A
G
E
_
D
E
L
E
T
E
'
,
 
'
B
o
r
r
a
r
 
n
o
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
L
I
S
T
B
O
O
K
I
N
G
S
'
,
 
'
L
l
i
s
t
a
t
 
d
e
 
r
e
s
e
r
v
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
M
Y
B
O
O
K
I
N
G
S
'
,
 
'
L
e
s
 
m
e
v
e
s
 
r
e
s
e
r
v
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
V
I
E
W
B
O
O
K
I
N
G
'
,
 
'
V
e
u
r
e
 
r
e
s
e
r
v
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
V
I
E
W
F
A
V
O
U
R
I
T
E
S
'
,
 
'
V
e
u
r
e
 
p
r
e
f
e
r
i
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
V
I
E
W
F
A
V
O
U
R
I
T
E
S
_
N
O
N
E
'
,
 
'
N
o
 
t
Ã
©
 
c
a
p
 
p
r
e
f
e
r
i
t
 
a
f
e
g
i
r
 
e
n
c
a
r
a
!
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
P
R
O
P
E
R
T
Y
T
Y
P
E
'
,
 
'
T
i
p
u
s
 
d
e
 
p
r
o
p
i
e
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
T
I
T
L
E
'
,
 
'
W
i
s
e
 
p
r
i
c
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
A
C
T
I
V
E
'
,
 
'
A
c
t
i
u
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
T
I
T
L
E
_
D
E
S
C
'
,
 
'
A
q
u
e
s
t
 
p
l
u
g
i
n
 
p
e
r
m
e
t
 
a
c
t
i
v
a
r
 
i
 
c
o
n
f
i
g
u
r
a
r
 
e
l
s
 
p
r
e
u
s
 
d
e
 
l
e
s
 
s
e
v
e
s
 
h
a
b
i
t
a
c
i
o
n
s
 
d
i
n
Ã
 
m
i
c
a
m
e
n
t
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
T
I
T
L
E
_
D
E
S
C
_
F
U
L
L
'
,
 
"
L
a
 
m
a
j
o
r
Ã
­
a
 
d
e
 
l
e
s
 
e
m
p
r
e
s
e
s
 
r
e
c
a
l
c
u
l
e
n
 
e
l
s
 
p
r
e
u
s
 
d
e
 
l
e
s
 
h
a
b
i
t
a
c
i
o
n
s
 
e
n
 
f
u
n
c
i
Ã
³
 
d
e
l
 
n
Ã
º
m
e
r
o
 
d
'
h
a
b
i
t
a
c
i
o
n
s
 
d
'
u
n
 
t
i
p
u
s
 
r
e
q
u
e
r
i
t
 
q
u
e
 
e
s
t
a
n
 
d
i
s
p
o
n
i
b
l
e
s
 
e
n
 
u
n
a
 
d
a
t
a
 
d
e
t
e
r
m
i
n
a
d
a
.
 
A
i
x
Ã
²
 
e
l
s
 
p
e
r
m
e
t
 
o
f
e
r
i
r
 
d
e
s
c
o
m
p
t
e
s
 
e
n
 
e
l
 
t
i
p
u
s
 
d
'
h
a
b
i
t
a
c
i
Ã
³
 
q
u
e
 
n
o
 
e
s
t
Ã
 
 
o
c
u
p
a
d
a
 
d
u
r
a
n
t
 
u
n
 
p
e
r
Ã
­
o
d
e
 
d
e
t
e
r
m
i
n
a
t
 
a
m
b
 
l
'
o
b
j
e
t
i
u
 
d
'
a
t
r
e
u
r
e
 
a
l
s
 
c
l
i
e
n
t
s
 
q
u
e
 
d
'
u
n
a
 
a
l
t
r
a
 
m
a
n
e
r
a
 
p
o
d
r
i
e
n
 
p
e
r
d
r
e
'
s
.
 
<
b
r
/
>
 
L
'
a
c
t
i
v
a
c
i
Ã
³
 
i
 
c
o
n
f
i
g
u
r
a
c
i
Ã
³
 
d
'
a
q
u
e
s
t
 
p
l
u
g
i
n
 
l
i
 
p
e
r
m
e
t
 
o
f
e
r
i
r
 
p
r
e
u
s
 
a
j
u
s
t
a
b
l
e
s
 
b
a
s
a
t
s
 
e
n
 
e
l
 
n
Ã
º
m
e
r
o
 
d
'
h
a
b
i
t
a
c
i
o
n
s
 
d
'
u
n
 
t
i
p
u
s
 
s
e
l
e
c
c
i
o
n
a
t
 
q
u
e
 
e
s
t
a
n
 
d
i
s
p
o
n
i
b
l
e
s
 
e
n
 
l
a
 
p
r
o
p
i
e
t
a
t
 
e
n
 
u
n
 
d
i
a
 
d
e
t
e
r
m
i
n
a
t
.
 
<
b
r
/
>
 
T
h
r
e
a
s
h
o
l
d
 
d
e
f
i
n
e
i
x
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
d
i
e
s
 
q
u
e
 
d
e
s
d
e
 
l
a
 
d
a
t
a
 
a
c
t
u
a
l
 
f
i
n
s
 
l
a
 
d
a
t
a
 
d
'
a
r
r
i
b
a
d
a
 
p
e
r
m
e
t
 
a
c
t
i
v
a
r
 
a
q
u
e
s
t
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
,
 
e
n
s
 
p
e
r
m
e
t
 
l
a
 
p
o
s
s
i
b
i
l
i
t
a
t
 
d
'
a
j
u
s
t
a
r
 
e
l
 
p
e
r
c
e
n
t
a
t
g
e
 
d
'
h
a
b
i
t
a
c
i
o
n
s
 
q
u
e
 
p
o
d
e
n
 
e
s
t
a
r
 
d
i
s
p
o
n
i
b
l
e
s
 
a
b
a
n
s
 
d
e
 
q
u
e
 
u
n
 
d
e
t
e
r
m
i
n
a
t
 
d
e
s
c
o
m
p
t
e
 
s
'
a
p
l
i
q
u
i
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
T
H
R
E
A
S
H
O
L
D
'
,
 
"
T
h
r
e
a
s
h
o
l
d
 
(
n
Ã
º
m
e
r
o
 
d
e
 
d
i
e
s
 
e
n
t
r
e
 
l
'
a
r
r
i
b
a
d
a
 
i
 
l
a
 
d
a
t
a
 
a
c
t
u
a
l
)
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
P
E
R
C
E
N
T
A
G
E
1
0
'
,
 
"
P
e
r
c
e
n
t
a
t
g
e
 
d
'
h
a
b
i
t
a
c
i
o
n
s
 
o
c
u
p
a
d
e
s
 
 
1
0
%
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
P
E
R
C
E
N
T
A
G
E
2
5
'
,
 
"
P
e
r
c
e
n
t
a
t
g
e
 
d
'
h
a
b
i
t
a
c
i
o
n
s
 
o
c
u
p
a
d
e
s
 
 
2
5
%
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
P
E
R
C
E
N
T
A
G
E
5
0
'
,
 
"
P
e
r
c
e
n
t
a
t
g
e
 
d
'
h
a
b
i
t
a
c
i
o
n
s
 
o
c
u
p
a
d
e
s
 
 
5
0
%
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
P
E
R
C
E
N
T
A
G
E
7
5
'
,
 
"
P
e
r
c
e
n
t
a
t
g
e
 
d
'
h
a
b
i
t
a
c
i
o
n
s
 
o
c
u
p
a
d
e
s
 
 
7
5
%
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
D
I
S
C
O
U
N
T
'
,
 
'
D
e
s
c
o
m
p
t
e
 
%
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
H
A
S
B
E
E
N
D
I
S
C
O
U
N
T
E
D
'
,
 
'
 
h
a
 
s
i
g
u
t
 
d
e
s
c
o
m
p
t
a
t
 
d
e
 
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
T
O
'
,
 
'
 
a
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
N
O
T
D
I
S
C
O
U
N
T
E
D
'
,
 
"
 
P
r
e
u
 
d
'
h
a
b
i
t
a
c
i
Ã
³
 
n
o
 
d
e
s
c
o
m
p
t
a
t
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
M
A
P
S
K
E
Y
'
,
 
'
G
o
o
g
l
e
 
m
a
p
s
 
A
P
I
 
k
e
y
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
M
A
P
S
K
E
Y
_
D
E
S
C
'
,
 
'
P
o
t
s
 
o
b
t
e
n
i
r
 
g
o
o
g
l
e
 
m
a
p
s
 
A
P
I
 
k
e
y
 
d
e
s
d
e
 
<
a
 
h
r
e
f
=
"
h
t
t
p
s
:
/
/
d
e
v
e
l
o
p
e
r
s
.
g
o
o
g
l
e
.
c
o
m
/
m
a
p
s
/
d
o
c
u
m
e
n
t
a
t
i
o
n
/
j
a
v
a
s
c
r
i
p
t
/
g
e
t
-
a
p
i
-
k
e
y
#
g
e
t
-
a
n
-
a
p
i
-
k
e
y
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
G
o
o
g
l
e
 
m
a
p
s
<
/
a
>
.
 
U
n
 
c
o
p
 
t
i
n
g
u
i
 
i
n
t
r
o
d
u
Ã
¯
t
 
e
l
 
s
e
u
 
m
a
p
 
k
e
y
 
a
q
u
Ã
­
,
 
J
o
m
r
e
s
 
m
o
s
t
r
a
r
 
e
l
 
m
a
p
a
 
e
n
 
l
a
 
s
e
v
a
 
p
Ã
 
g
i
n
a
 
d
e
 
d
e
t
a
l
l
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
C
P
A
N
E
L
'
,
 
'
Ã
š
l
t
i
m
 
m
i
n
u
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
A
C
T
I
V
E
'
,
 
'
A
c
t
i
u
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
A
C
T
I
V
E
_
D
E
S
C
'
,
 
"
P
o
s
a
r
 
a
 
S
Ã
­
 
s
i
 
v
o
l
 
o
f
e
r
i
r
 
o
f
e
r
t
e
s
 
d
'
Ã
º
l
t
i
m
 
m
i
n
u
t
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
T
H
R
E
A
S
H
O
L
D
'
,
 
'
T
h
r
e
s
h
o
l
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
T
H
R
E
A
S
H
O
L
D
_
D
E
S
C
'
,
 
"
S
i
 
e
s
 
f
a
 
l
a
 
r
e
s
e
r
v
a
 
i
 
l
a
 
d
a
t
a
 
d
'
a
r
r
i
b
a
d
a
 
Ã
©
s
 
n
o
m
Ã
©
s
 
N
 
d
i
e
s
 
d
e
s
d
e
 
l
a
 
d
a
t
a
 
d
e
 
r
e
s
e
r
v
a
,
 
e
l
 
d
e
s
c
o
m
p
t
e
 
p
o
t
 
s
e
r
 
a
p
l
i
c
a
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
D
I
S
C
O
U
N
T
'
,
 
'
D
e
s
c
o
m
p
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
D
I
S
C
O
U
N
T
_
D
E
S
C
'
,
 
'
E
n
 
p
e
r
c
e
n
t
a
t
g
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
B
O
O
K
I
N
G
C
O
N
F
I
R
M
A
T
I
O
N
1
'
,
 
'
U
n
 
d
e
s
c
o
m
p
t
e
 
h
a
 
s
i
g
u
t
 
a
p
l
i
c
a
t
 
a
 
a
q
u
e
s
t
a
 
r
e
s
e
r
v
a
!
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
B
O
O
K
I
N
G
C
O
N
F
I
R
M
A
T
I
O
N
2
'
,
 
"
E
l
 
c
o
s
t
 
d
e
 
l
'
e
s
t
a
n
c
i
a
 
h
a
 
s
i
g
u
t
 
r
e
d
u
Ã
¯
t
 
e
n
 
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
R
E
'
,
 
"
A
q
u
e
s
t
a
 
p
r
o
p
i
e
t
a
t
 
o
f
e
r
e
i
x
 
u
n
 
d
e
s
c
o
m
p
t
e
 
d
'
Ã
º
l
t
i
m
 
m
i
n
u
t
 
d
e
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
M
I
D
'
,
 
"
 
p
e
r
 
c
e
n
t
 
s
i
 
l
a
 
s
e
v
a
 
d
a
t
a
 
d
'
a
r
r
i
b
a
d
a
 
Ã
©
s
 
a
n
t
e
r
i
o
r
 
a
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
O
R
M
O
R
E
'
,
 
"
 
p
e
r
 
c
e
n
t
 
o
 
m
Ã
©
s
 
s
i
 
l
a
 
s
e
v
a
 
d
a
t
a
 
d
'
a
r
r
i
b
a
d
a
 
Ã
©
s
 
a
b
a
n
s
 
d
e
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
O
S
T
'
,
 
'
.
 
R
e
s
e
r
v
i
 
a
r
a
 
p
e
r
 
a
 
d
i
s
f
r
u
t
a
r
 
d
e
 
l
a
 
m
i
l
l
o
r
 
o
f
e
r
t
a
!
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
V
E
R
B
O
S
E
T
A
R
I
F
F
I
N
T
O
'
,
 
'
I
n
f
o
r
m
a
c
i
Ã
³
 
d
e
t
a
l
l
a
d
a
 
d
e
 
t
a
r
i
f
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
V
E
R
B
O
S
E
T
A
R
I
F
F
I
N
T
O
_
D
E
S
C
'
,
 
"
P
o
s
a
r
 
a
 
S
Ã
­
 
p
e
r
 
a
 
v
e
u
r
e
 
l
'
i
n
f
o
r
m
a
c
i
Ã
³
 
d
e
t
a
l
l
a
d
a
 
e
n
 
e
l
s
 
d
e
t
a
l
l
s
 
d
e
 
p
r
o
p
i
e
t
a
t
/
t
a
r
i
f
a
"
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
M
I
N
I
M
A
L
C
O
N
F
I
G
'
,
 
'
R
e
d
u
Ã
¯
r
 
a
l
 
m
Ã
­
n
i
m
 
l
e
s
 
o
p
c
i
o
n
s
 
d
e
 
c
o
n
f
i
g
u
r
a
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
A
M
E
N
D
'
,
 
'
M
o
d
i
f
i
c
a
r
 
r
e
s
e
r
v
a
 
-
 
S
e
l
e
c
c
i
Ã
³
 
d
e
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
A
M
E
N
D
_
S
E
L
E
C
T
P
R
O
P
E
R
T
Y
'
,
 
'
S
e
l
e
c
c
i
o
n
a
r
 
n
o
v
a
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
A
M
E
N
D
_
H
E
A
D
E
R
'
,
 
'
C
o
n
t
r
a
c
t
e
 
O
r
i
g
i
n
a
l
:
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
A
M
E
N
D
_
D
E
P
O
S
I
T
P
A
I
D
'
,
 
'
D
i
p
Ã
²
s
i
t
 
P
a
g
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
A
M
E
N
D
_
D
E
P
O
S
I
T
D
U
E
'
,
 
'
D
i
p
Ã
²
s
i
t
 
N
o
 
P
a
g
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
A
M
E
N
D
_
O
V
E
R
R
I
D
E
_
T
O
T
A
L
'
,
 
'
A
n
u
l
a
c
i
Ã
³
 
T
o
t
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
A
M
E
N
D
_
O
V
E
R
R
I
D
E
_
D
E
P
O
S
I
T
'
,
 
'
A
n
u
l
a
c
i
Ã
³
 
d
e
 
D
i
p
Ã
²
s
i
t
'
)
;

/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
 
J
o
m
r
e
s
 
2
.
7
.
5

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
A
N
C
E
L
'
,
 
'
C
a
n
c
e
Â
·
l
l
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
P
A
N
E
L
'
,
 
'
P
a
n
e
l
l
 
d
e
 
C
o
n
t
r
o
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
N
F
I
G
_
D
E
F
A
U
L
T
_
C
R
A
T
E
'
,
 
'
T
i
p
u
s
 
d
e
 
C
o
m
i
s
s
i
Ã
³
 
p
r
e
d
e
t
e
r
m
i
n
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
N
F
I
G
_
D
E
F
A
U
L
T
_
C
R
A
T
E
_
D
E
S
C
'
,
 
'
E
s
c
u
l
l
i
 
l
a
 
c
o
m
i
s
s
i
Ã
³
 
p
r
e
d
e
t
e
r
m
i
n
a
d
a
 
q
u
e
 
s
e
r
Ã
 
 
a
p
l
i
c
a
d
a
 
a
 
l
a
 
p
r
o
p
i
e
t
a
t
 
e
n
 
c
a
s
 
d
e
 
q
u
e
 
n
o
 
s
i
g
u
i
 
s
e
l
e
c
c
i
o
n
a
d
a
 
u
n
a
 
a
l
t
r
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
P
A
N
E
L
_
L
I
S
T
C
R
A
T
E
S
'
,
 
'
L
l
i
s
t
a
 
d
e
 
t
i
p
s
 
d
e
 
c
o
m
i
s
s
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
P
A
N
E
L
_
P
A
T
E
T
I
T
L
E
'
,
 
'
T
i
p
u
s
 
d
e
 
c
o
m
i
s
s
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
R
A
T
E
_
T
I
T
L
E
'
,
 
'
T
Ã
­
t
o
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
R
A
T
E
_
T
Y
P
E
'
,
 
'
T
i
p
u
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
R
A
T
E
_
V
A
L
U
E
'
,
 
'
T
i
p
u
s
 
d
e
 
c
o
m
i
s
s
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
R
A
T
E
_
C
U
R
R
E
N
C
Y
C
O
D
E
'
,
 
'
C
o
d
i
 
d
e
 
m
o
n
e
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
P
A
N
E
L
_
L
I
S
T
P
R
O
P
E
R
T
I
E
S
'
,
 
'
L
l
i
s
t
a
 
d
e
 
p
r
o
p
i
e
t
a
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
P
R
O
P
E
R
T
I
E
S
_
P
R
O
P
E
R
T
Y
N
A
M
E
'
,
 
'
N
o
m
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
P
R
O
P
E
R
T
I
E
S
_
P
R
O
P
E
R
T
Y
A
D
D
R
E
S
S
'
,
 
'
D
i
r
e
c
c
i
Ã
³
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
P
R
O
P
E
R
T
I
E
S
_
L
E
G
E
N
D
'
,
 
'
L
e
s
 
p
r
o
p
i
e
t
a
t
s
 
q
u
e
 
t
i
n
g
u
i
n
 
c
o
l
o
r
 
d
e
 
f
o
n
s
 
v
e
r
m
e
l
l
 
e
n
c
a
r
a
 
n
o
 
t
e
n
e
n
 
u
n
 
t
i
p
u
s
 
d
e
 
c
o
m
i
s
s
i
Ã
³
 
a
p
l
i
c
a
t
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
T
A
T
S
_
P
A
T
E
T
I
T
L
E
'
,
 
'
E
s
t
a
d
Ã
­
s
t
i
q
u
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
P
R
O
P
E
R
T
I
E
S
_
C
O
M
M
I
S
S
I
O
N
R
A
T
E
'
,
 
'
T
i
p
u
s
 
d
e
 
c
o
m
i
s
s
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
P
A
N
E
L
_
L
I
S
T
B
O
O
K
I
N
G
S
'
,
 
'
L
l
i
s
t
a
 
d
e
 
r
e
s
e
r
v
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
L
I
S
T
B
O
O
K
I
N
G
S
_
H
E
A
D
E
R
_
P
R
O
P
E
R
T
Y
_
I
D
'
,
 
'
P
r
o
p
i
e
t
a
t
 
i
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
L
I
S
T
B
O
O
K
I
N
G
S
_
H
E
A
D
E
R
_
I
N
V
O
I
C
E
_
I
D
'
,
 
'
F
a
c
t
u
r
a
 
i
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
L
I
S
T
B
O
O
K
I
N
G
S
_
H
E
A
D
E
R
_
B
O
O
K
I
N
G
T
O
T
A
L
'
,
 
'
R
e
s
e
r
v
e
s
 
t
o
t
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
L
I
S
T
B
O
O
K
I
N
G
S
_
H
E
A
D
E
R
_
D
A
T
E
A
R
C
H
I
V
E
D
'
,
 
'
D
a
t
a
 
a
r
x
i
v
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
A
D
D
_
A
D
H
O
C
_
I
T
E
M
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
P
T
Y
P
E
S
_
P
T
Y
P
E
_
D
E
S
C
_
F
U
R
T
H
E
R
'
,
 
"
P
o
t
 
t
e
n
i
r
 
a
r
x
i
u
s
 
e
s
p
e
c
Ã
­
f
i
c
s
 
d
'
i
d
i
o
m
a
 
m
i
t
j
a
n
Ã
§
a
n
t
 
l
'
a
j
u
s
t
 
d
e
l
 
n
o
m
 
d
e
 
l
a
 
s
u
b
c
a
r
p
e
t
a
,
 
e
x
.
 
'
y
a
c
h
t
b
r
o
k
e
r
a
g
e
'
 
i
 
c
o
p
i
a
r
 
u
n
 
a
r
x
i
u
 
d
e
 
s
u
b
l
l
e
n
g
u
a
t
g
e
 
e
n
 
l
a
 
s
u
b
c
a
r
p
e
t
a
.
 
P
o
t
 
m
o
d
i
f
i
c
a
r
 
a
q
u
e
l
l
 
a
r
x
i
u
 
d
e
 
l
l
e
n
g
u
a
t
g
e
s
 
p
e
r
 
a
q
u
e
l
l
 
t
i
p
u
s
 
d
e
 
p
r
o
p
i
e
t
a
t
 
p
e
r
 
a
 
c
o
n
v
e
r
t
i
r
-
s
e
 
e
n
 
h
a
b
i
t
a
c
i
o
n
s
,
 
e
x
 
D
V
D
s
,
 
e
c
t
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
D
I
T
P
R
O
P
E
R
T
Y
_
C
O
N
N
O
T
D
E
L
E
T
E
1
'
,
 
"
N
o
 
e
s
 
p
o
t
 
e
l
i
m
i
n
a
r
 
a
q
u
e
s
t
a
 
p
r
o
p
i
e
t
a
t
,
 
j
a
 
q
u
e
 
Ã
©
s
 
l
a
 
Ã
º
n
i
c
a
 
p
r
o
p
i
e
t
a
t
 
a
 
l
a
 
q
u
e
 
t
Ã
©
 
a
c
c
Ã
©
s
.
 
S
i
 
d
e
s
i
t
j
a
 
d
e
s
a
c
t
i
v
a
r
-
l
a
,
 
s
i
 
u
s
 
p
l
a
u
 
u
t
i
l
i
t
z
i
 
l
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
d
e
s
p
u
b
l
i
c
a
r
 
e
n
 
l
a
 
s
e
v
a
 
b
a
r
r
a
 
d
'
e
i
n
e
s
.
 
"
)
;

/
/
 
J
o
m
r
e
s
 
v
3
.
0
.
6

/
/
 
J
o
m
r
e
s
 
v
3
.
1

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
T
O
T
A
L
'
,
 
'
A
l
l
o
t
j
a
m
e
n
t
 
T
o
t
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
N
I
G
H
T
S
'
,
 
'
n
i
t
(
s
)
 
d
e
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
P
E
R
R
O
O
M
'
,
 
'
p
e
r
 
h
a
b
i
t
a
c
i
Ã
³
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
_
T
O
T
A
L
'
,
 
"
A
u
g
m
e
n
t
a
r
 
l
a
 
d
u
r
a
c
i
Ã
³
 
d
e
 
l
'
e
s
t
Ã
 
n
c
i
a
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
P
R
I
C
E
_
S
U
M
M
A
R
Y
'
,
 
'
R
e
s
u
m
 
d
e
 
p
r
e
u
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
R
M
A
T
I
O
N
_
A
L
E
R
T
'
,
 
'
S
i
 
u
s
 
p
l
a
u
 
l
l
e
g
i
r
 
i
 
a
c
c
e
p
t
a
r
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
R
M
A
T
I
O
N
_
H
E
A
D
E
R
'
,
 
'
U
n
 
r
e
s
u
m
 
d
e
 
s
u
 
r
e
s
e
r
v
a
 
e
s
 
m
o
s
t
r
a
 
a
 
c
o
n
t
i
n
u
a
c
i
Ã
³
.
 
<
b
r
 
/
>
 
P
e
r
 
a
 
f
e
r
 
q
u
a
l
s
e
v
o
l
 
c
a
n
v
i
,
 
s
i
 
u
s
 
p
l
a
u
 
f
a
g
i
 
c
l
i
c
 
e
n
 
e
l
 
b
o
t
Ã
³
 
M
o
d
i
f
i
c
a
r
 
r
e
s
e
r
v
a
.
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
R
M
A
T
I
O
N
_
A
M
E
N
D
T
E
X
T
'
,
 
'
S
i
 
n
e
c
e
s
s
i
t
a
 
c
a
n
v
i
a
r
 
q
u
a
l
s
e
v
o
l
 
i
n
f
o
r
m
a
c
i
Ã
³
 
a
n
t
e
r
i
o
r
,
 
s
i
 
u
s
 
p
l
a
u
 
f
a
g
i
 
c
l
i
c
 
a
q
u
Ã
­
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
R
M
A
T
I
O
N
_
A
M
E
N
D
'
,
 
'
M
o
d
i
f
i
c
a
r
 
R
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
R
M
A
T
I
O
N
_
S
P
E
C
I
A
L
S
'
,
 
'
S
i
 
u
s
 
p
l
a
u
,
 
i
n
t
r
o
d
u
e
i
x
i
 
q
u
a
l
s
e
v
o
l
 
s
o
l
Â
·
l
i
c
i
t
u
d
 
e
s
p
e
c
i
a
l
 
e
n
 
e
l
 
q
u
a
d
r
e
 
s
e
g
Ã
¼
e
n
t
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
R
M
A
T
I
O
N
_
T
E
R
M
S
_
P
R
E
T
E
X
T
'
,
 
"
C
o
n
f
i
r
m
o
 
q
u
e
 
l
a
 
i
n
f
o
r
m
a
c
i
Ã
³
 
a
n
t
e
r
i
o
r
 
Ã
©
s
 
c
o
r
r
e
c
t
a
 
i
 
d
'
a
c
o
r
d
 
a
m
b
 
l
a
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
P
E
R
P
E
R
S
O
N
'
,
 
'
p
e
r
 
p
e
r
s
o
n
a
 
p
e
r
 
n
i
t
 
'
)
;

/
/
 
J
o
m
r
e
s
 
3
.
1
.
1
0

/
/
 
J
o
m
r
e
s
 
3
.
1
.
1
1

/
/
 
J
o
m
r
e
s
 
3
.
1
.
1
3

i
f
 
(
!
d
e
f
i
n
e
d
(
'
_
P
N
_
O
F
'
)
)
 
{

 
 
 
 
j
r
_
d
e
f
i
n
e
(
'
_
P
N
_
O
F
'
,
 
'
d
e
'
)
;

}

i
f
 
(
!
d
e
f
i
n
e
d
(
'
_
P
N
_
S
T
A
R
T
'
)
)
 
{

 
 
 
 
j
r
_
d
e
f
i
n
e
(
'
_
P
N
_
S
T
A
R
T
'
,
 
'
C
o
m
e
n
Ã
§
a
m
e
n
t
'
)
;

}

i
f
 
(
!
d
e
f
i
n
e
d
(
'
_
P
N
_
P
R
E
V
I
O
U
S
'
)
)
 
{

 
 
 
 
j
r
_
d
e
f
i
n
e
(
'
_
P
N
_
P
R
E
V
I
O
U
S
'
,
 
'
A
n
t
e
r
i
o
r
'
)
;

}

i
f
 
(
!
d
e
f
i
n
e
d
(
'
_
P
N
_
N
E
X
T
'
)
)
 
{

 
 
 
 
j
r
_
d
e
f
i
n
e
(
'
_
P
N
_
N
E
X
T
'
,
 
'
S
e
g
Ã
¼
e
n
t
'
)
;

}

i
f
 
(
!
d
e
f
i
n
e
d
(
'
_
P
N
_
E
N
D
'
)
)
 
{

 
 
 
 
j
r
_
d
e
f
i
n
e
(
'
_
P
N
_
E
N
D
'
,
 
'
F
i
'
)
;

}

i
f
 
(
!
d
e
f
i
n
e
d
(
'
_
P
N
_
R
E
S
U
L
T
S
'
)
)
 
{

 
 
 
 
j
r
_
d
e
f
i
n
e
(
'
_
P
N
_
R
E
S
U
L
T
S
'
,
 
'
R
e
s
u
l
t
a
t
s
'
)
;

}

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
T
I
T
L
E
'
,
 
'
T
i
n
g
u
i
 
e
n
 
c
o
m
p
t
e
 
q
u
e
 
a
i
x
Ã
²
 
n
o
 
Ã
©
s
 
u
n
 
f
o
r
m
u
l
a
r
i
 
d
e
 
r
e
s
e
r
v
a
,
 
e
n
 
e
l
 
s
e
u
 
l
l
o
c
 
e
s
t
Ã
 
 
e
n
v
i
a
n
t
 
u
n
 
c
o
r
r
e
u
 
e
l
e
c
t
r
Ã
²
n
i
c
.
 
<
b
r
/
>
 
S
i
 
u
s
 
p
l
a
u
,
 
i
n
t
r
o
d
u
e
i
x
i
 
e
l
 
m
i
s
s
a
t
g
e
 
q
u
e
 
l
i
 
a
g
r
a
d
a
r
i
a
 
e
n
v
i
a
r
 
a
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
'
,
 
'
C
o
n
t
a
c
t
a
r
 
a
m
b
 
H
o
t
e
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
S
U
B
J
E
C
T
'
,
 
'
C
o
n
s
u
l
t
a
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
 
d
e
 
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
T
H
A
N
K
S
'
,
 
'
G
r
Ã
 
c
i
e
s
 
p
o
r
 
l
a
 
s
e
v
a
 
c
o
n
s
u
l
t
a
,
 
e
l
 
s
e
u
 
m
i
s
s
a
t
g
e
 
h
a
 
s
i
g
u
t
 
e
n
v
i
a
t
 
a
 
l
a
 
d
i
r
e
c
c
i
Ã
³
 
d
e
 
c
o
n
t
a
c
t
e
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
,
 
a
m
b
 
c
Ã
²
p
i
a
 
a
l
 
s
e
u
 
p
r
o
p
i
 
c
o
r
r
e
u
 
e
l
e
c
t
r
Ã
²
n
i
c
 
p
e
r
 
a
l
s
 
s
e
u
s
 
a
r
x
i
u
s
.
 
S
e
 
l
i
 
c
o
n
t
e
s
t
a
r
Ã
 
 
t
a
n
 
a
v
i
a
t
 
c
o
m
 
s
i
g
u
i
 
p
o
s
s
i
b
l
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
R
E
G
A
R
D
I
N
G
'
,
 
'
 
a
m
b
 
r
e
s
p
e
c
t
e
 
a
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
E
N
Q
U
I
R
Y
'
,
 
'
C
o
n
s
u
l
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
L
O
O
K
R
I
G
H
T
'
,
 
"
S
i
 
u
s
 
p
l
a
u
 
s
e
l
e
c
c
i
o
n
i
 
l
'
a
l
l
o
t
j
a
m
e
n
t
 
d
e
s
i
t
j
a
t
 
e
n
 
l
a
 
l
l
i
s
t
a
 
d
e
 
l
a
 
d
r
e
t
a
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
M
I
N
R
O
O
M
S
'
,
 
'
H
a
b
i
t
a
c
i
o
n
s
 
m
Ã
­
n
i
m
e
s
 
j
a
 
s
e
l
e
c
c
i
o
n
a
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
M
I
N
R
O
O
M
S
_
D
E
S
C
'
,
 
"
N
Ã
º
m
e
r
o
 
m
Ã
­
n
i
m
 
d
'
h
a
b
i
t
a
c
i
o
n
s
 
p
r
Ã
¨
v
i
a
m
e
n
t
 
s
e
l
e
c
c
i
o
n
a
d
e
s
 
e
n
 
l
a
 
r
e
s
e
r
v
a
 
a
b
a
n
s
 
d
e
 
m
o
s
t
r
a
r
 
e
l
 
c
o
m
b
o
 
d
e
 
t
i
p
u
 
d
'
h
a
b
i
t
a
c
i
Ã
³
/
t
a
r
i
f
a
 
q
u
e
 
p
o
d
e
n
 
s
e
r
 
o
f
e
r
i
d
e
s
.
 
L
i
 
p
e
r
m
e
t
 
t
e
n
i
r
 
l
e
s
 
t
a
r
i
f
e
s
 
d
e
 
d
e
s
c
o
m
p
t
e
,
 
q
u
a
n
 
m
Ã
©
s
 
d
e
 
N
 
h
a
b
i
t
a
c
i
o
n
s
 
e
s
t
a
n
 
j
a
 
s
e
l
e
c
c
i
o
n
a
d
e
s
.
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
M
A
X
R
O
O
M
S
'
,
 
"
N
Ã
º
m
e
r
o
 
m
Ã
 
x
i
m
 
d
'
h
a
b
i
t
a
c
i
o
n
s
 
j
a
 
s
e
l
e
c
c
i
o
n
a
d
e
s
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
M
A
X
R
O
O
M
S
_
D
E
S
C
'
,
 
"
E
l
 
n
Ã
º
m
e
r
o
 
m
Ã
 
x
i
m
 
d
'
h
a
b
i
t
a
c
i
o
n
s
 
j
a
 
s
e
l
e
c
c
i
o
n
a
d
e
s
 
e
n
 
l
a
 
r
e
s
e
r
v
a
 
a
b
a
n
s
 
d
e
 
q
u
e
 
e
l
 
c
o
m
b
o
 
t
a
r
i
f
e
s
/
h
a
b
i
t
a
c
i
Ã
³
 
j
a
 
n
o
 
s
'
o
f
e
r
e
i
x
i
.
 
L
i
 
p
e
r
m
e
t
 
d
e
i
x
a
r
 
d
'
o
f
e
r
i
r
 
a
q
u
e
s
t
 
t
i
p
u
s
 
d
e
 
c
o
m
b
i
n
a
c
i
Ã
³
 
d
e
 
t
a
r
i
f
e
s
/
h
a
b
i
t
a
c
i
Ã
³
 
u
n
 
c
o
p
 
q
u
e
 
N
 
h
a
b
i
t
a
c
i
o
n
s
 
h
a
g
i
n
 
s
i
g
u
t
 
s
e
l
e
c
c
i
o
n
a
t
s
 
e
n
 
e
l
 
f
o
r
m
u
l
a
r
i
 
d
e
 
r
e
s
e
r
v
a
.
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
S
P
S
_
E
D
I
T
R
O
O
M
_
D
E
S
C
'
,
 
"
T
i
n
g
u
i
 
e
n
 
c
o
m
p
t
e
 
q
u
e
 
S
u
p
l
e
m
e
n
t
 
p
e
r
 
p
e
r
s
o
n
a
 
n
o
 
s
e
r
Ã
 
 
u
t
i
l
i
t
z
a
d
a
 
s
i
 
S
u
p
l
e
m
e
n
t
 
p
e
r
 
p
e
r
s
o
n
a
 
s
'
e
s
t
a
b
l
e
i
x
 
e
n
 
S
Ã
­
 
e
n
 
l
a
 
C
o
n
f
i
g
u
r
a
c
i
Ã
³
 
G
e
n
e
r
a
l
.
 
A
q
u
e
s
t
s
 
a
j
u
s
t
s
 
s
Ã
³
n
 
u
n
a
 
a
l
t
e
r
n
a
t
i
v
a
 
a
 
t
e
n
i
r
 
t
a
r
i
f
e
s
 
p
l
a
n
e
s
 
S
u
p
l
e
m
e
n
t
 
p
e
r
 
p
e
r
s
o
n
a
,
 
n
o
 
u
n
a
 
a
d
d
i
c
i
Ã
³
 
a
 
l
a
 
t
a
r
i
f
a
 
p
l
a
n
a
 
S
P
S
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
V
L
C
A
L
_
N
O
B
O
O
K
I
N
G
S
'
,
 
'
D
i
s
p
o
n
i
b
l
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
V
L
C
A
L
_
Q
U
A
R
T
E
R
'
,
 
'
A
l
g
u
n
e
s
 
r
e
s
e
r
v
a
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
V
L
C
A
L
_
H
A
L
F
'
,
 
'
O
c
u
p
a
c
i
Ã
³
 
m
i
t
j
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
V
L
C
A
L
_
T
H
R
E
E
Q
U
A
R
T
E
R
'
,
 
'
O
c
u
p
a
c
i
Ã
³
 
a
l
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
V
L
C
A
L
_
F
U
L
L
Y
B
O
O
K
E
D
'
,
 
'
C
o
m
p
l
e
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
W
E
E
K
'
,
 
'
P
e
r
 
s
e
t
m
a
n
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
D
A
Y
S
'
,
 
'
P
e
r
 
d
i
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
B
O
O
K
I
N
G
'
,
 
'
P
e
r
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
P
E
R
S
O
N
P
E
R
B
O
O
K
I
N
G
'
,
 
'
P
e
r
 
p
e
r
s
o
n
a
 
p
e
r
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
P
E
R
S
O
N
P
E
R
D
A
Y
'
,
 
'
P
e
r
 
p
e
r
s
o
n
a
 
p
e
r
 
d
i
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
P
E
R
S
O
N
P
E
R
W
E
E
K
'
,
 
'
P
e
r
 
p
e
r
s
o
n
a
 
p
e
r
 
s
e
t
m
a
n
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
D
A
Y
S
M
I
N
D
A
Y
S
'
,
 
'
P
e
r
 
d
i
a
 
(
M
Ã
­
n
i
m
 
d
i
e
s
)
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
D
A
Y
S
P
E
R
R
O
O
M
'
,
 
'
P
e
r
 
d
i
e
s
 
X
 
h
a
b
i
t
a
c
i
o
n
s
 
s
e
l
e
c
c
i
o
n
a
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
G
I
S
T
R
Y
R
E
B
U
I
L
D
'
,
 
'
R
e
c
o
n
s
t
r
u
i
r
 
r
e
g
i
s
t
r
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
G
I
S
T
R
Y
R
E
B
U
I
L
D
_
N
O
T
E
S
'
,
 
"
N
o
r
m
a
l
m
e
n
t
,
 
e
l
 
J
o
m
r
e
s
 
p
l
u
g
i
n
 
R
e
g
i
s
t
r
o
 
e
s
 
r
e
c
o
n
s
t
r
u
e
i
x
 
a
u
t
o
m
Ã
 
t
i
c
a
m
e
n
t
 
c
a
d
a
 
v
e
g
a
d
a
 
q
u
e
 
v
e
u
 
q
u
e
 
l
'
a
d
m
i
n
i
s
t
r
a
d
o
r
 
d
e
 
p
l
u
g
i
n
s
 
a
f
e
g
e
i
x
 
o
 
t
r
e
u
 
u
n
 
p
l
u
g
i
n
,
 
p
e
r
Ã
²
 
Ã
©
s
 
p
o
s
s
i
b
l
e
 
q
u
e
 
v
o
s
t
Ã
¨
 
n
o
 
p
u
g
u
i
 
u
t
i
l
i
t
z
a
r
 
a
q
u
e
s
t
e
s
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
q
u
e
s
,
 
p
e
r
 
a
l
g
u
n
a
 
r
a
Ã
³
,
 
p
e
r
 
t
a
n
t
 
v
o
s
t
Ã
¨
 
p
o
t
 
u
t
i
l
i
t
z
a
r
 
a
q
u
e
s
t
a
 
f
u
n
c
i
Ã
³
 
p
e
r
 
a
 
r
e
c
o
n
s
t
r
u
i
r
 
e
l
 
R
e
g
i
s
t
r
o
 
m
a
n
u
a
l
m
e
n
t
.
 
S
i
 
v
o
s
t
Ã
¨
 
t
Ã
©
 
a
c
c
Ã
©
s
 
a
 
l
a
 
f
u
n
c
i
Ã
³
 
d
e
 
l
'
a
d
m
i
n
i
s
t
r
a
d
o
r
 
d
e
 
c
o
m
p
l
e
m
e
n
t
s
 
i
 
a
c
t
u
a
l
i
t
z
a
c
i
o
n
s
,
 
l
l
a
v
o
r
s
 
Ã
©
s
 
p
o
c
 
p
r
o
b
a
b
l
e
 
q
u
e
 
v
o
s
t
Ã
¨
 
h
a
g
i
 
d
'
u
t
i
l
i
t
z
a
r
 
a
q
u
e
s
t
a
 
f
u
n
c
i
Ã
³
.
 
H
a
u
r
Ã
 
 
d
e
 
r
e
c
o
n
s
t
r
u
i
r
 
d
e
l
 
p
l
u
g
i
n
 
d
e
 
r
e
g
i
s
t
r
o
 
s
e
m
p
r
e
 
q
u
e
 
a
f
e
g
e
i
x
i
 
u
n
 
n
o
u
 
m
i
n
i
-
c
o
m
p
o
n
e
n
t
 
i
 
n
o
 
u
t
i
l
i
t
z
i
 
l
'
A
d
m
i
n
i
s
t
r
a
d
o
r
 
d
e
 
c
o
m
p
l
e
m
e
n
t
s
 
p
e
r
 
a
 
a
f
e
g
i
r
-
l
o
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
G
I
S
T
R
Y
R
E
B
U
I
L
D
_
S
U
C
C
E
S
S
'
,
 
'
R
e
g
i
s
t
r
e
 
r
e
c
o
n
s
t
r
u
Ã
¯
t
 
a
m
b
 
Ã
¨
x
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
G
I
S
T
R
Y
R
E
B
U
I
L
D
_
F
A
I
L
U
R
E
'
,
 
"
H
i
 
h
a
 
h
a
g
u
t
 
u
n
 
e
r
r
o
r
 
a
m
b
 
l
a
 
r
e
c
o
n
s
t
r
u
c
c
i
Ã
³
 
d
e
l
 
r
e
g
i
s
t
r
o
 
d
e
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
V
o
s
t
Ã
¨
 
h
a
 
d
e
 
v
e
r
i
f
i
c
a
r
 
e
l
 
s
e
u
 
r
e
g
i
s
t
r
e
 
d
'
e
r
r
o
r
s
 
J
o
m
r
e
s
 
p
e
r
 
a
 
v
e
u
r
e
 
s
i
 
h
i
 
h
a
 
u
n
 
r
e
g
i
s
t
r
e
 
q
u
e
 
h
a
 
p
r
o
v
o
c
a
t
 
l
'
e
r
r
o
r
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
E
A
R
C
H
_
P
R
I
C
E
R
A
N
G
E
S
'
,
 
'
B
u
s
c
a
r
 
p
e
r
 
r
a
n
g
 
d
e
 
p
r
e
u
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
N
O
N
E
'
,
 
'
N
o
 
t
Ã
©
 
n
i
n
g
u
n
a
 
r
e
s
e
r
v
a
 
e
n
c
a
r
a
!
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
T
Y
P
E
'
,
 
'
E
d
i
t
a
r
 
e
l
 
s
e
u
 
t
i
p
u
s
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
T
Y
P
E
_
I
N
F
O
'
,
 
'
S
e
l
e
c
c
i
o
n
a
r
 
e
l
 
s
e
u
 
t
i
p
u
s
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
Y
O
U
R
_
E
N
Q
U
I
R
Y
'
,
 
'
L
a
 
s
e
v
a
 
c
o
n
s
u
l
t
a
.
.
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
L
I
S
T
L
I
M
I
T
'
,
 
'
L
Ã
­
m
i
t
 
l
l
i
s
t
a
 
p
r
o
p
i
e
t
a
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
L
I
S
T
L
I
M
I
T
_
D
E
S
C
'
,
 
"
E
l
 
n
Ã
º
m
e
r
o
 
d
e
 
p
r
o
p
i
e
t
a
t
s
 
p
e
r
 
a
 
m
o
s
t
r
a
r
 
e
n
 
u
n
a
 
p
Ã
 
g
i
n
a
 
d
e
s
p
r
Ã
©
s
 
d
'
u
n
a
 
c
e
r
c
a
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
T
I
T
L
E
'
,
 
'
F
u
n
c
i
Ã
³
 
d
e
 
c
e
r
c
a
 
i
n
t
e
g
r
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
T
I
T
L
E
_
D
E
S
C
'
,
 
"
L
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
c
e
r
c
a
 
i
n
t
e
g
r
a
d
a
 
J
o
m
r
e
s
 
p
e
r
m
e
t
 
a
l
s
 
u
s
u
a
r
i
s
 
b
u
s
c
a
r
 
a
 
t
r
a
v
Ã
©
s
 
d
e
 
J
o
m
r
e
s
 
P
r
o
p
i
e
t
a
t
s
 
d
'
 
a
c
o
r
d
 
a
m
b
 
u
n
 
c
o
n
j
u
n
t
 
d
e
 
f
u
n
c
i
o
n
s
.
 
S
i
 
j
a
 
h
a
 
u
t
i
l
i
t
z
a
t
 
l
e
s
 
f
u
n
c
i
o
n
s
 
d
e
 
c
e
r
c
a
 
d
e
 
J
o
m
r
e
s
 
e
n
 
J
o
o
m
l
a
 
v
o
s
t
Ã
¨
 
e
s
t
a
r
Ã
 
 
f
a
m
i
l
i
a
r
i
t
z
a
t
 
a
m
b
 
a
q
u
e
s
t
s
 
a
j
u
s
t
s
.
 
<
b
r
/
>
 
A
q
u
e
s
t
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
e
n
s
 
p
e
r
m
e
t
 
o
f
e
r
i
r
 
e
l
 
m
a
n
e
i
g
 
d
e
 
l
a
 
c
e
r
c
a
 
e
n
 
J
o
m
r
e
s
 
p
e
r
 
a
 
a
q
u
e
l
l
s
 
u
s
u
a
r
i
s
 
q
u
e
 
n
o
 
d
e
s
i
t
g
e
n
 
u
t
i
l
i
t
z
a
r
 
m
Ã
²
d
u
l
s
 
d
e
 
c
e
r
c
a
 
d
e
 
J
o
o
m
l
a
,
 
o
 
p
e
r
 
a
 
a
l
t
r
e
s
 
u
s
u
a
r
i
s
 
d
e
 
C
M
S
 
q
u
e
 
n
o
 
t
e
n
e
n
 
e
l
s
 
s
e
u
s
 
p
r
o
p
i
s
 
m
Ã
²
d
u
l
s
 
d
e
 
c
e
r
c
a
 
J
o
m
r
e
s
.
 
<
b
r
/
>
 
N
o
m
Ã
©
s
 
r
e
c
o
r
d
i
 
q
u
e
 
s
i
 
d
e
c
i
d
e
i
x
 
b
u
s
c
a
r
 
a
l
g
u
n
a
 
c
o
s
a
 
a
 
t
r
a
v
Ã
©
s
 
d
'
u
n
 
e
n
l
l
a
Ã
§
 
(
Ã
©
s
 
a
 
d
i
r
,
 
n
o
 
u
n
 
m
e
n
Ã
º
 
d
e
s
p
l
e
g
a
b
l
e
)
,
 
l
l
a
v
o
r
s
 
l
e
s
 
o
p
c
i
o
n
s
 
d
e
 
c
e
r
c
a
 
n
o
 
e
s
 
d
u
r
Ã
 
n
 
a
 
t
e
r
m
e
,
 
n
o
m
Ã
©
s
 
l
'
e
l
e
m
e
n
t
 
q
u
e
 
e
s
 
c
o
r
r
e
s
p
o
n
 
a
m
b
 
l
'
e
n
l
l
a
Ã
§
 
q
u
e
 
h
a
 
f
e
t
 
c
l
i
c
.
 
<
b
r
/
>
 
N
o
t
i
 
q
u
e
 
p
e
r
 
d
e
f
e
c
t
e
 
e
l
 
d
i
s
s
e
n
y
 
d
'
a
q
u
e
s
t
a
 
c
e
r
c
a
 
i
n
t
e
g
r
a
d
a
 
n
o
 
Ã
©
s
 
m
o
l
t
 
b
o
n
i
c
.
 
A
i
x
Ã
²
 
Ã
©
s
 
p
e
r
q
u
e
 
l
'
a
r
x
i
u
 
d
e
 
p
l
a
n
t
i
l
l
a
 
q
u
e
 
c
o
n
s
t
r
u
e
i
x
 
e
l
 
d
i
s
s
e
n
y
 
h
a
 
d
'
i
n
c
l
u
Ã
¯
r
 
t
o
t
e
s
 
l
e
s
 
o
p
c
i
o
n
s
 
p
o
s
s
i
b
l
e
s
,
 
a
l
g
u
n
e
s
 
d
e
 
l
e
s
 
q
u
a
l
s
 
s
Ã
³
n
 
i
n
c
o
m
p
a
t
i
b
l
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
E
N
A
B
L
E
'
,
 
'
A
c
t
i
v
a
r
 
a
q
u
e
s
t
a
 
f
u
n
c
i
Ã
³
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
E
N
A
B
L
E
_
D
E
S
C
'
,
 
'
S
i
 
a
q
u
e
s
t
a
 
f
u
n
c
i
Ã
³
 
e
s
t
Ã
 
 
h
a
b
i
l
i
t
a
d
a
,
 
q
u
a
l
s
e
v
o
l
 
c
r
i
d
a
 
a
 
J
o
m
r
e
s
 
q
u
e
 
m
o
s
t
r
i
 
l
a
 
l
l
i
s
t
a
 
d
e
 
p
r
o
p
i
e
t
a
t
s
 
m
o
s
t
r
a
r
Ã
 
 
t
a
m
b
Ã
©
 
l
e
s
 
o
p
c
i
o
n
s
 
d
e
 
c
e
r
c
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
U
S
E
C
O
L
S
'
,
 
'
U
t
i
l
i
t
z
a
r
 
c
o
l
u
m
n
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
U
S
E
C
O
L
S
_
D
E
S
C
'
,
 
"
Q
u
a
l
s
e
v
o
l
 
o
p
c
i
Ã
³
 
d
e
 
c
e
r
c
a
 
q
u
e
 
h
a
g
i
 
d
e
f
i
n
i
t
 
c
o
m
 
e
n
l
l
a
Ã
§
 
(
q
u
a
n
 
s
i
g
u
i
 
e
l
 
c
a
s
)
 
e
s
 
m
o
s
t
r
a
r
Ã
 
 
c
o
m
 
c
o
l
u
m
n
e
s
 
(
I
E
 
p
o
s
a
 
b
r
 
a
l
 
f
i
n
a
l
 
d
e
 
l
'
e
n
l
l
a
Ã
§
)
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
S
E
L
E
C
T
C
O
M
B
O
'
,
 
'
C
e
r
c
a
 
p
e
r
 
r
e
g
i
Ã
³
 
s
e
l
e
c
c
i
o
n
a
n
t
 
c
o
m
b
o
 
d
e
s
p
l
e
g
a
b
l
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
S
E
L
E
C
T
C
O
M
B
O
_
D
E
S
C
'
,
 
'
O
f
e
r
e
i
x
 
u
n
 
m
e
n
Ã
º
 
d
e
s
p
l
e
g
a
b
l
e
 
d
e
 
c
e
r
c
a
 
p
e
r
 
a
 
f
i
l
t
r
a
r
 
a
 
t
r
a
v
Ã
©
s
 
d
e
 
p
a
Ã
¯
s
o
s
/
r
e
g
i
o
n
s
/
c
i
u
t
a
t
s
.
 
S
i
 
v
a
 
a
 
u
t
i
l
i
t
z
a
r
 
a
q
u
e
s
t
a
 
f
u
n
c
i
Ã
³
,
 
l
l
a
v
o
r
s
 
s
e
r
Ã
 
 
m
i
l
l
o
r
 
q
u
e
 
n
o
 
u
t
i
l
i
t
z
i
 
l
a
 
c
e
r
c
a
 
p
e
r
 
r
e
g
i
Ã
³
 
o
 
c
i
u
t
a
t
 
q
u
e
 
s
e
g
u
e
i
x
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
P
R
O
P
E
R
T
Y
N
A
M
E
'
,
 
'
B
u
s
c
a
r
 
p
e
r
 
n
o
m
 
P
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
P
R
O
P
E
R
T
Y
N
A
M
E
_
D
E
S
C
'
,
 
'
M
o
s
t
r
a
r
 
l
a
 
c
e
r
c
a
 
p
e
l
 
n
o
m
 
d
e
 
p
r
o
p
i
e
t
a
t
 
i
n
t
r
o
d
u
Ã
¯
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
P
R
O
P
E
R
T
Y
N
A
M
E
_
A
S
D
R
O
P
D
O
W
N
'
,
 
'
M
o
s
t
r
a
r
 
c
o
m
 
u
n
 
d
e
s
p
l
e
g
a
b
l
e
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
P
R
O
P
E
R
T
Y
N
A
M
E
_
A
S
D
R
O
P
D
O
W
N
_
D
E
S
C
'
,
 
"
C
a
n
v
Ã
¯
i
 
a
i
x
Ã
²
 
a
 
N
o
 
p
e
r
 
a
 
m
o
s
t
r
a
r
 
l
a
 
l
l
i
s
t
a
 
d
'
e
n
l
l
a
Ã
§
o
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
T
O
W
N
R
E
G
I
O
N
'
,
 
'
B
u
s
c
a
r
 
p
e
r
 
c
i
u
t
a
t
/
r
e
g
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
R
E
G
I
O
N
_
D
E
S
C
'
,
 
'
M
o
s
t
r
a
r
 
l
a
 
c
e
r
c
a
 
p
e
r
 
l
a
 
r
e
g
i
Ã
³
 
i
n
t
r
o
d
u
Ã
¯
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
R
E
G
I
O
N
_
A
S
D
R
O
P
D
O
W
N
'
,
 
'
M
o
s
t
r
a
r
 
c
o
m
 
u
n
 
d
e
s
p
l
e
g
a
b
l
e
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
R
E
G
I
O
N
_
A
S
D
R
O
P
D
O
W
N
_
D
E
S
C
'
,
 
"
C
a
n
v
Ã
¯
i
 
a
i
x
Ã
²
 
a
 
N
o
 
p
e
r
 
a
 
m
o
s
t
r
a
r
 
l
a
 
l
l
i
s
t
a
 
d
'
e
n
l
l
a
Ã
§
o
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
P
R
O
P
E
R
T
Y
T
Y
P
E
'
,
 
'
B
u
s
c
a
r
 
p
e
r
 
t
i
p
u
s
 
d
e
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
P
R
O
P
E
R
T
Y
T
Y
P
E
_
D
E
S
C
'
,
 
'
M
o
s
t
r
a
r
 
l
a
 
c
e
r
c
a
 
p
e
r
 
t
i
p
u
s
 
d
e
 
p
r
o
p
i
e
t
a
t
 
i
n
t
r
o
d
u
Ã
¯
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
P
R
O
P
E
R
T
Y
T
Y
P
E
_
A
S
D
R
O
P
D
O
W
N
'
,
 
'
M
o
s
t
r
a
r
 
c
o
m
 
u
n
 
d
e
s
p
l
e
g
a
b
l
e
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
P
R
O
P
E
R
T
Y
T
Y
P
E
_
A
S
D
R
O
P
D
O
W
N
_
D
E
S
C
'
,
 
"
C
a
n
v
Ã
¯
i
 
a
i
x
Ã
²
 
a
 
N
o
 
p
e
r
 
a
 
m
o
s
t
r
a
r
 
l
a
 
l
l
i
s
t
a
 
d
'
e
n
l
l
a
Ã
§
o
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
R
O
O
M
T
Y
P
E
'
,
 
"
B
u
s
c
a
r
 
p
e
r
 
t
i
p
u
s
 
d
'
h
a
b
i
t
a
c
i
Ã
³
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
R
O
O
M
T
Y
P
E
_
D
E
S
C
'
,
 
"
M
o
s
t
r
a
r
 
l
a
 
c
e
r
c
a
 
p
e
l
 
t
i
p
u
s
 
d
'
h
a
b
i
t
a
c
i
Ã
³
 
i
n
t
r
o
d
u
Ã
¯
d
a
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
R
O
O
M
T
Y
P
E
_
A
S
D
R
O
P
D
O
W
N
'
,
 
'
M
o
s
t
r
a
r
 
c
o
m
 
u
n
 
d
e
s
p
l
e
g
a
b
l
e
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
R
O
O
M
T
Y
P
E
_
A
S
D
R
O
P
D
O
W
N
_
D
E
S
C
'
,
 
"
C
a
n
v
Ã
¯
i
 
a
i
x
Ã
²
 
a
 
N
o
 
p
e
r
 
a
 
m
o
s
t
r
a
r
 
l
a
 
l
l
i
s
t
a
 
d
'
e
n
l
l
a
Ã
§
o
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
F
E
A
T
U
R
E
S
'
,
 
'
B
u
s
c
a
r
 
p
e
r
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
q
u
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
F
E
A
T
U
R
E
S
_
D
E
S
C
'
,
 
'
M
o
s
t
r
a
r
 
l
a
 
c
e
r
c
a
 
p
e
r
 
l
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
i
n
t
r
o
d
u
Ã
¯
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
F
E
A
T
U
R
E
S
_
A
S
D
R
O
P
D
O
W
N
'
,
 
'
M
o
s
t
r
a
r
 
c
o
m
 
u
n
 
d
e
s
p
l
e
g
a
b
l
e
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
F
E
A
T
U
R
E
S
_
A
S
D
R
O
P
D
O
W
N
_
D
E
S
C
'
,
 
"
C
a
n
v
Ã
¯
i
 
a
i
x
Ã
²
 
a
 
N
o
 
p
e
r
 
a
 
m
o
s
t
r
a
r
 
l
a
 
l
l
i
s
t
a
 
d
'
e
n
l
l
a
Ã
§
o
s
 
c
o
m
 
a
 
d
e
s
c
r
i
p
c
i
Ã
³
 
d
'
i
m
a
t
g
e
s
 
i
 
c
a
s
e
l
l
e
s
 
d
e
 
v
e
r
i
f
i
c
a
c
i
Ã
³
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
B
u
s
c
a
r
 
p
e
r
 
d
e
s
c
r
i
p
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
D
E
S
C
R
I
P
T
I
O
N
_
D
E
S
C
'
,
 
'
M
o
s
t
r
a
r
 
l
a
 
c
e
r
c
a
 
p
e
r
 
l
a
 
d
e
s
c
r
i
p
c
i
Ã
³
 
i
n
t
r
o
d
u
Ã
¯
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
A
V
A
I
L
A
B
I
L
I
T
Y
'
,
 
'
B
u
s
c
a
r
 
p
e
r
 
d
i
s
p
o
n
i
b
i
l
i
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
A
V
A
I
L
A
B
I
L
I
T
Y
_
D
E
S
C
'
,
 
'
M
o
s
t
r
a
r
 
l
a
 
c
e
r
c
a
 
p
e
r
 
l
a
 
d
i
s
p
o
n
i
b
i
l
i
t
a
t
 
i
n
t
r
o
d
u
Ã
¯
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
P
R
I
C
E
R
A
N
G
E
S
'
,
 
'
B
u
s
c
a
r
 
p
e
r
 
r
a
n
g
 
d
e
 
p
r
e
u
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
P
R
I
C
E
R
A
N
G
E
S
_
D
E
S
C
'
,
 
'
M
o
s
t
r
a
r
 
l
a
 
c
e
r
c
a
 
p
e
r
 
r
a
n
g
 
d
e
 
p
r
e
u
 
i
n
t
r
o
d
u
Ã
¯
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
R
A
N
G
E
I
N
C
R
E
M
E
N
T
S
'
,
 
'
B
u
s
c
a
r
 
p
e
r
 
i
n
c
r
e
m
e
n
t
s
 
d
e
 
r
a
n
g
 
d
e
 
p
r
e
u
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
R
A
N
G
E
I
N
C
R
E
M
E
N
T
S
_
D
E
S
C
'
,
 
'
J
o
m
r
e
s
 
m
i
r
a
r
Ã
 
 
e
n
 
t
o
t
s
 
e
l
s
 
v
a
l
o
r
s
 
d
e
 
l
e
s
 
t
a
r
i
f
e
s
 
a
 
c
o
n
t
i
n
u
a
c
i
Ã
³
,
 
c
a
l
c
u
l
a
r
Ã
 
 
u
n
a
 
s
Ã
¨
r
i
e
 
d
e
 
r
a
n
g
s
 
d
e
 
p
r
e
u
s
 
b
a
s
a
t
 
e
n
 
e
l
s
 
i
n
c
r
e
m
e
n
t
s
 
d
e
 
v
a
l
o
r
 
q
u
e
 
h
a
 
e
s
t
a
b
l
e
r
t
 
a
q
u
Ã
­
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
_
G
L
O
B
A
L
_
S
E
A
R
C
H
O
P
T
I
O
N
_
R
A
N
D
O
M
L
I
M
I
T
_
D
E
S
C
'
,
 
"
P
e
r
 
d
e
f
e
c
t
o
,
 
s
i
 
u
n
a
 
p
r
o
p
i
e
t
a
t
 
n
o
 
e
s
t
Ã
 
 
s
e
l
e
c
c
i
o
n
a
d
a
 
e
n
 
J
o
m
r
e
s
 
e
s
 
r
e
a
l
i
t
z
a
 
u
n
a
 
c
e
r
c
a
.
 
S
i
 
a
q
u
e
s
t
a
 
c
e
r
c
a
 
n
o
 
h
a
 
s
i
g
u
t
 
p
r
o
v
o
c
a
d
a
 
p
e
r
 
u
n
 
m
Ã
²
d
u
l
 
d
e
 
c
e
r
c
a
,
 
l
l
a
v
o
r
s
 
l
a
 
c
e
r
c
a
 
o
r
i
g
i
n
a
r
Ã
 
 
r
e
s
u
l
t
a
t
s
 
a
 
l
'
a
t
z
a
r
 
(
d
e
l
i
b
e
r
a
d
a
m
e
n
t
)
.
 
A
q
u
e
s
t
a
 
o
p
c
i
Ã
³
 
l
i
 
p
e
r
m
e
t
 
l
i
m
i
t
a
r
 
e
l
 
n
o
m
b
r
e
 
d
e
 
r
e
s
u
l
t
a
t
s
 
e
n
 
a
q
u
e
s
t
a
 
c
e
r
c
 
a
 
l
'
a
t
z
a
r
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
C
R
O
N
_
T
I
T
L
E
'
,
 
'
A
j
u
s
t
o
s
 
d
e
 
t
r
e
b
a
l
l
 
p
e
r
 
a
 
C
r
o
n
 
i
 
r
e
g
i
s
t
r
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
C
R
O
N
_
D
E
S
C
'
,
 
'
P
s
e
u
d
o
c
r
o
n
 
i
n
f
o
r
m
a
c
i
Ã
³
 
d
e
l
 
t
r
e
b
a
l
l
.
 
L
a
 
f
u
n
c
i
o
n
a
l
i
t
a
t
 
p
s
e
u
d
o
c
r
o
n
 
Ã
©
s
 
n
e
c
e
s
s
Ã
 
r
i
a
 
p
e
r
 
a
 
l
a
 
f
a
c
t
u
r
a
c
i
Ã
³
 
i
 
m
a
n
e
i
g
 
d
e
 
l
a
 
c
o
m
i
s
s
i
Ã
³
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
C
R
O
N
_
I
M
M
E
D
I
A
T
E
R
U
N
'
,
 
"
I
n
s
t
a
l
Â
·
l
a
t
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
 
c
r
o
n
.
 
P
e
r
 
a
 
e
x
e
c
u
t
a
r
 
u
n
a
 
t
a
s
c
a
 
d
e
 
c
r
o
n
 
i
n
d
i
v
i
d
u
a
l
 
u
t
i
l
i
t
z
i
 
e
l
s
 
e
n
l
l
a
Ã
§
o
s
 
q
u
e
 
s
'
e
s
p
e
c
i
f
i
q
u
e
n
 
a
 
c
o
n
t
i
n
u
a
c
i
Ã
³
.
 
T
i
n
g
u
i
 
e
n
 
c
o
m
p
t
e
 
q
u
e
 
e
l
 
c
r
o
n
 
j
o
b
s
 
n
o
 
p
r
o
d
u
e
i
x
 
n
i
n
g
Ã
º
n
 
r
e
s
u
l
t
a
t
 
p
e
l
 
q
u
e
 
n
o
 
v
e
u
r
Ã
 
 
n
i
n
g
u
n
a
 
i
n
f
o
r
m
a
c
i
Ã
³
 
e
n
 
l
a
 
p
Ã
 
g
i
n
a
.
 
E
n
 
c
a
n
v
i
,
 
e
s
 
r
e
f
e
r
e
i
x
 
a
 
l
e
s
 
a
n
o
t
a
c
i
o
n
s
 
d
e
 
t
r
e
b
a
l
l
 
r
e
f
e
r
i
d
e
s
 
a
 
c
o
n
t
i
n
u
a
c
i
Ã
³
.
"
)
;

g
l
o
b
a
l
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
s
e
c
r
e
t
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
C
R
O
N
_
M
E
T
H
O
D
'
,
 
'
M
Ã
¨
t
o
d
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
C
R
O
N
_
M
E
T
H
O
D
_
D
E
S
C
'
,
 
"
S
i
 
v
o
s
t
Ã
¨
 
n
o
 
t
Ã
©
 
a
c
c
Ã
©
s
 
a
 
c
r
o
n
 
j
o
b
s
,
 
a
c
t
i
v
i
 
a
q
u
e
s
t
 
m
i
n
i
c
o
m
p
o
n
e
n
t
,
 
d
e
l
 
c
o
n
t
r
a
r
i
 
c
r
e
i
 
u
n
a
 
t
a
s
c
a
 
p
r
o
g
r
a
m
a
d
a
 
i
 
d
Ã
­
g
a
l
i
 
q
u
e
 
s
'
e
x
e
c
u
t
i
<
b
r
 
/
>
 
<
i
>
c
u
r
l
 
-
s
 
"
.
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
A
J
A
X
.
'
&
t
a
s
k
=
c
r
o
n
j
o
b
s
&
t
m
p
l
=
'
.
g
e
t
_
s
h
o
w
t
i
m
e
(
'
t
m
p
l
c
o
m
p
o
n
e
n
t
'
)
.
'
&
n
o
_
h
t
m
l
=
1
&
s
e
c
r
e
t
=
'
.
b
a
s
e
6
4
_
e
n
c
o
d
e
(
g
e
t
_
s
h
o
w
t
i
m
e
(
'
s
e
c
r
e
t
'
)
)
.
'
>
 
/
d
e
v
/
n
u
l
l
<
/
i
>
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
C
R
O
N
_
L
O
G
G
I
N
G
'
,
 
'
M
o
s
t
r
a
r
 
e
l
 
r
e
g
i
s
t
r
e
 
e
n
 
e
l
 
n
a
v
e
g
a
d
o
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
C
R
O
N
_
L
O
G
G
I
N
G
_
D
E
S
C
'
,
 
"
N
o
m
Ã
©
s
 
f
u
n
c
i
o
n
a
 
s
i
 
e
l
 
m
Ã
¨
t
o
d
e
 
s
'
e
s
t
a
b
l
e
i
x
 
e
n
 
m
i
n
i
c
o
m
p
o
n
e
n
t
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
C
R
O
N
_
L
O
G
G
I
N
G
E
N
A
B
L
E
D
'
,
 
'
R
e
g
i
s
t
r
e
 
h
a
b
i
l
i
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
C
R
O
N
_
L
O
G
G
I
N
G
E
N
A
B
L
E
D
_
D
E
S
C
'
,
 
"
P
o
s
i
 
a
i
x
Ã
²
 
e
n
 
S
Ã
­
 
p
e
r
 
a
 
q
u
e
 
e
l
 
r
e
g
i
s
t
r
e
 
e
s
t
i
g
u
i
 
h
a
b
i
l
i
t
a
t
.
 
E
l
s
 
r
e
s
u
l
t
a
t
s
 
d
e
l
s
 
r
e
g
i
s
t
r
e
s
 
s
'
e
m
i
t
i
r
Ã
 
n
 
a
 
c
o
n
t
i
n
u
a
c
i
Ã
³
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
C
R
O
N
_
V
E
R
B
O
S
E
L
O
G
S
'
,
 
'
R
e
g
i
s
t
r
e
 
d
e
t
a
l
l
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
C
R
O
N
_
V
E
R
B
O
S
E
L
O
G
S
_
D
E
S
C
'
,
 
'
L
o
t
s
 
d
e
 
r
e
g
i
s
t
r
e
 
d
e
 
s
o
r
t
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
T
E
M
P
L
A
T
E
E
D
I
T
I
N
G
_
T
I
T
L
E
'
,
 
'
E
d
i
c
i
Ã
³
 
d
e
 
p
l
a
n
t
i
l
l
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
U
S
T
O
M
F
I
E
L
D
S
_
T
I
T
L
E
'
,
 
'
C
a
m
p
s
 
p
e
r
s
o
n
a
l
i
t
z
a
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
U
S
T
O
M
F
I
E
L
D
S
_
D
E
S
C
'
,
 
'
A
q
u
Ã
­
 
p
o
t
 
d
e
f
i
n
i
r
 
c
a
m
p
s
 
s
i
m
p
l
e
s
 
p
e
r
s
o
n
a
l
i
t
z
a
t
s
 
q
u
e
 
e
s
 
m
o
s
t
r
a
r
Ã
 
n
 
e
n
 
e
l
 
f
o
r
m
u
l
a
r
i
 
d
e
 
r
e
s
e
r
v
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
U
S
T
O
M
F
I
E
L
D
S
_
F
I
E
L
D
N
A
M
E
'
,
 
'
N
o
m
 
d
e
 
c
a
m
p
 
(
s
e
n
s
e
 
e
s
p
a
i
s
)
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
U
S
T
O
M
F
I
E
L
D
S
_
D
E
F
A
U
L
T
V
A
L
U
E
'
,
 
'
V
a
l
o
r
 
p
e
r
 
d
e
f
e
c
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
U
S
T
O
M
F
I
E
L
D
S
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
U
S
T
O
M
F
I
E
L
D
S
_
R
E
Q
U
I
R
E
D
'
,
 
'
R
e
q
u
e
r
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
X
T
R
A
_
Q
U
A
N
T
I
T
Y
'
,
 
'
Q
u
a
n
t
i
t
a
t
 
m
Ã
 
x
i
m
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
X
T
R
A
_
Q
U
A
N
T
I
T
Y
_
D
E
S
C
'
,
 
"
S
i
 
l
a
 
q
u
a
n
t
i
t
a
t
 
m
Ã
 
x
i
m
a
 
s
'
e
s
t
a
b
l
e
i
x
 
e
n
 
m
Ã
©
s
 
d
e
 
1
 
,
 
a
l
s
 
h
o
s
t
e
s
 
s
e
'
l
s
 
o
f
e
r
i
r
Ã
 
 
u
n
 
m
e
n
Ã
º
 
d
e
s
p
l
e
g
a
b
l
e
 
p
e
r
 
a
 
e
s
c
o
l
l
i
r
 
l
a
 
q
u
a
n
t
i
t
a
t
 
d
e
l
s
 
e
x
t
r
e
s
 
q
u
e
 
n
e
c
e
s
s
i
t
e
n
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
T
A
X
R
A
T
E
S
_
T
I
T
L
E
'
,
 
'
I
m
p
o
s
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
T
A
X
R
A
T
E
S
_
C
O
D
E
'
,
 
'
C
o
d
i
 
I
m
p
o
s
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
T
A
X
R
A
T
E
S
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
 
I
m
p
o
s
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
T
A
X
R
A
T
E
S
_
C
A
N
N
O
T
D
E
L
E
T
E
'
,
 
'
N
o
 
p
o
t
 
b
o
r
r
a
r
 
a
q
u
e
s
t
 
I
m
p
o
s
t
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
T
A
X
R
A
T
E
S
_
R
A
T
E
'
,
 
'
T
a
s
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
T
I
T
L
E
'
,
 
'
F
a
c
t
u
r
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
U
N
P
A
I
D
'
,
 
'
N
o
 
p
a
g
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
P
A
I
D
'
,
 
'
P
a
g
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
C
A
N
C
E
L
L
E
D
'
,
 
'
C
a
n
c
e
l
Â
·
l
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
P
E
N
D
I
N
G
'
,
 
'
P
e
n
d
e
n
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
U
S
E
R
'
,
 
'
U
s
u
a
r
i
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
'
,
 
'
E
s
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
R
A
I
S
E
D
'
,
 
'
P
l
a
n
t
e
j
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
D
U
E
'
,
 
'
D
e
g
u
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
U
B
S
C
R
I
P
T
I
O
N
'
,
 
'
S
u
s
c
r
i
p
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
I
N
I
T
T
O
T
A
L
'
,
 
'
T
o
t
a
l
 
p
e
n
d
e
n
t
 
d
e
 
p
a
g
a
m
e
n
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
R
E
C
U
R
_
F
R
E
Q
U
E
N
C
Y
'
,
 
'
F
r
e
q
Ã
¼
Ã
¨
n
c
i
a
 
r
e
p
e
t
i
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
R
E
C
U
R
_
D
O
M
O
N
T
H
'
,
 
'
D
i
a
 
d
e
l
 
m
e
s
 
r
e
c
u
r
r
e
n
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
U
R
R
E
N
C
Y
C
O
D
E
'
,
 
'
C
o
d
i
 
d
e
 
m
o
n
e
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
'
,
 
'
L
Ã
­
n
i
e
s
 
d
e
 
c
o
m
a
n
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
N
A
M
E
'
,
 
'
N
o
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
P
R
I
C
E
'
,
 
'
P
r
e
u
 
i
n
i
c
i
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
Q
T
Y
'
,
 
'
Q
u
a
n
t
i
t
a
t
 
i
n
i
c
i
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
D
I
S
C
O
U
N
T
'
,
 
'
D
e
s
c
o
m
p
t
e
 
i
n
i
c
i
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
T
O
T
A
L
'
,
 
'
T
o
t
a
l
 
i
n
i
c
i
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
C
O
D
E
'
,
 
"
C
o
d
i
 
d
'
i
m
p
o
s
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
"
D
e
s
c
r
i
p
c
i
Ã
³
 
d
'
i
m
p
o
s
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
R
A
T
E
'
,
 
'
T
a
s
a
 
i
m
p
o
s
i
t
i
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
P
A
Y
P
A
L
_
S
E
T
T
I
N
G
S
_
O
V
E
R
R
I
D
E
'
,
 
'
R
e
e
m
p
l
a
Ã
§
a
r
 
e
l
s
 
a
j
u
s
t
o
s
 
e
s
t
Ã
 
n
d
a
r
 
d
e
 
l
a
 
p
a
s
a
r
e
l
Â
·
l
a
 
J
o
m
r
e
s
?
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
H
O
W
I
N
V
O
I
C
E
S
'
,
 
'
M
o
s
t
r
a
r
 
l
e
s
 
m
e
v
e
s
 
f
a
c
t
u
r
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
T
I
T
L
E
'
,
 
'
C
u
p
o
n
s
 
d
e
s
c
o
m
p
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
D
E
S
C
'
,
 
'
E
l
s
 
c
o
d
i
s
 
d
e
 
d
e
s
c
o
m
p
t
e
 
e
s
 
p
o
d
e
n
 
g
e
n
e
r
a
r
 
i
 
e
n
v
i
a
r
 
â
€
‹
â
€
‹
a
l
s
 
c
l
i
e
n
t
s
 
c
o
m
 
u
n
 
i
n
c
e
n
t
i
u
 
p
e
r
 
a
 
f
e
r
 
r
e
s
e
r
v
e
s
.
 
V
Ã
 
l
i
d
 
d
e
s
d
e
 
i
 
f
i
n
s
 
l
e
s
 
d
a
t
e
s
 
e
s
 
r
e
f
e
r
e
i
x
 
a
 
l
e
s
 
d
a
t
e
s
 
e
n
 
q
u
e
 
l
a
 
r
e
s
e
r
v
a
 
e
s
 
p
o
t
 
f
e
r
 
e
n
 
e
n
d
a
v
a
n
t
,
 
n
o
 
a
 
l
a
 
d
a
t
a
 
d
e
 
l
a
 
p
r
o
p
i
a
 
r
e
s
e
r
v
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
C
O
D
E
'
,
 
'
C
o
d
i
 
d
e
 
c
u
p
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
V
A
L
I
D
F
R
O
M
'
,
 
'
V
Ã
 
l
i
d
 
d
e
s
d
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
V
A
L
I
D
T
O
'
,
 
'
V
Ã
 
l
i
d
 
f
i
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
A
M
O
U
N
T
'
,
 
'
I
m
p
o
r
t
 
d
e
 
d
e
s
c
o
m
p
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
I
S
P
E
R
C
E
N
T
A
G
E
'
,
 
'
E
l
 
d
e
s
c
o
m
p
t
e
 
Ã
©
s
 
u
n
 
p
e
r
c
e
n
t
a
t
g
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
R
O
O
M
O
N
L
Y
'
,
 
'
N
o
m
Ã
©
s
 
h
a
b
i
t
a
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
"
S
i
 
t
Ã
©
 
u
n
 
c
o
d
i
 
d
e
 
c
u
p
Ã
³
,
 
s
i
 
u
s
 
p
l
a
u
 
e
s
c
r
i
g
u
i
'
l
 
e
n
 
e
l
 
q
u
a
d
r
e
 
i
 
f
a
g
i
 
c
l
i
c
 
e
n
 
'
G
u
a
r
d
a
r
 
c
u
p
Ã
³
'
 
p
e
r
 
a
 
g
u
a
r
d
a
r
 
e
l
s
 
d
e
t
a
l
l
s
 
d
e
 
c
u
p
Ã
³
 
e
n
 
l
a
 
s
e
v
a
 
r
e
s
e
r
v
a
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
A
P
P
L
Y
B
U
T
T
O
N
'
,
 
'
G
u
a
r
d
a
r
 
c
u
p
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
C
O
U
P
O
N
S
A
V
E
D
'
,
 
'
C
u
p
Ã
³
 
g
u
a
r
d
a
t
 
e
n
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
C
O
U
P
O
N
N
O
T
F
O
U
N
D
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
c
u
p
Ã
³
 
n
o
 
t
r
o
b
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
D
I
S
C
O
U
N
T
V
A
L
U
E
'
,
 
'
V
a
l
o
r
 
d
e
 
c
u
p
Ã
³
 
d
e
 
d
e
s
c
o
m
p
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
B
O
O
K
I
N
G
N
O
T
E
'
,
 
'
D
e
s
c
o
m
p
t
e
 
d
e
 
r
e
s
e
r
v
a
.
 
C
o
d
i
 
d
e
 
D
e
s
c
o
m
p
t
e
 
v
Ã
 
l
i
d
/
v
a
l
o
r
 
d
e
l
s
 
d
e
s
c
o
m
p
t
e
s
/
c
o
n
f
i
g
u
r
a
c
i
Ã
³
 
d
e
 
c
u
p
Ã
³
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
H
O
O
S
E
L
A
N
G
U
A
G
E
S
'
,
 
'
E
s
c
o
l
l
i
r
 
i
d
i
o
m
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
H
O
O
S
E
L
A
N
G
U
A
G
E
S
_
I
N
F
O
'
,
 
"
T
r
Ã
¯
i
 
l
e
s
 
o
p
c
i
o
n
s
 
d
'
i
d
i
o
m
a
 
q
u
e
 
e
s
 
m
o
s
t
r
a
 
e
n
 
e
l
 
m
e
n
Ã
º
 
d
e
s
p
l
e
g
a
b
l
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
H
O
O
S
E
L
A
N
G
U
A
G
E
S
_
S
H
O
W
D
R
O
P
D
O
W
N
'
,
 
"
M
o
s
t
r
a
r
 
e
l
 
m
e
n
Ã
º
 
d
e
s
p
l
e
g
a
b
l
e
 
d
e
 
s
e
l
e
c
c
i
Ã
³
 
d
'
i
d
i
o
m
a
?
"
)
;

/
*

*
 
@
i
g
n
o
r
e

*
/

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
D
E
A
R
'
,
 
'
E
s
t
i
m
a
t
/
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
T
H
A
N
K
Y
O
U
'
,
 
'
G
r
Ã
 
c
i
e
s
 
p
e
r
 
r
e
g
i
s
t
r
a
r
-
s
e
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
U
S
E
R
N
A
M
E
'
,
 
"
E
l
 
s
e
u
 
n
o
m
 
d
'
u
s
u
a
r
i
 
Ã
©
s
 
:
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
P
A
S
S
W
O
R
D
'
,
 
'
L
a
 
s
e
v
a
 
c
o
n
t
r
a
s
e
n
y
a
 
Ã
©
s
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
L
O
G
_
I
N
'
,
 
'
S
i
 
u
s
 
p
l
a
u
 
i
n
i
c
Ã
¯
i
 
s
e
s
s
i
Ã
³
 
p
e
r
 
a
 
v
e
u
r
e
 
l
e
s
 
s
e
v
e
s
 
r
e
s
e
r
v
e
s
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
C
O
U
P
O
N
'
,
 
'
C
u
p
Ã
³
 
g
u
a
r
d
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
D
E
L
E
T
E
_
C
O
U
P
O
N
'
,
 
'
C
u
p
Ã
³
 
b
o
r
r
a
t
'
)
;

/
/
 
N
o
t
 
u
s
e
d
 
y
e
t

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
M
S
_
C
L
I
C
K
A
T
E
L
L
_
T
I
T
L
E
'
,
 
'
J
o
m
r
e
s
 
-
>
 
C
l
i
c
k
a
t
e
l
l
 
S
M
S
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
M
S
_
C
L
I
C
K
A
T
E
L
L
_
U
S
E
R
N
A
M
E
'
,
 
'
U
s
u
a
r
i
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
M
S
_
C
L
I
C
K
A
T
E
L
L
_
P
A
S
S
W
O
R
D
'
,
 
'
C
o
n
t
r
a
s
e
n
y
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
M
S
_
C
L
I
C
K
A
T
E
L
L
_
A
P
I
I
D
'
,
 
'
A
P
I
 
i
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
M
S
_
C
L
I
C
K
A
T
E
L
L
_
N
O
T
I
F
I
C
A
T
I
O
N
_
M
O
B
I
L
E
N
U
M
B
E
R
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
t
e
l
Ã
¨
f
o
n
 
n
o
t
i
f
i
c
a
c
i
o
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
M
S
_
C
L
I
C
K
A
T
E
L
L
_
N
O
T
I
F
I
C
A
T
I
O
N
_
M
O
B
I
L
E
N
U
M
B
E
R
_
D
E
S
C
'
,
 
"
S
i
 
u
s
 
p
l
a
u
 
u
t
i
l
i
t
z
i
 
e
l
 
f
o
r
m
a
t
 
'
c
o
d
i
 
d
e
l
 
p
a
Ã
­
s
,
 
n
Ã
º
m
e
r
o
 
d
e
 
m
Ã
²
v
i
l
'
.
 
P
e
r
 
e
x
e
m
p
l
e
,
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
m
Ã
²
v
i
l
 
e
n
 
e
l
 
R
e
g
n
e
 
U
n
i
t
 
s
e
r
Ã
­
a
 
p
e
r
 
e
x
e
m
p
l
e
 
'
4
4
7
9
7
9
1
2
3
4
5
6
'
.
 
D
e
i
x
i
 
e
n
 
b
l
a
n
c
 
s
i
 
n
o
 
d
e
s
i
t
j
a
 
q
u
e
 
n
i
n
g
u
n
a
 
n
o
t
i
f
i
c
a
c
i
Ã
³
 
d
e
 
c
o
r
r
e
u
 
e
l
e
c
t
r
Ã
²
n
i
c
 
s
i
g
u
i
 
e
n
v
i
a
d
a
 
a
l
 
t
e
u
 
t
e
l
Ã
¨
f
o
n
 
m
Ã
²
v
i
l
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
M
S
_
C
L
I
C
K
A
T
E
L
L
_
T
A
B
T
I
T
L
E
'
,
 
'
S
M
S
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
M
S
_
C
L
I
C
K
A
T
E
L
L
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
"

<
b
>
O
b
v
i
a
m
e
n
t
,
 
n
o
 
e
s
 
p
o
t
 
u
t
i
l
i
t
z
a
r
/
p
r
o
v
a
r
 
a
q
u
e
s
t
a
 
p
a
s
a
r
e
l
Â
·
l
a
 
d
e
s
d
e
 
l
o
c
a
l
h
o
s
t
,
 
h
a
u
r
Ã
 
 
d
e
 
f
e
r
-
h
o
 
d
e
s
d
e
 
u
n
 
s
e
r
v
i
d
o
r
 
e
n
 
f
u
n
c
i
o
n
a
m
e
n
t
.
<
/
b
>

<
b
r
/
>

<
b
r
/
>

P
e
r
 
u
t
i
l
i
t
z
a
r
 
l
a
 
p
a
s
a
r
e
l
Â
·
l
a
 
C
l
i
c
k
a
t
e
l
l
 
n
e
c
e
s
s
i
t
a
 
u
n
 
c
o
m
p
t
e
 
d
e
 
C
l
i
c
k
a
t
e
l
l
 
i
 
a
l
m
e
n
y
s
 
u
n
a
 
c
o
n
n
e
x
i
Ã
³
 
r
e
g
i
s
t
r
a
d
a
 
(
A
P
I
 
i
n
s
t
Ã
 
n
c
i
a
 
s
u
b
-
p
r
o
d
u
c
t
e
)
 
e
n
t
r
e
 
l
a
 
s
e
v
a
 
a
p
l
i
c
a
c
i
Ã
³
 
i
 
n
o
s
t
r
a
 
p
o
r
t
a
 
d
'
e
n
l
l
a
Ã
§
.
 
C
a
d
a
 
m
Ã
¨
t
o
d
e
 
d
e
 
c
o
n
n
e
x
i
Ã
³
 
Ã
©
s
 
c
o
n
e
g
u
t
 
c
o
m
 
u
n
 
s
u
b
-
p
r
o
d
u
c
t
e
.
 
H
e
 
a
q
u
Ã
­
 
c
o
m
:
<
b
r
/
>

<
b
r
/
>

<
b
>
P
a
s
o
 
1
 
-
 
r
e
g
i
s
t
r
a
r
 
u
n
 
c
o
m
p
t
e
 
C
l
i
c
k
a
t
e
l
l
 
<
/
 
b
>
 
<
b
r
/
>

S
i
 
e
n
c
a
r
a
 
n
o
 
t
Ã
©
 
u
n
 
c
o
m
p
t
e
 
d
e
 
C
l
i
c
k
a
t
e
l
l
,
 
Ã
©
s
 
n
e
c
e
s
s
a
r
i
 
r
e
g
i
s
t
r
a
r
-
s
e
 
p
e
r
 
o
b
t
e
n
i
r
 
u
n
 
c
o
m
 
e
l
 
q
u
e
 
s
e
g
u
e
i
x
.
 
D
e
l
 
c
o
n
t
r
a
r
i
 
v
a
g
i
 
a
l
 
p
a
s
 
2
.
 
<
b
r
/
>

*
 
A
n
a
r
 
a
 
l
a
 
h
t
t
p
:
/
/
w
w
w
.
c
l
i
c
k
a
t
e
l
l
.
c
o
m
/
p
r
o
d
u
c
t
s
/
s
m
s
_
g
a
t
e
w
a
y
.
p
h
p
,
 
i
 
e
s
c
o
l
l
i
r
 
e
l
 
s
u
b
-
p
r
o
d
u
c
t
e
 
a
d
e
q
u
a
t
 
d
e
 
l
a
 
A
P
I
 
(
m
Ã
¨
t
o
d
e
 
d
e
 
c
o
n
n
e
x
i
Ã
³
)
 
q
u
e
 
d
e
s
i
t
j
a
 
u
t
i
l
i
t
z
a
r
 
(
C
l
i
c
k
a
t
e
l
l
 
C
e
n
t
r
a
l
 
(
A
P
I
)
)
 
<
b
r
/
>

*
 
F
a
g
i
 
c
l
i
c
 
e
n
 
l
'
e
n
l
l
a
Ã
§
 
d
e
 
r
e
g
i
s
t
r
e
.
 
<
b
r
/
>

*
 
O
m
p
l
i
 
e
l
 
f
o
r
m
u
l
a
r
i
 
d
'
i
n
s
c
r
i
p
c
i
Ã
³
.
 
<
b
r
/
>

U
n
 
c
o
p
 
s
u
p
e
r
a
t
 
a
m
b
 
Ã
¨
x
i
t
 
l
'
e
n
v
i
a
m
e
n
t
 
d
e
l
 
f
o
r
m
u
l
a
r
i
 
a
u
t
o
m
Ã
 
t
i
c
a
m
e
n
t
 
i
n
g
r
e
s
s
a
r
Ã
 
 
e
n
 
e
l
 
s
e
u
 
n
o
u
 
c
o
m
p
t
e
 
i
 
s
e
r
Ã
 
 
p
o
r
t
a
t
 
a
 
u
n
a
 
p
Ã
 
g
i
n
a
 
o
n
 
v
o
s
t
Ã
¨
 
p
o
t
 
e
s
c
o
l
l
i
r
 
e
l
s
 
s
e
u
s
 
A
P
I
 
c
o
n
n
e
c
t
i
o
n
.
 
<
b
r
/
>

<
b
>
 
P
a
s
 
2
 
-
 
a
f
e
g
i
r
 
u
n
 
r
e
g
i
s
t
r
e
 
A
P
I
 
c
o
n
n
e
c
t
i
o
n
 
(
s
u
b
-
p
r
o
d
u
c
t
e
)
 
<
/
 
b
>
 
<
b
r
/
>

S
i
 
n
o
 
e
s
t
Ã
 
 
j
a
 
c
o
n
n
e
c
t
a
t
 
a
l
 
s
e
u
 
c
o
m
p
t
e
,
 
h
a
 
d
e
 
f
e
r
-
h
o
 
e
n
 
<
b
r
/
>
 
h
t
t
p
:
/
/
w
w
w
.
c
l
i
c
k
a
t
e
l
l
.
c
o
m
/
l
o
g
i
n
.
p
h
p

*
 
S
e
l
e
c
c
i
o
n
i
\
"
A
d
m
i
n
i
s
t
r
a
r
 
e
l
s
 
m
e
u
s
 
p
r
o
d
u
c
t
e
s
\
"
 
e
n
 
e
l
 
m
e
n
Ã
º
 
s
u
p
e
r
i
o
r
.
 
<
b
r
/
>

*
 
S
e
l
e
c
c
i
o
n
i
 
e
l
 
t
i
p
u
s
 
d
e
 
c
o
n
n
e
x
i
Ã
³
 
d
e
 
l
a
 
A
P
I
 
q
u
e
 
d
e
s
i
t
g
i
 
u
t
i
l
i
t
z
a
r
 
(
A
P
I
 
H
T
T
P
)
 
d
e
l
 
m
e
n
Ã
º
 
d
e
s
p
l
e
g
a
b
l
e
 
(
'
A
d
d
 
C
o
n
n
e
c
t
i
o
n
'
)
.
 
<
b
r
/
>

*
 
C
o
m
p
l
e
t
a
r
 
e
l
 
f
o
r
m
u
l
a
r
i
.
 
A
s
s
e
g
u
r
i
'
s
 
d
e
 
q
u
e
 
i
n
t
r
o
d
u
e
i
x
 
l
a
 
I
P
 
b
l
o
q
u
e
j
a
d
a
 
(
l
a
 
I
P
 
d
'
a
q
u
e
s
t
 
s
e
r
v
i
d
o
r
)
,
 
a
j
u
s
t
a
r
 
C
a
l
l
b
a
c
k
 
a
 
H
T
T
P
 
P
O
S
T
.
 
H
a
u
r
Ã
 
 
d
'
e
s
t
a
b
l
i
r
 
l
a
 
d
e
v
o
l
u
c
i
Ã
³
 
d
e
 
t
r
u
c
a
d
a
 
I
P
 
"
 
.
g
e
t
_
s
h
o
w
t
i
m
e
(
'
l
i
v
e
_
s
i
t
e
'
)
.
"
/
i
n
d
e
x
.
p
h
p
?
o
p
t
i
o
n
=
c
o
m
_
j
o
m
r
e
s
&
t
a
s
k
=
s
m
s
_
c
l
i
c
k
a
t
e
l
l
_
c
a
l
l
b
a
c
k
 
i
 
u
n
 
i
d
e
n
t
i
f
i
c
a
d
o
r
 
d
'
u
s
u
a
r
i
 
i
 
c
o
n
t
r
a
s
e
n
y
a
.
 
<
b
r
/
>

S
i
 
e
s
 
r
e
g
i
s
t
r
a
 
m
Ã
©
s
 
d
'
u
n
a
 
c
o
n
n
e
x
i
Ã
³
 
d
e
 
l
a
 
A
P
I
,
 
e
l
 
n
o
m
 
d
e
 
l
a
 
d
e
s
c
r
i
p
c
i
Ã
³
 
q
u
e
 
h
a
 
i
n
t
r
o
d
u
Ã
¯
t
 
p
e
r
 
a
 
c
a
d
a
 
u
n
 
h
a
 
d
e
 
s
e
r
 
Ã
º
n
i
c
 
-
 
n
o
 
e
s
 
p
o
t
 
t
e
n
i
r
 
m
Ã
º
l
t
i
p
l
e
s
 
A
P
I
s
 
a
m
b
 
e
l
 
m
a
t
e
i
x
 
n
o
m
 
<
b
r
/
>
.

D
e
s
p
r
Ã
©
s
 
d
'
e
n
v
i
a
r
 
e
l
 
f
o
r
m
u
l
a
r
i
,
 
l
e
s
 
s
e
v
e
s
 
d
a
d
e
s
 
d
'
a
u
t
e
n
t
i
c
a
c
i
Ã
³
 
e
s
 
m
o
s
t
r
a
r
Ã
 
n
,
 
i
n
c
l
u
Ã
¯
d
a
 
l
a
 
i
d
e
n
t
i
f
i
c
a
c
i
Ã
³
 
Ã
º
n
i
c
a
 
d
e
 
c
a
d
a
 
c
o
n
n
e
x
i
Ã
³
 
d
e
 
l
a
 
A
P
I
 
(
a
p
i
_
i
d
)
.
 
A
q
u
e
s
t
e
s
 
d
a
d
e
s
 
d
'
a
u
t
e
n
t
i
c
a
c
i
Ã
³
 
e
s
 
r
e
q
u
e
r
e
i
x
e
n
 
q
u
a
n
 
e
s
 
c
o
n
n
e
c
t
a
 
a
 
l
a
 
p
a
s
a
r
e
l
Â
·
l
a
 
C
l
i
c
k
a
t
e
l
l
 
p
e
r
 
a
 
e
n
v
i
a
r
 
u
n
 
m
i
s
s
a
t
g
e
.
 
<
b
r
/
>

<
b
r
/
>

U
t
i
l
i
t
z
i
 
e
l
 
s
e
u
 
n
o
m
 
d
'
u
s
u
a
r
i
,
 
c
o
n
t
r
a
s
e
n
y
a
 
i
 
a
p
i
_
i
d
 
p
e
r
 
a
 
o
m
p
l
i
r
 
e
l
s
 
c
a
m
p
s
 
a
n
t
e
r
i
o
r
s
.

<
b
r
/
>

<
b
r
/
>

"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
J
R
C
O
N
F
I
G
_
G
L
O
B
A
L
C
U
R
R
E
N
C
Y
Y
E
S
N
O
'
,
 
'
U
t
i
l
i
t
z
a
r
 
m
o
n
e
d
a
 
g
l
o
b
a
l
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
J
R
C
O
N
F
I
G
_
G
L
O
B
A
L
C
U
R
R
E
N
C
Y
Y
E
S
N
O
_
D
E
S
C
'
,
 
'
P
o
s
i
 
a
i
x
Ã
²
 
e
n
 
s
Ã
­
 
p
e
r
 
f
o
r
Ã
§
a
r
 
t
o
t
e
s
 
l
e
s
 
p
r
o
p
i
e
t
a
t
s
 
q
u
e
 
u
t
i
l
i
t
z
i
n
 
l
a
 
m
a
t
e
i
x
a
 
m
o
n
e
d
a
 
(
e
x
.
 
&
 
#
 
8
 
3
 
6
 
4
 
;
)
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
B
O
O
K
I
N
G
F
O
R
M
_
S
H
O
W
D
I
S
A
B
L
E
D
'
,
 
"
M
o
s
t
r
a
r
 
e
l
 
f
o
r
m
u
l
a
r
i
 
L
l
i
s
t
a
 
d
e
 
r
e
s
e
r
v
a
 
d
e
 
l
'
h
a
b
i
t
a
c
i
Ã
³
 
a
c
c
e
s
s
i
b
l
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
B
O
O
K
I
N
G
F
O
R
M
_
S
H
O
W
M
A
X
P
E
O
P
L
E
'
,
 
'
M
o
s
t
r
a
r
 
e
l
 
f
o
r
m
u
l
a
r
i
 
L
l
i
s
t
a
 
d
e
 
r
e
s
e
r
v
a
 
M
Ã
 
x
i
m
s
 
o
c
u
p
a
n
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
H
O
R
I
Z
R
O
O
M
S
L
I
S
T
_
E
S
T
I
M
A
T
E
W
A
R
N
I
N
G
'
,
 
"
T
i
n
g
u
i
 
e
n
 
c
o
m
p
t
e
 
q
u
e
 
e
l
s
 
p
r
e
u
s
 
d
'
h
a
b
i
t
a
c
i
Ã
³
 
i
n
d
i
c
a
t
s
 
s
Ã
³
n
 
e
s
t
i
m
a
c
i
o
n
s
 
i
 
e
l
 
p
r
e
u
 
t
o
t
a
l
 
d
e
 
l
a
 
r
e
s
e
r
v
a
 
n
o
 
e
s
 
c
a
l
c
u
l
a
r
Ã
 
 
f
i
n
s
 
q
u
e
 
h
a
g
i
 
a
f
e
g
i
t
 
u
n
a
 
h
a
b
i
t
a
c
i
Ã
³
 
o
 
h
a
b
i
t
a
c
i
o
n
s
 
a
 
l
a
 
s
e
v
a
 
s
e
l
e
c
c
i
Ã
³
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
U
B
S
C
R
I
P
T
I
O
N
S
_
P
A
C
K
A
G
E
S
_
T
I
T
L
E
'
,
 
'
S
u
s
c
r
i
p
c
i
Ã
³
 
p
a
q
u
e
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
U
B
S
C
R
I
P
T
I
O
N
S
_
P
A
C
K
A
G
E
S
_
N
A
M
E
'
,
 
'
N
o
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
U
B
S
C
R
I
P
T
I
O
N
S
_
P
A
C
K
A
G
E
S
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
D
e
s
c
r
i
p
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
U
B
S
C
R
I
P
T
I
O
N
S
_
P
A
C
K
A
G
E
S
_
P
U
B
L
I
S
H
E
D
'
,
 
'
P
u
b
l
i
c
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
U
B
S
C
R
I
P
T
I
O
N
S
_
P
A
C
K
A
G
E
S
_
F
U
L
L
A
M
O
U
N
T
'
,
 
'
I
m
p
o
r
t
 
t
o
t
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
U
B
S
C
R
I
P
T
I
O
N
S
_
P
A
C
K
A
G
E
S
_
P
R
O
P
E
R
T
Y
L
I
M
I
T
'
,
 
'
L
Ã
­
m
i
t
 
p
r
o
p
i
e
t
a
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
U
B
S
C
R
I
P
T
I
O
N
S
_
P
A
C
K
A
G
E
S
_
S
U
B
S
C
R
I
B
E
'
,
 
"
S
u
b
s
c
r
i
u
r
e
'
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
U
B
S
C
R
I
P
T
I
O
N
S
_
U
S
E
'
,
 
'
U
t
i
l
i
t
z
i
 
l
a
 
f
u
n
c
i
o
n
a
l
i
t
a
t
 
d
e
 
m
a
n
e
i
g
 
d
e
 
s
u
b
s
c
r
i
p
c
i
o
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
N
E
W
U
S
E
R
'
,
 
'
C
r
e
a
r
 
n
o
u
 
u
s
u
a
r
i
 
e
n
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
N
E
W
U
S
E
R
_
D
E
S
C
'
,
 
"
C
r
e
a
r
 
n
o
u
 
c
o
m
p
t
e
 
d
'
u
s
u
a
r
i
 
e
n
 
u
s
u
a
r
i
s
 
n
o
 
r
e
g
i
s
t
r
a
t
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
L
I
C
K
T
O
R
E
G
I
S
T
E
R
'
,
 
'
F
a
g
i
 
c
l
i
c
 
a
q
u
Ã
­
 
p
e
r
 
a
 
r
e
g
i
s
t
r
a
r
 
l
a
 
s
e
v
a
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
S
U
B
J
E
C
T
'
,
 
"
G
r
Ã
 
c
i
a
s
 
p
e
r
 
l
a
 
s
e
v
a
 
r
e
s
e
r
v
a
 
-
 
s
e
g
u
e
i
x
i
 
n
o
u
s
 
d
e
t
a
l
l
s
 
d
'
u
s
u
a
r
i
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
L
A
T
L
O
N
G
_
D
E
S
C
'
,
 
'
U
t
i
l
i
t
z
i
 
e
l
 
s
e
u
 
r
a
t
o
l
Ã
­
 
p
e
r
 
d
e
s
p
l
a
Ã
§
a
r
-
s
e
 
p
e
l
 
m
a
p
a
,
 
i
 
a
r
r
o
s
s
e
g
u
i
 
e
l
 
p
u
n
t
e
r
 
a
 
l
a
 
l
o
c
a
l
i
t
z
a
c
i
Ã
³
 
d
e
 
l
a
 
s
e
v
a
 
p
r
o
p
i
e
t
a
t
 
p
e
r
 
a
 
i
n
d
i
c
a
r
 
l
a
 
s
e
v
a
 
l
a
t
i
t
u
d
 
i
 
l
o
n
g
i
t
u
d
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
T
R
O
L
P
A
N
E
L
'
,
 
'
P
a
n
e
l
l
 
d
e
 
c
o
n
t
r
o
l
'
)
;

/
/
 
J
o
m
r
e
s
 
v
4
.
2

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
N
A
G
E
R
_
S
H
O
W
I
N
V
O
I
C
E
'
,
 
'
M
o
s
t
r
a
r
 
F
a
c
t
u
r
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
N
A
G
E
R
_
S
H
O
W
I
N
V
O
I
C
E
S
'
,
 
'
M
o
s
t
r
a
r
 
F
a
c
t
u
r
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
U
S
E
R
_
L
I
S
T
M
Y
P
R
O
P
E
R
T
Y
'
,
 
'
A
d
e
g
i
r
 
l
a
 
m
e
v
a
 
p
r
o
p
i
e
t
a
t
 
a
 
a
q
u
e
s
t
 
l
l
o
c
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
W
A
R
N
I
N
G
S
_
D
A
N
G
E
R
W
I
L
L
R
O
B
I
N
S
O
N
'
,
 
'
A
l
e
r
t
a
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
U
B
S
C
R
I
P
T
I
O
N
S
_
S
U
B
S
C
R
I
B
I
N
G
_
E
R
R
O
R
_
N
O
P
A
C
K
A
G
E
I
D
'
,
 
'
H
o
 
s
e
n
t
i
m
,
 
p
e
r
Ã
²
 
a
q
u
e
s
t
 
I
D
 
d
e
 
p
a
q
u
e
t
 
n
o
 
e
s
 
r
e
c
o
n
e
i
x
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
S
U
B
S
C
R
I
P
T
I
O
N
S
_
S
U
B
S
C
R
I
B
I
N
G
_
E
R
R
O
R
_
A
L
R
E
A
D
Y
S
U
B
S
C
R
I
B
E
D
T
O
F
R
E
E
B
I
E
'
,
 
'
H
o
 
s
e
n
t
i
m
,
 
v
o
s
t
Ã
¨
 
j
a
 
e
s
t
Ã
 
 
s
u
b
s
c
r
i
t
 
a
 
u
n
 
p
a
q
u
e
t
 
g
r
a
t
u
Ã
¯
t
,
 
v
o
s
t
Ã
¨
 
n
o
 
p
o
t
 
s
u
b
s
c
r
i
u
r
e
 
e
l
 
p
a
q
u
e
t
 
d
e
 
n
o
u
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
Y
O
U
R
B
U
S
I
N
E
S
S
'
,
 
'
L
e
s
 
d
a
d
e
s
 
d
e
l
 
s
e
u
 
n
e
g
o
c
i
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
Y
O
U
R
B
U
S
I
N
E
S
S
_
N
A
M
E
'
,
 
'
N
o
m
 
n
e
g
o
c
i
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
Y
O
U
R
B
U
S
I
N
E
S
S
_
V
A
T
N
O
'
,
 
'
N
Ã
º
m
e
r
o
 
V
A
T
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
Y
O
U
R
B
U
S
I
N
E
S
S
A
D
D
R
E
S
S
'
,
 
'
E
d
i
f
i
c
i
 
n
Ã
º
m
e
r
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
I
N
V
O
I
C
E
_
N
U
M
B
E
R
'
,
 
'
F
a
c
t
u
r
a
 
N
o
.
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
B
L
A
C
K
B
O
O
K
I
N
G
_
D
E
S
C
_
S
R
P
'
,
 
'
S
e
l
e
c
c
i
o
n
i
 
l
e
s
 
d
a
t
e
s
 
e
n
 
q
u
e
 
d
e
s
i
t
j
a
 
a
p
l
i
c
a
r
 
l
a
 
r
e
s
e
r
v
a
 
n
e
g
r
a
.
 
Q
u
a
n
 
h
a
g
i
 
s
e
l
e
c
c
i
o
n
a
t
 
l
e
s
 
d
a
t
e
s
 
a
p
r
o
p
i
a
d
e
s
,
 
f
a
g
i
 
c
l
i
c
 
e
n
 
e
l
 
b
o
t
Ã
³
 
"
A
p
l
i
c
a
r
"
 
p
e
r
 
a
 
c
o
m
p
r
o
v
a
t
 
l
a
 
d
i
s
p
o
n
i
b
i
l
i
t
a
t
.
 
<
b
r
/
>
 

<
b
r
/
>
 

S
i
 
l
a
 
p
r
o
p
i
e
t
a
t
 
t
Ã
©
 
u
n
a
 
o
 
m
Ã
©
s
 
r
e
s
e
r
v
e
s
 
p
e
r
 
a
l
 
p
e
r
Ã
­
o
d
e
 
d
e
s
i
t
j
a
t
,
 
l
l
a
v
o
r
s
 
v
o
s
t
Ã
¨
 
n
o
 
s
e
r
Ã
 
 
c
a
p
a
Ã
§
 
d
e
 
f
e
r
 
l
a
 
r
e
s
e
r
v
a
 
n
e
g
r
a
 
f
i
n
s
 
q
u
e
 
l
e
s
 
a
l
t
r
e
s
 
r
e
s
e
r
v
e
s
/
r
e
s
e
r
v
e
s
 
n
e
g
r
e
s
,
 
h
a
g
i
n
 
s
i
g
u
 
c
a
n
c
e
l
Â
·
l
a
d
e
s
/
r
e
t
i
r
a
d
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
B
L
A
C
K
B
O
O
K
I
N
G
_
S
R
P
_
C
A
N
N
O
T
B
L
A
C
K
B
O
O
K
'
,
 
'
H
o
 
s
e
n
t
i
m
,
 
n
o
 
p
o
t
 
f
e
r
 
r
e
s
e
r
v
a
 
n
e
g
r
a
 
e
n
 
a
q
u
e
s
t
a
 
p
r
o
p
i
e
t
a
t
 
a
q
u
e
s
t
e
s
 
d
a
t
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
B
L
A
C
K
B
O
O
K
I
N
G
_
S
R
P
_
C
A
N
B
L
A
C
K
B
O
O
K
'
,
 
'
P
o
t
 
f
e
r
 
r
e
s
e
r
v
e
s
 
n
e
g
r
e
s
 
p
e
r
 
a
 
a
q
u
e
s
t
e
s
 
d
a
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
W
A
R
N
I
N
G
S
_
P
E
R
P
E
R
S
O
N
P
E
R
N
I
G
H
T
_
N
O
G
U
E
S
T
T
Y
P
E
S
'
,
 
"
L
a
 
s
e
v
a
 
p
r
o
p
i
e
t
a
t
 
e
s
t
Ã
 
 
c
o
n
f
i
g
u
r
a
d
a
 
p
e
r
 
a
 
c
a
r
r
e
g
a
r
 
p
e
r
 
p
e
r
s
o
n
a
 
p
e
r
 
n
i
t
,
 
p
e
r
Ã
²
 
v
o
s
t
Ã
¨
 
n
o
 
t
Ã
©
 
c
a
p
 
t
i
p
u
s
 
d
'
e
v
a
l
u
a
c
i
Ã
³
 
c
r
e
a
d
a
 
o
 
p
u
b
l
i
c
a
d
a
,
 
s
i
 
u
s
 
p
l
a
u
,
 
c
r
e
a
r
 
i
 
p
u
b
l
i
c
a
r
 
u
n
 
o
 
m
Ã
©
s
 
t
i
p
u
s
 
d
'
h
o
s
t
e
s
.
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
W
A
R
N
I
N
G
S
_
T
A
R
I
F
F
S
_
N
O
T
A
R
I
F
F
S
'
,
 
'
N
o
 
t
Ã
©
 
c
a
p
 
t
a
r
i
f
a
 
c
o
n
f
i
g
u
r
a
d
a
 
e
n
c
a
r
a
,
 
v
o
s
t
Ã
¨
 
n
o
 
p
o
d
r
Ã
 
 
r
e
a
l
i
t
z
a
r
 
c
a
p
 
t
i
p
u
s
 
d
e
 
r
e
s
e
r
v
a
 
p
e
r
 
a
 
l
a
 
s
e
v
a
 
p
r
o
p
i
e
t
a
t
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
D
I
T
I
N
G
M
O
D
E
_
O
N
'
,
 
'
M
o
d
e
 
e
d
i
c
i
Ã
³
 
a
c
t
i
u
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
D
I
T
I
N
G
M
O
D
E
_
O
F
F
'
,
 
'
M
o
d
e
 
e
d
i
c
i
Ã
³
 
d
e
s
a
c
t
i
v
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
D
E
P
O
S
I
T
_
C
H
A
R
G
E
D
E
P
O
S
I
T
_
V
A
R
I
A
B
L
E
'
,
 
'
C
a
r
r
e
g
a
r
 
d
i
p
Ã
²
s
i
t
 
v
a
r
i
a
b
l
e
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
D
E
P
O
S
I
T
_
C
H
A
R
G
E
D
E
P
O
S
I
T
_
V
A
R
I
A
B
L
E
_
D
E
S
C
'
,
 
"
D
i
p
Ã
²
s
i
t
s
 
v
a
r
i
a
b
l
e
s
 
p
e
r
m
e
t
 
d
e
f
i
n
i
r
 
s
i
 
l
i
 
a
g
r
a
d
a
r
i
a
 
c
o
b
r
a
r
 
l
a
 
t
o
t
a
l
i
t
a
t
 
d
e
 
l
a
 
r
e
s
e
r
v
a
 
s
i
 
l
a
 
d
a
t
a
 
d
'
a
r
r
i
b
a
d
a
 
e
s
t
Ã
 
 
a
 
N
 
d
i
e
s
 
d
e
 
'
a
v
u
i
'
.
 
E
s
t
a
b
l
e
i
x
i
 
a
q
u
e
s
t
a
 
o
p
c
i
Ã
³
 
e
n
 
S
Ã
­
 
p
e
r
 
a
c
t
i
v
a
r
 
l
a
 
f
u
n
c
i
Ã
³
,
 
e
 
i
n
t
r
o
d
u
e
i
x
i
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
d
i
e
s
 
m
Ã
©
s
 
e
n
d
a
v
a
n
t
,
 
a
i
x
Ã
­
 
p
e
r
 
e
x
e
m
p
l
e
 
s
i
 
e
l
 
d
Ã
­
a
 
d
'
a
r
r
i
b
a
d
a
 
Ã
©
s
 
e
n
 
e
l
 
t
e
r
m
i
n
i
 
d
e
 
6
0
 
d
i
e
s
,
 
l
l
a
v
o
r
s
 
c
o
m
 
q
u
a
n
t
i
t
a
t
 
d
e
l
 
d
i
p
Ã
²
s
i
t
 
s
e
r
Ã
 
 
c
a
r
r
e
g
a
t
 
l
'
i
m
p
o
r
t
 
t
o
t
a
l
,
 
d
e
l
 
c
o
n
t
r
a
r
i
 
l
a
 
q
u
a
n
t
i
t
a
t
 
e
s
 
b
a
s
a
r
Ã
 
 
e
n
 
e
l
 
d
i
p
Ã
²
s
i
t
 
d
e
 
l
e
s
 
o
p
c
i
o
n
s
 
c
o
n
f
i
g
u
r
a
d
e
s
 
a
n
t
e
r
i
o
r
m
e
n
t
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
D
E
P
O
S
I
T
_
C
H
A
R
G
E
D
E
P
O
S
I
T
_
N
U
M
B
E
R
O
F
D
A
Y
S
'
,
 
"
E
l
 
n
Ã
º
m
e
r
o
 
d
e
 
d
i
e
s
,
 
e
n
 
e
l
 
q
u
e
 
l
'
i
m
p
o
r
t
 
t
o
t
a
l
 
s
e
r
Ã
 
 
c
o
b
r
a
t
 
c
o
m
 
d
i
p
Ã
²
s
i
t
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
R
M
A
T
I
O
N
_
E
M
A
I
L
_
S
E
N
T
'
,
 
'
E
m
a
i
l
 
d
e
 
c
o
n
f
i
r
m
a
c
i
Ã
³
 
h
a
 
s
i
g
u
t
 
e
n
v
i
a
t
.
 
V
o
s
t
Ã
¨
 
p
o
t
 
t
a
n
c
a
r
 
a
q
u
e
s
t
a
 
f
i
n
e
s
t
r
a
 
a
r
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
_
A
G
E
N
T
'
,
 
"
C
o
n
t
a
c
t
e
 
a
m
b
 
l
'
a
g
e
n
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
I
N
V
O
I
C
E
_
M
A
R
K
A
S
P
A
I
D
'
,
 
'
M
a
r
c
a
r
 
f
a
c
t
u
r
a
 
c
o
m
 
p
a
g
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
I
N
V
O
I
C
E
_
M
A
R
K
E
D
A
S
P
A
I
D
'
,
 
'
F
a
c
t
u
r
a
 
m
a
r
c
a
d
a
 
c
o
m
 
p
a
g
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
P
I
K
E
Y
_
R
E
M
A
K
E
'
,
 
'
F
e
r
 
n
o
v
a
 
A
P
I
 
K
e
y
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
I
N
G
L
E
P
R
O
P
E
R
T
Y
I
N
S
T
A
L
L
A
T
I
O
N
_
T
I
T
L
E
'
,
 
"
Ã
‰
s
 
u
n
a
 
i
n
s
t
a
l
Â
·
l
a
c
i
Ã
³
 
d
'
u
n
a
 
s
o
l
a
 
p
r
o
p
i
e
t
a
t
?
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
I
N
G
L
E
P
R
O
P
E
R
T
Y
I
N
S
T
A
L
L
A
T
I
O
N
_
D
E
S
C
'
,
 
"
S
i
 
a
q
u
e
s
t
a
 
o
p
c
i
Ã
³
 
e
s
t
Ã
 
 
e
s
t
a
b
l
i
d
a
 
e
n
 
S
Ã
­
,
 
l
'
i
n
t
e
r
f
a
z
 
J
o
m
r
e
s
 
a
 
u
s
u
a
r
i
s
 
n
o
 
a
u
t
o
r
i
t
z
a
t
s
 
e
s
 
s
i
m
p
l
i
f
i
c
a
 
e
n
o
r
m
e
m
e
n
t
.
 
P
e
r
 
d
e
f
e
c
t
e
 
l
e
s
 
c
r
i
d
e
s
 
a
 
J
o
m
r
e
s
,
 
e
n
 
c
o
m
p
t
e
s
 
d
e
 
s
e
r
 
d
o
n
a
d
e
s
 
c
o
m
 
u
n
a
 
l
l
i
s
t
a
 
d
e
 
l
e
s
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
q
u
e
s
,
 
n
o
m
Ã
©
s
 
p
o
r
t
a
r
Ã
 
 
a
l
 
c
l
i
e
n
t
 
a
 
l
a
 
c
e
n
t
r
a
l
 
d
e
 
r
e
s
e
r
v
e
s
 
p
e
r
 
a
 
l
a
 
p
r
i
m
e
r
a
 
p
r
o
p
i
e
t
a
t
 
e
n
 
e
l
 
s
i
s
t
e
m
a
.
 
A
d
m
i
n
i
s
t
r
a
d
o
r
s
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
 
t
a
m
p
o
c
 
p
o
d
r
a
n
 
v
e
u
r
e
 
e
l
 
b
o
t
Ã
³
 
D
e
t
a
l
l
s
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
 
d
e
 
v
i
s
t
a
 
p
r
Ã
¨
v
i
a
 
o
 
e
l
 
b
o
t
Ã
³
 
A
f
e
g
i
r
 
n
o
v
a
 
p
r
o
p
i
e
t
a
t
.
 
I
d
e
a
l
 
s
i
 
n
o
m
Ã
©
s
 
v
o
l
 
u
n
a
 
l
l
i
s
t
a
 
d
e
 
b
Ã
©
n
s
 
i
 
t
e
n
i
r
 
r
e
s
e
r
v
e
s
 
p
e
r
 
a
 
e
l
l
e
s
.
<
b
r
/
>
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
B
A
L
A
N
C
E
_
P
A
Y
M
E
N
T
'
,
 
'
B
a
l
a
n
Ã
§
 
d
e
 
p
a
g
a
m
e
n
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
W
A
R
N
I
N
G
S
_
G
L
O
B
A
L
E
D
I
T
I
N
G
M
O
D
E
'
,
 
"
T
i
n
g
u
i
 
e
n
 
c
o
m
p
t
e
 
v
o
s
t
Ã
¨
 
e
s
t
Ã
 
 
u
t
i
l
i
t
z
a
n
t
 
e
l
 
m
o
d
e
 
d
'
e
d
i
c
i
Ã
³
 
a
m
b
 
e
l
 
m
o
d
e
 
g
l
o
b
a
l
 
d
'
e
d
i
c
i
Ã
³
 
h
a
b
i
l
i
t
a
t
.
 
A
i
x
Ã
²
 
e
s
t
Ã
 
 
b
Ã
©
 
s
i
 
v
o
s
t
Ã
¨
 
s
a
p
 
e
l
 
q
u
e
 
s
i
g
n
i
f
i
c
a
 
e
l
 
m
o
d
e
 
d
'
e
d
i
c
i
Ã
³
 
g
l
o
b
a
l
.
 
S
i
 
n
o
 
e
s
t
Ã
 
 
s
e
g
u
r
 
s
i
 
h
a
 
d
'
u
t
i
l
i
t
z
a
r
 
J
o
m
r
e
s
 
d
'
a
q
u
e
s
t
a
 
m
a
n
e
r
a
,
 
s
i
 
u
s
 
p
l
a
u
,
 
c
o
n
s
u
l
t
i
 
<
a
 
h
r
e
f
=
'
h
t
t
p
:
/
/
w
w
w
.
j
o
m
r
e
s
.
n
e
t
/
m
a
n
u
a
l
/
d
e
v
e
l
o
p
e
r
s
-
g
u
i
d
e
/
5
3
-
c
u
s
t
o
m
i
s
i
n
g
-
j
o
m
r
e
s
/
e
d
i
t
i
n
g
-
l
a
b
e
l
s
-
l
a
n
g
u
a
g
e
s
/
2
6
8
-
e
d
i
t
i
n
g
-
m
o
d
e
'
 
t
a
r
g
e
t
=
'
_
b
l
a
n
k
'
>
e
l
 
m
o
d
e
 
d
'
e
d
i
c
i
Ã
³
 
d
e
 
p
Ã
 
g
i
n
a
 
d
e
l
 
m
a
n
u
a
l
<
/
a
>
 
p
e
r
 
a
 
o
b
t
e
n
i
r
 
m
Ã
©
s
 
i
n
f
o
r
m
a
c
i
Ã
³
 
s
o
b
r
e
 
a
q
u
e
s
t
 
t
e
m
a
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
U
P
P
O
R
T
K
E
Y
'
,
 
'
C
l
a
u
 
d
e
 
S
u
p
o
r
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
U
P
P
O
R
T
K
E
Y
_
D
E
S
C
'
,
 
'
.
E
l
 
s
e
u
 
n
Ã
º
m
e
r
o
 
c
l
a
u
 
d
e
 
s
u
p
o
r
t
 
(
t
a
m
b
Ã
©
 
c
o
n
e
g
u
t
 
c
o
m
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
l
l
i
c
Ã
¨
n
c
i
a
)
.
 
V
o
s
t
Ã
¨
 
n
e
c
e
s
s
i
t
a
r
Ã
 
 
u
n
a
 
l
l
i
c
Ã
¨
n
c
i
a
 
a
c
t
u
a
l
i
t
z
a
d
a
 
p
e
r
 
a
 
p
o
d
e
r
 
d
e
s
c
a
r
r
e
g
a
r
 
l
e
s
 
a
c
t
u
a
l
i
t
z
a
c
i
o
n
s
 
i
 
c
o
m
p
l
e
m
e
n
t
s
 
p
e
r
 
a
 
J
o
m
r
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
E
R
S
O
N
A
L
_
D
I
S
C
O
U
N
T
'
,
 
'
D
e
s
c
o
m
p
t
e
 
p
e
r
s
o
n
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
D
M
I
N
_
R
E
G
I
S
T
R
A
T
I
O
N
_
L
I
M
I
T
P
R
O
P
E
R
T
Y
_
Y
E
S
N
O
'
,
 
'
R
e
g
i
s
t
r
a
r
 
p
r
o
p
i
e
t
a
t
s
 
l
i
m
i
t
a
d
e
s
 
a
 
u
n
 
s
o
l
 
p
a
Ã
­
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
D
M
I
N
_
R
E
G
I
S
T
R
A
T
I
O
N
_
L
I
M
I
T
P
R
O
P
E
R
T
Y
_
Y
E
S
N
O
_
D
E
S
C
'
,
 
"
P
o
t
 
a
s
s
e
g
u
r
a
r
-
s
e
 
q
u
e
 
e
l
s
 
r
e
g
i
s
t
r
e
s
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
 
e
s
 
l
i
m
i
t
e
n
 
a
 
u
n
 
s
o
l
 
p
a
Ã
­
s
 
m
i
t
j
a
n
Ã
§
a
n
t
 
l
'
e
s
t
a
b
l
i
m
e
n
t
 
d
'
a
q
u
e
s
t
a
 
o
p
c
i
Ã
³
 
e
n
 
S
Ã
­
 
i
 
e
s
t
a
b
l
i
r
 
e
l
 
p
a
Ã
­
s
 
e
n
 
l
a
 
s
e
g
Ã
¼
e
n
t
 
o
p
c
i
Ã
³
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
D
M
I
N
_
R
E
G
I
S
T
R
A
T
I
O
N
_
L
I
M
I
T
P
R
O
P
E
R
T
Y
_
C
O
U
N
T
R
Y
'
,
 
'
L
e
s
 
p
r
o
p
i
e
t
a
t
s
 
e
s
t
a
n
 
l
o
c
a
l
i
t
z
a
d
e
s
 
e
n
 
a
q
u
e
s
t
 
p
a
Ã
­
s
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
J
Q
U
E
R
Y
T
H
E
M
E
'
,
 
'
T
e
m
a
 
J
q
u
e
r
y
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
J
Q
U
E
R
Y
T
H
E
M
E
_
D
E
S
C
'
,
 
'
T
r
Ã
¯
i
 
u
n
 
t
e
m
a
 
j
Q
u
e
r
y
 
p
e
r
 
a
 
u
t
i
l
i
t
z
a
r
 
p
e
r
 
a
 
l
e
s
 
p
e
s
t
a
n
y
e
s
 
d
e
l
s
 
d
e
t
a
l
l
s
 
d
e
 
p
r
o
p
i
e
t
a
t
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
N
O
T
O
U
B
L
I
S
H
E
D
'
,
 
'
H
o
 
s
e
n
t
i
m
,
 
p
e
r
Ã
²
 
l
a
 
p
r
o
p
i
e
t
a
t
 
n
o
 
e
s
t
Ã
 
 
d
i
s
p
o
n
i
b
l
e
 
a
c
t
u
a
l
m
e
n
t
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
'
,
 
'
C
o
m
e
n
t
a
r
i
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
T
I
T
L
E
'
,
 
'
T
Ã
­
t
o
l
 
c
o
m
e
n
t
a
r
i
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
D
A
T
E
'
,
 
'
P
u
b
l
i
c
a
t
 
e
n
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
N
O
R
E
V
I
E
W
S
'
,
 
'
E
n
c
a
r
a
 
n
o
 
h
i
 
h
a
 
c
o
m
e
n
t
a
r
i
s
 
p
e
r
 
a
q
u
e
s
t
a
 
p
r
o
p
i
e
t
a
t
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
N
O
R
E
V
I
E
W
S
_
B
E
T
H
E
F
I
R
S
T
'
,
 
'
L
i
 
a
g
r
a
d
a
r
i
a
 
s
e
r
 
e
l
 
p
r
i
m
e
r
 
e
n
 
f
e
r
 
u
n
 
c
o
m
e
n
t
a
r
i
o
 
s
o
b
r
e
 
a
q
u
e
s
t
a
 
p
r
o
p
i
e
t
a
t
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
I
A
G
R
E
E
'
,
 
"
E
s
t
i
c
 
d
'
a
c
o
r
d
 
a
m
b
 
a
q
u
e
s
t
 
c
o
m
e
n
t
a
r
i
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
I
D
I
S
A
G
R
E
E
'
,
 
"
N
o
 
e
s
t
i
c
 
d
'
a
c
o
r
d
 
a
m
b
 
a
q
u
e
s
t
 
c
o
m
e
n
t
a
r
i
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
V
E
R
A
G
E
_
R
A
T
I
N
G
'
,
 
'
V
a
l
o
r
a
c
i
Ã
³
 
m
i
t
j
a
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
T
O
T
A
L
_
V
O
T
E
S
'
,
 
'
V
o
t
s
 
t
o
t
a
l
s
:
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
D
_
R
E
V
I
E
W
'
,
 
'
A
f
e
g
i
r
 
u
n
 
n
o
u
 
c
o
m
e
n
t
a
r
i
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
D
_
R
E
V
I
E
W
_
N
O
T
L
O
G
G
E
D
I
N
'
,
 
'
N
e
c
e
s
s
i
t
a
 
e
s
t
a
r
 
r
e
g
i
s
t
r
a
t
 
p
e
r
 
e
n
v
i
a
r
 
u
n
 
c
o
m
e
n
t
a
r
i
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
R
E
V
I
E
W
B
O
D
Y
'
,
 
"
D
i
g
u
i
'
n
s
 
q
u
Ã
¨
 
o
p
i
n
a
 
d
'
a
q
u
e
s
t
 
e
s
t
a
b
l
i
m
e
n
t
 
:
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
R
E
V
I
E
W
B
O
D
Y
_
S
A
I
D
'
,
 
'
A
q
u
e
s
t
 
c
l
i
e
n
t
 
e
n
s
 
v
a
 
d
i
r
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
P
R
O
S
'
,
 
'
P
o
r
s
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
C
O
N
S
'
,
 
'
C
o
n
t
r
e
s
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
S
U
B
M
I
T
T
E
D
D
A
T
E
'
,
 
'
E
n
v
i
a
t
 
e
l
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
L
R
E
A
D
Y
R
E
V
I
E
W
E
D
'
,
 
'
V
o
s
t
Ã
¨
 
j
a
 
h
a
 
r
e
a
l
i
t
z
a
t
 
u
n
 
c
o
m
e
n
t
a
r
i
 
s
o
b
r
e
 
a
q
u
e
s
t
a
 
p
r
o
p
i
e
t
a
t
,
 
n
o
 
p
o
t
 
p
u
b
l
i
c
a
r
 
u
n
 
a
l
t
r
e
 
c
o
m
e
n
t
a
r
i
 
s
o
b
r
e
 
e
l
l
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
C
A
N
N
O
T
R
E
V
I
E
W
'
,
 
'
H
o
 
s
e
n
t
i
m
,
 
p
e
r
Ã
²
 
n
o
 
e
s
 
p
e
r
m
e
t
 
p
u
b
l
i
c
a
r
 
c
o
m
e
n
t
a
r
i
s
 
e
n
 
a
q
u
e
s
t
 
l
l
o
c
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
C
L
I
C
K
T
O
S
H
O
W
'
,
 
'
C
l
i
c
k
 
p
e
r
 
m
o
s
t
r
a
r
 
c
o
m
e
n
t
a
r
i
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
N
U
M
B
E
R
_
A
G
R
E
E
_
W
I
T
H
R
E
V
I
E
W
'
,
 
"
 
u
s
u
a
r
i
s
 
d
'
a
c
o
r
d
 
a
m
b
 
a
q
u
e
s
t
 
c
o
m
e
n
t
a
r
i
.
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
N
U
M
B
E
R
_
D
I
S
A
G
R
E
E
_
W
I
T
H
R
E
V
I
E
W
'
,
 
'
 
u
s
u
a
r
i
s
 
e
n
 
d
e
s
a
c
o
r
d
 
a
m
b
 
a
q
u
e
s
t
 
c
o
m
e
n
t
a
r
i
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
N
U
M
B
E
R
_
A
G
R
E
E
_
W
I
T
H
R
E
V
I
E
W
_
S
I
N
G
U
L
A
R
'
,
 
"
 
u
s
u
a
r
i
 
d
'
a
c
o
r
d
 
a
m
b
 
a
q
u
e
s
t
 
c
o
m
e
n
t
a
r
i
.
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
N
U
M
B
E
R
_
D
I
S
A
G
R
E
E
_
W
I
T
H
R
E
V
I
E
W
_
S
I
N
G
U
L
A
R
'
,
 
'
u
s
u
a
r
i
 
e
n
 
d
e
s
a
c
o
r
d
 
a
m
b
 
a
q
u
e
s
t
 
c
o
m
e
n
t
a
r
i
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
T
H
A
N
K
S
_
F
O
R
_
C
O
N
F
I
R
M
'
,
 
"
G
r
Ã
 
c
i
e
s
 
p
e
r
 
c
o
m
p
a
r
t
i
r
 
l
a
 
s
e
v
a
 
o
p
i
n
i
Ã
³
 
d
'
a
q
u
e
s
t
 
c
o
m
e
n
t
a
r
i
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
L
R
E
A
D
Y
_
C
O
N
F
I
R
M
E
D
'
,
 
"
G
r
Ã
 
c
i
e
s
,
 
p
e
r
Ã
²
 
j
a
 
h
a
 
c
o
m
p
a
r
t
i
t
 
l
'
o
p
i
n
i
Ã
³
 
d
'
a
q
u
e
s
t
 
c
o
m
e
n
t
a
r
i
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
C
O
M
P
L
E
T
E
A
L
L
F
I
E
L
D
S
'
,
 
"
S
i
 
u
s
 
p
l
a
u
 
a
s
s
e
g
Ã
º
r
i
'
s
 
d
e
 
q
u
e
 
t
o
t
s
 
e
l
s
 
c
a
m
p
s
 
e
s
t
a
n
 
c
o
r
r
e
c
t
a
m
e
n
t
 
c
o
m
p
l
i
m
e
n
t
a
t
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
D
R
E
V
I
E
W
_
E
R
R
O
R
_
T
I
T
L
E
'
,
 
'
S
i
 
u
s
 
p
l
a
u
,
 
r
e
s
u
m
e
i
x
i
 
e
l
 
s
e
u
 
c
o
m
e
n
t
a
r
i
 
i
n
t
r
o
d
u
Ã
¯
n
t
 
u
n
 
t
Ã
­
t
o
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
D
R
E
V
I
E
W
_
E
R
R
O
R
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
S
i
 
u
s
 
p
l
a
u
,
 
i
n
t
r
o
d
u
e
i
x
i
 
u
n
 
c
o
m
e
n
t
a
r
i
 
m
Ã
©
s
 
c
o
m
p
l
e
t
 
e
n
 
e
l
 
q
u
a
d
r
e
 
d
e
 
d
e
s
c
r
i
p
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
D
R
E
V
I
E
W
_
E
R
R
O
R
_
P
R
O
S
'
,
 
"
S
i
 
u
s
 
p
l
a
u
,
 
i
n
t
r
o
d
u
e
i
x
i
 
l
e
s
 
e
x
p
e
r
i
Ã
¨
n
c
i
e
s
 
p
o
s
i
t
i
v
e
s
 
c
o
m
 
a
 
c
l
i
e
n
t
 
d
'
a
q
u
e
s
t
 
e
s
t
a
b
l
i
m
e
n
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
D
R
E
V
I
E
W
_
E
R
R
O
R
_
C
O
N
S
'
,
 
"
S
i
 
u
s
 
p
l
a
u
,
 
i
n
t
r
o
d
u
e
i
x
i
 
q
u
a
l
s
e
v
o
l
 
e
x
p
e
r
i
Ã
¨
n
c
i
a
 
n
e
g
a
t
i
v
a
 
q
u
e
 
s
'
h
a
g
i
 
t
r
o
b
a
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
D
R
E
V
I
E
W
_
E
R
R
O
R
_
R
A
T
I
N
G
_
1
'
,
 
"
S
i
 
u
a
 
p
l
a
u
,
 
q
u
a
l
i
f
i
q
u
i
 
l
'
a
m
a
b
i
l
i
d
a
d
 
q
u
e
 
h
a
 
r
e
b
u
t
 
p
e
r
 
p
a
r
t
 
d
e
l
 
p
e
r
s
o
n
a
l
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
D
R
E
V
I
E
W
_
E
R
R
O
R
_
R
A
T
I
N
G
_
2
'
,
 
"
S
i
 
u
s
 
p
l
a
u
,
 
q
u
i
n
a
 
Ã
©
s
 
l
a
 
s
e
v
a
 
v
a
l
o
r
a
c
i
Ã
³
 
d
e
 
l
'
e
s
t
a
b
l
i
m
e
n
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
D
R
E
V
I
E
W
_
E
R
R
O
R
_
R
A
T
I
N
G
_
3
'
,
 
"
S
i
 
u
s
 
p
l
a
u
,
 
q
u
i
n
a
 
Ã
©
s
 
l
a
 
s
e
v
a
 
o
p
i
n
i
Ã
³
 
s
o
b
r
e
 
l
a
 
n
e
t
e
d
a
t
 
d
e
 
l
'
e
s
t
a
b
l
i
m
e
n
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
D
R
E
V
I
E
W
_
E
R
R
O
R
_
R
A
T
I
N
G
_
4
'
,
 
"
S
i
 
u
s
 
p
l
a
u
,
 
q
u
a
l
i
f
i
q
u
i
 
l
'
a
l
l
o
t
j
a
m
e
n
t
.
 
E
r
a
 
c
Ã
²
m
o
d
e
 
o
 
i
n
c
Ã
²
m
o
d
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
D
R
E
V
I
E
W
_
E
R
R
O
R
_
R
A
T
I
N
G
_
5
'
,
 
'
S
i
 
u
s
 
p
l
a
u
,
 
p
r
o
p
o
r
c
i
o
n
i
 
l
a
 
s
e
v
a
 
o
p
i
n
i
Ã
³
 
s
o
b
r
e
 
l
a
 
r
e
l
a
c
i
Ã
³
 
Q
u
a
l
i
t
a
t
-
P
r
e
u
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
D
R
E
V
I
E
W
_
E
R
R
O
R
_
R
A
T
I
N
G
_
6
'
,
 
'
S
i
 
u
s
 
p
l
a
u
,
 
v
a
l
o
r
i
 
e
l
s
 
s
e
r
v
e
i
s
 
o
f
e
r
i
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
D
R
E
V
I
E
W
_
S
U
M
M
A
R
Y
'
,
 
'
R
e
v
i
s
i
Ã
³
 
d
e
l
 
c
o
m
e
n
t
a
r
i
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
D
R
E
V
I
E
W
_
M
O
R
E
D
E
T
A
I
L
'
,
 
'
L
a
 
s
e
v
a
 
e
x
p
e
r
i
Ã
¨
n
c
i
a
 
e
n
 
m
a
j
o
r
 
d
e
t
a
l
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
T
H
A
N
K
S
_
F
O
R
_
R
E
V
I
E
W
'
,
 
'
G
r
Ã
 
c
i
e
s
 
p
e
r
 
e
n
v
i
a
r
-
n
o
s
 
l
a
 
s
e
v
a
 
o
p
i
n
i
Ã
³
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
T
H
A
N
K
S
_
F
O
R
_
R
E
V
I
E
W
_
M
O
D
E
R
A
T
E
D
'
,
 
'
G
r
Ã
 
c
i
e
s
 
p
e
r
 
e
n
v
i
a
r
-
n
o
s
 
l
a
 
s
e
v
a
 
o
p
i
n
i
Ã
³
.
 
S
e
r
Ã
 
 
p
u
b
l
i
c
a
d
a
 
e
n
 
b
r
e
u
 
p
e
r
 
u
n
 
d
e
l
s
 
n
o
s
t
r
e
s
 
m
o
d
e
r
a
d
o
r
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
M
I
N
_
C
O
N
T
R
O
L
'
,
 
'
U
t
i
l
i
t
z
a
r
 
l
a
 
f
u
n
c
i
Ã
³
 
d
e
 
c
o
m
e
n
t
a
r
i
s
 
d
e
 
J
o
m
r
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
M
I
N
_
A
U
T
O
P
U
B
L
I
S
H
'
,
 
'
P
u
b
l
i
c
a
r
 
a
u
t
o
m
Ã
 
t
i
c
a
m
e
n
t
 
e
l
s
 
c
o
m
e
n
t
a
r
i
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
M
I
N
_
A
U
T
O
P
U
B
L
I
S
H
_
D
E
S
C
'
,
 
"
S
i
 
s
'
e
s
t
a
b
l
e
i
x
 
N
o
 
h
a
u
r
Ã
 
 
d
e
 
p
u
b
l
i
c
a
r
 
m
a
n
u
a
l
m
e
n
t
 
e
l
s
 
c
o
m
e
n
t
a
r
i
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
M
I
N
_
T
E
S
T
M
O
D
E
'
,
 
'
A
j
u
s
t
a
r
 
e
l
 
m
o
d
e
 
t
e
s
t
 
e
n
 
e
l
s
 
c
o
m
e
n
t
a
r
i
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
M
I
N
_
T
E
S
T
M
O
D
E
_
D
E
S
C
'
,
 
'
N
o
r
m
a
l
m
e
n
t
 
e
l
s
 
A
d
m
i
n
i
s
t
r
a
d
o
r
s
 
d
e
 
P
r
o
p
i
e
t
a
t
 
n
o
 
p
o
d
e
n
 
f
e
r
 
c
o
m
e
n
t
a
r
i
s
.
 
N
a
t
u
r
a
l
m
e
n
t
 
a
i
x
Ã
²
 
n
o
 
Ã
©
s
 
l
o
 
i
d
e
a
l
 
e
n
 
u
n
 
l
l
o
c
 
e
n
 
f
u
n
c
i
o
n
a
m
e
n
t
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
M
I
N
_
P
R
O
P
E
R
T
Y
L
I
S
T
I
N
F
O
'
,
 
"
A
q
u
e
s
t
a
 
Ã
©
s
 
u
n
a
 
l
l
i
s
t
a
 
d
e
 
t
o
t
e
s
 
l
e
s
 
p
r
o
p
i
e
t
a
t
s
.
 
P
e
r
 
a
 
v
e
u
r
e
 
e
l
s
 
c
o
m
e
n
t
a
r
i
s
 
d
'
u
n
a
 
p
r
o
p
i
e
t
a
t
 
p
r
e
m
i
 
e
n
 
e
l
l
a
.
 
D
e
s
d
e
 
a
q
u
Ã
­
 
p
o
d
r
Ã
 
 
p
u
b
l
i
c
a
r
 
o
 
b
o
r
r
a
r
 
c
o
m
e
n
t
a
r
i
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
M
I
N
_
N
U
M
B
E
R
U
N
P
U
B
L
I
S
H
E
D
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
c
o
m
e
n
t
a
r
i
s
 
n
o
 
p
u
b
l
i
c
a
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
M
I
N
_
N
U
M
B
E
R
T
O
T
A
L
'
,
 
'
T
o
t
a
l
 
c
o
m
e
n
t
a
r
i
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
M
I
N
_
P
U
B
L
I
S
H
R
E
V
I
E
W
'
,
 
'
P
u
b
l
i
c
a
r
/
D
e
s
p
u
b
l
i
c
a
r
 
c
o
m
e
n
t
a
r
i
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
M
I
N
_
D
E
L
E
T
E
R
E
V
E
I
E
W
'
,
 
'
B
o
r
r
a
r
 
c
o
m
e
n
t
a
r
i
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
R
E
P
O
R
T
_
R
E
V
I
E
W
'
,
 
'
I
n
f
o
r
m
e
 
d
e
 
c
o
m
e
n
t
a
r
i
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
R
E
P
O
R
T
_
R
E
V
I
E
W
_
T
I
T
L
E
'
,
 
'
R
e
v
i
s
i
Ã
³
 
d
e
l
s
 
c
o
m
e
n
t
a
r
i
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
R
E
P
O
R
T
_
R
E
V
I
E
W
_
E
R
R
O
R
'
,
 
'
S
i
 
u
s
 
p
l
a
u
,
 
i
n
t
r
o
d
u
e
i
x
i
 
e
l
 
s
e
u
 
i
n
f
o
r
m
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
R
E
P
O
R
T
_
R
E
V
I
E
W
_
M
O
R
E
D
E
T
A
I
L
'
,
 
"
V
e
u
 
a
l
g
u
n
a
 
c
o
s
a
 
e
n
 
a
q
u
e
s
t
 
c
o
m
e
n
t
a
r
i
 
q
u
e
 
s
i
g
u
i
 
q
Ã
¼
e
s
t
i
o
n
a
b
l
e
 
o
 
i
n
e
x
a
c
t
e
?
 
I
n
f
o
r
m
i
'
n
s
 
i
 
v
e
u
r
e
m
 
q
u
Ã
¨
 
p
o
d
e
m
 
f
e
r
 
p
e
r
 
v
o
s
t
Ã
¨
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
S
U
B
M
I
T
'
,
 
'
E
n
v
i
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
R
E
P
O
R
T
_
C
R
E
A
T
E
D
_
B
Y
'
,
 
'
I
n
f
o
r
m
e
 
c
r
e
a
t
 
p
e
r
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
R
E
P
O
R
T
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
"
E
l
s
 
i
n
f
o
r
m
e
s
 
s
Ã
³
n
 
p
u
b
l
i
c
a
t
s
 
p
e
l
s
 
u
s
u
a
r
i
s
 
q
u
e
 
p
o
d
e
n
 
e
s
t
a
r
 
e
n
 
d
e
s
a
c
o
r
d
 
a
m
b
 
e
l
 
c
o
n
t
i
n
g
u
t
 
d
'
u
n
 
c
o
m
e
n
t
a
r
i
.
 
L
'
Ã
º
n
i
c
a
 
m
a
n
e
r
a
 
d
'
e
l
i
m
i
n
a
r
 
u
n
 
i
n
f
o
r
m
e
 
Ã
©
s
 
e
l
i
m
i
n
a
r
 
l
a
 
r
e
v
i
s
i
Ã
³
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
R
A
T
I
N
G
'
,
 
'
V
a
l
o
r
a
c
i
o
n
s
 
(
1
 
=
 
e
s
c
Ã
 
s
 
1
0
 
=
 
e
x
c
e
l
Â
·
l
e
n
t
)
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
R
A
T
I
N
G
_
1
'
,
 
'
H
o
s
p
i
t
a
l
i
t
a
t
 
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
R
A
T
I
N
G
_
2
'
,
 
'
L
o
c
a
l
i
t
z
a
c
i
Ã
³
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
R
A
T
I
N
G
_
3
'
,
 
'
N
e
t
e
d
a
t
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
R
A
T
I
N
G
_
4
'
,
 
'
A
l
l
o
t
j
a
m
e
n
t
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
R
A
T
I
N
G
_
5
'
,
 
'
R
e
l
a
c
i
Ã
³
 
q
u
a
l
i
t
a
t
-
p
r
e
u
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
R
A
T
I
N
G
_
6
'
,
 
'
S
e
r
v
e
i
s
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
R
E
V
I
E
W
E
D
_
B
Y
'
,
 
'
C
o
m
e
n
t
a
t
 
p
e
r
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
C
L
I
C
K
T
O
H
I
D
E
'
,
 
'
A
m
a
g
a
r
 
c
o
m
e
n
t
a
r
i
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
H
O
W
B
O
O
K
I
N
G
F
O
R
M
I
N
P
R
O
P
E
R
T
Y
D
E
T
A
I
L
S
'
,
 
'
M
o
s
t
r
a
r
 
F
o
r
m
u
l
a
r
i
 
d
e
 
r
e
s
e
r
v
a
 
e
n
 
l
a
 
p
Ã
 
g
i
n
a
 
d
e
 
d
e
t
a
l
l
s
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
H
O
W
B
O
O
K
I
N
G
F
O
R
M
I
N
P
R
O
P
E
R
T
Y
D
E
T
A
I
L
S
_
D
E
S
C
'
,
 
"
P
o
s
i
 
a
i
x
Ã
²
 
e
n
 
S
Ã
­
 
p
e
r
 
m
o
s
t
r
a
r
 
e
l
 
f
o
r
m
u
l
a
r
i
 
d
e
 
r
e
s
e
r
v
a
 
e
n
 
l
a
 
p
Ã
 
g
i
n
a
 
d
e
 
d
e
t
a
l
l
s
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
.
 
S
i
 
s
'
e
s
t
a
b
l
e
i
x
 
e
n
 
N
o
,
 
a
p
a
r
e
i
x
e
r
Ã
 
 
u
n
 
e
n
l
l
a
Ã
§
 
e
n
 
l
a
 
p
Ã
 
g
i
n
a
 
d
e
 
d
e
t
a
l
l
s
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
 
a
p
u
n
t
a
n
t
 
a
l
 
f
o
r
m
u
l
a
r
i
 
d
e
 
r
e
s
e
r
v
a
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
X
I
N
C
L
U
S
I
V
E
'
,
 
'
E
l
s
 
p
r
e
u
s
 
i
n
c
l
o
u
e
n
 
i
m
p
o
s
t
o
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
X
I
N
C
L
U
S
I
V
E
_
D
E
S
C
'
,
 
'
E
l
s
 
p
r
e
u
s
 
s
Ã
³
n
 
i
m
p
o
s
t
o
s
 
i
n
c
l
u
Ã
¯
t
s
?
 
S
i
 
e
l
s
 
s
e
u
s
 
p
r
e
u
s
 
i
n
c
l
o
u
e
n
 
i
m
p
o
s
t
o
s
 
s
e
l
e
c
c
i
o
n
i
 
S
i
.
 
S
i
 
n
o
 
e
s
t
a
n
 
i
n
c
l
u
Ã
¯
t
s
 
s
e
l
e
c
c
i
o
n
i
 
N
o
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
A
X
_
E
X
T
R
A
S
'
,
 
'
I
V
A
 
e
x
t
r
e
s
:
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
I
C
R
O
M
A
N
A
G
E
_
P
I
C
K
E
R
_
D
A
Y
S
O
F
W
E
E
K
'
,
 
"
E
l
 
c
a
m
p
 
d
e
 
d
Ã
­
a
 
d
e
 
l
a
 
s
e
t
m
a
n
a
 
l
i
 
p
e
r
m
e
t
 
e
s
t
a
b
l
i
r
 
u
n
a
 
t
a
s
a
 
p
e
r
 
a
 
u
n
 
d
e
t
e
r
m
i
n
a
t
 
d
Ã
­
a
 
d
e
 
l
a
 
s
e
t
m
a
n
a
,
 
u
n
 
c
o
p
 
q
u
e
 
f
a
g
i
 
c
l
i
c
 
e
n
 
e
l
 
b
o
t
Ã
³
 
d
e
 
d
Ã
­
a
 
d
e
 
l
a
 
s
e
t
m
a
n
a
 
t
o
t
s
 
e
l
s
 
d
Ã
­
a
s
 
d
e
 
l
a
 
s
e
t
m
a
n
a
 
s
'
a
j
u
s
t
a
r
a
n
 
a
 
a
q
u
e
s
t
a
 
t
a
s
a
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
I
C
R
O
M
A
N
A
G
E
_
P
I
C
K
E
R
_
D
A
T
E
R
A
N
G
E
S
'
,
 
"
E
l
s
 
s
e
l
e
c
t
o
r
s
 
d
e
 
d
a
t
a
 
i
 
l
a
 
t
a
r
i
f
a
 
d
'
e
n
t
r
a
d
a
 
l
i
 
p
e
r
m
e
t
e
n
 
e
s
t
a
b
l
i
r
 
u
n
 
p
r
e
u
 
p
e
r
 
a
 
u
n
 
i
n
t
e
r
v
a
l
 
d
e
 
t
e
m
p
s
 
d
o
n
a
t
.
 
T
r
Ã
¯
i
 
u
n
a
 
d
a
t
a
 
d
'
i
n
i
c
i
 
i
 
f
i
,
 
i
n
t
r
o
d
u
e
i
x
i
 
u
n
 
p
r
e
u
,
 
i
 
f
a
g
i
 
c
l
i
c
 
e
n
 
e
l
 
b
o
t
Ã
³
 
d
e
 
f
i
x
a
c
i
Ã
³
 
d
e
 
t
a
r
i
f
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
I
C
R
O
M
A
N
A
G
E
_
P
I
C
K
E
R
_
D
A
T
E
R
A
N
G
E
S
_
S
T
A
R
T
'
,
 
'
I
n
i
c
i
 
i
n
t
e
r
v
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
I
C
R
O
M
A
N
A
G
E
_
P
I
C
K
E
R
_
D
A
T
E
R
A
N
G
E
S
_
E
N
D
'
,
 
'
F
i
 
i
n
t
e
r
v
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
I
C
R
O
M
A
N
A
G
E
_
P
I
C
K
E
R
_
D
A
T
E
R
A
N
G
E
S
_
R
A
T
E
'
,
 
'
T
a
r
i
f
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
I
C
R
O
M
A
N
A
G
E
_
P
I
C
K
E
R
_
D
A
T
E
R
A
N
G
E
S
_
S
E
T
'
,
 
'
F
i
x
a
r
 
l
e
s
 
t
a
r
i
f
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
A
R
T
N
E
R
S
_
T
I
T
L
E
'
,
 
'
S
o
c
i
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
A
L
E
N
D
A
R
_
R
T
L
'
,
 
'
f
a
l
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
O
O
M
A
L
L
O
C
A
T
I
O
N
S
_
R
O
O
M
'
,
 
'
H
a
b
i
t
a
c
i
Ã
³
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
O
O
M
A
L
L
O
C
A
T
I
O
N
S
_
G
U
E
S
T
S
'
,
 
'
h
o
s
t
e
(
s
)
.
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
O
O
M
A
L
L
O
C
A
T
I
O
N
S
_
I
N
F
O
R
M
A
T
I
O
N
'
,
 
"
H
e
m
 
a
s
s
i
g
n
a
t
 
e
l
 
n
Ã
º
m
e
r
o
 
d
'
h
o
s
t
e
s
 
a
 
l
e
s
 
s
e
v
e
s
 
h
a
b
i
t
a
c
i
o
n
s
.
 
S
i
 
d
e
s
i
t
j
a
 
c
a
n
v
i
a
r
 
a
q
u
e
s
t
a
 
a
s
s
i
g
n
a
c
i
Ã
³
,
 
h
a
u
r
Ã
 
 
d
e
 
c
o
n
t
a
c
t
a
r
 
a
m
b
 
l
\
'
h
o
t
e
l
 
d
e
s
p
r
Ã
©
s
 
d
e
 
f
e
r
 
l
a
 
r
e
s
e
r
v
a
.
 
E
s
 
p
o
d
e
n
 
a
p
l
i
c
a
r
 
c
Ã
 
r
r
e
c
s
 
e
x
t
r
a
 
s
i
 
c
a
n
v
i
a
 
l
e
s
 
a
s
s
i
g
n
a
c
i
o
n
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
N
O
T
_
P
U
B
L
I
S
H
E
D
'
,
 
"
T
i
n
g
u
i
 
e
n
 
c
o
m
p
t
e
 
q
u
e
 
l
a
 
s
e
v
a
 
p
r
o
p
i
e
t
a
t
 
n
o
 
s
'
h
a
 
p
u
b
l
i
c
a
t
 
e
n
c
a
r
a
,
 
n
o
m
Ã
©
s
 
e
s
 
p
o
t
 
v
e
u
r
e
 
l
a
 
p
r
o
p
i
e
t
a
t
,
 
e
l
s
 
v
i
s
i
t
a
n
t
s
 
d
e
l
 
l
l
o
c
 
n
o
 
l
a
 
v
e
u
r
a
n
"
)
;

/
/
 
4
.
5
.
5

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
F
I
L
T
E
R
S
_
D
E
F
A
U
L
T
'
,
 
'
O
r
d
r
e
 
d
e
 
r
e
s
u
l
t
a
t
s
 
p
r
e
d
e
t
e
r
m
i
n
a
t
 
p
e
r
 
a
 
c
e
r
c
a
 
p
e
r
 
d
e
f
e
c
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
F
I
L
T
E
R
S
_
D
E
F
A
U
L
T
_
D
E
S
C
'
,
 
"
C
a
n
v
i
a
r
 
a
q
u
e
s
t
a
 
o
p
c
i
Ã
³
 
p
e
r
 
c
a
n
v
i
a
r
 
l
'
o
r
d
r
e
 
e
n
 
q
u
e
 
e
l
s
 
r
e
s
u
l
t
a
t
s
 
d
e
 
l
a
 
c
e
r
c
a
 
s
Ã
³
n
 
p
r
e
s
e
n
t
a
t
s
 
d
e
 
f
o
r
m
a
 
p
r
e
d
e
t
e
r
m
i
n
a
d
a
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
F
I
L
T
E
R
S
_
S
H
O
W
'
,
 
'
M
o
s
t
r
a
r
 
r
e
s
u
l
t
a
t
 
d
e
 
l
a
 
c
e
r
c
a
 
p
e
r
 
m
e
n
Ã
º
 
d
e
s
p
l
e
g
a
b
l
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
O
O
M
M
S
L
I
S
T
_
S
T
Y
L
E
'
,
 
'
E
s
t
i
l
 
d
e
 
l
l
i
s
t
a
 
h
a
b
i
t
a
c
i
o
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
O
O
M
M
S
L
I
S
T
_
S
T
Y
L
E
_
D
E
S
C
'
,
 
"
E
n
 
e
l
 
f
o
r
m
u
l
a
r
i
 
d
e
 
r
e
s
e
r
v
a
,
 
u
t
i
l
i
t
z
a
n
t
 
l
'
e
s
t
i
l
 
'
C
l
Ã
 
s
s
i
c
'
,
 
l
'
e
s
t
i
l
 
d
e
 
l
l
i
s
t
a
 
d
'
h
a
b
i
t
a
c
i
o
n
s
 
l
i
 
o
f
e
r
e
i
x
 
h
a
b
i
t
a
c
i
o
n
s
 
i
n
d
i
v
i
d
u
a
l
s
 
p
e
r
 
a
l
s
 
c
l
i
e
n
t
s
.
 
A
m
b
 
l
'
e
s
t
i
l
 
'
T
i
p
u
s
 
d
'
h
a
b
i
t
a
c
i
Ã
³
'
,
 
e
l
s
 
h
o
s
t
e
s
 
t
r
i
e
n
 
e
l
 
n
Ã
º
m
e
r
o
 
d
'
h
a
b
i
t
a
c
i
o
n
s
 
d
e
 
t
i
p
u
s
 
X
 
(
p
e
r
 
e
x
e
m
p
l
e
,
 
2
 
x
 
d
o
b
l
e
s
)
 
e
n
 
l
l
o
c
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
O
O
M
M
S
L
I
S
T
_
S
T
Y
L
E
_
C
L
A
S
S
I
C
'
,
 
'
C
l
Ã
 
s
s
i
c
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
O
O
M
M
S
L
I
S
T
_
S
T
Y
L
E
_
R
O
O
M
T
Y
P
E
S
'
,
 
'
T
i
p
u
s
 
h
a
b
i
t
a
c
i
o
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
A
L
E
N
D
A
R
_
S
T
A
R
T
D
A
Y
'
,
 
'
C
a
l
e
n
d
a
r
i
 
d
e
 
l
a
 
s
e
t
m
a
n
a
 
c
o
m
e
n
Ã
§
a
 
e
l
 
d
Ã
­
a
,
 
D
i
u
m
e
n
g
e
 
D
i
l
l
u
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
M
I
N
_
G
U
E
S
T
S
O
N
L
Y
'
,
 
"
N
o
m
Ã
©
s
 
e
l
s
 
c
l
i
e
n
t
s
 
d
e
 
l
'
e
s
t
a
b
l
i
m
e
n
t
 
p
o
d
e
n
 
f
e
r
 
c
o
m
e
n
t
a
r
i
s
?
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
V
I
E
W
S
_
A
D
M
I
N
_
G
U
E
S
T
S
O
N
L
Y
_
D
E
S
C
'
,
 
'
E
s
t
a
b
l
i
r
 
e
n
 
S
Ã
­
 
s
i
 
d
e
s
i
t
j
a
 
r
e
s
t
r
i
n
g
i
r
 
c
o
m
e
n
t
a
r
i
s
 
n
o
m
Ã
©
s
 
a
 
a
q
u
e
l
l
s
 
u
s
u
a
r
i
s
 
q
u
e
 
h
a
g
i
n
 
s
i
g
u
t
 
h
o
s
t
e
s
 
e
n
 
a
q
u
e
s
t
 
e
s
t
a
b
l
i
m
e
n
t
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
R
O
O
M
P
E
R
B
O
O
K
I
N
G
'
,
 
'
P
e
r
 
h
a
b
i
t
a
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
X
_
G
U
E
S
T
S
_
P
E
R
_
R
O
O
M
'
,
 
'
H
o
s
t
e
s
 
p
e
r
 
h
a
b
i
t
a
c
i
Ã
³
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
X
_
G
U
E
S
T
S
_
P
E
R
_
B
O
O
K
I
N
G
'
,
 
'
H
o
e
s
t
e
s
 
p
e
r
 
r
e
s
e
r
v
a
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
N
U
M
B
E
R
_
O
F
_
R
O
O
M
S
'
,
 
"
N
Ã
º
m
e
r
o
 
d
'
h
a
b
i
t
a
c
i
o
n
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
0
'
,
 
'
G
e
n
e
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
1
'
,
 
'
F
e
b
r
e
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
2
'
,
 
'
M
a
r
Ã
§
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
3
'
,
 
'
A
b
r
i
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
4
'
,
 
'
M
a
i
g
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
5
'
,
 
'
J
u
n
y
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
6
'
,
 
'
J
u
l
i
o
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
7
'
,
 
'
A
g
o
s
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
8
'
,
 
'
S
e
p
t
e
m
b
r
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
9
'
,
 
'
O
c
t
u
b
r
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
1
0
'
,
 
'
N
o
v
e
m
b
r
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
L
O
N
G
_
1
1
'
,
 
'
D
e
s
e
m
b
r
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
C
O
M
_
A
_
M
I
N
I
M
A
L
C
O
N
F
I
G
_
D
E
S
C
'
,
 
"
P
o
s
i
 
a
i
x
Ã
²
 
e
n
 
S
Ã
­
 
p
e
r
 
a
 
r
e
d
u
Ã
¯
r
 
e
l
 
n
Ã
º
m
e
r
o
 
d
'
o
p
c
i
o
n
s
 
d
i
s
p
o
n
i
b
l
e
s
 
p
e
r
 
a
l
s
 
a
d
m
i
n
i
s
t
r
a
d
o
r
s
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
 
e
n
 
l
a
 
s
e
c
c
i
Ã
³
 
C
o
n
f
i
g
u
r
a
c
i
Ã
³
 
G
e
n
e
r
a
l
.
 
A
i
x
Ã
²
 
Ã
©
s
 
Ã
º
t
i
l
 
s
i
 
n
o
 
v
o
l
 
q
u
e
 
e
l
s
 
a
d
m
i
n
i
s
t
r
a
d
o
r
s
 
d
e
 
p
r
o
p
i
e
t
a
t
s
 
d
i
s
p
o
s
i
n
 
d
e
 
m
o
l
t
s
 
a
j
u
s
t
o
s
,
 
e
n
 
e
l
 
s
e
u
 
l
l
o
c
 
p
o
t
 
e
d
i
t
a
r
 
j
o
m
r
e
s
_
c
o
n
f
i
g
.
p
h
p
 
p
e
r
 
a
 
d
e
f
i
n
i
r
 
l
e
s
 
o
p
c
i
o
n
s
 
p
e
r
 
d
e
f
e
c
t
e
 
d
e
 
l
'
e
s
t
a
b
l
i
m
e
n
t
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
_
S
E
L
E
C
T
'
,
 
'
S
i
 
u
s
 
p
l
a
u
,
 
s
e
l
e
c
c
i
o
n
i
 
u
n
a
 
o
p
c
i
Ã
³
 
p
e
r
 
a
 
l
a
 
s
e
v
a
 
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
L
L
O
W
H
T
M
L
E
D
I
T
O
R
_
D
E
S
C
'
,
 
"
<
p
>
I
f
 
t
h
i
s
 
o
p
t
i
o
n
 
i
s
 
s
e
t
 
t
o
 
Y
e
s
,
 
t
h
e
n
 
m
a
n
a
g
e
r
s
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
s
e
e
 
t
h
e
 
h
t
m
l
 
e
d
i
t
o
r
 
p
r
o
v
i
d
e
d
 
w
i
t
h
 
t
h
e
 
C
M
S
,
 
a
n
d
 
e
n
t
e
r
 
H
T
M
L
 
i
n
t
o
 
t
h
e
 
d
e
s
c
r
i
p
t
i
o
n
.
 
T
h
i
s
 
i
s
 
a
 
p
o
t
e
n
t
i
a
l
 
s
e
c
u
r
i
t
y
 
r
i
s
k
 
a
s
 
t
h
e
r
e
 
i
s
 
a
 
p
o
s
s
i
b
i
l
i
t
y
 
t
h
a
t
 
t
h
e
y
 
c
a
n
 
i
n
t
r
o
d
u
c
e
 
u
n
w
a
n
t
e
d
 
H
T
M
L
 
o
r
 
J
a
v
a
s
c
r
i
p
t
.
 
A
d
d
i
t
i
o
n
a
l
l
y
,
 
i
f
 
t
h
e
y
 
e
n
t
e
r
 
p
o
o
r
l
y
 
f
o
r
m
a
t
t
e
d
 
H
T
M
L
 
t
h
e
 
p
a
g
e
 
d
e
s
i
g
n
 
c
o
u
l
d
 
b
e
c
o
m
e
 
c
o
m
p
r
o
m
i
s
e
d
.
 
I
t
'
s
 
b
e
t
t
e
r
 
t
o
 
l
e
a
v
e
 
t
h
i
s
 
o
p
t
i
o
n
 
s
e
t
 
t
o
 
N
o
 
w
h
e
r
e
v
e
r
 
p
o
s
s
i
b
l
e
.
<
/
p
>
<
p
>
I
f
 
a
l
l
 
m
a
n
a
g
e
r
s
 
a
r
e
 
t
r
u
s
t
e
d
 
u
s
e
r
s
 
(
e
.
g
.
 
y
o
u
r
s
e
l
f
)
 
t
h
e
n
 
y
o
u
 
c
a
n
 
l
e
a
v
e
 
i
t
 
s
e
t
 
t
o
 
Y
e
s
 
a
n
d
 
y
o
u
 
m
o
d
i
f
y
 
t
h
e
 
d
i
f
f
e
r
e
n
t
 
H
T
M
L
 
t
a
g
s
 
t
h
a
t
 
t
h
e
y
 
a
r
e
 
a
l
l
o
w
e
d
 
t
o
 
e
n
t
e
r
 
i
n
 
t
h
e
 
I
n
p
u
t
 
F
i
l
t
e
r
i
n
g
 
t
a
b
 
i
n
 
S
i
t
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
.
<
/
p
>
<
p
>
I
f
,
 
o
n
 
t
h
e
 
o
t
h
e
r
 
h
a
n
d
,
 
y
o
u
'
r
e
 
u
s
i
n
g
 
J
o
m
r
e
s
 
a
s
 
a
 
p
o
r
t
a
l
 
w
h
e
r
e
 
y
o
u
 
i
n
v
i
t
e
 
u
s
e
r
s
 
t
o
 
a
d
d
 
a
n
d
 
a
d
m
i
n
i
s
t
e
r
 
t
h
e
i
r
 
o
w
n
 
p
r
o
p
e
r
t
i
e
s
 
t
h
e
n
 
t
h
i
s
 
i
s
n
'
t
 
t
h
e
 
i
d
e
a
l
 
c
o
n
f
i
g
u
r
a
t
i
o
n
.
 
I
n
s
t
e
a
d
 
y
o
u
 
s
h
o
u
l
d
 
l
e
a
v
e
 
t
h
i
s
 
o
p
t
i
o
n
 
s
e
t
 
t
o
 
N
o
.
 
W
i
t
h
 
i
t
 
s
e
t
 
t
o
 
N
o
 
m
a
n
a
g
e
r
s
 
w
i
l
l
 
i
n
s
t
e
a
d
 
s
e
e
 
a
 
m
a
r
k
d
o
w
n
 
e
d
i
t
o
r
 
t
h
a
t
 
t
h
e
y
 
c
a
n
 
u
s
e
 
t
o
 
e
n
t
e
r
 
b
a
s
i
c
 
f
o
r
m
a
t
t
i
n
g
 
w
h
i
c
h
 
s
h
o
u
l
d
 
b
e
 
s
u
f
f
i
c
i
e
n
t
 
f
o
r
 
t
h
e
 
m
a
j
o
r
i
t
y
 
o
f
 
u
s
e
r
s
.
<
/
p
>
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
A
N
A
G
E
M
E
N
T
V
I
E
W
_
M
A
N
A
G
M
E
N
T
'
,
 
"
V
i
s
t
a
 
d
'
a
d
m
i
n
i
s
t
r
a
c
i
Ã
³
 
D
e
 
P
r
o
p
i
e
t
a
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
A
N
A
G
E
M
E
N
T
V
I
E
W
_
S
I
T
E
P
R
E
V
I
E
W
'
,
 
'
V
i
s
t
a
 
p
r
e
v
i
a
 
L
l
o
c
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
A
R
T
N
E
R
_
D
I
S
C
O
U
N
T
'
,
 
'
D
e
s
c
o
m
p
t
e
 
A
s
s
o
c
i
a
t
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
A
R
T
N
E
R
_
C
H
O
O
S
E
_
S
E
A
R
C
H
T
I
T
L
E
'
,
 
'
B
u
s
c
a
r
 
u
s
u
a
r
i
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
A
R
T
N
E
R
_
C
H
O
O
S
E
_
S
E
A
R
C
H
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
"
I
n
t
r
o
d
u
e
i
x
i
 
a
l
g
u
n
s
 
c
a
r
Ã
 
c
t
e
r
s
 
p
e
r
 
a
 
b
u
s
c
a
r
 
u
n
 
u
s
u
a
r
i
.
<
b
r
/
>
 
Q
u
a
n
d
 
s
e
l
e
c
c
i
o
n
i
 
u
n
 
u
s
u
a
r
i
 
a
u
t
o
m
Ã
 
t
i
c
a
m
e
n
t
 
s
'
a
f
e
g
i
r
Ã
 
 
c
o
m
 
A
s
s
o
c
i
a
t
 
i
 
e
l
 
p
o
r
t
a
r
Ã
 
 
a
 
l
a
 
p
Ã
 
g
i
n
a
 
s
e
g
Ã
¼
e
n
t
 
o
n
 
p
o
t
 
a
s
s
i
g
n
a
r
 
p
r
o
p
i
e
t
a
t
s
 
i
 
d
e
s
c
o
m
p
t
e
s
 
p
e
r
 
a
 
l
'
u
s
u
a
r
i
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
A
R
T
N
E
R
_
C
H
O
O
S
E
_
E
X
I
S
T
I
N
G
T
I
T
L
E
'
,
 
'
A
s
s
o
c
i
a
t
s
 
e
x
i
s
t
e
n
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
A
R
T
N
E
R
_
C
H
O
O
S
E
_
E
X
I
S
T
I
N
G
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
"
T
r
Ã
¯
i
 
u
n
 
A
s
s
o
c
i
a
t
 
p
e
r
 
a
 
s
e
r
 
p
o
r
t
a
t
 
a
 
l
a
 
s
e
v
a
 
p
Ã
 
g
i
n
a
 
d
'
a
d
m
i
n
i
s
t
r
a
c
i
Ã
³
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
A
R
T
N
E
R
_
S
H
O
W
_
T
I
T
L
E
'
,
 
'
A
s
s
o
c
i
a
t
 
:
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
A
R
T
N
E
R
_
S
H
O
W
_
S
E
A
R
C
H
T
I
T
L
E
'
,
 
'
B
u
s
c
a
r
 
p
e
r
 
u
n
a
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
A
R
T
N
E
R
_
S
H
O
W
_
S
E
A
R
C
H
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
"
I
n
t
r
o
d
u
e
i
x
i
 
a
l
g
u
n
s
 
c
a
r
Ã
 
c
t
e
r
s
 
d
e
l
 
n
o
m
 
d
e
 
p
r
o
p
i
e
t
a
t
 
i
 
s
e
l
e
c
c
i
o
n
i
 
u
n
a
 
p
r
o
p
i
e
t
a
t
.
<
b
r
/
>
 
Q
u
a
n
 
v
o
s
t
Ã
¨
 
s
e
l
e
c
c
i
o
n
i
 
l
a
 
p
r
o
p
i
e
t
a
t
 
s
'
a
f
e
g
i
r
Ã
 
 
a
 
l
a
 
c
a
r
t
e
r
a
 
d
e
 
l
'
A
s
s
o
c
i
a
t
,
 
p
e
r
Ã
²
 
e
n
c
a
r
a
 
n
o
 
d
i
s
f
r
u
t
a
r
Ã
 
 
d
e
l
s
 
d
e
s
c
o
m
p
t
e
s
,
 
s
e
r
Ã
 
 
n
e
c
e
s
s
a
r
i
 
q
u
e
 
e
l
s
 
c
o
n
f
i
g
u
r
i
 
v
o
s
t
Ã
¨
 
m
a
t
e
i
x
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
A
R
T
N
E
R
_
S
H
O
W
_
C
U
R
R
E
N
T
P
R
O
P
E
R
T
I
E
S
'
,
 
'
P
r
o
p
i
e
t
a
t
s
 
a
c
t
u
a
l
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
A
R
T
N
E
R
_
S
H
O
W
_
C
U
R
R
E
N
T
P
R
O
P
E
R
T
I
E
S
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
"
F
a
g
i
 
c
l
i
c
 
e
n
 
u
n
a
 
p
r
o
p
i
e
t
a
t
 
p
e
r
 
a
 
m
o
d
i
f
i
c
a
r
 
l
a
 
c
o
n
f
i
g
u
r
a
c
i
Ã
³
 
d
e
 
d
e
s
c
o
m
p
t
e
 
d
e
 
l
'
A
s
s
o
c
i
a
t
 
p
e
r
 
a
q
u
e
s
t
a
 
p
r
o
p
i
e
t
a
t
.
"
)
;

/
/
 
4
.
6

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
U
S
P
E
N
S
I
O
N
S
_
M
A
N
A
G
E
R
_
S
U
S
P
E
N
D
E
D
'
,
 
'
A
q
u
e
s
t
 
c
o
m
p
t
e
 
h
a
 
s
i
g
u
t
 
s
u
s
p
Ã
¨
s
,
 
n
o
 
Ã
©
s
 
p
o
s
s
i
b
l
e
 
a
d
m
i
n
i
s
t
r
a
r
 
l
a
 
s
e
v
a
 
P
r
o
p
i
e
t
a
t
(
s
)
 
a
m
b
 
a
q
u
e
s
t
 
c
o
m
p
t
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
U
S
P
E
N
S
I
O
N
S
_
S
U
S
P
E
N
D
E
D
_
E
M
A
I
L
_
T
I
T
L
E
'
,
 
"
C
o
m
p
t
e
 
d
'
A
d
m
i
n
i
s
t
r
a
d
o
r
 
s
u
s
p
Ã
¨
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
U
S
P
E
N
S
I
O
N
S
_
U
N
S
U
S
P
E
N
D
E
D
_
E
M
A
I
L
_
T
I
T
L
E
'
,
 
"
C
o
m
p
t
e
 
d
'
A
d
m
i
n
i
s
t
r
a
d
o
r
 
r
e
h
a
b
i
l
i
t
a
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
U
S
P
E
N
S
I
O
N
S
_
M
A
N
A
G
E
R
_
S
U
S
P
E
N
D
E
D
_
E
M
A
I
L
'
,
 
"
T
i
n
g
u
i
 
e
n
 
c
o
m
p
t
e
 
q
u
e
 
e
l
 
s
e
u
 
c
o
m
p
t
e
 
d
'
A
d
m
i
n
i
s
t
r
a
d
o
r
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
d
 
h
a
 
s
i
g
u
t
 
s
u
s
p
Ã
¨
s
.
 
V
o
s
t
Ã
¨
 
n
o
 
s
e
r
Ã
 
 
c
a
p
a
Ã
§
 
d
e
 
r
e
a
l
i
t
z
a
r
 
l
e
s
 
f
u
n
c
i
o
n
s
 
d
e
 
g
e
s
t
i
Ã
³
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
 
f
i
n
s
 
q
u
e
 
e
l
 
c
o
m
p
t
e
 
h
a
g
i
 
s
i
g
u
t
 
r
e
s
t
a
u
r
a
t
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
U
S
P
E
N
S
I
O
N
S
_
M
A
N
A
G
E
R
_
U
N
S
U
S
P
E
N
D
E
D
_
E
M
A
I
L
'
,
 
"
T
i
n
g
u
i
 
e
n
 
c
o
m
p
t
e
 
q
u
e
 
e
l
 
s
e
u
 
c
o
m
p
t
e
 
d
'
A
d
m
i
n
i
s
t
r
a
d
o
r
 
d
e
 
p
r
o
p
i
e
t
a
t
 
j
a
 
e
s
t
Ã
 
 
a
c
t
i
u
.
 
V
o
s
t
Ã
¨
 
p
o
t
 
s
e
g
u
i
r
 
e
x
e
r
c
i
n
t
 
l
e
s
 
f
u
n
c
i
o
n
s
 
d
'
a
d
m
i
n
i
s
t
r
a
c
i
Ã
³
 
d
e
 
p
r
o
p
i
e
t
a
t
s
.
 
S
i
 
u
s
 
p
l
a
u
,
 
i
n
g
r
e
s
s
i
 
e
n
 
c
o
m
p
t
e
 
i
 
a
s
s
e
g
Ã
º
r
i
'
s
 
d
e
 
q
u
e
 
l
a
 
P
r
o
p
i
e
t
a
t
(
s
)
 
c
o
r
r
e
c
t
a
 
h
a
n
 
s
i
g
u
t
 
p
u
b
l
i
c
a
d
e
s
.
 
G
r
Ã
 
c
i
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
R
E
M
O
V
E
'
,
 
'
E
l
i
m
i
n
a
r
 
p
r
e
f
e
r
i
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
A
T
A
_
A
R
C
H
I
V
E
_
T
I
T
L
E
'
,
 
'
A
r
x
i
u
 
d
e
 
d
a
d
e
s
 
d
e
 
R
e
s
e
r
v
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
A
T
A
_
A
R
C
H
I
V
E
_
T
I
T
L
E
_
D
E
S
C
'
,
 
"
L
'
a
r
x
i
u
 
d
e
 
r
e
s
e
r
v
a
 
d
e
 
d
a
d
e
s
 
Ã
©
s
 
u
n
 
v
o
l
c
a
t
 
d
e
 
l
a
 
i
n
f
o
r
m
a
c
i
Ã
³
 
d
e
 
l
a
 
r
e
s
e
r
v
a
,
 
l
a
 
i
n
f
o
r
m
a
c
i
Ã
³
 
Ã
©
s
 
c
a
p
t
u
r
a
d
a
 
d
e
s
p
r
Ã
©
s
 
d
e
 
c
o
n
f
i
r
m
a
r
 
l
a
 
r
e
s
e
r
v
a
 
f
e
n
t
 
c
l
i
c
.
 
P
a
s
s
i
 
e
l
 
r
a
t
o
l
Ã
­
 
s
o
b
r
e
 
u
n
a
 
d
a
t
a
 
p
e
r
 
v
e
u
r
e
 
e
l
 
v
o
l
c
a
t
 
d
e
 
l
e
s
 
d
a
d
e
s
 
e
n
 
b
r
u
t
.
 
L
a
 
i
n
f
o
r
m
a
c
i
Ã
³
 
Ã
©
s
 
e
m
a
g
a
t
z
e
m
a
d
a
 
e
n
 
l
a
 
t
a
u
l
a
 
X
X
X
_
_
j
o
m
r
e
s
_
b
o
o
k
i
n
g
_
d
a
t
a
_
a
r
c
h
i
v
e
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
Y
_
A
C
C
O
U
N
T
_
E
D
I
T
'
,
 
'
E
d
i
t
a
r
 
c
o
m
p
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
N
A
G
E
R
_
C
H
O
O
S
E
_
S
E
A
R
C
H
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
"
T
o
 
a
d
d
 
a
 
u
s
e
r
 
a
s
 
a
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
,
 
f
i
r
s
t
 
e
n
t
e
r
 
t
h
e
 
f
i
r
s
t
 
f
e
w
 
c
h
a
r
a
c
t
e
r
s
 
o
f
 
t
h
e
i
r
 
u
s
e
r
n
a
m
e
 
i
n
 
t
h
e
 
f
i
e
l
d
 
a
b
o
v
e
.
 
W
h
e
n
 
t
h
e
 
c
o
r
r
e
c
t
 
u
s
e
r
 
h
a
s
 
b
e
e
n
 
f
o
u
n
d
 
c
l
i
c
k
 
o
n
 
t
h
a
t
 
n
a
m
e
 
t
o
 
s
e
l
e
c
t
 
i
t
,
 
t
h
e
n
 
c
h
o
o
s
e
 
w
h
i
c
h
 
p
r
o
p
e
r
t
y
(
s
)
 
t
h
e
y
 
s
h
o
u
l
d
 
b
e
 
a
 
m
a
n
a
g
e
r
 
o
f
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
N
A
G
E
R
_
C
H
O
O
S
E
_
E
X
I
S
T
I
N
G
T
I
T
L
E
'
,
 
'
A
c
t
u
a
l
s
 
A
d
m
i
n
i
s
t
r
a
d
o
r
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
G
U
E
S
T
N
U
M
B
E
R
'
,
 
"
B
u
s
c
a
r
 
p
e
r
 
n
Ã
º
m
e
r
o
 
d
'
h
o
s
t
e
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
G
U
E
S
T
N
U
M
B
E
R
_
D
E
S
C
'
,
 
"
M
o
s
t
r
a
r
 
l
a
 
c
e
r
c
a
 
n
Ã
º
m
e
r
o
 
d
'
h
o
s
t
e
s
 
e
n
 
m
e
n
Ã
º
 
d
e
s
p
l
e
g
a
b
l
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
T
A
R
S
'
,
 
"
B
u
s
c
a
r
 
p
e
r
 
n
Ã
º
m
e
r
o
 
d
'
e
s
t
r
e
l
l
e
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
I
N
T
E
G
R
A
T
E
D
S
E
A
R
C
H
_
B
Y
S
T
A
R
S
_
D
E
S
C
'
,
 
"
M
o
s
t
r
a
r
 
l
a
 
c
e
r
c
a
 
n
Ã
º
m
e
r
o
 
d
'
e
s
t
r
e
l
l
e
s
 
e
n
 
m
e
n
Ã
º
 
d
e
s
p
l
e
g
a
b
l
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
E
A
R
C
H
_
G
U
E
S
T
N
U
M
B
E
R
'
,
 
"
N
Ã
º
m
e
r
o
 
d
'
h
o
s
t
e
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
E
A
R
C
H
_
S
T
A
R
S
'
,
 
"
N
Ã
º
m
e
r
o
 
d
'
e
s
t
r
e
l
l
e
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
H
O
O
S
E
M
A
N
A
G
E
R
_
N
U
M
B
E
R
O
F
P
R
O
P
E
R
T
I
E
S
_
A
S
S
I
G
N
E
D
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
p
r
o
p
i
e
t
a
t
s
'
)
;

/
/
 
4
.
6
.
1

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
J
Q
U
E
R
Y
'
,
 
'
C
a
r
r
e
g
a
r
 
J
o
m
r
e
s
 
j
Q
u
e
r
y
 
l
i
b
r
a
r
y
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
J
Q
U
E
R
Y
_
D
E
S
C
'
,
 
'
P
o
t
 
e
s
t
a
b
l
i
r
 
a
i
x
Ã
²
 
a
 
N
O
 
s
i
 
v
o
s
t
Ã
¨
 
t
Ã
©
 
u
n
a
 
p
l
a
n
t
i
l
l
a
 
q
u
e
 
u
t
i
l
i
t
z
a
 
j
Q
u
e
r
y
.
 
A
i
x
Ã
²
 
p
o
t
 
r
e
s
o
l
d
r
e
 
e
l
s
 
p
r
o
b
l
e
m
e
s
 
d
e
 
c
o
n
f
l
i
c
t
e
 
j
q
u
e
r
y
 
e
n
 
a
l
g
u
n
e
s
 
p
l
a
n
t
i
l
l
e
s
,
 
p
e
r
Ã
²
 
n
o
 
t
o
t
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
H
O
O
S
E
L
A
N
G
U
A
G
E
S
_
S
H
O
W
D
R
O
P
D
O
W
N
_
D
E
S
C
'
,
 
"
E
n
a
b
l
i
n
g
 
t
h
i
s
 
o
p
t
i
o
n
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
s
e
e
 
t
h
e
 
l
a
n
g
u
a
g
e
 
s
w
i
t
c
h
e
r
 
i
n
 
t
h
e
 
F
u
l
l
s
c
r
e
e
n
 
v
i
e
w
 
i
n
 
t
h
e
 
f
r
o
n
t
e
n
d
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
U
P
L
O
A
D
S
_
I
M
A
G
E
S
_
W
I
D
T
H
_
L
A
R
G
E
_
D
E
S
C
'
,
 
'
L
e
s
 
m
i
n
i
a
t
u
r
e
s
 
e
s
 
c
r
e
e
n
 
a
u
t
o
m
Ã
 
t
i
c
a
m
e
n
t
 
p
e
r
 
a
 
l
e
s
 
i
m
a
t
g
e
s
 
c
a
r
r
e
g
a
d
a
s
.
'
)
;

/
/
 
4
.
7
.
1

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
T
H
U
M
B
N
A
I
L
_
S
M
A
L
L
_
W
I
D
T
H
'
,
 
'
A
m
p
l
e
 
m
Ã
 
x
i
m
 
d
e
 
m
i
n
i
a
t
u
r
e
s
 
p
e
t
i
t
e
s
 
(
p
x
)
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
T
H
U
M
B
N
A
I
L
_
S
M
A
L
L
_
W
I
D
T
H
_
D
E
S
C
'
,
 
"
L
e
s
 
m
i
n
i
a
t
u
r
e
s
 
p
e
t
i
t
e
s
 
s
'
u
t
i
l
i
t
z
e
n
 
e
n
 
l
a
 
l
l
i
s
t
a
 
d
e
 
p
r
o
p
i
e
t
a
t
s
,
 
m
e
n
t
r
e
 
q
u
e
 
l
e
s
 
m
i
n
i
a
t
u
r
e
s
 
d
e
 
m
i
d
a
 
m
i
t
j
a
n
a
 
s
'
u
t
i
l
i
t
z
e
n
 
e
n
 
l
a
 
c
a
p
Ã
§
a
l
e
r
a
 
d
e
 
p
r
o
p
i
e
t
a
t
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
T
H
U
M
B
N
A
I
L
_
S
M
A
L
L
_
H
E
I
G
H
T
'
,
 
'
A
l
t
u
r
a
 
m
Ã
 
x
i
m
 
d
e
 
m
i
n
i
a
t
u
r
e
s
 
p
e
t
i
t
e
s
 
(
p
x
)
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
T
H
U
M
B
N
A
I
L
_
M
E
D
_
W
I
D
T
H
'
,
 
'
A
m
p
l
e
 
m
Ã
 
x
i
m
 
d
e
 
m
i
n
i
a
t
u
r
e
s
 
m
i
t
j
e
s
 
(
p
x
)
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
T
H
U
M
B
N
A
I
L
_
M
E
D
_
H
E
I
G
H
T
'
,
 
'
A
l
t
u
r
a
 
m
Ã
 
x
i
m
a
 
d
e
 
m
i
n
i
a
t
u
r
e
s
 
m
i
t
j
e
s
 
(
p
x
)
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
O
U
C
H
T
E
M
P
L
A
T
E
S
'
,
 
'
T
r
a
d
u
c
c
i
Ã
³
 
e
t
i
q
u
e
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
O
M
M
I
S
S
I
O
N
_
U
S
E
'
,
 
'
U
t
i
l
i
t
z
a
r
 
l
a
 
f
u
n
c
i
o
n
a
l
i
t
a
t
 
d
e
 
C
o
m
i
s
s
i
o
n
i
s
t
a
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
O
M
M
I
S
S
I
O
N
_
U
S
E
_
D
E
S
C
'
,
 
"
P
o
s
i
 
a
i
x
Ã
²
 
e
n
 
S
Ã
­
 
p
e
r
 
m
o
s
t
r
a
r
 
e
l
 
r
e
s
u
l
t
a
t
 
d
e
 
l
e
s
 
f
a
c
t
u
r
e
s
 
d
e
 
l
a
 
c
o
m
i
s
s
i
Ã
³
 
q
u
e
 
s
'
h
a
n
 
p
l
a
n
t
e
j
a
t
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
O
M
M
I
S
S
I
O
N
_
M
A
N
A
G
E
R
_
T
R
I
G
G
E
R
S
'
,
 
'
A
d
m
i
n
i
s
t
r
a
d
o
r
 
d
e
 
l
e
s
 
r
e
s
e
r
v
e
s
 
c
r
e
a
 
f
a
c
t
u
r
e
s
 
d
e
 
c
o
m
i
s
s
i
Ã
³
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
O
M
M
I
S
S
I
O
N
_
M
A
N
A
G
E
R
_
T
R
I
G
G
E
R
S
_
D
E
S
C
'
,
 
'
S
i
 
u
n
 
A
d
m
i
n
i
s
t
r
a
d
o
r
 
f
a
 
u
n
a
 
r
e
s
e
r
v
a
,
 
a
i
x
Ã
²
 
t
a
m
b
Ã
©
 
c
r
e
a
 
u
n
a
 
l
Ã
­
n
i
a
 
e
n
 
f
a
c
t
u
r
a
 
d
e
 
l
a
 
c
o
m
i
s
s
i
Ã
³
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
O
M
M
I
S
S
I
O
N
_
A
U
T
O
S
U
S
P
E
N
D
'
,
 
'
A
u
t
o
 
s
u
s
p
e
n
d
r
e
 
a
l
s
 
a
d
m
i
n
i
s
t
r
a
d
o
r
s
 
q
u
a
n
 
l
e
s
 
f
a
c
t
u
r
e
s
 
s
Ã
³
n
 
m
a
r
c
a
d
e
s
 
c
o
m
 
p
e
n
d
e
n
t
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
O
M
M
I
S
S
I
O
N
_
A
U
T
O
S
U
S
P
E
N
D
_
T
H
R
E
A
S
H
O
L
D
'
,
 
'
U
m
b
r
a
l
 
p
e
r
 
a
 
l
a
 
a
u
t
o
s
u
s
p
e
n
s
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
O
M
M
I
S
S
I
O
N
_
A
U
T
O
S
U
S
P
E
N
D
_
T
H
R
E
A
S
H
O
L
D
_
D
E
S
C
'
,
 
'
A
q
u
e
s
t
 
u
m
b
r
a
l
 
Ã
©
s
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
d
i
e
s
 
q
u
e
 
u
n
 
a
d
m
i
n
i
s
t
r
a
d
o
r
 
t
Ã
©
 
p
e
r
 
p
a
g
a
r
 
u
n
a
 
f
a
c
t
u
r
a
 
a
b
a
n
s
 
d
e
 
q
u
e
 
s
i
g
u
i
 
s
u
s
p
Ã
¨
s
 
i
 
n
o
 
p
u
b
l
i
c
a
d
e
s
 
l
e
s
 
s
e
v
e
s
 
p
r
o
p
i
e
t
a
t
s
.
'
)
;

/
/
4
.
7
.
2

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
L
A
N
G
U
A
G
E
_
C
O
N
T
E
X
T
'
,
 
'
I
d
i
o
m
a
 
d
e
 
c
o
n
t
e
x
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
L
A
N
G
U
A
G
E
_
C
O
N
T
E
X
T
_
D
E
S
C
'
,
 
"
A
q
u
e
s
t
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
p
e
r
m
e
t
 
a
 
J
o
m
r
e
s
 
l
'
Ã
º
s
 
d
'
e
t
i
q
u
e
t
e
s
 
q
u
e
 
s
Ã
³
n
 
a
p
r
o
p
i
a
d
e
s
 
p
e
r
 
a
l
 
s
e
u
 
e
n
f
o
c
a
m
e
n
t
 
a
c
t
u
a
l
,
 
p
e
l
 
q
u
e
 
s
i
 
e
l
 
s
e
u
 
i
n
t
e
r
Ã
¨
s
 
e
s
 
c
e
n
t
r
a
 
e
n
 
u
n
a
 
Y
a
c
h
t
 
B
r
o
k
e
r
a
g
e
 
(
V
e
n
t
a
 
d
e
 
y
a
t
s
)
,
 
c
a
n
v
i
a
r
 
e
l
 
c
o
n
t
e
x
t
 
p
e
r
m
e
t
r
Ã
 
 
J
o
m
r
e
s
 
p
r
e
s
e
n
t
a
r
 
l
e
s
 
e
t
i
q
u
e
t
e
s
 
d
'
u
n
 
a
r
x
i
u
 
d
'
i
d
i
o
m
a
 
d
i
f
e
r
e
n
t
.
 
P
e
r
 
e
x
e
m
p
l
e
,
 
s
i
 
e
s
t
a
b
l
e
i
x
 
e
l
 
c
o
n
t
e
x
t
 
p
e
r
 
a
 
'
Y
a
c
h
t
 
B
r
o
k
e
r
a
g
e
'
,
 
l
l
a
v
o
r
s
 
J
o
m
r
e
s
 
p
r
i
m
e
r
 
e
s
 
t
r
o
b
a
 
e
l
 
l
l
e
n
g
u
a
t
g
e
 
a
c
t
u
a
l
,
 
a
 
c
o
n
t
i
n
u
a
c
i
Ã
³
,
 
b
u
s
c
a
r
Ã
 
 
e
n
 
/
'
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
l
a
n
g
u
a
g
e
s
 
u
n
 
s
u
b
-
d
i
r
e
c
t
o
r
i
 
a
n
o
m
e
n
a
t
 
'
y
a
c
h
t
b
r
o
k
e
r
a
g
e
'
.
 
S
i
 
l
'
a
r
x
i
u
 
e
x
i
s
t
e
i
x
 
e
n
 
e
l
 
l
l
e
n
g
u
a
t
g
e
 
a
c
t
u
a
l
,
 
l
'
a
r
x
i
u
 
s
e
r
Ã
 
 
u
t
i
l
i
t
z
a
t
.
 
S
i
 
n
o
,
 
l
l
a
v
o
r
s
 
J
o
m
r
e
s
 
b
u
s
c
a
r
Ã
 
 
u
n
 
a
r
x
i
u
 
d
'
i
d
i
o
m
a
 
I
n
g
l
Ã
©
s
 
e
n
 
a
q
u
e
s
t
 
m
a
t
e
i
x
 
d
i
r
e
c
t
o
r
i
.
 
S
i
 
n
o
 
e
s
 
t
r
o
b
a
,
 
J
o
m
r
e
s
 
u
t
i
l
i
t
z
a
r
Ã
 
 
l
'
a
r
x
i
u
 
d
'
i
d
i
o
m
a
 
p
e
r
 
l
'
i
d
i
o
m
a
 
s
e
l
e
c
c
i
o
n
a
t
 
e
n
 
e
l
 
d
i
r
e
c
t
o
r
i
 
/
'
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
l
a
n
g
u
a
g
e
s
.
"
)
;

/
/
 
4
.
7
.
3

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
D
V
A
N
C
E
D
_
S
I
T
E
_
C
O
N
F
I
G
'
,
 
'
C
o
n
f
i
g
u
r
a
c
i
Ã
³
 
a
v
a
n
Ã
§
a
d
a
 
d
e
l
 
l
l
o
c
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
D
V
A
N
C
E
D
_
S
I
T
E
_
C
O
N
F
I
G
_
D
E
S
C
'
,
 
"
E
s
t
a
b
l
e
i
x
i
 
a
q
u
e
s
t
a
 
o
p
c
i
Ã
³
 
a
 
S
Ã
­
 
s
i
 
d
e
s
i
t
j
a
 
u
t
i
l
i
t
z
a
r
 
l
e
s
 
o
p
c
i
o
n
s
 
a
v
a
n
Ã
§
a
d
e
s
 
d
e
 
c
o
n
f
i
g
u
r
a
c
i
Ã
³
 
d
e
l
 
l
l
o
c
.
 
S
i
 
v
o
s
t
Ã
¨
 
a
c
a
b
a
 
d
e
 
c
o
m
e
n
Ã
§
a
r
 
a
m
b
 
J
o
m
r
e
s
,
 
l
l
a
v
o
r
s
 
l
i
 
r
e
c
o
m
a
n
e
m
,
 
q
u
e
 
p
e
r
 
a
r
a
 
d
e
i
x
i
 
a
i
x
Ã
²
 
e
n
 
N
o
,
 
j
a
 
q
u
e
 
l
a
 
i
n
s
t
a
l
Â
·
l
a
c
i
Ã
³
 
p
e
r
 
d
e
f
e
c
t
e
 
Ã
©
s
 
s
u
f
i
c
i
e
n
t
 
p
e
r
 
a
 
c
o
m
e
n
Ã
§
a
r
,
 
h
a
 
d
'
a
f
e
g
i
r
 
J
o
m
r
e
s
 
a
l
 
m
e
n
Ã
º
 
p
r
i
n
c
i
p
a
l
 
i
 
a
c
c
e
d
i
r
 
a
 
l
'
i
n
t
e
r
f
a
Ã
§
 
c
o
m
 
'
a
d
m
i
n
'
 
i
 
c
o
m
e
n
Ã
§
a
r
 
a
 
c
o
n
f
i
g
u
r
a
r
 
l
a
 
s
e
v
a
 
p
r
o
p
i
e
t
a
t
(
s
)
.
 
T
i
n
g
u
i
 
e
n
 
c
o
m
p
t
e
 
q
u
e
 
m
o
l
t
e
s
 
d
e
 
l
e
s
 
o
p
c
i
o
n
s
 
a
v
a
n
Ã
§
a
d
e
s
 
n
o
m
Ã
©
s
 
s
e
r
a
n
 
a
p
l
i
c
a
b
l
e
s
 
a
 
l
e
s
 
i
n
s
t
a
l
Â
·
l
a
c
i
o
n
s
 
d
e
 
J
o
m
r
e
s
 
S
i
l
v
e
r
,
 
e
l
s
 
u
s
u
a
r
i
s
 
J
o
m
r
e
s
 
L
i
t
e
 
n
o
 
s
e
r
a
n
 
c
a
p
a
Ã
§
o
s
 
d
e
 
t
r
e
u
r
e
 
e
l
 
m
Ã
 
x
i
m
 
p
r
o
f
i
t
 
d
e
 
l
a
 
t
o
t
a
l
i
t
a
t
 
d
e
 
l
e
s
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
q
u
e
s
 
p
e
r
m
e
s
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
J
Q
U
E
R
Y
_
U
I
'
,
 
'
C
a
r
r
e
g
a
r
 
J
o
m
r
e
s
 
j
Q
u
e
r
y
 
U
I
 
l
i
b
r
a
r
y
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
O
R
T
O
R
D
E
R
_
P
R
I
C
E
_
D
E
S
C
'
,
 
'
P
r
e
u
 
(
d
e
s
c
e
n
d
e
n
t
)
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
O
R
T
O
R
D
E
R
_
P
R
I
C
E
_
A
S
C
'
,
 
'
P
r
e
u
 
(
a
s
c
e
n
d
e
n
t
)
'
)
;

/
/
 
4
.
7
.
6

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
'
,
 
'
E
l
 
r
e
s
u
m
 
d
e
 
p
r
e
u
s
 
i
 
e
s
t
i
m
a
c
i
o
n
s
 
h
a
 
d
e
 
s
e
r
 
u
n
 
p
r
e
u
 
p
e
r
 
n
i
t
/
s
e
t
m
a
n
a
/
m
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
D
A
I
L
Y
'
,
 
'
P
e
r
 
n
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
W
E
E
K
L
Y
'
,
 
'
P
e
r
 
s
e
t
m
a
n
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
M
O
N
T
H
L
Y
'
,
 
'
P
e
r
 
m
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
E
R
P
E
R
S
O
N
'
,
 
'
P
e
r
 
p
e
r
s
o
n
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
W
E
E
K
S
'
,
 
'
s
e
t
m
a
n
a
(
s
)
 
e
n
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
M
O
N
T
H
S
'
,
 
'
m
e
s
(
o
s
)
 
e
n
 
'
)
;

/
/
 
4
.
7
.
7

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
_
G
L
O
B
A
L
_
S
E
A
R
C
H
O
P
T
I
O
N
_
P
E
O
P
L
E
N
U
M
B
E
R
S
'
,
 
"
C
o
m
 
h
a
 
d
e
 
t
r
e
b
a
l
l
a
r
 
l
'
o
p
c
i
Ã
³
 
d
e
 
c
e
r
c
a
 
p
e
r
 
n
Ã
º
m
e
r
o
 
d
e
 
p
e
r
s
o
n
e
s
?
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
_
G
L
O
B
A
L
_
S
E
A
R
C
H
O
P
T
I
O
N
_
P
E
O
P
L
E
N
U
M
B
E
R
S
_
D
E
S
C
'
,
 
'
A
f
e
c
t
a
 
a
 
t
o
t
e
s
 
l
e
s
 
c
e
r
q
u
e
s
.
 
Q
u
a
n
 
u
t
i
l
i
t
z
e
m
 
l
a
 
f
u
n
c
i
Ã
³
 
d
e
 
c
e
r
c
a
 
n
Ã
º
m
e
r
o
 
d
e
 
c
o
n
v
i
d
a
t
s
,
 
b
u
s
c
a
r
e
m
 
p
r
o
p
i
e
t
a
t
s
 
l
e
s
 
t
a
r
i
f
e
s
 
d
e
 
l
e
s
 
q
u
a
l
s
 
p
e
r
m
e
t
i
n
 
a
l
l
o
t
j
a
r
 
u
n
 
n
Ã
º
m
e
r
o
 
m
a
j
o
r
 
o
 
i
g
u
a
l
 
a
l
 
n
Ã
º
m
e
r
o
 
e
s
c
o
l
l
i
t
.
 
N
Ã
º
m
e
r
o
 
i
g
u
a
l
 
o
 
m
a
y
o
r
?
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
A
Y
P
A
L
_
R
E
D
I
R
E
C
T
M
E
S
S
A
G
E
'
,
 
'
S
i
 
u
s
 
p
l
a
u
 
e
s
p
e
r
i
,
 
l
a
 
s
e
v
a
 
s
o
l
Â
·
l
i
c
i
t
u
d
 
e
s
t
Ã
 
 
e
n
 
p
r
o
c
Ã
©
s
 
i
 
s
e
r
Ã
 
 
r
e
d
i
r
i
g
i
t
 
a
 
l
a
 
p
Ã
 
g
i
n
a
 
w
e
b
 
d
e
 
P
a
y
p
a
l
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
A
Y
P
A
L
_
R
E
D
I
R
E
C
T
M
E
S
S
A
G
E
_
I
F
N
O
T
R
E
D
I
R
E
C
T
E
D
'
,
 
'
S
i
 
n
o
 
Ã
©
s
 
a
u
t
o
m
Ã
 
t
i
c
a
m
e
n
t
 
d
i
r
i
g
i
t
 
a
 
P
a
y
p
a
l
 
e
n
 
5
 
s
e
g
o
n
s
 
.
.
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
A
Y
P
A
L
_
R
E
D
I
R
E
C
T
M
E
S
S
A
G
E
_
C
L
I
C
K
H
E
R
E
'
,
 
'
C
l
i
c
k
 
a
q
u
Ã
­
'
)
;

/
/
 
4
.
7
.
8

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
B
O
O
K
I
N
G
_
V
A
L
I
D
F
R
O
M
'
,
 
'
R
e
s
e
r
v
a
 
v
Ã
 
l
i
d
a
 
a
 
p
a
r
t
i
r
 
d
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
B
O
O
K
I
N
G
_
V
A
L
I
D
T
O
'
,
 
'
R
e
s
e
r
v
a
 
v
Ã
 
l
i
d
a
 
f
i
n
s
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
G
U
E
S
T
N
A
M
E
'
,
 
'
N
o
m
 
H
o
s
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
D
E
S
C
_
4
7
8
'
,
 
"
E
l
s
 
c
o
d
i
s
 
d
e
 
d
e
s
c
o
m
p
t
e
 
p
o
d
e
n
 
s
e
r
 
g
e
n
e
r
a
t
s
 
i
 
p
a
s
s
a
t
s
 
â
€
‹
a
l
s
 
c
l
i
e
n
t
s
 
c
o
m
 
u
n
 
i
n
c
e
n
t
i
u
 
p
e
r
 
a
 
f
e
r
 
l
e
s
 
r
e
s
e
r
v
e
s
.
<
b
r
/
>
D
a
t
e
s
 
V
Ã
 
l
i
d
e
s
 
d
e
s
d
e
/
f
i
n
s
 
p
e
r
 
a
 
r
e
f
e
r
i
r
-
s
e
 
a
 
l
e
s
 
d
a
t
e
s
 
e
n
 
q
u
e
 
p
o
t
 
s
e
r
 
u
n
a
 
r
e
s
e
r
v
a
 
f
e
t
a
,
 
m
e
n
t
r
e
s
 
q
u
e
 
D
a
t
a
 
R
e
s
e
r
v
a
 
v
Ã
 
l
i
d
a
 
d
e
s
d
e
/
f
i
n
s
 
e
s
 
r
e
f
e
r
e
i
x
 
a
 
l
e
s
 
d
a
t
e
s
 
e
n
 
q
u
e
 
l
a
 
r
e
s
e
r
v
a
 
q
u
e
 
h
a
 
d
e
 
c
o
b
r
i
r
 
e
l
 
c
u
p
Ã
³
 
s
i
g
u
i
 
v
Ã
 
l
i
d
a
.
 
S
i
 
l
a
 
r
e
s
e
r
v
a
 
e
s
 
t
r
o
b
a
 
f
o
r
a
 
d
'
a
q
u
e
s
t
 
p
e
r
Ã
­
o
d
e
 
l
e
s
 
t
a
r
i
f
e
s
 
n
o
r
m
a
l
s
 
s
'
a
p
l
i
c
a
r
a
n
 
a
l
s
 
d
i
e
s
 
f
o
r
a
 
d
'
a
q
u
e
s
t
 
p
e
r
Ã
­
o
d
e
.
<
b
r
/
>
S
i
 
d
e
s
i
t
j
a
 
q
u
e
 
l
a
 
r
e
s
e
r
v
a
 
e
s
t
i
g
u
i
 
d
i
s
p
o
n
i
b
l
e
 
p
e
r
 
a
 
u
n
s
 
h
o
s
t
e
s
 
e
s
p
e
c
Ã
­
f
i
c
s
,
 
t
r
Ã
¯
i
 
e
l
 
n
o
m
 
d
e
l
s
 
h
o
s
t
e
s
 
e
n
 
e
l
 
m
e
n
Ã
º
 
d
e
s
p
l
e
g
a
b
l
e
 
p
e
r
 
a
 
l
i
m
i
t
a
r
 
e
l
 
c
u
p
Ã
³
 
n
o
m
Ã
©
s
 
a
 
a
q
u
e
l
l
s
 
h
o
s
t
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
B
O
O
K
I
N
G
_
D
I
S
C
O
U
N
T
_
F
E
E
D
B
A
C
K
'
,
 
'
A
m
b
 
e
l
 
s
e
u
 
c
u
p
Ã
³
,
 
a
q
u
e
s
t
a
 
r
e
s
e
r
v
a
 
h
a
 
s
i
g
u
t
 
r
e
b
a
i
x
a
d
a
 
d
e
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
C
O
U
P
O
N
S
_
B
O
O
K
I
N
G
_
D
I
S
C
O
U
N
T
_
F
E
E
D
B
A
C
K
_
T
O
'
,
 
'
 
a
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
J
Q
U
E
R
Y
_
U
I
_
D
E
S
C
'
,
 
"
P
o
s
i
 
a
i
x
Ã
²
 
e
n
 
N
o
 
p
e
r
 
a
 
d
e
s
a
c
t
i
v
a
r
 
l
a
 
c
Ã
 
r
r
e
g
a
 
t
a
n
t
 
d
e
 
J
q
u
e
r
y
 
U
I
 
j
a
v
a
s
c
r
i
p
t
 
c
o
m
 
d
'
a
r
x
i
u
s
 
C
S
S
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
J
Q
U
E
R
Y
_
U
I
_
C
S
S
'
,
 
'
C
a
r
r
e
g
a
r
 
J
o
m
r
e
s
 
j
Q
u
e
r
y
 
U
I
 
C
S
S
 
l
i
b
r
a
r
y
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
J
Q
U
E
R
Y
_
U
I
_
C
S
S
_
D
E
S
C
'
,
 
"
P
o
s
i
 
N
o
 
n
o
m
Ã
©
s
 
p
e
r
 
a
 
d
e
s
a
c
t
i
v
a
r
 
l
'
a
r
x
i
u
 
j
q
u
e
r
y
 
U
I
 
C
S
S
.
"
)
;

/
/
v
5
.
1

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
L
I
N
E
I
T
E
M
_
T
O
T
A
L
_
I
N
C
L
U
D
I
N
G
T
A
X
'
,
 
'
T
o
t
a
l
 
i
n
c
 
i
m
p
o
s
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
U
N
P
U
B
L
I
S
H
_
P
R
O
P
E
R
T
Y
'
,
 
'
D
e
s
p
u
b
l
i
c
a
r
 
P
r
o
p
i
e
t
a
t
'
)
;

/
/
 
v
5
.
2

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
V
E
R
S
I
O
N
_
T
I
T
L
E
'
,
 
'
U
t
i
l
i
t
z
a
r
 
F
u
n
c
i
o
n
a
l
i
t
a
t
 
d
e
 
C
o
n
v
e
r
s
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
V
E
R
S
I
O
N
_
T
I
T
L
E
_
D
E
S
C
'
,
 
"
U
t
i
l
i
t
z
a
 
l
a
 
f
u
n
c
i
o
n
a
l
i
t
a
t
 
d
e
 
c
o
n
v
e
r
s
i
Ã
³
 
o
n
l
i
n
e
 
d
e
 
j
o
m
r
e
s
.
.
 
A
i
x
Ã
²
 
o
f
e
r
e
i
x
 
u
n
 
d
e
s
p
l
e
g
a
b
l
e
 
d
e
 
c
o
n
v
e
r
s
i
Ã
³
 
a
l
s
 
u
s
u
a
r
i
s
 
d
e
 
l
a
 
p
Ã
 
g
i
n
a
,
 
o
n
 
p
o
d
r
a
n
 
e
s
c
o
l
l
i
r
 
l
a
 
m
o
n
e
d
a
 
e
n
 
l
a
 
q
u
e
 
v
o
l
e
n
 
v
e
u
r
e
 
e
l
s
 
p
r
e
u
s
 
o
f
e
r
t
a
t
s
.
 
L
a
 
p
r
e
s
e
n
t
a
c
i
Ã
³
 
d
e
l
 
p
r
e
u
 
s
'
a
j
u
s
t
a
 
p
e
r
 
a
 
m
o
n
s
t
r
a
r
 
e
l
 
p
r
e
u
 
c
o
n
v
e
r
t
i
t
,
 
s
e
g
u
i
t
 
p
e
l
 
p
r
e
u
 
'
n
a
t
i
u
'
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
 
e
n
t
r
e
 
p
a
r
Ã
¨
n
t
e
s
i
s
.
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
V
E
R
S
I
O
N
_
D
I
S
C
L
A
I
M
E
R
'
,
 
"
H
e
m
 
p
o
s
a
t
 
e
l
s
 
n
o
s
t
r
e
s
 
m
i
l
l
o
r
s
 
e
s
f
o
r
Ã
§
o
s
 
e
n
 
o
b
t
e
n
i
r
 
e
l
 
m
Ã
©
s
 
p
r
e
c
Ã
­
s
 
i
 
m
Ã
©
s
 
r
Ã
 
p
i
d
 
s
i
s
t
e
m
a
 
d
e
 
c
a
n
v
i
 
d
e
 
d
i
v
i
s
a
 
q
u
e
 
p
o
d
e
m
.
 
E
l
 
n
o
s
t
r
e
 
s
e
r
v
e
i
 
d
e
 
c
o
n
v
e
r
s
i
Ã
³
 
d
e
 
d
i
v
i
s
e
s
 
o
n
l
i
n
e
 
e
s
t
Ã
 
 
d
e
s
t
i
n
a
t
 
a
 
i
n
f
o
r
m
a
c
i
Ã
³
 
i
 
n
o
 
p
r
e
t
Ã
©
n
 
r
e
f
l
e
x
a
r
 
c
a
n
v
i
s
 
e
x
a
c
t
e
s
.
 
D
'
a
c
o
r
d
 
a
m
b
 
l
o
 
e
x
p
o
s
a
t
 
a
n
t
e
r
i
o
r
m
e
n
t
,
 
n
o
 
g
a
r
a
n
t
i
t
z
e
m
 
l
'
e
x
a
c
t
i
t
u
d
 
d
e
l
s
 
c
a
n
v
i
s
 
d
e
 
d
i
v
i
s
a
.
 
U
t
i
l
i
t
z
a
n
t
 
a
q
u
e
s
t
 
s
e
r
v
e
i
 
a
c
c
e
p
t
e
s
 
q
u
e
 
l
'
Ã
º
s
 
d
e
 
l
a
 
m
a
t
e
i
x
a
 
c
o
r
r
e
 
p
e
l
 
t
e
u
 
c
o
m
p
t
e
 
i
 
r
i
s
c
.
"
)
;

/
/
 
5
.
2
.
1

/
/
 
5
.
3
.
1

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
R
R
E
N
C
Y
C
O
N
V
E
R
S
I
O
N
_
T
A
B
'
,
 
'
C
o
n
v
e
r
s
i
Ã
³
 
d
e
 
m
o
n
e
d
a
/
c
o
d
i
 
d
e
 
m
o
n
e
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
I
P
_
D
E
T
E
C
T
I
O
N
_
A
P
I
_
K
E
Y
_
T
I
T
L
E
'
,
 
'
D
e
t
e
c
c
i
Ã
³
 
d
e
 
I
P
,
 
c
l
a
u
 
A
P
I
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
I
P
_
D
E
T
E
C
T
I
O
N
_
A
P
I
_
K
E
Y
_
D
E
S
C
'
,
 
"
P
e
r
 
a
 
f
i
x
a
r
 
a
u
t
o
m
Ã
 
t
i
c
a
m
e
n
t
 
e
n
 
e
l
 
d
e
s
p
l
e
g
a
b
l
e
 
d
e
 
c
a
n
v
i
 
d
e
 
m
o
n
e
d
a
,
 
J
o
m
r
e
s
 
u
t
i
l
i
t
z
a
 
u
n
 
s
e
r
v
r
i
 
g
r
a
t
u
Ã
¯
t
 
a
n
o
m
e
n
a
r
 
I
p
i
n
f
o
B
B
 
p
e
r
 
a
 
d
e
t
e
c
t
a
r
 
e
l
 
p
a
Ã
­
s
 
d
e
l
 
v
i
s
i
t
a
n
t
,
 
n
o
 
o
b
s
t
a
n
t
 
h
a
u
r
Ã
 
 
d
'
o
b
t
e
n
i
r
 
p
r
i
m
e
r
 
u
n
a
 
c
l
a
u
 
A
P
I
 
e
n
:
 
<
a
 
h
r
e
f
=
'
h
t
t
p
:
/
/
i
p
i
n
f
o
d
b
.
c
o
m
/
r
e
g
i
s
t
e
r
.
p
h
p
'
 
t
a
r
g
e
t
=
'
_
b
l
a
n
k
'
>
I
P
i
n
f
o
D
B
<
/
a
>
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
E
B
U
G
G
I
N
G
_
T
A
B
'
,
 
'
D
e
p
u
r
a
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
O
R
M
_
R
O
O
M
T
O
T
A
L
_
E
X
_
T
A
X
'
,
 
'
A
l
l
o
t
j
a
m
e
n
t
 
i
v
a
 
e
x
c
l
u
Ã
¯
t
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
O
R
M
_
R
O
O
M
T
O
T
A
L
_
I
N
C
_
T
A
X
'
,
 
'
A
l
l
o
t
j
a
m
e
n
t
 
i
v
a
 
i
n
c
l
u
Ã
¯
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
A
X
_
A
C
C
O
M
'
,
 
'
I
V
A
 
A
l
l
o
t
j
a
m
e
n
t
:
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
U
T
T
O
N
_
O
P
E
N
_
B
O
O
K
I
N
G
F
O
R
M
'
,
 
'
O
b
r
i
r
 
e
l
 
f
o
r
m
u
l
a
r
i
 
d
e
 
R
e
s
e
r
v
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
U
T
T
O
N
_
B
A
C
K
_
T
O
_
P
R
O
P
E
R
T
Y
_
D
E
T
A
I
L
S
'
,
 
'
T
o
r
n
a
r
 
a
l
s
 
d
e
t
a
l
l
s
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
X
T
R
A
_
A
U
T
O
_
S
E
L
E
C
T
'
,
 
'
S
e
l
e
c
c
i
o
n
a
t
 
a
u
t
o
m
Ã
 
t
i
c
a
m
e
n
t
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
O
R
M
_
R
O
O
M
T
O
T
A
L
_
B
A
L
A
N
C
E
'
,
 
'
B
a
l
a
n
Ã
§
 
(
d
e
s
p
r
Ã
©
s
 
d
e
l
 
p
a
g
a
m
e
n
t
 
d
e
l
 
d
i
p
Ã
²
s
i
t
)
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
O
R
M
_
R
O
O
M
F
E
A
T
U
R
E
_
F
I
L
T
E
R
'
,
 
'
F
i
l
t
r
a
r
 
r
e
c
u
r
s
s
 
b
a
s
a
t
s
 
e
n
 
l
e
s
 
s
e
v
e
s
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
q
u
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
A
T
E
P
E
R
I
O
D
_
L
A
T
E
S
T
B
O
O
K
I
N
G
'
,
 
'
Ã
š
l
t
i
m
e
s
 
R
e
s
e
r
v
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
A
T
E
P
E
R
I
O
D
_
S
E
C
O
N
D
'
,
 
'
S
e
g
o
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
A
T
E
P
E
R
I
O
D
_
M
I
N
U
T
E
'
,
 
'
M
i
n
u
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
A
T
E
P
E
R
I
O
D
_
H
O
U
R
'
,
 
'
H
o
r
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
A
T
E
P
E
R
I
O
D
_
D
A
Y
'
,
 
'
D
i
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
A
T
E
P
E
R
I
O
D
_
W
E
E
K
'
,
 
'
s
e
t
m
a
n
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
A
T
E
P
E
R
I
O
D
_
M
O
N
T
H
'
,
 
'
m
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
A
T
E
P
E
R
I
O
D
_
Y
E
A
R
'
,
 
'
a
n
y
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
A
T
E
P
E
R
I
O
D
_
D
E
C
A
D
E
'
,
 
'
d
Ã
¨
c
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
A
T
E
P
E
R
I
O
D
_
S
'
,
 
'
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
A
T
E
P
E
R
I
O
D
_
A
G
O
'
,
 
'
f
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
A
T
E
P
E
R
I
O
D
_
F
R
O
M
N
O
W
'
,
 
'
d
e
s
d
e
 
a
r
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
W
H
O
L
E
D
A
Y
_
T
I
T
L
E
'
,
 
'
L
e
s
 
r
e
s
e
r
v
e
s
 
s
Ã
³
n
 
p
e
r
 
a
 
d
i
e
s
 
e
n
t
e
r
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
W
H
O
L
E
D
A
Y
_
D
E
S
C
'
,
 
'
P
e
r
 
d
e
f
e
c
t
e
 
e
l
s
 
r
e
c
u
r
s
o
s
 
d
e
 
r
e
s
e
r
v
e
s
 
d
e
 
s
i
s
t
e
m
a
 
e
s
t
a
n
 
a
p
a
g
a
t
s
 
p
e
r
 
l
a
 
n
i
t
 
p
e
l
 
q
u
e
 
u
n
a
 
r
e
s
e
r
v
a
 
d
e
l
 
p
r
i
m
e
r
 
d
e
 
G
e
n
e
r
'
.
d
a
t
e
(
'
Y
'
,
 
s
t
r
t
o
t
i
m
e
(
'
n
e
x
t
 
y
e
a
r
'
)
)
.
'
 
a
l
 
s
e
g
o
n
 
d
e
 
G
e
n
e
r
 
'
.
d
a
t
e
(
'
Y
'
,
 
s
t
r
t
o
t
i
m
e
(
'
n
e
x
t
 
y
e
a
r
'
)
)
.
'
 
n
o
m
Ã
©
s
 
c
o
b
r
e
i
x
 
u
n
a
 
n
i
t
.
 
P
e
r
Ã
²
 
s
i
 
c
a
n
v
i
a
 
a
q
u
e
s
t
a
 
o
p
c
i
Ã
³
 
a
 
S
i
,
 
l
l
a
v
o
r
s
 
l
a
 
r
e
s
e
r
v
a
 
c
u
b
r
i
r
Ã
 
 
d
i
e
s
 
e
n
t
e
r
s
,
 
p
e
l
 
q
u
e
 
u
n
a
 
r
e
s
e
r
v
a
 
e
n
 
a
q
u
e
s
t
s
 
d
i
e
s
 
c
u
b
r
i
r
Ã
 
 
a
m
b
d
Ã
³
s
 
d
i
e
s
 
i
 
a
l
 
c
l
i
e
n
t
 
s
e
 
l
i
 
f
a
c
t
u
r
a
r
a
n
 
d
o
s
 
d
i
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
'
P
e
r
 
d
Ã
­
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
P
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
'
P
e
r
 
p
e
r
s
o
n
a
 
i
 
d
Ã
­
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
A
L
_
W
H
O
L
E
D
A
Y
'
,
 
'
E
n
t
r
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
U
R
E
_
W
H
O
L
E
D
A
Y
'
,
 
'
S
o
r
t
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
N
I
G
H
T
S
_
W
H
O
L
E
D
A
Y
'
,
 
'
d
i
a
(
s
)
 
e
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
D
E
P
A
R
T
U
R
E
D
A
T
E
_
I
N
V
A
L
I
D
_
W
H
O
L
E
D
A
Y
'
,
 
'
D
a
t
a
 
d
e
 
S
o
r
t
i
d
a
 
i
n
c
o
r
r
e
c
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
B
O
O
K
I
N
G
_
T
O
O
_
S
H
O
R
T
1
_
W
H
O
L
E
D
A
Y
'
,
 
"
L
a
 
r
e
s
e
r
v
a
 
Ã
©
s
 
m
o
l
t
 
c
u
r
t
a
.
 
H
a
 
d
'
h
a
v
e
r
 
a
l
m
e
n
y
s
 
a
q
u
e
s
t
s
 
d
i
e
s
 
e
n
t
r
e
 
l
'
e
n
t
r
a
d
a
 
i
 
l
a
 
s
o
r
t
i
d
a
:
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
M
I
N
I
M
U
M
I
N
T
E
R
V
A
L
_
W
H
O
L
E
D
A
Y
'
,
 
'
M
Ã
­
n
i
m
 
i
n
t
e
r
v
a
l
 
e
n
t
r
e
 
E
n
t
r
a
d
a
/
S
o
r
t
i
d
a
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
M
I
N
I
M
U
M
I
N
T
E
R
V
A
L
_
D
E
S
C
_
W
H
O
L
E
D
A
Y
'
,
 
"
L
'
i
n
t
e
r
v
a
l
 
m
Ã
­
n
i
m
 
e
n
 
e
l
 
f
o
r
m
u
l
a
r
i
 
d
e
 
r
e
s
e
r
v
a
 
e
n
t
r
e
 
l
e
s
 
d
a
t
e
s
 
d
'
e
n
t
r
a
d
a
 
i
 
s
o
r
t
i
d
a
.
 
U
n
 
i
n
t
e
r
v
a
l
 
d
e
 
1
 
s
i
g
n
i
f
i
c
a
 
q
u
e
 
l
a
s
 
d
a
t
e
s
 
d
'
e
n
t
r
a
d
a
 
i
 
s
o
r
t
i
d
a
 
p
o
d
e
n
 
e
s
t
a
b
l
i
r
-
s
e
 
e
n
 
e
l
 
m
a
t
e
i
x
 
d
Ã
­
a
,
 
p
e
r
Ã
²
 
a
i
x
Ã
²
 
d
e
p
Ã
¨
n
 
e
n
c
a
r
a
 
d
e
 
l
'
i
n
t
e
r
v
a
l
 
m
Ã
­
n
i
m
 
q
u
e
 
Ã
©
s
 
c
a
l
c
u
l
a
t
 
a
u
t
o
m
Ã
 
t
i
c
a
m
e
n
t
 
p
e
l
 
m
o
t
o
r
 
d
e
 
r
e
s
e
r
v
a
,
 
j
a
 
q
u
e
 
c
o
m
p
r
o
v
a
 
l
e
s
 
t
a
r
i
f
e
s
 
v
Ã
 
l
i
d
e
s
 
p
e
l
 
p
e
r
Ã
­
o
d
e
 
d
e
 
r
e
s
e
r
v
a
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
W
H
O
L
E
D
A
Y
'
,
 
"
E
l
 
p
r
e
u
 
r
e
s
u
m
i
t
 
i
 
l
'
e
s
t
i
m
a
t
 
h
a
 
d
e
 
s
e
r
 
f
a
c
t
u
r
a
t
 
p
e
r
 
d
Ã
­
a
/
p
e
r
 
s
e
t
m
a
n
a
/
p
e
r
 
m
e
s
?
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
D
A
I
L
Y
_
W
H
O
L
E
D
A
Y
'
,
 
'
P
e
r
 
d
Ã
­
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
D
A
Y
S
B
E
F
O
R
E
F
I
R
S
T
B
O
O
K
I
N
G
_
W
H
O
L
E
D
A
Y
'
,
 
"
D
i
e
s
 
a
b
a
n
s
 
d
e
 
l
'
e
n
t
r
a
d
a
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
D
A
Y
S
B
E
F
O
R
E
F
I
R
S
T
B
O
O
K
I
N
G
_
D
E
S
C
_
W
H
O
L
E
D
A
Y
'
,
 
"
E
l
 
n
Ã
º
m
e
r
o
 
m
Ã
­
n
i
m
 
d
e
 
d
i
e
s
 
h
a
 
d
'
a
b
a
r
c
a
r
 
d
e
s
d
e
 
'
h
o
y
'
 
f
i
n
s
 
l
a
 
d
a
t
a
 
d
'
e
n
t
r
a
d
a
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
A
D
V
A
N
C
E
B
O
O
K
I
N
G
S
L
I
M
I
T
Y
E
S
N
O
_
D
E
S
C
_
W
H
O
L
E
D
A
Y
'
,
 
"
C
a
n
v
Ã
¯
i
 
a
i
x
Ã
²
 
a
 
S
Ã
­
,
 
s
i
 
v
o
l
 
l
i
m
i
t
a
r
 
r
e
s
e
r
v
e
s
 
a
v
a
n
Ã
§
a
d
e
s
 
(
u
t
i
l
i
t
z
i
 
e
l
 
s
e
g
Ã
¼
e
n
t
 
c
a
m
p
 
p
e
r
 
a
 
f
i
x
a
r
 
e
l
 
l
Ã
­
m
i
t
 
e
n
 
t
e
r
m
e
s
 
d
e
 
d
i
e
s
)
.
 
S
i
 
c
a
n
v
i
a
 
a
q
u
e
s
t
 
c
a
m
p
 
a
 
S
Ã
­
,
 
l
l
a
v
o
r
s
 
s
i
 
l
'
u
s
u
a
r
i
 
i
n
t
e
n
t
a
 
r
e
s
e
r
v
a
r
 
m
Ã
©
s
 
d
e
 
x
 
d
i
e
s
 
p
e
r
 
a
d
e
l
a
n
t
a
t
,
 
l
l
a
v
o
r
s
 
e
l
 
s
e
u
 
d
Ã
­
a
 
d
'
e
n
t
r
a
d
a
 
e
s
 
f
i
x
a
r
Ã
 
 
e
n
 
l
a
 
d
a
t
a
 
d
e
l
 
d
Ã
­
a
 
d
'
a
v
u
i
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
H
O
W
D
E
P
A
R
T
U
R
E
I
N
P
U
T
_
W
H
O
L
E
D
A
Y
'
,
 
'
M
o
s
t
r
a
r
 
c
a
m
p
 
d
e
 
d
a
t
a
 
d
e
 
s
o
r
t
i
d
a
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
S
H
O
W
D
E
P
A
R
T
U
R
E
I
N
P
U
T
_
D
E
S
C
_
W
H
O
L
E
D
A
Y
'
,
 
"
M
a
r
q
u
i
 
a
i
x
Ã
²
 
N
o
 
s
i
 
n
o
 
v
o
l
 
m
o
s
t
r
a
r
 
e
l
 
c
a
m
p
 
d
e
 
d
a
t
a
 
d
e
 
s
o
r
t
i
d
a
.
 
N
o
m
Ã
©
s
 
u
t
i
l
i
t
z
i
 
a
i
x
Ã
²
 
s
i
 
s
a
p
 
e
l
 
q
u
e
 
f
a
,
 
j
a
 
q
u
e
 
l
a
 
d
a
t
a
 
d
e
 
s
o
r
t
i
d
a
 
e
n
 
l
e
s
 
r
e
s
e
r
v
e
s
 
e
s
 
m
o
s
t
a
r
Ã
 
 
s
e
m
p
r
e
 
c
o
m
 
e
l
 
d
Ã
­
a
 
p
o
s
t
e
r
i
o
r
 
a
 
l
'
e
n
t
r
a
d
a
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
B
O
O
K
I
N
G
S
_
D
E
S
C
_
W
H
O
L
E
D
A
Y
'
,
 
"
S
i
 
m
a
r
c
a
 
a
i
x
Ã
²
 
c
o
m
 
S
Ã
­
,
 
l
l
a
v
o
r
s
 
l
e
s
 
r
e
s
e
r
v
e
s
 
e
s
 
p
r
e
n
d
r
a
n
 
p
e
r
 
u
n
 
p
e
r
Ã
­
o
d
e
 
p
r
e
f
i
x
a
t
.
 
S
i
 
e
s
 
m
a
r
c
a
 
c
o
m
 
N
o
,
 
a
s
s
e
g
Ã
º
r
i
'
s
 
d
e
 
q
u
e
 
e
l
 
c
a
m
p
 
\
"
d
i
a
 
d
'
e
n
t
r
a
d
a
 
d
e
f
i
n
i
t
\
"
 
n
o
 
e
s
t
Ã
 
 
m
a
r
c
a
t
 
c
o
m
 
S
Ã
­
 
(
a
 
n
o
 
s
e
r
 
q
u
e
 
e
s
p
e
c
Ã
­
f
i
c
a
m
e
n
t
 
v
u
l
g
u
i
s
 
f
o
r
Ã
§
a
r
 
a
l
s
 
c
l
i
e
n
t
s
 
a
 
s
o
r
t
i
r
 
e
n
 
u
n
 
d
Ã
­
a
 
d
e
 
l
a
 
s
e
t
m
a
n
a
 
q
u
e
 
v
u
l
g
u
i
s
)
 
d
'
u
n
a
 
a
l
t
r
a
 
m
a
n
e
r
a
 
n
o
 
t
i
n
d
r
Ã
 
 
m
o
l
t
s
 
l
i
n
k
s
 
e
n
 
e
l
 
c
a
l
e
n
d
a
r
i
 
d
e
 
d
i
s
p
o
n
i
b
i
l
i
t
a
t
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
Y
E
S
N
O
_
W
H
O
L
E
D
A
Y
'
,
 
"
D
Ã
­
a
 
d
'
e
n
t
r
a
d
a
 
p
r
e
d
e
f
i
n
i
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
Y
E
S
N
O
_
D
E
S
C
_
W
H
O
L
E
D
A
Y
'
,
 
"
N
o
m
Ã
©
s
 
p
e
r
 
a
 
l
l
o
c
s
 
q
u
e
 
o
f
e
r
e
i
x
e
n
 
p
e
r
Ã
­
o
d
e
s
 
f
i
x
e
s
 
d
e
 
r
e
s
e
r
v
e
s
.
 
T
r
Ã
¯
i
 
e
l
 
d
Ã
­
a
 
d
e
 
l
a
 
s
e
t
m
a
n
a
 
e
n
 
e
l
 
q
u
e
 
h
a
 
d
e
 
s
e
r
 
r
e
a
l
i
t
z
a
d
a
 
l
'
e
n
t
r
a
d
a
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
"
D
Ã
­
a
 
d
'
e
n
t
r
a
d
a
 
p
r
e
f
i
x
a
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
R
E
C
U
R
R
I
N
G
_
W
H
O
L
E
D
A
Y
'
,
 
"
D
i
e
s
 
d
'
e
n
t
r
a
d
a
 
p
r
e
f
i
x
a
t
s
 
r
e
p
e
t
i
t
s
:
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
R
E
C
U
R
R
I
N
G
_
D
E
S
C
_
W
H
O
L
E
D
A
Y
'
,
 
"
Q
u
a
n
 
l
e
s
 
d
a
t
e
a
s
 
p
r
e
f
i
x
a
d
e
s
 
d
'
e
n
t
r
a
d
a
 
e
s
t
a
n
 
s
e
l
e
c
c
i
o
n
a
d
e
s
,
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
d
a
t
e
s
 
q
u
e
 
e
s
 
p
o
d
e
n
 
v
e
u
r
e
 
e
n
 
l
a
 
l
l
i
s
t
a
 
d
e
s
p
l
e
g
a
b
l
e
.
 
F
Ã
­
x
i
'
s
 
q
u
e
 
l
a
 
l
l
i
s
t
a
 
d
e
 
d
a
t
e
s
 
n
o
 
i
n
c
l
u
i
r
Ã
 
 
n
i
n
g
u
n
a
 
d
a
t
a
 
s
i
 
l
a
 
r
e
s
e
r
v
a
 
n
o
 
Ã
©
s
 
p
o
s
s
i
b
l
e
 
d
e
g
u
t
 
a
 
r
e
s
e
r
v
e
s
 
a
n
t
e
r
i
o
r
s
,
 
i
 
q
u
e
 
l
a
 
l
l
i
s
t
a
 
s
e
r
Ã
 
 
d
e
 
f
e
t
 
e
l
 
d
o
b
l
e
 
d
e
 
l
l
a
r
g
a
 
q
u
e
 
e
l
 
s
e
u
 
n
Ã
º
m
e
r
o
 
s
e
l
e
c
c
i
o
n
a
t
 
j
a
 
q
u
e
 
t
i
n
d
r
Ã
 
 
u
n
 
n
Ã
º
m
e
r
o
 
s
i
m
i
l
a
r
 
d
e
 
d
a
t
e
s
 
h
i
s
t
Ã
²
r
i
q
u
e
s
 
(
o
n
 
s
i
g
u
i
 
p
o
s
s
i
b
l
e
)
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
S
_
P
E
R
_
W
H
O
L
E
D
A
Y
'
,
 
'
P
e
r
 
p
e
r
s
o
n
a
,
 
p
e
r
 
d
Ã
­
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
S
_
P
E
R
_
D
E
S
C
_
W
H
O
L
E
D
A
Y
'
,
 
'
S
e
l
e
c
c
i
o
n
i
 
S
Ã
­
 
s
i
 
v
o
l
 
c
a
n
v
i
a
r
 
p
e
r
-
p
e
r
s
o
n
a
 
p
e
r
-
d
Ã
­
a
.
 
S
i
 
n
o
,
 
l
l
a
v
o
r
s
 
e
l
s
 
c
o
s
t
o
s
 
e
s
 
c
a
l
c
u
l
a
r
a
n
 
e
n
 
b
a
s
e
 
a
 
p
e
r
-
r
e
c
u
r
s
-
p
e
r
-
d
Ã
­
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
D
E
P
O
S
I
T
_
C
H
A
R
G
E
D
E
P
O
S
I
T
_
V
A
R
I
A
B
L
E
_
D
E
S
C
_
W
H
O
L
E
D
A
Y
'
,
 
"
E
l
s
 
d
i
p
Ã
²
s
i
t
s
 
v
a
r
i
a
b
l
e
s
 
l
i
 
p
e
r
m
e
t
e
n
 
d
e
f
i
n
i
r
 
s
i
 
l
i
 
a
g
r
a
d
a
r
i
a
 
c
a
r
r
e
g
a
r
 
l
a
 
q
u
a
n
t
i
t
a
t
 
s
e
n
c
e
r
a
 
a
 
l
a
 
d
a
t
a
 
d
e
 
l
'
e
n
t
r
a
d
a
 
d
e
 
l
a
 
r
e
s
e
r
v
a
 
e
n
 
x
 
d
i
e
s
 
d
e
s
d
e
 
a
v
u
i
.
 
M
a
r
q
u
i
 
a
q
u
e
s
t
a
 
o
p
c
i
Ã
³
 
c
o
m
 
S
Ã
­
 
p
e
r
 
a
c
t
i
v
a
r
 
a
q
u
e
s
t
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
e
 
i
n
t
r
o
d
u
e
i
x
i
 
m
Ã
©
s
 
a
v
a
l
l
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
d
i
e
s
,
 
a
i
x
Ã
­
 
p
e
r
 
e
x
e
m
p
l
e
 
s
i
 
e
l
 
d
Ã
­
a
 
d
'
e
n
t
r
a
d
a
 
e
s
t
Ã
 
 
d
i
n
s
 
d
e
l
s
 
6
0
 
d
i
e
s
,
 
e
l
 
d
i
p
Ã
²
s
i
t
 
e
s
 
c
a
r
r
e
g
a
r
Ã
 
 
p
e
r
 
l
a
 
t
o
t
a
l
i
t
a
t
 
d
e
 
l
a
 
r
e
s
e
r
v
a
,
 
e
n
 
c
a
s
 
c
o
n
t
r
a
r
i
 
l
a
 
q
u
a
n
t
i
t
a
t
 
e
s
 
b
a
s
a
r
Ã
 
 
e
n
 
l
e
s
 
o
p
c
i
o
n
s
 
d
e
 
d
i
p
Ã
²
s
i
t
 
c
o
n
f
i
g
u
r
a
d
e
s
 
m
Ã
©
s
 
a
m
u
n
t
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
T
I
T
L
E
_
D
E
S
C
_
F
U
L
L
_
W
H
O
L
E
D
A
Y
'
,
 
"
L
a
 
m
a
j
o
r
Ã
­
a
 
d
e
l
s
 
n
e
g
o
c
i
s
 
r
e
c
a
l
c
u
l
a
r
a
n
 
e
l
s
 
p
r
e
u
s
 
d
e
l
 
r
e
c
u
r
s
 
b
a
s
a
t
 
e
n
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
r
e
c
u
r
s
o
s
 
d
'
u
n
 
t
i
p
u
s
 
r
e
q
u
e
r
i
t
 
q
u
e
 
e
s
t
a
n
 
d
i
s
p
o
n
i
b
l
e
s
 
e
n
 
l
a
 
d
a
t
a
 
d
o
n
a
d
a
.
 
A
i
x
Ã
²
 
e
l
s
 
p
e
r
m
e
t
 
o
f
e
r
i
r
 
d
e
s
c
o
m
p
t
e
s
 
e
n
 
u
n
 
t
i
p
u
s
 
d
e
 
r
e
c
u
r
s
/
n
e
g
o
c
i
 
q
u
e
 
n
o
 
e
s
t
Ã
 
 
o
c
u
p
a
t
 
d
u
r
a
n
t
 
e
l
 
p
e
r
Ã
­
o
d
o
 
d
o
n
a
t
,
 
a
m
b
 
l
'
a
v
a
n
t
a
t
g
e
 
d
'
a
t
r
e
u
r
e
 
a
 
n
e
g
o
c
i
s
 
q
u
e
 
d
'
u
n
a
 
a
l
t
r
a
 
f
o
r
m
a
 
e
s
 
p
o
d
r
i
e
n
 
p
e
r
d
r
e
.
<
b
r
/
>
 
A
c
t
i
v
a
n
t
 
i
 
c
o
n
f
i
g
u
r
a
n
t
 
a
q
u
e
s
t
 
p
l
u
g
i
n
 
p
o
d
r
Ã
 
 
o
f
e
r
i
r
 
p
r
e
u
s
 
a
j
u
s
t
a
b
l
e
s
 
e
n
 
b
a
s
e
 
a
l
 
n
Ã
º
m
e
r
o
 
d
e
 
r
e
c
u
r
s
o
s
 
d
'
u
n
 
t
i
p
u
s
 
e
s
c
o
l
l
i
t
 
q
u
e
 
e
s
t
a
n
 
d
i
s
p
o
n
i
b
l
e
s
 
e
n
 
e
l
 
n
e
g
o
c
i
 
e
l
 
d
Ã
­
a
 
e
s
t
i
p
u
l
a
t
.
<
b
r
/
>
 
L
'
u
m
b
r
a
l
 
d
e
 
d
i
e
s
,
 
d
e
f
i
n
e
i
x
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
d
i
e
s
 
e
n
t
r
e
 
e
l
s
 
q
u
e
 
h
a
 
d
'
e
s
t
a
r
 
l
a
 
d
a
t
a
 
d
'
e
n
t
r
a
d
a
 
a
b
a
n
s
 
d
e
 
q
u
e
 
e
l
s
 
p
r
e
u
s
 
d
e
l
 
r
e
c
u
r
s
 
s
'
a
j
u
s
t
i
n
 
a
 
a
q
u
e
s
t
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
,
 
l
l
a
v
o
r
s
 
l
e
s
 
o
p
c
i
o
n
s
 
d
e
 
p
e
r
c
e
n
t
a
t
g
e
s
 
l
i
 
p
e
r
m
e
t
r
Ã
 
n
 
c
o
n
f
i
g
u
r
a
r
 
e
l
 
p
e
r
c
e
n
t
a
t
g
e
 
d
e
 
r
e
c
u
r
s
o
s
 
q
u
e
 
p
o
d
e
n
 
e
s
t
a
r
 
d
i
s
p
o
n
i
b
l
e
s
 
d
e
s
p
r
Ã
©
s
 
d
e
 
q
u
e
 
s
e
'
l
s
 
a
p
l
i
q
u
i
 
u
n
 
d
e
s
c
o
m
p
t
e
 
d
o
n
a
t
.
 
F
Ã
­
x
i
'
s
 
p
e
r
Ã
²
 
q
u
e
 
s
i
 
m
Ã
º
l
t
i
p
l
e
s
 
r
e
c
u
r
s
o
s
 
s
Ã
³
n
 
r
e
s
e
r
v
a
t
s
,
 
e
l
 
n
i
v
e
l
l
 
a
c
t
u
a
l
 
d
e
 
d
e
s
c
o
m
p
t
e
 
s
'
a
p
l
i
c
a
r
Ã
 
 
a
 
t
o
t
s
 
e
l
s
 
r
e
c
u
r
s
o
s
 
i
 
n
o
 
e
s
 
r
e
d
u
Ã
¯
r
Ã
 
 
a
 
m
e
s
u
r
a
 
q
u
e
 
e
s
 
s
e
l
e
c
c
i
o
n
i
n
 
m
Ã
©
s
 
r
e
c
u
r
s
o
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
W
I
S
E
P
R
I
C
E
_
T
H
R
E
A
S
H
O
L
D
_
W
H
O
L
E
D
A
Y
'
,
 
"
U
m
b
r
a
l
 
(
n
Ã
º
m
e
r
o
 
d
e
 
d
i
e
s
 
e
n
t
r
e
 
l
a
 
d
a
t
a
 
d
'
e
n
t
r
a
d
a
 
i
 
a
v
u
i
.
)
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
P
E
N
D
I
N
G
_
W
H
O
L
E
D
A
Y
'
,
 
'
E
n
t
r
a
d
a
 
p
e
n
d
e
n
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
E
T
O
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
'
E
n
t
r
a
d
a
 
A
v
u
i
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
R
E
S
I
D
E
N
T
_
W
H
O
L
E
D
A
Y
'
,
 
'
E
n
t
r
a
d
a
 
r
e
a
l
i
t
z
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
T
O
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
'
S
o
r
t
i
d
e
s
 
A
v
u
i
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
S
T
I
L
L
H
E
R
E
_
W
H
O
L
E
D
A
Y
'
,
 
'
S
o
r
t
i
d
e
s
 
F
i
n
a
l
i
t
z
a
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
L
A
T
E
_
W
H
O
L
E
D
A
Y
'
,
 
'
N
o
 
h
a
 
e
n
t
r
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
_
S
T
A
Y
D
A
Y
S
_
W
H
O
L
E
D
A
Y
'
,
 
'
D
i
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
O
O
K
A
G
U
E
S
T
I
N
_
W
H
O
L
E
D
A
Y
'
,
 
'
M
a
r
c
a
r
 
u
n
a
 
r
e
s
e
r
v
a
 
c
o
m
 
e
n
t
r
a
d
a
 
r
e
a
l
i
t
z
a
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
B
O
O
K
A
G
U
E
S
T
O
U
T
_
W
H
O
L
E
D
A
Y
'
,
 
'
M
a
r
c
a
r
 
c
o
m
 
r
e
s
e
r
v
a
 
r
e
t
o
r
n
a
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
B
O
O
K
I
N
_
T
I
T
L
E
_
W
H
O
L
E
D
A
Y
'
,
 
'
M
a
r
c
a
r
 
u
n
a
 
r
e
s
e
r
v
a
 
c
o
m
 
e
n
t
r
a
d
a
 
r
e
s
e
r
v
a
d
a
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
B
O
O
K
O
U
T
_
T
I
T
L
E
_
W
H
O
L
E
D
A
Y
'
,
 
'
M
a
r
c
a
r
 
u
n
a
 
r
e
s
e
r
v
a
 
c
o
m
 
r
e
t
o
r
n
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
I
N
V
O
I
C
E
_
C
O
S
T
P
E
R
N
I
G
H
T
_
W
H
O
L
E
D
A
Y
'
,
 
'
C
o
s
t
 
p
e
r
 
d
Ã
­
a
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
I
N
V
O
I
C
E
_
S
T
A
Y
N
I
G
H
T
S
_
W
H
O
L
E
D
A
Y
'
,
 
'
N
Ã
º
m
e
r
o
 
d
e
 
d
i
e
s
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
A
M
E
N
D
_
O
V
E
R
R
I
D
E
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
T
O
T
A
L
'
,
 
"
A
n
u
l
Â
·
l
a
c
i
Ã
³
 
t
o
t
a
l
 
d
'
A
l
l
o
t
j
a
m
e
n
t
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
C
O
M
P
_
A
M
E
N
D
_
O
V
E
R
R
I
D
E
_
S
A
V
E
'
,
 
'
G
u
a
r
d
a
r
 
l
a
 
A
n
u
l
Â
·
l
a
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
O
R
M
_
E
M
A
I
L
_
N
E
W
U
S
E
R
_
E
M
A
I
L
_
L
O
G
I
N
_
D
E
T
A
I
L
S
'
,
 
"
E
n
v
i
a
r
 
a
l
s
 
n
o
u
s
 
u
s
u
a
r
i
s
 
l
e
s
 
s
e
v
e
s
 
d
a
d
e
s
 
d
'
a
c
c
Ã
©
s
?
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
O
R
M
_
E
M
A
I
L
_
N
E
W
U
S
E
R
_
E
M
A
I
L
_
L
O
G
I
N
_
D
E
T
A
I
L
S
_
D
E
S
C
'
,
 
"
S
i
 
l
'
o
p
c
i
Ã
³
 
d
e
 
c
r
e
a
r
 
n
o
u
 
u
s
u
a
r
i
 
e
s
t
 
m
a
r
c
a
d
a
 
c
o
m
 
S
Ã
­
,
 
p
o
t
 
c
a
n
v
i
a
r
 
a
q
u
e
s
t
a
 
o
p
c
i
Ã
³
 
a
 
N
o
 
p
e
r
 
a
s
s
e
g
u
r
a
r
-
s
e
 
d
e
 
q
u
e
 
n
o
 
s
e
'
l
s
 
e
n
v
i
a
 
e
l
s
 
s
e
u
s
 
d
e
t
a
l
l
s
 
d
'
a
c
c
Ã
©
s
 
u
n
 
c
o
p
 
q
u
e
 
s
'
h
a
 
c
r
e
a
t
 
l
'
u
s
u
a
r
i
.
 
A
i
x
Ã
²
 
p
o
t
 
s
e
r
 
Ã
º
t
i
l
 
s
i
 
e
s
t
Ã
 
 
a
f
e
g
i
n
t
 
a
u
t
o
m
Ã
 
t
i
c
a
m
e
n
t
 
u
s
u
a
r
i
s
 
a
 
u
n
a
 
l
l
i
s
t
a
 
d
e
 
c
o
r
r
e
u
,
 
p
e
r
 
e
x
e
m
p
l
e
,
 
i
 
n
o
 
v
o
l
 
q
u
e
 
e
l
s
 
u
s
u
a
r
i
s
 
e
s
 
l
o
g
u
e
j
i
n
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
O
R
M
_
T
A
X
_
O
U
T
P
U
T
'
,
 
'
M
o
s
t
r
a
r
 
i
m
p
o
s
t
o
s
 
e
n
 
e
l
 
r
e
s
u
m
 
d
e
 
t
o
t
a
l
s
 
d
e
l
 
f
o
r
m
u
l
a
r
i
 
d
e
 
r
e
s
e
r
v
a
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
O
R
M
_
T
A
X
_
O
U
T
P
U
T
_
D
E
S
C
'
,
 
"
E
v
i
t
a
r
 
q
u
e
 
e
l
 
f
o
r
m
u
l
a
r
i
 
d
e
 
r
e
s
e
r
v
a
 
m
o
s
t
r
e
 
e
l
s
 
c
a
m
p
s
 
d
'
i
m
p
o
s
t
o
s
 
e
n
 
e
l
 
r
e
s
u
m
 
d
e
 
t
o
t
a
l
s
 
m
a
r
c
a
n
t
 
a
q
u
e
s
t
a
 
o
p
c
i
Ã
³
 
c
o
m
 
N
O
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
O
D
D
S
_
C
A
N
C
E
L
L
A
T
I
O
N
_
T
H
R
E
A
S
H
O
L
D
'
,
 
'
U
m
b
r
a
l
 
d
e
 
c
a
n
c
e
l
Â
·
l
a
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
O
D
D
S
_
C
A
N
C
E
L
L
A
T
I
O
N
_
T
H
R
E
A
S
H
O
L
D
_
D
E
S
C
'
,
 
"
C
o
n
e
c
t
a
t
,
 
e
l
s
 
u
s
u
a
r
i
s
 
r
e
g
i
s
t
r
a
t
s
 
p
o
d
e
n
 
c
a
n
c
e
l
Â
·
l
a
r
 
l
e
s
 
s
e
v
e
s
 
p
r
Ã
²
p
i
e
s
 
r
e
s
e
r
v
e
s
.
 
A
q
u
Ã
­
 
p
o
t
 
f
i
x
a
r
 
l
'
u
m
b
r
a
l
 
e
n
 
d
i
e
s
,
 
e
n
 
e
l
s
 
q
u
e
 
l
a
 
r
e
s
e
r
v
a
 
n
o
 
p
o
t
 
s
e
r
 
c
a
n
c
e
l
Â
·
l
a
d
a
 
d
e
s
p
r
Ã
©
s
 
d
'
u
n
 
c
e
r
t
 
n
Ã
º
m
e
r
o
 
d
e
 
d
i
e
s
 
a
b
a
n
s
 
d
e
l
 
d
Ã
­
a
 
d
'
a
r
r
i
b
a
d
a
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
D
I
T
_
P
R
O
F
I
L
E
'
,
 
'
E
d
i
t
a
r
 
P
e
r
f
i
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
T
Y
P
E
_
A
S
S
I
G
N
M
E
N
T
'
,
 
'
t
i
p
u
s
 
d
e
 
r
e
l
a
c
i
Ã
³
 
a
m
b
 
l
a
 
p
r
o
p
i
e
t
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
I
M
A
G
E
'
,
 
'
I
m
a
t
g
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
R
A
T
E
S
_
C
L
I
C
K
I
N
I
T
I
A
L
'
,
 
"
P
r
e
m
i
 
s
o
b
r
e
 
u
n
a
 
l
l
e
t
r
a
 
p
e
r
 
a
 
m
o
s
t
r
a
r
 
t
o
t
s
 
e
l
s
 
n
e
g
o
c
i
s
 
q
u
e
 
c
o
m
e
n
c
e
n
 
p
e
r
 
a
q
u
e
s
t
a
 
l
l
e
t
r
a
.
 
U
n
 
c
o
p
 
q
u
e
 
t
Ã
©
 
u
n
a
 
l
l
i
s
t
a
 
d
e
 
p
r
o
p
i
e
t
a
t
s
 
p
o
t
 
a
s
s
i
g
n
a
r
 
t
a
s
e
s
 
d
e
 
c
o
m
i
s
s
i
Ã
³
 
a
 
a
q
u
e
s
t
e
s
 
p
r
o
p
i
e
t
a
t
s
 
o
 
p
r
Ã
©
m
e
r
 
s
o
b
r
e
 
e
l
s
 
s
e
u
s
 
i
c
o
n
e
s
 
d
'
e
d
i
c
i
Ã
³
 
p
e
r
 
a
 
v
e
u
r
e
 
l
e
s
 
e
s
t
a
d
Ã
­
s
t
i
q
u
e
s
 
d
e
l
s
 
n
e
g
o
c
i
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
T
A
X
_
R
A
T
E
_
E
D
I
T
'
,
 
"
E
d
i
t
a
r
 
p
e
r
c
e
n
t
a
t
g
e
 
d
'
i
m
p
o
s
t
o
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
U
S
T
O
M
F
I
E
L
D
S
_
T
I
T
L
E
_
E
D
I
T
'
,
 
'
E
d
i
t
a
r
 
c
a
m
p
s
 
p
e
r
s
o
n
a
l
i
t
z
a
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
L
I
C
E
N
S
E
S
E
R
V
E
R
_
P
A
S
S
W
O
R
D
'
,
 
'
C
l
a
u
 
d
e
 
l
l
i
c
Ã
¨
n
c
i
a
 
d
e
l
 
s
e
r
v
i
d
o
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
L
I
C
E
N
S
E
S
E
R
V
E
R
_
U
S
E
R
N
A
M
E
'
,
 
'
U
s
u
a
r
i
 
d
e
 
l
l
i
c
Ã
¨
n
c
i
a
 
d
e
l
 
s
e
r
v
i
d
o
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
L
I
C
E
N
S
E
S
E
R
V
E
R
_
U
S
E
R
N
A
M
E
_
D
E
S
C
'
,
 
"
S
i
 
v
o
s
t
Ã
¨
 
t
Ã
©
 
u
n
 
n
o
m
 
d
'
u
s
u
a
r
i
o
 
i
 
c
o
n
t
r
a
s
e
n
y
a
 
e
n
 
e
l
 
s
e
r
v
i
d
o
r
 
d
e
 
l
l
i
c
Ã
¨
n
c
i
a
,
 
s
i
 
u
s
 
p
l
a
u
 
i
n
t
r
o
d
u
e
i
x
i
'
l
s
.
 
A
i
x
Ã
²
 
l
'
a
j
u
d
a
r
Ã
 
 
a
 
a
c
c
e
d
i
r
 
a
l
s
 
p
l
u
g
i
n
s
 
a
l
s
 
q
u
e
 
e
s
t
Ã
 
 
s
u
b
s
c
r
i
t
.
 
S
i
 
h
a
 
i
n
g
r
e
s
s
a
t
 
u
n
a
 
c
l
a
u
 
v
Ã
 
l
i
d
a
 
d
e
 
s
u
p
o
r
t
 
e
n
 
e
l
 
c
a
m
p
 
d
e
 
m
Ã
©
s
 
a
v
a
l
l
,
 
n
o
 
Ã
©
s
 
n
e
c
e
s
s
a
r
i
 
i
n
s
e
r
t
a
r
 
l
'
u
s
u
a
r
i
 
i
 
c
o
n
t
r
a
s
e
n
y
a
 
a
q
u
Ã
­
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
E
R
S
I
O
N
C
H
E
C
K
_
T
H
I
S
J
O
M
R
E
S
V
E
R
S
I
O
N
'
,
 
'
V
e
r
s
i
Ã
³
 
A
c
t
u
a
l
 
d
e
 
J
o
m
r
e
s
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
E
R
S
I
O
N
C
H
E
C
K
_
L
A
T
E
S
T
J
O
M
R
E
S
V
E
R
S
I
O
N
'
,
 
'
Ã
š
l
t
i
m
a
 
v
e
r
s
i
Ã
³
 
d
e
 
J
o
m
r
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
E
R
S
I
O
N
C
H
E
C
K
_
V
E
R
S
I
O
N
W
A
R
N
I
N
G
'
,
 
'
A
l
e
r
t
a
 
:
 
H
i
 
h
a
 
u
n
a
 
n
o
v
a
 
v
e
r
s
i
Ã
³
 
d
e
 
J
o
m
r
e
s
 
d
i
s
p
o
n
i
b
l
e
,
 
s
e
 
l
i
 
r
e
c
o
m
a
n
a
 
a
c
t
u
a
l
i
t
z
a
r
 
q
u
a
n
 
p
u
g
u
i
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
D
U
C
T
_
I
N
F
O
R
M
A
T
I
O
N
'
,
 
'
B
e
n
v
i
n
g
u
t
 
a
 
J
o
m
r
e
s
,
 
e
s
p
e
r
e
m
 
q
u
e
 
d
i
s
f
r
u
t
i
 
u
t
i
l
i
t
z
a
n
t
 
e
l
 
s
i
s
t
e
m
a
 
d
e
 
r
e
s
e
r
v
e
s
 
p
r
e
f
e
r
i
t
 
d
e
 
J
o
o
m
l
a
.
 
S
i
 
d
e
s
i
t
j
a
 
c
o
m
p
r
a
r
 
l
l
i
c
Ã
¨
n
c
i
e
s
 
d
e
 
J
o
m
r
e
s
 
P
l
a
t
a
 
u
 
O
r
 
,
 
<
a
 
h
r
e
f
=
"
h
t
t
p
:
/
/
w
w
w
.
j
o
m
r
e
s
.
n
e
t
/
p
r
i
c
e
s
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
 
S
i
 
u
s
 
p
l
a
u
,
 
v
i
s
i
t
i
 
l
a
 
n
o
s
t
r
a
 
p
Ã
 
g
i
n
a
<
/
a
>
 
p
e
r
 
a
 
o
b
t
e
n
i
r
 
i
n
f
o
r
m
a
c
i
Ã
³
 
s
o
b
r
e
 
l
a
 
m
i
l
l
o
r
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
D
U
C
T
_
I
N
F
O
R
M
A
T
I
O
N
2
'
,
 
"
A
q
u
e
s
t
 
s
i
s
t
e
m
a
 
Ã
©
s
 
i
d
e
a
l
 
p
e
r
 
a
 
q
u
a
l
s
e
v
o
l
 
e
s
c
e
n
a
r
i
,
 
p
o
t
 
s
e
r
 
u
n
 
s
i
s
t
e
m
a
 
s
i
m
p
l
e
 
d
e
 
r
e
s
e
r
v
a
 
d
'
u
n
a
 
s
o
l
a
 
p
r
o
p
i
e
t
a
t
 
f
i
n
s
 
u
n
 
l
l
o
c
 
a
m
b
 
m
Ã
º
l
t
i
p
l
e
s
 
u
s
u
a
r
i
s
,
 
e
n
 
d
i
f
e
r
e
n
t
s
 
i
d
i
o
m
e
s
 
a
m
b
 
m
Ã
º
l
t
i
p
l
e
s
 
p
r
o
p
i
e
t
a
t
s
.
 
S
i
u
s
 
p
l
a
u
 
v
e
g
i
 
l
a
 
s
e
c
c
i
Ã
³
 
\
"
A
y
u
d
a
\
"
 
a
 
l
'
e
s
q
u
e
r
r
a
,
 
i
n
c
l
u
Ã
¯
n
t
 
l
a
 
p
Ã
 
g
i
n
a
 
d
e
 
\
"
C
o
m
o
 
c
o
m
e
n
Ã
§
a
r
\
"
 
q
u
e
 
e
l
 
p
o
t
 
a
j
u
d
a
r
 
a
m
b
 
e
l
s
 
p
r
i
m
e
r
s
 
p
a
s
s
o
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
O
B
B
E
D
_
P
O
R
T
A
L
U
I
_
C
U
R
R
E
N
T
_
P
R
O
P
E
R
T
Y
'
,
 
'
P
r
o
p
i
e
t
a
t
 
A
c
t
i
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
T
I
T
L
E
'
,
 
'
A
l
t
e
r
n
a
t
i
v
e
s
 
d
e
 
c
o
n
f
i
g
u
r
a
c
i
Ã
³
 
S
M
T
P
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
D
E
S
C
'
,
 
"
M
a
r
q
u
i
 
a
q
u
e
s
t
a
 
o
p
c
i
Ã
³
 
c
o
m
 
S
Ã
­
 
p
e
r
 
u
t
i
l
i
t
z
a
r
 
c
o
n
f
i
g
u
r
a
c
i
o
n
s
 
d
e
 
S
M
T
P
 
a
l
t
e
r
n
a
t
i
v
e
s
.
 
U
n
 
c
r
e
i
x
e
n
t
 
n
Ã
º
m
e
r
o
 
d
'
a
l
l
o
t
j
a
m
e
n
t
s
 
w
e
b
 
s
e
m
b
l
a
 
q
u
e
 
e
s
t
a
n
 
b
l
o
q
u
e
j
a
n
t
 
l
a
 
f
u
n
c
i
o
n
a
l
i
t
a
t
 
d
e
 
P
H
P
 
m
a
i
l
,
 
p
e
l
 
q
u
e
 
p
o
t
 
e
s
c
o
l
l
i
r
 
a
n
u
l
Â
·
l
a
r
 
l
e
s
 
c
o
n
f
i
g
u
r
a
c
i
o
n
s
 
q
u
e
 
J
o
m
r
e
s
 
a
d
o
p
t
a
 
d
e
l
 
s
e
u
 
a
l
l
o
t
j
a
m
e
n
t
 
C
M
S
 
(
j
o
o
m
l
a
)
 
i
 
u
t
i
l
i
t
z
a
r
 
l
e
s
 
c
o
n
f
i
g
u
r
a
c
i
o
n
s
 
a
l
 
s
e
u
 
g
u
s
t
.
 
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
H
O
S
T
'
,
 
'
A
l
l
o
t
j
a
m
e
n
t
 
A
l
t
e
r
n
a
t
i
u
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
H
O
S
T
_
D
E
S
C
'
,
 
'
C
a
n
v
Ã
¯
i
 
a
i
x
Ã
²
 
a
l
 
s
e
u
 
s
e
r
v
i
d
o
r
 
d
e
 
m
a
i
l
 
S
M
T
P
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
P
O
R
T
'
,
 
'
P
o
r
t
 
a
l
t
e
r
n
a
t
i
u
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
P
O
R
T
_
D
E
S
C
'
,
 
'
c
a
n
v
i
a
r
 
a
i
x
Ã
²
 
a
l
 
s
e
u
 
p
o
r
t
 
s
m
t
p
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
P
R
O
T
O
C
O
L
'
,
 
'
P
r
o
t
o
c
o
l
 
A
l
t
e
r
n
a
t
i
u
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
P
R
O
T
O
C
O
L
_
D
E
S
C
'
,
 
"
D
e
p
e
n
e
n
t
 
d
e
 
l
a
 
s
e
v
a
 
c
o
n
f
i
g
u
r
a
c
i
Ã
³
 
d
e
l
 
s
e
u
 
s
e
r
v
i
d
o
r
 
s
m
t
p
,
 
h
a
 
d
e
 
d
e
i
x
a
r
 
a
q
u
e
s
t
a
 
e
n
 
b
l
a
n
c
,
 
o
 
i
n
t
r
o
d
u
Ã
¯
r
 
'
s
s
l
'
 
o
 
'
t
l
s
'
.
 
P
r
e
g
u
n
t
i
 
a
l
 
s
e
u
 
p
r
o
v
e
Ã
¯
d
o
r
 
s
m
t
p
 
s
i
 
e
l
 
d
e
s
c
o
n
e
i
x
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
A
U
T
H
'
,
 
'
U
t
i
l
i
t
z
a
r
 
a
u
t
e
n
t
i
c
a
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
A
U
T
H
_
D
E
S
C
'
,
 
"
s
i
 
e
l
 
s
e
u
 
s
e
r
v
i
d
o
r
 
s
m
t
p
 
r
e
q
u
e
r
e
i
x
 
q
u
e
 
e
l
s
 
c
l
i
e
n
t
s
 
e
s
 
c
o
n
n
e
c
t
i
n
 
m
a
r
q
u
i
 
S
Ã
­
.
 
S
'
u
t
i
l
i
t
z
a
r
Ã
 
 
l
l
a
v
o
r
s
 
e
l
 
n
o
m
 
d
'
u
s
u
a
r
i
 
i
 
c
o
n
t
r
a
s
e
n
y
a
.
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
U
S
E
R
N
A
M
E
'
,
 
'
U
s
u
a
r
i
 
A
l
t
e
r
n
a
t
i
u
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
U
S
E
R
N
A
M
E
_
D
E
S
C
'
,
 
'
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
P
A
S
S
W
O
R
D
'
,
 
'
C
o
n
t
r
a
s
e
n
y
a
 
A
l
t
e
r
n
a
t
i
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
P
A
S
S
W
O
R
D
_
D
E
S
C
'
,
 
'
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
Q
U
I
C
K
_
I
N
F
O
'
,
 
'
I
n
f
o
r
m
a
c
i
Ã
³
 
R
Ã
 
p
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
N
U
_
S
H
O
W
'
,
 
'
M
o
s
t
r
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
N
U
_
H
I
D
E
'
,
 
'
O
c
u
l
t
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
D
E
F
A
U
L
T
'
,
 
'
P
e
r
 
d
e
f
e
c
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
A
N
Y
B
O
D
Y
'
,
 
'
Q
u
a
l
s
e
v
o
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
R
E
G
I
S
T
E
R
E
D
'
,
 
'
R
e
g
i
s
t
r
a
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
M
A
N
A
G
E
R
'
,
 
'
G
e
s
t
o
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
S
U
P
E
R
M
A
N
A
G
E
R
'
,
 
'
S
u
p
e
r
 
G
e
s
t
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
N
O
B
O
D
Y
'
,
 
'
N
i
n
g
Ã
º
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
T
I
T
L
E
'
,
 
"
M
e
n
u
 
d
e
 
c
o
n
t
r
o
l
 
d
'
A
c
c
Ã
©
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
D
E
S
C
'
,
 
"
A
q
u
e
s
t
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
l
i
 
p
e
r
m
e
t
 
c
o
n
t
r
o
l
a
r
 
q
u
i
 
p
o
d
r
Ã
 
 
v
e
u
r
e
 
u
n
 
p
l
u
g
i
n
 
e
n
 
e
l
 
m
e
n
Ã
º
 
p
r
i
n
c
i
p
a
l
.
 
L
e
s
 
o
p
c
i
o
n
s
 
0
0
0
0
9
 
s
Ã
³
n
 
v
i
s
i
b
l
e
s
 
p
e
l
s
 
u
s
u
a
r
i
s
 
r
e
g
i
s
t
r
a
t
s
 
i
 
n
o
 
r
e
g
i
s
t
r
a
t
s
,
 
l
e
s
 
0
0
0
1
0
 
n
o
r
m
a
l
m
e
n
t
 
s
Ã
³
n
 
p
e
r
 
a
 
l
e
s
 
a
c
t
i
v
i
t
a
t
s
 
d
e
 
r
e
c
e
p
c
i
Ã
³
 
q
u
e
 
s
'
u
t
l
i
t
z
e
n
 
h
a
b
i
t
u
a
l
m
e
n
t
 
e
n
 
e
l
 
d
i
a
 
a
 
d
i
a
,
 
l
e
s
 
0
0
0
1
1
 
s
'
u
t
i
l
i
t
z
e
n
 
p
e
r
 
a
 
d
e
f
i
n
i
r
 
i
 
c
o
n
f
i
g
u
r
a
r
 
u
n
a
 
p
r
o
p
i
e
t
a
t
 
p
e
r
Ã
²
 
s
'
u
t
i
l
i
t
z
e
n
 
m
e
n
y
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
R
E
C
E
P
T
I
O
N
I
S
T
'
,
 
'
R
e
c
e
p
c
i
o
n
i
s
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
C
O
N
F
I
G
_
T
I
T
L
E
'
,
 
"
C
o
n
t
r
o
l
 
d
'
A
c
c
Ã
©
s
 
T
o
t
a
l
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
C
O
N
F
I
G
_
D
E
S
C
'
,
 
"
M
a
r
q
u
i
 
a
q
u
e
s
t
a
 
o
p
c
i
Ã
³
 
c
o
m
 
S
Ã
­
 
p
e
r
 
a
c
t
i
v
a
r
 
l
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
c
o
n
t
r
o
l
 
d
'
a
c
c
Ã
©
s
 
t
o
t
a
l
,
 
d
e
s
p
r
Ã
©
s
 
v
i
s
i
t
a
 
l
'
o
p
c
i
Ã
³
 
d
e
 
C
o
n
t
r
o
l
 
d
'
A
c
c
Ã
©
s
 
a
 
s
o
t
a
 
d
e
 
M
a
n
t
e
n
i
m
e
n
t
 
d
e
l
 
s
i
s
t
e
m
a
 
p
e
r
 
p
o
d
e
r
 
c
o
n
f
i
g
u
r
a
r
 
e
l
s
 
c
o
n
t
r
o
l
s
 
d
'
a
c
c
Ã
©
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
D
E
S
C
_
A
D
D
E
N
D
U
M
'
,
 
"
O
b
s
e
r
v
i
,
 
p
e
r
Ã
²
,
 
q
u
e
 
a
q
u
e
s
t
s
 
a
j
u
s
t
o
s
 
n
o
 
c
o
n
t
r
o
l
e
n
 
e
l
s
 
s
c
r
i
p
t
s
 
s
u
b
r
a
t
l
l
a
t
s
 
a
l
s
 
q
u
e
 
c
o
n
n
e
c
t
e
n
,
 
a
i
x
Ã
­
 
p
e
r
 
e
x
e
m
p
l
e
 
s
i
 
a
s
s
i
g
n
a
 
<
i
>
0
0
0
0
9
u
s
e
r
_
o
p
t
i
o
n
_
0
3
_
s
e
a
r
c
h
<
/
i
>
 
a
l
 
'
G
e
s
t
o
r
'
,
 
u
n
 
u
s
u
a
r
i
 
q
u
e
 
c
o
n
e
i
x
i
 
j
o
m
r
e
s
 
p
o
t
 
e
n
c
a
r
a
 
f
e
r
 
u
n
a
 
t
r
u
c
a
d
a
 
a
 
j
0
6
0
0
0
s
e
a
r
c
h
.
c
l
a
s
s
.
p
h
p
 
i
n
t
r
o
d
u
Ã
¯
n
t
 
h
t
t
p
:
/
/
w
w
w
.
d
o
m
a
i
n
.
c
o
m
/
i
n
d
e
x
.
p
h
p
?
o
p
t
i
o
n
=
c
o
m
_
j
o
m
r
e
s
&
t
a
s
k
=
s
e
a
r
c
h
 
e
n
 
l
a
 
s
e
v
a
 
b
a
r
r
a
 
d
e
 
n
a
v
e
g
a
c
i
o
n
s
.
 
A
i
x
Ã
²
 
e
s
 
f
a
 
i
n
t
e
n
c
i
o
n
a
d
a
m
e
n
t
,
 
j
a
 
q
u
e
 
a
q
u
e
s
t
 
C
o
n
t
r
o
l
 
d
'
A
c
c
Ã
©
s
 
a
 
M
e
n
Ã
º
 
s
i
m
p
l
e
m
e
n
t
 
c
o
n
t
r
o
l
a
 
e
l
 
q
u
e
 
p
o
t
 
s
e
r
 
v
i
s
t
 
e
n
 
e
l
 
M
e
n
Ã
º
 
P
r
i
n
c
i
p
a
l
 
d
e
 
J
o
m
r
e
s
.
 
S
i
 
n
e
c
e
s
s
i
t
a
 
c
o
n
t
r
o
l
s
 
m
Ã
©
s
 
a
j
u
s
t
a
t
s
,
 
m
a
r
q
u
i
 
S
i
 
l
'
o
p
c
i
Ã
³
 
d
e
 
C
o
n
t
r
o
l
 
d
'
A
c
c
Ã
©
s
 
T
o
t
a
l
 
e
n
 
l
a
 
C
o
n
f
i
g
u
r
a
c
i
Ã
³
 
d
e
l
 
L
l
o
c
 
i
 
t
o
r
n
i
 
a
 
e
n
t
r
a
r
 
e
n
 
e
l
 
M
e
n
Ã
º
 
d
e
 
C
o
n
t
r
o
l
 
d
'
A
c
c
Ã
©
s
 
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
T
I
T
L
E
_
F
U
L
L
'
,
 
"
C
o
n
t
r
o
l
 
T
o
t
a
l
 
d
'
A
c
c
Ã
©
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
D
E
S
C
_
F
U
L
L
'
,
 
"
<
s
t
r
o
n
g
>
A
q
u
e
s
t
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
Ã
©
s
 
p
e
r
 
a
 
u
s
u
a
r
i
s
 
a
v
a
n
Ã
§
a
t
s
 
n
o
m
Ã
©
s
.
 
S
i
 
n
o
 
s
a
p
 
p
e
r
 
a
 
q
u
Ã
¨
 
s
'
u
t
i
l
i
t
z
a
,
 
i
 
n
o
 
t
Ã
©
 
u
n
a
 
r
a
Ã
³
 
e
s
p
e
c
Ã
­
f
i
c
a
 
p
e
r
 
u
t
i
l
i
t
z
a
r
-
l
o
,
 
s
i
 
u
s
 
p
l
a
u
 
t
o
r
n
i
 
a
 
l
a
 
c
o
n
f
i
g
u
r
a
c
i
Ã
³
 
d
e
l
 
l
l
o
c
 
i
 
m
a
r
q
u
i
 
N
o
 
e
n
 
l
a
 
c
a
s
e
l
l
a
 
d
e
 
C
o
n
t
r
o
l
 
d
'
A
c
c
Ã
©
s
 
T
o
t
a
l
.
<
/
s
t
r
o
n
g
>
<
b
r
/
>

	
A
q
u
e
s
t
a
 
o
p
c
i
Ã
³
 
l
i
 
p
e
r
m
e
t
 
c
o
n
t
r
o
l
a
r
 
q
u
i
 
p
o
t
 
a
c
c
e
d
i
r
 
a
l
s
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
 
(
e
l
s
 
q
u
a
l
 
a
m
b
 
a
l
g
u
n
a
 
e
x
c
e
p
c
i
Ã
³
 
e
s
t
a
n
 
i
n
s
e
r
t
a
t
s
 
e
n
 
e
l
 
n
u
c
l
i
 
d
u
r
 
d
e
l
 
s
i
s
t
e
m
a
)
.
 
S
i
 
e
l
 
n
i
v
e
l
l
 
d
'
a
c
c
Ã
©
s
 
m
Ã
©
s
 
p
r
Ã
²
x
i
m
 
a
l
 
n
o
m
 
d
'
u
n
 
s
c
r
i
p
t
 
e
s
t
Ã
 
 
f
i
x
a
t
 
p
e
r
 
d
e
f
e
c
t
e
,
 
l
l
a
v
o
r
s
 
l
'
o
p
c
i
o
 
d
e
 
C
o
n
t
r
o
l
 
d
'
A
c
c
Ã
©
s
 
T
o
t
a
l
 
e
s
t
a
r
Ã
 
 
d
e
f
i
n
i
t
 
c
o
m
 
S
i
 
<
s
t
r
o
n
g
>
q
u
a
l
s
e
v
o
l
<
/
s
t
r
o
n
g
>
 
p
o
t
e
 
a
c
c
e
d
i
r
 
a
l
s
 
s
c
r
i
p
t
s
 
q
u
e
 
n
o
 
p
o
d
r
i
e
n
 
a
c
c
e
d
i
r
 
i
 
p
e
r
 
t
a
n
t
,
 
s
i
 
p
r
e
t
e
n
s
 
u
t
i
l
i
t
z
a
r
 
a
q
u
e
s
t
a
 
f
u
n
c
i
Ã
³
 
H
A
S
 
D
E
 
M
A
R
C
A
R
 
e
l
 
n
i
v
e
l
l
 
d
e
 
c
o
n
t
r
o
l
 
d
'
a
c
c
Ã
©
s
 
p
e
r
 
a
 
<
s
t
r
o
n
g
>
t
o
t
s
<
/
s
t
r
o
n
g
>
 
e
l
s
 
m
i
n
i
c
o
m
p
o
n
e
n
t
e
s
 
d
e
 
J
o
m
r
e
s
 
l
l
i
s
t
a
t
s
 
a
q
u
Ã
­
.
 
S
i
 
n
o
 
s
a
p
 
e
l
 
q
u
e
 
f
a
n
 
a
q
u
e
s
t
s
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
,
 
l
i
 
r
e
c
o
m
a
n
e
m
 
e
n
c
a
r
i
d
a
m
e
n
t
 
q
u
e
 
n
o
 
u
t
i
l
i
t
z
i
 
d
e
 
n
i
n
g
u
n
a
 
m
a
n
e
r
a
 
a
q
u
e
s
t
a
 
f
u
n
c
i
o
n
a
l
i
t
a
t
.
<
b
r
/
>

	
E
n
 
J
o
m
r
e
s
,
 
e
l
s
 
n
i
v
e
l
l
s
 
d
'
a
c
c
Ã
©
s
 
s
e
g
u
e
i
x
e
n
 
u
n
a
 
p
i
r
Ã
 
m
i
d
e
,
 
p
e
l
 
q
u
e
 
e
l
s
 
S
u
p
e
r
 
M
a
n
a
g
e
r
s
 
s
Ã
³
n
 
m
Ã
©
s
 
g
r
a
n
s
 
q
u
e
 
e
l
s
 
M
a
n
a
g
e
r
s
.
 
E
n
 
r
e
s
u
m
 
S
u
p
e
r
 
M
a
n
a
g
e
r
>
M
a
n
a
g
e
r
>
R
e
c
e
p
c
i
o
n
i
s
t
a
>
R
e
g
i
s
t
r
a
t
s
>
S
e
n
s
e
 
R
e
g
i
s
t
r
e
.
 
P
e
l
 
q
u
e
 
s
i
 
u
n
 
u
s
u
a
r
i
 
r
e
g
i
s
t
r
a
t
 
t
Ã
©
 
a
c
c
Ã
©
s
 
a
 
u
n
 
m
i
n
i
c
o
m
p
o
n
e
n
t
,
 
t
a
m
b
Ã
©
 
e
l
 
t
e
n
e
n
 
e
l
 
r
e
c
e
p
c
i
o
n
i
s
t
a
,
 
e
l
 
m
a
n
a
g
e
r
 
i
 
e
l
 
s
u
p
e
r
 
m
a
n
a
g
e
r
.
<
b
r
/
>

	
O
b
s
e
r
v
i
 
q
u
e
 
n
o
 
p
o
t
 
c
o
n
t
r
o
l
a
r
 
l
'
Ã
 
r
e
a
 
d
'
a
d
m
i
n
i
s
t
r
a
d
o
r
 
d
e
l
s
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
T
o
t
 
e
l
 
m
Ã
³
n
 
e
n
 
e
l
 
Ã
¡
r
e
a
 
d
'
a
d
m
i
n
i
s
t
r
a
d
o
r
 
Ã
©
s
 
c
o
n
s
i
d
e
r
a
t
 
c
o
m
 
u
n
 
u
s
u
a
r
i
 
d
e
 
c
o
n
f
i
a
n
Ã
§
a
 
i
 
n
o
 
s
e
'
l
s
 
i
m
p
e
d
e
i
x
 
l
'
a
c
c
Ã
©
s
 
a
 
n
i
n
g
Ã
º
n
 
s
c
r
i
p
t
 
(
e
s
p
e
c
i
a
l
m
e
n
t
 
a
q
u
e
s
t
)
.

	
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
S
A
N
I
T
Y
C
H
E
C
K
_
W
A
R
N
I
N
G
'
,
 
"
P
r
e
c
a
u
c
i
Ã
³
!
 
T
Ã
©
 
a
c
t
i
v
a
t
 
e
l
 
c
o
n
t
r
o
l
 
d
'
a
c
c
Ã
©
s
 
t
o
t
a
l
,
 
p
e
r
Ã
²
 
h
e
m
 
t
i
n
g
u
t
 
e
n
 
c
o
m
p
t
e
 
l
e
s
 
o
p
c
i
o
n
s
 
d
e
l
 
c
o
n
t
r
o
l
 
d
'
a
c
c
Ã
©
s
 
i
 
l
e
s
 
h
e
m
 
c
o
m
p
a
r
a
t
 
a
m
b
 
e
l
 
n
Ã
º
m
e
r
o
 
d
e
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
 
q
u
e
 
h
a
n
 
d
e
 
s
e
r
 
c
o
n
t
r
o
l
a
t
s
,
 
i
 
l
e
s
 
d
o
s
 
n
o
 
c
o
i
n
c
i
d
e
i
x
e
n
,
 
p
e
r
 
t
a
n
t
 
d
e
u
 
t
e
n
i
r
 
s
c
r
i
p
t
s
 
q
u
e
 
n
o
 
e
s
t
a
n
 
s
o
t
a
 
c
o
n
t
r
o
l
.
 
A
i
x
Ã
²
 
p
o
t
 
s
e
r
 
u
n
 
p
r
o
b
l
e
m
a
 
d
e
 
s
e
g
u
r
e
t
a
t
 
i
 
s
e
 
l
i
 
i
n
s
t
a
 
a
 
r
e
s
o
l
d
r
e
'
l
 
u
r
g
e
n
t
e
m
e
n
t
 
v
i
s
i
t
a
n
t
 
l
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
C
o
n
t
r
o
l
 
d
'
A
c
c
Ã
©
s
 
i
 
c
o
m
p
r
o
v
a
r
 
q
u
e
 
e
l
s
 
n
i
v
e
l
l
s
 
a
p
r
o
p
i
a
t
s
 
h
a
n
 
s
i
g
u
t
 
a
p
l
i
c
a
t
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
W
P
R
O
F
I
L
E
S
_
U
S
E
R
S
W
I
T
H
A
C
C
E
S
S
'
,
 
"
U
s
u
a
r
i
s
 
a
m
b
 
d
r
e
t
s
 
d
'
a
d
m
i
n
i
s
t
r
a
c
i
Ã
³
 
d
'
a
q
u
e
s
t
a
 
p
r
o
p
i
e
t
a
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
E
B
U
G
G
I
N
G
_
Y
O
U
R
E
M
A
I
L
'
,
 
'
l
a
 
s
e
v
a
 
d
i
r
e
c
c
i
Ã
³
 
e
-
m
a
i
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
X
T
R
A
S
_
M
O
D
E
L
S
_
M
O
D
E
L
'
,
 
'
M
o
d
e
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
X
T
R
A
S
_
M
O
D
E
L
S
_
P
A
R
A
M
S
'
,
 
'
P
a
r
Ã
 
m
e
t
r
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
X
T
R
A
S
_
M
O
D
E
L
S
_
F
O
R
C
E
'
,
 
'
F
o
r
Ã
§
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
T
A
T
I
T
L
E
'
,
 
'
M
e
t
a
 
t
Ã
­
t
o
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
T
A
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
M
e
t
a
 
d
e
s
c
r
i
p
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
G
I
S
T
R
A
T
I
O
N
_
S
T
E
P
_
2
_
O
F
_
2
'
,
 
'
A
f
e
g
e
i
x
i
 
l
a
 
s
e
v
a
 
p
r
o
p
i
e
t
a
t
 
:
 
P
a
s
 
2
 
d
e
 
2
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
A
R
T
_
T
I
T
L
E
'
,
 
'
L
e
s
 
m
e
v
e
s
 
r
e
s
e
r
v
e
s
 
p
r
o
p
o
s
a
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
A
R
T
_
I
N
F
O
'
,
 
'
O
b
s
e
r
v
i
,
 
a
q
u
e
s
t
e
s
 
r
e
s
e
r
v
e
s
 
e
n
c
a
r
a
 
n
o
 
h
a
n
 
s
i
g
u
t
 
g
u
a
r
d
a
d
e
s
.
 
S
i
 
e
s
 
d
e
s
c
o
n
e
c
t
a
 
o
 
l
a
 
s
e
v
a
 
s
e
s
s
i
Ã
³
 
e
x
p
i
r
a
 
e
s
e
 
p
e
r
d
r
Ã
 
.
 
R
e
c
o
r
d
i
 
c
o
n
f
i
r
m
a
r
 
l
e
s
 
s
e
v
e
s
 
r
e
s
e
r
v
e
s
!
!
!
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
A
R
T
_
C
O
N
F
I
R
M
_
B
O
O
K
I
N
G
S
'
,
 
'
C
o
n
f
i
r
m
a
r
 
r
e
s
e
r
v
a
(
s
)
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
A
R
T
_
O
R
'
,
 
'
 
o
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
A
R
T
_
S
A
V
E
F
O
R
L
A
T
E
R
'
,
 
'
G
u
a
r
d
a
r
 
p
e
r
 
a
 
m
Ã
©
s
 
t
a
r
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
A
R
T
_
N
O
B
O
O
K
I
N
G
S
_
S
A
V
E
D
'
,
 
'
N
o
 
t
Ã
©
 
r
e
s
e
r
v
e
s
 
g
u
a
r
d
a
d
e
s
 
e
n
c
a
r
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
A
R
T
_
V
I
E
W
C
A
R
T
'
,
 
'
V
e
u
r
e
 
c
a
r
r
e
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
S
P
E
C
I
F
I
C
_
L
A
N
G
U
A
G
E
S
U
B
D
I
R
'
,
 
"
S
u
b
d
i
r
e
c
t
o
r
i
 
d
'
a
r
x
i
u
s
 
d
'
i
d
i
o
m
e
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
E
F
A
U
L
T
_
L
A
T
_
S
T
A
R
T
P
O
I
N
T
'
,
 
"
P
u
n
t
 
d
'
i
n
i
c
i
 
d
e
 
l
a
 
L
a
t
i
t
u
d
 
p
e
r
 
d
e
f
e
c
t
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
E
F
A
U
L
T
_
L
O
N
G
_
S
T
A
R
T
P
O
I
N
T
'
,
 
"
P
u
n
t
 
d
'
i
n
i
c
i
 
d
e
 
l
a
 
L
o
n
g
i
t
u
d
 
p
e
r
 
d
e
f
e
c
t
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
E
F
A
U
L
T
_
L
A
T
L
O
N
G
S
T
A
R
T
P
O
I
N
T
_
D
E
S
C
'
,
 
"
Q
u
i
n
a
 
h
a
 
d
e
 
s
e
r
 
l
a
 
l
o
n
g
i
t
u
d
/
l
a
t
i
t
u
d
 
p
e
r
 
d
e
f
e
c
t
e
 
e
n
 
e
l
 
m
a
p
a
 
d
e
 
G
o
o
g
l
e
 
e
n
 
l
a
 
p
Ã
 
g
i
n
a
 
d
'
e
d
i
t
a
r
 
p
r
o
p
i
e
t
a
t
s
,
 
a
b
a
n
s
 
d
e
 
q
u
e
 
l
a
 
m
a
r
c
a
 
h
a
g
i
a
 
s
i
g
u
t
 
m
o
g
u
d
a
?
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
Y
S
T
E
M
_
E
M
A
I
L
S
'
,
 
"
D
e
s
d
e
 
q
u
i
n
a
 
d
i
r
e
c
c
i
Ã
³
 
s
'
e
n
v
i
e
n
 
e
l
s
 
e
-
m
a
i
l
s
?
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
Y
S
T
E
M
_
E
M
A
I
L
S
_
D
E
S
C
'
,
 
"
D
e
i
x
i
 
a
q
u
e
s
t
a
 
o
p
c
i
Ã
³
 
e
n
 
b
l
a
n
c
 
p
e
r
 
a
 
d
e
s
a
c
t
i
v
a
r
-
l
a
.
 
J
o
m
r
e
s
 
u
t
i
l
i
t
z
a
r
Ã
 
 
l
a
 
d
i
r
e
c
c
i
Ã
³
(
n
s
)
 
d
e
 
l
\
'
h
o
t
e
l
 
q
u
a
n
 
e
n
v
Ã
¯
i
 
e
m
a
i
l
s
 
a
l
s
 
c
l
i
e
n
t
s
,
 
p
e
r
Ã
²
 
e
l
 
s
e
u
 
s
e
r
v
e
i
 
d
'
e
m
a
i
l
 
p
o
t
 
n
o
 
a
c
c
e
p
t
a
r
 
e
m
a
i
l
s
 
d
e
s
d
e
 
d
i
r
e
c
c
i
o
n
s
 
a
r
b
i
t
r
Ã
 
r
i
e
s
 
(
e
x
.
 
n
o
m
Ã
©
s
 
a
d
m
e
t
e
n
 
m
a
i
l
s
 
d
'
u
n
a
 
d
i
r
e
c
c
i
Ã
³
 
a
u
t
o
r
i
t
z
a
d
a
)
.
 
E
n
 
a
q
u
e
s
t
 
c
a
s
 
p
o
t
 
u
t
i
l
i
t
z
a
r
 
a
q
u
e
s
t
 
c
a
m
p
 
p
e
r
 
i
n
t
r
o
d
u
Ã
¯
r
 
u
n
a
 
d
i
r
e
c
c
i
Ã
³
 
q
u
e
 
s
'
i
n
t
r
o
d
u
Ã
¯
r
Ã
 
 
e
n
 
e
l
 
c
a
m
p
 
D
E
S
D
E
 
p
e
r
 
a
 
t
o
t
s
 
e
l
s
 
e
m
a
i
l
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
L
A
Y
O
U
T
_
L
I
S
T
'
,
 
'
V
e
u
r
e
 
c
o
m
 
l
l
i
s
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
L
A
Y
O
U
T
_
T
I
L
E
'
,
 
'
V
e
u
r
e
 
c
o
m
 
F
o
t
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
P
A
R
E
'
,
 
'
C
o
m
p
a
r
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
M
O
V
E
'
,
 
'
B
o
r
r
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
T
U
R
N
_
T
O
_
R
E
S
U
L
T
S
'
,
 
'
T
o
r
n
a
r
 
a
l
s
 
r
e
s
u
l
t
a
t
s
 
d
e
 
c
e
r
c
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
D
D
T
O
S
H
O
R
T
L
I
S
T
'
,
 
'
A
f
e
g
i
r
 
a
 
L
l
i
s
t
a
 
r
e
s
u
m
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
M
O
V
E
F
R
O
M
S
H
O
R
T
L
I
S
T
'
,
 
'
B
o
r
r
a
r
 
d
e
 
l
l
i
s
t
a
 
r
e
s
u
m
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
I
E
W
S
H
O
R
T
L
I
S
T
'
,
 
'
V
e
g
i
 
l
a
 
s
e
v
a
 
L
l
i
s
t
a
 
r
e
s
u
m
i
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
O
K
I
E
P
O
L
I
C
Y
_
1
'
,
 
'
I
m
p
o
r
t
a
n
t
:
 
P
o
l
Ã
­
t
i
c
a
 
d
e
 
C
o
o
k
i
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
O
K
I
E
P
O
L
I
C
Y
_
2
'
,
 
"
U
t
i
l
i
t
z
e
m
 
c
o
o
k
i
e
s
 
p
e
r
 
a
j
u
d
a
r
 
a
 
m
a
n
t
e
n
i
r
 
e
l
 
n
o
s
t
r
e
 
l
l
o
c
 
r
e
l
e
v
a
n
t
 
i
 
f
Ã
 
c
i
l
 
d
'
u
t
i
l
i
t
z
a
r
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
O
K
I
E
P
O
L
I
C
Y
_
3
'
,
 
'
L
l
e
g
i
r
 
m
Ã
©
s
.
.
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
O
K
I
E
P
O
L
I
C
Y
_
4
'
,
 
"
L
a
 
l
e
g
i
s
l
a
c
i
Ã
³
 
E
u
r
o
p
e
a
 
r
e
q
u
e
r
e
i
x
 
q
u
e
 
t
o
t
e
s
 
l
e
s
 
w
e
b
s
 
e
s
p
e
c
i
f
i
q
u
i
n
 
c
l
a
r
a
m
e
n
t
 
s
i
 
s
'
u
y
i
l
i
t
z
a
n
 
c
o
o
k
i
e
s
 
i
 
e
l
 
p
r
o
p
Ã
²
s
i
t
 
d
'
a
q
u
e
s
t
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
O
K
I
E
P
O
L
I
C
Y
_
5
'
,
 
'
E
l
 
m
o
t
o
r
 
d
e
 
r
e
s
e
r
v
e
s
 
i
 
c
e
r
c
a
 
d
e
 
l
a
 
p
Ã
 
g
i
n
a
 
n
e
c
e
s
s
i
t
a
 
s
e
r
 
c
a
p
a
Ã
§
 
d
e
 
r
e
c
o
r
d
a
r
 
l
e
s
 
o
p
c
i
o
n
s
 
q
u
e
 
h
a
s
 
e
s
c
o
l
l
i
t
 
p
e
r
 
p
o
d
e
r
 
t
r
e
b
a
l
l
a
r
 
d
e
 
l
a
 
m
i
l
l
o
r
 
m
a
n
e
r
a
 
p
o
s
s
i
b
l
e
.
 
P
e
r
 
a
i
x
Ã
²
,
 
n
e
c
e
s
s
i
t
a
 
e
m
m
a
g
a
t
z
e
m
a
r
 
i
n
f
o
r
m
a
c
i
Ã
³
 
q
u
e
 
e
s
t
Ã
 
 
a
s
s
o
c
i
a
d
a
 
a
 
u
n
 
p
e
t
i
t
 
a
r
x
i
u
 
a
n
o
m
e
n
a
t
 
"
c
o
o
k
i
e
"
 
q
u
e
 
Ã
º
n
i
c
a
m
e
n
t
 
i
d
e
n
t
i
f
i
c
a
 
e
l
 
s
e
u
 
n
a
v
e
g
a
d
o
r
,
 
i
 
p
e
r
 
p
o
d
e
r
 
f
e
r
-
h
o
,
 
n
e
c
e
s
s
i
t
e
m
 
q
u
e
 
a
c
c
e
p
t
e
 
q
u
e
 
p
o
d
e
m
 
u
t
i
l
i
z
a
r
-
l
a
.
 
S
i
 
n
o
 
a
c
c
e
p
t
a
 
a
q
u
e
s
t
a
 
p
o
l
Ã
­
t
i
c
a
 
d
e
 
c
o
o
k
i
e
s
 
l
l
a
v
o
r
s
 
e
s
 
v
e
u
r
Ã
 
 
s
e
v
e
r
a
m
e
n
t
 
l
i
m
i
t
a
t
 
e
n
 
e
l
 
q
u
e
 
p
o
t
 
f
e
r
 
e
n
 
l
a
 
p
Ã
 
g
i
n
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
O
K
I
E
P
O
L
I
C
Y
_
6
'
,
 
"
S
Ã
­
,
 
a
c
c
e
p
t
o
 
l
'
Ã
º
s
 
d
e
 
c
o
o
k
i
e
s
 
s
e
g
o
n
s
 
l
o
 
e
x
p
o
s
a
t
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
D
E
P
O
S
I
T
_
F
I
R
S
T
N
I
G
H
T
C
O
S
T
'
,
 
'
E
l
 
d
i
p
Ã
²
s
i
t
 
r
e
q
u
e
r
i
t
 
Ã
©
s
 
e
l
 
c
o
s
t
 
d
e
 
l
a
 
p
r
i
m
e
r
a
 
n
i
t
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
D
E
P
O
S
I
T
_
F
I
R
S
T
N
I
G
H
T
C
O
S
T
_
D
E
S
C
'
,
 
'
E
l
s
 
p
r
e
u
s
 
e
s
 
c
a
l
c
u
l
e
n
 
e
n
 
b
a
s
e
 
a
 
p
e
r
 
n
i
t
.
 
Â
¿
V
o
l
 
q
u
e
 
e
l
 
d
i
p
Ã
²
s
i
t
 
s
i
g
u
i
 
e
l
 
c
Ã
 
r
r
e
c
 
p
e
r
 
u
n
a
 
n
i
t
?
.
 
S
i
 
Ã
©
s
 
a
i
x
Ã
­
,
 
p
o
t
 
i
g
n
o
r
a
r
 
l
e
s
 
s
e
g
Ã
¼
e
n
t
s
 
o
p
c
i
o
n
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
N
O
T
H
I
N
G
I
N
S
H
O
R
T
L
I
S
T
'
,
 
'
N
o
 
h
a
 
a
f
e
g
i
t
 
c
a
o
 
a
r
t
i
c
l
e
 
a
 
l
a
 
s
e
v
a
 
l
l
i
s
t
a
 
r
e
s
u
m
i
d
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
A
F
E
M
O
D
E
'
,
 
'
A
c
t
i
v
a
r
 
m
o
d
e
 
s
e
g
u
r
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
A
F
E
M
O
D
E
_
D
E
S
C
'
,
 
'
M
a
r
q
u
i
 
S
Ã
­
 
p
e
r
 
c
a
n
v
i
a
r
 
a
 
m
o
d
e
 
s
e
g
u
r
.
 
D
e
s
a
c
t
i
v
a
r
Ã
 
 
t
o
t
s
 
e
l
s
 
p
l
u
g
i
n
s
 
i
 
J
o
m
r
e
s
 
n
o
m
Ã
©
s
 
u
t
i
l
i
t
z
a
r
Ã
 
 
l
e
s
 
f
u
n
c
i
o
n
a
l
i
t
a
t
s
 
d
e
l
 
n
u
c
l
i
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
I
C
E
_
O
N
_
A
P
P
L
I
C
A
T
I
O
N
'
,
 
'
P
E
A
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
N
E
X
T
'
,
 
'
S
e
g
Ã
¼
e
n
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
C
A
N
C
E
L
'
,
 
'
C
a
n
c
e
l
Â
·
l
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
S
U
B
M
I
T
'
,
 
'
E
n
v
i
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
S
A
V
E
'
,
 
'
G
u
a
r
d
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
D
E
L
E
T
E
'
,
 
'
B
o
r
r
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
R
E
T
U
R
N
'
,
 
'
T
o
r
n
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
C
L
O
S
E
'
,
 
'
T
a
n
c
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
B
A
C
K
'
,
 
'
E
n
d
a
r
r
e
r
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
H
O
M
E
'
,
 
'
I
n
i
c
i
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
N
E
W
'
,
 
'
N
o
u
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
S
E
N
D
'
,
 
'
E
n
v
i
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
R
E
C
A
P
T
C
H
A
_
T
I
T
L
E
'
,
 
'
r
e
C
a
p
t
c
h
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
R
E
C
A
P
T
C
H
A
_
I
N
F
O
'
,
 
"
C
a
p
t
c
h
a
 
s
'
u
t
i
l
i
t
z
a
 
p
e
r
 
a
s
s
e
g
u
r
a
r
-
s
e
 
d
e
 
q
u
e
 
e
l
 
c
l
i
e
n
t
e
 
q
u
e
 
u
t
i
l
i
t
z
a
 
e
l
s
 
f
o
r
m
u
l
a
r
i
s
 
w
e
b
 
Ã
©
s
 
h
u
m
a
n
a
,
 
i
 
s
'
u
t
i
l
i
t
z
a
 
p
e
r
 
e
v
i
t
a
r
 
q
u
e
 
a
l
s
 
g
e
s
t
o
r
s
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
 
e
l
s
 
o
m
p
l
i
n
 
d
e
 
S
p
a
m
 
r
o
b
o
t
s
 
d
'
i
n
t
e
r
n
e
t
.
 
P
e
r
 
u
t
i
l
i
t
z
a
r
 
e
l
 
f
o
r
m
u
l
a
r
i
 
d
e
 
c
o
n
t
a
c
t
e
 
d
e
 
J
o
m
r
e
s
 
h
a
u
r
Ã
 
s
 
d
e
 
r
e
g
i
s
t
r
a
r
-
t
e
 
e
n
 
<
a
 
h
r
e
f
=
\
"
h
t
t
p
:
/
/
w
w
w
.
g
o
o
g
l
e
.
c
o
m
/
r
e
c
a
p
t
c
h
a
\
"
 
t
a
r
g
e
t
=
\
"
_
b
l
a
n
k
\
"
>
t
h
e
 
G
o
o
g
l
e
 
r
e
C
a
p
t
c
h
a
<
/
a
>
 
i
 
c
o
n
f
i
g
u
r
a
r
 
e
l
 
t
e
u
 
d
o
m
i
n
i
 
p
e
r
 
r
e
b
r
e
 
l
a
 
c
l
a
u
 
p
Ã
º
b
l
i
c
a
 
i
 
p
r
i
v
a
d
a
.
 
Q
u
a
n
 
r
e
b
i
a
 
a
q
u
e
s
t
e
s
 
c
l
a
u
s
,
 
s
i
 
u
s
 
p
l
a
u
 
i
n
t
r
o
d
u
e
i
x
i
-
l
e
s
 
m
Ã
©
s
 
a
v
a
l
l
.
 
E
l
 
s
e
r
v
e
i
 
r
e
C
a
p
c
h
a
 
Ã
©
s
 
g
r
a
t
u
Ã
¯
t
 
i
 
e
l
 
p
r
o
v
e
e
i
x
 
G
o
o
g
l
e
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
R
E
C
A
P
T
C
H
A
_
P
U
B
L
I
C
_
K
E
Y
'
,
 
'
C
l
a
u
 
P
Ã
º
b
l
i
c
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
R
E
C
A
P
T
C
H
A
_
P
R
I
V
A
T
E
_
K
E
Y
'
,
 
'
C
l
a
u
 
P
r
i
v
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
L
O
C
K
_
T
I
T
L
E
'
,
 
"
T
e
m
p
s
 
d
'
e
s
p
e
r
a
 
d
e
 
b
l
o
q
u
e
i
g
 
d
'
a
r
x
i
u
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
L
O
C
K
_
D
E
S
C
'
,
 
"
P
e
r
 
e
v
i
t
a
r
 
e
l
 
p
e
r
i
l
l
 
d
e
 
q
u
e
 
e
l
s
 
u
s
u
a
r
i
s
 
f
a
g
i
n
 
u
n
a
 
r
e
s
e
r
v
a
 
d
o
b
l
e
,
 
J
o
m
r
e
s
 
u
t
i
l
i
t
z
a
 
u
n
 
f
i
t
x
e
r
 
d
e
 
b
l
o
q
u
e
i
g
 
p
e
r
 
e
v
i
t
a
r
 
q
u
e
 
u
n
a
 
h
a
b
i
t
a
c
i
Ã
³
 
s
i
g
u
i
 
a
f
e
g
i
d
a
 
a
 
l
a
 
l
l
i
s
t
a
 
d
'
h
a
b
i
t
a
c
i
o
n
s
 
d
i
s
p
o
n
i
b
l
e
s
 
e
n
 
e
l
 
f
o
r
m
u
l
a
r
i
 
d
e
 
r
e
s
e
r
v
a
 
s
i
 
a
l
g
Ã
º
 
m
Ã
©
s
 
h
a
 
a
f
e
g
i
t
 
t
a
l
 
h
a
b
i
t
a
c
i
Ã
³
 
a
l
 
s
e
u
 
l
a
 
m
a
t
e
i
x
a
 
d
a
t
a
.
 
P
e
r
 
d
e
f
e
c
t
e
 
a
q
u
e
s
t
 
b
l
o
q
u
e
i
h
 
e
s
 
d
e
s
a
c
t
i
v
a
r
Ã
 
 
e
n
 
3
6
0
0
 
s
e
g
o
n
s
 
o
 
u
n
a
 
h
o
r
a
.
 
P
o
t
 
c
a
n
v
i
a
r
 
e
l
 
t
e
m
p
s
 
d
'
a
q
u
e
s
t
 
f
i
t
x
e
r
 
d
e
 
b
l
o
q
u
e
i
g
 
c
a
n
v
i
a
n
t
 
a
q
u
e
s
t
a
 
c
a
s
e
l
l
a
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
T
S
T
R
A
P
S
W
I
T
C
H
'
,
 
"
'
A
c
t
i
v
a
r
 
l
e
s
 
p
l
a
n
t
i
l
l
e
s
 
b
o
o
t
s
t
r
a
p
 
d
e
 
J
o
m
r
e
s
'
 
i
 
l
e
s
 
s
e
v
e
s
 
f
u
n
c
i
o
n
a
l
i
t
a
t
s
?
"
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
A
C
T
I
O
N
'
,
 
'
A
c
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
V
I
E
W
'
,
 
'
V
i
s
t
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
B
A
C
K
T
O
T
O
P
'
,
 
'
T
o
r
n
a
r
 
a
m
u
n
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
I
N
P
U
T
F
I
L
T
E
R
I
N
G
_
L
E
V
E
L
_
W
E
A
K
'
,
 
'
D
Ã
¨
b
i
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
I
N
P
U
T
F
I
L
T
E
R
I
N
G
_
L
E
V
E
L
_
S
T
R
O
N
G
'
,
 
'
F
o
r
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
I
N
P
U
T
F
I
L
T
E
R
I
N
G
'
,
 
"
F
i
l
t
r
a
t
 
d
'
E
n
t
r
a
d
e
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
I
N
P
U
T
F
I
L
T
E
R
I
N
G
_
L
E
V
E
L
_
T
I
T
L
E
'
,
 
"
N
i
v
e
l
l
 
d
e
 
f
i
l
t
r
a
t
 
d
'
E
n
t
r
a
d
e
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
I
N
P
U
T
F
I
L
T
E
R
I
N
G
_
L
E
V
E
L
_
D
E
S
C
'
,
 
"
L
a
 
m
a
j
o
r
Ã
­
a
 
d
e
 
l
e
s
 
d
a
d
e
s
 
i
n
t
r
o
d
u
Ã
¯
d
e
s
 
e
n
 
e
l
 
s
i
s
t
e
m
a
 
e
s
 
n
e
t
e
j
a
 
p
r
i
m
e
r
 
t
r
a
i
e
n
t
 
l
e
s
 
e
t
i
q
u
e
t
e
s
 
h
t
m
l
,
 
d
e
s
p
r
Ã
©
s
 
u
t
i
l
i
t
z
a
n
t
 
l
a
 
f
u
n
c
i
o
n
a
l
i
t
a
t
 
d
e
 
f
i
l
t
r
a
t
 
d
e
 
v
a
r
i
a
b
l
e
s
 
P
H
P
 
p
e
r
 
f
e
r
 
l
e
s
 
d
a
d
e
s
 
m
Ã
©
s
 
s
e
g
u
r
e
s
 
a
b
a
n
s
 
d
e
 
q
u
e
 
s
'
i
n
t
r
o
d
u
e
i
x
i
n
 
e
n
 
l
a
 
b
a
s
e
 
d
e
 
d
a
d
e
s
.
 
V
o
s
t
Ã
¨
 
p
o
 
v
o
l
e
r
 
p
e
r
m
e
t
r
e
 
c
e
r
t
e
s
 
e
n
t
r
a
d
e
s
 
(
p
e
r
 
e
x
e
m
p
l
e
 
e
n
t
r
a
d
e
s
 
d
e
 
t
e
x
t
 
e
n
 
e
l
s
 
d
e
t
a
l
l
s
 
d
e
 
p
Ã
 
g
i
n
a
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
)
 
p
e
r
 
i
n
c
l
u
Ã
¯
r
 
H
T
M
L
.
 
H
i
 
h
a
 
d
o
s
 
n
i
v
e
l
l
s
 
d
e
 
f
i
l
t
r
a
t
 
q
u
e
 
p
o
t
 
u
t
i
l
i
t
z
a
r
 
e
n
 
a
q
u
e
s
t
a
 
e
n
t
r
a
d
a
,
 
b
Ã
©
 
d
Ã
¨
b
i
l
 
o
 
f
o
r
t
.
 
N
o
m
Ã
©
s
 
h
a
u
r
Ã
 
 
d
'
u
t
i
l
i
t
z
a
r
 
l
'
o
p
c
i
Ã
³
 
D
Ã
¨
b
i
l
 
s
i
 
l
'
u
s
u
a
r
i
 
q
u
e
 
i
n
t
r
o
d
u
e
i
x
 
d
a
d
e
s
 
Ã
©
s
 
d
e
 
c
o
n
f
i
a
n
Ã
§
a
,
 
c
o
m
 
c
o
m
p
a
n
y
s
 
a
d
m
i
n
i
s
t
r
a
d
o
r
s
 
d
e
 
s
i
s
t
e
m
a
,
 
d
'
a
l
t
r
a
 
m
a
n
e
r
a
 
h
a
 
d
e
 
d
e
i
x
a
r
 
a
q
u
e
s
t
a
 
o
p
c
i
Ã
³
 
c
o
m
 
f
o
r
t
.
 
Q
u
a
n
 
e
l
 
m
a
r
q
u
i
 
c
o
m
 
f
o
r
t
 
(
r
e
c
o
m
a
n
a
t
)
 
p
o
t
 
e
s
p
e
c
i
f
i
c
a
r
 
q
u
i
n
e
s
 
e
t
i
q
u
e
t
e
s
 
p
e
r
m
e
t
r
e
 
e
d
i
t
a
n
t
 
l
a
 
s
e
g
Ã
¼
e
n
t
 
o
p
c
i
Ã
³
 
'
P
u
r
i
f
i
c
a
d
o
r
 
H
T
M
L
 
d
'
e
t
i
q
u
e
t
e
s
 
p
e
r
m
e
s
e
s
'
.
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
I
N
P
U
T
F
I
L
T
E
R
I
N
G
_
P
U
R
I
F
I
E
R
_
A
L
L
O
W
E
D
_
T
I
T
L
E
'
,
 
"
E
t
i
q
u
e
t
e
s
 
d
'
E
n
t
r
a
d
a
 
p
e
r
m
e
s
e
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
I
N
P
U
T
F
I
L
T
E
R
I
N
G
_
P
U
R
I
F
I
E
R
_
A
L
L
O
W
E
D
_
D
E
S
C
'
,
 
"
P
o
y
 
e
d
i
t
a
r
 
l
e
s
 
e
t
i
q
u
e
t
e
s
 
q
u
e
 
e
l
 
p
u
r
i
f
i
c
a
d
o
r
 
d
e
 
h
t
m
l
 
a
c
c
e
p
t
a
r
Ã
 
 
a
 
t
r
a
v
Ã
©
s
 
d
e
l
 
s
e
u
 
s
i
s
t
e
m
a
 
d
e
 
f
i
l
t
r
a
t
.
 
P
e
r
 
d
e
f
e
c
t
e
 
s
Ã
³
n
 
'
p
,
b
,
s
t
r
o
n
g
,
a
[
h
r
e
f
]
,
i
'
 
(
p
e
r
 
e
j
e
m
p
l
e
.
 
P
Ã
 
r
r
a
f
,
 
N
e
g
r
e
t
a
,
 
M
a
r
c
a
t
,
 
E
n
l
l
a
Ã
§
o
s
 
i
 
C
u
r
s
i
v
e
s
)
.
 
P
e
r
 
a
 
m
Ã
©
s
 
i
n
f
o
r
m
a
c
i
Ã
³
 
d
'
e
t
i
q
u
e
t
e
s
 
p
e
r
m
e
s
e
s
,
 
s
i
 
u
s
 
p
l
a
u
 
l
l
e
g
e
i
x
i
 
l
a
 
d
o
c
u
m
e
n
t
a
c
i
Ã
³
 
d
e
l
 
p
u
r
i
f
i
c
a
d
o
r
 
H
T
M
L
 
e
n
<
a
 
h
r
e
f
=
'
h
t
t
p
:
/
/
h
t
m
l
p
u
r
i
f
i
e
r
.
o
r
g
'
 
t
a
r
g
e
t
=
'
_
b
l
a
n
k
'
>
h
t
m
l
p
u
r
i
f
i
e
r
.
o
r
g
<
/
a
>
.
 
P
o
t
 
c
a
n
v
i
a
r
 
a
q
u
e
s
t
a
 
o
p
c
i
Ã
³
,
 
p
e
r
Ã
²
 
l
i
 
r
e
c
o
m
a
n
e
m
 
q
u
e
 
d
e
i
x
i
 
l
a
 
q
u
e
 
v
e
 
p
e
r
 
d
e
f
e
c
t
e
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
I
N
P
U
T
F
I
L
T
E
R
I
N
G
_
I
N
P
U
T
S
_
T
I
T
L
E
'
,
 
'
E
n
t
r
a
d
s
 
p
e
r
m
e
s
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
I
N
P
U
T
F
I
L
T
E
R
I
N
G
_
I
N
P
U
T
S
_
D
E
S
C
'
,
 
"
P
o
t
 
d
e
f
i
n
i
r
 
q
u
i
n
e
s
 
e
n
t
r
a
d
e
s
 
d
e
 
f
o
r
m
u
l
a
r
i
s
 
p
e
r
m
e
t
r
a
n
 
h
t
m
l
 
e
d
i
t
a
n
t
 
a
q
u
e
s
t
a
 
o
p
c
i
Ã
³
,
 
q
u
a
l
s
e
v
o
l
 
e
n
t
r
a
d
a
 
a
f
e
g
i
d
a
 
a
 
a
q
u
e
s
t
a
 
l
l
i
s
t
a
 
s
e
r
Ã
 
 
a
n
a
l
i
t
z
a
d
a
 
a
 
t
r
a
v
Ã
©
s
 
d
e
l
 
p
u
r
i
f
i
c
a
d
o
r
 
H
T
M
L
 
e
n
 
l
l
o
c
 
d
e
 
t
e
n
i
r
 
t
o
t
 
l
'
H
t
m
l
 
s
e
p
a
r
a
t
.
 
P
e
r
 
d
e
f
e
c
t
e
 
Ã
©
s
:
 
'
d
e
s
c
r
i
p
c
i
o
_
p
r
o
p
i
e
t
a
t
 
h
o
r
e
s
_
e
n
t
r
a
d
a
_
p
r
o
p
i
e
t
a
t
 
_
a
c
t
i
v
i
t
a
t
s
_
a
r
e
a
_
p
r
o
p
i
e
t
a
t
 
d
i
r
e
c
c
i
o
_
c
o
n
d
u
i
n
t
_
p
r
o
p
i
e
t
a
t
 
a
e
r
o
p
o
r
t
s
_
p
r
o
p
i
e
t
a
t
 
a
l
t
r
e
s
t
r
a
n
s
p
o
r
t
s
_
p
r
o
p
i
e
t
a
t
 
p
o
l
i
t
i
q
u
e
s
r
e
c
l
a
m
a
c
i
o
_
p
r
o
p
i
e
t
a
t
'
.
 
A
f
e
g
e
i
x
i
 
m
Ã
©
s
 
e
n
t
r
a
d
e
s
 
a
f
e
g
i
n
t
 
e
l
 
s
e
u
 
n
o
m
 
d
e
 
f
o
r
m
u
l
a
r
i
 
s
e
p
a
r
a
t
 
p
e
r
 
u
n
 
e
s
p
a
i
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
D
E
T
A
I
L
S
_
I
N
T
A
B
S
_
T
I
T
L
E
'
,
 
'
D
e
t
a
l
l
s
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
 
e
n
 
p
e
s
t
a
n
y
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
D
E
T
A
I
L
S
_
I
N
T
A
B
S
_
D
E
S
C
'
,
 
'
M
a
r
q
u
i
 
a
q
u
e
s
t
a
 
o
p
c
i
Ã
³
 
p
e
r
 
m
o
s
t
r
a
r
 
e
l
s
 
d
e
t
a
l
l
s
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
 
e
n
 
p
e
s
t
a
n
y
e
s
.
 
M
a
r
q
u
i
 
N
o
 
s
i
 
l
e
s
 
v
o
l
 
v
i
s
u
a
l
i
t
z
a
r
 
s
e
n
s
e
 
p
e
s
t
a
n
y
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
P
R
I
N
T
'
,
 
'
I
m
p
r
i
m
i
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
E
D
I
T
'
,
 
'
E
d
i
t
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
C
O
P
Y
'
,
 
'
C
o
p
i
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
T
S
T
R
A
P
S
W
I
T
C
H
_
I
N
F
O
'
,
 
'
J
o
o
m
l
a
 
3
 
i
n
c
l
o
u
 
e
l
 
b
o
o
t
s
t
r
a
p
 
d
e
 
t
w
i
t
t
e
r
 
p
e
r
 
d
e
f
e
c
t
e
,
 
i
 
J
o
m
r
e
s
 
t
Ã
©
 
p
l
a
n
t
i
l
l
e
s
 
i
 
f
u
n
c
i
o
n
a
l
i
t
a
t
s
 
q
u
e
 
u
t
i
l
i
t
z
a
r
a
n
 
a
q
u
e
s
t
e
s
 
p
l
a
n
t
i
l
l
e
s
.
 
P
e
r
 
d
e
f
e
c
t
e
 
s
i
 
u
t
i
l
i
t
z
a
 
H
o
m
r
e
s
 
e
n
 
j
o
o
m
l
a
 
3
 
p
o
t
 
e
n
c
a
r
a
 
o
p
t
a
r
 
p
e
r
 
u
t
i
l
i
t
z
a
r
 
l
e
s
 
p
l
a
n
t
i
l
l
e
s
 
B
o
o
t
s
t
r
a
p
 
d
e
 
J
o
m
r
e
s
 
i
 
l
e
s
 
s
e
v
e
s
 
f
u
n
c
i
o
n
a
l
i
t
a
t
s
,
 
p
e
r
Ã
²
 
p
e
r
 
d
e
f
e
c
t
e
 
a
q
u
e
s
t
e
s
 
o
p
c
i
o
n
s
 
e
s
t
a
n
 
m
a
r
c
a
d
e
s
 
c
o
m
 
N
O
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
T
S
T
R
A
P
S
W
I
T
C
H
_
F
R
O
N
T
E
N
D
'
,
 
'
U
t
i
l
i
t
z
a
r
 
p
l
a
n
t
i
l
l
e
s
 
J
o
m
r
e
s
 
B
o
o
t
s
t
r
a
p
 
e
n
 
e
l
 
f
r
o
n
t
e
n
d
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
L
T
E
R
N
A
T
I
V
E
_
S
E
A
R
C
H
_
R
E
S
U
L
T
S
'
,
 
'
A
q
u
Ã
­
 
e
s
t
a
n
 
a
l
g
u
n
e
s
 
a
l
t
e
r
n
a
t
i
v
e
s
 
q
u
e
 
p
o
t
s
e
r
 
v
u
l
g
u
i
 
c
o
n
s
i
d
e
r
a
r
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
O
N
F
I
G
C
O
U
N
T
R
I
E
S
_
A
U
T
O
D
E
T
E
C
T
'
,
 
'
A
u
t
o
-
d
e
t
e
c
t
a
r
 
e
l
 
p
a
Ã
­
s
 
d
e
l
s
 
c
l
i
e
n
t
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
O
N
F
I
G
C
O
U
N
T
R
I
E
S
_
A
U
T
O
D
E
T
E
C
T
_
D
E
S
C
'
,
 
'
E
l
 
s
i
s
t
e
m
a
 
i
n
t
e
n
t
a
r
Ã
 
 
a
u
t
o
m
Ã
 
t
i
c
a
m
e
n
t
 
d
e
t
e
c
t
a
r
 
e
l
 
p
a
Ã
­
s
 
d
e
l
s
 
c
l
i
e
n
t
s
 
s
i
 
n
o
 
h
a
 
r
e
s
e
r
v
a
t
 
a
b
a
n
s
.
 
P
o
t
 
m
a
r
c
a
r
 
a
q
u
e
s
t
a
 
o
p
c
i
Ã
³
 
N
o
 
i
 
d
e
f
i
n
i
r
 
q
u
i
n
 
p
a
Ã
­
s
 
p
r
e
f
e
r
e
i
x
 
q
u
e
 
a
p
a
r
e
i
x
i
 
p
e
r
 
d
e
f
e
c
t
e
 
e
n
 
e
l
 
f
o
r
m
u
l
a
r
i
 
d
e
 
r
e
s
e
r
v
a
 
e
n
 
l
a
 
s
e
g
Ã
¼
e
n
t
 
o
p
c
i
Ã
³
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
S
U
P
P
O
R
T
_
A
B
O
U
T
J
O
M
R
E
S
'
,
 
'
S
o
b
r
e
 
J
o
m
r
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
M
E
N
U
C
A
T
E
G
O
R
I
E
S
_
H
E
L
P
'
,
 
'
a
j
u
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
S
U
P
P
O
R
T
_
G
E
T
T
I
N
G
S
T
A
R
T
E
D
'
,
 
'
C
o
m
 
c
o
m
e
n
Ã
§
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
A
C
C
E
S
S
C
O
N
T
R
O
L
'
,
 
"
C
o
n
t
r
o
l
 
d
'
A
c
c
Ã
©
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
M
E
N
U
C
A
T
E
G
O
R
I
E
S
_
D
E
V
E
L
O
P
E
R
S
'
,
 
'
E
i
n
e
s
 
p
e
r
 
a
 
d
e
s
e
n
v
o
l
u
p
a
d
o
r
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
M
E
N
U
C
A
T
E
G
O
R
I
E
S
_
L
A
N
G
U
A
G
E
S
'
,
 
'
i
d
i
o
m
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
M
E
N
U
C
A
T
E
G
O
R
I
E
S
_
I
N
C
O
M
E
_
G
E
N
E
R
A
T
I
O
N
'
,
 
"
g
e
n
e
r
a
c
i
Ã
³
 
d
'
i
n
g
r
e
s
s
o
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
M
E
N
U
C
A
T
E
G
O
R
I
E
S
_
S
T
R
U
C
T
U
R
E
'
,
 
'
e
s
t
r
u
c
t
u
r
a
 
d
e
l
 
l
l
o
c
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
M
A
N
U
A
L
'
,
 
'
M
a
n
u
a
l
 
(
o
n
l
i
n
e
)
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
M
Y
A
C
C
O
U
N
T
O
N
L
I
N
E
'
,
 
'
E
l
 
m
e
u
 
c
o
m
p
t
e
 
(
o
n
l
i
n
e
)
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
M
E
N
U
C
A
T
E
G
O
R
I
E
S
_
P
O
R
T
A
L
'
,
 
'
F
u
n
c
i
o
n
a
l
i
t
a
t
 
d
e
l
 
p
o
r
t
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
P
L
U
G
I
N
M
A
N
A
G
E
R
'
,
 
'
G
e
s
t
o
r
 
d
e
 
p
l
u
g
i
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
M
E
N
U
C
A
T
E
G
O
R
I
E
S
_
I
N
T
E
G
R
A
T
I
O
N
'
,
 
'
i
n
t
e
g
r
a
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
M
E
N
U
C
A
T
E
G
O
R
I
E
S
_
S
T
A
T
S
'
,
 
'
I
n
f
o
r
m
e
s
/
e
s
t
a
d
Ã
­
s
t
i
q
u
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
M
E
N
U
C
A
T
E
G
O
R
I
E
S
_
H
E
L
P
'
,
 
'
a
j
u
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
U
P
G
R
A
D
E
S
'
,
 
'
M
i
l
l
o
r
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
M
E
N
U
C
A
T
E
G
O
R
I
E
S
_
G
A
T
E
W
A
Y
S
'
,
 
'
m
Ã
¨
t
o
d
e
s
 
d
e
 
p
a
g
a
m
e
n
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
A
R
I
F
F
T
Y
P
E
S
_
M
I
S
C
S
E
T
T
I
N
G
S
_
D
E
F
A
U
L
T
'
,
 
'
T
a
r
i
f
a
 
p
e
r
 
d
e
f
e
c
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
A
R
I
F
F
T
Y
P
E
S
_
M
I
S
C
S
E
T
T
I
N
G
S
_
D
E
F
A
U
L
T
_
D
E
S
C
'
,
 
"
a
i
x
Ã
²
 
n
o
m
Ã
©
s
 
s
'
a
p
l
i
c
a
 
a
 
n
o
v
e
s
 
t
a
r
i
f
e
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
A
R
I
F
F
T
Y
P
E
S
_
M
I
S
C
S
E
T
T
I
N
G
S
_
Y
E
A
R
S
T
O
S
H
O
W
'
,
 
'
A
n
y
s
 
a
 
m
o
s
t
r
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
A
R
I
F
F
T
Y
P
E
S
_
M
I
S
C
S
E
T
T
I
N
G
S
_
Y
E
A
R
S
T
O
S
H
O
W
_
D
E
S
C
'
,
 
"
D
e
f
i
n
e
i
x
 
e
l
 
n
Ã
º
m
e
r
o
 
d
'
a
n
y
s
 
a
 
m
o
s
t
r
a
r
 
q
u
a
n
 
e
d
i
t
a
 
u
n
 
t
i
p
u
s
 
d
e
 
t
a
r
i
f
a
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
R
E
C
E
P
T
I
O
N
_
A
C
C
O
U
N
T
I
N
G
'
,
 
'
r
e
b
u
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
R
E
C
E
P
T
I
O
N
_
M
Y
A
C
C
O
U
N
T
'
,
 
'
d
e
t
a
l
l
s
 
d
e
 
c
o
m
p
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
L
O
G
I
N
'
,
 
'
A
c
c
Ã
©
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
L
O
G
O
U
T
'
,
 
'
D
e
s
c
o
n
e
x
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
S
E
A
R
C
H
'
,
 
'
b
u
s
c
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
R
E
C
E
P
T
I
O
N
_
H
O
M
E
'
,
 
'
p
a
n
e
l
l
 
d
e
 
c
o
n
t
r
o
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
R
E
C
E
P
T
I
O
N
_
B
O
O
K
'
,
 
'
r
e
s
e
r
v
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
R
E
C
E
P
T
I
O
N
_
A
C
C
O
U
N
T
I
N
G
'
,
 
'
f
a
c
t
u
r
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
R
E
C
E
P
T
I
O
N
_
S
E
T
T
I
N
G
S
'
,
 
'
A
j
u
s
t
o
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
R
E
C
E
P
T
I
O
N
_
M
I
S
C
'
,
 
'
m
i
s
c
e
l
Â
·
l
Ã
 
n
e
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
D
I
T
_
C
O
U
N
T
R
Y
_
T
I
T
L
E
'
,
 
'
E
d
i
t
a
r
 
p
a
Ã
­
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
D
I
T
_
C
O
U
N
T
R
Y
_
I
D
'
,
 
'
i
d
 
d
e
 
p
a
Ã
­
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
D
I
T
_
C
O
U
N
T
R
Y
_
C
O
U
N
T
R
Y
C
O
D
E
'
,
 
'
C
o
d
i
 
d
e
l
 
p
a
Ã
­
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
D
I
T
_
C
O
U
N
T
R
Y
_
C
O
U
N
T
R
Y
N
A
M
E
'
,
 
'
N
o
m
 
d
e
l
 
P
a
Ã
­
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
D
I
T
_
R
E
G
I
O
N
_
T
I
T
L
E
'
,
 
'
E
d
i
t
a
r
 
R
e
g
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
D
I
T
_
R
E
G
I
O
N
_
I
D
'
,
 
'
i
d
 
d
e
 
R
e
g
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
D
I
T
_
R
E
G
I
O
N
_
C
O
U
N
T
R
Y
C
O
D
E
'
,
 
'
C
o
d
i
 
d
e
 
l
a
 
r
e
g
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
D
I
T
_
R
E
G
I
O
N
_
R
E
G
I
O
N
N
A
M
E
'
,
 
'
N
o
m
b
r
e
 
d
e
 
l
a
 
r
e
g
i
Ã
³
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
L
I
S
T
C
O
U
N
T
R
I
E
S
'
,
 
'
L
l
i
s
t
a
r
 
P
a
Ã
­
s
o
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
L
I
S
T
R
E
G
I
O
N
S
'
,
 
'
L
l
i
s
t
a
r
 
r
e
g
i
o
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
X
P
O
R
T
_
D
E
F
I
N
I
T
I
O
N
S
'
,
 
'
E
x
p
o
r
t
a
r
 
d
e
f
i
n
i
c
i
o
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
X
P
O
R
T
_
D
E
F
I
N
I
T
I
O
N
S
_
I
N
F
O
'
,
 
"
A
q
u
e
s
t
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
l
i
 
p
e
r
m
e
t
 
e
x
p
o
r
t
a
r
 
l
e
s
 
t
r
a
d
u
c
c
i
o
n
s
 
q
u
e
 
h
a
n
 
s
i
g
u
t
 
c
r
e
a
d
e
s
 
u
t
i
l
i
t
z
a
n
t
 
l
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
d
e
 
T
r
a
d
u
c
c
i
Ã
³
 
d
'
I
d
i
o
m
a
.
 
C
r
e
a
r
Ã
 
 
u
n
 
c
a
m
p
 
d
e
 
t
e
x
t
 
a
m
b
 
t
o
t
e
s
 
l
e
s
 
d
a
d
e
s
 
r
e
q
u
e
r
i
d
e
s
 
p
e
r
 
c
o
n
s
t
r
u
Ã
¯
r
 
u
n
 
n
o
u
 
a
r
x
i
u
 
d
'
i
d
i
o
m
a
,
 
t
o
t
 
e
l
 
q
u
e
 
h
a
s
 
d
e
 
f
e
r
 
Ã
©
s
 
c
o
p
i
a
r
 
i
 
e
n
g
a
n
x
a
r
 
a
i
x
Ã
²
 
e
n
 
u
n
 
n
o
u
 
a
r
x
i
u
 
d
'
i
d
i
o
m
a
 
q
u
e
 
p
o
t
s
 
p
o
s
a
r
 
e
n
 
u
n
 
n
o
u
 
s
e
r
v
i
d
o
r
 
b
a
s
a
t
 
e
n
 
J
o
m
r
e
s
,
 
o
 
s
i
 
v
o
l
s
 
c
o
n
t
r
i
b
u
Ã
¯
r
 
a
 
l
a
 
c
o
m
u
n
i
t
a
t
 
J
o
m
r
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
T
R
A
N
S
L
A
T
E
_
C
O
U
N
T
R
I
E
S
R
E
G
I
O
N
S
'
,
 
'
T
r
a
d
u
Ã
¯
r
 
l
o
c
a
l
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
T
R
A
N
S
L
A
T
E
_
L
A
N
G
U
A
G
E
F
I
L
E
S
'
,
 
"
T
r
a
d
u
Ã
¯
r
 
l
e
s
 
c
a
d
e
n
e
s
 
d
'
a
r
x
i
u
s
 
d
'
i
d
i
o
m
a
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
N
O
T
A
M
A
N
A
G
E
R
'
,
 
"
E
r
r
o
r
,
 
l
'
u
s
u
a
r
i
 
a
m
b
 
e
l
 
q
u
e
 
e
s
t
Ã
 
s
 
a
c
c
e
d
i
n
t
 
n
o
 
Ã
©
s
 
u
n
 
s
u
p
e
r
 
u
s
u
a
r
i
 
e
n
 
J
o
m
r
e
s
,
 
n
o
 
p
o
d
r
Ã
 
s
 
u
t
i
l
i
t
z
a
r
 
a
q
u
e
s
t
a
 
c
a
r
a
c
t
e
r
Ã
­
s
t
i
c
a
 
f
i
n
s
 
q
u
e
 
h
a
g
i
s
 
u
t
i
l
i
t
z
a
t
 
l
a
 
f
u
n
c
i
o
n
a
l
i
t
a
t
 
d
e
 
M
o
s
t
r
a
r
 
P
e
r
f
i
l
 
p
e
r
 
f
e
r
-
t
e
 
t
a
n
t
 
g
e
s
t
o
r
 
i
 
s
u
p
e
r
 
g
e
s
t
o
r
.
 
A
i
x
Ã
²
 
Ã
©
s
 
u
n
a
 
f
u
n
c
i
a
l
i
t
a
t
 
d
e
 
s
e
g
u
r
e
t
a
t
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
L
A
Y
O
U
T
S
_
D
E
F
A
U
L
T
'
,
 
'
D
i
s
s
e
n
y
 
p
e
r
 
d
e
f
e
c
t
e
 
d
e
l
 
l
l
i
s
t
a
t
 
d
e
 
p
r
o
p
i
e
t
a
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
T
A
Y
F
O
R
A
M
I
N
I
M
U
M
O
F
'
,
 
'
E
s
t
Ã
 
n
c
i
a
 
p
e
r
 
u
n
 
m
Ã
­
n
i
m
 
d
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
N
I
G
H
T
S
F
O
R
'
,
 
'
 
N
i
t
s
 
p
e
r
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
G
E
N
T
'
,
 
'
A
g
e
n
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
G
E
N
T
_
D
E
T
A
I
L
S
'
,
 
"
D
e
t
a
l
l
s
 
d
e
 
l
'
A
g
e
n
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
G
E
N
T
_
L
I
S
T
I
N
G
S
'
,
 
"
A
n
u
n
c
i
s
 
d
e
 
l
'
A
g
e
n
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
P
P
R
O
V
A
L
S
_
C
O
N
F
I
G
_
T
I
T
L
E
'
,
 
'
A
p
r
o
v
a
r
 
a
u
t
o
m
Ã
 
t
i
c
a
m
e
n
t
 
n
o
v
e
s
 
p
r
o
p
i
e
t
a
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
P
P
R
O
V
A
L
S
_
C
O
N
F
I
G
_
D
E
S
C
'
,
 
"
S
i
 
m
a
r
c
a
 
a
q
u
e
s
t
a
 
o
p
c
i
Ã
³
 
c
o
m
 
N
o
 
e
n
t
o
n
c
e
s
 
h
a
u
r
Ã
 
 
d
'
a
p
r
o
v
a
r
 
m
a
n
u
a
l
m
e
n
t
 
l
e
s
 
n
o
v
a
s
 
p
r
o
p
i
e
t
a
t
s
.
 
F
i
n
s
 
q
u
e
 
u
n
a
 
p
r
o
p
i
e
t
a
t
 
n
o
 
s
i
g
u
i
 
a
p
r
o
v
a
d
a
 
n
o
 
p
o
d
r
Ã
 
 
s
e
r
 
p
u
b
l
i
c
a
d
a
 
p
e
r
 
u
n
 
G
e
s
t
o
r
/
S
u
p
e
r
 
G
e
s
t
o
r
 
d
e
 
l
a
 
P
r
o
p
i
e
t
a
t
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
P
P
R
O
V
A
L
S
_
M
E
N
U
_
N
A
M
E
'
,
 
'
A
p
r
o
v
a
c
i
o
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
P
P
R
O
V
A
L
S
_
N
O
T
_
A
P
P
R
O
V
E
D
_
Y
E
T
'
,
 
'
A
q
u
e
s
t
a
 
P
r
o
p
i
e
d
a
d
 
e
n
c
a
r
a
 
n
o
 
h
a
 
s
i
g
u
t
o
 
a
p
r
o
v
a
d
a
.
 
U
n
 
c
o
p
 
q
u
e
 
h
o
 
s
i
g
u
i
 
s
e
r
Ã
 
s
 
c
a
p
a
Ã
§
 
d
e
 
p
u
b
l
i
c
a
r
-
l
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
P
P
R
O
V
A
L
S
_
C
A
N
N
O
T
_
P
U
B
L
I
S
H
'
,
 
'
H
o
 
s
e
n
t
i
m
,
 
n
o
 
p
o
t
s
 
p
u
b
l
i
c
a
r
 
a
q
u
e
s
t
a
 
p
r
o
p
i
e
t
a
t
 
j
a
 
q
u
e
 
n
o
 
h
a
 
s
i
g
u
t
 
a
p
r
o
v
a
d
a
 
e
n
c
a
r
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
P
P
R
O
V
A
L
S
_
A
D
M
I
N
_
E
M
A
I
L
_
S
U
B
J
E
C
T
'
,
 
'
U
n
a
 
n
o
v
a
 
p
r
o
p
i
e
t
a
t
 
r
e
q
u
e
r
e
i
x
 
a
p
r
o
v
a
c
i
Ã
³
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
P
P
R
O
V
A
L
S
_
A
D
M
I
N
_
E
M
A
I
L
_
C
O
N
T
E
N
T
'
,
 
"
S
'
h
a
 
a
f
e
g
i
t
 
u
n
a
 
p
r
o
p
i
e
t
a
t
 
a
l
 
s
i
s
t
e
m
a
 
q
u
e
 
r
e
q
u
e
r
e
i
x
 
l
a
 
s
e
v
a
 
a
p
r
o
b
a
c
i
Ã
³
.
 
P
r
e
m
i
 
s
o
b
r
e
 
l
'
e
n
l
l
a
Ã
§
 
p
e
r
 
a
 
v
e
u
r
e
 
l
a
 
l
l
i
s
t
a
 
d
e
 
p
r
o
p
i
e
t
a
t
s
 
p
e
n
d
e
n
t
s
 
d
'
a
p
r
o
v
a
c
i
Ã
³
 
:
 
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
P
P
R
O
V
A
L
S
_
M
A
N
A
G
E
R
_
E
M
A
I
L
_
S
U
B
J
E
C
T
'
,
 
'
L
a
 
s
e
v
a
 
p
r
o
p
i
e
t
a
t
 
h
a
 
s
i
g
u
t
 
a
p
r
o
v
a
d
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
P
P
R
O
V
A
L
S
_
M
A
N
A
G
E
R
_
E
M
A
I
L
_
C
O
N
T
E
N
T
'
,
 
'
F
e
l
i
c
i
t
a
t
s
,
 
l
a
 
s
e
v
a
 
p
r
o
p
i
e
t
a
t
 
h
a
 
s
i
g
u
t
 
a
p
r
o
v
a
d
a
,
 
s
i
 
u
s
 
p
l
a
u
 
p
r
e
m
i
 
e
l
 
s
e
g
Ã
¼
e
n
t
 
e
n
l
l
a
Ã
§
 
p
e
r
 
v
e
u
r
e
 
e
l
 
p
a
n
e
l
l
 
d
e
 
c
o
n
t
r
o
l
 
d
e
 
l
a
 
p
r
o
p
i
e
t
a
t
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
G
I
O
N
_
T
R
A
N
S
L
A
T
I
O
N
_
S
W
I
T
C
H
_
T
I
T
L
E
'
,
 
'
E
l
s
 
n
o
m
s
 
d
e
 
l
e
s
 
r
e
g
i
o
n
s
 
s
Ã
³
n
 
t
r
a
d
u
Ã
¯
b
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
E
G
I
O
N
_
T
R
A
N
S
L
A
T
I
O
N
_
S
W
I
T
C
H
_
D
E
S
C
'
,
 
"
S
i
 
n
o
 
t
Ã
©
 
u
n
 
s
e
r
v
i
d
o
r
 
m
o
l
t
 
r
Ã
 
p
i
d
 
l
i
 
a
c
o
n
s
e
l
l
e
m
 
d
e
i
x
a
r
 
m
a
r
c
a
t
 
a
q
u
e
s
t
a
 
o
p
c
i
Ã
³
 
c
o
m
 
N
O
.
 
D
e
g
u
t
 
a
 
l
'
a
m
p
l
i
 
n
Ã
º
m
e
r
o
 
d
e
 
n
o
m
s
 
d
e
 
r
e
g
i
o
n
s
,
 
l
a
 
t
r
a
d
u
c
c
i
Ã
³
 
d
e
 
t
a
l
s
 
n
o
m
s
 
o
c
u
p
a
 
u
n
a
 
g
r
a
n
 
q
u
a
n
t
i
t
a
t
 
d
e
 
m
e
m
Ã
²
r
i
a
 
q
u
e
 
p
o
t
 
r
a
l
e
n
t
i
t
z
a
r
 
e
l
s
 
s
e
u
s
 
r
e
s
u
l
t
a
t
s
 
d
e
 
c
e
r
c
a
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
B
O
O
K
O
U
T
_
G
U
E
S
T
B
O
O
K
E
D
O
U
T
'
,
 
'
C
o
n
v
i
d
a
t
 
r
e
s
e
r
v
a
t
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
E
M
A
I
L
_
A
L
R
E
A
D
Y
_
I
N
_
U
S
E
'
,
 
"
H
o
 
s
e
n
t
i
m
,
 
a
q
u
e
s
t
a
 
a
d
r
e
Ã
§
a
 
e
m
a
i
l
 
j
a
 
e
s
 
t
r
o
b
a
 
e
n
 
Ã
º
s
.
 
S
i
 
a
q
u
e
s
t
a
 
Ã
©
s
 
l
a
 
s
e
v
a
 
a
d
r
e
Ã
§
a
 
e
m
a
i
l
,
 
s
i
 
u
s
 
p
l
a
u
 
a
s
s
e
g
Ã
º
r
i
'
s
 
d
'
h
a
v
e
r
-
s
e
 
l
o
g
u
e
j
a
t
 
a
b
a
n
s
 
d
'
i
n
t
e
n
t
a
r
 
r
e
s
e
r
v
a
r
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
T
A
P
T
O
C
A
L
L
'
,
 
'
P
r
e
m
i
 
p
e
r
 
t
r
u
c
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
N
E
W
R
E
V
I
E
W
_
S
U
B
J
E
C
T
'
,
 
'
N
o
v
a
 
r
e
v
i
s
i
Ã
³
 
p
e
r
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
N
E
W
R
E
V
I
E
W
_
M
E
S
S
A
G
E
'
,
 
'
U
n
a
 
n
o
v
a
 
r
e
v
i
s
i
Ã
³
 
h
a
 
s
i
g
u
t
 
d
e
i
x
a
d
a
 
p
e
r
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
N
E
W
R
E
P
O
R
T
_
S
U
B
J
E
C
T
'
,
 
'
N
o
u
 
I
n
f
o
r
m
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
N
E
W
R
E
P
O
R
T
_
M
E
S
S
A
G
E
'
,
 
'
U
n
a
 
n
o
v
a
 
r
e
v
i
s
i
Ã
³
 
h
a
 
s
i
g
u
t
 
i
n
f
o
r
m
a
d
a
 
p
e
r
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
S
U
P
E
R
I
O
R
'
,
 
'
S
u
p
e
r
i
o
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
G
R
A
N
D
T
O
T
A
L
_
E
X
_
T
A
X
'
,
 
'
G
r
a
n
d
 
t
o
t
a
l
 
(
e
x
 
t
a
x
)
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
G
R
A
N
D
T
O
T
A
L
_
I
N
C
_
T
A
X
'
,
 
'
G
r
a
n
d
 
t
o
t
a
l
 
(
i
n
c
 
t
a
x
)
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
G
R
A
N
D
T
O
T
A
L
_
T
O
T
A
L
_
T
A
X
'
,
 
'
T
o
t
a
l
 
t
a
x
 
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
I
N
S
T
R
U
C
T
I
O
N
S
_
V
I
S
U
A
L
'
,
 
'
T
y
p
e
 
t
h
e
 
t
w
o
 
w
o
r
d
s
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
I
N
S
T
R
U
C
T
I
O
N
S
_
A
U
D
I
O
'
,
 
'
E
n
t
e
r
 
w
h
a
t
 
y
o
u
 
h
e
a
r
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
P
L
A
Y
_
A
G
A
I
N
'
,
 
'
R
e
p
l
a
y
 
t
h
e
 
a
u
d
i
o
 
t
r
a
c
k
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
C
A
N
T
_
H
E
A
R
_
T
H
I
S
'
,
 
'
D
o
w
n
l
o
a
d
 
t
h
e
 
t
r
a
c
k
 
i
n
 
M
P
3
 
f
o
r
m
a
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
V
I
S
U
A
L
_
C
H
A
L
L
E
N
G
E
'
,
 
'
V
i
s
u
a
l
 
m
o
d
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
A
U
D
I
O
_
C
H
A
L
L
E
N
G
E
'
,
 
'
A
u
d
i
o
 
m
o
d
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
R
E
F
R
E
S
H
_
B
T
N
'
,
 
'
R
e
f
r
e
s
h
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
H
E
L
P
_
B
T
N
'
,
 
'
H
e
l
p
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
I
N
C
O
R
R
E
C
T
_
T
R
Y
_
A
G
A
I
N
'
,
 
'
S
o
r
r
y
,
 
t
h
a
t
 
w
a
s
 
i
n
c
o
r
r
e
c
t
.
 
P
l
e
a
s
e
 
t
r
y
 
a
g
a
i
n
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
G
O
O
G
L
E
_
M
A
P
S
'
,
 
'
G
o
o
g
l
e
 
m
a
p
 
o
p
t
i
o
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
G
O
O
G
L
E
_
M
A
P
_
O
P
T
I
O
N
_
W
E
A
T
H
E
R
'
,
 
'
U
s
e
 
w
e
a
t
h
e
r
 
l
a
y
e
r
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
G
O
O
G
L
E
_
M
A
P
_
O
P
T
I
O
N
_
W
E
A
T
H
E
R
_
C
E
L
C
I
U
S
'
,
 
'
C
e
l
c
i
u
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
G
O
O
G
L
E
_
M
A
P
_
O
P
T
I
O
N
_
W
E
A
T
H
E
R
_
F
A
R
E
N
H
E
I
T
'
,
 
'
F
a
h
r
e
n
h
e
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
G
O
O
G
L
E
_
M
A
P
_
O
P
T
I
O
N
_
T
R
A
N
S
I
T
'
,
 
'
U
s
e
 
t
r
a
n
s
i
t
 
l
a
y
e
r
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
G
O
O
G
L
E
_
M
A
P
S
_
P
O
I
S
'
,
 
'
E
n
a
b
l
e
 
G
m
a
p
 
P
o
i
n
t
s
 
o
f
 
I
n
t
e
r
e
s
t
 
(
i
n
c
l
u
d
i
n
g
 
p
o
s
s
i
b
l
y
 
y
o
u
r
 
c
o
m
p
e
t
i
t
o
r
s
)
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
T
A
K
E
Y
W
O
R
D
S
'
,
 
'
M
e
t
a
 
K
e
y
w
o
r
d
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
C
A
N
_
F
O
R
_
D
I
R
E
C
T
I
O
N
S
'
,
 
'
S
c
a
n
 
t
h
i
s
 
c
o
d
e
 
i
n
t
o
 
y
o
u
r
 
p
h
o
n
e
 
t
o
 
g
e
t
 
d
i
r
e
c
t
i
o
n
s
 
t
o
 
u
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
I
E
S
_
V
A
T
C
H
E
C
K
_
I
N
C
O
R
R
E
C
T
_
S
Y
N
T
A
X
'
,
 
"
T
h
e
 
V
A
T
 
n
u
m
b
e
r
 
y
o
u
 
e
n
t
e
r
e
d
 
d
o
e
s
n
'
t
 
a
p
p
e
a
r
 
t
o
 
b
e
 
c
o
r
r
e
c
t
.
 
Y
o
u
 
s
h
o
u
l
d
 
h
a
v
e
 
s
o
m
e
t
h
i
n
g
 
l
i
k
e
 
t
h
i
s
:
 
B
E
8
0
5
6
7
0
8
1
6
B
0
1
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
I
E
S
_
V
A
T
C
H
E
C
K
_
I
N
C
O
R
R
E
C
T
_
C
O
U
L
D
N
O
T
V
A
L
I
D
A
T
E
'
,
 
'
I
n
v
a
l
i
d
 
V
A
T
 
N
u
m
b
e
r
.
 
P
l
e
a
s
e
 
c
h
e
c
k
 
t
h
e
 
v
a
l
i
d
i
t
y
 
o
f
 
y
o
u
r
 
V
A
T
 
N
u
m
b
e
r
 
w
i
t
h
 
t
h
e
 
E
u
r
o
p
a
 
V
A
T
 
N
u
m
b
e
r
 
v
a
l
i
d
a
t
i
o
n
 
w
e
b
s
e
r
v
i
c
e
 
(
V
I
E
S
)
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
I
E
S
_
V
A
T
C
H
E
C
K
_
I
N
C
O
R
R
E
C
T
_
V
A
L
I
D
A
T
E
D
'
,
 
'
C
o
n
g
r
a
t
u
l
a
t
i
o
n
s
.
 
W
e
 
w
e
r
e
 
a
b
l
e
 
t
o
 
v
a
l
i
d
a
t
e
 
y
o
u
r
 
V
A
T
 
n
u
m
b
e
r
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
A
X
_
R
U
L
E
S
_
L
I
S
T
'
,
 
'
L
i
s
t
 
t
a
x
 
r
u
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
A
X
_
R
U
L
E
'
,
 
'
T
a
x
 
r
u
l
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
A
X
_
R
U
L
E
_
I
N
F
O
'
,
 
'
T
a
x
 
r
u
l
e
s
 
a
r
e
 
u
s
e
d
 
t
o
 
e
s
t
a
b
l
i
s
h
 
d
i
f
f
e
r
e
n
t
 
t
a
x
 
r
u
l
e
s
 
f
o
r
 
d
i
f
f
e
r
e
n
t
 
r
e
g
i
o
n
s
.
 
T
h
e
s
e
 
t
a
x
 
r
u
l
e
s
 
a
f
f
e
c
t
 
t
h
e
 
p
e
r
s
o
n
 
m
a
k
i
n
g
 
t
h
e
 
b
o
o
k
i
n
g
,
 
i
f
 
t
h
e
y
 
a
r
e
 
r
e
g
i
s
t
e
r
e
d
,
 
l
o
g
g
e
d
 
i
n
 
a
n
d
 
h
a
v
e
 
e
d
i
t
e
d
 
t
h
e
i
r
 
a
c
c
o
u
n
t
 
u
s
i
n
g
 
t
h
e
 
"
e
d
i
t
 
m
y
 
a
c
c
o
u
n
t
"
 
p
a
g
e
.
 
T
h
e
 
p
u
r
p
o
s
e
 
o
f
 
t
h
e
s
e
 
r
u
l
e
s
 
i
s
 
t
o
 
a
c
c
o
m
m
o
d
a
t
e
 
b
o
o
k
e
r
s
 
i
n
 
t
h
o
s
e
 
a
r
e
a
s
 
w
h
o
 
a
r
e
 
V
A
T
 
e
x
e
m
p
t
,
 
y
o
u
 
m
a
y
 
f
i
n
d
 
t
h
a
t
 
y
o
u
 
d
o
 
n
o
t
 
n
e
e
d
 
t
o
 
c
r
e
a
t
e
 
m
a
n
y
 
r
u
l
e
s
,
 
i
f
 
a
n
y
 
a
t
 
a
l
l
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
A
X
_
R
A
T
E
S
_
I
M
P
O
R
T
'
,
 
'
I
m
p
o
r
t
 
t
a
x
 
r
a
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
A
X
_
R
A
T
E
S
_
I
M
P
O
R
T
_
I
N
F
O
'
,
 
'
W
e
 
c
a
n
 
i
m
p
o
r
t
 
t
a
x
 
r
a
t
e
s
 
f
o
r
 
t
h
e
 
E
U
 
f
o
r
 
y
o
u
,
 
i
f
 
y
o
u
 
w
i
s
h
.
 
N
o
t
e
,
 
i
f
 
y
o
u
 
u
s
e
 
t
h
i
s
 
f
e
a
t
u
r
e
 
t
h
e
n
 
a
l
l
 
o
f
 
y
o
u
r
 
e
x
i
s
t
i
n
g
 
T
a
x
 
R
a
t
e
s
 
w
i
l
l
 
b
e
 
r
e
m
o
v
e
d
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
T
A
X
_
R
U
L
E
_
E
D
I
T
'
,
 
'
E
d
i
t
 
t
a
x
 
r
u
l
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
A
T
_
P
R
O
P
E
R
T
Y
_
N
U
M
B
E
R
'
,
 
'
T
h
e
 
V
A
T
 
n
u
m
b
e
r
 
f
o
r
 
t
h
i
s
 
p
r
o
p
e
r
t
y
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
A
T
_
P
R
O
P
E
R
T
Y
_
N
U
M
B
E
R
_
D
E
S
C
'
,
 
'
P
l
e
a
s
e
 
e
n
t
e
r
 
t
h
e
 
V
A
T
 
n
u
m
b
e
r
 
f
o
r
 
t
h
i
s
 
p
r
o
p
e
r
t
y
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
A
T
_
P
R
O
P
E
R
T
Y
_
V
A
T
_
N
U
M
B
E
R
_
V
A
L
I
D
A
T
E
D
'
,
 
'
V
A
T
 
n
u
m
b
e
r
 
v
a
l
i
d
a
t
e
d
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
A
T
_
P
R
O
P
E
R
T
Y
_
V
A
T
_
N
U
M
B
E
R
_
N
O
T
_
V
A
L
I
D
A
T
E
D
'
,
 
'
V
A
T
 
n
u
m
b
e
r
 
n
o
t
 
v
a
l
i
d
a
t
e
d
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
Y
O
U
R
B
U
S
I
N
E
S
S
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
'
B
u
s
i
n
e
s
s
 
d
e
t
a
i
l
s
 
e
n
t
e
r
e
d
 
h
e
r
e
 
w
i
l
l
 
b
e
 
u
s
e
d
 
o
n
 
c
o
m
m
i
s
s
i
o
n
 
a
n
d
 
s
u
b
s
c
r
i
p
t
i
o
n
s
 
i
n
v
o
i
c
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
U
B
S
C
R
I
P
T
I
O
N
_
P
R
O
F
I
L
E
_
E
R
R
O
R
_
E
X
P
L
'
,
 
"
Y
o
u
 
d
o
n
'
t
 
s
e
e
m
 
t
o
 
h
a
v
e
 
f
i
l
l
e
d
 
i
n
 
y
o
u
r
 
a
c
c
o
u
n
t
 
d
e
t
a
i
l
s
 
y
e
t
.
 
T
o
 
l
i
s
t
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
o
n
 
t
h
e
 
s
i
t
e
,
 
w
e
 
n
e
e
d
 
y
o
u
 
t
o
 
c
o
m
p
l
e
t
e
 
y
o
u
r
 
a
c
c
o
u
n
t
 
d
e
t
a
i
l
s
 
b
e
f
o
r
e
 
w
e
 
c
a
n
 
g
o
 
f
u
r
t
h
e
r
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
P
R
O
D
U
C
T
I
O
N
_
D
E
V
E
L
O
P
M
E
N
T
'
,
 
'
P
r
o
d
u
c
t
i
o
n
 
o
r
 
D
e
v
e
l
o
p
m
e
n
t
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
P
R
O
D
U
C
T
I
O
N
_
D
E
V
E
L
O
P
M
E
N
T
_
D
E
S
C
'
,
 
'
I
f
 
y
o
u
 
s
e
t
 
t
h
i
s
 
o
p
t
i
o
n
 
t
o
 
D
e
v
e
l
o
p
m
e
n
t
 
w
e
 
w
i
l
l
 
e
n
a
b
l
e
 
e
r
r
o
r
 
r
e
p
o
r
t
i
n
g
,
 
o
t
h
e
r
w
i
s
e
 
w
h
e
n
 
s
e
t
 
t
o
 
P
r
o
d
u
c
t
i
o
n
 
t
h
a
t
 
w
i
l
l
 
b
e
 
s
w
i
t
c
h
e
d
 
o
f
f
.
 
I
f
 
t
h
i
s
 
i
s
 
a
 
l
i
v
e
 
s
e
r
v
e
r
 
w
e
 
r
e
c
o
m
m
e
n
d
 
t
h
a
t
 
y
o
u
 
s
e
t
 
t
h
i
s
 
o
p
t
i
o
n
 
t
o
 
"
p
r
o
d
u
c
t
i
o
n
"
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
P
R
O
D
U
C
T
I
O
N
_
D
E
V
E
L
O
P
M
E
N
T
_
S
E
T
T
I
N
G
_
P
R
O
D
U
C
T
I
O
N
'
,
 
'
P
r
o
d
u
c
t
i
o
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
P
R
O
D
U
C
T
I
O
N
_
D
E
V
E
L
O
P
M
E
N
T
_
S
E
T
T
I
N
G
_
D
E
V
E
L
O
P
M
E
N
T
'
,
 
'
D
e
v
e
l
o
p
m
e
n
t
'
)
;

/
/
v
7
.
3
.
3

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
H
R
O
O
M
_
D
E
T
A
I
L
S
'
,
 
'
R
e
s
o
u
r
c
e
 
d
e
t
a
i
l
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
H
T
A
R
I
F
F
_
D
E
T
A
I
L
S
'
,
 
'
T
a
r
i
f
f
 
d
e
t
a
i
l
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
H
N
U
M
B
E
R
_
O
F
_
R
O
O
M
S
_
P
R
E
'
,
 
'
O
n
l
y
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
H
N
U
M
B
E
R
_
O
F
_
R
O
O
M
S
_
P
O
S
T
'
,
 
'
l
e
f
t
!
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
H
R
E
S
O
U
R
C
E
_
F
E
A
T
U
R
E
'
,
 
'
R
e
s
o
u
r
c
e
 
f
e
a
t
u
r
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
R
E
S
O
U
R
C
E
F
E
A
T
U
R
E
_
U
N
A
B
L
E
T
O
D
E
L
E
T
E
'
,
 
'
U
n
a
b
l
e
 
t
o
 
r
e
m
o
v
e
 
t
h
i
s
 
r
e
s
o
u
r
c
e
 
f
e
a
t
u
r
e
,
 
i
t
 
i
s
 
a
s
s
i
g
n
e
d
 
t
o
 
a
 
r
e
s
o
u
r
c
e
.
 
R
e
m
o
v
e
 
t
h
e
 
f
e
a
t
u
r
e
 
f
r
o
m
 
t
h
i
s
 
r
e
s
o
u
r
c
e
 
a
n
d
 
r
e
t
r
y
.
'
)
;

/
/
 
v
7
.
4

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
T
I
T
L
E
'
,
 
'
M
e
d
i
a
 
C
e
n
t
r
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
A
D
D
'
,
 
'
A
d
d
 
i
m
a
g
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
S
_
R
O
O
M
'
,
 
'
R
o
o
m
 
i
m
a
g
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
S
_
P
R
O
P
E
R
T
Y
'
,
 
'
P
r
o
p
e
r
t
y
 
m
a
i
n
 
i
m
a
g
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
S
_
S
L
I
D
E
S
H
O
W
'
,
 
'
S
l
i
d
e
s
h
o
w
 
i
m
a
g
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
C
L
E
A
R
'
,
 
'
C
l
e
a
r
 
l
i
s
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
D
R
A
G
N
D
R
O
P
'
,
 
'
D
r
a
g
 
&
 
D
r
o
p
 
f
i
l
e
s
 
h
e
r
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
S
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
'
C
h
o
o
s
e
 
t
h
e
 
r
e
s
o
u
r
c
e
 
y
o
u
 
w
a
n
t
 
t
o
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
.
 
I
f
 
y
o
u
 
c
a
n
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
 
i
n
d
i
v
i
d
u
a
l
 
r
e
s
o
u
r
c
e
s
 
(
e
.
g
.
 
r
o
o
m
s
)
 
y
o
u
 
w
i
l
l
 
b
e
 
g
i
v
e
n
 
a
 
s
e
c
o
n
d
 
d
r
o
p
d
o
w
n
 
t
o
 
c
h
o
o
s
e
 
t
h
e
 
s
p
e
c
i
f
i
c
 
r
e
s
o
u
r
c
e
.
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
N
O
T
E
S
_
C
O
R
E
'
,
 
'
I
f
 
y
o
u
 
u
p
l
o
a
d
 
m
u
l
t
i
p
l
e
 
i
m
a
g
e
s
 
a
s
 
t
h
e
 
"
M
a
i
n
 
p
r
o
p
e
r
t
y
 
i
m
a
g
e
"
 
t
h
e
s
e
 
w
i
l
l
 
b
e
 
u
s
e
d
 
i
n
 
t
h
e
 
P
r
o
p
e
r
t
y
 
L
i
s
t
 
.
 
S
l
i
d
e
s
h
o
w
 
i
m
a
g
e
s
 
w
i
l
l
 
b
e
 
s
h
o
w
n
 
o
n
 
t
h
e
 
p
r
o
p
e
r
t
y
 
d
e
t
a
i
l
s
 
p
a
g
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
V
I
E
W
'
,
 
'
V
i
e
w
 
y
o
u
r
 
i
m
a
g
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
D
E
L
E
T
E
'
,
 
'
D
e
l
e
t
e
 
i
m
a
g
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
U
P
L
O
A
D
'
,
 
'
U
p
l
o
a
d
 
i
m
a
g
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
S
_
R
O
O
M
T
Y
P
E
_
I
M
A
G
E
S
'
,
 
'
R
o
o
m
 
t
y
p
e
s
 
i
c
o
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
S
_
P
R
O
P
E
R
T
Y
_
F
E
A
T
U
R
E
S
'
,
 
'
P
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
i
c
o
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
U
P
L
O
A
D
_
A
L
L
'
,
 
'
U
p
l
o
a
d
 
a
l
l
 
f
i
l
e
s
'
)
;

/
/
8
.
0

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
P
R
E
V
'
,
 
'
P
r
e
v
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
M
O
R
E
'
,
 
'
M
o
r
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
A
S
H
B
O
A
R
D
_
T
O
D
A
Y
'
,
 
'
T
o
d
a
y
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
A
S
H
B
O
A
R
D
_
Y
E
A
R
'
,
 
'
Y
e
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
A
S
H
B
O
A
R
D
_
M
O
N
T
H
'
,
 
'
M
o
n
t
h
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
A
S
H
B
O
A
R
D
_
W
E
E
K
'
,
 
'
W
e
e
k
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
A
S
H
B
O
A
R
D
_
D
A
Y
'
,
 
'
D
a
y
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
L
E
G
E
N
D
'
,
 
'
L
e
g
e
n
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
F
I
L
T
E
R
'
,
 
'
F
i
l
t
e
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
F
R
O
M
'
,
 
'
F
r
o
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
T
O
'
,
 
'
T
o
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
N
E
W
_
B
O
O
K
I
N
G
'
,
 
'
N
e
w
 
b
o
o
k
i
n
g
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
S
T
A
T
U
S
_
D
E
P
O
S
I
T
'
,
 
'
D
e
p
o
s
i
t
 
s
t
a
t
u
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
S
T
A
T
U
S
_
G
U
E
S
T
'
,
 
'
G
u
e
s
t
 
s
t
a
t
u
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
S
T
A
T
U
S
_
B
O
O
K
I
N
G
'
,
 
'
B
o
o
k
i
n
g
 
s
t
a
t
u
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
S
T
A
T
U
S
_
P
U
B
L
I
S
H
I
N
G
'
,
 
'
P
u
b
l
i
s
h
i
n
g
 
s
t
a
t
u
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
S
T
A
T
U
S
_
I
N
V
O
I
C
E
'
,
 
'
I
n
v
o
i
c
e
 
s
t
a
t
u
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
S
T
A
T
U
S
_
I
N
V
O
I
C
E
_
T
Y
P
E
'
,
 
'
I
n
v
o
i
c
e
 
t
y
p
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
S
T
A
T
U
S
_
A
P
P
R
O
V
E
D
'
,
 
'
A
p
p
r
o
v
e
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
S
T
A
T
U
S
_
C
U
R
R
E
N
T
'
,
 
'
C
u
r
r
e
n
t
 
b
u
s
i
n
e
s
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
S
T
A
T
U
S
_
S
H
O
W
_
B
O
O
K
I
N
G
S
_
F
O
R
'
,
 
'
S
h
o
w
 
b
o
o
k
i
n
g
s
 
f
o
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
S
T
A
T
U
S
_
S
H
O
W
_
I
N
V
O
I
C
E
S
_
F
O
R
'
,
 
'
S
h
o
w
 
i
n
v
o
i
c
e
s
 
f
o
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
T
A
T
U
S
_
A
N
Y
'
,
 
'
A
n
y
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
T
A
T
U
S
_
P
A
I
D
'
,
 
'
P
a
i
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
T
A
T
U
S
_
N
O
T
P
A
I
D
'
,
 
'
N
o
t
 
p
a
i
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
T
A
T
U
S
_
C
H
E
C
K
E
D
O
U
T
'
,
 
'
C
h
e
c
k
e
d
 
o
u
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
T
A
T
U
S
_
A
C
T
I
V
E
'
,
 
'
A
c
t
i
v
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
T
A
T
U
S
_
C
A
N
C
E
L
L
E
D
'
,
 
'
C
a
n
c
e
l
l
e
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
T
A
T
U
S
_
P
U
B
L
I
S
H
E
D
'
,
 
'
P
u
b
l
i
s
h
e
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
T
A
T
U
S
_
N
O
T
_
P
U
B
L
I
S
H
E
D
'
,
 
'
N
o
t
 
p
u
b
l
i
s
h
e
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
T
A
T
U
S
_
G
U
E
S
T
_
B
O
O
K
I
N
G
S
_
A
C
T
I
V
E
'
,
 
'
G
u
e
s
t
s
 
w
i
t
h
 
a
c
t
i
v
e
 
b
o
o
k
i
n
g
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
T
A
T
U
S
_
G
U
E
S
T
_
B
O
O
K
I
N
G
S
_
P
A
S
T
'
,
 
'
G
u
e
s
t
s
 
w
i
t
h
 
p
a
s
t
 
b
o
o
k
i
n
g
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
T
A
T
U
S
_
B
O
O
K
I
N
G
S
'
,
 
'
B
o
o
k
i
n
g
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
T
A
T
U
S
_
S
U
B
S
C
R
I
P
T
I
O
N
S
'
,
 
'
S
u
b
s
c
r
i
p
t
i
o
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
T
A
T
U
S
_
C
O
M
M
I
S
S
I
O
N
S
'
,
 
'
C
o
m
m
i
s
s
i
o
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
T
A
T
U
S
_
A
L
L
_
P
R
O
P
E
R
T
I
E
S
'
,
 
'
A
l
l
 
m
y
 
b
u
s
i
n
e
s
s
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
C
T
I
O
N
_
S
E
T
_
C
U
R
R
E
N
T
'
,
 
'
S
e
t
 
a
s
 
c
u
r
r
e
n
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
C
T
I
O
N
_
C
H
E
C
K
I
N
'
,
 
'
C
h
e
c
k
 
i
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
C
T
I
O
N
_
C
H
E
C
K
O
U
T
'
,
 
'
C
h
e
c
k
 
o
u
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
R
E
C
E
P
T
I
O
N
_
B
O
O
K
I
N
G
S
'
,
 
'
b
o
o
k
i
n
g
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
R
E
C
E
P
T
I
O
N
_
P
R
O
P
E
R
T
I
E
S
'
,
 
'
p
r
o
p
e
r
t
i
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
R
E
C
E
P
T
I
O
N
_
G
U
E
S
T
S
'
,
 
'
g
u
e
s
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
M
A
N
A
G
E
R
_
R
E
P
O
R
T
S
'
,
 
'
r
e
p
o
r
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
L
I
S
T
_
G
U
E
S
T
S
'
,
 
'
G
u
e
s
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
L
I
S
T
_
G
U
E
S
T
S
_
M
E
N
U
'
,
 
'
L
i
s
t
 
g
u
e
s
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
L
I
S
T
_
I
N
V
O
I
C
E
S
_
M
E
N
U
'
,
 
'
L
i
s
t
 
i
n
v
o
i
c
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
L
I
S
T
_
P
R
O
P
E
R
T
I
E
S
'
,
 
'
P
r
o
p
e
r
t
i
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
Q
U
I
C
K
_
B
O
O
K
I
N
G
'
,
 
'
Q
u
i
c
k
 
b
o
o
k
i
n
g
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
D
A
T
E
_
O
F
_
B
O
O
K
I
N
G
'
,
 
'
D
a
t
e
 
o
f
 
b
o
o
k
i
n
g
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
T
W
O
_
W
E
E
K
S
'
,
 
'
T
w
o
 
w
e
e
k
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
_
C
A
N
C
E
L
L
A
T
I
O
N
_
W
A
R
N
I
N
G
'
,
 
'
T
h
i
s
 
b
o
o
k
i
n
g
 
w
i
l
l
 
b
e
 
c
a
n
c
e
l
l
e
d
.
 
P
r
e
s
s
 
O
K
 
t
o
 
c
a
n
c
e
l
 
t
h
e
 
b
o
o
k
i
n
g
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
O
V
E
R
V
I
E
W
_
C
H
E
C
K
I
N
S
'
,
 
'
T
o
d
a
y
 
c
h
e
c
k
i
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
O
V
E
R
V
I
E
W
_
C
H
E
C
K
O
U
T
S
'
,
 
'
T
o
d
a
y
 
c
h
e
c
k
o
u
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
O
V
E
R
V
I
E
W
_
C
U
R
R
E
N
T
_
R
E
S
I
D
E
N
T
S
'
,
 
'
C
u
r
r
e
n
t
 
r
e
s
i
d
e
n
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
T
S
T
R
A
P
_
L
O
C
A
T
I
O
N
'
,
 
'
N
a
v
i
g
a
t
i
o
n
 
b
a
r
 
l
o
c
a
t
i
o
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
T
S
T
R
A
P
_
L
O
C
A
T
I
O
N
_
D
E
F
A
U
L
T
'
,
 
'
D
e
f
a
u
l
t
 
(
c
o
n
t
e
n
t
 
a
r
e
a
)
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
T
S
T
R
A
P
_
L
O
C
A
T
I
O
N
_
T
O
P
'
,
 
'
F
i
x
e
d
 
t
o
 
t
o
p
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
T
S
T
R
A
P
_
L
O
C
A
T
I
O
N
_
B
O
T
T
O
M
'
,
 
'
F
i
x
e
d
 
t
o
 
b
o
t
t
o
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
T
S
T
R
A
P
_
L
O
C
A
T
I
O
N
_
I
N
V
E
R
S
E
'
,
 
'
I
n
v
e
r
t
e
d
 
n
a
v
b
a
r
 
(
c
o
l
o
u
r
 
c
h
a
n
g
e
)
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
_
N
U
M
B
E
R
'
,
 
'
B
o
o
k
i
n
g
 
n
u
m
b
e
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
S
T
A
T
U
S
_
S
H
O
W
_
G
U
E
S
T
S
_
F
O
R
'
,
 
'
S
h
o
w
 
g
u
e
s
t
s
 
f
o
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
T
S
T
R
A
P
_
V
E
R
S
I
O
N
'
,
 
'
B
o
o
t
s
t
r
a
p
 
v
e
r
s
i
o
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
T
S
T
R
A
P
_
V
E
R
S
I
O
N
_
D
E
S
C
'
,
 
'
C
u
r
r
e
n
t
l
y
 
o
n
l
y
 
a
p
p
l
i
e
s
 
t
o
 
t
h
e
 
f
r
o
n
t
e
n
d
.
 
T
h
i
s
 
o
p
t
i
o
n
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
c
h
o
o
s
e
 
w
h
e
t
h
e
r
 
o
r
 
n
o
t
 
t
o
 
u
s
e
 
J
o
m
r
e
s
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
a
r
e
 
c
o
m
p
a
t
i
b
l
e
 
w
i
t
h
 
B
o
o
t
s
t
r
a
p
 
2
 
o
r
 
B
o
o
t
s
t
r
a
p
 
3
.
 
U
n
l
e
s
s
 
y
o
u
 
a
r
e
 
s
u
r
e
 
t
h
a
t
 
y
o
u
r
 
t
e
m
p
l
a
t
e
 
w
o
r
k
s
 
w
i
t
h
 
B
o
o
t
s
t
r
a
p
 
3
 
t
h
e
n
 
w
e
 
r
e
c
o
m
m
e
n
d
 
y
o
u
 
l
e
a
v
e
 
t
h
i
s
 
s
e
t
 
t
o
 
B
o
o
t
s
t
r
a
p
 
2
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
S
T
A
T
U
S
_
S
H
O
W
_
G
U
E
S
T
S
_
F
O
R
'
,
 
'
S
h
o
w
 
g
u
e
s
t
s
 
f
o
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
F
I
X
E
D
_
P
E
R
I
O
D
S
'
,
 
'
F
i
x
e
d
 
p
e
r
i
o
d
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
D
E
P
O
S
I
T
S
'
,
 
'
D
e
p
o
s
i
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
B
O
O
K
I
N
G
_
F
O
R
M
'
,
 
'
B
o
o
k
i
n
g
 
f
o
r
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
R
E
Q
U
I
R
E
D
_
F
I
E
L
D
S
'
,
 
'
R
e
q
u
i
r
e
d
 
f
i
e
l
d
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
F
I
R
S
T
N
A
M
E
'
,
 
'
T
o
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
S
U
R
N
A
M
E
'
,
 
'
S
m
i
t
h
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
H
O
U
S
E
N
U
M
B
E
R
'
,
 
'
1
1
0
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
S
T
R
E
E
T
'
,
 
'
M
y
 
S
t
r
e
e
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
T
O
W
N
'
,
 
'
M
y
 
T
o
w
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
L
A
N
D
L
I
N
E
'
,
 
'
0
0
0
0
0
 
0
0
0
0
0
0
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
M
O
B
I
L
E
'
,
 
'
0
0
0
0
0
 
0
0
0
0
0
0
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
P
R
O
P
E
R
T
Y
N
A
M
E
'
,
 
'
M
y
 
H
o
t
e
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
P
O
S
T
C
O
D
E
'
,
 
'
X
X
N
N
 
N
N
X
X
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
E
M
A
I
L
'
,
 
'
e
x
a
m
p
l
e
@
a
d
d
r
e
s
s
.
c
o
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
E
X
T
E
N
D
E
D
_
C
O
N
F
I
G
U
R
A
T
I
O
N
'
,
 
'
E
x
t
e
n
d
e
d
 
C
o
n
f
i
g
u
r
a
t
i
o
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
S
I
M
P
L
E
_
C
O
N
F
I
G
U
R
A
T
I
O
N
'
,
 
'
S
i
m
p
l
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
R
E
S
O
U
R
C
E
_
F
E
A
T
U
R
E
S
'
,
 
'
R
e
s
o
u
r
c
e
 
f
e
a
t
u
r
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
R
E
S
O
U
R
C
E
_
T
Y
P
E
'
,
 
'
R
e
s
o
u
r
c
e
 
t
y
p
e
'
)
;

 
j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
E
D
I
T
_
G
U
E
S
T
_
T
Y
P
E
'
,
 
'
E
d
i
t
 
g
u
e
s
t
 
t
y
p
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
E
D
I
T
_
C
O
U
P
O
N
'
,
 
'
E
d
i
t
 
c
o
u
p
o
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
E
D
I
T
_
E
X
T
R
A
'
,
 
'
E
d
i
t
 
e
x
t
r
a
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
U
L
T
I
P
L
E
_
R
E
S
O
U
R
C
E
S
_
T
I
T
L
E
'
,
 
'
C
r
e
a
t
e
 
m
u
l
t
i
p
l
e
 
r
e
s
o
u
r
c
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
U
L
T
I
P
L
E
_
R
E
S
O
U
R
C
E
S
_
G
E
N
E
R
A
T
E
'
,
 
'
G
e
n
e
r
a
t
e
 
r
e
s
o
u
r
c
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
U
L
T
I
P
L
E
_
R
E
S
O
U
R
C
E
S
_
H
O
W
M
A
N
Y
'
,
 
'
H
o
w
 
m
a
n
y
 
r
e
s
o
u
r
c
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
U
L
T
I
P
L
E
_
R
E
S
O
U
R
C
E
S
_
T
Y
P
E
'
,
 
'
R
e
s
o
u
r
c
e
s
 
t
y
p
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
U
L
T
I
P
L
E
_
R
E
S
O
U
R
C
E
S
_
M
A
X
G
U
E
S
T
S
'
,
 
'
M
a
x
 
g
u
e
s
t
s
 
p
e
r
 
r
e
s
o
u
r
c
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
U
L
T
I
P
L
E
_
R
E
S
O
U
R
C
E
S
_
D
E
L
E
T
E
'
,
 
'
D
e
l
e
t
e
 
a
l
l
 
e
x
i
s
t
i
n
g
 
r
e
s
o
u
r
c
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
D
V
A
N
C
E
D
_
S
I
T
E
_
C
O
N
F
I
G
_
W
A
R
N
I
N
G
'
,
 
'
P
l
e
a
s
e
 
n
o
t
e
,
 
y
o
u
 
a
r
e
 
c
u
r
r
e
n
t
l
y
 
v
i
e
w
i
n
g
 
t
h
e
 
a
d
m
i
n
i
s
t
r
a
t
o
r
 
a
r
e
a
 
w
i
t
h
 
A
d
v
a
n
c
e
d
 
S
i
t
e
 
C
o
n
f
i
g
 
s
e
t
 
t
o
 
N
o
.
 
I
f
 
y
o
u
 
w
a
n
t
 
t
o
 
s
e
e
 
m
o
r
e
 
o
p
t
i
o
n
s
 
p
l
e
a
s
e
 
s
e
t
 
S
i
t
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
-
>
 
M
i
s
c
 
-
>
 
A
d
v
a
n
c
e
d
 
S
i
t
e
 
C
o
n
f
i
g
 
t
o
 
Y
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
I
N
F
O
'
,
 
'
S
h
o
w
i
n
g
 
_
S
T
A
R
T
_
 
t
o
 
_
E
N
D
_
 
o
f
 
_
T
O
T
A
L
_
 
e
n
t
r
i
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
_
I
N
Q
U
I
R
Y
_
H
A
P
P
R
O
V
A
L
'
,
 
'
A
p
p
r
o
v
a
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
_
R
E
J
E
C
T
_
I
N
Q
U
I
R
Y
'
,
 
'
R
e
j
e
c
t
 
b
o
o
k
i
n
g
 
i
n
q
u
i
r
y
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
_
A
P
P
R
O
V
E
_
I
N
Q
U
I
R
Y
'
,
 
'
A
p
p
r
o
v
e
 
b
o
o
k
i
n
g
 
i
n
q
u
i
r
y
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
T
A
T
U
S
_
A
P
P
R
O
V
E
D
'
,
 
'
A
p
p
r
o
v
e
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
T
A
T
U
S
_
R
E
J
E
C
T
E
D
'
,
 
'
R
e
j
e
c
t
e
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
T
A
T
U
S
_
I
N
Q
U
I
R
Y
'
,
 
'
I
n
q
u
i
r
y
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
_
I
N
Q
U
I
R
Y
_
S
E
T
T
I
N
G
_
T
I
T
L
E
'
,
 
'
B
o
o
k
i
n
g
s
 
r
e
q
u
i
r
e
 
a
p
p
r
o
v
a
l
 
o
r
 
a
v
a
i
l
a
b
i
l
i
t
y
 
c
o
n
f
i
r
m
a
t
i
o
n
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
_
I
N
Q
U
I
R
Y
_
S
E
T
T
I
N
G
_
D
E
S
C
'
,
 
'
I
f
 
s
e
t
 
t
o
 
y
e
s
,
 
w
h
e
n
 
a
 
b
o
o
k
i
n
g
 
i
s
 
m
a
d
e
,
 
i
t
 
w
i
l
l
 
n
o
t
 
s
h
o
w
 
u
p
 
o
n
 
t
h
e
 
a
v
a
i
l
a
b
i
l
i
t
y
 
c
a
l
e
n
d
a
r
s
 
(
a
n
d
 
o
t
h
e
r
 
g
u
e
s
t
s
 
c
a
n
 
s
t
i
l
l
 
b
o
o
k
 
t
h
o
s
e
 
d
a
y
s
 
a
n
d
 
r
e
s
o
u
r
c
e
)
 
u
n
t
i
l
 
t
h
e
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
 
a
c
c
e
p
t
s
/
c
o
n
f
i
r
m
s
 
a
v
a
i
l
a
b
i
l
i
t
y
 
f
o
r
 
t
h
e
 
b
o
o
k
i
n
g
.
 
O
n
c
e
 
c
o
n
f
i
r
m
e
d
,
 
b
o
o
k
i
n
g
 
i
s
 
i
n
s
e
r
t
e
d
 
a
s
 
p
r
o
v
i
s
i
o
n
a
l
 
(
i
f
 
d
o
e
s
n
`
t
 
o
v
e
r
r
i
d
e
 
o
t
h
e
r
 
b
o
o
k
i
n
g
s
;
 
o
t
h
e
r
 
g
u
e
s
t
s
 
c
a
n
`
t
 
b
o
o
k
 
t
h
e
 
s
a
m
e
 
d
a
t
e
s
 
a
n
y
m
o
r
e
)
 
a
n
d
 
a
n
 
e
m
a
i
l
 
i
s
 
s
e
n
t
 
t
o
 
t
h
e
 
c
u
s
t
o
m
e
r
 
t
o
 
m
a
k
e
 
t
h
e
 
p
a
y
m
e
n
t
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
R
R
O
R
'
,
 
'
E
r
r
o
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
R
R
O
R
_
M
E
S
S
A
G
E
'
,
 
'
S
o
r
r
y
!
 
A
n
 
e
r
r
o
r
 
o
c
c
u
r
e
d
 
w
h
i
l
e
 
t
r
y
i
n
g
 
t
o
 
p
r
o
c
e
s
s
 
t
h
i
s
 
f
u
n
c
t
i
o
n
.
 
I
t
 
h
a
s
 
b
e
e
n
 
r
e
p
o
r
t
e
d
 
f
o
r
 
y
o
u
 
a
n
d
 
w
e
 
w
i
l
l
 
l
o
o
k
 
i
n
t
o
 
i
t
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
R
R
O
R
_
D
E
B
U
G
G
I
N
G
_
M
E
S
S
A
G
E
'
,
 
'
M
e
s
s
a
g
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
R
R
O
R
_
D
E
B
U
G
G
I
N
G
_
F
I
L
E
'
,
 
'
F
i
l
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
R
R
O
R
_
D
E
B
U
G
G
I
N
G
_
L
I
N
E
'
,
 
'
L
i
n
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
R
R
O
R
_
D
E
B
U
G
G
I
N
G
_
T
R
A
C
E
'
,
 
'
T
r
a
c
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
M
A
I
L
_
T
E
M
P
L
A
T
E
S
_
T
I
T
L
E
'
,
 
'
E
m
a
i
l
 
t
e
m
p
l
a
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
M
A
I
L
_
T
E
M
P
L
A
T
E
S
_
E
D
I
T
'
,
 
'
E
d
i
t
 
e
m
a
i
l
 
t
e
m
p
l
a
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
M
A
I
L
_
T
E
M
P
L
A
T
E
S
_
S
U
B
J
E
C
T
'
,
 
'
E
m
a
i
l
 
s
u
b
j
e
c
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
M
A
I
L
_
T
E
M
P
L
A
T
E
S
_
T
E
X
T
'
,
 
'
E
m
a
i
l
 
t
e
x
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
M
A
I
L
_
T
E
M
P
L
A
T
E
S
_
T
Y
P
E
'
,
 
'
E
m
a
i
l
 
t
y
p
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
M
A
I
L
_
T
E
M
P
L
A
T
E
S
_
N
A
M
E
'
,
 
'
E
m
a
i
l
 
n
a
m
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
M
A
I
L
_
T
E
M
P
L
A
T
E
S
_
D
E
S
C
'
,
 
'
E
m
a
i
l
 
d
e
s
c
r
i
p
t
i
o
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
M
A
I
L
_
T
E
M
P
L
A
T
E
S
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
'
P
l
e
a
s
e
 
s
e
e
 
t
h
i
s
 
p
a
g
e
 
f
o
r
 
h
e
l
p
 
c
u
s
t
o
m
i
z
i
n
g
 
t
h
e
 
e
m
a
i
l
s
 
a
n
d
 
a
 
l
i
s
t
 
o
f
 
t
h
e
 
a
v
a
i
l
a
b
l
e
 
o
u
t
p
u
t
:
 
<
a
 
h
r
e
f
=
"
h
t
t
p
:
/
/
w
w
w
.
j
o
m
r
e
s
.
n
e
t
/
m
a
n
u
a
l
/
p
r
o
p
e
r
t
y
-
m
a
n
a
g
e
r
s
-
g
u
i
d
e
/
4
8
-
y
o
u
r
-
t
o
o
l
b
a
r
/
s
e
t
t
i
n
g
s
/
2
5
4
-
e
m
a
i
l
-
t
e
m
p
l
a
t
e
s
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
E
m
a
i
l
 
T
e
m
p
l
a
t
e
s
 
H
e
l
p
<
/
a
>
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
D
M
I
N
_
N
E
W
B
O
O
K
I
N
G
_
E
M
A
I
L
N
A
M
E
'
,
 
'
S
i
t
e
 
A
d
m
i
n
 
N
e
w
 
B
o
o
k
i
n
g
 
E
m
a
i
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
D
M
I
N
_
N
E
W
B
O
O
K
I
N
G
_
E
M
A
I
L
D
E
S
C
'
,
 
'
E
m
a
i
l
 
s
e
n
t
 
t
o
 
t
h
e
 
s
i
t
e
 
a
d
m
i
n
 
w
h
e
n
 
a
 
n
e
w
 
b
o
o
k
i
n
g
 
i
s
 
m
a
d
e
,
 
i
f
 
t
h
e
 
g
l
o
b
a
l
 
P
a
y
p
a
l
 
g
a
t
e
w
a
y
 
i
s
 
e
n
a
b
l
e
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
O
T
E
L
_
N
E
W
B
O
O
K
I
N
G
_
E
M
A
I
L
N
A
M
E
'
,
 
'
H
o
t
e
l
 
N
e
w
 
B
o
o
k
i
n
g
 
E
m
a
i
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
O
T
E
L
_
N
E
W
B
O
O
K
I
N
G
_
E
M
A
I
L
D
E
S
C
'
,
 
'
E
m
a
i
l
 
s
e
n
t
 
t
o
 
p
r
o
p
e
r
t
y
 
o
w
n
e
r
 
w
h
e
n
 
a
 
n
e
w
 
b
o
o
k
i
n
g
 
i
s
 
m
a
d
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
G
U
E
S
T
_
N
E
W
B
O
O
K
I
N
G
_
E
M
A
I
L
N
A
M
E
'
,
 
'
G
u
e
s
t
 
N
e
w
 
B
o
o
k
i
n
g
 
E
m
a
i
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
G
U
E
S
T
_
N
E
W
B
O
O
K
I
N
G
_
E
M
A
I
L
D
E
S
C
'
,
 
'
E
m
a
i
l
 
s
e
n
t
 
t
o
 
g
u
e
s
t
 
w
h
e
n
 
a
 
n
e
w
 
b
o
o
k
i
n
g
 
i
s
 
m
a
d
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
G
U
E
S
T
_
C
O
N
F
I
R
M
A
T
I
O
N
L
E
T
T
E
R
_
E
M
A
I
L
N
A
M
E
'
,
 
'
G
u
e
s
t
 
C
o
n
f
i
r
m
a
t
i
o
n
 
L
e
t
t
e
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
G
U
E
S
T
_
C
O
N
F
I
R
M
A
T
I
O
N
L
E
T
T
E
R
_
E
M
A
I
L
D
E
S
C
'
,
 
'
P
r
i
n
t
a
b
l
e
 
l
e
t
t
e
r
 
o
r
 
e
m
a
i
l
 
t
h
a
t
 
c
a
n
 
b
e
 
s
e
n
t
 
m
a
n
u
a
l
l
y
 
b
y
 
t
h
e
 
p
r
o
p
e
r
t
y
 
o
w
n
e
r
 
t
o
 
c
o
n
f
i
r
m
 
a
 
b
o
o
k
i
n
g
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
A
N
_
B
E
_
A
P
P
R
O
V
E
D
'
,
 
'
T
h
i
s
 
b
o
o
k
i
n
g
 
c
a
n
 
b
e
 
a
p
p
r
o
v
e
d
.
 
A
l
l
 
s
e
l
e
c
t
e
d
 
r
e
s
o
u
r
c
e
s
 
a
r
e
 
a
v
a
i
l
a
b
l
e
 
f
o
r
 
t
h
e
 
s
e
l
e
c
t
e
d
 
d
a
t
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
A
N
T
_
B
E
_
A
P
P
R
O
V
E
D
'
,
 
'
T
h
i
s
 
b
o
o
k
i
n
g
 
c
a
n
`
t
 
b
e
 
a
p
p
r
o
v
e
d
 
b
e
c
a
u
s
e
 
s
o
m
e
 
o
f
 
t
h
e
 
r
e
s
o
u
r
c
e
s
 
a
r
e
 
a
l
r
e
a
d
y
 
b
o
o
k
e
d
 
f
o
r
 
t
h
e
 
s
e
l
e
c
t
e
d
 
d
a
t
e
s
.
 
Y
o
u
`
l
l
 
n
e
e
d
 
t
o
 
a
m
e
n
d
 
t
h
e
 
b
o
o
k
i
n
g
 
f
i
r
s
t
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
W
_
P
O
W
E
R
E
D
B
Y
'
,
 
'
S
h
o
w
 
t
h
e
 
P
o
w
e
r
e
d
 
b
y
 
J
o
m
r
e
s
 
l
i
n
k
 
i
n
 
t
h
e
 
J
o
m
r
e
s
 
f
o
o
t
e
r
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
G
U
E
S
T
_
B
U
D
G
E
T
'
,
 
'
B
u
d
g
e
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
G
U
E
S
T
_
B
U
D
G
E
T
_
F
E
A
T
U
R
E
_
S
W
I
T
C
H
'
,
 
'
U
s
e
 
B
u
d
g
e
t
 
f
e
a
t
u
r
e
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
G
U
E
S
T
_
B
U
D
G
E
T
_
F
E
A
T
U
R
E
_
S
W
I
T
C
H
_
D
E
S
C
'
,
 
"
B
o
o
t
s
t
r
a
p
p
e
d
 
s
i
t
e
s
 
o
n
l
y
!
 
T
h
e
 
B
u
d
g
e
t
 
f
e
a
t
u
r
e
 
i
s
 
a
 
f
e
a
t
u
r
e
 
o
f
 
t
h
e
 
p
r
o
p
e
r
t
y
 
l
i
s
t
 
t
h
a
t
 
a
 
g
u
e
s
t
 
c
a
n
 
u
s
e
 
t
o
 
h
i
g
h
l
i
g
h
t
 
f
o
r
 
t
h
e
m
 
p
r
o
p
e
r
t
i
e
s
 
w
h
o
'
s
 
p
r
i
c
e
 
p
e
r
 
n
i
g
h
t
 
i
s
 
u
n
d
e
r
 
a
 
c
e
r
t
a
i
n
 
f
i
g
u
r
e
.
 
T
h
e
 
f
e
a
t
u
r
e
 
h
a
s
 
s
o
m
e
 
l
i
m
i
t
a
t
i
o
n
s
 
i
n
 
t
h
a
t
 
i
t
 
m
i
g
h
t
 
n
o
t
 
b
e
 
a
p
p
r
o
p
r
i
a
t
e
 
f
o
r
 
s
o
m
e
 
s
i
t
e
s
 
t
h
a
t
 
u
s
e
 
m
a
n
y
 
d
i
f
f
e
r
e
n
t
 
c
u
r
r
e
n
c
i
e
s
.
 
N
o
t
e
,
 
i
f
 
y
o
u
'
r
e
 
u
s
i
n
g
 
t
h
i
s
 
a
n
d
 
t
h
e
 
F
e
a
t
u
r
e
d
 
L
i
s
t
i
n
g
s
 
p
l
u
g
i
n
,
 
y
o
u
r
 
f
e
a
t
u
r
e
d
 
l
i
s
t
i
n
g
 
w
r
a
p
p
i
n
g
 
c
l
a
s
s
 
i
s
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
c
h
a
n
g
e
d
 
t
o
 
'
p
a
n
e
l
-
p
r
i
m
a
r
y
'
 
w
h
e
n
 
t
h
e
 
p
r
o
p
e
r
t
y
 
l
i
s
t
 
i
s
 
s
h
o
w
n
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
E
M
A
I
L
_
T
E
X
T
_
N
A
M
E
'
,
 
'
N
a
m
e
:
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
O
R
'
,
 
'
F
o
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
N
I
G
H
T
'
,
 
'
n
i
g
h
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
N
I
G
H
T
S
'
,
 
'
n
i
g
h
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
L
I
V
E
_
S
C
R
O
L
L
I
N
G
'
,
 
'
U
s
e
 
L
i
v
e
 
S
c
r
o
l
l
i
n
g
/
I
n
f
i
n
a
t
e
 
S
c
r
o
l
l
i
n
g
 
i
n
 
p
r
o
p
e
r
t
y
 
l
i
s
t
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
0
'
,
 
'
J
a
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
1
'
,
 
'
F
e
b
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
2
'
,
 
'
M
a
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
3
'
,
 
'
A
p
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
4
'
,
 
'
M
a
y
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
5
'
,
 
'
J
u
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
6
'
,
 
'
J
u
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
7
'
,
 
'
A
u
g
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
8
'
,
 
'
S
e
p
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
9
'
,
 
'
O
c
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
1
0
'
,
 
'
N
o
v
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
M
O
N
T
H
S
_
S
H
O
R
T
_
1
1
'
,
 
'
D
e
c
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
E
M
P
T
Y
T
A
B
L
E
'
,
 
'
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
I
N
F
O
'
,
 
'
M
o
s
t
r
a
n
t
 
d
e
 
_
S
T
A
R
T
_
 
a
 
_
E
N
D
_
 
d
e
 
_
T
O
T
A
L
_
 
r
e
g
i
s
t
r
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
I
N
F
O
E
M
P
T
Y
'
,
 
'
M
o
s
t
r
a
n
t
 
d
e
 
0
 
a
 
0
 
d
e
 
0
 
r
e
g
i
s
t
r
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
I
N
F
O
F
I
L
T
E
R
E
D
'
,
 
'
(
f
i
l
t
r
a
t
 
d
e
 
_
M
A
X
_
 
t
o
t
a
l
 
r
e
g
i
s
t
r
e
s
)
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
I
N
F
O
P
O
S
T
F
I
X
'
,
 
'
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
I
N
F
O
T
H
O
U
S
A
N
D
S
'
,
 
'
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
L
E
N
G
T
H
M
E
N
U
'
,
 
'
M
o
s
t
r
a
 
_
M
E
N
U
_
 
r
e
g
i
s
t
r
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
L
O
A
D
I
N
G
R
E
C
O
R
D
S
'
,
 
'
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
P
R
O
C
E
S
S
I
N
G
'
,
 
'
P
r
o
c
e
s
s
a
n
t
.
.
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
S
E
A
R
C
H
'
,
 
'
F
i
l
t
r
a
r
:
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
Z
E
R
O
R
E
C
O
R
D
S
'
,
 
"
N
o
 
s
'
h
a
n
 
t
r
o
b
a
t
 
r
e
g
i
s
t
r
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
F
I
R
S
T
'
,
 
'
P
r
i
m
e
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
L
A
S
T
'
,
 
'
Ã
š
l
t
i
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
N
E
X
T
'
,
 
'
S
e
g
Ã
¼
e
n
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
P
R
E
V
I
O
U
S
'
,
 
'
A
n
t
e
r
i
o
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
S
O
R
T
A
S
C
E
N
D
I
N
G
'
,
 
'
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
S
O
R
T
D
E
S
C
E
N
D
I
N
G
'
,
 
'
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
x
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
A
T
A
T
A
B
L
E
S
_
S
H
O
W
H
I
D
E
'
,
 
'
C
h
a
n
g
e
 
c
o
l
u
m
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
B
O
O
K
I
N
G
_
O
N
R
E
Q
U
E
S
T
'
,
 
'
B
o
o
k
i
n
g
 
o
n
 
r
e
q
u
e
s
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
B
O
O
K
I
N
G
_
I
N
S
T
A
N
T
'
,
 
'
I
n
s
t
a
n
t
 
b
o
o
k
i
n
g
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
F
O
N
T
A
W
E
S
O
M
E
'
,
 
'
I
n
c
l
u
d
e
 
F
o
n
t
 
A
w
e
s
o
m
e
 
i
c
o
n
 
s
e
t
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
F
O
N
T
A
W
E
S
O
M
E
_
D
E
S
C
'
,
 
'
S
e
t
 
t
h
i
s
 
t
o
 
Y
e
s
 
i
f
 
y
o
u
r
 
t
e
m
p
l
a
t
e
 
d
o
e
s
 
n
o
t
 
i
n
c
l
u
d
e
 
F
o
n
t
 
A
w
e
s
o
m
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
B
O
O
K
I
N
G
_
C
A
L
C
Q
U
O
T
E
'
,
 
'
R
e
q
u
e
s
t
 
b
o
o
k
i
n
g
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
C
O
N
F
I
R
M
A
T
I
O
N
_
D
E
A
R
'
,
 
'
D
e
a
r
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
U
L
T
I
S
I
T
E
S
_
S
E
L
E
C
T
_
A
_
S
I
T
E
'
,
 
'
S
e
l
e
c
t
 
a
 
s
i
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
U
L
T
I
S
I
T
E
S
_
M
U
L
T
I
S
I
T
E
S
_
L
A
B
E
L
'
,
 
'
S
i
t
e
 
i
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
I
S
_
E
U
_
C
O
U
N
T
R
Y
'
,
 
'
E
U
 
C
o
u
n
t
r
y
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
L
A
S
T
C
H
A
N
G
E
D
'
,
 
'
L
a
s
t
 
c
h
a
n
g
e
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
O
T
E
L
_
C
A
N
C
E
L
B
O
O
K
I
N
G
_
E
M
A
I
L
N
A
M
E
'
,
 
'
H
o
t
e
l
 
B
o
o
k
i
n
g
 
C
a
n
c
e
l
l
a
t
i
o
n
 
E
m
a
i
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
O
T
E
L
_
C
A
N
C
E
L
B
O
O
K
I
N
G
_
E
M
A
I
L
D
E
S
C
'
,
 
'
E
m
a
i
l
 
s
e
n
t
 
t
o
 
t
h
e
 
p
r
o
p
e
r
t
y
 
o
w
n
e
r
 
w
h
e
n
 
a
 
n
e
w
 
b
o
o
k
i
n
g
 
i
s
 
c
a
n
c
e
l
l
e
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
G
U
E
S
T
_
C
A
N
C
E
L
B
O
O
K
I
N
G
_
E
M
A
I
L
N
A
M
E
'
,
 
'
G
u
e
s
t
 
B
o
o
k
i
n
g
 
C
a
n
c
e
l
l
a
t
i
o
n
 
E
m
a
i
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
G
U
E
S
T
_
C
A
N
C
E
L
B
O
O
K
I
N
G
_
E
M
A
I
L
D
E
S
C
'
,
 
'
E
m
a
i
l
 
s
e
n
t
 
t
o
 
g
u
e
s
t
 
w
h
e
n
 
a
 
n
e
w
 
b
o
o
k
i
n
g
 
i
s
 
c
a
n
c
e
l
l
e
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
E
S
T
_
E
M
A
I
L
_
S
E
N
D
'
,
 
'
S
e
n
d
 
t
e
s
t
 
e
m
a
i
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
E
S
T
_
E
M
A
I
L
_
S
U
B
J
E
C
T
'
,
 
'
T
e
s
t
 
e
m
a
i
l
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
E
S
T
_
E
M
A
I
L
_
C
O
N
T
E
N
T
'
,
 
'
T
h
i
s
 
i
s
 
a
 
t
e
s
t
 
e
m
a
i
l
 
f
r
o
m
 
y
o
u
r
 
b
o
o
k
i
n
g
 
s
y
s
t
e
m
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
E
S
T
_
E
M
A
I
L
_
R
E
S
U
L
T
_
S
U
C
C
E
S
S
'
,
 
'
T
e
s
t
 
e
m
a
i
l
 
s
e
n
t
 
s
u
c
c
e
s
s
f
u
l
l
y
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
E
S
T
_
E
M
A
I
L
_
R
E
S
U
L
T
_
F
A
I
L
U
R
E
'
,
 
'
T
e
s
t
 
e
m
a
i
l
 
w
a
s
 
n
o
t
 
s
e
n
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
I
N
V
O
I
C
E
_
T
R
A
N
S
A
C
T
I
O
N
S
'
,
 
'
T
r
a
n
s
a
c
t
i
o
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
P
E
N
E
X
C
H
A
N
G
E
_
A
P
I
'
,
 
'
O
p
e
n
 
E
x
c
h
a
n
g
e
 
R
a
t
e
s
 
A
P
I
 
k
e
y
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
P
E
N
E
X
C
H
A
N
G
E
_
A
P
I
_
D
E
S
C
'
,
 
'
T
o
 
c
o
n
v
e
r
t
 
p
r
i
c
e
s
 
b
e
t
w
e
e
n
 
s
e
r
v
i
c
e
s
 
y
o
u
 
w
i
l
l
 
n
e
e
d
 
a
n
 
O
p
e
n
 
E
x
c
h
a
n
g
e
 
R
a
t
e
s
 
A
P
I
 
k
e
y
.
 
Y
o
u
 
M
U
S
T
 
h
a
v
e
 
a
n
 
A
P
I
 
k
e
y
 
t
o
 
d
i
s
p
l
a
y
 
p
r
i
c
e
s
 
c
o
r
r
e
c
t
l
y
 
i
n
 
J
o
m
r
e
s
,
 
h
o
w
e
v
e
r
 
y
o
u
 
c
a
n
 
<
a
 
h
r
e
f
=
"
h
t
t
p
s
:
/
/
o
p
e
n
e
x
c
h
a
n
g
e
r
a
t
e
s
.
o
r
g
/
s
i
g
n
u
p
/
f
r
e
e
"
 
_
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
r
e
g
i
s
t
e
r
 
f
o
r
 
a
 
f
r
e
e
 
k
e
y
<
/
a
>
 
(
h
o
u
r
l
y
 
u
p
d
a
t
e
s
,
 
1
0
0
0
 
r
e
q
u
e
s
t
s
/
m
o
n
t
h
 
-
 
n
o
 
H
T
T
P
S
,
 
e
m
a
i
l
 
s
u
p
p
o
r
t
 
o
r
 
a
d
v
a
n
c
e
d
 
f
e
a
t
u
r
e
s
)
.
 
J
o
m
r
e
s
 
d
o
w
n
l
o
a
d
s
 
e
x
c
h
a
n
g
e
 
r
a
t
e
s
 
o
n
c
e
 
a
 
d
a
y
 
s
o
 
a
s
 
l
o
n
g
 
a
s
 
y
o
u
 
u
s
e
 
t
h
e
 
k
e
y
 
o
n
 
o
n
l
y
 
a
 
h
a
n
d
f
u
l
 
o
f
 
s
i
t
e
s
,
 
y
o
u
\
'
r
e
 
u
n
l
i
k
e
l
y
 
t
o
 
e
x
c
e
e
d
 
t
h
e
s
e
 
l
i
m
i
t
s
.
 
P
r
e
v
i
o
u
s
 
t
o
 
J
o
m
r
e
s
 
8
.
3
 
w
e
 
u
s
e
d
 
a
n
 
o
l
d
e
r
,
 
u
n
d
o
c
u
m
e
n
t
e
d
 
Y
a
h
o
o
 
f
e
a
t
u
r
e
 
h
o
w
e
v
e
r
 
h
a
v
e
 
d
i
s
c
o
v
e
r
e
d
 
t
h
a
t
 
u
s
i
n
g
 
t
h
i
s
 
f
e
a
t
u
r
e
 
i
s
 
i
n
 
c
o
n
t
r
a
d
i
c
t
i
o
n
 
o
f
 
Y
a
h
o
o
\
'
s
 
T
e
r
m
s
 
a
n
d
 
C
o
n
d
i
t
i
o
n
s
.
 
A
s
 
a
 
r
e
s
u
l
t
 
w
e
 
h
a
v
e
 
t
o
 
a
s
s
u
m
e
 
t
h
a
t
 
t
h
e
 
f
e
a
t
u
r
e
 
m
a
y
 
d
i
s
a
p
p
e
a
r
 
a
t
 
s
o
m
e
 
p
o
i
n
t
 
i
n
 
t
h
e
 
f
u
t
u
r
e
,
 
h
e
n
c
e
 
t
h
e
 
c
h
a
n
g
e
 
t
o
 
u
s
i
n
g
 
O
p
e
n
 
E
x
c
h
a
n
g
e
 
R
a
t
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
M
I
S
S
I
O
N
'
,
 
'
C
o
m
m
i
s
s
i
o
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
N
O
T
E
S
_
C
O
R
E
_
E
X
T
R
A
S
'
,
 
'
I
f
 
y
o
u
 
u
p
l
o
a
d
 
m
u
l
t
i
p
l
e
 
i
m
a
g
e
s
 
f
o
r
 
i
n
d
i
v
i
d
u
a
l
 
o
p
t
i
o
n
a
l
 
e
x
t
r
a
s
,
 
o
n
l
y
 
t
h
e
 
f
i
r
s
t
 
i
m
a
g
e
 
w
i
l
l
 
b
e
 
u
s
e
d
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
P
A
Y
N
O
W
'
,
 
'
P
a
y
 
n
o
w
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
P
A
Y
N
O
W
_
D
E
S
C
'
,
 
'
T
h
i
s
 
i
n
v
o
i
c
e
 
i
n
 
n
o
w
 
d
u
e
.
 
P
l
e
a
s
e
 
c
l
i
c
k
 
t
h
e
 
b
u
t
t
o
n
 
t
o
 
s
e
l
e
c
t
 
t
h
e
 
p
a
y
m
e
n
t
 
m
e
t
h
o
d
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
X
T
R
A
S
_
T
E
M
P
L
A
T
E
'
,
 
"
H
e
r
e
'
s
 
a
 
l
i
s
t
 
o
f
 
s
o
m
e
 
o
f
 
t
h
e
 
g
r
e
a
t
 
t
h
i
n
g
s
 
y
o
u
 
c
a
n
 
p
u
r
c
h
a
s
e
 
w
h
i
l
e
 
m
a
k
i
n
g
 
a
 
b
o
o
k
i
n
g
 
a
t
 
t
h
i
s
 
p
r
o
p
e
r
t
y
.
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
G
A
T
E
W
A
Y
S
_
I
N
S
T
R
U
C
T
I
O
N
S
'
,
 
'
O
n
 
t
h
i
s
 
p
a
g
e
 
y
o
u
 
c
a
n
 
c
o
n
f
i
g
u
r
e
 
a
n
y
 
i
n
s
t
a
l
l
e
d
 
g
a
t
e
w
a
y
s
.
 
T
h
e
s
e
 
o
p
t
i
o
n
s
 
a
l
l
o
w
 
y
o
u
 
t
o
 
t
a
k
e
 
p
a
y
m
e
n
t
s
 
f
o
r
 
a
n
y
 
C
o
m
m
i
s
s
i
o
n
 
o
r
 
S
u
b
s
c
r
i
p
t
i
o
n
 
i
n
v
o
i
c
e
s
.
 
F
r
o
n
t
e
n
d
 
s
e
t
t
i
n
g
s
 
c
a
n
 
o
n
l
y
 
b
e
 
o
v
e
r
r
i
d
d
e
n
 
b
y
 
P
a
y
p
a
l
,
 
a
l
l
 
o
t
h
e
r
 
g
a
t
e
w
a
y
s
 
w
i
l
l
 
n
e
e
d
 
t
o
 
b
e
 
c
o
n
f
i
g
u
r
e
d
 
v
i
a
 
t
h
e
 
P
r
o
p
e
r
t
y
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
-
>
 
G
a
t
e
w
a
y
s
 
t
a
b
,
 
h
o
w
e
v
e
r
 
i
f
 
a
 
g
a
t
e
w
a
y
 
a
p
p
e
a
r
s
 
i
n
 
t
h
i
s
 
l
i
s
t
 
t
h
e
n
 
i
t
 
s
h
o
u
l
d
 
b
e
 
c
a
p
a
b
l
e
 
o
f
 
p
r
o
c
e
s
s
i
n
g
 
b
o
t
h
 
B
o
o
k
i
n
g
 
d
e
p
o
s
i
t
 
p
a
y
m
e
n
t
s
 
a
n
d
 
i
n
v
o
i
c
e
 
p
a
y
m
e
n
t
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
E
X
T
R
A
S
_
I
N
C
L
U
D
E
_
I
N
_
P
R
O
P
E
R
T
Y
D
E
T
A
I
L
S
'
,
 
'
S
h
o
w
 
i
n
 
p
r
o
p
e
r
t
y
 
d
e
t
a
i
l
s
 
p
a
g
e
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
P
R
O
P
E
R
T
Y
_
D
E
T
A
I
L
S
_
P
A
G
E
_
O
P
T
I
O
N
S
'
,
 
'
P
r
o
p
e
r
t
y
 
D
e
t
a
i
l
s
 
p
a
g
e
 
s
e
t
t
i
n
g
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
L
I
S
T
_
P
R
O
P
E
R
T
I
E
S
_
W
A
R
N
I
N
G
'
,
 
'
P
r
o
p
e
r
t
y
 
m
a
n
a
g
e
m
e
n
t
 
i
n
 
J
o
m
r
e
s
 
i
s
 
m
a
d
e
 
o
n
l
y
 
f
r
o
m
 
t
h
e
 
s
i
t
e
 
f
r
o
n
t
e
n
d
 
c
p
a
n
e
l
.
 
O
n
 
t
h
i
s
 
p
a
g
e
 
y
o
u
`
l
l
 
b
e
 
a
b
l
e
 
t
o
 
l
i
s
t
 
a
l
l
 
p
r
o
p
e
r
t
i
e
s
 
i
n
 
t
h
e
 
s
y
s
t
e
m
,
 
s
o
 
y
o
u
 
c
a
n
 
a
s
s
i
g
n
 
c
o
m
m
i
s
s
i
o
n
 
r
a
t
e
s
 
a
n
d
 
a
p
p
r
o
v
e
/
u
n
a
p
p
r
o
v
e
 
t
h
e
m
 
(
i
f
 
t
h
e
s
e
 
f
e
a
t
u
r
e
s
 
a
r
e
 
e
n
a
b
l
e
d
)
.
 
T
o
 
c
r
e
a
t
e
 
a
 
n
e
w
 
p
r
o
p
e
r
t
y
,
 
e
d
i
t
 
e
x
i
s
t
i
n
g
 
o
n
e
s
,
 
m
a
n
a
g
e
 
b
o
o
k
i
n
g
s
 
o
r
 
a
n
y
 
o
t
h
e
r
 
p
r
o
p
e
r
t
y
/
b
o
o
k
i
n
g
s
 
r
e
l
a
t
e
d
 
t
a
s
k
s
,
 
y
o
u
`
l
l
 
h
a
v
e
 
t
o
 
l
o
g
i
n
 
t
o
 
t
h
e
 
s
i
t
e
 
f
r
o
n
t
e
n
d
 
a
n
d
 
g
o
 
t
o
 
t
h
e
 
J
o
m
r
e
s
 
d
e
f
a
u
l
t
 
p
a
g
e
.
 
T
h
e
r
e
 
y
o
u
`
l
l
 
s
e
e
 
t
h
e
 
J
o
m
r
e
s
 
f
r
o
n
t
e
n
d
 
c
p
a
n
e
l
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
F
E
A
T
U
R
E
S
_
I
C
O
N
S
'
,
 
'
R
o
o
m
 
f
e
a
t
u
r
e
 
i
c
o
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
_
H
C
A
T
E
G
O
R
I
E
S
'
,
 
'
P
r
o
p
e
r
t
y
 
F
e
a
t
u
r
e
 
C
a
t
e
g
o
r
i
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
_
H
C
A
T
E
G
O
R
I
E
S
_
H
E
D
I
T
'
,
 
'
E
d
i
t
 
P
r
o
p
e
r
t
y
 
F
e
a
t
u
r
e
 
C
a
t
e
g
o
r
y
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
H
C
A
T
E
G
O
R
Y
'
,
 
'
C
a
t
e
g
o
r
y
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
_
H
S
H
O
W
_
C
A
T
E
G
O
R
I
E
S
'
,
 
'
S
h
o
w
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
s
 
s
e
p
a
r
a
t
e
d
 
i
n
t
o
 
c
a
t
e
g
o
r
i
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
_
H
S
H
O
W
_
C
A
T
E
G
O
R
I
E
S
_
D
E
S
C
'
,
 
'
S
e
t
 
t
h
i
s
 
t
o
 
Y
E
S
 
t
o
 
s
e
p
a
r
a
t
e
 
t
h
e
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
s
 
i
n
t
o
 
c
a
t
e
g
o
r
i
e
s
.
 
T
h
i
s
 
o
p
t
i
o
n
 
a
f
f
e
c
t
s
 
o
n
l
y
 
t
h
e
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
s
 
d
i
s
p
l
a
y
e
d
 
o
n
 
t
h
e
 
p
r
o
p
e
r
t
y
 
d
e
t
a
i
l
s
 
p
a
g
e
.
 
A
l
l
 
o
t
h
e
r
 
p
a
g
e
s
 
w
i
l
l
 
d
i
s
p
l
a
y
 
t
h
e
m
 
w
i
t
h
o
u
t
 
s
p
l
i
t
t
i
n
g
 
t
h
e
m
 
i
n
t
o
 
c
a
t
e
g
o
r
i
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
C
T
I
O
N
_
U
N
D
O
_
C
H
E
C
K
I
N
'
,
 
'
U
n
d
o
 
c
h
e
c
k
i
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
C
T
I
O
N
_
U
N
D
O
_
C
H
E
C
K
O
U
T
'
,
 
'
U
n
d
o
 
c
h
e
c
k
o
u
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
T
A
T
U
S
_
U
N
I
S
S
U
E
D
'
,
 
'
U
n
i
s
s
u
e
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
D
E
F
A
U
L
T
_
T
E
R
M
S
_
A
N
D
_
C
O
N
D
I
T
I
O
N
S
'
,
 
'
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
U
P
P
O
R
T
K
E
Y
_
D
E
S
C
_
V
A
L
I
D
'
,
 
'
Y
o
u
r
 
d
o
w
n
l
o
a
d
 
a
n
d
 
s
u
p
p
o
r
t
 
k
e
y
 
i
s
 
v
a
l
i
d
,
 
y
o
u
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
d
o
w
n
l
o
a
d
 
p
l
u
g
i
n
s
 
v
i
a
 
t
h
e
 
p
l
u
g
i
n
 
m
a
n
a
g
e
r
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
U
P
P
O
R
T
K
E
Y
_
D
E
S
C
_
I
N
V
A
L
I
D
'
,
 
'
Y
o
u
r
 
d
o
w
n
l
o
a
d
 
a
n
d
 
s
u
p
p
o
r
t
 
k
e
y
 
i
s
 
N
O
T
 
v
a
l
i
d
,
 
y
o
u
 
w
i
l
l
 
b
e
 
N
O
T
 
a
b
l
e
 
t
o
 
d
o
w
n
l
o
a
d
 
p
l
u
g
i
n
s
 
v
i
a
 
t
h
e
 
p
l
u
g
i
n
 
m
a
n
a
g
e
r
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
R
P
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
'
,
 
'
S
u
b
-
t
y
p
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
R
P
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
_
S
A
N
I
T
Y
_
C
H
E
C
K
'
,
 
"
Y
o
u
 
h
a
v
e
n
'
t
 
y
e
t
 
s
e
t
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
s
u
b
-
t
y
p
e
.
 
T
h
i
s
 
i
s
 
w
h
e
r
e
 
y
o
u
 
d
e
f
i
n
e
 
i
t
 
a
s
 
s
o
m
e
t
h
i
n
g
 
l
i
k
e
 
a
 
5
 
b
e
d
r
o
o
m
 
v
i
l
l
a
 
o
r
 
4
 
b
e
d
r
o
o
m
 
c
o
t
t
a
g
e
 
a
n
d
 
i
t
 
h
e
l
p
s
 
g
u
e
s
t
s
 
w
h
o
 
a
r
e
 
s
e
a
r
c
h
i
n
g
 
t
o
 
r
e
f
i
n
e
 
t
h
e
i
r
 
s
e
a
r
c
h
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
R
P
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
L
I
N
K
'
,
 
'
G
i
v
e
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
a
 
s
u
b
-
t
y
p
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
M
A
I
L
_
T
E
M
P
L
A
T
E
S
_
T
I
T
L
E
'
,
 
'
E
m
a
i
l
 
t
e
m
p
l
a
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
T
A
C
T
_
S
E
T
T
I
N
G
S
'
,
 
'
C
o
n
t
a
c
t
 
s
e
t
t
i
n
g
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
T
A
C
T
_
S
E
T
T
I
N
G
S
_
D
E
S
C
'
,
 
'
F
r
o
m
 
h
e
r
e
 
y
o
u
 
c
a
n
 
o
v
e
r
r
i
d
e
 
a
l
l
 
p
r
o
p
e
r
t
i
e
s
 
c
o
n
t
a
c
t
 
d
e
t
a
i
l
s
 
(
e
m
a
i
l
,
 
p
h
o
n
e
,
 
f
a
x
)
 
s
o
 
a
l
l
 
c
o
m
m
u
n
i
c
a
t
i
o
n
 
w
i
t
h
 
g
u
e
s
t
s
 
w
i
l
l
 
b
e
 
s
e
n
t
 
t
o
 
y
o
u
 
a
n
d
 
n
o
t
 
t
o
 
t
h
e
 
p
r
o
p
e
r
t
y
 
o
w
n
e
r
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
O
V
E
R
R
I
D
E
_
P
R
O
P
E
R
T
Y
_
C
O
N
T
A
C
T
_
D
E
T
A
I
L
S
'
,
 
'
O
v
e
r
r
i
d
e
 
l
i
s
t
i
n
g
s
 
c
o
n
t
a
c
t
 
d
e
t
a
i
l
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
O
V
E
R
R
I
D
E
_
P
R
O
P
E
R
T
Y
_
C
O
N
T
A
C
T
_
D
E
T
A
I
L
S
_
D
E
S
C
'
,
 
"
I
f
 
t
h
i
s
 
o
p
t
i
o
n
 
i
s
 
s
e
t
 
t
o
 
Y
e
s
 
t
h
e
n
 
p
r
o
p
e
r
t
y
 
e
m
a
i
l
 
a
d
d
r
e
s
s
e
s
 
a
n
d
 
p
h
o
n
e
 
n
u
m
b
e
r
s
 
w
i
l
l
 
b
e
 
r
e
p
l
a
c
e
d
 
w
i
t
h
 
t
h
e
 
o
n
e
s
 
s
e
t
 
i
n
 
t
h
i
s
 
t
a
b
.
 
T
h
i
s
 
f
o
r
c
e
s
 
a
l
l
 
c
o
m
m
u
n
i
c
a
t
i
o
n
s
 
t
o
 
b
e
 
s
e
n
t
 
t
o
 
y
o
u
r
 
n
o
m
i
n
a
t
e
d
 
e
m
a
i
l
 
a
d
d
r
e
s
s
 
e
n
s
u
r
i
n
g
 
t
h
a
t
 
t
h
e
 
g
u
e
s
t
 
a
n
d
 
p
r
o
p
e
r
t
y
 
o
w
n
e
r
 
c
a
n
'
t
 
b
y
p
a
s
s
 
t
h
e
 
b
o
o
k
i
n
g
 
e
n
g
i
n
e
 
a
n
d
 
t
h
e
 
c
o
m
m
i
s
s
i
o
n
 
c
h
a
r
g
e
s
 
t
h
a
t
 
w
i
l
l
 
r
e
s
u
l
t
.
 
I
t
 
a
l
s
o
 
m
e
a
n
s
 
t
h
a
t
 
w
h
e
n
e
v
e
r
 
a
 
p
r
o
p
e
r
t
y
'
s
 
d
e
s
c
r
i
p
t
i
o
n
 
i
s
 
c
h
a
n
g
e
d
 
t
h
e
 
p
r
o
p
e
r
t
y
 
w
i
l
l
 
b
e
 
s
e
t
 
t
o
 
U
n
a
p
p
r
o
v
e
d
 
(
i
f
 
t
h
e
 
a
p
p
r
o
v
a
l
s
 
f
e
a
t
u
r
e
 
i
s
 
e
n
a
b
l
e
d
)
 
a
n
d
 
y
o
u
 
w
i
l
l
 
n
e
e
d
 
t
o
 
m
a
n
u
a
l
l
y
 
c
h
e
c
k
 
t
h
e
 
d
e
s
c
r
i
p
t
i
o
n
 
t
o
 
e
n
s
u
r
e
 
t
h
a
t
 
t
h
e
 
m
a
n
a
g
e
r
s
 
h
a
s
n
'
t
 
e
n
t
e
r
e
d
 
t
e
l
e
p
h
o
n
e
 
o
r
 
e
m
a
i
l
 
d
e
t
a
i
l
s
 
i
n
t
o
 
t
h
e
 
t
e
x
t
 
f
i
e
l
d
s
 
b
e
f
o
r
e
 
a
p
p
r
o
v
i
n
g
 
i
t
 
a
g
a
i
n
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
E
D
I
T
P
R
O
P
E
R
T
Y
_
A
P
P
R
O
V
A
L
_
W
A
R
N
I
N
G
'
,
 
'
C
h
a
n
g
e
s
 
m
a
d
e
 
t
o
 
l
i
s
t
i
n
g
 
d
e
t
a
i
l
s
 
r
e
q
u
i
r
e
 
s
i
t
e
 
a
d
m
i
n
 
v
e
r
i
f
i
c
a
t
i
o
n
.
 
I
f
 
y
o
u
 
s
a
v
e
 
n
e
w
 
d
e
t
a
i
l
s
,
 
y
o
u
r
 
l
i
s
t
i
n
g
 
w
i
l
l
 
b
e
 
u
n
p
u
b
l
i
s
h
e
d
 
a
n
d
 
p
e
n
d
i
n
g
 
s
i
t
e
 
a
d
m
i
n
 
a
p
p
r
o
v
a
l
 
b
e
f
o
r
e
 
b
e
i
n
g
 
v
i
s
i
b
l
e
 
a
g
a
i
n
 
t
o
 
s
i
t
e
 
v
i
s
i
t
o
r
s
.
 
Y
o
u
 
w
o
n
`
t
 
b
e
 
a
b
l
e
 
t
o
 
r
e
c
e
i
v
e
 
o
n
l
i
n
e
 
b
o
o
k
i
n
g
s
 
w
h
i
l
e
 
y
o
u
r
 
l
i
s
t
i
n
g
 
i
s
 
u
n
p
u
b
l
i
s
h
e
d
 
a
n
d
 
p
e
n
d
i
n
g
 
a
p
p
r
o
v
a
l
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
_
E
N
Q
U
I
R
Y
_
R
E
V
I
E
W
'
,
 
'
R
e
v
i
e
w
 
b
o
o
k
i
n
g
 
r
e
q
u
e
s
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
_
E
N
Q
U
I
R
Y
_
C
O
N
F
I
R
M
'
,
 
'
C
o
n
f
i
r
m
 
b
o
o
k
i
n
g
 
r
e
q
u
e
s
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
_
E
N
Q
U
I
R
Y
_
A
M
E
N
D
'
,
 
'
A
m
e
n
d
 
b
o
o
k
i
n
g
 
r
e
q
u
e
s
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
I
N
V
O
I
C
E
_
M
A
R
K
A
S
P
E
N
D
I
N
G
'
,
 
'
M
a
r
k
 
i
n
v
o
i
c
e
 
a
s
 
p
e
n
d
i
n
g
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
I
N
V
O
I
C
E
_
M
A
R
K
E
D
A
S
P
E
N
D
I
N
G
'
,
 
'
I
n
v
o
i
c
e
 
m
a
r
k
e
d
 
a
s
 
p
e
n
d
i
n
g
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
R
A
C
K
I
N
G
_
E
N
A
B
L
E
'
,
 
'
S
e
n
d
 
a
n
o
n
y
m
o
u
s
 
t
r
a
c
k
i
n
g
 
d
a
t
a
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
R
A
C
K
I
N
G
_
E
N
A
B
L
E
_
D
E
S
C
'
,
 
'
S
e
l
e
c
t
 
Y
e
s
 
t
o
 
s
e
n
d
 
a
n
o
n
y
m
o
u
s
 
t
r
a
c
k
i
n
g
 
d
a
t
a
 
t
o
 
J
o
m
r
e
s
.
n
e
t
 
t
o
 
h
e
l
p
 
u
s
 
u
n
d
e
r
s
t
a
n
d
 
b
e
t
t
e
r
 
h
o
w
 
y
o
u
 
u
s
e
 
t
h
e
 
s
y
s
t
e
m
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
A
R
T
N
E
R
S
_
P
L
E
A
S
E
_
C
O
M
P
L
E
T
E
'
,
 
'
P
l
e
a
s
e
 
e
n
s
u
r
e
 
t
h
a
t
 
y
o
u
r
 
d
e
t
a
i
l
s
 
h
a
v
e
 
b
e
e
n
 
c
o
m
p
l
e
t
e
d
 
o
n
 
t
h
e
 
E
d
i
t
 
M
y
 
A
c
c
o
u
n
t
 
p
a
g
e
 
b
e
f
o
r
e
 
a
t
t
e
m
p
t
i
n
g
 
t
o
 
m
a
k
e
 
b
o
o
k
i
n
g
s
 
o
n
 
b
e
h
a
l
f
 
o
f
 
y
o
u
r
 
c
l
i
e
n
t
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
A
R
T
N
E
R
S
_
G
U
E
S
T
_
A
D
D
R
E
S
S
'
,
 
"
G
u
e
s
t
'
s
 
c
o
n
t
a
c
t
 
d
e
t
a
i
l
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
L
E
A
R
_
G
U
E
S
T
_
D
E
T
A
I
L
S
'
,
 
'
 
-
-
 
N
e
w
 
G
u
e
s
t
 
-
-
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
H
A
R
T
S
'
,
 
'
C
h
a
r
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
H
A
R
T
S
_
S
E
L
E
C
T
'
,
 
'
S
e
l
e
c
t
 
c
h
a
r
t
.
.
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
H
A
R
T
_
B
O
O
K
I
N
G
S
_
D
E
S
C
'
,
 
'
I
n
c
o
m
e
 
b
y
 
y
e
a
r
/
m
o
n
t
h
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
P
_
R
O
O
M
S
_
E
X
I
S
T
_
S
A
N
I
T
Y
_
C
H
E
C
K
'
,
 
"
O
k
,
 
l
e
t
'
s
 
g
e
t
 
s
t
a
r
t
e
d
.
 
F
i
r
s
t
 
y
o
u
 
n
e
e
d
 
t
o
 
c
r
e
a
t
e
 
s
o
m
e
 
r
o
o
m
s
 
f
o
r
 
t
h
i
s
 
p
r
o
p
e
r
t
y
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
R
P
_
R
O
O
M
S
_
E
X
I
S
T
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
L
I
N
K
'
,
 
'
C
r
e
a
t
e
 
s
o
m
e
 
r
o
o
m
s
 
n
o
w
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
I
M
A
G
E
S
_
E
X
I
S
T
_
S
A
N
I
T
Y
_
C
H
E
C
K
'
,
 
'
R
e
s
e
a
r
c
h
 
h
a
s
 
p
r
o
v
e
n
 
t
h
a
t
 
p
r
o
p
e
r
t
i
e
s
 
w
i
t
h
 
l
o
t
s
 
o
f
 
h
i
g
h
 
q
u
a
l
i
t
y
 
i
m
a
g
e
s
 
g
e
n
e
r
a
t
e
 
m
o
r
e
 
v
i
e
w
s
.
 
U
p
l
o
a
d
 
a
 
m
a
i
n
 
i
m
a
g
e
 
a
n
d
 
s
o
m
e
 
s
l
i
d
e
s
h
o
w
 
p
i
c
t
u
r
e
s
 
t
o
 
i
m
p
r
o
v
e
 
y
o
u
r
 
c
h
a
n
c
e
s
 
o
f
 
g
e
t
t
i
n
g
 
b
o
o
k
i
n
g
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
I
M
A
G
E
S
_
E
X
I
S
T
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
L
I
N
K
'
,
 
'
U
p
l
o
a
d
 
a
n
 
i
m
a
g
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
A
R
I
F
F
S
_
E
X
I
S
T
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
L
I
N
K
'
,
 
'
C
r
e
a
t
e
 
s
o
m
e
 
t
a
r
i
f
f
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
'
,
 
'
W
h
a
t
 
w
i
l
l
 
g
u
e
s
t
s
 
b
o
o
k
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
D
E
S
C
'
,
 
'
I
s
 
t
h
i
s
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
a
 
h
o
t
e
l
 
t
y
p
e
 
p
r
o
p
e
r
t
y
,
 
w
h
e
r
e
 
y
o
u
 
r
e
n
t
 
o
u
t
 
r
o
o
m
s
 
i
n
 
t
h
e
 
p
r
o
p
e
r
t
y
,
 
o
r
 
a
 
v
i
l
l
a
 
t
y
p
e
 
p
r
o
p
e
r
t
y
,
 
w
h
e
r
e
 
y
o
u
 
r
e
n
t
 
o
u
t
 
t
h
e
 
w
h
o
l
e
 
p
r
o
p
e
r
t
y
 
i
n
 
o
n
e
 
b
o
o
k
i
n
g
?
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
H
O
T
E
L
'
,
 
'
R
o
o
m
s
 
i
n
 
t
h
e
 
p
r
o
p
e
r
t
y
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
V
I
L
L
A
'
,
 
'
T
h
e
 
e
n
t
i
r
e
 
p
r
o
p
e
r
t
y
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
B
O
T
H
'
,
 
'
B
o
t
h
'
)
;
 
/
/
 
T
h
i
s
 
i
s
 
a
n
 
i
n
t
e
r
i
m
 
s
e
t
t
i
n
g
 
t
h
a
t
 
g
i
v
e
s
 
b
a
c
k
w
a
r
d
 
c
o
m
p
a
t
a
b
i
l
i
t
y
 
f
o
r
 
e
x
i
s
t
i
n
g
 
u
s
e
r
s
 
w
h
o
 
w
o
n
'
t
 
y
e
t
 
h
a
v
e
 
u
p
d
a
t
e
d
 
t
h
e
i
r
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s
.
 
I
t
 
w
o
n
'
t
 
b
e
 
s
e
l
e
c
t
a
b
l
e

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
B
O
T
H
_
C
O
L
H
E
A
D
'
,
 
'
W
h
a
t
 
w
i
l
l
 
g
u
e
s
t
s
 
b
o
o
k
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
D
D
R
E
S
S
_
S
A
N
I
T
Y
_
C
H
E
C
K
'
,
 
"
Y
o
u
'
l
l
 
n
e
e
d
 
t
o
 
c
o
m
p
l
e
t
e
 
y
o
u
r
 
a
d
d
r
e
s
s
 
d
e
t
a
i
l
s
 
s
o
 
t
h
a
t
 
y
o
u
r
 
g
u
e
s
t
s
 
c
a
n
 
f
i
n
d
 
y
o
u
 
w
h
e
n
 
t
h
e
y
 
c
o
m
e
 
t
o
 
s
t
a
y
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
A
D
D
R
E
S
S
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
L
I
N
K
'
,
 
'
U
p
d
a
t
e
 
y
o
u
r
 
a
d
d
r
e
s
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
I
E
L
D
S
_
H
I
G
H
L
I
G
H
T
E
D
_
A
R
E
_
R
E
Q
U
I
R
E
D
'
,
 
'
O
o
p
s
,
 
i
t
 
l
o
o
k
s
 
l
i
k
e
 
y
o
u
 
m
i
g
h
t
 
h
a
v
e
 
f
o
r
g
o
t
t
e
n
 
t
o
 
c
o
m
p
l
e
t
e
 
a
l
l
 
t
h
e
 
f
i
e
l
d
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
T
A
N
T
_
U
S
'
,
 
'
C
o
n
t
a
c
t
 
u
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
T
I
T
L
E
'
,
 
'
W
e
l
c
o
m
e
 
t
o
 
y
o
u
r
 
n
e
w
 
o
n
l
i
n
e
 
l
i
s
t
i
n
g
 
f
o
r
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
1
'
,
 
'
H
i
,
 
a
n
d
 
w
e
l
c
o
m
e
 
t
o
 
y
o
u
r
 
n
e
w
 
p
r
o
p
e
r
t
y
 
o
n
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
2
'
,
 
"
Y
o
u
 
r
e
c
e
n
t
l
y
 
a
d
d
e
d
 
a
 
n
e
w
 
p
r
o
p
e
r
t
y
 
t
o
 
o
u
r
 
w
e
b
s
i
t
e
,
 
a
n
d
 
w
e
'
d
 
l
i
k
e
 
t
o
 
w
e
l
c
o
m
e
 
y
o
u
 
t
o
 
t
h
e
 
f
a
m
i
l
y
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
3
'
,
 
'
Y
o
u
 
c
a
n
 
s
e
e
 
y
o
u
r
 
n
e
w
 
d
a
s
h
b
o
a
r
d
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
3
_
L
I
N
K
T
E
X
T
'
,
 
'
 
h
e
r
e
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
4
'
,
 
"
O
n
c
e
 
y
o
u
'
v
e
 
s
e
t
u
p
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
y
o
u
 
c
a
n
 
s
e
e
 
h
o
w
 
i
t
 
l
o
o
k
s
 
t
o
 
s
i
t
e
 
v
i
s
i
t
o
r
s
 
b
y
 
v
i
s
i
t
i
n
g
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
4
_
L
I
N
K
T
E
X
T
'
,
 
'
 
y
o
u
r
 
f
r
o
n
t
 
p
a
g
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
5
'
,
 
"
(
i
t
'
s
 
n
o
t
 
p
u
b
l
i
s
h
e
d
,
 
s
o
 
s
i
t
e
 
v
i
s
i
t
o
r
s
 
c
a
n
'
t
 
s
e
e
 
i
t
 
y
e
t
)
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
6
'
,
 
"
A
t
 
t
h
e
 
t
o
p
 
o
f
 
t
h
e
 
p
a
g
e
 
y
o
u
'
l
l
 
s
e
e
 
a
 
n
u
m
b
e
r
 
o
f
 
m
e
s
s
a
g
e
s
.
 
T
h
e
 
b
u
t
t
o
n
s
 
n
e
x
t
 
t
o
 
t
h
e
s
e
 
m
e
s
s
a
g
e
s
 
w
i
l
l
 
g
u
i
d
e
 
y
o
u
 
t
o
 
t
h
e
 
p
a
g
e
s
 
y
o
u
 
n
e
e
d
 
t
o
 
v
i
s
i
t
 
t
o
 
s
e
t
 
u
p
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
o
n
 
o
u
r
 
s
i
t
e
.
 
O
n
c
e
 
y
o
u
'
v
e
 
p
e
r
f
o
r
m
e
d
 
e
a
c
h
 
o
f
 
t
h
e
s
e
 
t
a
s
k
s
 
i
t
'
l
l
 
b
e
 
m
u
c
h
 
e
a
s
i
e
r
 
f
o
r
 
v
i
s
i
t
o
r
s
 
o
n
 
o
u
r
 
s
i
t
e
 
t
o
 
f
i
n
d
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
a
n
d
 
m
a
k
e
 
b
o
o
k
i
n
g
s
 
o
n
l
i
n
e
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
7
'
,
 
'
I
f
 
y
o
u
 
h
a
v
e
 
a
n
y
 
q
u
e
s
t
i
o
n
s
 
a
t
 
a
l
l
,
 
p
l
e
a
s
e
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
7
_
L
I
N
K
T
E
X
T
'
,
 
'
c
o
n
t
a
c
t
 
u
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
8
'
,
 
"
a
n
d
 
w
e
'
l
l
 
b
e
 
d
e
l
i
g
h
t
e
d
 
t
o
 
a
n
s
w
e
r
 
a
l
l
 
y
o
u
r
 
q
u
e
s
t
i
o
n
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
N
E
W
_
P
R
O
P
E
R
T
Y
_
W
E
L
C
O
M
E
_
B
Y
E
B
Y
E
'
,
 
'
A
l
l
 
t
h
e
 
b
e
s
t
,
 
o
u
r
 
t
e
a
m
 
a
t
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
J
I
N
T
O
U
R
_
S
A
N
I
T
Y
_
C
H
E
C
K
'
,
 
"
Y
o
u
 
d
o
n
'
t
 
s
e
e
m
 
t
o
 
h
a
v
e
 
a
n
y
 
t
o
u
r
s
 
t
o
 
s
e
l
l
.
 
C
r
e
a
t
e
 
a
 
t
o
u
r
 
p
r
o
f
i
l
e
,
 
t
h
e
n
 
u
s
e
 
t
h
e
 
G
e
n
e
r
a
t
e
 
b
u
t
t
o
n
 
t
o
 
c
r
e
a
t
e
 
s
o
m
e
 
t
o
u
r
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
J
I
N
T
O
U
R
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
L
I
N
K
'
,
 
"
L
e
t
'
s
 
c
r
e
a
t
e
 
s
o
m
e
 
t
o
u
r
s
!
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
S
_
S
W
A
P
'
,
 
'
S
w
a
p
 
c
u
r
r
e
n
c
y
 
s
y
m
b
o
l
 
l
o
c
a
t
i
o
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
T
A
R
I
F
F
S
_
S
W
A
P
_
D
E
S
C
'
,
 
'
U
s
e
 
t
h
i
s
 
o
p
t
i
o
n
 
t
o
 
m
o
v
e
 
t
h
e
 
c
u
r
r
e
n
c
y
 
s
y
m
b
o
l
 
f
r
o
m
 
b
e
h
i
n
d
 
o
f
,
 
t
o
 
i
n
 
f
r
o
n
t
 
o
f
 
t
h
e
 
p
r
i
c
e
 
f
i
g
u
r
e
,
 
o
r
 
v
i
c
e
 
v
e
r
s
a
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
G
E
N
E
R
A
L
C
O
N
F
I
G
D
E
S
C
_
F
A
C
E
B
O
O
K
'
,
 
'
F
a
c
e
b
o
o
k
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
G
E
N
E
R
A
L
C
O
N
F
I
G
D
E
S
C
_
F
A
C
E
B
O
O
K
_
D
E
S
C
'
,
 
'
E
n
t
e
r
 
y
o
u
r
 
f
a
c
e
b
o
o
k
 
p
a
g
e
 
i
d
,
 
f
o
r
 
e
x
a
m
p
l
e
 
"
j
o
m
r
e
s
"
.
 
L
e
a
v
e
 
t
h
i
s
 
b
l
a
n
k
 
t
o
 
s
h
o
w
 
n
o
t
h
i
n
g
.
 
D
o
 
n
o
t
 
e
n
t
e
r
 
h
t
t
p
s
:
/
/
w
w
w
.
f
a
c
e
b
o
o
k
.
c
o
m
 
o
r
 
a
n
y
t
h
i
n
g
 
e
l
s
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
C
O
M
M
O
N
_
D
O
W
N
L
O
A
D
'
,
 
'
D
o
w
n
l
o
a
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
W
A
R
N
I
N
G
S
_
T
A
R
I
F
F
S
_
N
O
T
A
R
I
F
F
S
_
S
R
P
'
,
 
'
N
e
x
t
 
y
o
u
 
w
i
l
l
 
n
e
e
d
 
t
o
 
a
d
d
 
s
o
m
e
 
t
a
r
i
f
f
s
.
 
T
h
e
s
e
 
a
r
e
 
y
o
u
r
 
b
a
s
i
c
 
p
r
i
c
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
T
S
T
R
A
P
_
O
F
F
_
W
A
R
N
I
N
G
_
T
I
T
L
E
'
,
 
'
B
o
o
t
s
t
r
a
p
 
i
s
 
n
o
t
 
e
n
a
b
l
e
d
!
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
T
S
T
R
A
P
_
O
F
F
_
W
A
R
N
I
N
G
'
,
 
'
W
a
r
n
i
n
g
,
 
y
o
u
 
d
o
 
n
o
t
 
h
a
v
e
 
B
o
o
t
s
t
r
a
p
 
e
n
a
b
l
e
d
 
i
n
 
J
o
m
r
e
s
 
S
i
t
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
-
>
 
M
i
s
c
 
t
a
b
.
 
T
o
 
p
r
o
v
i
d
e
 
<
i
>
s
o
m
e
<
/
i
>
 
f
u
n
c
t
i
o
n
a
l
i
t
y
 
J
o
m
r
e
s
 
i
s
 
c
u
r
r
e
n
t
l
y
 
u
s
i
n
g
 
i
t
\
'
s
 
o
l
d
,
 
j
Q
u
e
r
y
 
U
I
 
b
a
s
e
d
 
t
e
m
p
l
a
t
e
s
,
 
h
o
w
e
v
e
r
 
t
h
e
s
e
 
h
a
v
e
 
n
o
t
 
b
e
e
n
 
w
o
r
k
e
d
 
o
n
 
i
n
 
s
e
v
e
r
a
l
 
y
e
a
r
s
.
 
A
l
l
 
c
u
r
r
e
n
t
 
d
e
v
e
l
o
p
m
e
n
t
 
a
n
d
 
i
m
p
r
o
v
e
m
e
n
t
s
 
o
f
 
J
o
m
r
e
s
 
t
e
m
p
l
a
t
e
s
 
(
 
l
a
y
o
u
t
 
f
i
l
e
s
 
)
 
a
r
e
 
m
a
d
e
 
t
o
 
i
t
\
'
s
 
B
o
o
t
s
t
r
a
p
 
3
 
t
e
m
p
l
a
t
e
 
f
i
l
e
s
.
 
T
o
 
g
e
t
 
t
h
e
 
b
e
s
t
 
o
u
t
 
o
f
 
J
o
m
r
e
s
 
w
e
 
r
e
c
o
m
m
e
n
d
 
y
o
u
 
i
n
s
t
a
l
l
 
a
 
B
o
o
t
s
t
r
a
p
 
3
 
b
a
s
e
d
 
t
h
e
m
e
 
f
o
r
 
W
o
r
d
p
r
e
s
s
 
o
r
 
J
o
o
m
l
a
.
 
O
n
c
e
 
y
o
u
 
h
a
v
e
 
d
o
n
e
 
t
h
a
t
 
y
o
u
 
c
a
n
 
e
n
a
b
l
e
 
J
o
m
r
e
s
\
'
 
B
o
o
t
s
t
r
a
p
 
t
e
m
p
l
a
t
e
s
 
i
n
 
S
i
t
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
U
P
P
O
R
T
K
E
Y
_
D
E
S
C
_
V
A
L
I
D
_
N
O
_
P
L
U
G
I
N
S
'
,
 
'
Y
o
u
r
 
s
u
p
p
o
r
t
 
k
e
y
 
i
s
 
v
a
l
i
d
.
 
N
o
t
e
 
t
h
a
t
 
t
h
i
s
 
l
i
c
e
n
s
e
 
d
o
e
s
 
n
o
t
 
a
l
l
o
w
 
p
l
u
g
i
n
 
d
o
w
n
l
o
a
d
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
A
S
H
B
O
A
R
D
_
D
R
A
G
_
T
R
A
S
H
'
,
 
'
D
r
a
g
 
b
o
o
k
i
n
g
s
 
t
o
 
t
h
i
s
 
a
r
e
a
 
t
o
 
c
a
n
c
e
l
 
t
h
e
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
L
A
T
'
,
 
'
L
a
t
 
(
n
n
.
n
n
n
n
)
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
L
O
N
G
'
,
 
'
L
o
n
g
 
(
n
n
.
n
n
n
n
)
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
D
E
F
A
U
L
T
_
S
H
O
R
T
C
O
D
E
_
A
L
E
R
T
'
,
 
'
P
l
e
a
s
e
 
e
n
s
u
r
e
 
t
h
a
t
 
y
o
u
`
v
e
 
c
r
e
a
t
e
d
 
a
 
W
o
r
d
P
r
e
s
s
 
P
a
g
e
 
t
h
a
t
 
c
o
n
t
a
i
n
s
 
t
h
e
 
[
j
o
m
r
e
s
:
x
x
-
X
X
]
 
s
h
o
r
t
c
o
d
e
 
(
 
w
h
e
r
e
 
x
x
-
X
X
 
i
s
 
y
o
u
r
 
s
i
t
e
 
l
a
n
g
u
a
g
e
 
c
o
d
e
,
 
f
o
r
 
e
x
a
m
p
l
e
 
[
j
o
m
r
e
s
:
e
n
-
G
B
]
 
)
 
o
t
h
e
r
w
i
s
e
 
y
o
u
 
w
i
l
l
 
n
o
t
 
b
e
 
a
b
l
e
 
t
o
 
a
c
c
e
s
s
 
J
o
m
r
e
s
 
f
r
o
m
 
t
h
e
 
s
i
t
e
 
f
r
o
n
t
e
n
d
 
t
o
 
m
a
n
a
g
e
 
y
o
u
r
 
p
r
o
p
e
r
t
i
e
s
 
a
n
d
 
b
o
o
k
i
n
g
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
M
A
N
A
G
E
M
E
N
T
_
P
R
O
C
E
S
S
_
R
O
O
M
_
T
Y
P
E
S
'
,
 
"
B
e
f
o
r
e
 
y
o
u
 
c
a
n
 
c
r
e
a
t
e
 
a
 
r
o
o
m
 
t
y
p
e
,
 
w
e
 
n
e
e
d
 
t
o
 
k
n
o
w
 
i
f
 
i
t
'
s
 
f
o
r
 
a
 
h
o
t
e
l
 
t
y
p
e
 
p
r
o
p
e
r
t
y
,
 
o
r
 
a
 
v
i
l
l
a
 
t
y
p
e
 
p
r
o
p
e
r
t
y
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
T
Y
P
E
S
_
W
I
T
H
O
U
T
_
R
O
O
M
_
T
Y
P
E
S
_
L
I
N
K
_
T
E
X
T
'
,
 
'
C
l
i
c
k
 
t
o
 
a
d
d
 
n
e
w
 
r
o
o
m
 
t
y
p
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
T
Y
P
E
S
_
W
I
T
H
O
U
T
_
R
O
O
M
_
T
Y
P
E
S
'
,
 
'
W
a
r
n
i
n
g
,
 
y
o
u
 
h
a
v
e
 
o
n
e
 
o
r
 
m
o
r
e
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s
 
w
i
t
h
 
n
o
 
r
o
o
m
 
t
y
p
e
s
.
 
P
r
o
p
e
r
t
i
e
s
 
n
e
e
d
 
r
o
o
m
 
t
y
p
e
s
 
s
o
 
t
h
a
t
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
c
a
n
 
c
r
e
a
t
e
 
t
a
r
i
f
f
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
T
Y
P
E
S
_
W
I
T
H
O
U
T
_
R
O
O
M
_
T
Y
P
E
S
_
L
I
S
T
_
R
O
O
M
_
T
Y
P
E
S
'
,
 
'
U
s
e
 
t
h
e
 
N
e
w
 
b
u
t
t
o
n
 
a
b
o
v
e
 
t
o
 
c
r
e
a
t
e
 
n
e
w
 
R
o
o
m
 
T
y
p
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
T
O
U
R
S
'
,
 
'
T
o
u
r
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
T
Y
P
E
_
F
L
A
G
_
R
E
A
L
E
S
T
A
T
E
'
,
 
'
N
o
 
b
o
o
k
i
n
g
s
/
R
e
a
l
 
e
s
t
a
t
e
 
(
 
s
i
m
p
l
e
 
l
i
s
t
i
n
g
 
)
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
L
O
G
_
L
O
C
A
T
I
O
N
'
,
 
'
L
o
g
 
f
i
l
e
 
l
o
c
a
t
i
o
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
L
O
G
_
L
O
C
A
T
I
O
N
_
D
E
S
C
'
,
 
'
J
o
m
r
e
s
 
l
o
g
s
 
s
y
s
t
e
m
 
a
c
t
i
v
i
t
y
 
b
y
 
d
e
f
a
u
l
t
 
t
o
 
t
h
e
 
'
.
J
O
M
R
E
S
_
S
Y
S
T
E
M
L
O
G
_
P
A
T
H
.
"
 
l
o
c
a
t
i
o
n
.
 
A
s
 
t
h
i
s
 
f
i
l
e
 
m
a
y
 
c
o
n
t
a
i
n
 
s
e
n
s
i
t
i
v
e
 
i
n
f
o
r
m
a
t
i
o
n
 
(
 
a
p
i
 
k
e
y
s
,
 
s
y
s
t
e
m
 
p
a
t
h
s
,
 
g
a
t
e
w
a
y
 
i
n
f
o
r
m
a
t
i
o
n
,
 
g
u
e
s
t
 
i
n
f
o
r
m
a
t
i
o
n
)
 
w
e
 
s
t
r
o
n
g
l
y
 
r
e
c
o
m
m
e
n
d
 
t
h
a
t
 
y
o
u
 
c
h
a
n
g
e
 
t
h
i
s
 
p
a
t
h
 
t
o
 
o
n
e
 
a
b
o
v
e
 
y
o
u
r
 
w
e
b
 
d
o
c
u
m
e
n
t
 
r
o
o
t
.
 
I
f
 
y
o
u
 
d
o
n
'
t
 
u
n
d
e
r
s
t
a
n
d
 
w
h
a
t
 
t
h
i
s
 
m
e
a
n
s
,
 
p
l
e
a
s
e
 
a
s
k
 
y
o
u
r
 
w
e
b
 
h
o
s
t
s
 
f
o
r
 
a
d
v
i
c
e
 
a
s
 
t
h
e
y
'
l
l
 
k
n
o
w
 
y
o
u
r
 
f
i
l
e
 
s
y
s
t
e
m
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
L
O
G
_
L
O
C
A
T
I
O
N
_
W
A
R
N
I
N
G
'
,
 
'
J
o
m
r
e
s
 
l
o
g
s
 
d
e
t
a
i
l
e
d
 
i
n
f
o
r
m
a
t
i
o
n
 
a
b
o
u
t
 
y
o
u
r
 
s
y
s
t
e
m
,
 
i
n
c
l
u
d
i
n
g
 
a
p
i
 
k
e
y
s
,
 
s
y
s
t
e
m
 
p
a
t
h
s
,
 
g
a
t
e
w
a
y
 
a
n
d
 
g
u
e
s
t
 
i
n
f
o
r
m
a
t
i
o
n
,
 
a
l
l
 
o
f
 
w
h
i
c
h
 
s
h
o
u
l
d
 
n
o
t
 
b
e
 
v
i
s
i
b
l
e
 
t
o
 
t
h
e
 
r
e
s
t
 
o
f
 
t
h
e
 
i
n
t
e
r
n
e
t
.
 
Y
o
u
r
 
S
y
s
t
e
m
 
L
o
g
 
p
a
t
h
 
i
s
 
n
o
t
 
s
e
t
,
 
s
o
 
s
y
s
t
e
m
 
l
o
g
s
 
a
r
e
 
c
u
r
r
e
n
t
l
y
 
b
e
i
n
g
 
s
a
v
e
d
 
t
o
 
t
h
e
 
'
.
J
O
M
R
E
S
_
S
Y
S
T
E
M
L
O
G
_
P
A
T
H
.
"
 
d
i
r
e
c
t
o
r
y
,
 
w
h
i
c
h
 
i
s
 
n
o
t
 
i
d
e
a
l
.
 
P
l
e
a
s
e
 
v
i
s
i
t
 
S
i
t
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
-
>
 
D
e
b
u
g
g
i
n
g
 
a
n
d
 
s
e
t
 
a
 
p
a
t
h
 
i
n
 
y
o
u
r
 
f
i
l
e
s
y
s
t
e
m
 
t
h
a
t
'
s
 
o
u
t
s
i
t
e
 
o
f
 
t
h
e
 
w
e
b
 
r
o
o
t
.
 
I
f
 
i
n
 
d
o
u
b
t
,
 
p
l
e
a
s
e
 
c
o
n
t
a
c
t
 
y
o
u
r
 
w
e
b
 
h
o
s
t
s
 
a
s
 
t
h
e
y
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
a
d
v
i
s
e
 
y
o
u
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
L
O
G
_
L
O
C
A
T
I
O
N
_
R
E
C
O
M
M
E
N
D
E
D
'
,
 
'
I
f
 
y
o
u
r
 
C
M
S
 
i
s
 
i
n
s
t
a
l
l
e
d
 
i
n
 
t
h
e
 
r
o
o
t
 
d
i
r
e
c
t
o
r
y
 
o
f
 
y
o
u
r
 
w
e
b
s
i
t
e
,
 
t
h
e
n
 
a
 
s
u
i
t
a
b
l
e
 
l
o
c
a
t
i
o
n
 
w
o
u
l
d
 
b
e
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
G
M
A
P
_
K
E
Y
_
W
A
R
N
I
N
G
'
,
 
"
Y
o
u
 
d
o
 
n
o
t
 
h
a
v
e
 
a
 
G
o
o
g
l
e
 
M
a
p
s
 
k
e
y
 
s
e
t
.
 
D
u
e
 
t
o
 
r
e
c
e
n
t
 
c
h
a
n
g
e
s
 
i
n
 
G
o
o
g
l
e
 
m
a
p
s
,
 
a
l
l
 
n
e
w
 
s
i
t
e
s
 
w
i
l
l
 
n
e
e
d
 
a
n
 
A
P
I
 
k
e
y
 
t
o
 
b
e
 
a
b
l
e
 
t
o
 
u
s
e
 
G
o
o
g
l
e
 
m
a
p
'
s
 
f
e
a
t
u
r
e
s
.
 
P
l
e
a
s
e
 
<
a
 
h
r
e
f
=
'
h
t
t
p
:
/
/
w
w
w
.
j
o
m
r
e
s
.
n
e
t
/
m
a
n
u
a
l
/
s
i
t
e
-
m
a
n
a
g
e
r
s
-
g
u
i
d
e
/
1
4
-
g
e
t
t
i
n
g
-
s
t
a
r
t
e
d
/
3
3
8
-
g
o
o
g
l
e
-
m
a
p
s
-
a
p
i
-
k
e
y
'
 
t
a
r
g
e
t
=
'
_
b
l
a
n
k
'
>
s
e
e
 
o
u
r
 
m
a
n
u
a
l
 
p
a
g
e
 
o
n
 
h
o
w
 
t
o
 
c
r
e
a
t
e
 
a
n
 
A
P
I
 
k
e
y
<
/
a
>
 
a
n
d
 
s
a
v
e
 
t
h
e
 
k
e
y
 
i
n
 
J
o
m
r
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
G
O
O
G
L
E
_
M
A
P
_
S
T
Y
L
E
'
,
 
'
G
o
o
g
l
e
 
m
a
p
 
c
o
l
o
u
r
 
s
c
h
e
m
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
R
E
G
I
S
T
R
A
T
I
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
_
T
I
T
L
E
'
,
 
"
R
i
g
h
t
,
 
l
e
t
'
s
 
s
t
a
r
t
 
a
d
d
i
n
g
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
t
o
 
t
h
e
 
w
e
b
s
i
t
e
.
 
W
e
 
n
e
e
d
 
t
o
 
c
o
l
l
e
c
t
 
a
 
l
i
t
t
l
e
 
i
n
f
o
r
m
a
t
i
o
n
 
a
b
o
u
t
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
h
e
r
e
.
 
T
h
i
s
 
w
i
l
l
 
a
l
l
o
w
 
u
s
 
t
o
 
s
e
t
 
u
p
 
t
h
e
 
b
a
r
e
 
b
o
n
e
s
 
o
f
 
y
o
u
r
 
p
r
o
p
e
r
t
y
.
 
O
n
c
e
 
t
h
a
t
'
s
 
d
o
n
e
,
 
t
h
e
n
 
y
o
u
'
l
l
 
b
e
 
g
u
i
d
e
d
 
t
h
r
o
u
g
h
 
a
d
d
i
n
g
 
r
o
o
m
s
,
 
p
r
i
c
e
s
 
a
n
d
 
i
m
a
g
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
R
E
G
I
S
T
R
A
T
I
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
_
N
O
T
E
1
'
,
 
'
T
h
e
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
h
e
l
p
s
 
y
o
u
 
t
o
 
d
e
f
i
n
e
 
h
o
w
 
t
h
e
 
p
r
o
p
e
r
t
y
 
w
i
l
l
 
b
e
 
b
o
o
k
e
d
,
 
f
o
r
 
e
x
a
m
p
l
e
 
w
i
t
h
 
h
o
t
e
l
s
 
y
o
u
 
"
s
e
l
l
"
 
j
u
s
t
 
o
n
e
 
o
r
 
t
w
o
 
r
o
o
m
s
 
a
t
 
a
 
t
i
m
e
,
 
w
h
e
r
e
a
s
 
w
i
t
h
 
v
i
l
l
a
s
 
y
o
u
 
o
f
f
e
r
 
t
h
e
 
e
n
t
i
r
e
 
p
r
o
p
e
r
t
y
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
_
R
E
G
I
S
T
R
A
T
I
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
_
N
O
T
E
2
'
,
 
"
N
o
t
e
 
t
h
a
t
 
t
h
e
 
e
m
a
i
l
 
a
d
d
r
e
s
s
 
d
o
e
s
n
'
t
 
n
e
e
d
 
t
o
 
b
e
 
t
h
e
 
s
a
m
e
 
a
s
 
t
h
e
 
o
n
e
 
y
o
u
 
u
s
e
d
 
w
h
e
n
 
r
e
g
i
s
t
e
r
i
n
g
 
y
o
u
r
 
a
c
c
o
u
n
t
.
 
T
h
i
s
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
h
a
v
e
 
d
i
f
f
e
r
e
n
t
 
a
d
d
r
e
s
s
e
s
 
f
o
r
 
d
i
f
f
e
r
e
n
t
 
p
r
o
p
e
r
t
i
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
M
I
N
I
M
U
M
_
D
E
P
O
S
I
T
'
,
 
'
M
i
n
i
m
u
m
 
D
e
p
o
s
i
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
M
I
N
I
M
U
M
_
D
E
P
O
S
I
T
_
D
E
S
C
'
,
 
'
Y
o
u
 
c
a
n
 
c
o
n
f
i
g
u
r
e
 
t
h
e
 
m
i
n
i
m
u
m
 
d
e
p
o
s
i
t
 
a
m
o
u
n
t
 
t
o
 
b
e
 
c
h
a
r
g
e
d
.
 
I
f
 
y
o
u
 
d
o
,
 
t
h
e
n
 
t
h
e
 
"
D
e
p
o
s
i
t
 
r
e
q
u
i
r
e
d
 
i
s
 
c
o
s
t
 
o
f
 
t
h
e
 
f
i
r
s
t
 
n
i
g
h
t
?
"
 
&
 
"
D
e
p
o
s
i
t
 
r
e
q
u
i
r
e
d
 
i
s
 
p
e
r
c
e
n
t
a
g
e
?
"
 
s
e
t
t
i
n
g
s
 
i
n
 
P
r
o
p
e
r
t
y
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
c
a
n
n
o
t
 
b
e
 
c
o
n
f
i
g
u
r
e
d
,
 
i
n
s
t
e
a
d
 
a
l
l
 
d
e
p
o
s
i
t
 
v
a
l
u
e
s
 
a
r
e
 
a
 
p
e
r
c
e
n
t
a
g
e
 
a
n
d
 
m
u
s
t
 
b
e
 
a
t
 
l
e
a
s
t
 
t
h
e
 
f
i
g
u
r
e
 
y
o
u
 
d
e
f
i
n
e
 
h
e
r
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
M
I
N
I
M
U
M
_
D
E
P
O
S
I
T
_
S
E
T
T
I
N
G
'
,
 
'
T
h
i
s
 
f
i
g
u
r
e
 
c
a
n
n
o
t
 
b
e
 
l
e
s
s
 
t
h
a
n
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
L
O
G
_
S
Y
S
L
O
G
_
H
O
S
T
'
,
 
'
S
y
s
l
o
g
 
h
o
s
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
L
O
G
_
S
Y
S
L
O
G
_
P
O
R
T
'
,
 
'
S
y
s
l
o
g
 
P
o
r
t
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
L
O
G
_
S
Y
S
L
O
G
_
H
O
S
T
_
D
E
S
C
'
,
 
"
I
f
 
y
o
u
 
w
a
n
t
 
t
o
 
s
e
n
d
 
s
y
s
t
e
m
 
l
o
g
g
i
n
g
 
m
e
s
s
a
g
e
s
 
t
o
 
a
 
s
y
s
l
o
g
 
s
e
r
v
e
r
,
 
y
o
u
 
c
a
n
 
s
e
t
 
t
h
e
 
H
o
s
t
n
a
m
e
 
o
r
 
I
P
 
(
 
e
.
g
.
 
1
9
2
.
1
6
8
.
0
.
2
)
 
a
n
d
 
p
o
r
t
 
(
e
.
g
.
 
5
1
4
)
 
h
e
r
e
.
 
N
o
t
e
,
 
i
f
 
t
h
e
 
s
i
t
e
 
i
s
 
s
e
t
 
t
o
 
'
D
e
v
e
l
o
p
m
e
n
t
'
 
t
h
e
n
 
D
E
B
U
G
 
m
e
s
s
a
g
e
s
 
w
i
l
l
 
b
e
 
s
e
n
t
.
 
I
f
 
s
e
t
 
t
o
 
'
P
r
o
d
u
c
t
i
o
n
'
 
t
h
e
n
 
o
n
l
y
 
I
N
F
O
 
l
e
v
e
l
 
a
n
d
 
h
i
g
h
e
r
 
m
e
s
s
a
g
e
s
 
w
i
l
l
 
b
e
 
s
e
n
t
.
 
T
o
 
d
i
s
a
b
l
e
 
l
o
g
g
i
n
g
 
t
o
 
t
h
e
 
r
e
m
o
t
e
 
s
e
r
v
e
r
,
 
e
m
p
t
y
 
t
h
e
 
h
o
s
t
 
a
n
d
 
p
o
r
t
 
f
i
e
l
d
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
L
O
G
_
S
Y
S
L
O
G
_
N
O
T
A
L
L
O
W
E
D
'
,
 
"
P
H
P
 
i
s
 
n
o
t
 
a
l
l
o
w
e
d
 
t
o
 
a
c
c
e
s
s
 
t
h
e
 
t
h
e
 
'
o
p
e
n
l
o
g
'
 
a
n
d
 
'
s
y
s
l
o
g
'
 
P
H
P
 
f
u
n
c
t
i
o
n
s
.
 
T
h
i
s
 
i
s
 
a
 
s
e
r
v
e
r
 
s
i
d
e
 
s
e
t
t
i
n
g
,
 
i
f
 
y
o
u
'
d
 
l
i
k
e
 
J
o
m
r
e
s
 
t
o
 
s
e
n
d
 
m
e
s
s
a
g
e
s
 
t
o
 
a
 
s
y
s
l
o
g
 
s
e
r
v
e
r
,
 
p
l
e
a
s
e
 
c
o
n
s
u
l
t
 
y
o
u
r
 
h
o
s
t
s
 
a
n
d
 
c
o
n
f
i
r
m
 
i
f
 
P
H
P
 
i
s
 
a
l
l
o
w
e
d
 
t
o
 
a
c
c
e
s
s
 
t
h
e
s
e
 
f
u
n
c
t
i
o
n
s
.
 
O
n
c
e
 
e
n
a
b
l
e
d
,
 
y
o
u
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
c
o
n
f
i
g
u
r
e
 
y
o
u
r
 
s
y
s
l
o
g
 
s
e
r
v
e
r
'
s
 
s
e
t
t
i
n
g
s
 
h
e
r
e
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
E
N
D
_
E
R
R
O
R
_
E
M
A
I
L
'
,
 
'
S
e
n
d
 
a
n
 
e
m
a
i
l
 
t
o
 
s
i
t
e
 
a
d
m
i
n
 
w
h
e
n
 
a
n
 
e
r
r
o
r
 
o
c
c
u
r
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
E
N
D
_
E
R
R
O
R
_
E
M
A
I
L
_
D
E
S
C
'
,
 
"
H
i
s
t
o
r
i
c
a
l
l
y
 
i
s
s
u
e
s
 
t
h
a
t
 
s
h
o
u
l
d
 
b
e
 
i
n
v
e
s
t
i
g
a
t
e
d
 
h
a
v
e
 
b
e
e
n
 
e
m
a
i
l
e
d
 
t
o
 
s
i
t
e
 
o
w
n
e
r
s
.
 
T
h
i
s
 
c
a
n
 
b
e
 
g
r
e
a
t
 
f
o
r
 
k
e
e
p
i
n
g
 
a
n
 
e
y
e
 
o
n
 
t
h
e
 
r
u
n
n
i
n
g
 
o
f
 
y
o
u
r
 
s
y
s
t
e
m
 
a
s
 
i
t
 
h
a
s
 
a
n
 
a
w
f
u
l
 
l
o
t
 
o
f
 
m
o
v
i
n
g
 
p
a
r
t
s
 
a
n
d
 
i
t
'
s
 
d
i
f
f
i
c
u
l
t
 
t
o
 
k
e
e
p
 
t
r
a
c
k
 
o
f
 
a
l
l
 
o
f
 
t
h
e
m
.
 
U
n
f
o
r
t
u
n
a
t
e
l
y
,
 
S
p
i
d
e
r
s
 
a
n
d
 
B
o
t
s
 
c
r
a
w
l
i
n
g
 
y
o
u
r
 
s
i
t
e
s
 
(
 
e
v
e
n
 
f
r
i
e
n
d
l
y
 
o
n
e
s
 
)
 
c
a
n
 
i
n
a
d
v
e
r
t
e
n
t
l
y
 
t
r
i
g
g
e
r
 
f
a
t
a
l
 
e
r
r
o
r
s
 
a
n
d
 
t
h
i
s
 
c
a
n
 
c
a
u
s
e
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
m
e
s
s
a
g
e
s
 
y
o
u
 
r
e
c
i
e
v
e
 
t
o
 
b
e
 
o
v
e
r
w
h
e
l
m
i
n
g
.
 
I
f
 
t
h
a
t
'
s
 
t
h
e
 
c
a
s
e
 
t
h
e
n
 
s
e
t
 
t
h
i
s
 
o
p
t
i
o
n
 
t
o
 
N
o
.
 
J
o
m
r
e
s
 
s
e
n
d
s
 
l
o
g
g
i
n
g
 
m
e
s
s
a
g
e
s
 
t
o
 
b
o
t
h
 
a
 
s
e
t
 
o
f
 
l
o
g
g
i
n
g
 
f
i
l
e
s
 
a
n
d
 
t
o
 
a
 
s
y
s
l
o
g
 
s
e
r
v
e
r
 
(
 
i
f
 
 
y
o
u
r
 
s
p
e
c
i
f
i
c
 
P
H
P
 
s
e
t
t
i
n
g
s
 
a
l
l
o
w
,
 
i
f
 
t
h
e
y
 
d
o
n
'
t
 
p
l
e
a
s
e
 
c
o
n
t
a
c
t
 
y
o
u
r
 
h
o
s
t
 
)
.
 
Y
o
u
 
c
a
n
 
m
a
n
u
a
l
l
y
 
a
n
a
l
y
s
e
 
t
h
e
 
f
i
l
e
s
 
i
f
 
y
o
u
 
a
r
e
 
l
o
o
k
i
n
g
 
f
o
r
 
s
o
m
e
t
h
i
n
g
 
s
p
e
c
i
f
i
c
 
(
 
f
o
r
 
e
x
a
m
p
l
e
,
 
i
f
 
y
o
u
'
r
e
 
d
e
v
e
l
o
p
i
n
g
 
a
 
g
a
t
e
w
a
y
 
a
n
d
 
w
a
n
t
 
t
o
 
u
s
e
 
t
h
e
 
g
a
t
e
w
a
y
_
l
o
g
(
)
 
f
u
n
c
t
i
o
n
 
c
a
l
l
.
)
 
b
u
t
 
t
h
a
t
'
s
 
a
 
l
o
t
 
o
f
 
i
n
f
o
r
m
a
t
i
o
n
 
t
o
 
t
r
a
w
l
 
t
h
r
o
u
g
h
 
s
o
 
i
t
'
s
 
b
e
t
t
e
r
 
t
o
 
u
s
e
 
s
o
m
e
t
h
i
n
g
 
l
i
k
e
 
a
 
s
y
s
l
o
g
 
f
i
l
e
 
a
n
a
l
y
s
e
r
.
 
I
f
 
y
o
u
'
r
e
 
d
e
v
e
l
o
p
i
n
g
 
o
n
 
l
i
n
u
x
 
t
h
e
n
 
t
h
e
r
e
 
a
r
e
 
l
o
t
s
 
o
f
 
t
o
o
l
s
 
a
v
a
i
l
a
b
l
e
 
t
o
 
y
o
u
,
 
i
f
 
o
n
 
W
i
n
d
o
w
s
 
t
h
e
n
 
a
 
s
i
m
p
l
e
 
t
o
o
l
 
y
o
u
 
c
a
n
 
u
s
e
 
i
s
 
h
t
t
p
:
/
/
m
a
x
b
e
l
k
o
v
.
g
i
t
h
u
b
.
i
o
/
v
i
s
u
a
l
s
y
s
l
o
g
/
 
O
n
 
t
h
i
s
 
p
a
g
e
 
s
e
t
 
t
h
e
 
'
S
y
s
l
o
g
 
h
o
s
t
'
 
t
o
 
'
1
2
7
.
0
.
0
.
1
'
 
a
n
d
 
t
h
e
 
'
P
o
r
t
'
 
t
o
 
5
1
4
 
t
o
 
s
e
e
 
m
e
s
s
a
g
e
s
 
l
o
g
g
e
d
 
i
n
 
t
h
a
t
 
t
o
o
l
.
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
'
,
 
'
F
r
e
q
u
e
n
t
l
y
 
a
s
k
e
d
 
q
u
e
s
t
i
o
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
I
N
T
R
O
D
U
C
T
I
O
N
'
,
 
'
I
n
t
r
o
d
u
c
t
i
o
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
I
N
T
R
O
D
U
C
T
I
O
N
_
W
H
A
T
I
S
J
O
M
R
E
S
'
,
 
'
W
h
a
t
 
i
s
 
J
o
m
r
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
I
N
T
R
O
D
U
C
T
I
O
N
_
W
H
A
T
I
S
J
O
M
R
E
S
'
,
 
"
J
o
m
r
e
s
 
i
s
 
a
 
h
o
t
e
l
 
a
n
d
 
v
i
l
l
a
 
b
o
o
k
i
n
g
 
s
y
s
t
e
m
 
t
h
a
t
 
w
o
r
k
s
 
w
i
t
h
 
t
h
e
 
J
o
o
m
l
a
 
a
n
d
 
W
o
r
d
p
r
e
s
s
 
C
o
n
t
e
n
t
 
M
a
n
a
g
e
m
e
n
t
 
S
y
s
t
e
m
s
.
 
I
t
'
s
 
a
 
f
u
l
l
 
b
o
o
k
i
n
g
 
s
y
s
t
e
m
,
 
t
h
i
n
k
 
'
b
o
o
k
i
n
g
.
c
o
m
'
 
o
r
 
'
a
i
r
b
n
b
'
 
w
i
t
h
o
u
t
 
t
h
e
 
e
x
p
e
n
s
e
.
 
I
t
'
s
 
a
 
c
o
m
p
l
e
t
e
 
t
o
o
l
k
i
t
 
t
h
a
t
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
b
u
i
l
d
 
a
 
u
n
i
q
u
e
 
o
n
l
i
n
e
 
b
o
o
k
i
n
g
 
s
e
r
v
i
c
e
 
f
o
r
 
a
s
 
m
a
n
y
 
p
r
o
p
e
r
t
i
e
s
 
a
s
 
y
o
u
 
w
a
n
t
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
I
N
T
R
O
D
U
C
T
I
O
N
_
U
S
E
R
S
A
D
D
'
,
 
'
C
a
n
 
u
s
e
r
s
 
r
e
g
i
s
t
e
r
 
o
n
 
m
y
 
J
o
m
r
e
s
 
s
i
t
e
 
a
n
d
 
a
d
d
 
t
h
e
i
r
 
o
w
n
 
p
r
o
p
e
r
t
i
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
I
N
T
R
O
D
U
C
T
I
O
N
_
U
S
E
R
S
A
D
D
'
,
 
'
Y
e
s
.
 
B
y
 
d
e
f
a
u
l
t
 
J
o
m
r
e
s
 
a
l
l
o
w
s
 
r
e
g
i
s
t
e
r
e
d
 
u
s
e
r
s
 
t
o
 
a
d
d
 
t
h
e
i
r
 
o
w
n
 
p
r
o
p
e
r
t
i
e
s
 
t
o
 
y
o
u
r
 
s
i
t
e
.
 
Y
o
u
 
c
a
n
 
d
i
s
a
b
l
e
 
t
h
i
s
 
i
n
 
t
h
e
 
S
i
t
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
>
 
M
i
s
c
 
t
a
b
 
i
f
 
y
o
u
 
n
e
e
d
 
t
o
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
R
O
P
E
R
T
I
E
S
'
,
 
'
P
r
o
p
e
r
t
i
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
A
D
D
P
R
O
P
E
R
T
I
E
S
'
,
 
'
H
o
w
 
d
o
 
I
 
a
d
d
 
a
 
n
e
w
 
p
r
o
p
e
r
t
y
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
A
D
D
P
R
O
P
E
R
T
I
E
S
'
,
 
"
W
h
e
n
 
J
o
m
r
e
s
 
i
s
 
i
n
s
t
a
l
l
e
d
 
t
h
e
 
a
d
m
i
n
i
s
t
r
a
t
o
r
 
u
s
e
r
 
i
s
 
c
r
e
a
t
e
d
 
a
s
 
a
 
S
u
p
e
r
 
P
r
o
p
e
r
t
y
 
M
a
n
a
g
e
r
.
 
L
o
g
 
i
n
t
o
 
t
h
e
 
f
r
o
n
t
e
n
d
 
o
f
 
y
o
u
r
 
C
M
S
 
(
t
h
e
 
p
u
b
l
i
c
 
p
a
g
e
s
)
 
a
s
 
y
o
u
r
 
a
d
m
i
n
i
s
t
r
a
t
o
r
 
u
s
e
r
 
a
n
d
 
f
r
o
m
 
t
h
e
r
e
 
y
o
u
 
c
a
n
 
a
d
d
 
n
e
w
 
p
r
o
p
e
r
t
i
e
s
.
 
<
b
r
/
>
Y
o
u
 
c
a
n
 
c
r
e
a
t
e
 
n
e
w
 
m
a
n
a
g
e
r
s
 
i
n
 
t
h
e
 
P
r
o
p
e
r
t
y
 
M
a
n
a
g
e
r
s
 
p
a
g
e
 
i
f
 
y
o
u
 
w
a
n
t
 
t
o
 
a
d
d
 
a
 
n
e
w
 
m
a
n
a
g
e
r
,
 
h
o
w
e
v
e
r
 
b
y
 
d
e
f
a
u
l
t
 
(
 
y
o
u
 
c
a
n
 
d
i
s
a
b
l
e
 
t
h
i
s
 
)
 
a
n
y
 
r
e
g
i
s
t
e
r
e
d
 
u
s
e
r
 
w
h
o
 
c
r
e
a
t
e
s
 
a
 
p
r
o
p
e
r
t
y
 
i
s
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
c
r
e
a
t
e
d
 
a
s
 
a
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
 
f
o
r
 
t
h
e
 
p
r
o
p
e
r
t
i
e
s
 
t
h
e
y
 
c
r
e
a
t
e
.
 
F
o
r
 
s
e
c
u
r
i
t
y
 
r
e
a
s
o
n
s
 
t
h
e
y
 
c
a
n
n
o
t
 
a
d
m
i
n
i
s
t
e
r
 
o
t
h
e
r
 
m
a
n
a
g
e
r
'
s
 
p
r
o
p
e
r
t
i
e
s
.
 
T
h
i
s
 
c
a
n
 
b
e
 
c
h
a
n
g
e
d
 
b
y
 
e
l
e
v
a
t
i
n
g
 
t
h
a
t
 
u
s
e
r
 
t
o
 
a
 
S
u
p
e
r
 
P
r
o
p
e
r
t
y
 
M
a
n
a
g
e
r
 
i
n
 
t
h
e
 
P
r
o
p
e
r
t
y
 
M
a
n
a
g
e
r
s
 
p
a
g
e
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
I
M
P
O
R
T
P
R
O
P
E
R
T
I
E
S
'
,
 
'
C
a
n
 
I
 
i
m
p
o
r
t
 
p
r
o
p
e
r
t
i
e
s
 
f
r
o
m
 
a
n
o
t
h
e
r
 
s
y
s
t
e
m
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
I
M
P
O
R
T
P
R
O
P
E
R
T
I
E
S
'
,
 
"
T
h
e
r
e
 
a
r
e
 
a
 
n
u
m
b
e
r
 
o
f
 
w
a
y
s
 
y
o
u
 
c
a
n
 
i
m
p
o
r
t
 
p
r
o
p
e
r
t
i
e
s
.
 
T
h
e
 
P
r
o
p
e
r
t
y
 
I
m
p
o
r
t
 
p
l
u
g
i
n
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
i
m
p
o
r
t
 
p
r
o
p
e
r
t
i
e
s
 
v
i
a
 
C
S
V
.
 
T
h
i
s
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
i
m
p
o
r
t
 
m
u
l
t
i
p
l
e
 
p
r
o
p
e
r
t
i
e
s
 
a
t
 
o
n
c
e
,
 
b
u
t
 
i
s
 
a
n
 
a
d
m
i
n
i
s
t
r
a
t
o
r
 
o
n
l
y
 
f
e
a
t
u
r
e
.
 
I
f
 
t
h
e
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
 
h
a
s
 
a
 
B
e
d
s
2
4
 
a
c
c
o
u
n
t
 
t
h
e
n
 
t
h
e
y
 
c
a
n
 
i
m
p
o
r
t
 
a
n
y
 
e
x
i
s
t
i
n
g
 
p
r
o
p
e
r
t
i
e
s
 
f
r
o
m
 
t
h
e
i
r
 
a
c
c
o
u
n
t
 
t
h
e
r
e
 
o
n
c
e
 
t
h
e
y
'
v
e
 
l
i
n
k
e
d
 
A
P
I
 
k
e
y
s
.
 
A
n
o
t
h
e
r
 
w
a
y
 
i
s
 
t
o
 
u
s
e
 
t
h
e
 
A
P
I
,
 
t
h
e
r
e
 
i
s
 
a
 
f
e
a
t
u
r
e
 
t
o
 
a
d
d
 
a
n
d
 
r
e
m
o
v
e
 
p
r
o
p
e
r
t
i
e
s
 
h
o
w
e
v
e
r
 
t
h
i
s
 
w
o
u
l
d
 
r
e
q
u
i
r
e
 
y
o
u
 
t
o
 
b
e
 
a
 
d
e
v
e
l
o
p
e
r
 
f
a
m
i
l
i
a
r
 
w
i
t
h
 
u
s
i
n
g
 
R
E
S
T
 
A
P
I
s
 
t
o
 
u
s
e
 
t
h
i
s
 
f
u
n
c
t
i
o
n
a
l
i
t
y
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
I
M
P
O
R
T
B
O
O
K
I
N
G
S
'
,
 
'
C
a
n
 
I
 
i
m
p
o
r
t
 
b
o
o
k
i
n
g
s
 
f
r
o
m
 
a
n
o
t
h
e
r
 
s
y
s
t
e
m
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
I
M
P
O
R
T
B
O
O
K
I
N
G
S
'
,
 
"
B
o
o
k
i
n
g
s
 
c
a
n
 
b
e
 
i
m
p
o
r
t
e
d
 
i
n
t
o
 
a
 
p
r
o
p
e
r
t
y
 
b
y
 
a
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
 
t
h
r
o
u
g
h
 
t
h
e
 
i
C
a
l
 
p
l
u
g
i
n
,
 
w
h
i
c
h
 
o
f
f
e
r
s
 
a
 
f
e
a
t
u
r
e
 
t
o
 
i
m
p
o
r
t
 
b
o
o
k
i
n
g
s
 
i
n
 
t
h
e
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
'
s
 
m
e
n
u
.
 
A
l
s
o
,
 
i
f
 
a
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
 
h
a
s
 
a
 
B
e
d
s
2
4
 
a
c
c
o
u
n
t
 
a
n
d
 
t
h
e
i
r
 
p
r
o
p
e
r
t
y
 
h
a
s
 
b
e
e
n
 
l
i
n
k
e
d
 
w
i
t
h
 
B
e
d
s
2
4
,
 
t
h
e
n
 
t
h
e
y
 
c
a
n
 
p
e
r
f
o
r
m
 
a
 
R
e
s
e
n
d
 
N
o
t
i
f
y
 
a
c
t
i
o
n
 
i
n
 
B
e
d
s
2
4
.
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
E
M
A
I
L
T
E
M
P
L
A
T
E
S
'
,
 
'
C
a
n
 
I
 
e
d
i
t
 
e
m
a
i
l
 
t
e
m
p
l
a
t
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
E
M
A
I
L
T
E
M
P
L
A
T
E
S
'
,
 
'
P
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
c
a
n
 
e
d
i
t
 
e
m
a
i
l
 
t
e
m
p
l
a
t
e
s
 
t
h
r
o
u
g
h
 
t
h
e
i
r
 
t
o
o
l
b
a
r
 
u
n
d
e
r
 
S
e
t
t
i
n
g
s
 
>
 
E
m
a
i
l
 
T
e
m
p
l
a
t
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
A
Y
M
E
N
T
S
'
,
 
'
P
a
y
m
e
n
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
A
K
E
P
A
Y
M
E
N
T
S
'
,
 
'
H
o
w
 
d
o
 
I
 
a
l
l
o
w
 
p
r
o
p
e
r
t
i
e
s
 
t
o
 
t
a
k
e
 
p
a
y
m
e
n
t
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
A
K
E
P
A
Y
M
E
N
T
S
'
,
 
'
Y
o
u
 
w
i
l
l
 
n
e
e
d
 
t
o
 
i
n
s
t
a
l
l
 
a
 
p
a
y
m
e
n
t
 
g
a
t
e
w
a
y
.
 
J
o
m
r
e
s
 
h
a
s
 
t
w
o
 
p
a
y
m
e
n
t
 
g
a
t
e
w
a
y
s
,
 
w
h
i
c
h
 
c
o
n
n
e
c
t
 
t
o
 
P
a
y
p
a
l
 
o
r
 
S
t
r
i
p
e
.
 
I
t
 
a
l
s
o
 
o
f
f
e
r
s
 
a
 
c
o
u
p
l
e
 
o
f
 
O
f
f
l
i
n
e
 
g
a
t
e
w
a
y
s
,
 
a
n
d
 
y
o
u
 
c
a
n
 
p
u
r
c
h
a
s
e
 
o
t
h
e
r
 
p
a
y
m
e
n
t
 
g
a
t
e
w
a
y
s
 
f
r
o
m
 
o
u
r
 
p
a
r
t
n
e
r
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
W
H
I
C
H
G
A
T
E
W
A
Y
'
,
 
'
W
h
i
c
h
 
g
a
t
e
w
a
y
 
s
h
o
u
l
d
 
I
 
u
s
e
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
W
H
I
C
H
G
A
T
E
W
A
Y
'
,
 
"
I
f
 
y
o
u
 
w
a
n
t
 
t
o
 
t
a
k
e
 
a
 
p
e
r
c
e
n
t
a
g
e
 
o
f
 
a
 
m
a
n
a
g
e
r
'
s
 
d
e
p
o
s
i
t
 
f
o
r
 
y
o
u
r
 
o
w
n
 
c
o
s
t
s
,
 
t
h
e
n
 
u
s
e
 
t
h
e
 
S
t
r
i
p
e
 
g
a
t
e
w
a
y
.
 
I
f
 
y
o
u
 
d
o
n
'
t
,
 
a
n
d
 
i
n
s
t
e
a
d
 
i
n
t
e
n
d
 
t
o
 
u
s
e
 
t
h
e
 
S
u
b
s
c
r
i
p
t
i
o
n
 
a
n
d
/
o
r
 
c
o
m
m
i
s
s
i
o
n
 
f
u
n
c
t
i
o
n
a
l
i
t
y
,
 
t
h
e
n
 
y
o
u
'
l
l
 
n
e
e
d
 
t
o
 
u
s
e
 
t
h
e
 
P
a
y
p
a
l
 
g
a
t
e
w
a
y
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
P
A
Y
M
E
N
T
A
C
C
O
U
N
T
S
'
,
 
'
W
h
e
n
 
a
 
g
u
e
s
t
 
m
a
k
e
s
 
a
 
p
a
y
m
e
n
t
 
f
o
r
 
a
 
b
o
o
k
i
n
g
,
 
w
h
o
 
g
e
t
s
 
t
h
e
 
m
o
n
e
y
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
P
A
Y
M
E
N
T
A
C
C
O
U
N
T
S
'
,
 
"
T
h
a
t
 
d
e
p
e
n
d
s
 
o
n
 
h
o
w
 
y
o
u
 
h
a
v
e
 
s
e
t
 
u
p
 
p
a
y
m
e
n
t
 
g
a
t
e
w
a
y
s
 
o
n
 
y
o
u
r
 
s
i
t
e
.
 
I
f
 
y
o
u
'
r
e
 
u
s
i
n
g
 
P
a
y
p
a
l
,
 
y
o
u
 
c
a
n
 
c
o
n
f
i
g
u
r
e
 
i
t
 
t
o
 
o
v
e
r
r
i
d
e
 
a
l
l
 
f
r
o
n
t
e
n
d
 
s
e
t
t
i
n
g
s
,
 
e
s
s
e
n
t
i
a
l
l
y
 
m
a
k
i
n
g
 
y
o
u
r
 
a
c
c
o
u
n
t
 
t
h
e
 
o
n
l
y
 
a
c
c
o
u
n
t
 
t
h
a
t
 
r
e
c
e
i
v
e
s
 
p
a
y
m
e
n
t
s
.
 
I
f
 
y
o
u
 
d
o
n
'
t
 
c
h
o
o
s
e
 
t
o
 
d
o
 
t
h
a
t
,
 
t
h
e
n
 
e
a
c
h
 
p
r
o
p
e
r
t
y
 
w
i
l
l
 
n
e
e
d
 
t
o
 
s
e
t
u
p
 
t
h
e
i
r
 
p
a
y
m
e
n
t
 
g
a
t
e
w
a
y
 
a
c
c
o
u
n
t
 
i
n
 
S
e
t
t
i
n
g
s
 
>
 
G
a
t
e
w
a
y
s
 
t
a
b
.
 
I
f
 
y
o
u
'
r
e
 
u
s
i
n
g
 
S
t
r
i
p
e
,
 
t
h
e
n
 
o
n
c
e
 
t
h
e
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
 
h
a
s
 
c
o
n
n
e
c
t
e
d
 
t
h
e
i
r
 
a
c
c
o
u
n
t
 
t
o
 
y
o
u
r
s
 
(
 
s
e
e
 
t
h
e
 
S
t
r
i
p
e
 
d
o
c
u
m
e
n
t
a
t
i
o
n
 
i
n
 
t
h
e
 
m
a
n
u
a
l
 
f
o
r
 
m
o
r
e
 
i
n
f
o
r
m
a
t
i
o
n
 
)
 
t
h
e
n
 
t
h
e
y
'
l
l
 
r
e
c
e
i
v
e
 
a
l
l
 
f
u
n
d
s
,
 
m
i
n
u
s
 
a
 
c
o
m
m
i
s
s
i
o
n
 
f
e
e
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
o
n
f
i
g
u
r
e
 
i
f
 
y
o
u
 
c
h
o
o
s
e
 
t
o
 
d
o
 
s
o
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
T
R
O
U
B
L
E
S
H
O
O
T
I
N
G
'
,
 
'
T
r
o
u
b
l
e
s
h
o
o
t
i
n
g
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
R
O
U
B
L
E
S
H
O
O
T
I
N
G
_
E
M
A
I
L
'
,
 
"
B
o
o
k
i
n
g
 
e
m
a
i
l
s
 
a
r
e
n
'
t
 
b
e
i
n
g
 
s
e
n
t
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
R
O
U
B
L
E
S
H
O
O
T
I
N
G
_
E
M
A
I
L
'
,
 
"
I
f
 
y
o
u
'
r
e
 
h
a
v
i
n
g
 
p
r
o
b
l
e
m
s
 
s
e
n
d
i
n
g
 
e
m
a
i
l
s
 
f
r
o
m
 
t
h
e
 
s
y
s
t
e
m
,
 
p
l
e
a
s
e
 
c
h
e
c
k
 
y
o
u
r
 
h
o
s
t
 
C
M
S
'
s
 
e
m
a
i
l
 
s
e
t
t
i
n
g
s
.
 
J
o
m
r
e
s
 
u
s
e
s
 
t
h
e
 
W
o
r
d
p
r
e
s
s
 
o
r
 
J
o
o
m
l
a
 
s
e
t
t
i
n
g
s
 
f
o
r
 
s
e
n
d
i
n
g
 
e
m
a
i
l
s
.
 
I
f
 
t
h
e
y
'
r
e
 
w
r
o
n
g
,
 
J
o
m
r
e
s
 
w
i
l
l
 
n
o
t
 
b
e
 
a
b
l
e
 
t
o
 
s
e
n
d
 
e
m
a
i
l
s
 
e
i
t
h
e
r
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
R
O
U
B
L
E
S
H
O
O
T
I
N
G
_
N
O
G
A
T
E
W
A
Y
'
,
 
"
Y
o
u
 
c
a
n
'
t
 
s
e
e
 
t
h
e
 
p
a
y
m
e
n
t
 
g
a
t
e
w
a
y
 
a
f
t
e
r
 
m
a
k
i
n
g
 
a
 
b
o
o
k
i
n
g
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
R
O
U
B
L
E
S
H
O
O
T
I
N
G
_
N
O
G
A
T
E
W
A
Y
'
,
 
"
I
f
 
y
o
u
 
a
r
e
 
l
o
g
g
e
d
 
i
n
 
a
s
 
a
 
P
r
o
p
e
r
t
y
 
M
a
n
a
g
e
r
,
 
y
o
u
 
w
i
l
l
 
n
o
t
 
s
e
e
 
t
h
e
 
p
a
y
m
e
n
t
 
g
a
t
e
w
a
y
,
 
b
e
c
a
u
s
e
 
y
o
u
 
d
o
n
'
t
 
p
a
y
 
y
o
u
r
s
e
l
f
,
 
s
i
l
l
y
.
 
O
n
l
y
 
n
o
n
-
m
a
n
a
g
e
r
 
u
s
e
r
s
 
w
i
l
l
 
s
e
e
 
t
h
e
 
g
a
t
e
w
a
y
 
w
h
e
n
 
m
a
k
i
n
g
 
b
o
o
k
i
n
g
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
'
,
 
'
J
o
m
r
e
s
 
L
i
c
e
n
s
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
_
F
O
R
C
E
D
T
O
S
U
B
S
C
R
I
B
E
'
,
 
'
A
f
t
e
r
 
b
u
y
i
n
g
 
X
 
l
i
c
e
n
s
e
,
 
a
m
 
I
 
f
o
r
c
e
d
 
t
o
 
p
u
r
c
h
a
s
e
 
r
e
n
e
w
a
l
s
 
o
n
c
e
 
t
h
e
 
l
i
c
e
n
s
e
 
h
a
s
 
e
x
p
i
r
e
d
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
_
F
O
R
C
E
D
T
O
S
U
B
S
C
R
I
B
E
'
,
 
"
N
o
,
 
i
f
 
y
o
u
'
v
e
 
p
u
r
c
h
a
s
e
d
 
a
 
S
t
a
r
t
e
r
,
 
B
u
s
i
n
e
s
s
 
o
r
 
E
n
t
e
r
p
r
i
s
e
 
l
i
c
e
n
s
e
,
 
t
h
e
n
 
y
o
u
 
c
a
n
 
c
o
n
t
i
n
u
e
 
u
s
i
n
g
 
t
h
e
 
s
o
f
t
w
a
r
e
 
i
n
d
e
f
i
n
a
t
e
l
y
,
 
i
t
 
w
i
l
l
 
n
o
t
 
b
e
 
m
a
g
i
c
a
l
l
y
 
c
r
i
p
p
e
d
.
 
T
h
e
 
e
x
c
e
p
t
i
o
n
 
t
o
 
t
h
i
s
 
r
u
l
e
 
i
s
 
i
f
 
y
o
u
 
p
u
r
c
h
a
s
e
 
a
 
s
u
b
s
c
r
i
p
t
i
o
n
.
 
O
n
c
e
 
a
 
s
u
b
s
c
r
i
p
t
i
o
n
 
h
a
s
 
b
e
e
n
 
c
a
n
c
e
l
l
e
d
 
y
o
u
 
w
i
l
l
 
n
o
 
l
o
n
g
e
r
 
b
e
 
a
b
l
e
 
t
o
 
u
s
e
 
t
h
e
 
p
l
u
g
i
n
s
 
a
n
d
 
y
o
u
 
w
i
l
l
 
n
e
e
d
 
t
o
 
u
n
i
n
s
t
a
l
l
 
t
h
e
m
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
_
E
X
P
I
R
E
D
'
,
 
'
M
y
 
l
i
c
e
n
s
e
 
h
a
s
 
e
x
p
i
r
e
d
,
 
c
a
n
 
I
 
u
p
g
r
a
d
e
 
J
o
m
r
e
s
 
a
n
y
w
a
y
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
_
E
X
P
I
R
E
D
'
,
 
"
W
h
i
l
e
 
y
o
u
 
p
h
y
s
i
c
a
l
l
y
 
c
a
n
,
 
i
t
'
s
 
n
o
t
 
r
e
c
o
m
m
e
n
d
e
d
 
t
h
a
t
 
y
o
u
 
d
o
.
 
O
n
c
e
 
a
 
l
i
c
e
n
s
e
 
h
a
s
 
e
x
p
i
r
e
d
 
y
o
u
 
w
i
l
l
 
n
o
 
l
o
n
g
e
r
 
b
e
 
a
b
l
e
 
t
o
 
b
e
n
e
f
i
t
 
f
r
o
m
 
s
u
p
p
o
r
t
 
o
r
 
d
o
w
n
l
o
a
d
 
u
p
d
a
t
e
s
 
t
o
 
p
l
u
g
i
n
s
 
f
o
r
 
y
o
u
r
 
J
o
m
r
e
s
 
i
n
s
t
a
l
l
a
t
i
o
n
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
s
h
o
u
l
d
 
<
i
>
n
o
t
<
/
i
>
 
u
p
g
r
a
d
e
 
y
o
u
r
 
J
o
m
r
e
s
 
i
n
s
t
a
l
l
a
t
i
o
n
 
a
f
t
e
r
 
t
h
e
 
l
i
c
e
n
s
e
 
h
a
s
 
e
x
p
i
r
e
d
.
 
T
h
i
s
 
i
s
 
b
e
c
a
u
s
e
 
p
l
u
g
i
n
s
 
r
e
g
u
l
a
r
l
y
 
n
e
e
d
 
t
o
 
b
e
 
u
p
d
a
t
e
d
 
t
o
 
w
o
r
k
 
w
i
t
h
 
c
u
r
r
e
n
t
 
v
e
r
s
i
o
n
s
 
o
f
 
t
h
e
 
s
y
s
t
e
m
,
 
s
o
 
o
f
t
e
n
 
y
o
u
r
 
o
l
d
e
r
 
p
l
u
g
i
n
s
 
w
i
l
l
 
n
o
t
 
w
o
r
k
 
o
n
 
a
 
n
e
w
e
r
 
v
e
r
s
i
o
n
 
o
f
 
t
h
e
 
s
y
s
t
e
m
.
 
I
f
 
y
o
u
 
s
t
i
l
l
 
w
a
n
t
 
t
o
 
u
p
g
r
a
d
e
 
t
o
 
t
a
k
e
 
a
d
v
a
n
t
a
g
e
 
o
f
 
n
e
w
 
f
u
n
c
t
i
o
n
a
l
i
t
y
,
 
y
o
u
 
s
h
o
u
l
d
 
p
u
r
c
h
a
s
e
 
a
 
R
e
n
e
w
a
l
 
l
i
c
e
n
s
e
,
 
w
h
i
c
h
 
i
s
 
e
f
f
e
c
t
i
v
e
l
y
 
a
 
n
o
r
m
a
l
 
l
i
c
e
n
s
e
 
w
i
t
h
 
a
 
5
0
%
 
d
i
s
c
o
u
n
t
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
_
S
O
F
T
W
A
R
E
L
I
C
E
N
S
E
'
,
 
'
W
h
a
t
 
s
o
f
t
w
a
r
e
 
l
i
c
e
n
s
e
 
i
s
 
J
o
m
r
e
s
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
_
S
O
F
T
W
A
R
E
L
I
C
E
N
S
E
'
,
 
"
J
o
m
r
e
s
 
i
s
 
l
i
c
e
n
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
t
h
e
 
M
I
T
 
a
n
d
 
G
P
L
 
l
i
c
e
n
s
e
s
.
 
P
l
u
g
i
n
s
 
d
o
w
n
l
o
a
d
e
d
 
b
y
 
S
t
a
r
t
e
r
,
 
B
u
s
i
n
e
s
s
 
a
n
d
 
E
n
t
e
r
p
r
i
s
e
 
l
i
c
e
n
s
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
t
h
e
 
s
a
m
e
 
l
i
c
e
n
s
e
,
 
a
n
d
 
a
r
e
 
c
o
m
p
l
e
t
e
l
y
 
f
r
e
e
 
a
n
d
 
o
p
e
n
 
s
o
u
r
c
e
.
 
P
l
u
g
i
n
s
 
d
o
w
n
l
o
a
d
e
d
 
f
o
r
 
t
r
i
a
l
 
a
n
d
 
s
u
b
s
c
r
i
p
t
i
o
n
 
l
i
c
e
n
s
e
s
 
a
r
e
 
n
o
t
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
t
h
e
 
G
P
L
 
o
r
 
M
I
T
 
l
i
c
e
n
s
e
s
 
a
n
d
 
a
r
e
 
I
o
n
c
u
b
e
 
e
n
c
o
d
e
d
.
 
T
h
i
s
 
a
p
p
r
o
a
c
h
 
a
l
l
o
w
s
 
u
s
 
t
o
 
o
f
f
e
r
 
y
o
u
 
a
 
v
a
r
i
e
t
y
 
o
f
 
d
i
f
f
e
r
e
n
t
 
l
i
c
e
n
s
e
s
 
t
o
 
s
u
i
t
 
e
v
e
r
y
b
o
d
y
'
s
 
p
o
c
k
e
t
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
C
A
T
E
G
O
R
Y
_
P
R
O
P
E
R
T
Y
'
,
 
'
P
r
o
p
e
r
t
i
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
C
R
E
A
T
P
R
O
P
E
R
T
Y
'
,
 
'
H
o
w
 
d
o
 
I
 
c
r
e
a
t
e
 
a
 
p
r
o
p
e
r
t
y
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
C
R
E
A
T
P
R
O
P
E
R
T
Y
'
,
 
'
C
l
i
c
k
 
o
n
 
P
r
o
p
e
r
t
i
e
s
 
>
 
N
e
w
 
P
r
o
p
e
r
t
y
 
t
o
 
a
d
d
 
a
 
n
e
w
 
p
r
o
p
e
r
t
y
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
P
R
E
V
I
E
W
'
,
 
'
H
o
w
 
c
a
n
 
I
 
s
e
e
 
w
h
a
t
 
m
y
 
p
r
o
p
e
r
t
y
 
l
o
o
k
s
 
l
i
k
e
 
t
o
 
g
u
e
s
t
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
P
R
E
V
I
E
W
'
,
 
'
C
l
i
c
k
 
o
n
 
P
r
o
p
e
r
t
i
e
s
 
>
 
P
r
e
v
i
e
w
 
t
o
 
s
e
e
 
h
o
w
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
l
o
o
k
s
 
t
o
 
g
u
e
s
t
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
A
D
D
R
O
O
M
S
_
M
R
P
'
,
 
'
H
o
w
 
d
o
 
I
 
a
d
d
 
r
o
o
m
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
A
D
D
R
O
O
M
S
_
M
R
P
'
,
 
"
H
o
w
 
y
o
u
 
a
d
d
 
r
o
o
m
s
 
d
e
p
e
n
d
s
 
o
n
 
y
o
u
r
 
T
a
r
i
f
f
 
E
d
i
t
i
n
g
 
m
o
d
e
.
 
I
n
 
t
h
e
 
N
o
r
m
a
l
 
t
a
r
i
f
f
 
e
d
i
t
i
n
g
 
m
o
d
e
,
 
y
o
u
 
d
o
n
'
t
 
n
e
e
d
 
t
o
 
a
d
d
 
r
o
o
m
s
,
 
a
s
 
t
h
e
y
'
r
e
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
a
d
d
e
d
 
w
h
e
n
 
y
o
u
 
c
o
n
f
i
g
u
r
e
 
y
o
u
r
 
p
r
i
c
e
s
.
 
I
f
 
y
o
u
 
a
r
e
 
u
s
i
n
g
 
M
i
c
r
o
m
a
n
a
g
e
 
o
r
 
A
d
v
a
n
c
e
d
 
t
a
r
i
f
f
 
e
d
i
t
i
n
g
 
m
o
d
e
,
 
t
h
e
n
 
i
n
 
S
e
t
t
i
n
g
s
 
>
 
R
o
o
m
s
 
y
o
u
 
c
a
n
 
a
d
d
,
 
e
d
i
t
 
a
n
d
 
d
e
l
e
t
e
 
r
o
o
m
s
.
 
Y
o
u
 
w
i
l
l
 
a
l
s
o
 
b
e
 
a
b
l
e
 
t
o
 
c
r
e
a
t
e
 
r
o
o
m
 
f
e
a
t
u
r
e
s
,
 
a
n
d
 
a
s
s
i
g
n
 
t
h
e
s
e
 
f
e
a
t
u
r
e
s
 
t
o
 
t
h
o
s
e
 
r
o
o
m
s
.
 
A
d
d
i
t
i
o
n
a
l
l
y
,
 
y
o
u
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
 
i
n
d
i
v
i
d
u
a
l
 
r
o
o
m
s
 
u
s
i
n
g
 
t
h
e
 
M
e
d
i
a
 
C
e
n
t
r
e
.
 
W
h
e
n
 
 
y
o
u
 
c
r
e
a
t
e
 
r
o
o
m
s
,
 
y
o
u
 
s
h
o
u
l
d
 
t
r
y
 
t
o
 
e
n
s
u
r
e
 
t
h
a
t
 
t
h
e
y
 
r
e
f
l
e
c
t
 
y
o
u
r
 
r
e
a
l
-
w
o
r
l
d
 
r
o
o
m
s
 
i
n
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
a
s
 
t
h
a
t
 
w
i
l
l
 
m
a
k
e
 
t
h
e
m
 
e
a
s
i
e
r
 
t
o
 
m
a
n
a
g
e
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
A
D
D
P
R
I
C
E
S
'
,
 
'
H
o
w
 
d
o
 
I
 
s
e
t
 
r
o
o
m
 
p
r
i
c
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
A
D
D
P
R
I
C
E
S
'
,
 
"
T
h
i
s
 
d
e
p
e
n
d
s
 
o
n
 
y
o
u
r
 
t
a
r
i
f
f
 
e
d
i
t
i
n
g
 
m
o
d
e
.
 
I
f
 
y
o
u
 
a
r
e
 
u
s
i
n
g
 
t
h
e
 
N
o
r
m
a
l
 
T
a
r
i
f
f
 
e
d
i
t
i
n
g
 
m
o
d
e
 
(
 
P
r
o
p
e
r
t
y
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
>
 
T
a
r
i
f
f
 
E
d
i
t
i
n
g
 
M
o
d
e
s
 
t
a
b
)
 
t
h
e
n
 
y
o
u
 
c
a
n
 
c
o
n
f
i
g
u
r
e
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
r
o
o
m
s
 
y
o
u
 
h
a
v
e
,
 
t
h
e
 
p
r
i
c
e
,
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
p
e
o
p
l
e
 
e
a
c
h
 
r
o
o
m
 
c
a
n
 
a
c
c
o
m
m
o
d
a
t
e
 
a
n
d
 
t
h
e
 
t
o
t
a
l
 
n
u
m
b
e
r
 
o
f
 
p
e
o
p
l
e
 
y
o
u
 
w
a
n
t
 
i
n
 
e
a
c
h
 
b
o
o
k
i
n
g
.
 
T
h
i
s
 
m
o
d
e
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
s
e
t
 
r
o
o
m
 
p
r
i
c
e
s
 
f
o
r
 
t
h
e
 
n
e
x
t
 
1
0
 
y
e
a
r
s
.
 
<
b
r
/
>
I
f
 
y
o
u
 
a
r
e
 
u
s
i
n
g
 
t
h
e
 
A
d
v
a
n
c
e
d
 
o
r
 
M
i
c
r
o
m
a
n
a
g
e
 
t
a
r
i
f
f
 
e
d
i
t
i
n
g
 
m
o
d
e
s
,
 
t
h
e
n
 
y
o
u
 
a
r
e
 
a
b
l
e
 
t
o
 
s
e
t
 
r
o
o
m
 
p
r
i
c
e
s
 
f
o
r
 
e
v
e
r
y
 
d
a
y
 
f
o
r
 
y
e
a
r
s
 
t
o
 
c
o
m
e
.
 
Y
o
u
 
c
a
n
 
a
l
s
o
 
h
a
v
e
 
m
u
l
t
i
p
l
e
 
t
a
r
i
f
f
s
 
f
o
r
 
t
h
e
 
s
a
m
e
 
r
o
o
m
 
t
y
p
e
,
 
f
o
r
 
e
x
a
m
p
l
e
 
y
o
u
 
c
a
n
 
h
a
v
e
 
o
n
e
 
t
a
r
i
f
f
 
f
o
r
 
B
e
d
&
B
r
e
a
k
f
a
s
t
 
a
n
d
 
a
n
o
t
h
e
r
 
f
o
r
 
B
e
d
,
 
B
r
e
a
k
f
a
s
t
 
&
 
E
v
e
n
i
n
g
 
m
e
a
l
.
 
U
n
l
e
s
s
 
y
o
u
 
h
a
v
e
 
a
 
s
p
e
c
i
f
i
c
 
n
e
e
d
,
 
w
e
 
r
e
c
o
m
m
e
n
d
 
t
h
a
t
 
y
o
u
 
u
s
e
 
M
i
c
r
o
m
a
n
a
g
e
 
a
l
l
 
t
h
e
 
t
i
m
e
,
 
A
d
v
a
n
c
e
d
 
w
i
l
l
 
w
o
r
k
 
i
n
 
t
h
e
 
s
a
m
e
 
w
a
y
 
b
u
t
 
y
o
u
 
n
e
e
d
 
t
o
 
b
e
 
c
a
r
e
f
u
l
 
t
o
 
e
n
s
u
r
e
 
t
h
a
t
 
y
o
u
r
 
d
i
f
f
e
r
e
n
t
 
t
a
r
i
f
f
'
s
 
s
t
a
r
t
 
a
n
d
 
e
n
d
 
d
a
t
e
s
 
a
r
e
 
c
o
n
s
e
c
u
t
i
v
e
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
E
X
T
R
A
S
'
,
 
'
H
o
w
 
d
o
 
I
 
c
r
e
a
t
e
 
o
p
t
i
o
n
a
l
 
e
x
t
r
a
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
E
X
T
R
A
S
'
,
 
"
E
x
t
r
a
s
 
c
a
n
 
b
e
 
a
d
d
e
d
 
t
o
 
b
o
o
k
i
n
g
s
 
a
n
d
 
a
r
e
 
c
o
n
f
i
g
u
r
e
d
 
i
n
 
S
e
t
t
i
n
g
s
 
>
 
E
x
t
r
a
s
.
 
T
h
e
s
e
 
c
a
n
 
b
e
 
e
i
t
h
e
r
 
o
p
t
i
o
n
a
l
 
o
r
 
'
f
o
r
c
e
d
'
,
 
i
n
 
o
t
h
e
r
 
w
o
r
d
s
 
t
h
e
 
g
u
e
s
t
 
c
a
n
n
o
t
 
d
e
-
s
e
l
e
c
t
 
t
h
e
m
 
i
n
 
t
h
e
 
b
o
o
k
i
n
g
.
 
Y
o
u
 
c
a
n
 
o
f
f
e
r
 
d
i
f
f
e
r
e
n
t
 
m
e
t
h
o
d
s
 
o
f
 
c
h
a
r
g
i
n
g
 
f
o
r
 
o
p
t
i
o
n
a
l
 
e
x
t
r
a
s
,
 
a
n
d
 
w
h
e
t
h
e
r
 
o
r
 
n
o
t
 
t
h
e
y
'
r
e
 
s
h
o
w
n
 
i
n
 
y
o
u
r
 
P
r
o
p
e
r
t
y
 
D
e
t
a
i
l
s
 
p
a
g
e
.
 
B
e
c
a
u
s
e
 
e
x
t
r
a
s
 
c
a
n
 
b
e
 
m
a
d
e
 
t
o
 
o
n
l
y
 
s
h
o
w
 
i
f
 
a
 
b
o
o
k
i
n
g
 
i
s
 
w
i
t
h
i
n
 
c
e
r
t
a
i
n
 
d
a
t
e
s
 
(
 
f
o
r
 
e
x
a
m
p
l
e
,
 
f
o
r
 
s
e
a
s
o
n
a
l
 
f
r
u
i
t
s
 
)
,
 
y
o
u
 
s
h
o
u
l
d
 
m
a
k
e
 
s
u
r
e
 
t
h
a
t
 
y
o
u
 
h
a
v
e
 
s
e
t
 
t
h
e
 
V
a
l
i
d
 
f
r
o
m
 
a
n
d
 
T
o
 
d
a
t
e
s
.
 
O
n
c
e
 
y
o
u
 
h
a
v
e
 
c
r
e
a
t
e
d
 
o
p
t
i
o
n
a
l
 
e
x
t
a
s
,
 
y
o
u
 
c
a
n
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
 
t
h
e
m
 
t
h
r
o
u
g
h
 
t
h
e
 
M
e
d
i
a
 
M
a
n
a
g
e
r
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
P
A
Y
M
E
N
T
S
'
,
 
'
H
o
w
 
c
a
n
 
I
 
t
a
k
e
 
p
a
y
m
e
n
t
s
 
o
n
l
i
n
e
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
P
A
Y
M
E
N
T
S
'
,
 
"
T
o
 
t
a
k
e
 
p
a
y
m
e
n
t
s
 
o
n
l
i
n
e
,
 
y
o
u
 
n
e
e
d
 
t
o
 
h
a
v
e
 
a
n
 
a
c
c
o
u
n
t
 
w
i
t
h
 
a
n
 
o
n
l
i
n
e
 
p
a
y
m
e
n
t
 
p
r
o
v
i
d
e
r
,
 
c
a
l
l
e
d
 
a
 
G
a
t
e
w
a
y
.
 
T
o
 
s
e
e
 
t
h
e
 
a
v
a
i
l
a
b
l
e
 
g
a
t
e
w
a
y
s
,
 
g
o
 
t
o
 
P
r
o
p
e
r
t
y
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
>
 
G
a
t
e
w
a
y
s
 
t
a
b
.
 
C
l
i
c
k
 
o
n
 
a
 
g
a
t
e
w
a
y
'
s
 
n
a
m
e
 
t
o
 
b
e
 
t
a
k
e
n
 
t
o
 
i
t
'
s
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
p
a
g
e
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
D
I
S
C
O
U
N
T
S
'
,
 
'
C
a
n
 
I
 
g
i
v
e
 
d
i
s
c
o
u
n
t
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
D
I
S
C
O
U
N
T
S
'
,
 
"
D
i
s
c
o
u
n
t
s
 
c
a
n
 
b
e
 
g
i
v
e
n
,
 
t
h
e
r
e
 
a
r
e
 
a
 
n
u
m
b
e
r
 
o
f
 
d
i
f
f
e
r
e
n
t
 
w
a
y
s
 
t
h
i
s
 
c
a
n
 
b
e
 
d
o
n
e
.
 
I
f
 
y
o
u
 
a
r
e
 
m
a
k
i
n
g
 
a
 
b
o
o
k
i
n
g
 
o
n
 
b
e
h
a
l
f
 
o
f
 
a
 
c
u
s
t
o
m
e
r
,
 
t
h
e
n
 
y
o
u
 
c
a
n
 
s
e
t
 
y
o
u
r
 
o
w
n
 
D
e
p
o
s
i
t
 
a
n
d
 
B
o
o
k
i
n
g
 
t
o
t
a
l
s
 
i
n
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m
,
 
u
s
i
n
g
 
t
h
e
 
\
"
O
v
e
r
r
i
d
e
 
A
c
c
o
m
m
o
d
a
t
i
o
n
 
T
o
t
a
l
\
"
 
a
n
d
 
\
"
O
v
e
r
r
i
d
e
 
D
e
p
o
s
i
t
\
"
 
f
i
e
l
d
s
 
(
 
g
u
e
s
t
s
 
c
a
n
'
t
 
u
s
e
 
t
h
i
s
 
f
e
a
t
u
r
e
 
)
.
 
A
n
o
t
h
e
r
 
w
a
y
 
t
o
 
g
i
v
e
 
a
 
g
u
e
s
t
 
a
 
d
i
s
c
o
u
n
t
 
i
s
 
t
o
 
c
r
e
a
t
e
 
d
i
s
c
o
u
n
t
 
c
o
u
p
o
n
s
,
 
w
h
i
c
h
 
c
a
n
 
b
e
 
c
o
n
f
i
g
u
r
e
d
 
s
o
 
t
h
a
t
 
t
h
e
y
 
c
a
n
 
o
n
l
y
 
b
e
 
u
s
e
d
 
b
e
t
w
e
e
n
 
c
e
r
t
a
i
n
 
d
a
t
e
s
 
(
 
V
a
l
i
d
 
f
r
o
m
/
t
o
 
)
 
o
r
 
a
p
p
l
i
e
d
 
o
n
l
y
 
w
h
e
n
 
t
h
e
 
b
o
o
k
i
n
g
 
f
a
l
l
s
 
b
e
t
w
e
e
n
 
c
e
r
t
a
i
n
 
d
a
t
e
s
 
(
 
B
o
o
k
i
n
g
 
v
a
l
i
d
 
f
r
o
m
/
t
o
 
)
.
 
T
h
i
s
 
d
i
s
c
o
u
n
t
 
c
o
u
p
o
n
s
 
c
a
n
 
b
e
 
a
s
s
i
g
n
e
d
 
t
o
 
j
u
s
t
 
o
n
e
 
g
u
e
s
t
,
 
o
r
 
i
f
 
y
o
u
 
w
a
n
t
 
y
o
u
 
c
a
n
 
p
r
i
n
t
 
o
u
t
 
t
h
e
 
c
o
u
p
o
n
s
.
 
T
h
e
 
p
r
i
n
t
o
u
t
 
i
n
c
l
u
d
e
s
 
a
 
Q
R
 
c
o
d
e
 
w
h
i
c
h
 
g
u
e
s
t
s
 
c
a
n
 
s
c
a
n
 
i
n
t
o
 
t
h
e
i
r
 
p
h
o
n
e
s
 
t
h
a
t
 
t
a
k
e
s
 
t
h
e
m
 
t
o
 
y
o
u
r
 
b
o
o
k
i
n
g
 
f
o
r
m
 
w
i
t
h
 
t
h
e
 
d
i
s
c
o
u
n
t
 
c
o
d
e
 
a
l
r
e
a
d
y
 
a
p
p
l
i
e
s
.
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
C
A
T
E
G
O
R
Y
_
B
O
O
K
I
N
G
S
'
,
 
'
B
o
o
k
i
n
g
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
B
O
O
K
I
N
G
S
_
C
O
N
T
A
C
T
P
A
G
E
'
,
 
'
W
h
e
n
 
I
 
c
l
i
c
k
 
N
e
w
 
b
o
o
k
i
n
g
,
 
I
 
a
m
 
t
a
k
e
n
 
t
o
 
t
h
e
 
C
o
n
t
a
c
t
 
f
o
r
m
,
 
w
h
y
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
B
O
O
K
I
N
G
S
_
C
O
N
T
A
C
T
P
A
G
E
'
,
 
'
B
e
f
o
r
e
 
y
o
u
 
c
a
n
 
t
a
k
e
 
b
o
o
k
i
n
g
s
 
o
n
l
i
n
e
,
 
y
o
u
 
m
u
s
t
 
f
i
r
s
t
 
c
o
n
f
i
g
u
r
e
 
s
o
m
e
 
p
r
i
c
e
s
 
(
t
a
r
i
f
f
s
)
 
f
o
r
 
e
a
c
h
 
r
o
o
m
 
t
y
p
e
 
y
o
u
 
h
a
v
e
 
i
n
 
y
o
u
r
 
r
e
a
l
-
w
o
r
l
d
 
p
r
o
p
e
r
t
y
.
 
O
n
c
e
 
y
o
u
 
h
a
v
e
 
c
r
e
a
t
e
d
 
s
o
m
e
 
t
a
r
i
f
f
s
,
 
y
o
u
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
t
a
k
e
 
b
o
o
k
i
n
g
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
B
O
O
K
I
N
G
S
_
B
L
A
C
K
'
,
 
'
W
h
a
t
 
a
r
e
 
B
l
a
c
k
 
B
o
o
k
i
n
g
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
B
O
O
K
I
N
G
S
_
B
L
A
C
K
'
,
 
"
B
l
a
c
k
 
b
o
o
k
i
n
g
s
 
a
r
e
 
b
o
o
k
i
n
g
s
 
t
h
a
t
 
h
a
v
e
 
b
e
e
n
 
c
r
e
a
t
e
d
 
t
o
 
t
a
k
e
 
a
 
r
o
o
m
 
o
r
 
r
o
o
m
s
 
o
u
t
 
o
f
 
s
e
r
v
i
c
e
.
 
T
h
e
y
'
r
e
 
n
o
t
 
a
s
s
o
c
i
a
t
e
d
 
w
i
t
h
 
a
n
y
 
g
u
e
s
t
s
 
a
n
d
 
a
r
e
 
u
s
e
f
u
l
,
 
f
o
r
 
e
x
a
m
p
l
e
,
 
i
f
 
a
 
r
o
o
m
 
n
e
e
d
s
 
t
o
 
b
e
 
r
e
f
u
r
b
i
s
h
e
d
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
C
A
T
E
G
O
R
Y
_
I
M
A
G
E
S
'
,
 
'
I
m
a
g
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
M
E
D
I
A
C
E
N
T
R
E
_
I
N
T
R
O
'
,
 
'
H
o
w
 
d
o
 
I
 
u
p
l
o
a
d
 
i
m
a
g
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
M
E
D
I
A
C
E
N
T
R
E
_
I
N
T
R
O
'
,
 
"
T
o
 
u
p
l
o
a
d
 
i
m
a
g
e
s
,
 
y
o
u
 
n
e
e
d
 
t
o
 
v
i
s
i
t
 
t
h
e
 
S
e
t
t
i
n
g
s
 
>
 
M
e
d
i
a
 
C
e
n
t
r
e
 
p
a
g
e
.
 
O
n
 
t
h
i
s
 
p
a
g
e
 
y
o
u
 
w
i
l
l
 
s
e
e
 
s
e
v
e
r
a
l
 
p
a
n
e
s
.
 
A
t
 
t
h
e
 
t
o
p
 
y
o
u
 
m
i
g
h
t
 
s
e
e
 
s
o
m
e
 
n
o
t
e
s
,
 
a
n
d
 
u
n
d
e
r
n
e
a
t
h
 
t
h
e
m
 
y
o
u
'
l
l
 
s
e
e
 
a
 
d
r
o
p
d
o
w
n
.
 
T
h
i
s
 
d
r
o
p
d
o
w
n
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
s
e
l
e
c
t
 
w
h
i
c
h
 
r
e
s
o
u
r
c
e
 
y
o
u
'
r
e
 
u
p
l
o
a
d
i
n
g
 
i
m
a
g
e
s
 
f
o
r
.
 
<
b
r
/
>
 
O
n
 
t
h
e
 
r
i
g
h
t
 
i
s
 
a
 
c
o
l
u
m
n
 
w
i
t
h
 
A
d
d
 
I
m
a
g
e
s
,
 
C
l
e
a
r
 
L
i
s
t
 
a
n
d
 
U
p
l
o
a
d
 
a
l
l
.
 
C
l
i
c
k
 
A
d
d
 
I
m
a
g
e
s
 
a
n
d
 
s
e
l
e
c
t
 
s
o
m
e
 
i
m
a
g
e
s
 
f
r
o
m
 
y
o
u
r
 
d
e
s
k
t
o
p
 
o
r
 
m
o
b
i
l
e
 
d
e
v
i
c
e
.
 
W
h
e
n
 
y
o
u
'
v
e
 
d
o
n
e
 
t
h
a
t
,
 
t
h
e
 
c
o
l
u
m
n
 
w
i
l
l
 
c
h
a
n
g
e
 
t
o
 
a
 
l
i
s
t
 
o
f
 
t
h
u
m
b
n
a
i
l
s
.
 
F
r
o
m
 
h
e
r
e
 
y
o
u
 
c
a
n
 
u
p
l
o
a
d
 
o
n
e
 
o
r
 
m
o
r
e
 
i
m
a
g
e
s
 
f
o
r
 
y
o
u
r
 
r
e
s
o
u
r
c
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
M
E
D
I
A
C
E
N
T
R
E
_
M
A
I
N
'
,
 
"
W
h
a
t
 
i
s
 
t
h
e
 
'
M
a
i
n
'
 
i
m
a
g
e
?
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
M
E
D
I
A
C
E
N
T
R
E
_
M
A
I
N
'
,
 
'
T
h
e
 
M
a
i
n
 
i
m
a
g
e
 
i
s
 
t
h
e
 
o
n
e
 
t
h
a
t
 
a
p
p
e
a
r
s
 
i
n
 
s
e
a
r
c
h
 
r
e
s
u
l
t
s
 
a
n
d
 
i
n
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
h
e
a
d
e
r
 
(
 
t
h
e
 
a
r
e
a
 
a
t
 
t
h
e
 
t
o
p
 
o
f
 
p
a
g
e
s
 
t
h
a
t
 
s
h
o
w
 
s
o
m
e
t
h
i
n
g
 
a
b
o
u
t
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
)
.
 
Y
o
u
 
s
h
o
u
l
d
 
c
h
o
o
s
e
 
a
n
 
i
m
a
g
e
 
t
h
a
t
 
d
i
s
p
l
a
y
s
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
i
n
 
t
h
e
 
b
e
s
t
 
p
o
s
s
i
b
l
e
 
l
i
g
h
t
.
 
T
o
 
u
p
l
o
a
d
 
a
 
m
a
i
n
 
i
m
a
g
e
,
 
m
a
k
e
 
s
u
r
e
 
P
r
o
p
e
r
t
y
 
M
a
i
n
 
I
m
a
g
e
 
i
s
 
s
e
l
e
c
t
e
d
 
i
n
 
t
h
e
 
d
r
o
p
d
o
w
n
 
l
i
s
t
 
a
t
 
t
h
e
 
t
o
p
 
l
e
f
t
,
 
t
h
e
n
 
u
p
l
o
a
d
 
o
n
e
 
o
r
 
m
o
r
e
 
i
m
a
g
e
s
.
 
I
f
 
y
o
u
 
u
p
l
o
a
d
 
m
o
r
e
 
t
h
a
n
 
o
n
e
 
i
m
a
g
e
,
 
t
h
e
n
 
a
l
l
 
i
m
a
g
e
s
 
w
i
l
l
 
b
e
 
u
s
e
d
 
i
n
 
t
h
e
 
s
e
a
r
c
h
 
r
e
s
u
l
t
s
 
p
a
g
e
 
d
i
s
p
l
a
y
i
n
g
 
a
s
 
a
 
s
m
a
l
l
 
s
l
i
d
e
s
h
o
w
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
M
E
D
I
A
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
F
E
A
T
U
R
E
S
'
,
 
'
W
h
a
t
 
a
r
e
 
r
o
o
m
 
f
e
a
t
u
r
e
 
i
c
o
n
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
M
E
D
I
A
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
F
E
A
T
U
R
E
S
'
,
 
"
R
o
o
m
 
f
e
a
t
u
r
e
s
 
c
a
n
 
b
e
 
c
r
e
a
t
e
d
 
b
y
 
u
s
e
r
s
 
o
f
 
M
i
c
r
o
m
a
n
a
g
e
 
o
r
 
A
d
v
a
n
c
e
d
 
t
a
r
i
f
f
 
e
d
i
t
i
n
g
 
m
o
d
e
s
.
 
T
h
e
s
e
 
c
a
n
 
b
e
 
l
i
n
k
e
d
 
t
o
 
o
n
e
 
o
r
 
m
o
r
e
 
r
o
o
m
s
,
 
a
n
d
 
a
r
e
 
d
i
s
p
l
a
y
e
d
 
i
n
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m
.
 
O
n
c
e
 
y
o
u
 
h
a
v
e
 
c
r
e
a
t
e
d
 
a
 
r
o
o
m
 
f
e
a
t
u
r
e
,
 
y
o
u
 
c
a
n
 
u
p
l
o
a
d
 
a
n
 
i
m
a
g
e
 
f
o
r
 
t
h
a
t
 
f
e
a
t
u
r
e
 
b
y
 
f
i
r
s
t
 
s
e
l
e
c
t
i
n
g
 
R
o
o
m
 
F
e
a
t
u
r
e
s
 
I
c
o
n
s
 
i
n
 
t
h
e
 
d
r
o
p
d
o
w
n
 
i
n
 
t
h
e
 
M
e
d
i
a
 
C
e
n
t
r
e
,
 
t
h
e
n
 
s
e
l
e
c
t
i
n
g
 
t
h
e
 
r
o
o
m
 
f
e
a
t
u
r
e
'
s
 
n
a
m
e
 
f
r
o
m
 
t
h
e
 
d
r
o
p
d
o
w
n
 
t
h
a
t
 
w
i
l
l
 
a
p
p
e
a
r
 
u
n
d
e
r
n
e
a
t
h
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
M
E
D
I
A
C
E
N
T
R
E
_
R
O
O
M
S
'
,
 
'
H
o
w
 
d
o
 
I
 
u
p
l
o
a
d
 
r
o
o
m
 
i
m
a
g
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
M
E
D
I
A
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
F
E
A
T
U
R
E
S
'
,
 
'
R
o
o
m
s
 
c
a
n
 
b
e
 
c
r
e
a
t
e
d
 
b
y
 
u
s
e
r
s
 
o
f
 
M
i
c
r
o
m
a
n
a
g
e
 
o
r
 
A
d
v
a
n
c
e
d
 
t
a
r
i
f
f
 
e
d
i
t
i
n
g
 
m
o
d
e
s
.
 
O
n
c
e
 
o
n
e
 
o
r
 
m
o
r
e
 
r
o
o
m
s
 
h
a
v
e
 
b
e
e
n
 
c
r
e
a
t
e
d
,
 
y
o
u
 
c
a
n
 
u
p
l
o
a
d
 
m
u
l
t
i
p
l
e
 
i
m
a
g
e
s
 
f
o
r
 
e
a
c
h
 
r
o
o
m
 
t
h
r
o
u
g
h
 
t
h
e
 
M
e
d
i
a
 
C
e
n
t
r
e
 
(
s
e
l
e
c
t
 
t
h
e
 
r
o
o
m
 
n
a
m
e
/
n
u
m
b
e
r
 
a
f
t
e
r
 
s
e
l
e
c
t
i
n
g
 
R
o
o
m
 
I
m
a
g
e
s
 
i
n
 
t
h
e
 
d
r
o
p
d
o
w
n
)
.
 
T
h
e
s
e
 
i
m
a
g
e
s
 
c
a
n
 
b
e
 
s
e
e
n
 
i
n
 
a
 
s
l
i
d
e
s
h
o
w
 
b
y
 
v
i
e
w
i
n
g
 
t
h
e
 
P
r
e
v
i
e
w
 
p
a
g
e
 
a
n
d
 
s
e
l
e
c
t
i
n
g
 
t
h
e
 
O
u
r
 
R
o
o
m
s
 
t
a
b
 
t
h
e
n
 
c
l
i
c
k
i
n
g
 
o
n
 
t
h
e
 
A
v
a
i
l
a
b
i
l
i
t
y
 
l
i
n
k
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
M
E
D
I
A
C
E
N
T
R
E
_
S
L
I
D
E
S
H
O
W
'
,
 
'
H
o
w
 
d
o
 
I
 
u
p
l
o
a
d
 
s
l
i
d
e
s
h
o
w
 
i
m
a
g
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
M
E
D
I
A
C
E
N
T
R
E
_
S
L
I
D
E
S
H
O
W
'
,
 
'
S
l
i
d
e
s
h
o
w
 
i
m
a
g
e
s
 
a
r
e
 
s
e
e
n
 
i
n
 
t
h
e
 
P
r
o
p
e
r
t
y
 
D
e
t
a
i
l
s
 
(
 
P
r
e
v
i
e
w
 
)
 
p
a
g
e
,
 
n
e
x
t
 
t
o
 
t
h
e
 
B
o
o
k
 
N
o
w
 
b
u
t
t
o
n
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
M
E
D
I
A
C
E
N
T
R
E
_
E
X
T
R
A
S
'
,
 
'
H
o
w
 
d
o
 
I
 
u
p
l
o
a
d
 
E
x
t
r
a
s
 
I
m
a
g
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
M
E
D
I
A
C
E
N
T
R
E
_
E
X
T
R
A
S
'
,
 
"
S
i
m
i
l
a
r
 
t
o
 
t
h
e
 
r
o
o
m
s
 
a
n
d
 
r
o
o
m
 
f
e
a
t
u
r
e
s
,
 
y
o
u
 
n
e
e
d
 
t
o
 
c
r
e
a
t
e
 
a
n
 
E
x
t
r
a
 
f
i
r
s
t
.
 
O
n
c
e
 
t
h
a
t
'
s
 
d
o
n
e
,
 
y
o
u
 
c
a
n
 
s
e
l
e
c
t
 
E
x
t
r
a
s
 
i
n
 
t
h
e
 
t
o
p
 
d
r
o
p
d
o
w
n
.
 
W
h
e
n
 
y
o
u
'
v
e
 
d
o
n
e
 
t
h
a
t
,
 
y
o
u
 
n
e
e
d
 
t
o
 
s
e
l
e
c
t
 
t
h
e
 
n
a
m
e
 
o
f
 
t
h
e
 
E
x
t
r
a
 
f
r
o
m
 
t
h
e
 
d
r
o
p
d
o
w
n
 
l
i
s
t
 
b
e
l
o
w
.
 
W
h
e
n
 
t
h
e
 
n
a
m
e
 
i
s
 
s
e
l
e
c
t
e
d
 
y
o
u
 
c
a
n
 
u
p
l
o
a
d
 
o
n
e
 
o
r
 
m
o
r
e
 
i
m
a
g
e
s
 
f
o
r
 
t
h
a
t
 
E
x
t
r
a
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
C
U
R
R
E
N
C
I
E
S
_
S
E
T
U
P
'
,
 
'
H
o
w
 
d
o
 
I
 
s
e
t
u
p
 
c
u
r
r
e
n
c
y
 
s
y
m
b
o
l
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
C
U
R
R
E
N
C
I
E
S
_
S
E
T
U
P
'
,
 
"
Y
o
u
 
d
o
n
'
t
.
 
A
l
l
 
c
u
r
r
e
n
c
y
 
s
y
m
b
o
l
s
 
a
r
e
 
a
l
r
e
a
d
y
 
s
t
o
r
e
d
 
i
n
 
t
h
e
 
s
y
s
t
e
m
,
 
a
n
d
 
i
t
'
s
 
u
p
 
t
o
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
t
o
 
s
e
l
e
c
t
 
t
h
e
 
c
u
r
r
e
n
c
y
 
t
h
a
t
'
s
 
r
i
g
h
t
 
f
o
r
 
t
h
e
m
 
i
n
 
t
h
e
 
P
r
o
p
e
r
t
y
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
p
a
g
e
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
C
U
R
R
E
N
C
I
E
S
'
,
 
'
H
o
w
 
d
o
 
I
 
e
n
a
b
l
e
 
m
u
l
t
i
p
l
e
 
c
u
r
r
e
n
c
i
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
C
U
R
R
E
N
C
I
E
S
'
,
 
"
J
o
m
r
e
s
 
h
a
s
 
f
u
n
c
t
i
o
n
a
l
i
t
y
 
t
o
 
c
o
n
v
e
r
t
 
p
r
i
c
e
s
 
f
r
o
m
 
o
n
e
 
c
u
r
r
e
n
c
y
 
t
o
 
a
n
o
t
h
e
r
 
a
u
t
o
m
a
t
i
c
a
l
l
y
.
 
F
i
r
s
t
 
y
o
u
 
n
e
e
d
 
t
o
 
v
i
s
i
t
 
t
h
e
 
S
i
t
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
>
 
C
u
r
r
e
n
c
y
 
C
o
n
v
e
r
s
i
o
n
 
t
a
b
.
 
I
n
 
t
h
e
r
e
 
y
o
u
 
w
i
l
l
 
f
i
n
d
 
l
i
n
k
s
 
t
o
 
t
w
o
 
o
n
l
i
n
e
 
s
e
r
v
i
c
e
s
.
 
T
h
e
 
f
i
r
s
t
 
s
e
r
v
i
c
e
,
 
o
n
c
e
 
t
h
e
 
A
P
I
 
h
a
s
 
b
e
e
n
 
s
a
v
e
d
,
 
a
l
l
o
w
s
 
J
o
m
r
e
s
 
t
o
 
d
o
w
n
l
o
a
d
 
c
u
r
r
e
n
c
y
 
c
o
n
v
e
r
s
i
o
n
 
d
a
t
a
 
o
n
c
e
 
a
 
d
a
y
.
 
T
h
e
 
s
e
c
o
n
d
 
e
n
a
b
l
e
s
 
I
P
 
b
a
s
e
d
 
g
e
o
l
o
c
a
t
i
o
n
 
f
o
r
 
u
s
e
r
s
.
 
R
e
q
u
e
s
t
 
a
 
f
r
e
e
 
A
P
I
 
k
e
y
 
f
r
o
m
 
e
a
c
h
 
s
e
r
v
i
c
e
.
 
W
i
t
h
 
t
h
e
s
e
 
t
w
o
 
s
e
r
v
i
c
e
s
 
c
o
m
b
i
n
e
d
,
 
J
o
m
r
e
s
 
c
a
n
 
d
e
t
e
c
t
 
t
h
e
 
u
s
e
r
'
s
 
l
o
c
a
l
 
c
u
r
r
e
n
c
y
,
 
a
n
d
 
d
i
s
p
l
a
y
 
p
r
i
c
e
s
 
o
f
 
p
r
o
p
e
r
t
i
e
s
 
i
n
 
b
o
t
h
 
t
h
e
 
g
u
e
s
t
'
s
 
l
o
c
a
l
 
c
u
r
r
e
n
c
y
,
 
p
l
u
s
 
t
h
e
 
h
o
t
e
l
'
s
 
o
w
n
 
c
u
r
r
e
n
c
y
.
 
I
f
 
y
o
u
 
d
o
n
'
t
 
s
e
t
u
p
 
t
h
e
s
e
 
A
P
I
 
k
e
y
s
 
t
h
e
n
 
J
o
m
r
e
s
 
w
i
l
l
 
d
e
f
a
u
l
t
 
t
o
 
t
h
e
 
E
u
r
o
 
c
u
r
r
e
n
c
y
 
s
y
m
b
o
l
.
 
I
f
 
y
o
u
 
w
a
n
t
 
y
o
u
 
c
a
n
 
s
e
t
 
a
 
g
l
o
b
a
l
 
c
u
r
r
e
n
c
y
 
c
o
d
e
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
w
i
l
l
 
n
o
t
 
b
e
 
a
b
l
e
 
t
o
 
s
e
l
e
c
t
 
a
n
y
 
o
t
h
e
r
 
c
u
r
r
e
n
c
i
e
s
,
 
h
o
w
e
v
e
r
 
p
o
t
e
n
t
i
a
l
 
g
u
e
s
t
s
 
w
i
l
l
 
s
t
i
l
l
 
s
e
e
 
p
r
i
c
e
s
 
i
n
 
t
h
i
e
r
 
o
w
n
 
l
o
c
a
l
 
c
u
r
r
e
n
c
y
 
u
n
l
e
s
s
 
t
h
e
y
'
v
e
 
u
s
e
d
 
t
h
e
 
c
u
r
r
e
n
c
y
 
s
w
i
t
c
h
e
r
 
f
e
a
t
u
r
e
 
t
o
 
c
h
a
n
g
e
 
t
h
e
 
c
u
r
r
e
n
c
y
 
t
h
a
t
 
p
r
i
c
e
s
 
a
r
e
 
d
i
s
p
l
a
y
e
d
 
i
n
.
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
L
A
N
G
U
A
G
E
S
'
,
 
'
H
o
w
 
d
o
 
I
 
s
a
v
e
 
d
e
s
c
r
i
p
t
i
o
n
s
 
i
n
 
m
u
l
t
i
p
l
e
 
l
a
n
g
u
a
g
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
L
A
N
G
U
A
G
E
S
'
,
 
"
T
o
 
s
a
v
e
 
d
e
s
c
r
i
p
t
i
o
n
s
 
i
n
 
m
u
l
t
i
p
l
e
 
l
a
n
g
u
a
g
e
s
,
 
f
i
r
s
t
 
v
i
s
i
t
 
t
h
e
 
S
e
t
t
i
n
g
s
 
>
 
P
r
o
p
e
r
t
y
 
D
e
t
a
i
l
s
 
p
a
g
e
.
 
S
a
v
e
 
t
h
e
 
d
e
s
c
r
i
p
t
i
o
n
 
f
o
r
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
t
h
e
r
e
.
 
N
e
x
t
,
 
c
h
a
n
g
e
 
t
h
e
 
l
a
n
g
u
a
g
e
 
t
h
a
t
 
y
o
u
'
r
e
 
v
i
e
w
i
n
g
 
t
h
e
 
s
i
t
e
 
i
n
.
 
N
o
w
 
g
o
 
t
o
 
t
h
e
 
S
e
t
t
i
n
g
s
 
P
r
o
p
e
r
t
y
 
D
e
t
a
i
l
s
 
p
a
g
e
 
a
g
a
i
n
,
 
a
n
d
 
s
a
v
e
 
t
h
e
 
d
e
t
a
i
l
s
 
a
g
a
i
n
.
 
S
o
,
 
i
f
 
t
h
e
 
s
i
t
e
 
i
s
 
c
a
p
a
b
l
e
 
o
f
 
s
h
o
w
i
n
g
 
b
o
t
h
 
E
n
g
l
i
s
h
 
a
n
d
 
S
p
a
n
i
s
h
 
(
o
r
 
a
n
y
 
o
t
h
e
r
)
 
l
a
n
g
u
a
g
e
s
,
 
y
o
u
 
w
o
u
l
d
 
s
e
l
e
c
t
 
E
n
g
l
i
s
h
,
 
e
n
t
e
r
 
t
h
e
 
d
e
s
c
r
i
p
t
i
o
n
 
i
n
 
E
n
g
l
i
s
h
 
t
h
e
n
 
c
l
i
c
k
 
S
a
v
e
.
 
N
e
x
t
,
 
c
h
a
n
g
e
 
y
o
u
r
 
c
u
r
r
e
n
t
 
l
a
n
g
u
a
g
e
 
t
o
 
S
p
a
n
i
s
h
,
 
t
h
e
n
 
s
a
v
e
 
t
h
e
 
n
e
w
 
S
p
a
n
i
s
h
 
d
e
s
c
r
i
p
t
i
o
n
.
 
T
h
i
s
 
w
o
r
k
s
 
f
o
r
 
a
l
l
 
i
n
p
u
t
s
 
o
n
 
t
h
a
t
 
p
a
g
e
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
P
R
O
P
E
R
T
I
E
S
_
N
U
M
B
E
R
'
,
 
'
H
o
w
 
m
a
n
y
 
p
r
o
p
e
r
t
i
e
s
 
c
a
n
 
I
 
l
i
s
t
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
P
R
O
P
E
R
T
I
E
S
_
N
U
M
B
E
R
'
,
 
"
T
h
e
r
e
'
s
 
n
o
 
c
o
d
e
d
 
l
i
m
i
t
 
t
o
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
p
r
o
p
e
r
t
i
e
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
l
i
s
t
,
 
t
h
e
 
o
n
l
y
 
l
i
m
i
t
a
t
i
o
n
 
i
s
 
i
n
 
t
h
e
 
p
h
y
s
i
c
a
l
 
l
i
m
i
t
a
t
i
o
n
 
o
f
 
t
h
e
 
s
e
r
v
e
r
 
i
t
s
e
l
f
.
 
I
f
 
i
t
'
s
 
a
 
s
e
r
v
e
r
 
w
i
t
h
 
m
a
n
y
 
o
t
h
e
r
 
a
c
c
o
u
n
t
s
 
o
n
 
t
h
e
n
 
r
e
s
o
u
r
c
e
s
 
w
i
l
l
 
b
e
 
l
i
m
i
t
e
d
,
 
i
f
,
 
o
n
 
t
h
e
 
o
t
h
e
r
 
h
a
n
d
 
i
t
'
s
 
a
 
d
e
d
i
c
a
t
e
d
 
o
r
 
v
i
r
t
u
a
l
 
d
e
d
i
c
a
t
e
d
 
s
e
r
v
e
r
,
 
t
h
e
n
 
y
o
u
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
l
i
s
t
 
m
a
n
y
 
m
o
r
e
 
p
r
o
p
e
r
t
i
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
O
T
H
E
R
P
R
O
P
E
R
T
I
E
S
'
,
 
'
C
a
n
 
I
 
m
o
d
i
f
y
 
o
t
h
e
r
 
p
r
o
p
e
r
t
i
e
s
 
o
n
 
t
h
i
s
 
s
i
t
e
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
O
T
H
E
R
P
R
O
P
E
R
T
I
E
S
'
,
 
'
N
o
,
 
y
o
u
 
c
a
n
n
o
t
.
 
Y
o
u
 
c
a
n
 
o
n
l
y
 
a
d
m
i
n
i
s
t
e
r
 
p
r
o
p
e
r
t
i
e
s
 
y
o
u
 
h
a
v
e
 
c
r
e
a
t
e
d
 
o
r
 
b
e
e
n
 
a
s
s
i
g
n
e
d
 
t
o
 
a
s
 
a
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
O
T
H
E
R
P
R
O
P
E
R
T
I
E
S
_
S
U
P
E
R
'
,
 
'
C
a
n
 
I
 
m
o
d
i
f
y
 
o
t
h
e
r
 
p
r
o
p
e
r
t
i
e
s
 
o
n
 
t
h
i
s
 
s
i
t
e
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
O
T
H
E
R
P
R
O
P
E
R
T
I
E
S
_
S
U
P
E
R
'
,
 
"
Y
e
s
 
y
o
u
 
c
a
n
,
 
y
o
u
'
r
e
 
a
 
S
u
p
e
r
 
P
r
o
p
e
r
t
y
 
M
a
n
a
g
e
r
 
a
n
d
 
c
a
n
 
m
o
d
i
f
y
 
a
n
y
 
p
r
o
p
e
r
t
i
e
s
 
s
h
o
w
n
 
i
n
 
t
h
e
 
L
i
s
t
 
P
r
o
p
e
r
t
i
e
s
 
p
a
g
e
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
G
U
E
S
T
T
Y
P
E
S
'
,
 
'
W
h
a
t
 
a
r
e
 
G
u
e
s
t
 
T
y
p
e
s
/
H
o
w
 
d
o
 
I
 
c
h
a
n
g
e
 
p
e
r
 
p
e
r
s
o
n
 
p
e
r
 
n
i
g
h
t
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
G
U
E
S
T
T
Y
P
E
S
'
,
 
"
I
n
 
S
e
t
t
i
n
g
s
 
>
 
P
r
o
p
e
r
t
y
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
>
 
T
a
r
i
f
f
s
 
a
n
d
 
C
u
r
r
e
n
c
i
e
s
 
t
a
b
,
 
y
o
u
 
c
a
n
 
d
e
c
i
d
e
d
 
w
h
e
t
h
e
r
 
y
o
u
 
w
a
n
t
 
t
o
 
c
h
a
r
g
e
 
p
e
r
 
p
e
r
s
o
n
 
p
e
r
 
n
i
g
h
t
.
 
I
f
 
y
o
u
 
c
h
a
r
g
e
 
p
e
r
 
p
e
r
s
o
n
 
p
e
r
 
n
i
g
h
t
,
 
y
o
u
 
w
i
l
l
 
n
e
e
d
 
t
o
 
c
r
e
a
t
e
 
o
n
e
 
o
r
 
m
o
r
e
 
g
u
e
s
t
 
t
y
p
e
s
.
 
Y
o
u
 
c
a
n
 
c
r
e
a
t
e
 
a
 
s
i
m
p
l
e
 
g
u
e
s
t
 
t
y
p
e
,
 
w
h
e
r
e
 
y
o
u
 
j
u
s
t
 
g
i
v
e
 
t
h
e
m
 
a
 
d
e
s
c
r
i
p
t
i
o
n
 
(
 
e
.
g
.
 
'
P
e
r
s
o
n
s
'
 
)
,
 
o
r
 
y
o
u
 
c
a
n
 
c
r
e
a
t
e
 
s
e
v
e
r
a
l
 
d
i
f
f
e
r
e
n
t
 
g
u
e
s
t
 
t
y
p
e
s
,
 
f
o
r
 
e
x
a
m
p
l
e
 
'
A
d
u
l
t
s
'
 
a
n
d
 
'
C
h
i
l
d
r
e
n
 
u
n
d
e
r
 
1
0
'
.
 
F
o
r
 
t
h
e
 
c
h
i
l
d
r
e
n
,
 
i
f
 
y
o
u
 
w
a
n
t
 
t
o
 
o
f
f
e
r
 
a
 
d
i
s
c
o
u
n
t
 
o
f
 
5
0
%
 
t
h
e
n
 
y
o
u
'
d
 
s
e
t
 
'
I
s
 
p
e
r
c
e
n
t
a
g
e
'
 
t
o
 
Y
e
s
,
 
a
n
d
 
t
h
e
 
V
a
r
i
a
n
c
e
 
v
a
l
u
e
 
t
o
 
5
0
.
 
R
o
o
m
s
 
h
a
v
e
 
b
a
s
e
 
r
a
t
e
s
,
 
t
h
i
s
 
s
e
t
t
i
n
g
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
a
d
j
u
s
t
 
t
h
e
 
p
r
i
c
e
 
o
f
 
t
h
e
 
r
o
o
m
 
b
a
s
e
d
 
o
n
 
t
h
e
 
g
u
e
s
t
 
t
y
p
e
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
R
O
O
M
F
E
A
T
U
R
E
S
'
,
 
'
W
h
a
t
 
a
r
e
 
R
o
o
m
 
F
e
a
t
u
r
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
R
O
O
M
F
E
A
T
U
R
E
S
'
,
 
"
R
o
o
m
 
f
e
a
t
u
r
e
s
 
a
r
e
 
t
h
i
n
g
s
 
t
h
a
t
 
m
a
k
e
 
t
h
e
 
r
o
o
m
 
s
t
a
n
d
 
o
u
t
.
 
T
h
e
y
 
c
a
n
 
b
e
 
s
o
m
e
t
h
i
n
g
 
s
i
m
p
l
e
 
l
i
k
e
 
T
e
a
 
a
n
d
 
C
o
f
f
e
e
 
m
a
k
i
n
g
 
f
a
c
i
l
i
t
i
e
s
,
 
o
r
 
t
h
e
y
 
c
a
n
 
b
e
 
t
h
i
n
g
s
 
t
h
a
t
 
r
e
a
l
l
y
 
m
a
k
e
 
t
h
e
 
r
o
o
m
 
r
i
s
e
 
a
b
o
v
e
 
t
h
e
 
o
t
h
e
r
s
,
 
l
i
k
e
 
'
V
i
e
w
s
 
o
v
e
r
 
t
h
e
 
b
a
y
'
.
 
O
n
c
e
 
y
o
u
 
h
a
v
e
 
c
r
e
a
t
e
d
 
a
 
R
o
o
m
 
F
e
a
t
u
r
e
,
 
y
o
u
 
c
a
n
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
 
t
h
a
t
 
f
e
a
t
u
r
e
 
i
n
 
t
h
e
 
M
e
d
i
a
 
C
e
n
t
r
e
.
 
T
h
e
s
e
 
r
o
o
m
 
f
e
a
t
u
r
e
s
 
c
a
n
 
b
e
 
v
i
e
w
e
d
 
o
n
 
t
h
e
 
r
o
o
m
 
a
v
a
i
l
a
b
i
l
i
t
y
 
p
a
g
e
,
 
a
n
d
 
i
f
 
y
o
u
'
v
e
 
c
o
n
f
i
g
u
r
e
d
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
t
o
 
s
h
o
w
 
t
h
e
 
C
l
a
s
s
i
c
 
R
o
o
m
s
 
l
i
s
t
 
s
t
y
l
e
 
(
 
w
h
e
r
e
 
g
u
e
s
t
s
 
c
a
n
 
s
e
l
e
c
t
e
d
 
e
x
a
c
t
l
y
 
w
h
i
c
h
 
r
o
o
m
 
t
h
e
y
 
w
a
n
t
 
t
o
 
b
o
o
k
 
)
 
t
h
e
n
 
t
h
e
y
 
c
a
n
 
u
s
e
 
t
h
e
 
r
o
o
m
 
f
e
a
t
u
r
e
s
 
t
o
 
f
i
l
t
e
r
 
o
o
m
s
 
s
h
o
w
n
 
i
n
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
I
N
T
R
O
D
U
C
T
I
O
N
_
P
R
O
F
I
L
E
S
'
,
 
'
C
a
n
 
I
 
m
a
k
e
 
a
 
u
s
e
r
 
a
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
I
N
T
R
O
D
U
C
T
I
O
N
_
P
R
O
F
I
L
E
S
'
,
 
"
Y
e
s
 
y
o
u
 
c
a
n
,
 
t
h
r
o
u
g
h
 
t
h
e
 
P
r
o
p
e
r
t
y
 
M
a
n
a
g
e
r
s
 
p
a
g
e
 
u
n
d
e
r
 
U
s
e
r
 
M
a
n
a
g
e
m
e
n
t
.
 
I
f
 
t
h
e
 
u
s
e
r
 
i
s
 
a
l
r
e
a
d
y
 
r
e
g
i
s
t
e
r
e
d
,
 
i
n
 
t
h
e
 
i
n
p
u
t
 
a
t
 
t
h
e
 
t
o
p
 
o
f
 
t
h
e
 
P
r
o
p
e
r
t
y
 
M
a
n
a
g
e
r
s
 
p
a
g
e
 
t
y
p
e
 
t
h
e
 
f
i
r
s
t
 
f
e
w
 
c
h
a
r
a
c
t
e
r
s
 
o
f
 
t
h
e
i
r
 
u
s
e
r
n
a
m
e
 
a
n
d
 
t
h
e
i
r
 
u
s
e
r
n
a
m
e
 
w
i
l
l
 
a
p
p
e
a
r
 
u
n
d
e
r
n
e
a
t
h
.
 
C
l
i
c
k
 
o
n
 
t
h
e
i
r
 
u
s
e
r
n
a
m
e
 
a
n
d
 
y
o
u
 
w
i
l
l
 
b
e
 
t
a
k
e
n
 
t
o
 
a
 
p
a
g
e
 
w
h
e
r
e
 
y
o
u
 
c
a
n
 
c
o
n
f
i
g
u
r
e
 
w
h
i
c
h
 
p
r
o
p
e
r
t
i
e
s
 
t
h
e
y
 
h
a
v
e
 
a
c
c
e
s
s
 
t
o
.
 
I
f
 
t
h
e
y
'
r
e
 
n
o
t
 
a
l
r
e
a
d
y
 
r
e
g
i
s
t
e
r
e
d
,
 
y
o
u
'
l
l
 
f
i
r
s
t
 
n
e
e
d
 
t
o
 
u
s
e
 
y
o
u
r
 
h
o
s
t
 
C
M
S
'
s
 
u
s
e
r
 
m
a
n
a
g
e
m
e
n
t
 
p
a
g
e
s
 
t
o
 
a
d
d
 
t
h
e
m
 
a
s
 
a
 
u
s
e
r
 
t
o
 
t
h
e
 
C
M
S
.
<
b
r
/
>
<
b
r
/
>
 
A
 
w
o
r
d
 
o
f
 
a
d
v
i
c
e
 
:
 
I
f
 
y
o
u
 
i
n
t
e
n
d
 
t
o
 
c
h
a
r
g
e
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
f
o
r
 
l
i
s
t
i
n
g
 
t
h
e
i
r
 
p
r
o
p
e
r
t
i
e
s
 
o
n
 
y
o
u
r
 
s
i
t
e
,
 
e
i
t
h
e
r
 
t
h
r
o
u
g
h
 
t
a
k
i
n
g
 
c
o
m
m
i
s
s
i
o
n
 
v
i
a
 
t
h
e
 
S
t
r
i
p
e
 
g
a
t
e
w
a
y
 
o
r
 
s
u
b
s
c
r
i
p
t
i
o
n
s
/
c
o
m
m
i
s
s
i
o
n
 
f
u
n
c
t
i
o
n
a
l
i
t
y
,
 
w
e
 
d
o
n
'
t
 
r
e
c
o
m
m
e
n
d
 
t
h
a
t
 
y
o
u
 
a
d
d
 
u
s
e
r
s
 
i
n
 
t
h
i
s
 
w
a
y
.
 
I
n
 
t
h
i
s
 
i
n
s
t
a
n
c
e
,
 
o
n
l
y
 
s
u
p
e
r
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
s
h
o
u
l
d
 
b
e
 
a
d
d
e
d
 
u
s
i
n
g
 
t
h
i
s
 
p
r
o
c
e
s
s
,
 
a
n
d
 
w
h
e
n
 
t
h
e
y
 
a
r
e
 
a
d
d
e
d
 
y
o
u
 
s
h
o
u
l
d
n
'
t
 
s
e
l
e
c
t
 
a
n
y
 
p
r
o
p
e
r
t
i
e
s
 
i
n
 
t
h
e
 
l
i
s
t
 
u
n
d
e
r
n
e
a
t
h
.
 
A
l
l
 
o
t
h
e
r
 
u
s
e
r
s
 
s
h
o
u
l
d
 
b
e
 
e
n
c
o
u
r
a
g
e
d
 
t
o
 
c
r
e
a
t
e
 
p
r
o
p
e
r
t
i
e
s
 
t
h
e
m
s
e
l
v
e
s
 
i
n
 
t
h
e
 
f
r
o
n
t
e
n
d
.
 
T
h
i
s
 
w
i
l
l
 
a
d
d
 
t
h
e
m
 
a
s
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
a
n
d
 
e
n
s
u
r
e
s
 
t
h
a
t
 
t
h
e
 
c
o
r
r
e
c
t
 
u
s
e
r
 
i
s
 
b
i
l
l
e
d
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
L
U
G
I
N
S
'
,
 
'
P
l
u
g
i
n
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
G
E
N
E
R
A
L
_
P
L
U
G
I
N
S
'
,
 
'
W
h
a
t
 
i
s
 
t
h
e
 
P
l
u
g
i
n
 
M
a
n
a
g
e
r
 
f
o
r
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
G
E
N
E
R
A
L
_
P
L
U
G
I
N
S
'
,
 
'
T
h
e
 
P
l
u
g
i
n
 
M
a
n
a
g
e
r
 
i
s
 
a
 
k
e
y
 
t
o
o
l
 
i
n
 
J
o
m
r
e
s
.
 
I
t
 
a
l
l
o
w
s
 
u
s
 
t
o
 
d
i
s
t
r
i
b
u
t
e
 
t
h
e
 
m
o
s
t
 
u
p
-
t
o
-
d
a
t
e
 
v
e
r
s
i
o
n
 
o
f
 
J
o
m
r
e
s
 
p
l
u
g
i
n
s
 
t
o
 
y
o
u
 
t
h
r
o
u
g
h
 
a
n
 
a
u
t
o
m
a
t
i
c
 
d
o
w
n
l
o
a
d
 
a
n
d
 
i
n
s
t
a
l
l
a
t
i
o
n
 
f
e
a
t
u
r
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
G
E
N
E
R
A
L
_
P
L
U
G
I
N
S
_
I
O
N
C
U
B
E
'
,
 
'
W
h
y
 
d
o
 
I
 
s
e
e
 
a
 
w
a
r
n
i
n
g
 
a
b
o
u
t
 
I
o
n
c
u
b
e
 
L
o
a
d
e
r
s
 
w
h
e
n
 
I
 
c
l
i
c
k
 
o
n
 
t
h
e
 
P
l
u
g
i
n
 
M
a
n
a
g
e
r
 
p
a
g
e
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
G
E
N
E
R
A
L
_
P
L
U
G
I
N
S
_
I
O
N
C
U
B
E
'
,
 
"
Y
o
u
 
h
a
v
e
 
s
a
v
e
d
 
a
 
T
r
i
a
l
 
l
i
c
e
n
s
e
 
k
e
y
 
i
n
 
S
i
t
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
,
 
b
u
t
 
y
o
u
r
 
w
e
b
 
s
e
r
v
e
r
 
d
o
e
s
n
'
t
 
o
f
f
e
r
 
t
h
e
 
l
a
t
e
s
t
 
I
o
n
c
u
b
e
 
L
o
a
d
e
r
s
.
 
P
l
e
a
s
e
 
a
s
k
 
y
o
u
r
 
h
o
s
t
s
 
t
o
 
i
n
s
t
a
l
l
 
t
h
e
 
l
o
a
d
e
r
s
,
 
w
h
i
c
h
 
c
a
n
 
b
e
 
f
o
u
n
d
 
 
<
a
 
h
r
e
f
=
'
h
t
t
p
:
/
/
w
w
w
.
i
o
n
c
u
b
e
.
c
o
m
/
l
o
a
d
e
r
s
.
p
h
p
'
 
t
a
r
g
e
t
=
'
_
b
l
a
n
k
'
>
o
n
 
t
h
i
s
 
p
a
g
e
.
<
/
a
>
 
I
f
 
y
o
u
 
h
a
v
e
 
p
u
r
c
h
a
s
e
d
 
a
 
f
u
l
l
,
 
n
o
n
-
s
u
b
s
c
r
i
p
t
i
o
n
 
l
i
c
e
n
s
e
 
a
n
d
 
y
o
u
 
t
h
i
n
k
 
y
o
u
'
r
e
 
s
e
e
i
n
g
 
t
h
i
s
 
i
n
 
e
r
r
o
r
,
 
y
o
u
 
m
a
y
 
h
a
v
e
 
f
o
r
g
o
t
t
e
n
 
t
o
 
e
n
t
e
r
 
y
o
u
r
 
f
u
l
l
 
l
i
c
e
n
s
e
 
k
e
y
 
i
n
 
t
h
e
 
S
i
t
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
p
a
g
e
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
G
E
N
E
R
A
L
_
P
L
U
G
I
N
S
_
I
N
S
T
A
L
L
A
T
I
O
N
'
,
 
'
H
o
w
 
d
o
 
I
 
i
n
s
t
a
l
l
 
a
 
p
l
u
g
i
n
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
G
E
N
E
R
A
L
_
P
L
U
G
I
N
S
_
I
N
S
T
A
L
L
A
T
I
O
N
'
,
 
"
A
s
s
u
m
i
n
g
 
t
h
a
t
 
y
o
u
 
h
a
v
e
 
a
 
v
a
l
i
d
 
l
i
c
e
n
s
e
 
k
e
y
 
n
u
m
b
e
r
 
s
a
v
e
d
 
i
n
 
S
i
t
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
,
 
a
l
l
 
y
o
u
 
n
e
e
d
 
t
o
 
d
o
 
i
s
 
c
l
i
c
k
 
t
h
e
 
I
n
s
t
a
l
l
 
b
u
t
t
o
n
 
n
e
x
t
 
t
o
 
t
h
e
 
p
l
u
g
i
n
 
n
a
m
e
 
i
n
 
t
h
e
 
p
l
u
g
i
n
 
m
a
n
a
g
e
r
.
 
J
o
m
r
e
s
 
w
i
l
l
 
i
n
s
t
a
l
l
 
t
h
e
 
p
l
u
g
i
n
 
f
o
r
 
y
o
u
 
a
n
d
 
b
r
i
n
g
 
y
o
u
 
b
a
c
k
 
t
o
 
t
h
e
 
p
l
u
g
i
n
s
 
p
a
g
e
 
a
f
t
e
r
w
a
r
d
s
.
 
O
c
c
a
s
i
o
n
a
l
l
y
,
 
i
n
s
t
e
a
d
,
 
y
o
u
 
m
i
g
h
t
 
b
e
 
t
a
k
e
n
 
t
o
 
a
 
D
i
s
c
o
v
e
r
y
 
p
a
g
e
 
i
f
 
y
o
u
'
r
e
 
r
u
n
n
i
n
g
 
J
o
m
r
e
s
 
i
n
 
J
o
o
m
l
a
.
 
J
u
s
t
 
c
l
i
c
k
 
t
h
e
 
D
i
s
c
o
v
e
r
 
b
u
t
t
o
n
 
t
o
 
i
n
s
t
a
l
l
 
t
h
e
 
p
l
u
g
i
n
.
<
b
r
/
>
<
b
r
/
>
N
O
T
E
 
D
o
n
'
t
 
i
n
s
t
a
l
l
 
a
l
l
 
o
f
 
t
h
e
 
p
l
u
g
i
n
s
,
 
t
h
e
y
 
d
o
n
'
t
 
a
l
l
 
w
o
r
k
 
t
o
g
e
t
h
e
r
 
(
 
b
y
 
d
e
s
i
g
n
 
)
.
 
Y
o
u
 
c
o
u
l
d
 
e
n
d
 
u
p
 
w
i
t
h
 
b
l
a
n
k
 
p
a
g
e
s
 
i
n
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m
.
 
I
n
s
t
e
a
d
,
 
i
d
e
n
t
i
f
y
 
t
h
e
 
p
l
u
g
i
n
s
 
y
o
u
 
n
e
e
d
 
a
n
d
 
e
x
p
e
r
i
m
e
n
t
 
w
i
t
h
 
e
a
c
h
 
o
n
e
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
S
I
T
E
S
T
R
U
C
T
U
R
E
'
,
 
'
S
i
t
e
 
S
t
r
u
c
t
u
r
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
I
N
T
R
O
'
,
 
'
W
h
a
t
 
d
o
e
s
 
S
i
t
e
 
S
t
r
u
c
t
u
r
e
 
m
e
a
n
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
I
N
T
R
O
'
,
 
"
S
i
t
e
 
S
t
r
u
c
t
u
r
e
 
i
n
 
J
o
m
r
e
s
 
r
e
f
e
r
s
 
t
o
 
t
h
e
 
v
a
r
i
o
u
s
 
e
l
e
m
e
n
t
s
 
o
f
 
y
o
u
r
 
s
i
t
e
 
t
h
a
t
 
m
a
k
e
 
i
t
 
u
n
i
q
u
e
.
 
I
t
 
d
e
f
i
n
e
s
 
t
h
e
 
P
r
o
p
e
r
t
y
 
t
y
p
e
s
 
y
o
u
 
l
i
s
t
 
f
o
r
 
(
 
e
.
g
.
 
v
i
l
l
a
s
 
o
r
 
h
o
t
e
l
s
 
)
 
a
n
d
 
t
h
e
 
r
o
o
m
/
s
u
b
 
t
y
p
e
s
 
f
o
r
 
t
h
o
s
e
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s
.
 
S
o
,
 
i
f
 
y
o
u
'
r
e
 
s
e
l
l
i
n
g
 
s
e
l
f
-
c
a
t
e
r
i
n
g
 
h
o
l
i
d
a
y
s
,
 
t
h
e
n
 
y
o
u
 
w
o
u
l
d
 
b
e
 
s
e
l
l
i
n
g
 
r
e
n
t
a
l
s
 
o
f
 
s
o
m
e
t
h
i
n
g
 
l
i
k
e
 
a
 
c
h
a
l
e
t
 
o
r
 
v
i
l
l
a
.
 
D
i
f
f
e
r
e
n
t
 
c
h
a
l
e
t
s
 
c
o
u
l
d
 
h
a
v
e
 
d
i
f
f
e
r
e
n
t
 
n
u
m
b
e
r
s
 
o
f
 
r
o
o
m
s
,
 
b
a
l
c
o
n
i
e
s
 
e
t
c
.
 
I
n
 
t
h
e
 
c
a
s
e
 
o
f
 
H
o
t
e
l
s
 
o
r
 
B
&
B
s
,
 
y
o
u
'
r
e
 
s
e
l
l
i
n
g
 
r
o
o
m
s
 
<
e
m
>
i
n
<
/
e
m
>
 
t
h
e
 
p
r
o
p
e
r
t
y
,
 
a
n
d
 
t
h
e
y
'
d
 
b
e
 
d
o
u
b
l
e
 
b
e
d
r
o
o
m
s
,
 
s
i
n
g
l
e
s
 
e
t
c
.
 
T
o
 
h
e
l
p
 
c
l
a
r
i
f
y
 
t
h
i
s
,
 
a
 
d
e
f
a
u
l
t
 
i
n
s
t
a
l
l
a
t
i
o
n
 
a
l
r
e
a
d
y
 
h
a
s
 
s
e
v
e
r
a
l
 
r
o
o
m
s
 
a
n
d
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s
 
c
r
e
a
t
e
d
 
f
o
r
 
y
o
u
 
t
o
 
h
e
l
p
 
y
o
u
 
u
n
d
e
r
s
t
a
n
d
.
 
I
f
 
y
o
u
 
w
a
n
t
 
t
o
 
s
e
l
l
 
T
o
u
r
s
,
 
d
o
 
n
o
t
 
t
r
y
 
t
o
 
c
r
e
a
t
e
 
a
 
n
e
w
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
w
i
t
h
o
u
t
 
r
e
a
d
i
n
g
 
t
h
e
 
s
e
c
t
i
o
n
 
o
n
 
T
o
u
r
s
 
f
i
r
s
t
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
P
R
O
P
E
R
T
Y
T
Y
P
E
S
'
,
 
'
W
h
a
t
 
a
r
e
 
P
r
o
p
e
r
t
y
 
T
y
p
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
P
R
O
P
E
R
T
Y
T
Y
P
E
S
'
,
 
'
I
n
 
t
h
i
s
 
s
y
s
t
e
m
,
 
a
 
P
r
o
p
e
r
t
y
 
t
y
p
e
 
r
e
f
e
r
s
 
t
o
,
 
l
i
t
e
r
a
l
l
y
,
 
t
h
e
 
t
y
p
e
 
o
f
 
p
r
o
p
e
r
t
y
.
 
T
h
i
s
 
c
a
n
 
b
e
 
a
 
h
o
t
e
l
,
 
a
 
v
i
l
l
a
,
 
a
n
 
a
p
a
r
t
m
e
n
t
.
 
P
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
c
a
n
n
o
t
 
c
r
e
a
t
e
 
P
r
o
p
e
r
t
y
 
t
y
p
e
s
 
b
e
c
a
u
s
e
 
P
r
o
p
e
r
t
y
 
t
y
p
e
s
 
a
r
e
 
a
n
 
i
t
e
m
 
t
h
a
t
 
c
a
n
 
b
e
 
s
e
a
r
c
h
e
d
 
b
y
 
g
u
e
s
t
s
.
 
T
o
 
e
n
s
u
r
e
 
t
h
a
t
 
y
o
u
r
 
s
e
a
r
c
h
 
f
u
n
c
t
i
o
n
a
l
i
t
y
 
s
t
a
y
s
 
n
i
c
e
 
a
n
d
 
n
e
a
t
 
a
n
d
 
t
i
d
y
,
 
o
n
l
y
 
S
i
t
e
 
a
d
m
i
n
i
s
t
r
a
t
o
r
s
 
c
a
n
 
c
r
e
a
t
e
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
'
,
 
'
W
h
a
t
 
a
r
e
 
P
r
o
p
e
r
t
y
 
F
e
a
t
u
r
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
'
,
 
"
P
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
s
 
a
r
e
 
t
h
i
n
g
s
 
t
h
a
t
 
m
a
k
e
 
a
 
p
r
o
p
e
r
t
y
 
u
n
i
q
u
e
.
 
F
o
r
 
e
x
a
m
p
l
e
,
 
o
n
e
 
P
r
o
p
e
r
t
y
 
F
e
a
t
u
r
e
 
c
o
u
l
d
 
b
e
 
t
h
a
t
 
i
t
'
s
 
'
C
l
o
s
e
 
t
o
 
t
h
e
 
b
e
a
c
h
'
 
w
h
i
l
s
t
 
a
n
o
t
h
e
r
 
h
o
t
e
l
 
c
o
u
l
d
 
h
a
v
e
 
t
h
e
 
f
e
a
t
u
r
e
 
t
h
a
t
 
i
t
'
s
 
i
n
s
i
d
e
 
a
 
n
a
t
i
o
n
a
l
 
p
a
r
k
,
 
o
f
f
e
r
s
 
b
r
i
d
l
e
w
a
y
s
,
 
s
o
m
e
t
h
i
n
g
 
l
i
k
e
 
t
h
a
t
.
 
L
i
k
e
 
P
r
o
p
e
r
t
y
 
T
y
p
e
s
,
 
m
a
n
a
g
e
r
s
 
c
a
n
n
o
t
 
c
r
e
a
t
e
 
n
e
w
 
f
e
a
t
u
r
e
s
,
 
t
h
e
y
 
c
a
n
 
o
n
l
y
 
s
e
l
e
c
t
 
f
r
o
m
 
t
h
e
 
o
n
e
s
 
y
o
u
 
c
r
e
a
t
e
.
 
P
r
o
p
e
r
t
y
 
F
e
a
t
u
r
e
s
 
c
a
n
 
h
a
v
e
 
i
m
a
g
e
s
 
a
s
s
i
g
n
e
d
 
t
o
 
t
h
e
m
.
 
F
i
r
s
t
 
y
o
u
 
n
e
e
d
 
t
o
 
u
p
l
o
a
d
 
f
e
a
t
u
r
e
 
i
m
a
g
e
s
 
t
h
r
o
u
g
h
 
t
h
e
 
S
i
t
e
 
S
t
r
u
c
u
t
r
e
 
>
 
M
e
d
i
a
 
C
e
n
t
r
e
 
>
 
P
r
o
p
e
r
t
y
 
F
e
a
t
u
r
e
 
I
c
o
n
s
 
d
r
o
p
d
o
w
n
.
 
U
p
l
o
a
d
 
a
s
 
m
a
n
y
 
f
e
a
t
u
r
e
 
i
c
o
n
s
 
a
s
 
y
o
u
 
w
a
n
t
,
 
t
h
e
n
 
w
h
e
n
 
y
o
u
 
c
r
e
a
t
e
 
a
 
P
r
o
p
e
r
t
y
 
F
e
a
t
u
r
e
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
i
t
'
s
 
i
m
a
g
e
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
C
A
T
E
G
O
R
I
E
S
'
,
 
'
W
h
a
t
 
a
r
e
 
P
r
o
p
e
r
t
y
 
F
e
a
t
u
r
e
 
C
a
t
e
g
o
r
i
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
C
A
T
E
G
O
R
I
E
S
'
,
 
"
P
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
s
 
a
r
e
 
d
i
s
p
l
a
y
e
d
 
i
n
 
t
h
e
 
P
r
o
p
e
r
t
y
 
D
e
t
a
i
l
s
 
p
a
g
e
,
 
a
m
o
n
g
 
o
t
h
e
r
s
.
 
O
n
 
t
h
e
 
P
r
o
p
e
r
t
y
 
D
e
t
a
i
l
s
 
p
a
g
e
,
 
f
e
a
t
u
r
e
s
 
c
a
n
 
b
e
 
d
i
s
p
l
a
y
e
d
 
g
r
o
u
p
e
d
 
b
y
 
c
a
t
e
g
o
r
i
e
s
,
 
f
o
r
 
e
x
a
m
p
l
e
 
'
L
i
v
i
n
g
 
A
r
e
a
'
,
 
'
A
c
c
e
s
s
i
b
i
l
i
t
y
'
 
e
t
c
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
R
O
O
M
F
E
A
T
U
R
E
S
'
,
 
'
W
h
a
t
 
a
r
e
 
R
o
o
m
 
f
e
a
t
u
r
e
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
R
O
O
M
F
E
A
T
U
R
E
S
'
,
 
"
P
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
t
h
a
t
 
u
s
e
 
M
i
c
r
o
m
a
n
a
g
e
 
o
r
 
A
d
v
a
n
c
e
d
 
t
a
r
i
f
f
 
e
d
i
t
i
n
g
 
m
o
d
e
 
a
r
e
 
a
b
l
e
 
t
o
 
e
d
i
t
 
t
h
e
i
r
 
r
o
o
m
s
 
d
i
r
e
c
t
l
y
.
 
T
h
e
y
'
r
e
 
a
l
s
o
 
a
b
l
e
 
t
o
 
c
r
e
a
t
e
 
t
h
i
n
g
s
 
c
a
l
l
e
d
 
R
o
o
m
 
F
e
a
t
u
r
e
s
 
w
h
i
c
h
 
a
r
e
 
d
i
s
p
l
a
y
e
d
 
i
n
 
t
h
e
 
R
o
o
m
 
a
v
a
i
l
a
b
i
l
i
t
y
 
p
a
g
e
 
f
o
r
 
e
a
c
h
 
p
r
o
p
e
r
t
y
.
 
I
f
 
t
h
e
y
 
u
s
e
 
t
h
e
 
C
l
a
s
s
i
c
 
r
o
o
m
s
 
l
i
s
t
 
d
i
s
p
l
a
y
 
i
n
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m
,
 
t
h
e
n
 
g
u
e
s
t
s
 
a
r
e
 
a
b
l
e
 
t
o
 
u
s
e
 
R
o
o
m
 
f
e
a
t
u
r
e
s
 
t
o
 
f
i
l
t
e
r
 
o
u
t
 
r
o
o
m
s
 
b
e
f
o
r
e
 
s
e
l
e
c
t
i
n
g
 
o
n
e
 
o
r
 
m
o
r
e
.
 
O
n
 
t
h
e
 
S
i
t
e
 
S
t
r
u
c
t
u
r
e
 
>
 
R
o
o
m
 
f
e
a
t
u
r
e
s
 
p
a
g
e
 
S
i
t
e
 
M
a
n
a
g
e
r
s
 
a
r
e
 
a
l
s
o
 
a
b
l
e
 
t
o
 
c
r
e
a
t
e
 
r
o
o
m
 
f
e
a
t
u
r
e
s
,
 
a
n
d
 
t
h
e
s
e
 
f
e
a
t
u
r
e
s
 
c
a
n
 
b
e
 
s
e
e
n
 
i
n
 
a
l
l
 
p
r
o
p
e
r
t
y
 
b
o
o
k
i
n
g
 
f
o
r
m
s
 
w
h
e
r
e
 
t
h
e
 
p
r
o
p
e
r
t
y
 
u
s
e
s
 
t
h
e
 
C
l
a
s
s
i
c
 
R
o
o
m
s
 
l
i
s
t
.
 
B
a
s
i
c
a
l
l
y
,
 
i
t
'
s
 
a
 
G
l
o
b
a
l
 
R
o
o
m
 
f
e
a
t
u
r
e
.
 
T
h
e
s
e
 
R
o
o
m
 
F
e
a
t
u
r
e
s
 
c
a
n
 
b
e
 
c
o
n
f
i
g
u
r
e
d
 
t
o
 
o
n
l
y
 
b
e
 
s
h
o
w
n
 
t
o
 
c
e
r
t
a
i
n
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s
,
 
a
n
d
 
i
m
a
g
e
s
 
f
o
r
 
t
h
e
s
e
 
r
o
o
m
 
f
e
a
t
u
r
e
s
 
c
a
n
 
b
e
 
u
p
l
o
a
d
e
d
 
t
h
r
o
u
g
h
 
t
h
e
 
S
i
t
e
 
S
t
r
u
c
t
u
r
e
 
>
 
M
e
d
i
a
 
C
e
n
t
r
e
 
p
a
g
e
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
C
O
U
N
T
R
I
E
S
'
,
 
'
W
h
y
 
i
s
 
t
h
e
r
e
 
a
 
p
a
g
e
 
t
o
 
e
d
i
t
 
c
o
u
n
t
r
i
e
s
/
r
e
g
i
o
n
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
C
O
U
N
T
R
I
E
S
'
,
 
"
Y
o
u
'
d
 
t
h
i
n
k
 
t
h
a
t
 
a
 
l
i
s
t
 
o
f
 
c
o
u
n
t
r
i
e
s
 
w
a
s
 
f
a
i
r
l
y
 
i
m
m
u
t
a
b
l
e
,
 
b
u
t
 
y
o
u
'
d
 
b
e
 
w
r
o
n
g
.
 
O
v
e
r
 
t
h
e
 
y
e
a
r
s
,
 
w
h
e
n
 
m
a
i
n
t
a
i
n
i
n
g
 
a
 
l
i
s
t
 
o
f
 
c
o
u
n
t
r
i
e
s
,
 
w
e
'
v
e
 
s
e
e
 
m
a
n
y
 
c
h
a
n
g
e
s
.
 
A
s
 
a
 
r
e
s
u
l
t
,
 
w
e
 
l
e
a
r
n
e
d
 
t
h
a
t
 
i
t
 
w
a
s
 
e
a
s
i
e
s
t
 
t
o
 
a
l
l
o
w
 
S
i
t
e
 
M
a
n
a
g
e
r
s
 
t
o
 
d
e
f
i
n
e
 
t
h
e
 
c
o
u
n
t
r
i
e
s
 
t
h
e
y
'
d
 
l
i
k
e
 
t
o
 
s
h
o
w
 
o
n
 
t
h
e
 
s
i
t
e
.
 
T
h
i
s
 
a
l
l
o
w
s
 
t
h
e
 
d
i
e
-
h
a
r
d
 
C
a
t
a
l
a
n
 
t
o
 
d
i
s
p
l
a
y
 
t
h
e
i
r
 
p
r
o
v
i
n
c
e
 
a
s
 
a
 
u
n
i
q
u
e
 
c
o
u
n
t
r
y
,
 
i
f
 
t
h
a
t
'
s
 
t
h
e
 
s
t
a
t
e
m
e
n
t
 
t
h
e
y
'
d
 
l
i
k
e
 
t
o
 
m
a
k
e
.
 
T
h
e
 
s
a
m
e
 
g
o
e
s
 
f
o
r
 
o
t
h
e
r
 
r
e
g
i
o
n
s
 
o
f
 
t
h
e
 
w
o
r
l
d
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
L
O
C
A
L
I
S
A
T
I
O
N
'
,
 
'
L
o
c
a
l
i
s
a
t
i
o
n
/
T
r
a
n
s
l
a
t
i
o
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
L
O
C
A
L
I
S
A
T
I
O
N
_
I
N
T
R
O
'
,
 
'
H
o
w
 
d
o
 
I
 
t
r
a
n
s
l
a
t
e
 
t
h
i
n
g
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
L
O
C
A
L
I
S
A
T
I
O
N
_
I
N
T
R
O
'
,
 
"
T
r
a
n
s
l
a
t
i
o
n
 
o
f
 
l
a
b
e
l
s
/
s
t
r
i
n
g
s
 
i
s
 
d
o
n
e
 
t
h
r
o
u
g
h
 
t
h
e
 
L
a
n
g
u
a
g
e
s
 
m
e
n
u
 
o
p
t
i
o
n
s
,
 
m
a
i
n
l
y
 
t
h
e
 
T
r
a
n
s
l
a
t
e
 
L
a
n
g
u
a
g
e
 
F
i
l
e
/
T
r
a
n
s
l
a
t
e
 
L
o
c
a
l
e
s
 
p
a
g
e
s
.
 
B
e
c
a
u
s
e
 
t
h
e
 
l
a
n
g
u
a
g
e
 
f
i
l
e
s
 
a
r
e
 
v
e
r
y
 
l
a
r
g
e
,
 
w
h
e
n
 
y
o
u
 
c
l
i
c
k
 
o
n
 
t
h
i
s
 
p
a
g
e
 
t
h
e
y
 
c
a
n
 
t
a
k
e
 
a
 
w
h
i
l
e
 
t
o
 
l
o
a
d
.
 
<
b
r
/
>
<
b
r
/
>
L
e
t
'
s
 
l
o
o
k
 
a
t
 
a
n
 
e
x
a
m
p
l
e
.
 
L
e
t
'
s
 
s
a
y
 
t
h
a
t
 
y
o
u
 
w
a
n
t
 
t
o
 
t
r
a
n
s
l
a
t
e
 
G
e
r
m
a
n
y
 
t
o
 
D
e
u
t
s
c
h
l
a
n
d
.
 
F
i
r
s
t
 
c
l
i
c
k
 
o
n
 
T
r
a
n
s
l
a
t
e
 
L
o
c
a
l
e
s
.
 
N
e
x
t
 
c
h
e
c
k
 
t
h
e
 
l
a
n
g
u
a
g
e
 
d
r
o
p
d
o
w
n
 
i
n
 
t
h
e
 
t
o
p
 
r
i
g
h
t
 
f
r
o
m
 
E
n
g
l
i
s
h
 
t
o
 
G
e
r
m
a
n
.
 
N
e
x
t
,
 
s
c
r
o
l
l
 
d
o
w
n
 
t
h
e
 
p
a
g
e
 
u
n
t
i
l
 
y
o
u
 
g
e
t
 
t
o
 
G
e
r
m
a
n
y
.
 
Y
o
u
 
c
a
n
 
s
e
e
 
i
t
 
h
a
s
 
a
 
d
o
t
t
e
d
 
u
n
d
e
r
l
i
n
e
.
 
T
h
i
s
 
m
e
a
n
s
 
y
o
u
 
c
a
n
 
t
r
a
n
s
l
a
t
e
 
i
t
.
 
C
l
i
c
k
 
o
n
 
t
h
e
 
w
o
r
d
,
 
y
o
u
 
w
i
l
l
 
s
e
e
 
a
 
p
o
p
u
p
 
c
o
n
t
a
i
n
i
n
g
 
t
h
e
 
w
o
r
d
 
'
G
e
r
m
a
n
y
'
.
 
C
h
a
n
g
e
 
t
h
i
s
 
t
o
 
'
D
e
u
t
s
c
h
l
a
n
d
'
 
a
n
d
 
c
l
i
c
k
 
t
h
e
 
g
r
e
e
n
 
t
i
c
k
.
 
I
f
 
y
o
u
r
 
h
o
s
t
 
C
M
S
 
i
s
 
c
o
n
f
i
g
u
r
e
d
 
t
o
 
o
f
f
e
r
 
G
e
r
m
a
n
 
l
a
n
g
u
a
g
e
 
p
a
g
e
s
 
t
o
 
s
i
t
e
 
v
i
s
i
t
o
r
s
,
 
t
h
e
n
 
t
h
e
 
w
o
r
d
 
'
G
e
r
m
a
n
y
'
 
w
i
l
l
 
n
o
w
 
b
e
 
s
h
o
w
n
 
a
s
 
'
D
e
u
t
s
c
h
l
a
n
d
'
.
 
T
h
i
s
 
c
o
n
c
e
p
t
 
a
p
p
l
i
e
s
 
t
h
r
o
u
g
h
-
o
u
t
 
J
o
m
r
e
s
.
 
<
b
r
/
>
<
b
r
/
>
O
n
 
t
h
e
 
P
r
o
p
e
r
t
y
 
M
a
n
a
g
e
r
 
p
a
g
e
s
,
 
P
r
o
p
e
r
t
y
 
M
a
n
a
g
e
r
s
 
m
i
g
h
t
 
a
l
s
o
 
s
e
e
 
a
 
L
a
b
e
l
 
E
d
i
t
i
n
g
 
M
o
d
e
 
d
r
o
p
d
o
w
n
 
a
t
 
t
h
e
 
t
o
p
 
o
f
 
t
h
e
i
r
 
p
a
g
e
s
.
 
W
h
e
n
 
t
h
i
s
 
i
s
 
s
e
t
 
t
o
 
O
n
,
 
t
h
e
n
 
t
h
e
y
 
w
i
l
l
 
a
l
s
o
 
b
e
 
a
b
l
e
 
t
o
 
m
a
k
e
 
c
h
a
n
g
e
s
 
i
n
 
t
h
e
 
f
r
o
n
t
e
n
d
,
 
h
o
w
e
v
e
r
 
t
h
o
s
e
 
c
h
a
n
g
e
s
 
w
i
l
l
 
o
n
l
y
 
a
f
f
e
c
t
 
t
h
e
i
r
 
c
u
r
r
e
n
t
l
y
 
A
c
t
i
v
e
 
p
r
o
p
e
r
t
y
,
 
s
o
 
f
o
r
 
e
x
a
m
p
l
e
 
t
h
e
y
 
c
a
n
 
e
a
s
i
l
y
 
c
h
a
n
g
e
 
t
h
e
 
w
o
r
d
 
T
a
r
i
f
f
s
 
t
o
 
P
r
i
c
e
s
 
f
o
r
 
j
u
s
t
 
o
n
e
 
p
r
o
p
e
r
t
y
 
i
f
 
t
h
a
t
'
s
 
w
h
a
t
'
s
 
r
e
q
u
i
r
e
d
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
T
O
U
R
S
'
,
 
'
T
o
u
r
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
O
U
R
S
_
I
N
T
R
O
'
,
 
'
W
h
a
t
 
a
r
e
 
t
o
u
r
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
O
U
R
S
_
I
N
T
R
O
'
,
 
"
T
h
i
s
 
m
a
y
 
s
o
u
n
d
 
l
i
k
e
 
a
 
s
i
l
l
y
 
q
u
e
s
t
i
o
n
,
 
b
u
t
 
i
n
 
f
a
c
t
 
i
t
'
s
 
n
o
t
.
 
O
v
e
r
 
t
h
e
 
y
e
a
r
s
 
w
e
'
v
e
 
l
e
a
r
n
e
d
 
t
h
a
t
 
d
i
f
f
e
r
e
n
t
 
c
u
l
t
u
r
e
s
 
h
a
v
e
 
d
i
f
f
e
r
e
n
t
 
p
e
r
c
e
p
t
i
o
n
s
 
o
f
 
w
h
a
t
 
a
 
'
t
o
u
r
'
 
i
s
.
 
A
s
 
a
 
r
e
s
u
l
t
,
 
e
x
p
e
c
t
a
t
i
o
n
s
 
o
f
 
s
e
l
l
i
n
g
 
t
o
u
r
s
 
v
a
r
y
 
w
i
l
d
l
y
,
 
s
o
 
b
e
f
o
r
e
 
w
e
 
d
i
s
c
u
s
s
 
t
o
u
r
s
,
 
f
i
r
s
t
 
w
e
 
w
i
l
l
 
d
e
f
i
n
e
 
w
h
a
t
 
w
e
 
t
h
i
n
k
 
o
f
 
t
o
u
r
s
 
a
s
.
 
<
b
r
/
>
 
A
 
t
o
u
r
 
i
s
 
a
 
s
i
m
p
l
e
 
j
o
u
r
n
e
y
 
o
r
 
v
i
s
i
t
 
t
o
 
v
i
e
w
 
a
n
 
a
t
t
r
a
c
t
i
o
n
 
o
r
 
m
o
n
u
m
e
n
t
.
 
A
 
s
t
a
y
 
i
n
 
a
 
h
o
t
e
l
 
i
s
 
n
o
t
 
a
 
t
o
u
r
,
 
h
o
w
e
v
e
r
 
t
o
u
r
s
 
c
a
n
 
b
e
 
p
a
r
t
i
c
i
p
a
t
e
d
 
i
n
 
w
h
i
l
e
 
s
t
a
y
i
n
g
 
a
t
 
a
 
h
o
t
e
l
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
O
U
R
S
_
H
O
W
T
O
S
E
L
L
'
,
 
'
H
o
w
 
d
o
 
I
 
u
s
e
 
J
o
m
r
e
s
 
t
o
 
s
e
l
l
 
t
o
u
r
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
O
U
R
S
_
H
O
W
T
O
S
E
L
L
'
,
 
'
T
o
 
a
d
d
r
e
s
s
 
t
h
e
 
q
u
e
s
t
i
o
n
 
o
f
 
s
e
l
l
i
n
g
 
t
o
u
r
s
 
i
n
 
J
o
m
r
e
s
,
 
y
o
u
 
w
i
l
l
 
f
i
r
s
t
 
n
e
e
d
 
t
o
 
i
n
s
t
a
l
l
 
t
h
e
 
J
i
n
t
o
u
r
 
p
l
u
g
i
n
.
 
T
h
i
s
 
p
l
u
g
i
n
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
c
r
e
a
t
e
 
t
o
u
r
s
 
t
h
a
t
 
a
r
e
 
s
o
l
d
 
a
s
 
p
a
r
t
 
o
f
 
v
a
c
a
t
i
o
n
 
r
e
n
t
a
l
s
.
 
I
t
 
a
l
s
o
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
c
r
e
a
t
e
 
p
r
o
p
e
r
t
i
e
s
 
t
h
a
t
 
a
r
e
 
e
x
c
l
u
s
i
v
e
l
y
 
f
o
r
 
s
e
l
l
i
n
g
 
t
o
u
r
s
.
 
O
n
c
e
 
t
h
i
s
 
p
l
u
g
i
n
 
h
a
s
 
b
e
e
n
 
i
n
s
t
a
l
l
e
d
,
 
t
h
e
n
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
c
r
e
a
t
e
 
T
o
u
r
s
 
a
n
d
 
T
o
u
r
 
p
r
o
p
e
r
t
i
e
s
 
i
n
 
t
h
e
 
f
r
o
n
t
e
n
d
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
O
U
R
S
_
W
H
A
T
I
S
J
I
N
T
O
U
R
'
,
 
'
W
h
a
t
 
i
s
 
t
h
e
 
J
i
n
t
o
u
r
 
p
l
u
g
i
n
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
O
U
R
S
_
W
H
A
T
I
S
J
I
N
T
O
U
R
'
,
 
'
J
i
n
t
o
u
r
 
s
t
a
n
d
s
 
f
o
r
 
J
o
m
r
e
s
 
I
N
t
e
g
r
a
t
e
d
 
T
O
U
R
s
.
 
I
t
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
c
r
e
a
t
e
 
s
i
m
p
l
e
,
 
l
i
m
i
t
e
d
 
r
e
s
o
u
r
c
e
s
 
t
h
a
t
 
c
a
n
 
b
e
 
b
o
o
k
e
d
 
o
u
t
,
 
t
h
a
t
 
a
r
e
 
n
o
t
 
r
o
o
m
s
 
i
n
 
a
 
p
r
o
p
e
r
t
y
.
 
W
h
i
l
s
t
 
t
h
e
 
p
l
u
g
i
n
 
i
s
 
d
e
s
i
g
n
e
d
 
t
o
 
a
l
l
o
w
 
b
o
o
k
i
n
g
s
 
o
f
 
t
o
u
r
s
 
p
r
i
m
a
r
i
l
y
,
 
t
h
e
y
 
c
a
n
 
b
e
 
u
s
e
d
 
f
o
r
 
m
a
n
y
 
t
h
i
n
g
s
,
 
n
o
t
 
j
u
s
t
 
t
o
u
r
s
.
 
T
h
e
y
 
c
a
n
 
b
e
 
u
s
e
d
,
 
f
o
r
 
e
x
a
m
p
l
e
,
 
b
y
 
a
 
s
k
i
 
l
o
d
g
e
 
t
h
a
t
 
w
a
n
t
s
 
t
o
 
r
e
n
t
 
o
u
t
 
s
k
i
s
 
a
n
d
 
g
e
a
r
.
 
A
s
 
t
h
i
s
 
e
q
u
i
p
m
e
n
t
 
w
i
l
l
 
h
a
v
e
 
l
i
m
i
t
e
d
 
a
v
a
i
l
a
b
i
l
i
t
y
,
 
y
o
u
 
c
a
n
 
u
s
e
 
t
h
e
 
J
i
n
t
o
u
r
 
p
l
u
g
i
n
 
t
o
 
a
l
l
o
w
 
g
u
e
s
t
s
 
t
o
 
r
e
s
e
r
v
e
 
a
n
d
 
p
a
y
 
f
o
r
 
t
h
i
s
 
g
e
a
r
 
a
t
 
b
o
o
k
i
n
g
 
t
i
m
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
O
U
R
S
_
S
A
M
E
B
O
O
K
I
N
G
'
,
 
'
H
o
w
 
d
o
 
I
 
s
e
l
l
 
t
o
u
r
s
 
a
n
d
 
v
a
c
a
t
i
o
n
 
r
e
n
t
a
l
s
 
i
n
 
t
h
e
 
s
a
m
e
 
b
o
o
k
i
n
g
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
O
U
R
S
_
S
A
M
E
B
O
O
K
I
N
G
'
,
 
"
I
n
 
t
h
i
s
 
s
c
e
n
a
r
i
o
,
 
y
o
u
'
v
e
 
g
o
t
 
a
 
h
o
t
e
l
,
 
a
n
d
 
y
o
u
 
w
a
n
t
 
t
o
 
s
e
l
l
 
t
o
u
r
s
 
t
o
 
a
 
l
o
c
a
l
 
a
t
t
r
a
c
t
i
o
n
.
 
L
o
g
 
i
n
t
o
 
t
h
e
 
f
r
o
n
t
e
n
d
 
a
n
d
 
g
o
 
t
o
 
t
h
e
 
h
o
t
e
l
 
y
o
u
'
v
e
 
c
r
e
a
t
e
d
.
 
N
e
x
t
,
 
c
l
i
c
k
 
o
n
 
S
e
t
t
i
n
g
s
 
>
 
T
o
u
r
/
A
c
t
i
v
i
t
y
 
m
a
n
a
g
e
m
e
n
t
.
 
O
n
 
t
h
i
s
 
p
a
g
e
,
 
f
o
l
l
o
w
 
t
h
e
 
o
n
s
c
r
e
e
n
 
i
n
s
t
r
u
c
t
i
o
n
s
 
t
o
 
f
i
r
s
t
 
c
r
e
a
t
e
 
a
 
t
o
u
r
 
p
r
o
f
i
l
e
,
 
t
h
e
n
 
g
e
n
e
r
a
t
e
 
t
o
u
r
s
.
 
O
n
c
e
 
t
h
a
t
'
s
 
d
o
n
e
,
 
y
o
u
'
l
l
 
b
e
 
a
b
l
e
 
t
o
 
s
e
l
l
 
b
o
t
h
 
t
o
u
r
s
 
a
n
d
 
r
o
o
m
 
b
o
o
k
i
n
g
s
 
a
n
d
 
o
p
t
i
o
n
a
l
 
e
x
t
r
a
s
 
a
l
o
n
g
s
i
d
e
 
e
a
c
h
 
o
t
h
e
r
 
i
n
 
t
h
e
 
s
a
m
e
 
b
o
o
k
i
n
g
 
f
o
r
m
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
O
U
R
S
_
S
T
A
N
D
A
L
O
N
E
T
O
U
R
S
'
,
 
'
W
h
a
t
 
a
b
o
u
t
 
i
f
 
I
 
o
n
l
y
 
w
a
n
t
 
t
o
 
s
e
l
l
 
t
o
u
r
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
O
U
R
S
_
S
T
A
N
D
A
L
O
N
E
T
O
U
R
S
'
,
 
"
F
i
r
s
t
 
y
o
u
 
w
i
l
l
 
n
e
e
d
 
t
o
 
c
r
e
a
t
e
 
a
 
n
e
w
 
p
r
o
p
e
r
t
y
 
i
n
 
t
h
e
 
f
r
o
n
t
e
n
d
.
 
W
h
e
n
 
y
o
u
 
d
o
,
 
e
n
s
u
r
e
 
t
h
a
t
 
y
o
u
 
s
e
t
 
t
h
e
 
'
P
r
o
p
e
r
t
y
 
t
y
p
e
'
 
t
o
 
T
o
u
r
.
 
W
h
e
n
 
y
o
u
'
v
e
 
c
r
e
a
t
e
d
 
t
h
i
s
 
n
e
w
 
p
r
o
p
e
r
t
y
,
 
t
h
e
n
 
y
o
u
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
c
r
e
a
t
e
 
t
o
u
r
s
 
a
g
a
i
n
 
t
h
r
o
u
g
h
 
t
h
e
 
S
e
t
t
i
n
g
s
 
>
 
T
o
u
r
/
A
c
t
i
v
i
t
y
 
m
a
n
a
g
e
m
e
n
t
 
p
a
g
e
.
 
Y
o
u
 
w
i
l
l
 
a
l
s
o
 
b
e
 
a
b
l
e
 
t
o
 
o
f
f
e
r
 
o
p
t
i
o
n
a
l
 
e
x
t
r
a
s
 
a
s
 
i
n
 
n
o
r
m
a
l
 
p
r
o
p
e
r
t
i
e
s
,
 
t
h
e
 
o
n
l
y
 
t
h
i
n
g
 
y
o
u
 
w
o
n
'
t
 
b
e
 
a
b
l
e
 
t
o
 
d
o
 
i
s
 
c
o
n
f
i
g
u
r
e
 
r
o
o
m
s
,
 
r
o
o
m
 
f
e
a
t
u
r
e
s
 
o
r
 
t
a
r
i
f
f
s
 
a
s
 
y
o
u
'
r
e
 
n
o
t
 
s
e
l
l
i
n
g
 
r
o
o
m
s
 
i
n
 
t
h
i
s
 
p
r
o
p
e
r
t
y
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
O
U
R
S
_
G
L
O
B
A
L
T
O
U
R
S
'
,
 
'
H
o
w
 
c
a
n
 
I
 
c
r
e
a
t
e
 
a
 
T
o
u
r
/
b
o
o
k
a
b
l
e
 
r
e
s
o
u
r
c
e
 
t
h
a
t
 
c
a
n
 
b
e
 
s
e
e
n
 
i
n
 
a
l
l
 
p
r
o
p
e
r
t
i
e
s
 
b
o
o
k
i
n
g
 
f
o
r
m
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
O
U
R
S
_
G
L
O
B
A
L
T
O
U
R
S
'
,
 
"
I
n
 
t
h
e
 
a
d
m
i
n
i
s
t
r
a
t
o
r
 
a
r
e
a
 
o
f
 
y
o
u
r
 
s
i
t
e
,
 
v
i
s
i
t
 
t
h
e
 
P
o
r
t
a
l
 
>
 
F
u
n
c
t
i
o
n
a
l
i
t
y
 
T
o
u
r
/
A
c
t
i
v
i
t
y
 
M
a
n
a
g
e
n
e
n
t
 
p
a
g
e
.
 
T
h
e
 
t
o
u
r
 
p
r
o
f
i
l
e
/
g
e
n
e
r
a
t
i
o
n
 
p
r
o
c
e
s
s
 
i
s
 
t
h
e
 
s
a
m
e
 
a
s
 
u
s
e
d
 
i
n
 
t
h
e
 
f
r
o
n
t
e
n
d
,
 
h
o
w
e
v
e
r
 
a
n
y
 
t
o
u
r
s
 
g
e
n
e
r
a
t
e
d
 
h
e
r
e
 
a
r
e
 
s
e
e
n
 
i
n
 
t
h
e
 
f
r
o
n
t
e
n
d
.
 
O
n
e
 
t
y
p
i
c
a
l
 
s
c
e
n
a
r
i
o
 
w
h
e
r
e
 
t
h
i
s
 
m
a
y
 
b
e
 
u
s
e
d
 
i
s
 
i
f
 
t
h
e
 
s
i
t
e
 
a
d
m
i
n
i
s
t
r
a
t
o
r
 
i
s
 
o
r
g
a
n
i
s
i
n
g
 
e
v
e
n
t
s
 
a
r
o
u
n
d
 
t
h
e
 
c
o
u
n
t
r
y
,
 
a
n
d
 
t
h
e
y
 
w
a
n
t
 
t
o
 
s
e
l
l
 
h
o
t
e
l
 
b
o
o
k
i
n
g
s
.
 
T
h
e
y
 
w
o
u
l
d
 
c
r
e
a
t
e
 
t
h
e
 
p
a
r
t
i
c
i
p
a
t
i
n
g
 
h
o
t
e
l
s
 
i
n
 
t
h
e
 
f
r
o
n
t
e
n
d
 
a
s
 
n
o
r
m
a
l
,
 
s
e
t
t
i
n
g
 
r
o
o
m
 
p
r
i
c
e
s
 
e
t
c
,
 
t
h
e
n
 
t
h
e
 
'
t
o
u
r
s
'
 
i
n
 
t
h
i
s
 
c
a
s
e
 
w
o
u
l
d
 
a
c
t
u
a
l
l
y
 
b
e
 
t
h
e
 
a
t
t
e
n
d
a
n
c
e
 
f
e
e
 
f
o
r
 
t
h
e
 
e
v
e
n
t
 
i
t
s
e
l
f
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
I
N
T
R
O
D
U
C
T
I
O
N
_
F
I
R
S
T
T
H
I
N
G
S
F
I
R
S
T
'
,
 
"
O
k
,
 
I
'
v
e
 
i
n
s
t
a
l
l
e
d
 
J
o
m
r
e
s
,
 
w
h
a
t
 
n
e
x
t
?
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
I
N
T
R
O
D
U
C
T
I
O
N
_
F
I
R
S
T
T
H
I
N
G
S
F
I
R
S
T
'
,
 
"
T
h
e
 
v
e
r
y
,
 
v
e
r
y
 
f
i
r
s
t
 
t
h
i
n
g
 
y
o
u
 
s
h
o
u
l
d
 
d
o
,
 
n
o
w
 
t
h
a
t
 
y
o
u
'
v
e
 
i
n
s
t
a
l
l
e
d
 
J
o
m
r
e
s
 
i
s
 
c
l
i
c
k
 
H
e
l
p
 
o
n
 
t
h
e
 
m
e
n
u
 
t
o
 
t
h
e
 
l
e
f
t
,
 
t
h
e
n
 
c
l
i
c
k
 
G
e
t
t
i
n
g
 
S
t
a
r
t
e
d
.
 
S
e
r
i
o
u
s
l
y
,
 
g
o
 
a
w
a
y
 
a
n
d
 
d
o
 
t
h
a
t
 
n
o
w
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
N
A
G
E
_
P
R
O
P
E
R
T
I
E
S
'
,
 
'
M
a
n
a
g
e
 
P
r
o
p
e
r
t
i
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
I
P
I
N
F
O
D
B
_
K
E
Y
_
W
A
R
N
I
N
G
'
,
 
"
Y
o
u
 
d
o
 
n
o
t
 
h
a
v
e
 
a
 
I
P
 
D
e
t
e
c
t
i
o
n
 
A
P
I
 
K
e
y
 
s
e
t
.
 
T
h
i
s
 
i
s
 
r
e
q
u
i
r
e
d
 
t
o
 
a
l
l
o
w
 
t
h
e
 
s
y
s
t
e
m
 
t
o
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
d
e
t
e
c
t
 
t
h
e
 
u
s
e
r
'
s
 
l
o
c
a
t
i
o
n
 
a
n
d
 
s
e
t
 
t
h
e
i
r
 
c
u
r
r
e
n
c
y
 
a
n
d
 
c
o
u
n
t
r
y
 
a
u
t
o
m
a
t
i
c
a
l
l
y
.
 
P
l
e
a
s
e
 
<
a
 
h
r
e
f
=
'
h
t
t
p
:
/
/
w
w
w
.
j
o
m
r
e
s
.
n
e
t
/
m
a
n
u
a
l
/
s
i
t
e
-
m
a
n
a
g
e
r
s
-
g
u
i
d
e
/
3
5
-
c
o
n
t
r
o
l
-
p
a
n
e
l
/
m
a
i
n
/
s
i
t
e
-
c
o
n
f
i
g
u
r
a
t
i
o
n
/
1
2
8
-
s
i
t
e
-
c
o
n
f
i
g
u
r
a
t
i
o
n
-
c
u
r
r
e
n
c
y
-
c
o
n
v
e
r
s
i
o
n
-
c
u
r
r
e
n
c
y
-
c
o
d
e
s
-
t
a
b
'
 
t
a
r
g
e
t
=
'
_
b
l
a
n
k
'
>
s
e
e
 
o
u
r
 
m
a
n
u
a
l
 
p
a
g
e
 
o
n
 
h
o
w
 
t
o
 
c
r
e
a
t
e
 
a
n
 
I
P
 
d
e
t
e
c
t
i
o
n
 
A
P
I
 
k
e
y
<
/
a
>
 
a
n
d
 
s
a
v
e
 
t
h
e
 
k
e
y
 
i
n
 
J
o
m
r
e
s
 
>
 
S
i
t
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
>
 
C
u
r
r
e
n
c
y
 
C
o
n
v
e
r
s
i
o
n
s
 
/
 
C
u
r
r
e
n
c
y
 
C
o
d
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
O
N
F
I
G
_
O
P
E
N
E
X
C
H
A
N
G
E
R
A
T
E
S
_
K
E
Y
_
W
A
R
N
I
N
G
'
,
 
"
Y
o
u
 
d
o
 
n
o
t
 
h
a
v
e
 
a
n
 
O
p
e
n
 
E
x
c
h
a
n
g
e
 
R
a
t
e
s
 
A
P
I
 
K
e
y
 
s
e
t
.
 
T
h
i
s
 
i
s
 
r
e
q
u
i
r
e
d
 
t
o
 
a
l
l
o
w
 
t
h
e
 
s
y
s
t
e
m
 
t
o
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
d
o
w
n
l
o
a
d
 
a
n
d
 
u
s
e
 
c
u
r
r
e
n
c
y
 
e
x
c
h
a
n
g
e
 
r
a
t
e
s
.
 
P
l
e
a
s
e
 
<
a
 
h
r
e
f
=
'
h
t
t
p
:
/
/
w
w
w
.
j
o
m
r
e
s
.
n
e
t
/
m
a
n
u
a
l
/
s
i
t
e
-
m
a
n
a
g
e
r
s
-
g
u
i
d
e
/
3
5
-
c
o
n
t
r
o
l
-
p
a
n
e
l
/
m
a
i
n
/
s
i
t
e
-
c
o
n
f
i
g
u
r
a
t
i
o
n
/
1
2
8
-
s
i
t
e
-
c
o
n
f
i
g
u
r
a
t
i
o
n
-
c
u
r
r
e
n
c
y
-
c
o
n
v
e
r
s
i
o
n
-
c
u
r
r
e
n
c
y
-
c
o
d
e
s
-
t
a
b
'
 
t
a
r
g
e
t
=
'
_
b
l
a
n
k
'
>
s
e
e
 
o
u
r
 
m
a
n
u
a
l
 
p
a
g
e
 
o
n
 
h
o
w
 
t
o
 
c
r
e
a
t
e
 
a
n
 
I
P
 
d
e
t
e
c
t
i
o
n
 
A
P
I
 
k
e
y
<
/
a
>
 
a
n
d
 
s
a
v
e
 
t
h
e
 
k
e
y
 
i
n
 
J
o
m
r
e
s
 
>
 
S
i
t
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
>
 
C
u
r
r
e
n
c
y
 
C
o
n
v
e
r
s
i
o
n
s
 
/
 
C
u
r
r
e
n
c
y
 
C
o
d
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
E
R
M
I
T
_
N
U
M
B
E
R
_
T
I
T
L
E
'
,
 
'
P
e
r
m
i
t
 
n
u
m
b
e
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
E
R
M
I
T
_
N
U
M
B
E
R
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
S
o
m
e
 
c
o
u
n
t
r
i
e
s
 
l
e
g
i
s
l
a
t
e
 
t
h
a
t
 
y
o
u
 
m
u
s
t
 
d
i
s
p
l
a
y
 
a
 
p
e
r
m
i
t
 
n
u
m
b
e
r
 
f
o
r
 
y
o
u
r
 
p
r
o
p
e
r
t
y
.
 
I
f
 
y
o
u
 
h
a
v
e
 
s
u
c
h
 
a
 
n
u
m
b
e
r
,
 
e
n
t
e
r
 
i
t
 
h
e
r
e
 
a
n
d
 
i
t
 
w
i
l
l
 
b
e
 
a
d
d
e
d
 
t
o
 
t
h
e
 
p
r
o
p
e
r
t
y
 
h
e
a
d
e
r
 
s
e
c
t
i
o
n
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
'
,
 
'
S
h
o
r
t
c
o
d
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
I
N
F
O
_
J
O
O
M
L
A
'
,
 
"
T
h
e
 
<
s
t
r
o
n
g
>
p
l
g
_
c
o
n
t
e
n
t
_
j
o
m
r
e
s
_
a
s
a
m
o
d
u
l
e
_
m
a
m
b
o
t
<
/
s
t
r
o
n
g
>
 
p
l
u
g
i
n
 
M
U
S
T
 
b
e
 
i
n
s
t
a
l
l
e
d
 
a
n
d
 
e
n
a
b
l
e
d
 
f
o
r
 
t
h
e
s
e
 
s
h
o
r
t
c
o
d
e
s
 
t
o
 
w
o
r
k
.
 
T
h
i
s
 
c
a
n
 
b
e
 
f
o
u
n
d
 
i
n
 
t
h
e
 
J
o
m
r
e
s
 
P
l
u
g
i
n
 
M
a
n
a
g
e
r
.
 
I
f
 
t
h
i
s
 
s
i
t
e
 
w
a
s
 
b
u
i
l
t
 
u
s
i
n
g
 
o
n
e
 
o
f
 
t
h
e
 
Q
u
i
c
k
s
t
a
r
t
s
 
t
h
e
n
 
i
t
'
s
 
p
r
o
b
a
b
l
y
 
a
l
r
e
a
d
y
 
i
n
s
t
a
l
l
e
d
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
I
N
F
O
_
W
O
R
D
P
R
E
S
S
'
,
 
"
Y
o
u
 
m
u
s
t
 
e
n
s
u
r
e
 
t
h
a
t
 
t
h
e
 
<
s
t
r
o
n
g
>
'
J
o
m
r
e
s
 
S
h
o
r
t
c
o
d
e
s
'
<
/
s
t
r
o
n
g
>
 
p
l
u
g
i
n
 
i
s
 
e
n
a
b
l
e
d
.
 
T
h
i
s
 
c
a
n
 
b
e
 
f
o
u
n
d
 
i
n
 
t
h
e
 
J
o
m
r
e
s
 
P
l
u
g
i
n
 
M
a
n
a
g
e
r
.
 
I
f
 
t
h
i
s
 
s
i
t
e
 
w
a
s
 
b
u
i
l
t
 
u
s
i
n
g
 
o
n
e
 
o
f
 
t
h
e
 
Q
u
i
c
k
s
t
a
r
t
s
 
t
h
e
n
 
i
t
'
s
 
p
r
o
b
a
b
l
y
 
a
l
r
e
a
d
y
 
i
n
s
t
a
l
l
e
d
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
S
H
O
R
T
C
O
D
E
_
T
A
S
K
'
,
 
'
T
a
s
k
'
)
;

j
r
_
d
e
f
i
n
e
(
'
S
H
O
R
T
C
O
D
E
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
D
e
s
c
r
i
p
t
i
o
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
S
H
O
R
T
C
O
D
E
_
A
R
G
U
M
E
N
T
S
'
,
 
'
A
r
g
u
m
e
n
t
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
S
H
O
R
T
C
O
D
E
_
E
X
A
M
P
L
E
'
,
 
'
E
x
a
m
p
l
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
'
,
 
'
F
i
l
e
s
y
s
t
e
m
 
I
n
t
e
g
r
i
t
y
 
C
h
e
c
k
'
)
;

j
r
_
d
e
f
i
n
e
(
'
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
_
D
E
S
C
'
,
 
'
T
h
i
s
 
f
e
a
t
u
r
e
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
c
h
e
c
k
 
t
h
a
t
 
t
h
e
 
f
i
l
e
s
y
s
t
e
m
 
m
a
t
c
h
e
s
 
t
h
a
t
 
s
u
p
p
l
i
e
d
 
i
n
 
t
h
e
 
c
u
r
r
e
n
t
 
v
e
r
s
i
o
n
 
o
f
 
J
o
m
r
e
s
.
 
T
h
i
s
 
i
s
 
u
s
e
f
u
l
 
i
n
 
e
n
s
u
r
i
n
g
 
t
h
a
t
 
a
l
l
 
f
i
l
e
s
 
w
e
r
e
 
u
p
d
a
t
e
d
 
c
o
r
r
e
c
t
l
y
 
a
f
t
e
r
 
i
n
s
t
a
l
l
a
t
i
o
n
/
u
p
g
r
a
d
e
.
 
F
i
l
e
s
 
i
n
 
R
e
d
 
a
r
e
 
m
i
s
s
i
n
g
,
 
f
i
l
e
s
 
i
n
 
O
r
a
n
g
e
 
e
x
i
s
t
 
b
u
t
 
a
r
e
 
d
i
f
f
e
r
e
n
t
 
f
r
o
m
 
t
h
o
s
e
 
s
u
p
p
l
i
e
d
 
i
n
 
t
h
e
 
c
u
r
r
e
n
t
 
b
u
i
l
d
.
 
O
n
l
y
 
f
i
i
l
e
s
 
t
h
a
t
 
a
r
e
 
p
o
t
e
n
t
i
a
l
 
p
r
o
b
l
e
m
s
 
w
i
l
l
 
b
e
 
l
i
s
t
e
d
 
h
e
r
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
_
F
I
L
E
N
A
M
E
'
,
 
'
F
i
l
e
s
y
s
t
e
m
 
I
n
t
e
g
r
i
t
y
 
C
h
e
c
k
'
)
;

j
r
_
d
e
f
i
n
e
(
'
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
_
L
O
C
A
L
H
A
S
H
'
,
 
'
L
o
c
a
l
 
h
a
s
h
'
)
;

j
r
_
d
e
f
i
n
e
(
'
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
_
B
U
I
L
D
H
A
S
H
'
,
 
'
V
e
r
s
i
o
n
 
h
a
s
h
'
)
;

j
r
_
d
e
f
i
n
e
(
'
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
_
N
O
P
R
O
B
L
E
M
S
'
,
 
'
A
w
e
s
o
m
e
!
 
N
o
 
p
r
o
b
l
e
m
s
 
w
e
r
e
 
f
o
u
n
d
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
O
P
E
R
T
Y
T
Y
P
E
_
M
A
R
K
E
R
'
,
 
'
G
o
o
g
l
e
 
m
a
p
s
 
m
a
r
k
e
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
J
A
V
A
S
C
R
I
P
T
_
R
E
A
D
M
O
R
E
'
,
 
'
R
e
a
d
 
m
o
r
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
J
A
V
A
S
C
R
I
P
T
_
R
E
A
D
L
E
S
S
'
,
 
'
R
e
a
d
 
l
e
s
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
O
U
R
I
S
T
_
T
A
X
_
T
I
T
L
E
'
,
 
'
T
o
u
r
i
s
t
 
t
a
x
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
O
U
R
I
S
T
_
T
A
X
_
T
A
X
R
A
T
E
'
,
 
'
T
o
u
r
i
s
t
 
t
a
x
 
r
a
t
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
O
U
R
I
S
T
_
T
A
X
_
T
A
X
R
A
T
E
_
D
E
S
C
'
,
 
'
S
e
t
 
t
h
e
 
t
o
u
r
i
s
t
 
t
a
x
 
r
a
t
e
.
 
T
h
e
 
t
o
u
r
i
s
t
 
t
a
x
 
i
s
 
o
n
l
y
 
c
a
l
c
u
l
a
t
e
d
 
a
f
t
e
r
 
t
h
e
 
i
n
i
t
i
a
l
 
b
o
o
k
i
n
g
 
i
s
 
g
e
n
e
r
a
t
e
d
,
 
a
n
d
 
i
s
 
a
d
d
e
d
 
t
o
 
t
h
e
 
b
o
o
k
i
n
g
 
c
o
n
f
i
r
m
a
t
i
o
n
 
p
a
g
e
,
 
i
n
 
t
h
e
 
e
x
t
r
a
 
s
e
r
v
i
c
e
s
 
b
o
x
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
O
U
R
I
S
T
_
T
A
X
_
P
E
R
C
E
N
T
A
G
E
_
Y
E
S
N
O
'
,
 
'
I
s
 
p
e
r
c
e
n
t
a
g
e
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
O
U
R
I
S
T
_
T
A
X
_
P
E
R
C
E
N
T
A
G
E
_
Y
E
S
N
O
_
D
E
S
C
'
,
 
"
S
e
t
 
t
h
i
s
 
t
o
 
Y
e
s
 
i
f
 
t
h
e
 
t
a
x
 
i
s
 
a
 
p
e
r
c
e
n
t
a
g
e
 
o
r
 
N
o
 
i
f
 
i
t
'
s
 
a
 
f
l
a
t
 
f
e
e
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
O
U
R
I
S
T
_
T
A
X
_
W
H
O
L
E
B
O
O
K
I
N
G
_
Y
E
S
N
O
'
,
 
'
A
f
f
e
c
t
s
 
t
h
e
 
e
n
t
i
r
e
 
b
o
o
k
i
n
g
 
v
a
l
u
e
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
O
U
R
I
S
T
_
T
A
X
_
W
H
O
L
E
B
O
O
K
I
N
G
_
Y
E
S
N
O
_
D
E
S
C
'
,
 
"
S
e
t
 
t
h
i
s
 
t
o
 
Y
e
s
 
i
f
 
t
h
e
 
t
a
x
 
i
s
 
t
o
 
c
o
v
e
r
 
t
h
e
 
e
n
t
i
r
e
 
v
a
l
u
e
 
o
f
 
t
h
e
 
b
o
o
k
i
n
g
,
 
s
o
 
i
t
 
i
s
 
a
 
p
e
r
c
e
n
t
a
g
e
 
o
f
 
b
o
t
h
 
t
h
e
 
a
c
c
o
m
m
o
d
a
t
i
o
n
 
p
l
u
s
 
a
n
y
 
e
x
t
r
a
s
,
 
o
r
 
N
o
 
i
f
 
i
t
 
i
s
 
o
n
l
y
 
c
a
l
c
u
l
a
t
e
d
 
b
a
s
e
d
 
o
n
l
y
 
o
n
 
t
h
e
 
v
a
l
u
e
 
o
f
 
t
h
e
 
a
c
c
o
m
m
o
d
a
t
i
o
n
 
t
o
t
a
l
.
 
I
f
 
t
h
e
 
o
p
t
i
o
n
 
'
I
s
 
P
e
r
c
e
n
t
a
g
e
'
 
a
b
o
v
e
 
i
s
 
s
e
t
 
t
o
 
N
o
,
 
t
h
e
n
 
t
h
i
s
 
o
p
t
i
o
n
 
i
s
 
i
g
n
o
r
e
d
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
O
U
R
I
S
T
_
T
A
X
_
N
O
T
E
'
,
 
'
P
l
e
a
s
e
 
b
e
 
a
w
a
r
e
 
t
h
a
t
 
a
 
t
o
u
r
i
s
t
 
t
a
x
 
w
i
l
l
 
b
e
 
a
d
d
e
d
 
t
o
 
t
h
i
s
 
b
o
o
k
i
n
g
.
 
Y
o
u
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
s
e
e
 
t
h
e
 
t
a
x
 
o
n
 
t
h
e
 
r
e
v
i
e
w
 
b
o
o
k
i
n
g
 
p
a
g
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
N
O
_
L
I
C
E
N
S
E
_
M
E
S
S
A
G
E
'
,
 
"
Y
o
u
 
h
a
v
e
 
n
o
t
 
s
a
v
e
d
 
a
 
l
i
c
e
n
s
e
 
n
u
m
b
e
r
 
i
n
 
S
i
t
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
,
 
t
h
e
r
e
f
o
r
e
 
y
o
u
 
w
i
l
l
 
n
o
t
 
b
e
 
a
b
l
e
 
t
o
 
d
o
w
n
l
o
a
d
 
p
l
u
g
i
n
s
.
 
O
n
c
e
 
y
o
u
 
h
a
v
e
 
a
 
v
a
l
i
d
 
l
i
c
e
n
s
e
 
k
e
y
 
s
a
v
e
d
 
t
h
e
n
 
y
o
u
'
l
l
 
b
e
 
a
b
l
e
 
t
o
 
i
n
s
t
a
l
l
 
a
n
y
 
p
l
u
g
i
n
s
 
t
h
a
t
 
a
r
e
 
l
i
s
t
e
d
 
a
s
 
C
o
r
e
 
p
l
u
g
i
n
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
I
N
V
A
L
I
D
_
L
I
C
E
N
S
E
_
M
E
S
S
A
G
E
'
,
 
"
Y
o
u
 
s
e
e
m
 
t
o
 
b
e
 
u
s
i
n
g
 
a
 
l
i
c
e
n
s
e
 
n
u
m
b
e
r
 
t
h
a
t
'
s
 
i
n
v
a
l
i
d
 
o
r
 
h
a
s
 
e
x
p
i
r
e
d
.
 
O
n
c
e
 
y
o
u
 
h
a
v
e
 
a
 
v
a
l
i
d
 
l
i
c
e
n
s
e
 
k
e
y
 
s
a
v
e
d
 
t
h
e
n
 
y
o
u
'
l
l
 
b
e
 
a
b
l
e
 
t
o
 
i
n
s
t
a
l
l
 
a
n
y
 
p
l
u
g
i
n
s
 
t
h
a
t
 
a
r
e
 
l
i
s
t
e
d
 
a
s
 
C
o
r
e
 
p
l
u
g
i
n
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
V
A
L
I
D
_
L
I
C
E
N
S
E
_
M
E
S
S
A
G
E
'
,
 
"
C
o
n
g
r
a
t
u
l
a
t
i
o
n
s
,
 
y
o
u
'
r
e
 
u
s
i
n
g
 
a
 
v
a
l
i
d
 
l
i
c
e
n
s
e
 
n
u
m
b
e
r
 
a
n
d
 
c
a
n
 
i
n
s
t
a
l
l
 
C
o
r
e
 
p
l
u
g
i
n
s
 
t
h
r
o
u
g
h
 
t
h
e
 
J
o
m
r
e
s
 
p
l
u
g
i
n
 
m
a
n
a
g
e
r
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
M
R
P
'
,
 
'
T
h
i
s
 
p
a
g
e
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
a
n
d
 
t
h
e
 
t
h
i
n
g
s
 
y
o
u
 
o
f
f
e
r
.
 
I
t
 
h
a
s
 
o
n
e
 
m
a
i
n
 
b
u
t
t
o
n
,
 
a
n
d
 
a
 
s
e
c
o
n
d
 
b
u
t
t
o
n
 
t
h
a
t
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
s
e
l
e
c
t
 
s
p
e
c
i
f
i
c
 
r
e
s
o
u
r
c
e
s
 
t
o
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
.
 
S
o
,
 
t
h
e
 
M
a
i
n
 
p
r
o
p
e
r
t
y
 
i
m
a
g
e
 
a
n
d
 
t
h
e
 
S
l
i
d
e
s
h
o
w
 
w
i
l
l
 
o
n
l
y
 
s
h
o
w
 
o
n
e
 
b
u
t
t
o
n
 
b
u
t
 
i
f
 
y
o
u
 
h
a
v
e
 
c
r
e
a
t
e
d
 
a
n
y
 
e
.
g
.
 
O
p
t
i
o
n
a
l
 
E
x
t
r
a
s
 
o
r
 
R
o
o
m
s
,
 
t
h
e
n
 
y
o
u
 
w
i
l
l
 
s
e
e
 
a
 
s
e
c
o
n
d
 
b
u
t
t
o
n
 
w
h
e
r
e
 
y
o
u
 
c
a
n
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
 
t
h
o
s
e
 
s
p
e
c
i
f
i
c
 
r
e
s
o
u
r
c
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
S
R
P
'
,
 
'
T
h
i
s
 
p
a
g
e
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
a
n
d
 
t
h
e
 
t
h
i
n
g
s
 
y
o
u
 
o
f
f
e
r
.
 
I
t
 
h
a
s
 
o
n
e
 
m
a
i
n
 
b
u
t
t
o
n
,
 
a
n
d
 
a
 
s
e
c
o
n
d
 
b
u
t
t
o
n
 
t
h
a
t
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
s
e
l
e
c
t
 
s
p
e
c
i
f
i
c
 
r
e
s
o
u
r
c
e
s
 
t
o
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
.
 
S
o
,
 
t
h
e
 
M
a
i
n
 
p
r
o
p
e
r
t
y
 
i
m
a
g
e
 
a
n
d
 
t
h
e
 
S
l
i
d
e
s
h
o
w
 
w
i
l
l
 
o
n
l
y
 
s
h
o
w
 
o
n
e
 
b
u
t
t
o
n
 
b
u
t
 
i
f
 
y
o
u
 
h
a
v
e
 
c
r
e
a
t
e
d
 
a
n
y
 
O
p
t
i
o
n
a
l
 
E
x
t
r
a
s
 
t
h
e
n
 
y
o
u
 
w
i
l
l
 
s
e
e
 
a
 
s
e
c
o
n
d
 
b
u
t
t
o
n
 
w
h
e
r
e
 
y
o
u
 
c
a
n
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
 
t
h
o
s
e
 
s
p
e
c
i
f
i
c
 
r
e
s
o
u
r
c
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
G
E
N
E
R
I
C
'
,
 
"
<
o
l
>

 
 
<
l
i
>
F
i
r
s
t
 
c
h
o
o
s
e
 
t
h
e
 
i
m
a
g
e
(
s
)
 
y
o
u
'
d
 
l
i
k
e
 
t
o
 
u
p
l
o
a
d
 
b
y
 
c
l
i
c
k
i
n
g
 
A
d
d
 
I
m
a
g
e
 
o
r
 
u
s
i
n
g
 
D
r
a
g
 
a
n
d
 
D
r
o
p
.
 
T
h
e
s
e
 
w
i
l
l
 
a
p
p
e
a
r
 
i
n
 
t
h
e
 
c
o
l
u
m
n
 
o
n
 
t
h
e
 
r
i
g
h
t
 
h
a
n
d
 
s
i
d
e
.
<
/
l
i
>

 
 
<
l
i
>
A
b
o
v
e
 
t
h
i
s
 
a
r
e
a
,
 
u
s
e
 
t
h
e
 
\
"
C
h
o
o
s
e
 
t
h
e
 
r
e
s
o
u
r
c
e
\
"
 
b
u
t
t
o
n
 
t
o
 
c
h
o
o
s
e
 
w
h
i
c
h
 
r
e
s
o
u
r
c
e
 
y
o
u
 
w
a
n
t
 
t
o
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
.
 
Y
o
u
 
m
a
y
 
b
e
 
o
f
f
e
r
e
d
 
t
h
e
 
o
p
t
i
o
n
 
t
o
 
c
h
o
o
s
e
 
a
 
s
p
e
c
i
f
i
c
 
r
e
s
o
u
r
c
e
 
u
n
d
e
r
n
e
a
t
h
.
 
<
/
l
i
>

 
 
<
l
i
>
 
O
n
c
e
 
y
o
u
'
v
e
 
c
h
o
s
e
n
 
a
 
r
e
s
o
u
r
c
e
 
y
o
u
 
c
a
n
 
t
h
e
n
 
c
l
i
c
k
 
t
h
e
 
U
p
l
o
a
d
 
I
m
a
g
e
 
b
u
t
t
o
n
 
u
n
d
e
r
 
a
n
 
i
m
a
g
e
 
t
o
 
a
s
s
o
c
i
a
t
e
 
i
t
 
w
i
t
h
 
t
h
a
t
 
r
e
s
o
u
r
c
e
.
 
O
n
c
e
 
a
n
 
i
m
a
g
e
 
h
a
s
 
b
e
e
n
 
u
p
l
o
a
d
e
d
,
 
i
t
 
w
i
l
l
 
d
i
s
a
p
p
e
a
r
 
f
r
o
m
 
t
h
e
 
c
o
l
u
m
n
 
o
n
 
t
h
e
 
r
i
g
h
t
 
h
a
n
d
 
s
i
t
e
,
 
a
n
d
 
a
p
p
e
a
r
 
i
n
 
t
h
e
 
l
e
f
t
.
<
/
l
i
>

 
 
<
l
i
>
U
s
e
 
t
h
e
 
T
r
a
s
h
 
b
u
t
t
o
n
 
n
e
x
t
 
t
o
 
e
x
i
s
t
i
n
g
 
i
m
a
g
e
s
 
t
o
 
r
e
m
o
v
e
 
i
m
a
g
e
s
 
y
o
u
 
n
o
 
l
o
n
g
e
r
 
w
a
n
t
 
t
o
 
b
e
 
s
h
o
w
n
.
<
/
l
i
>

 
 
<
l
i
>
Y
o
u
 
c
a
n
 
c
h
a
n
g
e
 
t
h
e
 
o
r
d
e
r
 
t
h
a
t
 
f
i
l
e
s
 
a
r
e
 
s
h
o
w
n
 
i
n
 
t
h
e
 
s
l
i
d
e
s
h
o
w
 
b
y
 
r
e
n
a
m
i
n
g
 
t
h
e
m
 
b
e
f
o
r
e
 
u
p
l
o
a
d
i
n
g
 
t
h
e
m
,
 
a
s
 
t
h
e
y
 
a
r
e
 
d
i
s
p
l
a
y
e
d
 
i
n
 
p
a
g
e
s
 
i
n
 
a
l
p
h
a
b
e
t
i
c
a
l
 
o
r
d
e
r
.
<
/
l
i
>

<
/
o
l
>

 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
P
R
E
V
I
E
W
'
,
 
"
N
e
x
t
 
t
o
 
t
h
e
 
R
e
s
o
u
r
c
e
 
b
u
t
t
o
n
,
 
y
o
u
 
m
a
y
 
s
e
e
 
a
 
P
r
e
v
i
e
w
 
b
u
t
t
o
n
.
 
I
f
 
y
o
u
 
c
l
i
c
k
 
o
n
 
t
h
i
s
 
y
o
u
 
w
i
l
l
 
s
e
e
 
a
 
p
o
p
u
p
 
t
h
a
t
 
s
h
o
w
s
 
y
o
u
 
h
o
w
 
t
h
e
 
c
u
r
r
e
n
t
l
y
 
u
p
l
o
a
d
e
d
 
i
m
a
g
e
s
 
w
i
l
l
 
l
o
o
k
 
i
n
 
a
 
p
a
g
e
.
 
T
h
i
s
 
h
e
l
p
s
 
t
o
 
g
i
v
e
 
y
o
u
 
a
n
 
i
d
e
a
 
o
f
 
h
o
w
 
t
h
e
 
i
m
a
g
e
s
 
w
i
l
l
 
l
o
o
k
 
t
o
 
y
o
u
r
 
c
u
s
t
o
m
e
r
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
L
I
M
I
T
A
T
I
O
N
S
'
,
 
"
T
h
e
r
e
 
i
s
 
n
o
 
l
i
m
i
t
 
t
o
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
i
m
a
g
e
s
 
y
o
u
 
c
a
n
 
u
p
l
o
a
d
.
 
I
m
a
g
e
s
 
a
r
e
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
r
e
s
i
z
e
d
 
w
h
e
n
 
t
h
e
y
 
a
r
e
 
u
p
l
o
a
d
e
d
.
 
Y
o
u
 
c
a
n
 
o
n
l
y
 
u
p
l
o
a
d
 
J
P
G
 
a
n
d
 
P
N
G
 
f
i
l
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
I
M
A
G
E
_
R
E
S
O
L
U
T
I
O
N
_
P
R
E
'
,
 
"
I
d
e
a
l
l
y
 
a
n
y
 
i
m
a
g
e
s
 
y
o
u
 
u
p
l
o
a
d
 
w
o
u
l
d
 
b
e
 
a
t
 
l
e
a
s
t
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
I
M
A
G
E
_
R
E
S
O
L
U
T
I
O
N
_
P
O
S
T
'
,
 
"
 
p
i
x
e
l
s
 
w
i
d
e
,
 
o
t
h
e
r
w
i
s
e
 
t
h
e
y
 
m
a
y
 
l
o
o
k
 
f
u
z
z
y
 
a
f
t
e
r
 
t
h
e
y
'
v
e
 
b
e
e
n
 
u
p
l
o
a
d
e
d
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
F
I
L
E
S
I
Z
E
_
P
R
E
'
,
 
"
A
n
y
 
i
m
a
g
e
s
 
y
o
u
 
u
p
l
o
a
d
 
c
a
n
n
o
t
 
b
e
 
m
o
r
e
 
t
h
a
n
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
F
I
L
E
S
I
Z
E
_
P
O
S
T
'
,
 
"
 
i
n
 
s
i
z
e
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
'
,
 
"
C
h
o
o
s
e
 
t
h
e
 
r
e
s
o
u
r
c
e
 
y
o
u
 
w
a
n
t
 
t
o
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
S
P
E
C
I
F
I
C
'
,
 
"
S
p
e
c
i
f
i
c
 
r
e
s
o
u
r
c
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
A
L
R
E
A
D
Y
_
U
P
L
O
A
D
E
D
'
,
 
"
I
m
a
g
e
s
 
a
l
r
e
a
d
y
 
u
p
l
o
a
d
e
d
 
f
o
r
 
t
h
i
s
 
r
e
s
o
u
r
c
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
T
I
T
L
E
'
,
 
'
T
e
x
t
 
f
o
r
m
a
t
t
i
n
g
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
D
E
S
C
'
,
 
'
Y
o
u
 
c
a
n
 
e
n
t
e
r
 
t
e
x
t
 
h
e
r
e
 
u
s
i
n
g
 
s
i
m
p
l
e
 
M
a
r
k
d
o
w
n
 
f
o
r
m
a
t
t
i
n
g
.
 
Y
o
u
 
d
o
n
\
'
t
 
n
e
e
d
 
t
o
 
k
n
o
w
 
a
n
y
 
H
T
M
L
,
 
j
u
s
t
 
u
s
e
 
t
h
e
 
b
u
t
t
o
n
s
 
t
o
 
m
a
k
e
 
t
h
e
 
i
n
f
o
r
m
a
t
i
o
n
 
l
o
o
k
 
l
i
k
e
 
y
o
u
 
w
a
n
t
,
 
o
r
 
f
o
r
m
a
t
 
t
e
x
t
 
a
c
c
o
r
d
i
n
g
 
t
o
 
t
h
e
s
e
 
e
x
a
m
p
l
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
E
M
P
H
A
S
I
S
'
,
 
'
E
m
p
h
a
s
i
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
B
O
L
D
'
,
 
'
b
o
l
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
I
T
A
L
I
C
S
'
,
 
'
i
t
a
l
i
c
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
S
T
R
I
K
E
T
H
R
O
U
G
H
'
,
 
'
s
t
r
i
k
e
t
h
r
o
u
g
h
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
H
E
A
D
E
R
S
'
,
 
"
H
e
a
d
e
r
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
B
I
G
H
E
A
D
E
R
'
,
 
'
B
i
g
 
h
e
a
d
e
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
M
E
D
I
U
M
H
E
A
D
E
R
'
,
 
"
M
e
d
i
u
m
 
h
e
a
d
e
r
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
S
M
A
L
L
H
E
A
D
E
R
'
,
 
'
S
m
a
l
l
 
h
e
a
d
e
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
T
I
N
Y
H
E
A
D
E
R
'
,
 
'
T
i
n
y
 
h
e
a
d
e
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
L
I
S
T
S
'
,
 
"
L
i
s
t
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
G
E
N
E
R
I
C
L
I
S
T
I
T
E
M
'
,
 
'
G
e
n
e
r
i
c
 
l
i
s
t
 
i
t
e
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
N
U
M
B
E
R
E
D
L
I
S
T
I
T
E
M
'
,
 
'
N
u
m
b
e
r
e
d
 
l
i
s
t
 
i
t
e
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
L
I
N
K
S
'
,
 
'
L
i
n
k
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
L
I
N
K
S
T
E
X
T
'
,
 
'
T
e
x
t
 
t
o
 
d
i
s
p
l
a
y
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
Q
U
O
T
E
S
'
,
 
'
Q
u
o
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
T
H
I
S
I
S
A
Q
U
O
T
E
'
,
 
'
T
h
i
s
 
i
s
 
a
 
q
u
o
t
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
Q
U
O
T
E
M
U
L
T
I
P
L
E
'
,
 
'
I
t
 
c
a
n
 
s
p
a
n
 
m
u
l
t
i
p
l
e
 
l
i
n
e
s
!
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
I
M
A
G
E
S
'
,
 
'
I
m
a
g
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
T
A
B
L
E
'
,
 
'
T
a
b
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
C
O
L
U
M
N
'
,
 
'
C
o
l
u
m
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
P
R
O
P
E
R
T
Y
L
I
S
T
_
I
M
A
G
E
S
_
A
S
_
S
L
I
D
E
S
H
O
W
'
,
 
'
S
h
o
w
 
p
r
o
p
e
r
t
y
 
i
m
a
g
e
s
 
a
s
 
s
l
i
d
e
s
h
o
w
 
i
n
 
p
r
o
p
e
r
t
y
 
l
i
s
t
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
P
R
O
P
E
R
T
Y
L
I
S
T
_
I
M
A
G
E
S
_
A
S
_
S
L
I
D
E
S
H
O
W
_
D
E
S
C
'
,
 
'
I
f
 
s
e
t
 
t
o
 
y
e
s
,
 
a
 
s
l
i
d
e
s
h
o
w
 
o
f
 
p
r
o
p
e
r
t
y
 
m
a
i
n
 
i
m
a
g
e
s
 
w
i
l
l
 
b
e
 
d
i
s
p
l
a
y
e
d
.
 
I
f
 
s
e
t
 
t
o
 
n
o
,
 
t
h
e
n
 
t
h
e
 
f
i
r
s
t
 
p
r
o
p
e
r
t
y
 
m
a
i
n
 
i
m
a
g
e
 
w
i
l
l
 
b
e
 
d
i
s
p
l
a
y
e
d
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
E
D
I
T
_
C
M
S
_
U
S
E
R
'
,
 
'
E
d
i
t
 
C
M
S
 
u
s
e
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
B
O
O
K
I
N
G
_
M
A
D
E
_
B
Y
'
,
 
'
B
o
o
k
i
n
g
 
m
a
d
e
 
b
y
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
O
U
T
E
R
_
F
E
A
T
U
R
E
S
'
,
 
'
A
m
e
n
i
t
i
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
O
U
T
E
R
_
R
O
O
M
T
Y
P
E
S
'
,
 
'
R
o
o
m
 
T
y
p
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
_
F
O
R
M
_
E
X
T
E
R
N
A
L
_
U
R
L
'
,
 
'
E
x
t
e
r
n
a
l
 
b
o
o
k
i
n
g
 
f
o
r
m
 
U
R
L
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
_
F
O
R
M
_
E
X
T
E
R
N
A
L
_
U
R
L
_
D
E
S
C
'
,
 
'
H
e
r
e
 
y
o
u
 
c
a
n
 
s
e
t
 
a
n
 
e
x
t
e
r
n
a
l
 
U
R
L
 
i
f
 
y
o
u
 
w
a
n
t
 
t
o
 
u
s
e
 
a
 
3
r
d
 
p
a
r
t
y
 
w
e
b
s
i
t
e
 
f
o
r
 
m
a
k
i
n
g
 
b
o
o
k
i
n
g
s
.
 
A
l
l
 
j
o
m
r
e
s
 
b
o
o
k
i
n
g
 
b
u
t
t
o
n
s
 
w
i
l
l
 
p
o
i
n
t
 
t
o
 
t
h
i
s
 
U
R
L
.
 
L
e
a
v
e
 
t
h
i
s
 
f
i
e
l
d
 
b
l
a
n
k
 
i
f
 
y
o
u
 
w
a
n
t
 
t
o
 
u
s
e
 
t
h
e
 
J
o
m
r
e
s
 
b
o
o
k
i
n
g
 
f
o
r
m
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
O
O
M
_
T
A
G
L
I
N
E
'
,
 
'
T
a
g
l
i
n
e
 
(
s
h
o
r
t
 
r
o
o
m
 
d
e
s
c
r
i
p
t
i
o
n
/
s
u
b
t
i
t
l
e
)
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
O
O
M
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
R
o
o
m
 
D
e
s
c
r
i
p
t
i
o
n
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
G
U
E
S
T
_
B
L
A
C
K
L
I
S
T
E
D
'
,
 
'
G
u
e
s
t
 
b
l
a
c
k
l
i
s
t
e
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
G
U
E
S
T
_
B
L
A
C
K
L
I
S
T
E
D
_
D
E
S
C
'
,
 
'
I
f
 
t
h
i
s
 
g
u
e
s
t
 
i
s
 
b
l
a
c
k
 
l
i
s
t
e
d
 
t
h
e
n
 
t
h
e
y
 
w
i
l
l
 
n
o
 
l
o
n
g
e
r
 
b
e
 
a
b
l
e
 
t
o
 
m
a
k
e
 
b
o
o
k
i
n
g
s
 
i
n
 
t
h
i
s
 
p
r
o
p
e
r
t
y
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
E
S
S
I
O
N
_
H
A
N
D
L
E
R
'
,
 
'
S
e
s
s
i
o
n
 
h
a
n
d
l
e
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
E
S
S
I
O
N
_
H
A
N
D
L
E
R
_
D
E
S
C
'
,
 
'
S
a
v
e
 
j
o
m
r
e
s
 
s
e
s
s
i
o
n
 
f
i
l
e
s
 
t
o
 
d
i
s
k
 
o
r
 
t
o
 
d
a
t
a
b
a
s
e
.
 
R
e
c
o
m
m
e
n
d
e
d
:
 
d
a
t
a
b
a
s
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
P
_
H
E
I
G
H
T
'
,
"
M
a
p
 
h
e
i
g
h
t
 
(
p
x
)
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
P
_
Z
O
O
M
L
E
V
E
L
'
,
"
M
a
p
 
z
o
o
m
 
l
e
v
e
l
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
P
_
M
A
P
T
Y
P
E
'
,
"
M
a
p
 
t
y
p
e
 
"
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
S
'
,
"
T
e
m
p
l
a
t
e
 
O
v
e
r
r
i
d
e
 
M
a
n
a
g
e
r
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
S
_
L
E
A
D
'
,
"
T
e
m
p
l
a
t
e
 
p
a
c
k
a
g
e
s
 
a
r
e
 
p
l
u
g
i
n
s
 
t
h
a
t
 
c
a
n
 
p
r
o
v
i
d
e
 
o
v
e
r
r
i
d
e
 
t
e
m
p
l
a
t
e
s
 
f
o
r
 
v
a
r
i
o
u
s
 
c
o
r
e
 
J
o
m
r
e
s
 
t
e
m
p
l
a
t
e
 
f
i
l
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
S
_
I
N
F
O
'
,
"
T
h
i
s
 
p
a
g
e
 
l
i
s
t
s
 
a
n
y
 
t
e
m
p
l
a
t
e
 
f
i
l
e
s
 
t
h
a
t
 
c
a
n
 
b
e
 
o
v
e
r
r
i
d
d
e
n
 
b
y
 
a
 
t
e
m
p
l
a
t
e
 
p
a
c
k
a
g
e
'
s
 
t
e
m
p
l
a
t
e
 
f
i
l
e
s
.
 
I
f
 
y
o
u
 
w
a
n
t
 
t
o
 
o
v
e
r
r
i
d
e
 
a
 
c
e
r
t
a
i
n
 
t
e
m
p
l
a
t
e
 
f
i
l
e
,
 
c
l
i
c
k
 
o
n
 
t
h
e
 
e
d
i
t
 
b
u
t
t
o
n
 
f
o
r
 
t
h
a
t
 
f
i
l
e
,
 
o
n
 
t
h
e
 
n
e
x
t
 
p
a
g
e
 
y
o
u
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
c
h
o
o
s
e
 
w
h
i
c
h
 
v
e
r
s
i
o
n
 
y
o
u
 
w
a
n
t
 
t
o
 
o
v
e
r
r
i
d
e
 
w
i
t
h
.
 
N
o
t
e
,
 
t
h
e
s
e
 
o
v
e
r
r
i
d
e
s
 
t
a
k
e
 
p
r
i
o
r
i
t
y
 
o
v
e
r
 
b
o
t
h
 
J
o
m
r
e
s
 
C
o
r
e
 
a
n
d
 
a
n
y
 
W
o
r
d
p
r
e
s
s
 
o
r
 
J
o
o
m
l
a
 
t
h
e
m
e
/
t
e
m
p
l
a
t
e
 
o
v
e
r
r
i
d
e
s
.
 
Y
o
u
 
c
a
n
 
d
i
s
a
b
l
e
 
a
n
 
o
v
e
r
r
i
d
e
 
b
y
 
d
e
l
e
t
i
n
g
 
i
t
 
i
n
 
t
h
e
 
L
i
s
t
 
T
e
m
p
l
a
t
e
 
O
v
e
r
r
i
d
e
s
 
p
a
g
e
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
_
N
A
M
E
'
,
"
T
e
m
p
l
a
t
e
 
n
a
m
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
_
P
A
T
H
'
,
"
C
u
r
r
e
n
t
 
p
a
t
h
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
_
N
O
T
_
O
V
E
R
R
I
D
D
E
N
'
,
"
N
o
t
 
o
v
e
r
r
i
d
d
e
n
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
S
_
E
D
I
T
_
I
N
F
O
'
,
"
Y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
w
h
i
c
h
 
t
e
m
p
l
a
t
e
 
f
i
l
e
 
t
o
 
o
v
e
r
r
i
d
e
 
t
h
e
 
C
o
r
e
 
t
e
m
p
l
a
t
e
 
f
i
l
e
s
 
b
y
 
c
h
a
n
g
i
n
g
 
t
h
e
 
d
r
o
p
d
o
w
n
"
)
;



j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
O
V
E
R
A
L
L
_
R
O
O
M
S
_
B
O
O
K
E
D
'
,
"
P
e
r
c
e
n
t
a
g
e
 
R
o
o
m
s
 
B
o
o
k
e
d
"
)
;



j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
O
V
E
R
A
L
L
_
R
O
O
M
S
_
B
O
O
K
E
D
'
,
"
P
e
r
c
e
n
t
a
g
e
 
R
o
o
m
s
 
B
o
o
k
e
d
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
E
L
E
C
T
_
W
I
D
G
E
T
S
'
,
"
S
e
l
e
c
t
 
w
i
d
g
e
t
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
I
N
T
E
R
V
A
L
'
,
"
I
n
t
e
r
v
a
l
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
I
M
E
L
I
N
E
'
,
"
T
i
m
e
l
i
n
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
P
A
N
E
L
_
G
R
I
D
'
,
"
C
o
n
t
r
o
l
 
p
a
n
e
l
 
h
o
m
e
 
l
a
y
o
u
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
C
P
A
N
E
L
_
G
R
I
D
_
D
E
S
C
'
,
"
S
e
l
e
c
t
 
t
h
e
 
g
r
i
d
 
l
a
y
o
u
t
 
o
f
 
y
o
u
r
 
f
r
o
n
t
e
n
d
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
m
e
n
t
 
c
o
n
t
r
o
l
 
p
a
n
e
l
 
h
o
m
e
 
p
a
g
e
.
"
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
U
P
L
O
A
D
_
C
O
N
T
E
X
T
_
M
A
R
K
E
R
_
I
M
A
G
E
S
'
,
"
G
o
o
g
l
e
 
M
a
p
 
M
a
r
k
e
r
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
U
P
L
O
A
D
_
C
O
N
T
E
X
T
_
T
O
W
N
_
I
M
A
G
E
S
'
,
"
T
o
w
n
 
i
m
a
g
e
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
T
Y
P
E
_
C
H
A
N
G
E
_
W
A
R
N
I
N
G
'
,
"
C
h
a
n
g
i
n
g
 
t
h
e
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
w
i
l
l
 
d
e
l
e
t
e
 
a
l
l
 
r
o
o
m
s
,
 
t
a
r
i
f
f
s
,
 
p
r
o
p
e
r
t
y
 
s
e
t
t
i
n
g
s
 
a
n
d
 
r
e
s
e
t
 
a
v
a
i
l
a
b
i
l
i
t
y
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
E
R
S
I
O
N
C
H
E
C
K
_
V
E
R
S
I
O
N
W
A
R
N
I
N
G
_
U
P
D
A
T
E
I
N
F
O
'
,
 
'
P
l
e
a
s
e
 
n
o
t
e
,
 
a
f
t
e
r
 
u
p
d
a
t
i
n
g
 
y
o
u
 
m
u
s
t
 
u
p
d
a
t
e
 
a
n
y
 
J
o
m
r
e
s
 
P
l
u
g
i
n
s
 
t
h
a
t
 
a
r
e
 
a
l
r
e
a
d
y
 
i
n
s
t
a
l
l
e
d
,
 
t
h
r
o
u
g
h
 
t
h
e
 
J
o
m
r
e
s
 
p
l
u
g
i
n
 
m
a
n
a
g
e
r
.
 
I
f
 
y
o
u
 
h
a
v
e
 
C
o
r
e
 
p
l
u
g
i
n
s
 
i
n
s
t
a
l
l
e
d
,
 
b
u
t
 
d
o
 
n
o
t
 
h
a
v
e
 
a
 
v
a
l
i
d
 
J
o
m
r
e
s
 
l
i
c
e
n
s
e
 
t
h
e
n
 
w
e
 
<
e
m
>
d
o
 
n
o
t
<
/
e
m
>
 
r
e
c
o
m
m
e
n
d
 
t
h
a
t
 
y
o
u
 
u
p
d
a
t
e
 
J
o
m
r
e
s
 
a
s
 
o
l
d
e
r
 
p
l
u
g
i
n
s
 
o
f
t
e
n
 
m
a
y
 
n
o
t
 
w
o
r
k
 
w
i
t
h
 
n
e
w
e
r
 
v
e
r
s
i
o
n
s
 
o
f
 
J
o
m
r
e
s
.
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
E
R
S
I
O
N
C
H
E
C
K
_
V
E
R
S
I
O
N
W
A
R
N
I
N
G
_
U
P
D
A
T
E
I
N
F
O
_
K
E
Y
V
A
L
I
D
'
,
 
'
P
l
e
a
s
e
 
n
o
t
e
,
 
a
f
t
e
r
 
u
p
d
a
t
i
n
g
 
y
o
u
 
m
u
s
t
 
u
p
d
a
t
e
 
a
n
y
 
J
o
m
r
e
s
 
P
l
u
g
i
n
s
 
t
h
a
t
 
a
r
e
 
a
l
r
e
a
d
y
 
i
n
s
t
a
l
l
e
d
,
 
t
h
r
o
u
g
h
 
t
h
e
 
J
o
m
r
e
s
 
p
l
u
g
i
n
 
m
a
n
a
g
e
r
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
V
E
R
S
I
O
N
C
H
E
C
K
_
V
E
R
S
I
O
N
W
A
R
N
I
N
G
_
R
E
N
E
W
A
L
S
'
,
 
"
I
f
 
y
o
u
 
w
o
u
l
d
 
l
i
k
e
 
t
o
 
u
p
d
a
t
e
 
J
o
m
r
e
s
 
a
n
d
 
i
t
'
s
 
p
l
u
g
i
n
s
 
y
o
u
 
w
i
l
l
 
n
e
e
d
 
a
 
r
e
n
e
w
a
l
 
l
i
c
e
n
s
e
.
 
P
l
e
a
s
e
 
v
i
s
i
t
 
<
a
 
h
r
e
f
=
'
h
t
t
p
s
:
/
/
w
w
w
.
j
o
m
r
e
s
.
n
e
t
/
p
r
i
c
i
n
g
'
 
t
a
r
g
e
t
=
'
_
b
l
a
n
k
'
>
o
u
r
 
s
i
t
e
<
/
a
>
 
f
o
r
 
m
o
r
e
 
i
n
f
o
r
m
a
t
i
o
n
.
 
I
n
 
m
o
s
t
 
c
a
s
e
s
 
t
h
e
s
e
 
l
i
c
e
n
s
e
s
 
a
r
e
 
5
0
%
 
o
f
 
t
h
e
 
p
r
i
c
e
 
o
f
 
a
 
f
u
l
l
 
l
i
c
e
n
s
e
.
 
P
l
e
a
s
e
 
e
n
s
u
r
e
 
t
h
a
t
 
y
o
u
 
h
a
v
e
 
l
o
g
g
e
d
 
i
n
t
o
 
o
u
r
 
s
h
o
p
 
b
e
f
o
r
e
 
a
t
t
e
m
p
t
i
n
g
 
t
o
 
p
u
r
c
h
a
s
e
 
a
 
r
e
n
e
w
a
l
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
A
Y
M
E
N
T
_
M
E
T
H
O
D
_
U
S
E
D
'
,
"
P
a
y
m
e
n
t
 
m
e
t
h
o
d
 
:
 
"
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
P
R
I
C
E
S
'
,
"
B
u
y
 
J
o
m
r
e
s
"
)
;



j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
T
I
T
L
E
'
,
"
A
p
p
 
k
e
y
 
m
a
n
a
g
e
m
e
n
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
A
P
P
S
'
,
"
R
E
S
T
 
A
P
I
 
c
l
i
e
n
t
 
d
e
t
a
i
l
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
I
D
E
N
T
I
F
I
E
R
'
,
"
I
d
e
n
t
i
f
i
e
r
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
A
P
I
K
E
Y
'
,
"
C
l
i
e
n
t
 
I
D
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
S
E
C
R
E
T
'
,
"
S
e
c
r
e
t
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
C
R
E
A
T
E
D
'
,
"
C
r
e
a
t
e
d
/
U
p
d
a
t
e
d
 
A
p
p
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
C
L
I
E
N
T
_
I
D
_
I
N
F
O
'
,
"
T
h
e
 
C
l
i
e
n
t
 
I
D
 
a
n
d
 
S
e
c
r
e
t
 
a
r
e
 
c
r
e
a
t
e
d
 
f
o
r
 
y
o
u
.
 
T
h
e
 
I
d
e
n
t
i
f
i
e
r
 
i
s
 
s
o
 
t
h
a
t
 
y
o
u
 
c
a
n
 
e
a
s
i
l
y
 
i
d
e
n
t
i
f
y
 
t
h
i
s
 
k
e
y
 
p
a
i
r
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
S
C
O
P
E
_
T
I
T
L
E
'
,
"
P
e
r
m
i
s
s
i
o
n
s
 
(
 
w
h
a
t
 
t
h
e
 
c
l
i
e
n
t
 
c
a
n
 
d
o
 
)
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
S
C
O
P
E
_
C
A
T
E
G
O
R
Y
_
U
S
E
R
'
 
,
 
"
U
s
e
r
 
p
e
r
m
i
s
s
i
o
n
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
S
C
O
P
E
_
C
A
T
E
G
O
R
Y
_
P
R
O
P
E
R
T
I
E
S
'
 
,
 
"
P
r
o
p
e
r
t
y
 
p
e
r
m
i
s
s
i
o
n
s
"
)
;


j
r
_
d
e
f
i
n
e
(
'
A
P
I
_
D
O
C
U
M
E
N
T
A
T
I
O
N
_
T
I
T
L
E
'
,
"
A
p
p
 
R
E
S
T
 
A
P
I
 
d
o
c
u
m
e
n
t
a
t
i
o
n
"
)
;


j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
C
O
N
F
I
G
'
,
"
A
P
I
 
C
o
r
e
 
c
o
n
f
i
g
u
r
a
t
i
o
n
"
)
;


j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
C
O
N
F
I
G
_
S
H
O
W
'
,
"
S
h
o
w
 
A
P
I
 
c
l
i
e
n
t
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
o
p
t
i
o
n
s
 
i
n
 
J
o
m
r
e
s
 
m
a
i
n
 
m
e
n
u
?
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
C
O
N
F
I
G
_
S
H
O
W
_
D
E
S
C
'
,
"
Y
o
u
 
m
a
y
 
c
h
o
o
s
e
 
t
o
 
n
o
t
 
s
h
o
w
 
t
h
e
 
A
P
I
 
c
l
i
e
n
t
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
o
p
t
i
o
n
s
 
i
n
 
t
h
e
 
'
M
y
 
A
c
c
o
u
n
t
'
 
s
e
c
t
i
o
n
 
o
f
 
t
h
e
 
J
o
m
r
e
s
 
m
a
i
n
m
e
n
u
.
 
Y
o
u
 
c
o
u
l
d
 
i
n
s
t
e
a
d
 
d
e
c
i
d
e
 
t
h
a
t
 
y
o
u
 
w
a
n
t
e
d
 
t
o
 
s
h
o
w
 
t
h
e
m
 
o
n
 
o
t
h
e
r
 
p
a
g
e
s
 
u
s
i
n
g
 
J
o
m
r
e
s
 
S
h
o
r
t
c
o
d
e
s
.
"
)
;


j
r
_
d
e
f
i
n
e
(
 
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
A
P
I
_
C
O
R
E
_
D
O
C
S
'
,
 
"
D
i
s
p
l
a
y
s
 
t
h
e
 
A
P
I
 
c
o
r
e
 
d
o
c
u
m
e
n
t
a
t
i
o
n
 
p
a
g
e
.
 
T
h
e
 
A
P
I
 
C
o
r
e
 
a
l
l
o
w
s
 
u
s
e
r
s
 
t
o
 
c
r
e
a
t
e
 
A
P
I
 
c
l
i
e
n
t
s
,
 
w
h
i
c
h
 
a
r
e
 
t
h
e
n
 
u
s
e
d
 
t
o
 
a
c
c
e
s
s
 
t
h
e
 
A
P
I
 
f
u
n
c
t
i
o
n
a
l
i
t
y
 
w
h
i
c
h
 
i
s
 
o
u
t
l
i
n
e
d
 
i
n
 
t
h
e
 
A
P
I
 
C
o
r
e
 
d
o
c
u
m
e
n
t
a
t
i
o
n
.
"
 
)
;


j
r
_
d
e
f
i
n
e
(
 
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
5
A
P
I
_
C
O
R
E
_
C
L
I
E
N
T
_
A
D
M
I
N
'
,
 
"
D
i
s
p
l
a
y
s
 
t
h
e
 
A
P
I
 
c
o
r
e
 
a
d
m
i
n
i
s
t
r
a
t
i
o
n
 
p
a
g
e
,
 
w
h
e
r
e
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
c
a
n
 
c
o
n
f
i
g
u
r
e
 
A
P
I
 
c
l
i
e
n
t
s
.
 
N
o
t
e
 
t
h
a
t
 
t
h
i
s
 
i
s
 
a
 
r
e
g
i
s
t
e
r
e
d
 
u
s
e
r
 
o
n
l
y
 
f
e
a
t
u
r
e
,
 
s
o
 
u
s
e
r
s
 
m
u
s
t
 
b
e
 
r
e
g
i
s
t
e
r
e
d
 
a
n
d
 
l
o
g
g
e
d
 
i
n
 
b
e
f
o
r
e
 
t
h
e
y
 
c
a
n
 
s
e
e
 
t
h
i
s
 
p
a
g
e
.
"
 
)
;


j
r
_
d
e
f
i
n
e
(
'
A
P
I
_
M
E
T
H
O
D
S
_
T
I
T
L
E
'
,
"
A
P
I
 
M
e
t
h
o
d
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
A
P
I
_
M
E
T
H
O
D
S
_
D
E
S
C
R
I
P
T
I
O
N
'
,
"
T
h
i
s
 
l
i
s
t
 
o
f
 
m
e
t
h
o
d
s
 
i
s
 
b
a
s
e
d
 
o
n
 
y
o
u
r
 
i
n
s
t
a
l
l
e
d
 
A
P
I
 
f
e
a
t
u
r
e
 
p
l
u
g
i
n
s
 
a
n
d
 
i
s
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
g
e
n
e
r
a
t
e
d
.
 
I
f
 
y
o
u
 
i
n
s
t
a
l
l
 
o
r
 
d
e
l
e
t
e
 
a
n
 
A
P
I
 
f
e
a
t
u
r
e
 
p
l
u
g
i
n
 
y
o
u
 
m
u
s
t
 
v
i
s
i
t
 
t
h
i
s
 
p
a
g
e
 
t
o
 
r
e
b
u
i
l
d
 
t
h
i
s
 
l
i
s
t
 
o
f
 
A
P
I
 
m
e
t
h
o
d
s
 
a
v
a
i
l
a
b
l
e
 
o
n
 
y
o
u
r
 
s
i
t
e
.
"
)
;


j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
R
E
D
I
R
E
C
T
_
U
R
I
'
,
"
R
e
d
i
r
e
c
t
 
U
R
I
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
I
D
E
N
T
I
F
I
E
R
_
P
L
A
C
E
H
O
L
D
E
R
'
,
"
G
i
v
e
 
m
e
 
a
 
n
a
m
e
 
t
h
a
t
'
s
 
m
e
a
n
i
n
g
f
u
l
 
t
o
 
y
o
u
,
 
s
u
c
h
 
a
s
 
M
y
 
P
h
o
n
e
"
)
;


j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
G
R
A
N
T
_
T
Y
P
E
S
'
,
"
T
h
i
s
 
s
y
s
t
e
m
 
s
u
p
p
o
r
t
s
 
t
w
o
 
g
r
a
n
t
 
t
y
p
e
s
 
,
 
C
l
i
e
n
t
 
C
r
e
d
e
n
t
i
a
l
s
 
a
n
d
 
I
m
p
l
i
c
i
t
.
 
I
f
 
y
o
u
 
a
r
e
 
u
s
i
n
g
 
t
h
e
 
<
e
m
>
c
l
i
e
n
t
_
c
r
e
d
e
n
t
i
a
l
s
<
/
e
m
>
 
f
l
o
w
 
t
h
e
n
 
y
o
u
 
w
i
l
l
 
n
e
e
d
 
b
o
t
h
 
t
h
e
 
c
l
i
e
n
t
 
i
d
 
a
n
d
 
t
h
e
 
c
l
i
e
n
t
 
s
e
c
r
e
t
.
 
I
f
 
u
s
i
n
g
 
<
e
m
>
i
m
p
l
i
c
i
t
<
/
e
m
>
 
t
h
e
n
 
y
o
u
r
 
a
p
p
 
w
o
u
l
d
 
s
e
n
d
 
j
u
s
t
 
t
h
e
 
c
l
i
e
n
t
 
i
d
 
a
n
d
 
y
o
u
 
w
o
u
l
d
 
l
o
g
 
i
n
t
o
 
t
h
e
 
s
y
s
t
e
m
 
t
o
 
e
x
p
l
i
c
i
t
l
y
 
a
u
t
h
o
r
i
s
e
 
t
h
a
t
 
a
p
p
.
"
)
;


j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
I
M
P
L
I
C
I
T
_
N
O
T
E
S
'
,
"
T
o
 
u
s
e
 
t
h
e
 
<
e
m
>
i
m
p
l
i
c
i
t
<
/
e
m
>
 
g
r
a
n
t
 
t
y
p
e
 
f
l
o
w
,
 
y
o
u
 
w
i
l
l
 
n
e
e
d
 
t
o
 
u
s
e
 
t
h
i
s
 
u
r
l
 
t
o
 
a
u
t
h
o
r
i
s
e
 
y
o
u
r
 
a
p
p
s
.
 
W
h
e
n
 
t
h
i
s
 
u
r
l
 
i
s
 
c
a
l
l
e
d
,
 
a
n
d
 
y
o
u
 
h
a
v
e
 
a
u
t
h
o
r
i
s
e
d
 
t
h
e
 
a
p
p
 
t
h
e
 
s
y
s
t
e
m
 
w
i
l
l
 
i
s
s
u
e
 
a
 
t
o
k
e
n
 
t
h
a
t
 
y
o
u
 
a
p
p
s
 
w
i
l
l
 
t
h
e
n
 
u
s
e
 
t
o
 
c
a
l
l
 
t
h
i
s
 
s
y
s
t
e
m
'
s
 
A
P
I
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
O
A
U
T
H
_
A
U
T
H
O
R
I
S
A
T
I
O
N
_
U
R
L
'
,
"
A
u
t
h
o
r
i
s
a
t
i
o
n
 
U
R
L
"
)
;


j
r
_
d
e
f
i
n
e
(
 
'
W
E
B
H
O
O
K
S
_
C
O
R
E
'
,
 
'
W
e
b
h
o
o
k
s
'
 
)
;


j
r
_
d
e
f
i
n
e
(
'
_
W
E
B
H
O
O
K
S
_
C
O
N
F
I
G
_
S
H
O
W
'
,
"
S
h
o
w
 
W
e
b
h
o
o
k
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
o
p
t
i
o
n
s
 
i
n
 
J
o
m
r
e
s
 
m
a
i
n
 
m
e
n
u
?
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
W
E
B
H
O
O
K
S
_
C
O
N
F
I
G
_
S
H
O
W
_
D
E
S
C
'
,
"
Y
o
u
 
m
a
y
 
c
h
o
o
s
e
 
t
o
 
n
o
t
 
s
h
o
w
 
t
h
e
 
W
e
b
h
o
o
k
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
o
p
t
i
o
n
s
 
i
n
 
t
h
e
 
'
M
y
 
A
c
c
o
u
n
t
'
 
s
e
c
t
i
o
n
 
o
f
 
t
h
e
 
J
o
m
r
e
s
 
m
a
i
n
m
e
n
u
.
 
Y
o
u
 
c
o
u
l
d
 
i
n
s
t
e
a
d
 
d
e
c
i
d
e
 
t
h
a
t
 
y
o
u
 
w
a
n
t
e
d
 
t
o
 
s
h
o
w
 
t
h
e
m
 
o
n
 
o
t
h
e
r
 
p
a
g
e
s
 
u
s
i
n
g
 
J
o
m
r
e
s
 
S
h
o
r
t
c
o
d
e
s
.
"
)
;


j
r
_
d
e
f
i
n
e
(
'
W
E
B
H
O
O
K
S
_
D
O
C
U
M
E
N
T
A
T
I
O
N
_
T
I
T
L
E
'
,
"
W
e
b
h
o
o
k
s
 
d
o
c
u
m
e
n
t
a
t
i
o
n
"
)
;


j
r
_
d
e
f
i
n
e
(
 
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
W
E
B
H
O
O
K
S
_
D
O
C
S
'
,
 
"
D
i
s
p
l
a
y
s
 
t
h
e
 
A
P
I
 
c
o
r
e
 
d
o
c
u
m
e
n
t
a
t
i
o
n
 
p
a
g
e
.
 
T
h
e
 
A
P
I
 
C
o
r
e
 
a
l
l
o
w
s
 
u
s
e
r
s
 
t
o
 
c
r
e
a
t
e
 
A
P
I
 
c
l
i
e
n
t
s
,
 
w
h
i
c
h
 
a
r
e
 
t
h
e
n
 
u
s
e
d
 
t
o
 
a
c
c
e
s
s
 
t
h
e
 
A
P
I
 
f
u
n
c
t
i
o
n
a
l
i
t
y
 
w
h
i
c
h
 
i
s
 
o
u
t
l
i
n
e
d
 
i
n
 
t
h
e
 
A
P
I
 
C
o
r
e
 
d
o
c
u
m
e
n
t
a
t
i
o
n
.
"
 
)
;


j
r
_
d
e
f
i
n
e
(
 
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
5
W
E
B
H
O
O
K
S
_
C
L
I
E
N
T
_
A
D
M
I
N
'
,
 
"
D
i
s
p
l
a
y
s
 
t
h
e
 
A
P
I
 
c
o
r
e
 
a
d
m
i
n
i
s
t
r
a
t
i
o
n
 
p
a
g
e
,
 
w
h
e
r
e
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
c
a
n
 
c
o
n
f
i
g
u
r
e
 
A
P
I
 
c
l
i
e
n
t
s
.
 
N
o
t
e
 
t
h
a
t
 
t
h
i
s
 
i
s
 
a
 
r
e
g
i
s
t
e
r
e
d
 
u
s
e
r
 
o
n
l
y
 
f
e
a
t
u
r
e
,
 
s
o
 
u
s
e
r
s
 
m
u
s
t
 
b
e
 
r
e
g
i
s
t
e
r
e
d
 
a
n
d
 
l
o
g
g
e
d
 
i
n
 
b
e
f
o
r
e
 
t
h
e
y
 
c
a
n
 
s
e
e
 
t
h
i
s
 
p
a
g
e
.
"
 
)
;


j
r
_
d
e
f
i
n
e
(
 
'
W
E
B
H
O
O
K
S
_
I
N
T
E
G
R
A
T
I
O
N
_
E
D
I
T
'
,
 
'
E
d
i
t
 
I
n
t
e
g
r
a
t
i
o
n
'
 
)
;

j
r
_
d
e
f
i
n
e
(
 
'
W
E
B
H
O
O
K
S
_
I
N
T
E
G
R
A
T
I
O
N
_
I
D
'
,
 
'
I
n
t
e
g
r
a
t
i
o
n
 
I
D
'
 
)
;

j
r
_
d
e
f
i
n
e
(
 
'
W
E
B
H
O
O
K
S
_
I
N
T
E
G
R
A
T
I
O
N
_
U
R
L
'
,
 
'
U
R
L
 
o
r
 
N
a
m
e
'
 
)
;

j
r
_
d
e
f
i
n
e
(
 
'
W
E
B
H
O
O
K
S
_
E
N
A
B
L
E
D
'
,
 
'
E
n
a
b
l
e
d
'
 
)
;


j
r
_
d
e
f
i
n
e
(
 
'
W
E
B
H
O
O
K
S
_
A
U
T
H
_
M
E
T
H
O
D
_
S
E
L
E
C
T
'
,
 
'
A
u
t
h
e
n
t
i
c
a
t
i
o
n
 
m
e
t
h
o
d
/
I
n
t
e
g
r
a
t
i
o
n
'
 
)
;


j
r
_
d
e
f
i
n
e
(
 
'
W
E
B
H
O
O
K
S
_
M
A
N
A
G
E
R
_
P
R
O
P
E
R
T
I
E
S
_
N
O
N
E
'
,
 
'
A
n
y
 
w
e
b
h
o
o
k
s
 
y
o
u
 
c
r
e
a
t
e
 
w
i
l
l
 
n
o
t
 
b
e
 
t
r
i
g
g
e
r
e
d
 
a
s
 
y
o
u
 
a
r
e
 
n
o
t
 
a
s
s
i
g
n
e
d
 
t
o
 
a
n
y
 
p
r
o
p
e
r
t
i
e
s
.
 
S
u
p
e
r
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
a
r
e
 
n
o
t
 
t
y
p
i
c
a
l
l
y
 
a
s
s
i
g
n
e
d
 
i
n
d
i
v
i
d
u
a
l
 
p
r
o
p
e
r
t
i
e
s
,
 
s
o
 
y
o
u
 
m
a
y
 
n
e
e
d
 
a
 
n
e
w
 
u
s
e
r
 
f
o
r
 
w
e
b
h
o
o
k
 
c
r
e
a
t
i
o
n
.
'
 
)
;

j
r
_
d
e
f
i
n
e
(
 
'
W
E
B
H
O
O
K
S
_
M
A
N
A
G
E
R
_
P
R
O
P
E
R
T
I
E
S
_
A
S
S
I
G
N
E
D
_
D
E
S
C
'
,
 
'
A
n
y
 
w
e
b
h
o
o
k
s
 
y
o
u
 
c
r
e
a
t
e
 
w
i
l
l
 
b
e
 
t
r
i
g
g
e
r
e
d
 
a
g
a
i
n
s
t
 
t
h
e
 
f
o
l
l
o
w
i
n
g
 
p
r
o
p
e
r
t
i
e
s
 
:
 
'
 
)
;



j
r
_
d
e
f
i
n
e
(
 
'
P
O
R
T
A
L
_
R
E
V
I
E
W
S
_
L
I
M
I
T
'
,
 
'
R
e
v
i
e
w
s
 
l
i
m
i
t
'
 
)
;

j
r
_
d
e
f
i
n
e
(
 
'
P
O
R
T
A
L
_
R
E
V
I
E
W
S
_
L
I
M
I
T
_
D
E
S
C
'
,
 
'
U
s
e
 
t
h
i
s
 
s
e
t
t
i
n
g
 
t
o
 
l
i
m
i
t
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
r
e
v
i
e
w
s
 
s
h
o
w
n
 
i
n
 
t
h
e
 
p
r
o
p
e
r
t
y
 
d
e
t
a
i
l
s
 
p
a
g
e
.
'
 
)
;

j
r
_
d
e
f
i
n
e
(
 
'
P
O
R
T
A
L
_
R
E
V
I
E
W
S
_
S
H
O
W
_
A
L
L
_
R
E
V
I
E
W
S
'
,
 
'
S
h
o
w
 
a
l
l
 
r
e
v
i
e
w
s
'
 
)
;


j
r
_
d
e
f
i
n
e
(
 
'
V
I
D
E
O
_
T
U
T
O
R
I
A
L
S
'
,
 
'
V
i
d
e
o
 
T
u
t
o
r
i
a
l
s
'
 
)
;


j
r
_
d
e
f
i
n
e
(
 
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
M
I
N
I
M
U
M
_
D
E
P
O
S
I
T
_
V
A
L
U
E
'
,
 
'
M
i
n
i
m
u
m
 
d
e
p
o
s
i
t
 
v
a
l
u
e
'
 
)
;

j
r
_
d
e
f
i
n
e
(
 
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
M
I
N
I
M
U
M
_
D
E
P
O
S
I
T
_
V
A
L
U
E
_
D
E
S
C
'
,
 
"
I
f
 
t
h
e
 
c
a
l
c
u
l
a
t
e
d
 
d
e
p
o
s
i
t
 
i
s
 
l
e
s
s
 
t
h
a
n
 
t
h
i
s
 
f
i
g
u
r
e
,
 
t
h
e
n
 
s
e
t
 
d
e
p
o
s
i
t
 
t
o
 
t
h
i
s
 
v
a
l
u
e
 
i
n
s
t
e
a
d
.
 
T
h
i
s
 
f
i
g
u
r
e
 
m
i
g
h
t
 
i
t
s
e
l
f
 
b
e
 
o
v
e
r
-
r
i
d
d
e
n
 
i
f
 
i
t
 
d
o
e
s
 
n
o
t
 
s
a
t
i
s
f
y
 
t
h
e
 
s
i
t
e
'
s
 
m
i
n
i
m
u
m
 
d
e
p
o
s
i
t
 
s
e
t
t
i
n
g
.
 
L
e
a
v
e
 
i
t
 
s
e
t
 
t
o
 
0
 
t
o
 
n
o
t
 
u
s
e
 
t
h
e
 
s
e
t
t
i
n
g
.
"
 
)
;


j
r
_
d
e
f
i
n
e
(
 
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
D
B
I
M
P
O
R
T
_
W
A
R
N
I
N
G
'
,
 
'
T
o
 
i
n
c
r
e
a
s
e
 
y
o
u
r
 
s
i
t
e
 
s
p
e
e
d
,
 
w
e
 
r
e
c
o
m
m
e
n
d
 
i
m
p
o
r
t
i
n
g
 
d
e
t
a
i
l
s
 
o
f
 
t
h
e
 
e
x
i
s
t
i
n
g
 
s
i
t
e
 
a
n
d
 
p
r
o
p
e
r
t
i
e
s
 
i
m
a
g
e
s
 
t
o
 
d
a
t
a
b
a
s
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
D
B
I
M
P
O
R
T
_
A
C
T
I
O
N
'
,
 
'
I
m
p
o
r
t
 
e
x
i
s
t
i
n
g
 
i
m
a
g
e
s
 
d
e
t
a
i
l
s
 
t
o
 
d
a
t
a
b
a
s
e
'
)
;


j
r
_
d
e
f
i
n
e
(
 
'
_
J
O
M
R
E
S
_
S
3
_
A
C
T
I
V
E
_
D
E
S
C
'
,
 
'
E
x
p
e
r
i
m
e
n
t
a
l
 
f
e
a
t
u
r
e
.
 
I
f
 
e
n
a
b
l
e
d
,
 
i
m
a
g
e
s
 
u
p
l
o
a
d
e
d
 
u
s
i
n
g
 
t
h
e
 
m
e
d
i
a
 
c
e
n
t
r
e
 
f
e
a
t
u
r
e
 
w
i
l
l
 
a
l
s
o
 
b
e
 
c
o
p
i
e
d
 
t
o
 
y
o
u
r
 
A
m
a
z
o
n
 
S
3
 
b
u
c
k
e
t
 
a
n
d
 
s
e
r
v
e
d
 
f
r
o
m
 
y
o
u
r
 
A
m
a
z
o
n
 
S
3
 
b
u
c
k
e
t
 
u
r
l
.
 
W
h
e
n
 
e
n
a
b
l
i
n
g
 
t
h
i
s
 
t
h
e
 
f
i
r
s
t
 
t
i
m
e
,
 
y
o
u
`
l
l
 
a
l
s
o
 
b
e
 
p
r
o
m
t
e
d
 
t
o
 
i
m
p
o
r
t
 
e
x
i
s
t
i
n
g
 
i
m
a
g
e
s
 
t
o
 
y
o
u
r
 
S
3
 
b
u
c
k
e
t
.
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
_
J
O
M
R
E
S
_
C
L
O
U
D
F
R
O
N
T
_
D
M
A
I
N
'
,
 
'
C
l
o
u
d
F
r
o
n
t
 
d
o
m
a
i
n
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
_
J
O
M
R
E
S
_
C
L
O
U
D
F
R
O
N
T
_
D
M
A
I
N
_
D
E
S
C
'
,
 
'
R
e
p
l
a
c
e
 
y
o
u
r
 
d
e
f
a
u
l
t
 
A
m
a
z
o
n
 
S
3
 
d
o
m
a
i
n
 
w
i
t
h
 
y
o
u
r
 
C
l
o
u
d
F
r
o
n
t
 
d
o
m
a
i
n
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
_
J
O
M
R
E
S
_
S
3
_
S
S
L
T
L
S
_
D
E
S
C
'
,
 
'
R
e
c
o
m
m
e
n
d
e
d
 
t
o
 
b
e
 
e
n
a
b
l
e
d
.
 
F
o
r
 
W
i
n
d
o
w
s
 
a
n
d
 
M
a
c
 
O
S
X
 
o
n
l
y
,
 
i
f
 
l
i
b
c
u
r
l
 
w
a
s
n
`
t
 
b
u
i
l
t
 
w
i
t
h
 
S
c
h
a
n
n
e
l
 
o
r
 
S
e
c
u
r
e
 
T
r
a
n
s
p
o
r
t
 
s
u
p
p
o
r
t
 
(
t
h
e
 
n
a
t
i
v
e
 
S
S
L
 
l
i
b
r
a
r
i
e
s
 
i
n
c
l
u
d
e
d
 
i
n
 
W
i
n
d
o
w
s
 
a
n
d
 
M
a
c
 
O
S
 
X
)
,
 
y
o
u
 
s
h
o
u
l
d
 
s
e
t
 
t
h
i
s
 
t
o
 
N
o
.
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
S
3
I
M
P
O
R
T
_
W
A
R
N
I
N
G
'
,
 
'
Y
o
u
`
v
e
 
e
n
a
b
l
e
d
 
t
h
e
 
A
m
a
z
o
n
 
S
3
 
i
n
t
e
g
r
a
t
i
o
n
,
 
s
o
 
y
o
u
`
l
l
 
h
a
v
e
 
t
o
 
c
o
p
y
 
a
l
l
 
e
x
i
s
t
i
n
g
 
i
m
a
g
e
s
 
t
o
 
y
o
u
r
 
S
3
 
b
u
c
k
e
t
.
 
I
m
a
g
e
s
 
a
r
e
 
n
o
w
 
s
e
r
v
e
d
 
t
o
 
y
o
u
r
 
s
i
t
e
 
v
i
s
i
t
o
r
s
 
f
r
o
m
 
y
o
u
r
 
A
m
a
z
o
n
 
S
3
 
u
r
l
,
 
s
o
 
y
o
u
`
l
l
 
n
e
e
d
 
t
o
 
c
o
p
y
 
t
h
e
m
 
f
i
r
s
t
 
t
o
 
y
o
u
r
 
S
3
 
b
u
c
k
e
t
,
 
o
t
h
e
r
w
i
s
e
 
t
h
e
y
 
w
o
n
`
t
 
b
e
 
v
i
s
i
b
l
e
 
t
o
 
y
o
u
r
 
s
i
t
e
 
v
i
s
i
t
o
r
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
S
3
I
M
P
O
R
T
_
W
A
R
N
I
N
G
2
'
,
 
'
O
n
c
e
 
y
o
u
 
c
l
i
c
k
 
t
h
i
s
 
b
u
t
t
o
n
,
 
p
l
e
a
s
e
 
d
o
 
n
o
t
 
i
n
t
e
r
r
u
p
t
 
t
h
e
 
p
r
o
c
e
s
s
 
a
n
d
 
w
a
i
t
 
f
o
r
 
a
 
s
u
c
c
e
s
s
 
o
r
 
e
r
r
o
r
 
m
e
s
s
a
g
e
.
 
D
e
p
e
n
d
i
n
g
 
o
n
 
s
e
r
v
e
r
 
s
p
e
e
d
,
 
t
h
i
s
 
m
a
y
 
t
a
k
e
 
a
 
w
h
i
l
e
 
t
o
 
c
o
m
p
l
e
t
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
S
3
I
M
P
O
R
T
_
A
C
T
I
O
N
'
,
 
'
C
o
p
y
 
e
x
i
s
t
i
n
g
 
i
m
a
g
e
s
 
t
o
 
A
m
a
z
o
n
 
S
3
 
b
u
c
k
e
t
'
)
;



j
r
_
d
e
f
i
n
e
(
 
'
J
O
M
R
E
S
_
I
N
C
O
M
P
L
E
T
E
'
,
 
'
I
n
c
o
m
p
l
e
t
e
'
 
)
;

j
r
_
d
e
f
i
n
e
(
 
'
J
O
M
R
E
S
_
W
A
T
I
N
G
_
A
P
P
R
O
V
A
L
'
,
 
'
P
e
n
d
i
n
g
 
a
p
p
r
o
v
a
l
'
 
)
;

j
r
_
d
e
f
i
n
e
(
 
'
J
O
M
R
E
S
_
G
O
O
G
L
E
_
M
A
P
S
_
P
D
E
T
A
I
L
S
'
,
 
'
P
r
o
p
e
r
t
y
 
d
e
t
a
i
l
s
 
m
a
p
'
 
)
;


j
r
_
d
e
f
i
n
e
(
 
'
H
A
S
_
S
T
A
R
S
_
T
I
T
L
E
'
,
 
'
A
l
l
o
w
s
 
s
t
a
r
s
 
c
l
a
s
s
i
f
i
c
a
t
i
o
n
?
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
D
B
I
M
P
O
R
T
_
F
O
R
C
E
'
,
 
'
F
o
r
c
e
 
r
e
i
m
p
o
r
t
 
i
m
a
g
e
 
d
e
t
a
i
l
s
 
t
o
 
d
a
t
a
b
a
s
e
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
S
3
I
M
P
O
R
T
_
F
O
R
C
E
'
,
 
'
F
o
r
c
e
 
r
e
u
p
l
o
a
d
 
i
m
a
g
e
s
 
t
o
 
S
3
 
b
u
c
k
e
t
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
_
J
O
M
R
E
S
_
U
N
I
N
S
T
A
L
L
_
T
A
B
L
E
S
'
,
 
'
D
e
l
e
t
e
 
a
l
l
 
J
o
m
r
e
s
 
d
a
t
a
 
w
h
e
n
 
u
n
i
n
s
t
a
l
l
i
n
g
?
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
_
J
O
M
R
E
S
_
U
N
I
N
S
T
A
L
L
_
T
A
B
L
E
S
_
D
E
S
C
'
,
 
'
I
f
 
s
e
t
 
t
o
 
y
e
s
,
 
J
o
m
r
e
s
 
w
i
l
l
 
d
e
l
e
t
e
 
a
l
l
 
i
t
`
s
 
d
a
t
a
b
a
s
e
 
t
a
b
l
e
s
 
w
h
e
n
 
u
n
i
n
s
t
a
l
l
e
d
.
 
T
h
i
s
 
w
i
l
l
 
d
e
l
e
t
e
 
a
l
l
 
J
o
m
r
e
s
 
d
a
t
a
 
f
r
o
m
 
d
b
 
a
n
d
 
c
a
n
`
t
 
b
e
 
u
n
d
o
n
e
.
'
)
;


j
r
_
d
e
f
i
n
e
(
 
'
T
R
A
N
S
A
C
T
I
O
N
_
I
D
S
'
,
 
'
T
r
a
n
s
a
c
t
i
o
n
 
i
d
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
P
A
Y
M
E
N
T
_
M
E
T
H
O
D
'
,
 
'
P
a
y
m
e
n
t
 
m
e
t
h
o
d
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
P
O
A
_
D
I
S
P
L
A
Y
_
P
R
I
C
E
'
,
 
'
P
O
A
 
P
r
i
c
e
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
P
O
A
_
D
I
S
P
L
A
Y
_
P
R
I
C
E
_
D
E
S
C
'
,
 
'
W
h
e
n
 
p
r
o
p
e
r
t
i
e
s
 
a
r
e
 
s
h
o
w
n
 
i
n
 
a
 
l
i
s
t
,
 
t
h
e
 
s
y
s
t
e
m
 
w
i
l
l
 
a
t
t
e
m
p
t
 
t
o
 
f
i
n
d
 
a
 
v
a
l
i
d
 
p
r
i
c
e
 
f
r
o
m
 
c
o
n
f
i
g
u
r
e
d
 
t
a
r
i
f
f
s
 
b
a
s
e
d
 
o
n
 
e
i
t
h
e
r
 
t
o
d
a
y
\
'
s
 
d
a
t
e
,
 
o
r
 
i
f
 
d
a
t
e
s
 
w
e
r
e
 
u
s
e
d
 
i
n
 
a
 
s
e
a
r
c
h
,
 
t
h
e
n
 
b
a
s
e
d
 
o
n
 
t
h
o
s
e
 
d
a
t
e
s
.
 
I
f
 
i
t
 
c
a
n
n
o
t
,
 
t
h
e
n
 
i
t
 
w
i
l
l
 
s
h
o
w
 
P
O
A
 
(
P
r
i
c
e
 
o
n
 
a
p
p
l
i
c
a
t
i
o
n
)
,
 
m
e
a
n
i
n
g
 
t
h
a
t
 
t
h
e
 
g
u
e
s
t
 
s
h
o
u
l
d
 
c
o
n
t
a
c
t
 
y
o
u
 
t
o
 
g
e
t
 
a
 
p
r
i
c
e
.
 
I
f
 
y
o
u
 
w
a
n
t
,
 
y
o
u
 
c
a
n
 
c
o
n
f
i
g
u
r
e
 
a
 
p
r
i
c
e
 
h
e
r
e
 
t
h
a
t
 
w
i
l
l
 
b
e
 
s
h
o
w
n
 
i
n
s
t
e
a
d
 
o
f
 
t
h
e
 
P
O
A
 
t
e
x
t
.
 
T
h
i
s
 
f
i
g
u
r
e
 
w
o
u
l
d
 
b
e
 
a
 
"
f
a
l
l
b
a
c
k
"
 
p
r
i
c
e
 
t
o
 
d
i
s
p
l
a
y
 
i
f
 
n
o
 
o
t
h
e
r
 
p
r
i
c
e
 
c
a
n
 
b
e
 
d
e
t
e
r
m
i
n
e
d
.
'
)
;


j
r
_
d
e
f
i
n
e
(
 
'
P
L
U
G
I
N
M
A
N
A
G
E
R
_
I
N
S
T
A
L
L
'
,
 
'
Y
o
u
 
n
e
e
d
 
t
o
 
i
n
s
t
a
l
l
 
t
h
e
 
p
l
u
g
i
n
 
m
a
n
a
g
e
r
 
b
e
f
o
r
e
 
y
o
u
 
c
a
n
 
i
n
s
t
a
l
l
 
J
o
m
r
e
s
 
p
l
u
g
i
n
s
,
 
w
o
u
l
d
 
y
o
u
 
l
i
k
e
 
t
o
 
d
o
 
t
h
a
t
 
n
o
w
?
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
P
L
U
G
I
N
M
A
N
A
G
E
R
_
R
E
I
N
S
T
A
L
L
'
,
 
'
Y
o
u
 
n
e
e
d
 
t
o
 
u
p
d
a
t
e
 
t
h
e
 
p
l
u
g
i
n
 
m
a
n
a
g
e
r
 
b
e
f
o
r
e
 
y
o
u
 
c
a
n
 
u
p
d
a
t
e
 
a
n
y
 
i
n
s
t
a
l
l
e
d
 
p
l
u
g
i
n
s
,
 
w
o
u
l
d
 
y
o
u
 
l
i
k
e
 
t
o
 
d
o
 
t
h
a
t
 
n
o
w
?
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
P
L
U
G
I
N
M
A
N
A
G
E
R
_
I
N
S
T
A
L
L
_
B
U
T
T
O
N
'
,
 
"
L
e
t
'
s
 
d
o
 
t
h
i
s
!
"
)
;


j
r
_
d
e
f
i
n
e
(
 
'
I
N
C
L
U
D
E
I
N
F
I
L
T
E
R
S
'
,
 
'
I
n
c
l
u
d
e
 
i
n
 
f
i
l
t
e
r
s
?
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
I
N
C
L
U
D
E
I
N
F
I
L
T
E
R
S
_
D
E
S
C
'
,
 
'
P
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
f
i
l
t
e
r
s
 
i
n
 
A
j
a
x
 
C
o
m
p
o
s
i
t
e
 
S
e
a
r
c
h
 
c
a
n
 
b
e
c
o
m
e
 
v
e
r
y
 
l
o
n
g
,
 
s
o
 
y
o
u
 
c
a
n
 
s
e
t
 
t
h
i
s
 
o
p
t
i
o
n
 
t
o
 
N
o
 
t
o
 
p
r
e
v
e
n
t
 
t
h
i
s
 
f
e
a
t
u
r
e
 
f
r
o
m
 
s
h
o
w
i
n
g
 
i
n
 
t
h
e
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
l
i
s
t
.
'
)
;


j
r
_
d
e
f
i
n
e
(
 
'
R
E
V
I
E
W
_
R
E
M
I
N
D
E
R
_
P
T
1
'
,
 
"
Y
o
u
 
h
a
v
e
 
"
)
;

j
r
_
d
e
f
i
n
e
(
 
'
R
E
V
I
E
W
_
R
E
M
I
N
D
E
R
_
P
T
2
'
,
 
"
 
b
o
o
k
i
n
g
(
s
)
 
t
h
a
t
 
y
o
u
 
h
a
v
e
 
n
o
t
 
l
e
f
t
 
a
 
r
e
v
i
e
w
 
f
o
r
 
y
e
t
.
 
P
l
e
a
s
e
 
l
e
a
v
e
 
a
 
r
e
v
i
e
w
.
"
)
;

j
r
_
d
e
f
i
n
e
(
 
'
B
O
O
K
I
N
G
S
_
A
W
A
I
T
I
N
G
_
R
E
V
I
E
W
S
'
,
 
"
B
o
o
k
i
n
g
s
 
w
a
i
t
i
n
g
 
f
o
r
 
r
e
v
i
e
w
s
"
)
;

j
r
_
d
e
f
i
n
e
(
 
'
R
E
V
I
E
W
_
N
A
G
'
,
 
"
N
a
g
 
g
u
e
s
t
s
 
f
o
r
 
r
e
v
i
e
w
s
?
"
)
;

j
r
_
d
e
f
i
n
e
(
 
'
R
E
V
I
E
W
_
N
A
G
_
D
E
S
C
'
,
 
"
O
n
c
e
 
a
 
g
u
e
s
t
 
h
a
s
 
b
e
e
n
 
b
o
o
k
e
d
 
o
u
t
 
f
r
o
m
 
a
 
b
o
o
k
i
n
g
,
 
t
h
e
 
s
y
s
t
e
m
 
w
i
l
l
 
r
e
m
i
n
d
 
t
h
e
m
 
t
o
 
p
o
s
t
 
a
 
r
e
v
i
e
w
 
f
o
r
 
t
h
e
i
r
 
b
o
o
k
i
n
g
.
 
S
e
t
 
t
h
i
s
 
o
p
t
i
o
n
 
t
o
 
N
o
 
t
o
 
d
i
s
a
b
l
e
 
t
h
i
s
 
r
e
m
i
n
d
e
r
.
"
)
;


j
r
_
d
e
f
i
n
e
(
 
'
S
E
N
D
_
E
M
A
I
L
_
C
O
P
I
E
S
_
T
O
_
S
I
T
E
_
A
D
M
I
N
S
_
T
I
T
L
E
'
,
 
"
S
e
n
d
 
c
o
p
i
e
s
 
o
f
 
t
h
e
 
b
o
o
k
i
n
g
 
e
m
a
i
l
s
 
t
o
 
s
i
t
e
 
a
d
m
i
n
s
?
"
)
;

j
r
_
d
e
f
i
n
e
(
 
'
S
E
N
D
_
E
M
A
I
L
_
C
O
P
I
E
S
_
T
O
_
S
I
T
E
_
A
D
M
I
N
S
_
D
E
S
C
'
,
 
"
W
h
e
n
 
e
n
a
b
l
e
d
,
 
c
o
p
i
e
s
 
o
f
 
t
h
e
 
b
o
o
k
i
n
g
 
e
m
a
i
l
s
 
s
e
n
t
 
t
o
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
w
i
l
l
 
b
e
 
s
e
n
t
 
t
o
 
a
l
l
 
s
i
t
e
 
a
d
m
i
n
s
 
t
o
o
.
"
)
;


j
r
_
d
e
f
i
n
e
(
 
'
H
I
D
D
E
N
_
A
D
D
R
E
S
S
_
S
E
T
T
I
N
G
'
,
 
"
H
i
d
e
 
a
d
d
r
e
s
s
?
"
)
;

j
r
_
d
e
f
i
n
e
(
 
'
H
I
D
D
E
N
_
A
D
D
R
E
S
S
_
S
E
T
T
I
N
G
_
D
E
S
C
'
,
 
"
I
f
 
y
o
u
 
s
e
t
 
t
h
i
s
 
o
p
t
i
o
n
 
t
o
 
Y
e
s
,
 
t
h
e
n
 
o
n
l
y
 
g
u
e
s
t
s
 
w
h
o
 
h
a
v
e
 
a
l
r
e
a
d
y
 
p
l
a
c
e
d
 
a
 
b
o
o
k
i
n
g
 
o
n
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
s
e
e
 
t
h
e
 
p
r
o
p
e
r
t
y
 
s
t
r
e
e
t
 
a
d
d
r
e
s
s
.
 
Y
o
u
 
m
i
g
h
t
 
w
a
n
t
 
t
o
 
u
s
e
 
t
h
i
s
 
s
e
t
t
i
n
g
 
t
o
 
h
i
d
e
 
t
h
e
 
p
r
o
p
e
r
t
y
'
s
 
e
x
a
c
t
 
l
o
c
a
t
i
o
n
 
i
f
,
 
f
o
r
 
e
x
a
m
p
l
e
,
 
i
t
 
i
s
 
r
o
u
t
i
n
e
l
y
 
l
e
f
t
 
u
n
a
t
t
e
n
d
e
d
.
"
)
;

j
r
_
d
e
f
i
n
e
(
 
'
H
I
D
D
E
N
_
A
D
D
R
E
S
S
_
P
L
A
C
E
H
O
L
D
E
R
'
,
 
"
H
I
D
D
E
N
"
)
;

j
r
_
d
e
f
i
n
e
(
 
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
O
P
T
I
M
I
Z
E
_
I
M
A
G
E
S
'
,
 
'
O
p
t
i
m
i
z
e
 
i
m
a
g
e
s
 
o
n
 
u
p
l
o
a
d
?
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
O
P
T
I
M
I
Z
E
_
I
M
A
G
E
S
_
D
E
S
C
'
,
 
'
W
h
e
n
 
e
n
a
b
l
e
d
,
 
i
m
a
g
e
s
 
w
i
l
l
 
b
e
 
o
p
t
i
m
i
z
e
d
 
f
o
r
 
w
e
b
 
(
f
i
l
e
 
s
i
z
e
 
c
a
n
 
b
e
 
u
p
 
t
o
 
7
5
%
 
s
m
a
l
l
e
r
)
.
 
D
e
p
e
n
d
i
n
g
 
o
n
 
t
h
e
 
u
p
l
o
a
d
e
d
 
i
m
a
g
e
 
t
y
p
e
,
 
y
o
u
r
 
s
e
r
v
e
r
 
n
e
e
d
s
 
t
o
 
h
a
v
e
 
o
n
e
 
o
r
 
m
o
r
e
 
o
f
 
t
h
e
s
e
 
l
i
b
r
a
r
i
e
s
 
i
n
s
t
a
l
l
e
d
 
b
y
 
t
h
e
 
h
o
s
t
i
n
g
 
p
r
o
v
i
d
e
r
:
 
o
p
t
i
p
n
g
,
 
p
n
g
q
u
a
n
t
,
 
p
n
g
c
r
u
s
h
,
 
p
n
g
o
u
t
,
 
a
d
v
p
n
g
,
 
j
p
e
g
t
r
a
n
,
 
j
p
e
g
o
p
t
i
m
,
 
g
i
f
s
i
c
l
e
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
D
A
T
A
B
A
S
E
_
I
N
T
E
G
R
I
T
Y
_
C
H
E
C
K
'
,
 
'
D
a
t
a
b
a
s
e
 
I
n
t
e
g
r
i
t
y
 
C
h
e
c
k
'
)
;

j
r
_
d
e
f
i
n
e
(
 
'
O
B
S
O
L
E
T
E
_
F
I
L
E
S
_
C
H
E
C
K
'
,
 
'
O
b
s
o
l
e
t
e
 
F
i
l
e
s
 
C
h
e
c
k
'
)
;

