
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
s
t
a
b
l
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
 
T
r
a
n
s
l
a
t
e
d
 
t
o
 
f
r
-
F
R
 
b
y
 
M
a
r
i
o
 
O
l
i
v
e
i
r
a
,
 
C
a
m
a
r
a
 
d
e
 
L
o
b
o
s
,
 
M
a
d
e
i
r
a
 
I
s
l
a
n
d
,
 
P
o
r
t
u
g
a
l
,
 
1
4
O
c
t
2
0
1
0
 
-
 
w
w
w
.
m
a
r
i
o
l
i
v
e
i
r
a
.
n
e
t
.
 
U
p
d
a
t
e
d
 
2
1
-
J
u
n
2
0
1
1
 
f
o
r
 
v
e
r
s
i
o
n
 
5
 
s
t
a
b
l
e

 
*
 
C
o
n
t
i
n
u
e
d
 
t
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
 
t
o
 
f
r
-
F
R
 
b
y
 
V
i
n
c
e
n
t
 
V
e
r
m
e
i
l
l
e
,
 
F
r
i
b
o
u
r
g
,
 
S
w
i
t
z
e
r
l
a
n
d
,
 
1
1
-
0
3
-
2
0
1
3
 
2
0
1
0
 
f
o
r
 
v
e
r
s
i
o
n
 
7
.
2
.
1
2

 
*
 
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
 
u
s
e
 
i
n
 
a
l
l
 
p
e
r
s
o
n
a
l
 
o
r
 
c
o
m
m
e
r
c
i
a
l
 
p
r
o
j
e
c
t
s
 
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
D
i
r
e
c
t
 
A
c
c
e
s
s
 
t
o
 
t
h
i
s
 
f
i
l
e
 
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
.
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
r
Ã
©
s
e
r
v
a
t
i
o
n
 
r
a
p
i
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
A
f
f
i
c
h
e
r
 
l
e
s
 
p
r
o
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
t
i
o
n
 
G
Ã
©
n
Ã
©
r
a
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
B
A
C
K
'
,
 
'
R
e
t
o
u
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
Y
E
S
'
,
 
'
O
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
N
O
'
,
 
'
N
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
v
e
a
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
u
v
e
l
 
Ã
©
t
a
b
l
i
s
s
e
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
N
o
u
v
e
a
u
 
c
l
i
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
S
A
V
E
'
,
 
'
S
a
u
v
e
g
a
r
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
 
'
A
r
r
i
v
Ã
©
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
Ã
©
p
a
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
 
'
N
o
m
 
d
\
'
u
t
i
l
i
s
a
t
e
u
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
 
'
N
i
v
e
a
u
 
d
\
'
a
c
c
Ã
¨
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
t
i
l
i
s
a
t
e
u
r
 
m
o
d
i
f
i
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
u
t
e
s
 
l
e
s
 
r
Ã
©
s
e
r
v
a
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
e
r
 
l
a
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
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
.
/
D
Ã
©
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
C
l
i
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
C
h
a
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
O
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
i
e
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
P
r
Ã
©
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
B
e
s
o
i
n
(
s
)
 
s
p
Ã
©
c
i
f
i
q
u
e
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
C
e
r
t
a
i
n
s
 
b
e
s
o
i
n
s
 
s
p
Ã
©
c
i
f
i
q
u
e
s
 
p
e
u
v
e
n
t
 
Ã
ª
t
r
e
 
f
a
c
t
u
r
Ã
©
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
A
n
n
u
l
e
r
 
l
a
 
r
Ã
©
s
e
r
v
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
u
m
Ã
©
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
R
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
V
i
l
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
e
 
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
u
m
Ã
©
r
o
 
d
e
 
t
Ã
©
l
Ã
©
p
h
o
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
u
m
Ã
©
r
o
 
d
e
 
p
o
r
t
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
A
d
r
e
s
s
e
 
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
 
'
N
o
u
s
 
n
e
 
p
o
u
v
o
n
s
 
p
a
s
 
a
n
n
u
l
e
r
 
c
e
t
t
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
c
a
r
 
l
e
 
c
l
i
e
n
t
 
o
c
c
u
p
e
 
d
Ã
©
j
Ã
 
 
l
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
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
L
a
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
n
\
'
a
 
p
a
s
 
Ã
©
t
Ã
©
 
r
Ã
©
g
l
Ã
©
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
e
z
 
l
\
'
a
n
n
u
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
r
Ã
©
s
e
r
v
a
t
i
o
n
 
a
n
n
u
l
Ã
©
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
j
o
u
r
s
 
a
v
a
n
t
 
l
\
'
a
r
r
i
v
Ã
©
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
E
X
P
L
'
,
 
'
T
y
p
e
 
d
e
 
r
Ã
©
s
e
r
v
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
I
n
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
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
Ã
©
c
e
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
 
'
N
o
m
 
d
e
 
l
a
 
c
h
a
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
O
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
 
'
N
u
m
Ã
©
r
o
 
d
e
 
l
a
 
c
h
a
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
O
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
Ã
‰
t
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
¨
s
 
a
u
x
 
p
e
r
s
o
n
n
e
s
 
Ã
 
 
m
o
b
i
l
i
t
Ã
©
 
r
Ã
©
d
u
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
a
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
 
'
T
y
p
e
 
d
e
 
c
h
a
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
O
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
 
d
e
s
 
t
y
p
e
s
 
d
e
 
c
h
a
m
b
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
 
'
L
i
s
t
e
 
d
e
s
 
Ã
©
q
u
i
p
e
m
e
n
t
s
 
d
e
 
l
a
 
c
h
a
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
O
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
Ã
©
p
Ã
´
t
 
p
a
y
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
E
n
t
r
e
z
 
l
e
 
m
o
n
t
a
n
t
 
d
e
 
l
\
'
a
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
 
Ã
 
 
r
Ã
©
g
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
Ã
©
f
Ã
©
r
e
n
c
e
 
d
e
 
l
\
'
a
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
u
m
Ã
©
r
o
 
d
e
 
r
Ã
©
s
e
r
v
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
A
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
A
c
o
m
p
t
e
 
s
a
u
v
e
g
a
r
d
Ã
©
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
O
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
Ã
‰
t
a
b
l
i
s
s
e
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
 
'
T
y
p
e
 
d
e
 
l
a
 
C
h
a
m
b
r
e
'
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
 
'
E
d
i
t
e
r
 
l
e
s
 
d
Ã
©
t
a
i
l
s
 
d
u
 
c
l
i
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
P
r
Ã
©
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
N
u
m
Ã
©
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
R
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
V
i
l
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
e
 
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
Ã
©
l
Ã
©
p
h
o
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
T
Ã
©
l
Ã
©
p
h
o
n
e
 
p
o
r
t
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
r
Ã
©
s
e
r
v
e
z
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
 
'
S
Ã
©
j
o
u
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
A
f
f
i
c
h
e
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
t
i
o
n
 
d
e
s
 
c
h
a
m
b
r
e
s
 
&
 
d
e
s
 
Ã
©
t
a
b
l
i
s
s
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
C
h
a
m
b
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
P
r
o
p
r
i
Ã
©
t
Ã
©
 
C
h
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
T
y
p
e
s
 
C
h
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
Ã
‰
t
a
b
l
i
s
s
e
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
p
r
o
p
r
i
Ã
©
t
Ã
©
 
d
u
 
d
i
s
p
o
s
i
t
i
f
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
C
h
a
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
O
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
u
m
Ã
©
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
Ã
‰
t
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
a
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
E
q
u
i
p
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
 
'
E
d
i
t
e
r
 
l
\
'
Ã
©
l
Ã
©
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
D
i
s
p
o
s
i
t
i
f
 
C
h
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
t
i
o
n
 
d
e
s
 
p
r
o
p
r
i
Ã
©
t
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
P
r
o
p
r
i
Ã
©
t
Ã
©
 
d
e
 
l
a
 
c
h
a
m
b
r
e
 
a
j
o
u
t
Ã
©
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
P
r
o
p
r
i
Ã
©
t
Ã
©
 
d
e
 
l
a
 
c
h
a
m
b
r
e
 
m
i
s
e
-
Ã
 
-
j
o
u
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
T
y
p
e
s
 
d
e
 
C
h
a
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
O
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
A
b
r
Ã
©
g
Ã
©
 
d
u
 
t
y
p
e
 
d
e
 
l
a
 
c
h
a
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
O
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
 
d
u
 
t
y
p
e
 
d
e
 
l
a
 
c
h
a
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
O
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
y
p
e
 
d
e
 
c
h
a
m
b
r
e
 
a
j
o
u
t
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
e
r
 
l
\
'
Ã
©
l
Ã
©
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
R
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
V
i
l
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
Ã
©
g
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
y
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
e
 
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
S
i
t
e
 
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
E
q
u
i
p
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
Ã
‰
t
a
b
l
i
s
s
e
m
e
n
t
 
m
i
s
-
Ã
 
-
j
o
u
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
E
q
u
i
p
e
m
e
n
t
 
 
d
e
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
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
A
b
r
Ã
©
g
Ã
©
 
d
e
s
 
d
i
s
p
o
s
i
t
i
f
s
 
d
e
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
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
t
i
o
n
 
c
o
m
p
l
Ã
¨
t
e
 
d
e
 
l
\
'
Ã
©
q
u
i
p
e
m
e
n
t
 
d
e
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
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
E
q
u
i
p
e
m
e
n
t
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
 
m
i
s
-
Ã
 
-
j
o
u
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
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
i
t
r
e
 
d
u
 
T
a
r
i
f
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
a
l
i
d
e
 
d
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
a
l
i
d
e
 
j
u
s
q
u
\
'
Ã
 
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
P
r
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
M
i
n
.
 
d
e
 
j
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
M
a
x
.
 
d
e
 
j
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
M
i
n
.
 
d
e
 
p
e
r
s
o
n
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
M
a
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
 
'
T
y
p
e
 
d
e
 
c
h
a
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
O
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
e
r
 
l
e
 
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
A
u
t
o
r
i
s
e
r
 
l
e
s
 
W
e
e
k
-
E
n
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
e
r
 
l
\
'
Ã
©
l
Ã
©
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
l
o
n
e
r
 
l
\
'
Ã
©
l
Ã
©
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
 
s
u
p
p
r
i
m
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
e
r
 
l
e
 
t
a
r
i
f
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
Ã
©
s
e
r
v
a
t
i
o
n
 
e
n
r
e
g
i
s
t
r
Ã
©
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
 
'
E
n
l
e
v
e
r
 
r
Ã
©
s
e
r
v
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
i
s
t
e
r
 
l
e
s
 
r
Ã
©
s
e
r
v
a
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
R
Ã
©
c
a
p
i
t
u
l
a
t
i
f
'
)
;

j
r
_
d
e
f
i
n
e
(
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
t
i
o
n
 
d
e
s
 
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
t
i
o
n
 
d
e
s
 
Ã
©
t
a
b
l
i
s
s
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
Ã
©
r
i
f
i
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
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
P
r
Ã
©
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
u
m
Ã
©
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
R
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
V
i
l
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
e
 
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
T
Ã
©
l
Ã
©
p
h
o
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
N
u
m
Ã
©
r
o
 
d
e
 
P
o
r
t
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
I
l
 
n
\
'
y
 
a
 
a
u
c
u
n
e
 
c
h
a
m
b
r
e
 
s
u
s
c
e
p
t
i
b
l
e
 
d
e
 
s
a
t
i
s
f
a
i
r
e
 
l
e
s
 
p
a
r
a
m
Ã
¨
t
r
e
s
 
d
e
 
v
o
t
r
e
 
r
e
c
h
e
r
c
h
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
N
o
u
s
 
v
o
u
s
 
r
e
m
e
r
c
i
o
n
s
 
d
\
'
a
v
o
i
r
 
e
f
f
e
c
t
u
Ã
©
 
v
o
t
r
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
e
n
 
u
t
i
l
i
s
a
n
t
 
n
o
s
 
s
e
r
v
i
c
e
s
,
 
n
o
u
s
 
v
o
u
s
 
s
o
u
h
a
i
t
o
n
s
 
u
n
 
e
x
c
e
l
l
e
n
t
 
s
Ã
©
j
o
u
r
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
V
e
u
i
l
l
e
z
 
c
e
p
e
n
d
a
n
t
 
n
o
t
e
r
 
q
u
e
 
v
o
u
s
 
v
e
n
e
z
 
d
\
'
e
f
f
e
c
t
u
e
r
 
u
n
e
 
p
r
Ã
©
-
r
Ã
©
s
e
r
v
a
t
i
o
n
,
 
e
t
 
q
u
e
 
c
e
l
l
e
-
c
i
 
s
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
Ã
©
e
 
l
o
r
s
q
u
e
 
v
o
u
s
 
r
e
c
e
v
r
e
z
 
l
a
 
l
e
t
t
r
e
 
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
t
i
o
n
 
q
u
e
 
n
o
u
s
 
a
l
l
o
n
s
 
v
o
u
s
 
f
a
i
r
e
 
p
a
r
v
e
n
i
r
 
d
a
n
s
 
l
e
s
 
p
l
u
s
 
b
r
e
f
 
d
Ã
©
l
a
i
s
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
 
'
R
Ã
©
s
e
r
v
e
r
 
u
n
 
h
Ã
´
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
 
'
R
Ã
©
s
e
r
v
a
t
i
o
n
 
d
\
'
h
Ã
´
t
e
 
e
f
f
e
c
t
u
Ã
©
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
 
'
R
e
t
i
r
e
r
 
l
a
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
d
\
'
u
n
 
h
Ã
´
t
e
 
'
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
p
l
Ã
©
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
s
 
&
 
D
e
v
i
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
C
h
a
r
g
e
r
 
u
n
 
f
i
c
h
i
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
S
u
p
p
l
Ã
©
m
e
n
t
s
 
p
o
u
r
 
p
e
r
s
o
n
n
e
 
s
e
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
A
s
s
u
r
e
z
 
v
o
u
s
 
d
e
 
s
Ã
©
l
e
c
t
i
o
n
n
e
r
 
O
U
I
 
s
i
 
v
o
u
s
 
f
a
c
t
u
r
e
z
 
u
n
 
s
u
p
p
l
Ã
©
m
e
n
t
 
p
o
u
r
 
l
e
s
 
p
e
r
s
o
n
n
e
s
 
s
e
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
M
o
n
t
a
n
t
 
d
u
 
s
u
p
p
l
Ã
©
m
e
n
t
 
p
o
u
r
 
l
e
s
 
p
e
r
s
o
n
n
e
s
 
s
e
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
U
n
 
a
c
o
m
p
t
e
 
r
e
q
u
i
s
 
e
n
 
p
o
u
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
l
\
'
a
c
o
m
p
t
e
 
d
o
i
t
 
Ã
ª
t
r
e
 
u
n
 
p
o
u
r
c
e
n
t
a
g
e
 
d
e
 
l
a
 
s
o
m
m
e
 
t
o
t
a
l
e
 
?
 
S
i
 
c
e
l
a
 
n
\
'
e
s
t
 
p
a
s
 
l
e
 
c
a
s
,
 
v
o
u
s
 
d
e
v
e
z
 
a
l
o
r
s
 
i
n
d
i
q
u
e
r
 
l
e
 
m
o
n
t
a
n
t
 
d
\
'
u
n
 
a
c
o
m
p
t
e
 
f
i
x
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
o
n
t
a
n
t
 
r
e
q
u
i
s
 
p
o
u
r
 
u
n
 
a
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
a
r
 
p
e
r
s
o
n
n
e
 
-
 
P
a
r
 
n
u
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
S
Ã
©
l
e
c
t
i
o
n
n
e
z
 
O
U
I
 
s
i
 
v
o
u
s
 
v
o
u
l
e
z
 
f
a
c
t
u
r
e
r
 
P
a
r
 
p
e
r
s
o
n
n
e
 
-
 
P
a
r
 
n
u
i
t
.
 
S
i
 
c
e
l
a
 
n
\
'
e
s
t
 
p
a
s
 
l
e
 
c
a
s
,
 
L
e
 
m
o
n
t
a
n
t
 
d
o
i
t
 
Ã
ª
t
r
e
 
c
a
l
c
u
l
Ã
©
 
s
u
r
 
u
n
e
 
b
a
s
e
 
P
a
r
 
c
h
a
m
b
r
e
 
-
 
P
a
r
 
n
u
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
T
a
i
l
l
e
 
d
u
 
f
i
c
h
i
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
T
a
i
l
l
e
 
M
a
x
.
 
d
u
 
f
i
c
h
i
e
r
 
I
m
a
g
e
 
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
'
)
;

j
r
_
d
e
f
i
n
e
(
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
Ã
©
s
e
r
v
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
Ã
©
t
a
i
l
s
 
d
e
 
v
o
t
r
e
 
r
Ã
©
s
e
r
v
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
N
o
u
s
 
v
o
u
s
 
r
a
p
p
e
l
o
n
s
 
q
u
e
 
l
a
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
f
a
i
t
 
o
f
f
i
c
e
 
d
e
 
c
o
n
t
r
a
t
,
 
d
o
n
c
 
s
i
 
p
a
r
 
a
u
c
u
n
e
 
r
a
i
s
o
n
 
v
o
u
s
 
d
e
v
i
e
z
 
a
n
n
u
l
e
r
 
o
u
 
r
a
c
c
o
u
r
c
i
r
 
l
a
 
d
u
r
Ã
©
e
 
d
e
 
v
o
t
r
e
 
s
Ã
©
j
o
u
r
,
 
v
o
u
s
 
r
e
s
t
e
r
e
z
 
r
e
d
e
v
a
b
l
e
 
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
Ã
©
 
d
e
 
l
a
 
s
o
m
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
 
'
<
i
>
M
o
n
t
a
n
t
 
d
e
 
l
\
'
a
n
n
u
l
a
t
i
o
n
 
e
t
 
d
e
 
l
a
 
t
e
r
m
i
n
a
i
s
o
n
 
d
u
 
c
o
n
t
r
a
t
<
/
i
>
 
S
i
 
v
o
u
s
 
d
e
v
i
e
z
 
a
n
n
u
l
e
r
 
v
o
t
r
e
 
s
Ã
©
j
o
u
r
,
 
l
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
i
o
n
 
d
\
'
a
n
n
u
l
a
t
i
o
n
 
d
o
i
t
 
Ã
ª
t
r
e
 
f
a
i
t
e
 
p
a
r
 
Ã
©
c
r
i
t
.
 
L
e
 
m
o
n
t
a
n
t
 
d
e
s
 
c
h
a
r
g
e
s
 
d
\
'
a
n
n
u
l
a
t
i
o
n
 
e
s
t
 
d
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
 
'
A
r
r
i
v
Ã
©
e
 
p
r
Ã
©
v
u
e
 
d
a
n
s
 
l
e
s
 
1
4
 
p
r
o
c
h
a
i
n
s
 
j
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
r
 
u
n
e
 
l
e
t
t
r
e
 
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
o
n
 
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
o
m
b
r
e
 
d
e
 
n
u
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
Ã
»
t
 
p
a
r
 
n
u
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
e
r
 
l
a
 
f
a
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
j
o
u
t
e
r
 
l
e
 
s
e
r
v
i
c
e
 
Ã
 
 
l
a
 
n
o
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
t
i
o
n
 
d
u
 
s
e
r
v
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
e
u
r
 
d
u
 
s
e
r
v
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
u
t
r
e
s
 
Ã
©
l
Ã
©
m
e
n
t
s
 
f
a
c
t
u
r
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
E
l
Ã
©
m
e
n
t
 
a
j
o
u
t
Ã
©
 
Ã
 
 
l
a
 
n
o
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
T
Ã
©
l
Ã
©
c
h
a
r
g
e
z
 
u
n
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
C
h
a
r
g
e
r
 
u
n
 
f
i
c
h
i
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
A
_
O
D
D
S
'
,
 
'
D
i
v
e
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
a
t
a
l
o
g
u
e
r
 
a
p
p
e
l
s
 
a
u
x
 
m
i
n
i
c
o
m
p
o
s
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
O
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
e
t
t
r
e
 
O
u
i
 
p
o
u
r
 
v
o
i
r
 
u
n
e
 
l
i
s
t
e
 
d
e
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
s
a
n
t
s
 
a
p
p
e
l
Ã
©
s
 
a
u
 
f
o
n
d
 
d
e
 
l
a
 
p
a
g
e
,
 
a
p
r
Ã
¨
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
 
Ã
©
t
Ã
©
 
e
x
Ã
©
c
u
t
Ã
©
.
 
C
e
l
a
 
d
Ã
©
s
a
c
t
i
v
e
 
a
u
s
s
i
 
l
a
 
f
o
n
c
t
i
o
n
 
i
n
t
e
r
n
e
 
d
e
 
r
e
d
i
r
e
c
t
i
o
n
,
 
c
e
 
q
u
i
 
e
s
t
 
u
t
i
l
e
 
s
i
 
v
o
u
s
 
e
s
s
a
y
e
z
 
d
\
'
i
d
e
n
t
i
f
i
e
r
 
q
u
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
s
a
m
t
s
 
f
o
n
t
 
q
u
e
l
s
 
s
e
r
v
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
E
f
f
a
c
e
r
 
c
e
t
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
 
'
F
i
c
h
i
e
r
 
e
f
f
a
c
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
S
u
p
p
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
_
J
O
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
 
'
I
l
 
n
\
'
e
s
t
 
p
a
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
 
s
u
p
p
r
i
m
e
r
 
c
e
t
t
e
 
c
h
a
m
b
r
e
,
 
i
l
 
y
 
a
 
d
Ã
©
j
Ã
 
 
d
e
s
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
 
a
s
s
i
g
n
Ã
©
e
s
.
 
A
n
n
u
l
e
z
 
c
e
s
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
 
e
t
 
r
e
c
o
m
m
e
n
c
e
z
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
 
'
C
h
a
m
b
r
e
 
s
u
p
p
r
i
m
Ã
©
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
 
'
S
u
p
p
r
i
m
e
r
 
l
e
s
 
Ã
©
q
u
i
p
e
m
e
n
t
s
 
d
e
 
l
a
 
c
h
a
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
O
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
 
'
I
l
 
n
\
'
e
s
t
 
p
a
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
 
s
u
p
p
r
i
m
e
r
 
l
\
'
Ã
©
q
u
i
p
e
m
e
n
t
 
d
e
 
c
e
t
t
e
 
c
h
a
m
b
r
e
,
 
i
l
 
e
s
t
 
d
Ã
©
j
Ã
 
 
a
s
s
i
g
n
Ã
©
 
Ã
 
 
d
\
'
a
u
t
r
e
s
 
c
h
a
m
b
r
e
s
.
 
S
u
p
p
r
i
m
e
z
 
l
\
'
Ã
©
q
u
i
p
e
m
e
n
t
 
d
e
 
c
e
s
 
c
h
a
m
b
r
e
s
 
e
t
 
r
e
c
o
m
m
e
n
c
e
z
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
 
'
E
q
u
i
p
e
m
e
n
t
 
d
e
 
l
a
 
c
h
a
m
b
r
e
 
s
u
p
p
r
i
m
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
S
u
p
p
r
i
m
e
r
 
l
\
'
Ã
©
q
u
i
p
e
m
e
n
t
 
d
e
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
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
 
'
I
l
 
n
\
'
e
s
t
 
p
a
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
 
s
u
p
p
r
i
m
e
r
 
c
e
t
 
Ã
©
q
u
i
p
e
m
e
n
t
,
 
i
l
 
e
s
t
 
d
Ã
©
j
Ã
 
 
a
s
s
i
g
n
Ã
©
 
Ã
 
 
u
n
 
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
.
 
S
u
p
p
r
i
m
e
z
 
l
\
'
Ã
©
q
u
i
p
e
m
e
n
t
 
d
e
 
c
e
t
 
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
 
e
t
 
r
e
c
o
m
m
e
n
c
e
z
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
 
'
Ã
‰
q
u
i
p
e
m
e
n
t
 
d
e
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
 
s
u
p
p
r
i
m
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
 
'
E
f
f
a
c
e
r
 
l
e
 
t
y
p
e
 
d
e
 
c
h
a
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
O
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
 
'
T
y
p
e
 
d
e
 
c
h
a
m
b
r
e
 
e
f
f
a
c
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
E
f
f
a
c
e
r
 
Ã
©
t
a
b
l
i
s
s
e
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
 
'
l
\
'
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
 
a
 
Ã
©
t
Ã
©
 
e
f
f
a
c
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
u
s
 
n
\
'
Ã
ª
t
e
s
 
p
a
s
 
a
u
t
o
r
i
s
Ã
©
 
Ã
 
 
s
u
p
p
r
i
m
e
r
 
c
e
t
 
Ã
©
t
a
b
l
i
s
s
e
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
 
'
L
a
r
g
e
u
r
 
d
e
 
l
\
'
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
C
a
r
t
e
 
d
\
'
a
c
c
Ã
¨
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
t
i
o
n
 
d
e
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
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
 
'
H
o
r
a
i
r
e
s
 
d
\
'
a
r
r
i
v
Ã
©
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
 
'
Z
o
n
e
 
d
\
'
a
c
t
i
v
i
t
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
A
c
c
Ã
¨
s
 
p
a
r
 
r
o
u
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
Ã
©
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
u
t
r
e
s
 
f
o
r
m
e
s
 
d
e
 
t
r
a
n
s
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
N
o
r
m
e
s
 
e
t
 
r
e
n
o
n
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
A
d
r
e
s
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
L
e
s
 
v
i
s
i
t
e
u
r
s
 
p
e
u
v
e
n
t
 
r
Ã
©
s
e
r
v
e
r
 
e
n
 
l
i
g
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
S
Ã
©
l
e
c
t
i
o
n
n
e
r
 
O
U
I
 
s
i
 
v
o
u
s
 
v
o
u
l
e
z
 
q
u
e
 
l
e
s
 
v
i
s
i
t
e
u
r
s
 
p
u
i
s
s
e
n
t
 
r
Ã
©
s
e
r
v
e
r
 
u
n
e
 
c
h
a
m
b
r
e
 
e
n
 
l
i
g
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
L
e
s
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
 
s
o
n
t
 
Ã
©
t
a
b
l
i
e
s
 
p
o
u
r
 
u
n
e
 
p
Ã
©
r
i
o
d
e
 
f
i
x
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
 
'
S
i
 
v
o
u
s
 
s
Ã
©
l
e
c
t
i
o
n
n
e
z
 
O
U
I
,
 
l
a
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
s
e
r
a
 
a
c
t
i
v
Ã
©
e
 
p
o
u
r
 
u
n
e
 
p
Ã
©
r
i
o
d
e
 
f
i
x
e
.
 
S
i
 
v
o
u
s
 
s
Ã
©
l
e
c
t
i
o
n
n
e
z
 
N
O
N
,
 
r
a
s
s
u
r
e
z
 
v
o
u
s
 
q
u
e
 
l
a
 
f
o
n
c
t
i
o
n
 
 
\
"
J
o
u
r
 
d
\
'
a
r
r
i
v
Ã
©
e
 
p
r
Ã
©
d
Ã
©
f
i
n
i
\
"
 
n
\
'
e
s
t
 
p
a
s
 
a
c
t
i
v
Ã
©
e
 
Ã
 
 
O
U
I
 
(
Ã
 
 
m
o
i
n
s
 
q
u
e
 
v
o
u
s
 
s
o
u
h
a
i
t
i
e
z
 
i
m
p
o
s
e
r
 
u
n
e
 
d
a
t
e
 
d
\
'
a
r
r
i
v
Ã
©
e
 
f
i
x
e
 
Ã
 
 
v
o
s
 
h
Ã
´
t
e
s
)
 
S
i
n
o
n
 
v
o
u
s
 
n
\
'
o
b
t
i
e
n
d
r
e
z
 
p
a
s
 
b
e
a
u
c
o
u
p
 
d
e
 
l
i
e
n
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
Ã
©
 
s
u
r
 
l
e
 
c
a
l
e
n
d
r
i
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
Ã
©
r
i
o
d
e
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
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
r
Ã
©
s
e
r
v
a
t
i
o
n
 
d
e
s
 
c
h
a
m
b
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
P
Ã
©
r
i
o
d
e
s
 
M
a
x
i
m
u
m
,
 
E
x
.
 
3
 
x
 
7
 
p
Ã
©
r
i
o
d
e
s
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
=
 
2
1
 
j
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
C
\
'
e
s
t
 
u
n
 
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
 
a
v
e
c
 
d
e
s
 
c
h
a
m
b
r
e
s
 
i
n
d
i
v
i
d
u
e
l
l
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
V
Ã
©
r
i
f
i
e
r
 
l
a
 
r
Ã
©
s
e
r
v
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
e
r
 
l
a
 
r
Ã
©
s
e
r
v
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
L
u
n
d
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
M
a
r
d
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
M
e
r
c
r
e
d
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
J
e
u
d
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
V
e
n
d
r
e
d
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
S
a
m
e
d
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
m
a
n
c
h
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
L
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
O
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
O
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
M
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
J
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
V
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
S
a
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
C
a
l
e
n
d
r
i
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
C
o
u
l
e
u
r
 
d
e
s
 
c
a
r
a
c
t
Ã
¨
r
e
s
 
p
o
u
r
 
l
a
 
d
a
t
e
 
a
c
t
u
e
l
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
'
,
 
'
C
o
u
l
e
u
r
 
d
e
s
 
c
a
r
a
c
t
Ã
¨
r
e
s
 
p
o
u
r
 
l
e
s
 
j
o
u
r
s
 
a
f
f
i
c
h
Ã
©
s
 
d
a
n
s
 
l
e
 
m
o
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
C
o
u
l
e
u
r
 
d
e
s
 
c
a
r
a
c
t
Ã
¨
r
e
s
 
p
o
u
r
 
l
e
s
 
j
o
u
r
s
 
q
u
i
 
n
e
 
s
o
n
t
 
p
a
s
 
a
f
f
i
c
h
Ã
©
s
 
d
a
n
s
 
l
e
 
m
o
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
u
l
e
u
r
 
d
\
'
a
r
r
i
Ã
¨
r
e
 
p
l
a
n
 
d
e
 
l
a
 
c
e
l
l
u
l
e
 
p
o
u
r
 
l
e
s
 
j
o
u
r
s
 
o
Ã
¹
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
/
c
h
a
m
b
r
e
 
e
s
t
 
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
u
l
e
u
r
 
d
\
'
a
r
r
i
Ã
¨
r
e
 
p
l
a
n
 
d
e
 
l
a
 
c
e
l
l
u
l
e
 
p
o
u
r
 
l
e
s
 
j
o
u
r
s
 
n
o
n
 
a
f
f
i
c
h
Ã
©
s
 
d
a
n
s
 
l
e
 
m
o
i
s
 
e
n
 
c
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
u
l
e
u
r
 
d
\
'
a
r
r
i
Ã
¨
r
e
 
p
l
a
n
 
d
e
 
l
a
 
c
e
l
l
u
l
e
 
p
o
u
r
 
l
e
s
 
j
o
u
r
s
 
o
c
c
u
p
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
 
'
C
o
u
l
e
u
r
 
d
\
'
a
r
r
i
Ã
¨
r
e
 
p
l
a
n
 
d
e
 
l
a
 
c
e
l
l
u
l
e
 
p
o
u
r
 
l
e
s
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
 
p
r
o
v
i
s
o
i
r
e
s
 
(
r
Ã
©
s
e
r
v
a
t
i
o
n
s
 
p
o
u
r
 
l
e
s
q
u
e
l
l
e
s
 
u
n
 
a
c
o
m
p
t
e
 
n
\
'
a
 
p
a
s
 
e
n
c
o
r
e
 
Ã
©
t
Ã
©
 
p
e
r
Ã
§
u
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
u
l
e
u
r
 
d
\
'
a
r
r
i
Ã
¨
r
e
 
p
l
a
n
 
d
e
 
l
a
 
c
e
l
l
u
l
e
 
p
o
u
r
 
l
e
s
 
j
o
u
r
s
 
a
n
t
Ã
©
r
i
e
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
c
u
p
Ã
©
/
p
a
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
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
o
u
r
 
r
Ã
©
s
e
r
v
a
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
r
Ã
©
s
e
r
v
a
t
i
o
n
s
 
p
r
o
v
i
s
o
i
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
 
'
D
a
t
e
 
d
\
'
a
r
r
i
v
Ã
©
e
 
p
r
Ã
©
d
Ã
©
f
i
n
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
U
n
i
q
u
e
m
e
n
t
 
p
o
u
r
 
l
e
s
 
s
i
t
e
s
 
o
f
f
r
a
n
t
 
d
e
s
 
p
Ã
©
r
i
o
d
e
s
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
f
i
x
e
.
 
C
h
o
i
s
i
s
s
e
z
 
l
e
 
j
o
u
r
 
d
a
n
s
 
l
e
q
u
e
l
 
l
e
s
 
a
r
r
i
v
Ã
©
e
s
 
d
o
i
v
e
n
t
 
d
Ã
©
m
a
r
r
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
 
'
J
o
u
r
 
d
\
'
a
r
r
i
v
Ã
©
 
f
i
x
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
 
'
D
u
r
Ã
©
e
 
d
u
 
s
Ã
©
j
o
u
r
 
(
e
n
 
j
o
u
r
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
A
f
f
i
c
h
e
r
 
l
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
i
l
i
t
Ã
©
s
 
s
o
u
s
 
f
o
r
m
e
 
d
e
 
c
a
l
e
n
d
r
i
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
S
Ã
©
l
e
c
t
i
o
n
n
e
z
 
O
U
I
 
s
i
 
v
o
u
s
 
v
o
u
l
e
z
 
a
f
f
i
c
h
e
r
 
l
e
 
c
a
l
e
n
d
r
i
e
r
 
d
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
i
l
i
t
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
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
q
u
e
r
 
s
u
r
 
u
n
e
 
d
a
t
e
 
l
i
b
r
e
 
p
o
u
r
 
a
c
c
Ã
©
d
e
r
 
a
u
 
f
o
r
m
u
l
a
i
r
e
 
d
e
 
r
Ã
©
s
e
r
v
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
u
v
e
l
l
e
 
e
n
t
r
Ã
©
e
 
d
\
'
i
n
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
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
S
u
p
p
r
i
m
e
r
 
l
\
'
h
Ã
´
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
L
\
'
h
Ã
´
t
e
 
a
 
Ã
©
t
Ã
©
 
s
u
p
p
r
i
m
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
C
e
 
n
\
'
e
s
t
 
p
a
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
 
s
u
p
p
r
i
m
e
r
 
c
e
t
 
h
Ã
´
t
e
 
c
a
r
 
i
l
 
y
 
a
 
d
Ã
©
j
Ã
 
 
u
n
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
e
n
 
c
o
u
r
s
.
 
A
n
n
u
l
e
z
 
l
a
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
e
t
 
r
e
c
o
m
m
e
n
c
e
z
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
A
u
c
u
n
e
 
p
r
Ã
©
f
Ã
©
r
e
n
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
e
 
d
u
 
c
a
l
e
n
d
r
i
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
 
'
F
o
r
m
a
t
 
d
\
'
e
n
t
r
Ã
©
e
 
d
u
 
c
a
l
e
n
d
r
i
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
 
'
C
e
c
i
 
p
e
r
m
e
t
 
Ã
 
 
l
\
'
u
t
i
l
i
s
a
t
e
u
r
 
d
e
 
m
o
d
i
f
i
e
r
 
l
\
'
e
n
t
r
Ã
©
e
 
d
e
s
 
d
a
t
e
s
 
d
a
n
s
 
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
Ã
©
s
e
r
v
a
t
i
o
n
s
 
Ã
 
 
p
Ã
©
r
i
o
d
e
 
f
i
x
e
 
p
e
r
m
e
t
t
e
n
t
 
d
e
s
 
c
o
u
r
t
s
 
s
Ã
©
j
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
 
'
D
u
r
Ã
©
e
 
d
u
 
s
Ã
©
j
o
u
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
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
V
Ã
©
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
 
r
Ã
©
t
r
o
s
p
e
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
 
'
N
o
m
 
(
u
t
i
l
i
s
a
t
e
u
r
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
r
 
s
u
r
 
l
a
 
d
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
e
 
a
d
a
p
t
Ã
©
 
m
i
s
 
Ã
 
 
j
o
u
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
S
t
a
t
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
v
Ã
©
e
 
e
n
 
a
t
t
e
n
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
v
e
 
a
u
j
o
u
r
d
\
'
h
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
Ã
©
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
D
Ã
©
p
a
r
t
 
a
u
j
o
u
r
d
\
'
h
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
D
Ã
©
p
a
r
t
 
e
n
 
r
e
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
I
n
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
\
'
e
s
t
 
p
a
s
 
a
r
r
i
v
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
L
a
 
c
h
a
m
b
r
e
 
a
 
Ã
©
t
Ã
©
 
c
r
Ã
©
Ã
©
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
L
a
 
c
h
a
m
b
r
e
 
a
 
Ã
©
t
Ã
©
 
m
i
s
e
-
Ã
 
-
j
o
u
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
L
a
 
c
h
a
m
b
r
e
 
a
 
Ã
©
t
Ã
©
 
s
u
p
p
r
i
m
Ã
©
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
 
'
L
\
'
Ã
©
q
u
i
p
e
m
e
n
t
 
d
e
 
l
a
 
c
h
a
m
b
r
e
 
a
 
Ã
©
t
Ã
©
 
c
r
Ã
©
Ã
©
 
'
)
;

j
r
_
d
e
f
i
n
e
(
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
 
'
L
\
'
Ã
©
q
u
i
p
e
m
e
n
t
 
d
e
 
l
a
 
c
h
a
m
b
r
e
 
a
 
Ã
©
t
Ã
©
 
m
i
s
-
Ã
 
-
j
o
u
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
 
'
L
\
'
Ã
©
q
u
i
p
e
m
e
n
t
 
d
e
 
l
a
 
c
h
a
m
b
r
e
 
a
 
Ã
©
t
Ã
©
 
e
f
f
a
c
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
L
\
'
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
 
a
 
Ã
©
t
Ã
©
 
c
r
Ã
©
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
L
\
'
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
 
a
 
Ã
©
t
Ã
©
 
m
i
s
-
Ã
 
-
j
o
u
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
L
\
'
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
 
a
 
Ã
©
t
Ã
©
 
e
f
f
a
c
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
P
a
r
a
m
Ã
¨
t
r
e
 
d
e
 
l
\
'
Ã
©
q
u
i
p
e
m
e
n
t
 
m
o
d
i
f
i
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
E
q
u
i
p
e
m
e
n
t
 
p
u
b
l
i
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
L
e
 
t
a
r
i
f
 
a
 
Ã
©
t
Ã
©
 
c
r
Ã
©
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
l
e
 
t
a
r
i
f
 
a
 
Ã
©
t
Ã
©
 
m
i
s
-
Ã
 
-
j
o
u
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
M
o
n
t
a
n
t
 
s
v
c
.
 
c
r
Ã
©
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
I
n
t
r
o
d
u
i
r
e
 
l
a
 
r
Ã
©
s
e
r
v
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
U
n
 
c
o
m
p
t
e
 
e
n
r
e
g
i
s
t
r
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
L
\
'
h
Ã
´
t
e
 
a
 
Ã
©
t
Ã
©
 
c
r
Ã
©
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
L
\
'
h
Ã
´
t
e
 
a
 
Ã
©
t
Ã
©
 
m
i
s
-
Ã
 
-
j
o
u
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
R
Ã
©
s
e
r
v
e
r
 
u
n
e
 
c
h
a
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
U
n
 
e
x
t
r
a
 
a
 
Ã
©
t
Ã
©
 
c
r
Ã
©
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
U
n
 
e
x
t
r
a
 
a
 
Ã
©
t
Ã
©
 
m
i
s
-
Ã
 
-
j
o
u
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
U
n
 
e
x
t
r
a
 
a
 
Ã
©
t
Ã
©
 
e
f
f
a
c
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
U
n
 
e
x
t
r
a
 
a
 
Ã
©
t
Ã
©
 
p
u
b
l
i
Ã
©
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
L
i
s
t
e
 
d
e
s
 
i
n
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
Ã
©
s
 
e
n
t
r
Ã
©
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
L
i
s
t
e
 
d
e
s
 
i
n
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
Ã
©
s
 
e
f
f
a
c
Ã
©
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
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
 
m
i
s
-
Ã
 
-
j
o
u
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
e
r
 
l
\
'
Ã
©
l
Ã
©
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
 
s
u
p
p
r
i
m
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
 
'
G
Ã
©
r
e
r
 
l
e
s
 
e
x
t
r
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
A
f
f
i
c
h
e
r
 
l
e
s
 
e
x
t
r
a
s
 
a
u
 
m
o
m
e
n
t
 
d
e
 
l
a
 
r
Ã
©
s
e
r
v
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
 
'
S
Ã
©
l
e
c
t
i
o
n
n
e
r
 
O
U
I
 
p
o
u
r
 
a
f
f
i
c
h
e
r
 
l
e
s
 
e
x
t
r
a
s
 
q
u
e
 
v
o
u
s
 
v
o
u
l
e
z
 
p
r
o
p
o
s
e
r
 
Ã
 
 
l
\
'
h
Ã
´
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
a
/
o
p
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
 
'
D
a
t
e
 
d
e
 
d
Ã
©
b
u
t
 
d
e
 
l
\
'
i
n
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
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
D
a
t
e
 
d
e
 
r
e
p
r
i
s
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
'
)
;

j
r
_
d
e
f
i
n
e
(
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
I
n
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
I
l
 
y
 
a
 
e
u
 
u
n
e
 
e
r
r
e
u
r
 
l
o
r
s
 
d
e
 
v
o
t
r
e
 
t
e
n
t
a
t
i
v
e
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
p
o
u
r
 
c
e
t
t
e
/
c
e
s
 
c
h
a
m
b
r
e
s
,
 
u
n
e
 
o
u
 
p
l
u
s
i
e
u
r
s
 
n
e
 
s
o
n
t
 
p
a
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
C
h
a
m
b
r
e
s
 
i
n
c
l
u
e
s
 
d
a
n
s
 
l
a
 
L
i
s
t
e
 
d
\
'
I
n
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
I
l
 
n
\
'
y
 
a
 
p
a
s
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
 
s
u
r
 
l
a
 
L
i
s
t
e
 
d
\
'
I
n
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
Ã
©
s
 
Ã
 
 
a
f
f
i
c
h
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
S
T
A
R
S
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
\
'
Ã
©
t
o
i
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
m
i
s
e
 
Ã
 
 
z
Ã
©
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
r
Ã
©
s
e
r
v
a
t
i
o
n
 
a
n
n
u
l
Ã
©
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
R
e
c
h
e
r
c
h
e
r
 
i
c
i
 
p
o
u
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
y
m
b
o
l
e
 
d
e
 
l
a
 
d
e
v
i
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
e
 
d
e
 
l
a
 
d
e
v
i
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
R
e
n
s
e
i
g
n
e
m
e
n
t
s
 
a
d
d
i
t
i
o
n
n
e
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
L
i
m
i
t
e
r
 
l
e
s
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
 
Ã
 
 
l
\
'
a
v
a
n
c
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
 
'
S
Ã
©
l
e
c
t
i
o
n
n
e
r
 
O
U
I
 
s
i
 
v
o
u
s
 
v
o
u
l
e
z
 
l
i
m
i
t
e
r
 
l
e
s
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
 
Ã
 
 
l
\
'
a
v
a
n
c
e
 
(
u
t
i
l
i
s
e
z
 
l
e
 
c
h
a
m
p
 
s
u
i
v
a
n
t
 
p
o
u
r
 
e
n
t
r
e
r
 
l
a
 
l
i
m
i
t
e
 
e
n
 
n
o
m
b
r
e
 
d
e
 
j
o
u
r
s
)
.
 
S
i
 
v
o
u
s
 
s
Ã
©
l
e
c
t
i
o
n
n
e
z
 
O
U
I
 
a
l
o
r
s
 
l
\
'
u
t
i
l
i
s
a
t
e
u
r
 
q
u
i
 
s
o
u
h
a
i
t
e
r
a
 
r
Ã
©
s
e
r
v
e
r
 
a
v
a
n
t
 
n
 
j
o
u
r
s
 
Ã
 
 
l
\
'
a
v
a
n
c
e
 
s
e
r
a
 
e
n
r
e
g
i
s
t
r
Ã
©
 
Ã
 
 
l
a
 
d
a
t
e
 
d
\
'
a
u
j
o
u
r
d
\
'
h
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
L
e
 
n
o
m
b
r
e
 
d
e
 
j
o
u
r
s
 
p
o
u
r
 
l
a
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
Ã
 
 
l
\
'
a
v
a
n
c
e
 
e
s
t
 
l
i
m
i
t
Ã
©
 
Ã
 
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
T
a
x
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
T
a
x
e
 
p
o
u
r
 
l
a
 
c
h
a
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
O
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
M
o
n
t
a
n
t
 
d
e
s
 
t
a
x
e
s
 
f
i
x
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
 
'
P
o
u
r
c
e
n
t
a
g
e
 
d
e
 
l
a
 
t
a
x
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
T
a
x
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
 
'
P
o
u
r
c
e
n
t
a
g
e
 
d
e
 
l
a
 
t
a
x
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
c
h
i
v
e
r
 
t
o
u
s
 
l
e
s
 
e
n
r
e
g
i
s
t
r
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
N
o
s
 
T
a
r
i
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
u
 
T
a
r
i
f
'
)
;

j
r
_
d
e
f
i
n
e
(
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
t
i
o
n
 
d
u
 
t
a
r
i
f
'
)
;

j
r
_
d
e
f
i
n
e
(
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
 
'
T
y
p
e
 
d
e
 
c
h
a
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
a
l
i
d
e
 
d
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
a
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
a
r
 
p
e
r
s
o
n
n
e
 
e
t
 
p
a
r
 
n
u
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
a
r
 
n
u
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
\
'
i
n
c
l
u
e
 
p
a
s
 
l
e
s
 
w
e
e
k
-
e
n
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
M
i
n
i
m
u
m
 
d
e
 
j
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
M
a
x
i
m
u
m
 
d
e
 
j
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
e
r
s
o
n
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
M
a
x
i
m
u
m
 
d
e
 
p
e
r
s
o
n
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
A
f
f
i
c
h
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
 
'
E
d
i
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
M
e
t
t
r
e
 
Ã
 
 
j
o
u
r
 
l
e
 
t
e
x
t
e
 
p
e
r
s
o
n
n
a
l
i
s
Ã
©
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
 
'
E
d
i
t
e
r
 
l
a
 
l
a
n
g
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
y
p
e
 
d
\
'
Ã
©
t
a
b
l
i
s
s
e
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
i
s
t
e
r
 
l
e
s
 
t
y
p
e
s
 
d
\
'
Ã
©
t
a
b
l
i
s
s
e
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
e
r
 
l
e
 
t
y
p
e
 
d
\
'
Ã
©
t
a
b
l
i
s
s
e
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
y
p
e
s
 
d
\
'
Ã
©
t
a
b
l
i
s
s
e
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
t
i
o
n
 
d
u
 
t
y
p
e
 
d
\
'
Ã
©
t
a
b
l
i
s
s
e
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
y
p
e
s
 
d
\
'
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
s
 
s
a
u
v
e
g
a
r
d
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
t
y
p
e
(
s
)
 
d
\
'
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
(
s
)
 
s
u
p
p
r
i
m
Ã
©
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
a
p
p
e
l
 
d
e
 
p
a
i
e
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
P
a
s
 
d
e
 
s
e
r
v
i
c
e
s
 
s
u
p
p
l
Ã
©
m
e
n
t
a
i
r
e
s
 
Ã
 
 
a
j
o
u
t
e
r
 
Ã
 
 
l
a
 
n
o
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
U
n
 
a
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
S
o
m
m
e
 
t
o
t
a
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
M
o
n
t
a
n
t
 
e
n
r
e
g
i
s
t
r
Ã
©
 
a
u
 
m
o
m
e
n
t
 
d
e
 
l
a
 
r
Ã
©
s
e
r
v
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
 
'
U
t
i
l
i
s
e
z
 
c
e
t
t
e
 
o
p
t
i
o
n
 
p
o
u
r
 
d
Ã
©
c
i
d
e
r
 
c
e
 
q
u
i
 
s
e
r
a
 
f
a
c
t
u
r
Ã
©
 
l
o
r
s
 
d
e
 
l
a
 
r
Ã
©
s
e
r
v
a
t
i
o
n
.
 
C
h
o
i
s
i
s
e
z
 
l
e
 
U
n
 
a
c
o
m
p
t
e
,
 
s
i
 
u
n
 
a
c
o
m
p
t
e
 
d
o
i
t
 
Ã
ª
t
r
e
 
p
e
r
Ã
§
u
 
o
u
 
l
e
 
m
o
n
t
a
n
t
 
t
o
t
a
l
 
s
i
 
c
\
'
e
s
t
 
c
e
l
u
i
 
q
u
i
 
d
o
i
t
 
Ã
ª
t
r
e
 
p
e
r
Ã
§
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
o
i
s
 
d
u
 
c
a
l
e
n
d
r
i
e
r
 
Ã
 
 
a
f
f
i
c
h
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
 
'
D
a
n
s
 
l
a
 
m
i
s
e
 
Ã
 
 
d
i
s
p
o
s
i
t
i
o
n
 
d
e
s
 
c
h
a
m
b
r
e
s
,
 
c
o
m
b
i
e
n
 
d
e
 
m
o
i
s
 
l
e
 
c
a
l
e
n
d
r
i
e
r
 
d
o
i
t
-
i
l
 
a
f
f
i
c
h
e
r
 
?
'
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
y
m
e
n
t
 
G
a
t
e
w
a
y
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
A
n
n
u
l
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
 
'
V
e
u
i
l
l
e
z
 
c
h
o
i
s
i
r
 
l
a
/
l
e
s
 
c
h
a
m
b
r
e
(
s
)
 
q
u
e
 
v
o
u
s
 
v
o
u
l
e
z
 
p
r
e
n
d
r
e
,
 
e
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
p
r
o
p
r
i
Ã
©
e
s
.
 
<
b
r
>
s
i
 
u
n
e
 
c
h
a
m
b
r
e
 
n
\
'
a
 
p
a
s
 
d
e
 
m
a
r
q
u
e
 
\
"
v
Ã
©
r
i
f
i
Ã
©
e
\
"
,
 
c
e
l
l
e
-
c
i
 
n
e
 
p
o
u
r
r
a
 
p
a
s
 
Ã
ª
t
r
e
 
i
n
s
Ã
©
r
Ã
©
e
 
d
a
n
s
 
l
a
 
L
i
s
t
e
 
d
\
'
I
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
 
a
v
a
n
t
 
l
a
 
f
i
n
 
o
u
 
l
\
'
a
n
n
u
l
a
t
i
o
n
 
d
e
 
l
a
 
r
Ã
©
s
e
r
v
a
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
 
L
o
r
s
q
u
e
 
v
o
u
s
 
a
v
e
z
 
c
h
o
i
s
i
 
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
p
r
o
p
r
i
Ã
©
e
s
,
 
c
l
i
q
u
e
z
 
s
u
r
 
l
e
 
b
o
u
t
o
n
 
b
l
e
u
 
\
"
a
p
p
l
i
q
u
Ã
©
\
"
 
p
o
u
r
 
r
e
v
Ã
©
r
i
f
i
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
Ã
©
 
d
e
 
l
a
 
c
h
a
m
b
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
<
b
>
I
l
 
s
e
m
b
l
e
r
a
i
t
 
q
u
e
 
J
o
o
m
l
a
 
v
o
u
s
 
a
 
d
Ã
©
c
o
n
n
e
c
t
Ã
©
 
p
a
r
 
i
n
a
c
t
i
v
i
t
Ã
©
<
/
b
>
 
V
e
u
i
l
l
e
z
 
v
o
u
s
 
r
e
c
o
n
n
e
c
t
e
r
 
e
t
 
r
Ã
©
e
s
s
a
y
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
i
s
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
s
e
r
 
l
e
s
 
g
a
t
e
w
a
y
s
 
d
e
 
p
a
i
e
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
V
e
u
i
l
l
e
z
 
s
Ã
©
l
e
c
t
i
o
n
n
e
r
 
v
o
t
r
e
 
m
Ã
©
t
h
o
d
e
 
d
e
 
p
a
i
e
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
G
a
t
e
w
a
y
 
a
c
t
i
v
Ã
©
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
a
r
a
m
Ã
¨
t
r
e
s
 
d
e
s
 
<
i
>
p
l
u
g
i
n
s
<
/
i
>
 
m
o
d
i
f
i
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
I
n
s
Ã
©
r
e
r
 
l
e
s
 
p
a
r
a
m
Ã
¨
t
r
e
s
 
d
e
s
 
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
o
i
r
 
l
e
 
s
i
t
e
 
i
n
t
e
r
n
e
t
 
d
e
 
c
e
t
t
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
e
n
 
e
x
t
Ã
©
r
i
e
u
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
I
n
t
r
o
d
u
i
s
e
z
 
i
c
i
 
u
n
 
l
i
e
n
 
v
e
r
s
 
v
o
t
r
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
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
e
r
 
l
a
 
c
a
r
t
e
 
d
e
 
c
r
Ã
©
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
 
'
E
d
i
t
e
r
 
l
a
 
t
a
i
l
l
e
 
d
e
 
l
\
'
i
c
o
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
r
a
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
A
f
f
i
c
h
e
r
 
l
e
 
l
i
e
n
 
v
e
r
s
 
l
e
s
 
d
i
a
p
o
r
a
m
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
A
f
f
i
c
h
e
r
 
l
e
s
 
d
i
a
p
o
r
a
m
a
s
 
e
n
 
l
i
g
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
g
e
s
 
d
e
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
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
A
f
f
i
c
h
e
r
 
l
e
 
l
i
e
n
 
v
e
r
s
 
l
e
s
 
t
a
r
i
f
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
F
e
n
Ã
ª
t
r
e
s
 
<
i
>
p
o
p
u
p
<
/
i
>
 
a
u
t
o
r
i
s
Ã
©
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
h
a
r
g
e
r
 
i
m
a
g
e
s
 
p
a
r
 
l
o
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
D
i
v
e
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
t
i
o
n
 
d
u
 
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
s
e
r
 
l
e
s
 
d
i
s
p
o
s
i
t
i
f
s
 
g
l
o
b
a
u
x
 
d
e
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
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
Ã
´
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
S
Ã
©
l
e
c
t
i
o
n
n
e
r
 
l
e
 
<
i
>
p
l
u
g
i
n
<
/
i
>
 
d
e
 
r
e
c
h
e
r
c
h
e
 
q
u
e
 
v
o
u
s
 
v
o
u
l
e
z
 
u
t
i
l
i
s
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
D
Ã
©
s
o
l
Ã
©
,
 
v
o
t
r
e
 
r
e
c
h
e
r
c
h
e
 
n
\
'
a
 
p
a
s
 
r
e
t
o
u
r
n
Ã
©
e
 
d
e
 
r
Ã
©
s
u
l
t
a
t
s
.
 
V
e
u
i
l
l
e
z
 
m
o
d
i
f
i
e
r
 
l
e
s
 
p
a
r
a
m
Ã
¨
t
r
e
s
 
d
e
 
v
o
t
r
e
 
r
e
c
h
e
r
c
h
e
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
E
t
e
s
 
v
o
u
s
 
c
e
r
t
a
i
n
 
d
e
 
v
o
u
l
o
i
r
 
r
Ã
©
a
l
i
s
e
r
 
c
e
t
t
e
 
a
c
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
Ã
©
s
e
r
v
e
r
 
u
n
e
 
c
h
a
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
Ã
©
s
e
r
v
e
z
 
c
e
t
t
e
 
a
n
n
o
n
c
e
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
V
o
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
s
 
e
n
 
l
i
g
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
A
d
r
e
s
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
D
Ã
©
t
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
q
u
e
z
 
p
o
u
r
 
v
o
i
r
 
l
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
i
l
i
t
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
 
'
V
o
i
r
 
l
\
'
a
d
r
e
s
s
e
 
a
v
e
c
 
c
e
 
l
i
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
 
'
V
o
i
r
 
l
\
'
a
n
n
o
n
c
e
 
a
v
e
c
 
c
e
 
l
i
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
 
'
V
o
i
r
 
l
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
i
l
i
t
Ã
©
s
 
a
v
e
c
 
c
e
 
l
i
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
P
o
u
r
c
e
n
t
a
g
e
 
d
u
 
t
a
r
i
f
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
M
o
y
e
n
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
Ã
©
l
e
c
t
i
o
n
n
e
z
 
l
e
 
m
o
d
Ã
¨
l
e
 
d
e
 
t
a
r
i
f
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
 
'
V
o
u
s
 
a
v
e
z
 
2
 
c
h
o
i
x
 
d
e
 
c
a
l
c
u
l
 
d
u
 
t
a
r
i
f
.
 
A
u
 
p
r
e
m
i
e
r
,
 
\
"
t
a
r
i
f
 
u
n
i
q
u
e
\
"
,
 
p
e
r
m
e
t
 
d
\
'
o
f
f
r
i
r
 
u
n
e
 
v
a
r
i
Ã
©
t
Ã
©
 
d
e
 
t
a
r
i
f
s
 
d
i
f
f
Ã
©
r
e
n
t
s
 
Ã
 
 
l
\
'
h
Ã
´
t
e
 
Ã
 
 
l
a
 
m
Ã
ª
m
e
 
t
a
x
e
 
p
e
n
d
a
n
t
 
t
o
u
t
 
l
e
 
s
Ã
©
j
o
u
r
.
 
C
e
c
i
 
e
s
t
 
u
t
i
l
e
 
s
i
 
v
o
u
s
 
v
o
u
l
e
z
 
d
i
v
e
r
s
 
t
a
r
i
f
s
 
d
i
f
f
Ã
©
r
e
n
t
s
 
p
o
u
r
 
l
a
 
m
Ã
ª
m
e
 
d
a
t
e
,
 
p
a
r
 
e
x
e
m
p
l
e
 
t
a
r
i
f
 
l
i
t
 
e
t
 
p
e
t
i
t
 
d
Ã
©
j
e
u
n
e
r
,
 
e
t
 
t
a
r
i
f
 
l
i
t
 
p
e
t
i
t
 
d
Ã
©
j
e
u
n
e
r
 
e
t
 
d
Ã
®
n
e
r
.
 
C
h
o
i
s
i
s
s
e
z
 
l
e
 
t
a
r
i
f
 
\
"
m
o
y
e
n
n
e
s
\
"
 
s
i
 
v
o
u
s
 
v
o
u
l
e
z
 
a
j
u
s
t
e
r
 
v
o
s
 
p
r
i
x
 
e
n
 
f
o
n
c
t
i
o
n
 
d
e
 
l
a
 
d
a
t
e
 
e
n
 
q
u
e
s
t
i
o
n
.
 
J
o
m
r
e
s
 
t
r
o
u
v
e
r
a
 
t
o
u
s
 
l
e
s
 
t
a
r
i
f
s
 
p
o
u
r
 
c
h
a
q
u
e
 
j
o
u
r
 
d
e
 
l
a
 
r
Ã
©
s
e
r
v
a
t
i
o
n
,
 
l
e
s
 
g
r
o
u
p
e
 
e
n
s
e
m
b
l
e
 
e
t
 
r
e
t
o
u
r
n
e
 
l
a
 
t
a
x
e
 
m
o
y
e
n
n
e
 
p
o
u
r
 
l
a
 
p
Ã
©
r
i
o
d
e
 
d
e
 
s
Ã
©
j
o
u
r
'
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
V
o
i
r
 
l
e
s
 
d
a
t
e
s
 
d
e
 
d
Ã
©
p
a
r
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
 
'
S
Ã
©
l
e
c
t
i
o
n
n
e
z
 
n
o
n
 
s
i
 
v
o
u
s
 
n
e
 
v
o
u
l
e
z
 
p
a
s
 
v
o
i
r
 
a
p
p
a
r
a
i
t
r
e
 
l
a
 
d
a
t
e
 
d
e
 
d
Ã
©
p
a
r
t
 
d
a
n
s
 
u
n
e
 
b
o
i
t
e
 
d
e
 
s
Ã
©
l
e
c
t
i
o
n
.
 
C
o
n
s
e
i
l
l
a
b
l
e
 
s
e
u
l
e
m
e
n
t
 
s
i
 
v
o
u
s
 
s
a
v
e
z
 
c
e
 
q
u
e
 
v
o
u
s
 
f
a
Ã
®
t
e
s
,
 
c
a
r
 
l
a
 
d
a
t
e
 
d
e
 
d
Ã
©
p
a
r
t
 
d
a
n
s
 
l
e
s
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
 
s
e
r
a
 
t
o
u
j
o
u
r
s
 
a
j
u
s
t
Ã
©
e
 
a
u
 
j
o
u
r
 
s
u
i
v
a
n
t
 
l
\
'
a
r
r
i
v
Ã
©
e
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
P
a
r
a
m
Ã
¨
t
r
e
s
 
d
e
s
 
l
i
m
i
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
L
i
m
i
t
a
t
i
o
n
 
d
u
 
n
o
m
b
r
e
 
d
e
 
c
a
r
a
c
t
Ã
¨
r
e
s
 
v
i
s
i
b
l
e
s
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
F
o
r
m
a
t
 
e
t
 
s
t
y
l
e
 
d
e
 
l
a
 
d
a
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
A
n
n
u
l
e
r
 
p
u
b
l
i
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
A
_
G
L
O
B
A
L
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
t
y
p
e
 
d
e
 
c
h
a
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
I
N
F
O
'
,
 
'
P
o
u
r
 
a
s
s
i
g
n
e
r
 
u
n
e
 
i
m
a
g
e
 
Ã
 
 
c
e
t
 
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
 
i
l
 
f
a
u
t
 
d
\
'
a
b
o
r
d
 
c
h
a
r
g
e
r
 
u
n
e
 
i
m
a
g
e
 
p
o
u
r
 
l
e
 
t
y
p
e
 
d
e
 
c
h
a
m
b
r
e
 
d
a
n
s
 
l
e
 
r
Ã
©
p
e
r
t
o
i
r
e
 
/
i
m
a
g
e
s
/
s
t
o
r
i
e
s
/
j
o
m
r
e
s
/
r
m
t
y
p
e
s
/
 
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
R
R
E
U
R
 
-
 
C
o
u
l
e
u
r
 
d
u
 
f
o
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
L
a
n
g
u
e
 
p
a
r
 
d
Ã
©
f
a
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
L
e
s
 
c
h
a
m
p
s
 
m
a
r
q
u
Ã
©
s
 
p
a
r
 
u
n
e
 
Ã
©
t
o
i
l
e
 
s
o
n
t
 
r
e
q
u
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
L
\
'
u
t
i
l
i
s
a
t
e
u
r
 
p
e
u
t
 
e
n
r
e
g
i
s
t
r
e
r
 
l
e
s
 
p
a
r
a
m
Ã
¨
t
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
 
'
U
t
i
l
i
s
e
z
 
c
e
t
t
e
 
o
p
t
i
o
n
 
s
i
 
v
o
u
s
 
v
o
u
l
e
z
 
q
u
e
 
l
\
'
u
t
i
l
i
s
a
t
e
u
r
 
s
\
'
e
n
r
e
g
i
s
t
r
e
 
s
a
n
s
 
i
n
t
e
r
v
e
n
t
i
o
n
 
d
e
 
l
\
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
t
e
u
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
L
e
s
 
c
h
a
m
p
s
 
m
a
r
q
u
Ã
©
s
 
p
a
r
 
u
n
e
 
Ã
©
t
o
i
l
e
 
s
o
n
t
 
r
e
q
u
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
C
r
Ã
©
e
r
 
l
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
 
'
M
o
n
t
r
e
r
 
l
e
 
c
a
l
e
n
d
r
i
e
r
 
a
v
e
c
 
l
\
'
a
n
n
Ã
©
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
Ã
©
s
 
d
e
p
u
i
s
 
l
e
 
d
Ã
©
b
u
t
 
d
e
 
c
e
t
t
e
 
a
n
n
Ã
©
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
N
o
m
b
r
e
 
d
e
 
c
h
a
m
b
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
s
'
)
;

j
r
_
d
e
f
i
n
e
(
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
R
e
t
o
u
r
 
s
u
r
 
l
e
 
d
Ã
©
t
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
 
'
T
y
p
e
 
d
e
 
c
h
a
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
 
d
e
 
r
e
c
h
e
r
c
h
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
C
o
n
v
e
r
t
i
r
 
l
a
 
g
r
i
l
l
e
 
d
e
 
t
a
r
i
f
 
a
v
e
c
 
G
o
o
g
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
s
i
o
n
 
d
u
 
t
a
u
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
_
J
O
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
A
u
t
o
r
i
s
e
r
 
l
\
'
Ã
©
d
i
t
e
u
r
 
H
T
M
L
 
p
o
u
r
 
l
e
s
 
u
t
i
l
i
s
a
t
e
u
r
s
 
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
 
'
U
t
i
l
i
s
e
z
 
c
e
 
f
o
r
m
u
l
a
i
r
e
 
p
o
u
r
 
e
f
f
e
c
t
u
e
r
 
v
o
t
r
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
.
 
D
Ã
©
p
l
a
c
e
z
 
v
o
t
r
e
 
s
o
u
r
i
s
 
s
u
r
 
l
\
'
i
m
a
g
e
 
d
u
 
\
"
i
\
"
 
p
o
u
r
 
p
l
u
s
 
d
\
'
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
 
s
u
r
 
l
a
 
c
o
l
o
n
n
e
.
 
M
o
d
i
f
i
e
z
 
l
e
s
 
p
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
Ã
©
s
 
d
e
s
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
 
c
o
m
m
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
\
'
a
r
r
i
v
Ã
©
e
 
o
u
 
d
e
 
d
Ã
©
p
a
r
t
 
e
t
 
l
e
s
 
n
u
m
Ã
©
r
o
s
 
d
e
s
 
h
Ã
´
t
e
s
,
 
p
u
i
s
 
s
Ã
©
l
e
c
t
i
o
n
n
e
z
 
l
a
 
o
u
 
l
e
s
 
c
h
a
m
b
r
e
s
 
v
o
u
l
u
e
s
 
d
e
p
u
i
s
 
l
a
 
l
i
s
t
e
.
 
C
l
i
q
u
e
z
 
s
u
r
 
n
\
'
i
m
p
o
r
t
e
 
q
u
e
l
l
e
 
c
h
a
m
b
r
e
 
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
o
u
r
 
l
\
'
a
j
o
u
t
e
r
 
Ã
 
 
l
a
 
l
i
s
t
e
 
d
e
s
 
r
Ã
©
s
e
r
v
a
t
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
.
 
Q
u
a
n
d
 
v
o
u
s
 
a
u
r
e
z
 
t
e
r
m
i
n
Ã
©
,
 
v
o
u
s
 
p
o
u
v
e
z
 
a
j
o
u
t
e
r
 
d
e
s
 
s
e
r
v
i
c
e
s
 
s
u
p
p
l
Ã
©
m
e
n
t
a
i
r
e
s
 
(
o
p
t
i
o
n
)
 
e
t
 
r
e
m
p
l
i
r
 
l
e
 
n
o
m
,
 
a
d
r
e
s
s
e
 
e
t
c
.
 
Q
u
a
n
d
 
l
e
 
f
o
r
m
u
l
a
i
r
e
 
s
o
i
t
 
p
r
Ã
ª
t
,
 
c
o
n
f
i
r
m
e
z
 
v
o
t
r
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
e
n
 
c
l
i
q
u
a
n
t
 
s
o
u
m
e
t
t
r
e
 
(
s
u
b
m
i
t
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
 
'
U
t
i
l
i
s
e
z
 
c
e
 
f
o
r
m
u
l
a
i
r
e
 
p
o
u
r
 
v
o
t
r
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
.
 
L
e
 
\
"
i
\
"
 
v
o
u
s
 
f
o
u
r
n
i
t
 
d
\
'
a
v
a
n
t
a
g
e
 
d
\
'
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
 
s
u
r
 
l
a
 
c
o
l
o
n
n
e
.
 
V
o
u
s
 
p
o
u
v
e
z
 
m
o
d
i
f
i
e
r
 
v
o
s
 
s
o
u
h
a
i
t
s
 
(
a
r
r
i
v
Ã
©
e
,
 
d
Ã
©
p
a
r
t
,
 
n
o
m
b
r
e
 
d
e
 
p
e
r
s
o
n
n
e
s
)
 
Ã
 
 
t
o
u
t
 
m
o
m
e
n
t
.
 
Q
u
a
n
d
 
v
o
u
s
 
a
u
r
e
z
 
t
e
r
m
i
n
Ã
©
,
 
v
o
u
s
 
p
o
u
v
e
z
 
a
j
o
u
t
e
r
 
s
\
'
i
l
 
y
 
a
 
l
i
e
u
 
d
e
s
 
o
p
t
i
o
n
s
 
o
u
 
s
e
r
v
i
c
e
s
 
s
u
p
p
l
Ã
©
m
e
n
t
a
i
r
e
s
 
e
t
 
c
o
n
f
i
r
m
e
r
 
a
v
e
c
 
l
e
 
b
o
u
t
o
n
 
s
o
u
m
e
t
t
r
e
 
(
s
u
b
m
i
t
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
O
p
t
i
o
n
s
 
d
e
 
r
Ã
©
s
e
r
v
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
Ã
©
l
e
c
t
i
o
n
 
d
e
 
v
o
s
 
d
Ã
©
t
a
i
l
s
 
d
e
 
d
e
m
a
n
d
e
 
d
e
 
r
Ã
©
s
e
r
v
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
Ã
©
 
'
)
;

j
r
_
d
e
f
i
n
e
(
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
 
'
C
h
o
i
s
i
s
s
e
z
 
l
a
 
o
u
 
l
e
s
 
c
h
a
m
b
r
e
(
s
)
 
q
u
e
 
v
o
u
s
 
v
o
u
l
e
z
'
)
;

j
r
_
d
e
f
i
n
e
(
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
V
Ã
©
r
i
f
i
e
z
 
s
i
 
c
e
l
a
 
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
 
e
n
 
c
e
 
m
o
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
S
e
r
v
i
c
e
s
 
e
n
 
o
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
A
j
o
u
t
e
r
 
u
n
e
 
o
u
 
d
e
s
 
o
p
t
i
o
n
(
s
)
 
Ã
 
 
m
o
n
 
s
Ã
©
j
o
u
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
a
r
 
n
u
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
V
o
t
r
e
 
a
d
r
e
s
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
M
e
r
c
i
 
d
e
 
r
e
m
p
l
i
r
 
v
o
s
 
d
Ã
©
t
a
i
l
s
.
 
V
e
u
i
l
l
e
z
 
r
e
m
a
r
q
u
e
r
 
l
e
s
 
c
h
a
m
p
s
 
o
b
l
i
g
a
t
o
i
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
C
h
a
m
b
r
e
s
 
s
Ã
©
l
e
c
t
i
o
n
n
Ã
©
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
 
'
<
b
r
>
L
a
 
d
a
t
e
 
d
\
'
a
r
r
i
v
Ã
©
e
 
a
u
 
p
l
u
s
 
t
Ã
´
t
 
e
s
t
 
l
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
a
r
 
n
u
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
o
p
t
i
o
n
(
s
)
 
r
e
t
e
n
u
e
(
s
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
 
'
R
Ã
©
s
e
r
v
a
t
i
o
n
s
 
p
r
Ã
©
v
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
T
a
x
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
R
e
m
i
s
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
 
a
v
e
c
 
o
p
t
i
o
n
(
s
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
Ã
´
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
M
e
r
c
i
 
d
e
 
c
o
n
f
i
r
m
e
r
 
e
n
 
c
l
i
q
u
a
n
t
 
p
o
u
r
 
a
j
o
u
t
e
r
 
v
o
t
r
e
 
s
Ã
©
l
e
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
J
\
'
a
n
n
u
l
e
 
e
t
 
e
f
f
a
c
e
 
c
e
t
t
e
 
s
Ã
©
l
e
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
 
'
T
y
p
e
s
 
d
e
s
 
h
Ã
´
t
e
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
 
'
T
y
p
e
 
d
\
'
h
Ã
´
t
e
s
,
 
e
x
.
 
a
d
u
l
t
e
s
,
 
e
n
f
a
n
t
s
 
e
n
t
r
e
 
5
-
1
0
 
a
n
s
,
 
o
u
 
Ã
©
t
u
d
i
a
n
t
s
,
 
e
t
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
R
e
m
a
r
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
 
'
R
e
m
a
r
q
u
e
s
 
q
u
e
 
v
o
u
s
 
v
o
u
l
e
z
 
f
o
r
m
u
l
e
r
 
q
u
a
n
t
 
a
u
 
t
y
p
e
 
d
\
'
h
Ã
´
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
a
x
i
m
u
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
 
'
L
e
 
n
o
m
b
r
e
 
m
a
x
i
m
u
m
 
d
\
'
h
Ã
´
t
e
s
 
d
e
 
c
e
 
t
y
p
e
 
q
u
i
 
p
e
u
t
 
Ã
ª
t
r
e
 
s
Ã
©
l
e
c
t
i
o
n
n
Ã
©
 
d
a
n
s
 
c
e
 
f
o
r
m
u
l
a
i
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
e
s
t
 
u
n
 
p
o
u
r
c
e
n
t
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
 
'
c
e
 
r
Ã
©
s
u
l
t
a
t
 
e
s
t
 
u
n
 
p
o
u
r
c
e
n
t
a
g
e
 
c
a
l
c
u
l
Ã
©
 
s
u
r
 
l
a
 
v
a
l
e
u
r
 
d
e
 
l
a
 
c
h
a
m
b
r
e
.
 
S
i
 
v
o
u
s
 
i
n
d
i
q
u
e
z
 
n
o
n
,
 
a
l
o
r
s
 
l
a
 
v
a
l
e
u
r
 
q
u
e
 
v
o
u
s
 
i
n
d
i
q
u
e
z
 
e
s
t
 
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
 
a
j
o
u
t
Ã
©
e
 
o
u
 
r
e
t
r
a
n
c
h
Ã
©
e
 
d
e
 
l
a
 
v
a
l
e
u
r
 
d
e
 
b
a
s
e
 
d
e
 
l
a
 
c
h
a
m
b
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
j
o
u
t
e
z
 
l
a
 
d
i
f
f
Ã
©
r
e
n
c
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
 
'
L
e
 
r
Ã
©
s
u
l
t
a
t
 
e
s
t
 
a
j
o
u
t
Ã
©
 
o
u
 
r
e
t
r
a
n
c
h
Ã
©
 
d
e
 
l
a
 
v
a
l
e
u
r
 
d
e
 
b
a
s
e
 
l
a
 
c
h
a
m
b
r
e
.
 
S
i
 
v
o
u
s
 
i
n
d
i
q
u
e
z
 
n
o
n
,
 
l
e
 
r
a
b
a
i
s
 
s
e
r
a
 
a
p
p
l
i
q
u
Ã
©
 
s
u
r
 
l
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
D
i
f
f
Ã
©
r
e
n
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
L
a
 
v
a
l
e
u
r
 
d
e
 
l
a
 
d
i
f
f
Ã
©
r
e
n
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
 
'
T
y
p
e
 
d
\
'
o
r
d
r
e
 
c
l
i
e
n
t
 
m
o
d
i
f
i
Ã
©
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
 
'
T
y
p
e
 
d
e
 
c
l
i
e
n
t
 
e
f
f
a
c
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
 
'
T
y
p
e
 
d
e
 
c
l
i
e
n
t
 
c
r
Ã
©
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
 
'
T
y
p
e
 
d
e
 
c
l
i
e
n
t
 
m
i
s
 
Ã
 
 
j
o
u
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
 
'
T
y
p
e
 
d
e
 
c
l
i
e
n
t
 
m
i
s
 
Ã
 
 
j
o
u
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
 
'
M
o
n
t
r
e
r
 
l
e
 
l
i
e
n
 
v
e
r
s
 
l
a
 
l
i
s
t
e
 
d
e
 
c
h
a
m
b
r
e
s
 
d
a
n
s
 
l
e
s
 
d
Ã
©
t
a
i
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
r
i
Ã
©
t
Ã
©
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
 
'
M
o
n
t
r
e
r
 
<
b
>
u
n
i
q
u
e
m
e
n
t
<
/
b
>
 
l
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
i
l
i
t
Ã
©
s
 
p
o
u
r
 
l
e
 
c
a
l
e
n
d
r
i
e
r
/
l
a
 
l
i
s
t
e
 
d
e
s
 
c
h
a
m
b
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
 
'
C
l
i
q
u
e
z
 
O
u
i
 
p
o
u
r
 
d
Ã
©
s
a
c
t
i
v
e
r
 
l
\
'
a
f
f
i
c
h
a
g
e
 
d
e
 
l
\
'
e
n
t
Ã
ª
t
e
 
e
t
 
d
e
s
 
d
Ã
©
t
a
i
l
s
,
 
d
e
 
f
a
Ã
§
o
n
 
Ã
 
 
n
\
'
a
v
o
i
r
 
q
u
e
 
l
e
 
c
a
l
e
n
d
r
i
e
r
 
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
Ã
©
s
 
d
a
n
s
 
l
a
 
p
a
g
e
 
d
e
 
d
Ã
©
t
a
i
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
r
i
Ã
©
t
Ã
©
.
 
D
e
s
t
i
n
Ã
©
 
v
r
a
i
m
e
n
t
 
a
u
x
 
u
t
i
l
i
s
a
t
e
u
r
s
 
q
u
i
 
l
o
u
e
n
t
 
d
e
s
 
p
r
o
p
r
i
Ã
©
t
Ã
©
s
 
m
o
n
o
-
c
h
a
m
b
r
e
 
(
m
a
i
s
o
n
s
,
 
a
p
p
a
r
t
e
m
e
n
t
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
l
e
 
m
i
n
i
m
u
m
 
A
r
r
i
v
Ã
©
e
-
D
Ã
©
p
a
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
 
'
i
n
t
e
r
v
a
l
l
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
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
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
e
 
d
\
'
a
r
r
i
v
Ã
©
e
 
e
t
 
l
a
 
d
a
t
e
 
d
e
 
d
Ã
©
p
a
r
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
 
'
L
e
 
f
o
r
m
u
l
a
i
r
e
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
m
o
n
t
r
e
 
l
e
 
n
u
m
Ã
©
r
o
 
d
e
 
l
a
 
c
h
a
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
O
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
 
'
L
e
 
f
o
r
m
u
l
a
i
r
e
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
m
o
n
t
r
e
 
l
e
 
n
o
m
 
d
e
 
l
a
 
c
h
a
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
O
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
 
'
L
e
 
f
o
r
m
u
l
a
i
r
e
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
m
o
n
t
r
e
 
l
e
 
t
i
t
r
e
 
d
u
 
t
a
r
i
f
'
)
;

j
r
_
d
e
f
i
n
e
(
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
I
n
f
o
s
 
c
l
i
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
 
'
j
o
u
r
s
 
a
v
a
n
t
 
l
\
'
a
r
r
i
v
Ã
©
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
 
'
L
e
 
n
o
m
b
r
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
 
j
o
u
r
s
 
q
u
i
 
d
o
i
v
e
n
t
 
p
a
s
s
e
r
,
 
Ã
 
 
p
a
r
t
i
r
 
d
e
 
\
"
a
u
j
o
u
r
d
\
'
h
u
i
\
"
,
 
a
v
a
n
t
 
l
a
 
d
a
t
e
 
d
\
'
a
r
r
i
v
Ã
©
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
D
T
V
'
,
 
'
v
a
r
i
a
t
i
o
n
s
 
p
a
r
 
t
y
p
e
 
d
e
 
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
J
o
u
r
 
d
e
 
l
a
 
s
e
m
a
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
 
'
T
y
p
e
 
d
\
'
h
Ã
´
t
e
 
p
a
r
 
d
Ã
©
f
a
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
 
'
N
o
m
b
r
e
 
d
e
 
p
e
r
s
o
n
n
e
s
 
p
a
r
 
d
Ã
©
f
a
u
t
 
p
o
u
r
 
l
e
 
p
r
e
m
i
e
r
 
t
y
p
e
 
d
e
 
c
l
i
e
n
t
 
m
o
n
t
r
Ã
©
.
 
S
i
 
v
o
u
s
 
u
t
i
l
i
s
e
z
 
l
e
s
 
t
y
p
e
s
 
d
e
 
c
l
i
e
n
t
,
 
c
e
 
c
h
i
f
f
r
e
 
e
s
t
 
l
e
 
n
o
m
b
r
e
 
d
e
 
p
e
r
s
o
n
n
e
s
 
s
Ã
©
l
e
c
t
i
o
n
n
Ã
©
 
p
a
r
 
d
Ã
©
f
a
u
t
 
p
o
u
r
 
l
e
 
p
r
e
m
i
e
r
 
t
y
p
e
 
d
e
 
c
l
i
e
n
t
 
d
a
n
s
 
l
e
 
f
o
r
m
u
l
a
i
r
e
 
d
e
 
r
Ã
©
s
e
r
v
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
S
e
u
l
e
m
e
n
t
 
l
e
s
 
u
t
i
l
i
s
a
t
e
u
r
s
 
e
n
r
e
g
i
s
t
r
Ã
©
s
 
p
e
u
v
e
n
t
 
e
f
f
e
c
t
u
e
r
 
d
e
s
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
 
e
n
 
l
i
g
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
D
Ã
©
s
o
l
Ã
©
,
 
v
o
u
s
 
d
e
v
e
z
 
Ã
ª
t
r
e
 
u
n
 
u
t
i
l
i
s
a
t
e
u
r
 
e
n
r
e
g
i
s
t
r
Ã
©
 
p
o
u
r
 
p
o
u
r
v
o
i
r
 
r
Ã
©
s
e
r
v
e
r
 
e
n
 
l
i
g
n
e
.
 
C
l
i
q
u
e
z
 
i
c
i
 
p
o
u
r
 
v
o
u
s
 
l
o
g
g
e
r
 
s
u
r
 
l
e
 
s
i
t
e
 
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
u
l
e
u
r
 
d
e
s
 
c
a
r
a
c
t
Ã
¨
r
e
s
 
p
o
u
r
 
l
e
s
 
l
i
e
n
s
 
a
u
x
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
 
e
n
 
c
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
L
i
m
i
t
e
s
 
d
u
 
w
e
e
k
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
r
Ã
©
s
e
r
v
a
t
i
o
n
 
v
a
l
i
d
Ã
©
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
r
Ã
©
s
e
r
v
a
t
i
o
n
 
e
n
 
l
i
s
t
e
 
d
\
'
i
n
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
n
d
i
r
 
l
\
'
a
c
o
m
p
t
e
 
Ã
 
 
l
a
 
v
a
l
e
u
r
 
s
u
p
Ã
©
r
i
e
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
_
J
O
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
F
a
c
t
u
r
e
r
 
u
n
 
a
c
o
m
p
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
L
e
s
 
t
a
r
i
f
s
 
s
o
n
t
 
p
a
r
 
s
e
m
a
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
 
'
V
o
u
s
 
a
v
e
z
 
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
Ã
©
 
d
\
'
e
n
r
e
g
i
s
t
r
e
r
 
l
e
s
 
t
a
r
i
f
s
 
s
o
i
t
 
c
o
m
m
e
 
Ã
©
t
a
n
t
 
d
e
s
 
v
a
l
e
u
r
s
 
p
a
r
 
n
u
i
t
 
s
o
i
t
 
p
a
r
 
s
e
m
a
i
n
e
.
 
S
i
 
v
o
u
s
 
l
e
s
 
e
n
r
e
g
i
s
t
r
e
z
 
p
a
r
 
s
e
m
a
i
n
e
,
 
v
o
u
s
 
D
E
V
E
Z
 
b
a
s
c
u
l
e
r
 
c
e
t
t
e
 
o
p
t
i
o
n
 
s
u
r
 
O
U
I
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
T
a
r
i
f
 
p
a
r
 
s
e
m
a
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
 
'
D
a
t
e
 
d
\
'
a
r
r
i
v
Ã
©
e
 
r
Ã
©
c
u
r
r
e
n
t
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
d
 
l
\
'
o
p
t
i
o
n
 
D
A
T
E
 
D
\
'
A
R
R
I
V
E
E
 
F
I
X
E
 
e
s
t
 
a
c
t
i
v
Ã
©
e
,
 
l
e
 
n
o
m
b
r
e
 
d
e
 
d
a
t
e
s
 
q
u
i
 
p
e
u
t
 
Ã
ª
t
r
e
 
a
f
f
i
c
h
Ã
©
 
d
a
n
s
 
l
a
 
l
i
s
t
e
 
d
Ã
©
r
o
u
l
a
n
t
e
.
 
R
e
m
a
r
q
u
e
z
 
q
u
e
 
l
a
 
l
i
s
t
e
 
d
e
 
d
a
t
e
s
 
n
e
 
f
a
i
t
 
p
a
s
 
i
n
c
l
u
s
i
o
n
 
d
\
'
a
u
c
u
n
e
 
d
a
t
e
 
s
i
 
u
n
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
n
\
'
e
s
t
 
p
a
s
 
p
o
s
s
i
b
l
e
 
Ã
 
 
c
a
u
s
e
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
 
p
r
Ã
©
c
Ã
©
d
e
n
t
e
s
,
 
e
t
 
q
u
e
 
c
e
t
t
e
 
l
i
s
t
e
 
s
e
r
a
 
d
e
u
x
 
f
o
i
s
 
p
l
u
s
 
l
o
n
g
u
e
 
q
u
e
 
v
o
t
r
e
 
c
h
i
f
f
r
e
 
s
Ã
©
l
e
c
t
i
o
n
n
Ã
©
,
 
c
a
r
 
e
l
l
e
 
a
u
r
a
 
u
n
 
n
o
m
b
r
e
 
s
i
m
i
l
a
i
r
e
 
d
e
 
d
a
t
e
s
 
d
a
n
s
 
s
o
n
 
h
i
s
t
o
r
i
q
u
e
 
(
o
Ã
¹
 
a
p
p
l
i
c
a
b
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
 
'
L
a
 
d
a
t
e
 
d
\
'
a
r
r
i
v
Ã
©
e
 
n
\
'
e
s
t
 
p
a
s
 
c
o
r
r
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
L
a
 
d
a
t
e
 
d
e
 
d
Ã
©
p
a
r
t
 
n
\
'
e
s
t
 
p
a
s
 
c
o
r
r
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
 
'
V
o
t
r
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
e
s
t
 
t
r
o
p
 
c
o
u
r
t
e
.
 
N
o
t
r
e
 
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
 
f
i
x
e
 
l
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
 
n
u
i
t
s
 
Ã
 
 
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
 
'
V
o
t
r
e
 
i
n
t
e
r
v
a
l
l
e
 
e
s
t
 
d
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
 
'
L
a
 
v
a
r
i
a
n
t
e
 
t
y
p
e
 
d
\
'
h
Ã
´
t
e
 
n
\
'
e
s
t
 
p
a
s
 
c
o
r
r
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
 
'
S
Ã
©
l
e
c
t
i
o
n
n
e
z
 
l
e
 
n
o
m
b
r
e
 
e
t
 
l
e
 
t
y
p
e
 
d
\
'
h
Ã
´
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
V
o
u
s
 
Ã
ª
t
e
s
 
t
r
o
p
 
n
o
m
b
r
e
u
x
 
p
o
u
r
 
l
e
s
 
t
a
r
i
f
s
.
 
V
e
u
i
l
l
e
z
 
n
o
u
s
 
c
o
n
t
a
c
t
e
r
 
p
a
r
 
m
a
i
l
 
o
u
 
t
Ã
©
l
Ã
©
p
h
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
V
o
u
s
 
a
v
e
z
 
c
h
o
i
s
i
 
p
l
u
s
 
d
e
 
c
h
a
m
b
r
e
s
 
q
u
e
 
v
o
u
s
 
n
\
'
a
v
e
z
 
d
\
'
h
Ã
´
t
e
s
!
 
C
l
i
q
u
e
z
 
s
u
r
 
u
n
e
 
c
h
a
m
b
r
e
 
p
o
u
r
 
l
\
'
e
n
l
e
v
e
r
 
d
e
 
v
o
t
r
e
 
r
Ã
©
s
e
r
v
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
I
l
 
y
 
a
 
t
r
o
p
 
d
\
'
h
Ã
´
t
e
s
 
p
o
u
r
 
l
e
s
 
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
I
l
 
f
a
u
t
 
c
h
o
i
s
i
r
 
u
n
e
 
c
h
a
m
b
r
e
 
s
u
p
p
l
Ã
©
m
e
n
t
a
i
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
S
Ã
©
l
e
c
t
i
o
n
n
e
r
 
u
n
e
 
c
h
a
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
I
n
t
r
o
d
u
i
s
e
z
 
v
o
t
r
e
 
p
r
Ã
©
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
I
n
t
r
o
d
u
i
s
e
z
 
v
o
t
r
e
 
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
I
n
t
r
o
d
u
i
s
e
z
 
l
e
 
n
Â
°
 
d
e
 
p
o
r
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
I
n
t
r
o
d
u
i
s
e
z
 
v
o
t
r
e
 
r
u
e
,
 
c
h
e
m
i
n
,
 
i
m
p
a
s
s
e
,
 
a
v
e
n
u
e
,
 
e
t
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
I
n
t
r
o
d
u
i
s
e
z
 
v
o
t
r
e
 
v
i
l
l
e
 
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
I
n
t
r
o
d
u
i
s
e
z
 
v
o
t
r
e
 
r
Ã
©
g
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
I
n
t
r
o
d
u
i
s
e
z
 
v
o
t
r
e
 
c
o
d
e
 
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
I
n
t
r
o
d
u
i
s
e
z
 
v
o
t
r
e
 
p
a
y
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
L
e
 
n
u
m
Ã
©
r
o
 
d
e
 
t
Ã
©
l
Ã
©
p
h
o
n
e
 
f
i
x
e
 
e
s
t
 
n
Ã
©
c
e
s
s
a
i
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
L
e
 
n
u
m
Ã
©
r
o
 
d
e
 
m
o
b
i
l
e
 
e
s
t
 
n
Ã
©
c
e
s
s
a
i
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
L
\
'
a
d
r
e
s
s
e
 
e
m
a
i
l
 
e
s
t
 
n
Ã
©
c
e
s
s
a
i
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
N
o
u
s
 
a
v
o
n
s
 
d
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
i
l
i
t
Ã
©
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
A
u
c
u
n
e
 
s
Ã
©
l
e
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
N
Â
°
 
d
e
 
r
Ã
©
s
e
r
v
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
o
u
r
 
l
a
n
c
e
r
 
l
a
 
r
Ã
©
s
e
r
v
a
t
i
o
n
,
 
m
e
s
s
a
g
e
s
 
e
n
 
a
r
r
i
Ã
¨
r
e
-
p
l
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
V
i
d
e
r
 
l
e
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
 
d
u
 
t
h
Ã
¨
m
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
 
r
e
m
p
l
i
r
 
p
o
u
r
 
r
Ã
©
a
l
i
s
e
r
 
u
n
 
d
u
m
p
 
D
H
T
M
L
 
(
v
i
d
a
n
g
e
)
 
d
e
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
 
d
u
 
t
h
Ã
¨
m
e
 
(
<
i
>
t
e
m
p
l
a
t
e
<
/
i
>
)
 
d
e
 
t
o
u
t
e
s
 
l
e
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
 
d
e
 
c
h
a
q
u
e
 
f
i
c
h
i
e
r
 
F
R
O
N
T
E
N
D
 
(
v
i
s
i
b
l
e
s
 
e
n
 
f
r
o
n
t
a
l
)
.
 
U
t
i
l
e
 
s
i
 
v
o
u
s
 
v
o
u
l
e
z
 
v
o
i
r
 
s
i
 
u
n
 
Ã
©
l
Ã
©
m
e
n
t
 
e
s
t
 
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
a
n
s
 
u
n
 
c
e
r
t
a
i
n
 
t
h
Ã
¨
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
L
e
 
m
o
n
t
a
n
t
 
e
s
t
 
u
n
 
p
o
u
r
c
e
n
t
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
 
'
I
n
d
i
q
u
e
z
 
O
u
i
 
s
i
 
l
a
 
m
a
j
o
r
a
t
i
o
n
 
p
o
u
r
 
u
n
e
 
p
e
r
s
o
n
n
e
 
s
e
u
l
e
 
e
s
t
 
u
n
 
p
o
u
r
c
e
n
t
a
g
e
.
 
S
i
 
N
o
n
,
 
l
e
 
m
o
n
t
a
n
t
 
a
p
p
l
i
q
u
Ã
©
 
s
e
r
a
 
a
j
o
u
t
Ã
©
 
o
u
 
r
e
t
r
a
n
c
h
Ã
©
 
d
u
 
m
o
n
t
a
n
t
 
g
l
o
b
a
l
.
'
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
Ã
©
s
/
T
a
r
i
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
 
'
U
t
i
l
i
s
e
z
 
c
e
t
t
e
 
e
n
t
r
Ã
©
e
 
p
o
u
r
 
l
i
m
i
t
e
r
 
l
e
 
n
o
m
b
r
e
 
d
e
 
c
h
a
m
b
r
e
s
 
e
t
 
d
e
 
t
a
r
i
f
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
 
l
i
s
t
Ã
©
s
 
d
a
n
s
 
l
e
 
f
o
r
m
u
l
a
i
r
e
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
.
 
I
n
d
i
q
u
e
z
 
0
 
s
i
 
v
o
u
s
 
n
e
 
v
o
u
l
e
z
 
p
a
s
 
a
c
t
i
v
e
r
 
c
e
t
t
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
A
u
c
u
n
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
Ã
©
 
d
a
n
s
 
c
e
t
t
e
 
p
Ã
©
r
i
o
d
e
 
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
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
 
'
M
o
d
e
 
d
\
'
Ã
©
d
i
t
i
o
n
 
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
 
'
A
t
t
e
n
t
i
o
n
 
s
u
r
 
c
e
t
t
e
 
f
o
n
c
t
i
o
n
.
 
S
i
 
l
e
 
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
 
e
s
t
 
a
c
t
i
v
Ã
©
,
 
l
e
s
 
c
h
a
n
g
e
s
 
d
e
 
t
e
x
t
e
 
a
f
f
e
c
t
e
r
o
n
t
 
T
O
U
S
 
l
e
s
 
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
s
 
d
a
n
s
 
l
e
 
s
y
s
t
Ã
¨
m
e
 
p
o
u
r
 
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
e
 
q
u
e
 
v
o
u
s
 
Ã
©
d
i
t
e
z
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
y
m
b
o
l
e
 
m
o
n
Ã
©
t
a
i
r
e
 
g
l
o
b
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
C
o
m
p
o
s
a
n
t
 
e
n
v
e
l
o
p
p
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
S
Ã
©
l
e
c
t
i
o
n
n
e
z
 
o
u
i
 
p
o
u
r
 
e
n
v
e
l
o
p
p
e
r
 
l
e
 
c
o
m
p
o
s
a
n
t
 
d
e
 
f
a
Ã
§
o
n
 
Ã
 
 
n
e
 
p
a
s
 
a
f
f
i
c
h
e
r
 
l
e
s
 
e
s
p
a
c
e
s
 
m
o
d
u
l
e
 
e
t
 
e
n
-
t
Ã
ª
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
W
e
e
k
e
n
d
s
 
s
e
u
l
e
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
J
o
u
r
s
 
d
u
 
w
e
e
k
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
 
'
S
Ã
©
l
e
c
t
i
o
n
n
e
z
 
v
o
s
 
j
o
u
r
s
 
d
e
 
w
e
e
k
e
n
d
.
 
L
e
s
 
t
a
r
i
f
s
 
p
e
r
m
e
t
t
a
n
t
 
o
u
 
p
a
s
 
l
e
s
 
w
e
e
k
e
n
d
s
 
c
e
 
b
a
s
e
r
o
n
t
 
s
u
r
 
c
e
 
p
a
r
a
m
Ã
¨
t
r
e
 
p
o
u
r
 
g
Ã
©
n
Ã
©
r
e
r
 
l
a
 
l
i
s
t
e
 
d
e
s
 
c
h
a
m
b
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
 
'
S
Ã
©
l
e
c
t
i
o
n
n
e
z
 
v
o
t
r
e
 
p
a
y
s
 
a
v
a
n
t
 
d
\
'
a
j
o
u
t
e
r
 
d
e
s
 
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
s
 
s
u
r
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
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
a
r
d
e
z
 
l
e
s
 
c
h
a
n
g
e
s
 
s
u
r
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
 
a
v
a
n
t
 
d
e
 
c
h
a
r
g
e
r
 
s
o
n
 
i
m
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
i
x
 
Ã
 
 
p
a
r
t
i
r
 
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
R
e
c
h
e
r
c
h
e
 
p
a
r
 
p
a
y
s
'
)
;

j
r
_
d
e
f
i
n
e
(
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
R
e
c
h
e
r
c
h
e
 
p
a
r
 
r
Ã
©
g
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
R
e
c
h
e
r
c
h
e
 
p
a
r
 
v
i
l
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
R
e
c
h
e
r
c
h
e
 
p
a
r
 
c
a
r
a
c
t
Ã
©
r
i
s
t
i
q
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
R
e
c
h
e
r
c
h
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
n
t
r
e
z
 
l
e
 
t
e
x
t
e
 
Ã
 
 
r
e
c
h
e
r
c
h
e
r
 
d
a
n
s
 
l
a
 
b
o
i
t
e
 
e
t
 
c
l
i
q
u
e
z
 
s
u
r
 
l
e
 
b
o
u
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
T
e
x
t
e
 
Ã
 
 
r
e
c
h
e
r
c
h
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
I
n
t
r
o
d
u
i
s
e
z
 
l
e
s
 
d
a
t
e
s
 
d
e
 
v
o
t
r
e
 
s
Ã
©
j
o
u
r
 
e
t
 
c
l
i
q
u
e
r
 
s
u
r
 
l
e
 
b
o
u
t
o
n
 
p
o
u
r
 
t
r
o
u
v
e
r
 
l
e
s
 
c
h
a
m
b
r
e
s
 
a
y
a
n
t
 
d
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
i
l
i
t
Ã
©
s
 
p
o
u
r
 
c
e
t
t
e
 
p
Ã
©
r
i
o
d
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
i
s
t
e
r
 
t
o
u
s
 
l
e
s
 
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
s
 
p
a
r
 
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
 
'
L
i
s
t
e
r
 
t
o
u
s
 
l
e
s
 
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
s
 
p
a
r
 
t
y
p
e
 
d
e
 
c
h
a
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
D
Ã
©
f
a
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
 
d
e
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
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
Ã
©
g
i
o
n
 
d
e
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
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
V
i
l
l
e
 
d
e
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
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
Ã
‰
t
o
i
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
Ã
©
t
a
i
l
s
 
Ã
©
t
a
b
l
i
s
s
e
m
e
n
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
i
r
e
 
d
e
 
r
Ã
©
s
e
r
v
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
C
h
a
n
g
e
r
 
l
\
'
a
d
r
e
s
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
 
'
R
e
-
v
Ã
©
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
 
d
e
 
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
Ã
©
<
b
r
/
>
(
L
a
 
s
Ã
©
l
e
c
t
i
o
n
 
d
e
s
 
c
h
a
m
b
r
e
s
 
s
e
r
a
 
r
Ã
©
i
n
i
t
i
a
l
i
s
Ã
©
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
-
v
Ã
©
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
 
d
e
 
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
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
c
a
t
i
o
n
 
d
e
 
v
o
s
 
e
x
t
r
a
s
 
e
n
 
o
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
 
'
C
h
a
n
g
e
m
e
n
t
 
d
e
 
v
o
t
r
e
 
s
Ã
©
l
e
c
t
i
o
n
 
d
e
 
c
h
a
m
b
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
C
h
a
n
g
e
m
e
n
t
 
d
e
 
v
o
t
r
e
 
a
d
r
e
s
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
D
Ã
©
s
o
l
Ã
©
,
 
u
n
 
o
u
 
p
l
u
s
 
d
e
s
 
c
h
a
m
p
s
 
a
d
r
e
s
s
e
 
s
o
n
t
 
i
n
c
o
r
r
e
c
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
g
e
 
d
e
 
l
a
 
c
h
a
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
 
m
o
n
Ã
©
t
a
i
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
t
i
o
n
s
 
d
e
 
r
e
c
h
e
r
c
h
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
J
o
u
r
n
a
u
x
 
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
J
O
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
e
s
s
a
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
c
Ã
©
'
)
;

j
r
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
Ã
©
r
Ã
©
'
)
;

j
r
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
t
i
o
n
 
t
a
r
i
f
a
i
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
 
'
<
b
>
A
t
t
e
n
t
i
o
n
:
 
C
h
a
n
g
e
r
 
e
n
t
r
e
 
l
e
s
 
d
i
f
f
Ã
©
r
e
n
t
s
 
t
y
p
e
s
 
d
e
 
t
a
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
 
p
e
u
t
 
r
Ã
©
s
u
l
t
e
r
 
e
n
 
p
e
r
t
e
 
d
e
 
d
o
n
n
Ã
©
e
s
.
 
L
i
s
e
z
 
c
i
-
d
e
s
s
o
u
s
 
s
u
r
 
c
e
 
s
u
j
e
t
.
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

V
o
u
s
 
a
v
e
z
 
t
r
o
i
s
 
o
p
t
i
o
n
s
 
p
o
u
r
 
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
 
v
o
s
 
t
a
r
i
f
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
 
n
o
r
m
a
l
:
 
V
o
u
s
 
a
u
r
e
z
 
u
n
 
t
a
r
i
f
 
p
o
u
r
 
c
h
a
q
u
e
 
t
y
p
e
 
d
e
 
c
h
a
m
b
r
e
,
 
q
u
e
 
s
e
r
a
 
v
a
l
i
d
e
 
p
o
u
r
 
l
e
s
 
d
i
x
 
p
r
o
c
h
a
i
n
e
s
 
a
n
n
Ã
©
e
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
Ã
©
r
Ã
©
:
 
V
o
u
s
 
p
o
u
v
e
z
 
m
o
d
i
f
i
e
r
 
l
e
s
 
p
r
i
x
 
j
o
u
r
 
Ã
 
 
j
o
u
r
 
p
o
u
r
 
c
h
a
q
u
e
 
t
y
p
e
 
d
e
 
c
h
a
m
b
r
e
/
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
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
c
Ã
©
:
 
L
a
 
\
"
v
i
e
l
l
e
\
"
 
m
Ã
©
t
h
o
d
e
 
d
e
 
t
a
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

L
e
s
 
d
i
f
f
Ã
©
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
i
c
a
t
i
o
n
 
v
o
u
s
 
p
e
r
m
e
t
t
e
n
t
 
d
e
 
c
h
o
i
s
i
r
 
l
a
 
m
Ã
©
t
h
o
d
e
 
q
u
i
 
c
o
n
v
i
e
n
n
e
 
l
e
 
m
i
e
u
x
 
Ã
 
 
c
h
a
q
u
e
 
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
.
<
b
r
/
>

L
e
 
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
 
e
s
t
 
l
e
 
p
l
u
s
 
s
i
m
p
l
e
 
m
a
i
s
 
i
l
 
e
s
t
 
l
e
 
p
l
u
s
 
f
a
c
i
l
e
 
Ã
 
 
c
o
m
p
r
e
n
d
r
e
 
c
a
r
 
i
l
 
c
r
Ã
©
Ã
©
r
a
 
d
e
s
 
r
Ã
©
f
Ã
©
r
e
n
c
e
s
 
c
r
o
i
s
Ã
©
e
s
 
e
n
t
r
e
 
c
h
a
m
b
r
e
s
 
e
t
 
t
a
r
i
f
s
 
v
e
r
s
 
t
y
p
e
s
 
d
e
 
c
h
a
m
b
r
e
/
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
 
e
t
 
v
o
u
s
 
p
e
r
m
e
t
t
r
a
 
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
e
r
 
l
e
s
 
c
h
a
m
b
r
e
s
 
e
t
 
l
e
s
 
p
r
i
x
 
s
u
r
 
l
a
 
m
Ã
ª
m
e
 
p
a
g
e
.
<
b
r
/
>

L
e
 
m
o
d
e
 
m
i
c
r
o
g
e
r
Ã
©
 
v
o
u
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
a
i
r
e
 
v
a
r
i
e
r
 
l
e
s
 
t
a
r
i
f
s
 
j
o
u
r
 
Ã
 
 
j
o
u
r
 
s
a
n
s
 
d
e
v
o
i
r
 
g
Ã
©
r
e
r
 
d
e
s
 
t
o
n
n
e
s
 
d
e
 
t
a
r
i
f
s
 
d
i
f
f
Ã
©
r
e
n
t
s
,
 
c
e
c
i
 
e
s
t
 
f
a
i
t
 
e
n
 
c
r
Ã
©
a
n
t
 
d
e
s
 
r
Ã
©
f
Ã
©
r
e
n
c
e
s
 
c
r
o
i
s
Ã
©
e
s
 
e
n
t
r
e
 
u
n
 
g
r
a
n
d
 
n
o
m
b
r
e
 
d
e
 
t
a
r
i
f
s
.
 
L
e
 
r
Ã
©
s
u
l
t
a
t
 
e
s
t
 
u
n
 
n
o
m
b
r
e
 
d
e
 
t
a
r
i
f
s
 
c
r
Ã
©
Ã
©
s
 
p
o
u
r
 
v
o
u
s
 
c
o
u
v
r
a
n
t
 
u
n
e
 
c
e
r
t
a
i
n
e
 
p
Ã
©
r
i
o
d
e
,
 
m
a
i
s
 
v
o
u
s
 
n
e
 
p
o
u
v
e
z
 
p
a
s
 
\
"
e
m
p
i
l
e
r
\
"
 
l
e
s
 
t
a
r
i
f
s
.
<
b
r
/
>

L
e
 
m
o
d
e
 
a
v
a
n
c
Ã
©
 
v
o
u
s
 
p
e
r
m
e
t
 
d
e
 
c
r
Ã
©
e
r
 
u
n
e
 
c
h
a
m
b
r
e
 
e
t
 
d
e
 
l
\
'
a
s
s
o
c
i
e
r
 
Ã
 
 
u
n
 
t
y
p
e
 
d
e
 
c
h
a
m
b
r
e
.
 
V
o
u
s
 
p
o
u
v
e
z
 
a
l
o
r
s
 
c
r
Ã
©
Ã
©
r
 
u
n
 
t
a
r
i
f
 
e
t
 
l
\
'
a
s
s
o
c
i
e
r
 
a
u
 
t
y
p
e
 
d
e
 
c
h
a
m
b
r
e
.
 
U
t
i
l
i
s
e
r
 
c
e
t
t
e
 
m
Ã
©
t
h
o
d
e
 
p
e
r
m
e
t
 
\
"
d
\
'
e
m
p
i
l
e
r
\
"
 
l
e
s
 
t
a
r
i
f
s
 
l
e
s
 
u
n
s
 
s
u
r
 
l
e
s
 
a
u
t
r
e
s
.
 
P
a
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
y
p
e
 
d
e
 
c
h
a
m
b
r
e
 
\
"
l
i
t
 
d
o
u
b
l
e
\
"
 
p
e
u
t
 
a
v
o
i
r
 
u
n
 
t
a
r
i
f
 
p
o
u
r
 
l
i
t
 
e
t
 
p
e
t
i
t
 
d
Ã
©
j
e
u
n
e
r
,
 
e
t
 
u
n
 
a
u
t
r
e
 
p
o
u
r
 
l
i
t
,
 
p
e
t
i
t
 
d
Ã
©
j
e
u
n
e
r
 
e
t
 
d
Ã
®
n
e
r
.
 
L
a
 
m
Ã
©
t
h
o
d
e
 
a
v
a
n
c
Ã
©
e
 
d
e
m
a
n
d
e
 
u
n
 
p
e
u
 
p
l
u
s
 
d
\
'
a
t
t
e
n
t
i
o
n
 
a
u
x
 
d
Ã
©
t
a
i
l
s
 
c
a
r
 
i
l
 
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
 
d
e
 
d
i
s
s
o
c
i
e
r
 
u
n
e
 
c
h
a
m
b
r
e
 
o
u
 
u
n
 
t
a
r
i
f
 
d
\
'
u
n
 
t
y
p
e
 
d
e
 
c
h
a
m
b
r
e
/
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
,
 
o
u
 
d
e
 
d
Ã
©
f
i
n
i
r
 
d
e
s
 
d
a
t
e
s
 
v
a
l
i
d
e
s
 
m
a
i
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
e
s
.
 
I
l
 
o
f
f
r
e
 
c
e
p
e
n
d
a
n
t
 
d
e
s
 
o
p
t
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
t
i
o
n
 
q
u
e
 
l
e
s
 
a
u
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
\
'
o
f
f
r
e
n
t
 
p
a
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

C
o
m
m
e
 
l
e
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
 
e
t
 
M
i
c
r
o
g
Ã
©
r
Ã
©
 
d
e
m
a
n
d
e
n
t
 
u
n
 
p
a
r
a
m
Ã
©
t
r
a
g
e
 
s
p
Ã
©
c
i
f
i
q
u
e
 
d
e
s
 
c
h
a
m
b
r
e
s
 
e
t
 
t
a
r
i
f
s
 
p
o
u
r
 
l
e
 
m
o
d
e
 
t
a
r
i
f
a
i
r
e
,
 
l
e
 
s
y
s
t
Ã
¨
m
e
 
p
e
u
t
 
d
e
v
o
i
r
 
r
Ã
©
i
n
i
t
i
a
l
i
s
e
r
 
c
e
r
t
a
i
n
e
s
 
d
o
n
n
Ã
©
e
s
 
p
o
u
r
 
r
e
n
d
r
e
 
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
t
i
o
n
s
 
t
a
r
i
f
a
i
r
e
s
 
e
x
i
s
t
a
n
t
e
s
 
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
 
a
v
e
c
 
l
e
 
n
o
u
v
e
a
u
 
m
o
d
e
 
t
a
r
i
f
a
i
r
e
 
c
h
o
i
s
i
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
c
Ã
©
.
 
P
a
s
 
d
e
 
c
h
a
n
g
e
.
 
L
e
s
 
t
a
r
i
f
s
 
e
x
i
s
t
a
n
t
s
 
s
o
n
t
 
c
o
n
s
e
r
v
Ã
©
s
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
Ã
©
r
Ã
©
.
 
T
o
u
s
 
l
e
s
 
t
a
r
i
f
s
 
e
x
i
s
t
a
n
t
s
 
s
o
n
t
 
e
f
f
a
c
Ã
©
s
.
<
b
r
/
>

A
d
v
a
n
c
e
d
 
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
u
s
 
l
e
s
 
t
a
r
i
f
s
 
e
x
i
s
t
a
n
t
s
 
s
o
n
t
 
e
f
f
a
c
Ã
©
s
.
<
b
r
/
>

A
d
v
a
n
c
e
d
 
-
>
 
M
i
c
r
o
g
Ã
©
r
Ã
©
.
 
T
o
u
s
 
l
e
s
 
t
a
r
i
f
s
 
e
x
i
s
t
a
n
t
s
 
s
o
n
t
 
e
f
f
a
c
Ã
©
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
Ã
©
r
Ã
©
 
-
>
 
A
v
a
n
c
Ã
©
.
 
T
o
u
s
 
l
e
s
 
r
Ã
©
f
Ã
©
r
e
n
c
e
s
 
c
r
o
i
s
Ã
©
e
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
s
 
s
o
n
t
 
e
f
f
a
c
Ã
©
e
s
,
 
m
a
i
s
 
l
e
s
 
t
a
r
i
f
s
 
e
u
x
 
m
Ã
ª
m
e
s
 
s
o
n
t
 
c
o
n
s
e
r
v
Ã
©
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
Ã
©
r
Ã
©
 
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
u
s
 
l
e
s
 
r
Ã
©
f
Ã
©
r
e
n
c
e
s
 
c
r
o
i
s
Ã
©
e
s
 
e
t
 
l
e
s
 
t
a
r
i
f
s
 
s
o
n
t
 
e
f
f
a
c
Ã
©
s
.
<
b
r
/
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
 
'
A
f
f
i
c
h
e
r
 
l
a
 
l
i
s
t
e
 
d
e
s
 
c
h
a
m
b
r
e
s
 
d
a
n
s
 
l
a
 
p
a
g
e
 
d
e
 
d
Ã
©
t
a
i
l
s
 
d
e
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
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
y
p
e
 
d
\
'
Ã
©
t
a
b
l
i
s
s
e
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
M
a
x
 
p
e
r
s
o
n
n
e
s
 
p
a
r
 
c
h
a
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
M
a
x
 
p
e
r
s
o
n
n
e
s
 
p
a
r
 
r
Ã
©
s
e
r
v
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
j
o
u
t
e
r
 
n
o
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
e
r
 
n
o
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
E
f
f
a
c
e
r
 
n
o
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
o
i
r
 
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
N
o
u
v
e
l
l
e
 
n
o
t
e
 
a
j
o
u
t
Ã
©
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
N
o
t
e
 
Ã
©
d
i
t
Ã
©
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
N
o
t
e
 
e
f
f
a
c
Ã
©
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
i
s
t
e
r
 
l
e
s
 
r
Ã
©
s
e
r
v
a
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
M
e
s
 
r
Ã
©
s
e
r
v
a
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
o
i
r
 
r
Ã
©
s
e
r
v
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
o
i
r
 
f
a
v
o
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
V
o
u
s
 
n
\
'
a
v
e
z
 
p
a
s
 
e
n
c
o
r
e
 
a
j
o
u
t
Ã
©
 
d
e
 
f
a
v
o
r
i
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
y
p
e
 
d
\
'
Ã
©
t
a
b
l
i
s
s
e
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
T
a
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
 
i
n
t
e
l
l
i
g
e
n
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
C
e
 
<
i
>
p
l
u
g
i
n
<
/
i
>
 
v
o
u
s
 
p
e
r
m
e
t
 
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
e
r
 
v
o
s
 
p
r
i
x
 
d
y
n
a
m
i
q
u
e
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
 
'
L
a
 
p
l
u
p
a
r
t
 
d
e
s
 
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
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
t
 
l
e
 
p
r
i
x
 
d
e
 
l
e
u
r
s
 
c
h
a
m
b
r
e
s
 
e
n
 
f
o
n
c
t
i
o
n
 
d
u
 
n
o
m
b
r
e
 
d
e
 
c
h
a
m
b
r
e
s
 
d
\
'
u
n
 
c
e
r
t
a
i
n
 
t
y
p
e
 
q
u
i
 
s
o
n
t
 
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
 
s
u
r
 
l
e
s
 
d
a
t
e
s
 
d
e
m
a
n
d
Ã
©
e
s
.
 
C
e
c
i
 
p
e
r
m
e
t
 
d
\
'
o
f
f
r
i
r
 
d
e
s
 
r
Ã
©
d
u
c
t
i
o
n
s
 
s
u
r
 
u
n
 
t
y
p
e
 
d
e
 
c
h
a
m
b
r
e
 
a
u
 
t
a
u
x
 
d
e
 
r
e
m
p
l
i
s
s
a
g
e
 
f
a
i
b
l
e
 
p
e
n
d
a
n
t
 
u
n
e
 
c
e
r
t
a
i
n
e
 
p
Ã
©
r
i
o
d
e
 
d
e
 
l
\
'
a
n
n
Ã
©
e
,
 
a
y
a
n
t
 
c
o
m
m
e
 
o
b
j
e
c
t
i
f
 
d
\
'
a
t
t
i
r
e
r
 
a
f
f
a
i
r
e
s
 
q
u
i
 
s
e
r
a
i
e
n
t
 
a
u
t
r
e
m
e
n
t
 
p
e
r
d
u
s
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
e
r
 
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
e
r
 
c
e
 
<
i
>
p
l
u
g
i
n
<
/
i
>
 
v
o
u
s
 
p
e
r
m
e
t
 
d
\
'
o
f
f
r
i
r
 
d
e
s
 
t
a
r
i
f
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
Ã
©
s
 
s
u
r
 
l
e
 
n
o
m
b
r
e
 
d
e
 
c
h
a
m
b
r
e
s
 
d
\
'
u
n
 
c
e
r
t
a
i
n
 
t
y
p
e
 
q
u
i
 
s
o
n
t
 
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
a
n
s
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
 
s
u
r
 
u
n
 
j
o
u
r
 
d
o
n
n
Ã
©
.
<
b
r
/
>
 
L
\
'
Ã
©
c
a
r
t
 
d
e
 
j
o
u
r
s
 
d
Ã
©
t
e
r
m
i
n
e
 
l
e
 
n
o
m
b
r
e
 
m
a
x
i
m
u
m
 
d
e
 
j
o
u
r
s
 
j
u
s
q
u
\
'
Ã
 
 
d
e
 
l
a
 
d
a
t
e
 
d
\
'
a
r
r
i
v
Ã
©
e
,
 
a
v
a
n
t
 
q
u
e
 
l
e
s
 
p
r
i
x
 
s
o
i
e
n
t
 
a
j
u
s
t
Ã
©
s
 
p
a
r
 
c
e
t
t
e
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
.
 
L
e
s
 
o
p
t
i
o
n
s
 
d
e
 
p
o
u
r
c
e
n
t
a
g
e
 
v
o
u
s
 
p
e
r
m
e
t
t
e
n
t
 
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
e
r
 
l
e
 
p
o
u
r
c
e
n
t
a
g
e
 
d
e
 
c
h
a
m
b
r
e
s
 
q
u
i
 
d
o
i
v
e
n
t
 
Ã
ª
t
r
e
 
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
v
a
n
t
 
q
u
e
 
l
a
 
r
Ã
©
d
u
c
t
i
o
n
 
d
o
n
n
Ã
©
e
 
s
o
i
t
 
a
p
p
l
i
q
u
Ã
©
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
 
'
S
e
u
i
l
 
(
n
o
m
b
r
e
 
d
e
 
j
o
u
r
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
e
 
d
\
'
a
r
r
i
v
Ã
©
e
 
e
t
 
a
u
j
o
u
r
d
\
'
h
u
i
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
 
'
P
o
u
r
c
e
n
t
a
g
e
 
d
e
 
c
h
a
m
b
r
e
s
 
o
c
c
u
p
Ã
©
e
s
 
1
0
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
 
'
P
o
u
r
c
e
n
t
a
g
e
 
d
e
 
c
h
a
m
b
r
e
s
 
o
c
c
u
p
Ã
©
e
s
 
2
5
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
 
'
P
o
u
r
c
e
n
t
a
g
e
 
d
e
 
c
h
a
m
b
r
e
s
 
o
c
c
u
p
Ã
©
e
s
 
5
0
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
 
'
P
o
u
r
c
e
n
t
a
g
e
 
d
e
 
c
h
a
m
b
r
e
s
 
o
c
c
u
p
Ã
©
e
s
 
7
5
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
R
Ã
©
d
u
c
t
i
o
n
 
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
 
Ã
 
 
Ã
©
t
Ã
©
 
r
Ã
©
d
u
i
t
 
Ã
 
 
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
 
v
e
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
 
'
 
T
a
r
i
f
 
d
e
 
l
a
 
c
h
a
m
b
r
e
 
s
a
n
s
 
r
e
m
i
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
J
O
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
C
l
Ã
©
 
A
P
I
 
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
'
)
;

j
r
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
V
o
u
s
 
p
o
u
v
e
z
 
r
Ã
©
c
u
p
Ã
©
r
e
r
 
u
n
e
 
c
l
Ã
©
 
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
 
s
u
r
 
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
 
f
o
i
s
 
v
o
t
r
e
 
c
l
Ã
©
 
c
o
p
i
Ã
©
e
 
i
c
i
,
 
J
o
m
r
e
s
 
a
f
f
i
c
h
e
r
a
 
l
a
 
c
a
r
t
e
 
d
a
n
s
 
l
a
 
p
a
g
e
 
d
e
 
d
Ã
©
t
a
i
l
s
 
d
e
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
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
D
e
r
n
i
Ã
¨
r
e
 
m
i
n
u
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
 
'
A
c
t
i
v
e
z
 
c
e
t
t
e
 
o
p
t
i
o
n
 
s
i
 
v
o
u
s
 
v
o
u
l
e
z
 
o
f
f
r
i
r
 
d
e
s
 
r
e
m
i
s
e
s
 
d
e
 
d
e
r
n
i
Ã
¨
r
e
 
m
i
n
u
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
Ã
‰
c
a
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
 
'
S
i
 
p
o
u
r
 
u
n
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
f
a
i
t
e
 
l
a
 
d
a
t
e
 
d
\
'
a
r
r
i
v
Ã
©
e
 
e
s
t
 
Ã
 
 
m
o
i
n
s
 
d
e
 
N
 
j
o
u
r
s
 
d
e
 
l
a
 
d
a
t
e
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
,
 
a
l
o
r
s
 
l
a
 
r
e
m
i
s
e
 
p
e
u
t
 
Ã
ª
t
r
e
 
a
p
p
l
i
q
u
Ã
©
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
'
,
 
'
R
e
m
i
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
o
u
r
c
e
n
t
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
e
 
r
e
m
i
s
e
 
a
 
Ã
©
t
Ã
©
 
a
p
p
l
i
q
u
Ã
©
e
 
Ã
 
 
c
e
t
t
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
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
 
'
L
e
 
c
o
Ã
»
t
 
d
u
 
s
Ã
©
j
o
u
r
 
a
 
Ã
©
t
Ã
©
 
r
Ã
©
d
u
i
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
 
'
C
e
t
 
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
 
o
f
f
r
e
 
u
n
e
 
r
Ã
©
d
u
c
t
i
o
n
 
d
e
r
n
i
Ã
¨
r
e
 
m
i
n
u
t
e
 
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
 
'
 
p
o
u
r
c
e
n
t
 
s
i
 
v
o
u
s
 
r
Ã
©
s
e
r
v
e
z
 
p
o
u
r
 
a
r
r
i
v
e
r
 
a
v
a
n
t
 
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
 
'
 
p
o
u
r
c
e
n
t
 
o
u
 
p
l
u
s
 
s
i
 
v
o
u
s
 
r
Ã
©
s
e
r
v
e
z
 
p
o
u
r
 
a
r
r
i
v
e
r
 
a
v
a
n
t
 
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
 
r
Ã
©
s
e
r
v
e
z
 
m
a
i
n
t
e
n
a
n
t
 
p
o
u
r
 
b
Ã
©
n
Ã
©
f
i
c
i
e
r
 
d
e
 
c
e
t
 
o
f
f
r
e
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
t
i
o
n
 
t
a
r
i
f
a
i
r
e
s
 
d
Ã
©
t
a
i
l
l
Ã
©
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
 
'
C
h
o
i
s
i
s
s
e
z
 
O
u
i
 
p
o
u
r
 
a
f
f
i
c
h
e
r
 
u
n
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
 
t
a
r
i
f
a
i
r
e
 
p
l
u
s
 
d
Ã
©
t
a
i
l
l
Ã
©
e
 
d
a
n
s
 
l
e
 
<
i
>
p
o
p
u
p
<
/
i
>
 
d
e
 
d
Ã
©
t
a
i
l
 
d
e
s
 
t
a
r
i
f
s
 
d
e
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
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
J
O
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
M
i
n
i
m
i
s
e
r
 
l
e
s
 
o
p
t
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
e
r
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
-
 
S
Ã
©
l
e
c
t
i
o
n
 
d
\
'
Ã
©
t
a
b
l
i
s
s
e
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
C
h
o
i
s
i
r
 
u
n
 
n
o
u
v
e
l
 
Ã
©
t
a
b
l
i
s
s
e
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
t
 
o
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
A
c
o
m
p
t
e
 
p
a
y
Ã
©
'
)
;

j
r
_
d
e
f
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
A
c
o
m
p
t
e
 
n
o
n
 
p
a
y
Ã
©
'
)
;

j
r
_
d
e
f
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
M
o
d
i
f
i
e
r
 
l
e
 
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
M
o
d
i
f
i
e
r
 
l
\
'
a
c
o
m
p
t
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
A
n
n
u
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
T
a
b
l
e
a
u
 
d
e
 
c
o
n
t
r
Ã
´
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
a
u
x
 
d
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
 
p
a
r
 
d
Ã
©
f
a
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
C
h
o
i
s
i
r
 
l
e
 
t
a
u
x
 
d
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
 
q
u
i
 
s
e
r
a
 
a
p
p
l
i
q
u
Ã
©
 
p
a
r
 
d
Ã
©
f
a
u
t
 
Ã
 
 
u
n
 
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
 
d
a
n
s
 
l
\
'
Ã
©
v
e
n
t
u
a
l
i
t
Ã
©
 
o
Ã
¹
 
u
n
 
a
u
t
r
e
 
t
a
u
x
 
d
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
 
n
\
'
a
 
p
a
s
 
Ã
©
t
Ã
©
 
d
Ã
©
f
i
n
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
i
s
t
e
 
T
a
u
x
 
d
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
s
'
)
;

j
r
_
d
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
a
u
x
 
d
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
s
'
)
;

j
r
_
d
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
i
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
a
u
x
 
d
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
'
)
;

j
r
_
d
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
e
 
m
o
n
Ã
©
t
a
i
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
i
s
t
e
 
d
\
'
Ã
©
t
a
b
l
i
s
s
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
 
d
\
'
Ã
©
t
a
b
l
i
s
s
e
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
A
d
r
e
s
s
e
 
d
e
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
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
 
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
s
 
d
o
n
t
 
l
a
 
c
o
u
l
e
u
r
 
d
e
 
f
o
n
d
 
e
s
t
 
r
o
u
g
e
 
n
\
'
o
n
t
 
p
a
s
 
e
n
c
o
r
e
 
d
e
 
t
a
u
x
 
d
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
 
a
p
p
l
i
q
u
Ã
©
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
S
t
a
t
i
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
a
u
x
 
d
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
'
)
;

j
r
_
d
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
i
s
t
e
 
d
e
 
r
Ã
©
s
e
r
v
a
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
I
d
 
d
e
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
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
I
d
 
f
a
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
T
o
t
a
l
 
r
Ã
©
s
e
r
v
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
e
 
d
\
'
a
r
c
h
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
 
'
V
o
u
s
 
p
o
u
v
e
z
 
a
v
o
i
r
 
d
e
s
 
f
i
c
h
i
e
r
s
 
d
e
 
l
a
n
g
u
e
s
 
s
p
Ã
©
c
i
f
i
q
u
e
s
 
a
u
x
 
t
y
p
e
s
 
d
\
'
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
s
 
e
n
 
d
o
n
n
a
n
t
 
l
e
 
n
o
m
 
d
\
'
u
n
 
s
o
u
s
-
d
o
s
s
i
e
r
 
d
a
n
s
 
l
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
,
 
i
.
e
.
 
\
"
l
o
c
a
t
i
o
n
b
a
t
e
a
u
x
\
"
 
e
t
 
e
n
 
c
o
p
i
a
n
t
 
u
n
 
f
i
c
h
i
e
r
 
d
e
 
l
a
n
g
u
e
 
d
a
n
s
 
c
e
 
s
o
u
s
-
d
o
s
s
i
e
r
.
 
V
o
u
s
 
p
o
u
v
e
z
 
a
l
o
r
s
 
m
o
d
i
f
i
e
r
 
l
e
s
 
m
e
s
s
a
g
e
s
 
p
o
u
r
 
c
e
 
t
y
p
e
 
d
\
'
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
 
d
e
 
f
a
Ã
§
o
m
 
Ã
 
 
c
e
 
q
u
e
 
c
h
a
m
b
r
e
s
 
d
e
v
i
e
n
n
e
,
 
p
a
r
 
e
x
e
m
p
l
e
 
D
V
D
s
,
 
e
t
c
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
 
'
V
o
u
s
 
n
e
 
p
o
u
v
e
z
 
p
a
s
 
e
f
f
a
c
e
r
 
c
e
t
 
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
 
c
a
r
 
i
l
 
e
s
t
 
l
e
 
s
e
u
l
 
a
u
q
u
e
l
 
v
o
u
s
 
a
y
e
z
 
a
c
c
Ã
¨
s
.
 
S
i
 
v
o
u
s
 
v
o
u
l
e
z
 
l
e
 
d
Ã
©
s
a
c
t
i
v
e
r
,
 
v
e
u
i
l
l
e
z
 
u
t
i
l
i
s
e
r
 
l
a
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
 
a
n
n
u
l
e
r
 
p
u
b
l
i
c
a
t
i
o
n
 
d
a
n
s
 
v
o
t
r
e
 
b
a
r
r
e
 
d
\
'
o
u
t
i
l
s
.
 
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
T
o
t
a
l
 
e
n
 
h
Ã
©
b
e
r
g
e
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
u
i
t
(
s
)
 
Ã
 
 
'
)
;

j
r
_
d
e
f
i
n
e
(
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
a
r
 
c
h
a
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
 
'
T
o
t
a
l
 
a
m
Ã
©
l
i
o
r
a
t
i
o
n
 
d
e
 
v
o
t
r
e
 
s
Ã
©
j
o
u
r
 
(
i
n
c
.
 
t
a
x
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
D
Ã
©
t
a
i
l
 
d
u
 
p
r
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
V
e
u
i
l
l
e
z
 
l
i
r
e
 
e
t
 
a
c
c
e
p
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
Ã
©
s
u
m
Ã
©
 
d
e
 
v
o
t
r
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
e
s
t
 
a
f
f
i
c
h
Ã
©
 
c
i
-
d
e
s
s
o
u
s
.
<
b
r
 
/
>
 
P
o
u
r
 
c
h
a
n
g
e
r
 
l
a
 
r
Ã
©
s
e
r
v
a
t
i
o
n
,
 
v
e
u
i
l
l
e
z
 
c
l
i
q
u
e
r
 
s
u
r
 
l
e
 
b
o
u
t
o
n
 
M
o
d
i
f
i
e
r
 
r
Ã
©
s
e
r
v
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
 
v
o
u
s
 
d
e
v
e
z
 
m
o
d
i
f
i
e
r
 
l
e
s
 
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
s
 
c
i
-
d
e
s
s
u
s
,
 
v
e
u
i
l
l
e
z
 
c
l
i
q
u
e
r
 
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
_
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
e
r
 
r
Ã
©
s
e
r
v
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
V
e
u
i
l
l
e
z
 
e
n
t
r
e
r
 
c
i
-
d
e
s
s
o
u
s
 
v
o
s
 
d
e
m
a
n
d
e
s
 
p
a
r
t
i
c
u
l
i
Ã
¨
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
 
'
J
e
 
c
o
n
f
i
r
m
e
 
q
u
e
 
l
\
'
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
 
c
i
 
d
e
s
s
u
s
 
e
s
t
 
c
o
r
r
e
c
t
e
 
e
t
 
a
c
c
e
p
t
e
 
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
a
r
 
p
e
r
s
o
n
n
e
 
p
a
r
 
n
u
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
D
Ã
©
b
u
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
Ã
©
r
.
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
P
r
o
c
h
a
i
n
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
n
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
Ã
©
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
R
e
m
a
r
q
u
e
z
 
q
u
e
 
c
e
c
i
 
n
\
'
e
s
t
 
p
a
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
i
r
e
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
,
 
m
a
i
s
 
q
u
e
 
v
o
u
s
 
n
\
'
e
n
v
o
y
e
z
 
q
u
\
'
u
n
 
e
m
a
i
l
.
<
b
r
/
>
I
n
t
r
o
d
u
i
s
e
z
 
l
e
 
m
e
s
s
a
g
e
 
q
u
e
 
v
o
u
s
 
a
i
m
e
r
i
e
z
 
e
n
v
o
y
e
r
 
Ã
 
 
'
)
;

j
r
_
d
e
f
i
n
e
(
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
e
r
 
l
\
'
h
Ã
´
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
F
o
r
m
u
l
a
i
r
e
 
d
\
'
e
n
q
u
Ã
ª
t
e
 
d
\
'
Ã
©
t
a
b
l
i
s
s
e
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
M
e
r
c
i
 
d
e
 
v
o
t
r
e
 
e
n
q
u
Ã
ª
t
e
,
 
l
e
 
m
e
s
s
a
g
e
 
a
 
Ã
©
t
Ã
©
 
e
n
v
o
y
Ã
©
 
Ã
 
 
l
\
'
a
d
r
e
s
s
e
 
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
t
a
c
t
 
d
e
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
 
e
t
 
c
o
p
i
Ã
©
 
p
o
u
r
 
v
o
t
r
e
 
a
d
r
e
s
s
e
 
p
o
u
r
 
v
o
t
r
e
 
c
o
n
n
a
i
s
s
a
n
c
e
.
 
V
o
u
s
 
a
u
r
e
z
 
u
n
e
 
r
Ã
©
p
o
n
s
e
 
a
u
s
s
i
t
Ã
´
t
 
q
u
e
 
p
o
s
s
i
b
l
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
 
c
o
n
c
e
r
n
a
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
E
n
q
u
Ã
ª
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
 
'
S
Ã
©
l
e
c
t
i
o
n
n
e
z
 
v
o
t
r
e
 
l
o
g
e
m
e
n
t
 
d
e
m
a
n
d
Ã
©
 
Ã
 
 
p
a
r
t
i
r
 
d
e
 
l
a
 
l
i
s
t
e
 
Ã
 
 
d
r
o
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
M
i
n
.
 
d
e
 
c
h
a
m
b
r
e
s
 
d
Ã
©
j
Ã
 
 
s
Ã
©
l
e
c
t
i
o
n
n
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
 
'
N
o
m
b
r
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
 
c
h
a
m
b
r
e
s
 
d
Ã
©
j
Ã
 
 
s
Ã
©
l
e
c
t
i
o
n
n
Ã
©
 
s
u
r
 
l
e
 
f
o
r
m
u
l
a
i
r
e
 
a
v
a
n
t
 
q
u
\
'
i
l
 
s
o
i
t
 
p
o
s
s
i
b
l
e
 
d
\
'
o
f
f
r
i
r
 
u
n
e
 
c
o
m
b
i
n
a
i
s
o
n
 
t
a
r
i
f
/
t
y
p
e
 
d
e
 
c
h
a
m
b
r
e
.
 
C
e
c
i
 
v
o
u
s
 
p
e
r
m
e
t
 
d
\
'
a
v
o
i
r
 
t
a
r
i
f
s
 
r
e
b
a
t
t
u
e
s
 
q
u
a
n
d
 
p
l
u
s
 
d
e
 
N
 
c
h
a
m
b
r
e
s
 
d
e
v
i
e
n
n
e
n
t
 
s
Ã
©
l
e
c
t
i
o
n
n
Ã
©
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
 
'
M
a
x
.
 
d
e
 
c
h
a
m
b
r
e
s
 
d
Ã
©
j
Ã
 
 
s
Ã
©
l
e
c
t
i
o
n
n
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
 
'
N
o
m
b
r
e
 
m
a
x
i
m
u
m
 
d
e
 
c
h
a
m
b
r
e
s
 
d
Ã
©
j
Ã
 
 
s
Ã
©
l
e
c
t
i
o
n
n
Ã
©
 
s
u
r
 
l
e
 
f
o
r
m
u
l
a
i
r
e
 
p
o
u
r
 
f
a
i
r
e
 
a
r
r
Ã
ª
t
e
r
 
l
\
'
o
f
f
r
e
 
d
\
'
u
n
e
 
c
o
m
b
i
n
a
i
s
o
n
 
t
a
r
i
f
/
t
y
p
e
 
d
e
 
c
h
a
m
b
r
e
.
 
C
e
c
i
 
v
o
u
s
 
p
e
r
m
e
t
 
d
e
 
n
e
 
p
l
u
s
 
o
f
f
r
i
r
 
d
e
s
 
t
a
r
i
f
s
 
r
e
b
a
t
t
u
e
s
 
q
u
a
n
d
 
p
l
u
s
 
d
e
 
N
 
c
h
a
m
b
r
e
s
 
d
e
v
i
e
n
n
e
n
t
 
s
Ã
©
l
e
c
t
i
o
n
n
Ã
©
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
 
'
R
e
m
a
r
q
u
e
s
 
q
u
e
 
d
e
s
 
s
u
p
p
l
Ã
©
m
e
n
t
s
 
p
o
u
r
 
u
n
e
 
s
e
u
l
e
 
p
e
r
s
o
n
n
e
 
d
Ã
©
f
i
n
i
s
 
i
c
i
 
n
e
 
s
e
r
o
n
t
 
p
a
s
 
u
t
i
l
i
s
Ã
©
s
 
s
i
 
l
e
s
 
s
u
p
p
l
Ã
©
m
e
n
t
s
 
p
o
u
r
 
u
n
e
 
s
e
u
l
e
 
p
e
r
s
o
n
n
e
 
o
n
t
 
Ã
©
t
Ã
©
 
d
Ã
©
f
i
n
i
s
 
O
U
I
 
d
a
n
s
 
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
t
i
o
n
 
g
Ã
©
n
Ã
©
r
a
l
e
.
 
L
e
s
 
d
Ã
©
f
i
n
i
t
i
o
n
s
 
i
c
i
 
c
o
n
t
e
n
u
e
s
 
s
o
n
t
 
u
n
e
 
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
 
Ã
 
 
a
v
o
i
r
 
d
e
s
 
t
a
u
x
 
u
n
i
q
u
e
s
 
c
o
n
c
e
r
n
a
n
t
 
s
u
p
p
l
Ã
©
m
e
n
t
s
 
p
o
u
r
 
p
e
r
s
o
n
n
e
s
 
s
e
u
l
e
s
,
 
p
a
s
 
u
n
e
 
a
d
d
i
t
i
o
n
 
a
u
x
 
S
P
S
 
Ã
 
 
t
a
u
x
 
u
n
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
Q
u
e
l
q
u
e
s
 
r
Ã
©
s
e
r
v
a
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
D
e
m
i
-
r
Ã
©
s
e
r
v
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
M
a
j
o
r
i
t
a
i
r
e
m
e
n
t
 
r
Ã
©
s
e
r
v
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
Ã
¨
t
e
m
e
n
t
 
r
Ã
©
s
e
r
v
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
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
a
r
 
s
e
m
a
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
a
r
 
j
o
u
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
a
r
 
r
Ã
©
s
e
r
v
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
a
r
 
p
e
r
s
o
n
n
e
 
p
a
r
 
r
Ã
©
s
e
r
v
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
a
r
 
p
e
r
s
o
n
n
e
 
p
a
r
 
j
o
u
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
a
r
 
p
e
r
s
o
n
n
e
 
p
a
r
 
s
e
m
a
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
a
r
 
j
o
u
r
s
 
(
m
i
n
 
j
o
u
r
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
 
j
o
u
r
s
 
X
 
c
h
a
m
b
r
e
s
 
s
Ã
©
l
e
c
t
i
o
n
n
Ã
©
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
Ã
©
t
a
b
l
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
s
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
 
'
N
o
r
m
a
l
e
m
e
n
t
 
l
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
 
<
i
>
p
l
u
g
i
n
s
<
/
i
>
 
J
o
m
r
e
s
 
e
s
t
 
r
Ã
©
t
a
b
l
i
 
a
u
t
o
m
a
t
i
q
u
e
m
e
n
t
 
t
o
u
t
e
s
 
l
e
s
 
f
o
i
s
 
q
u
e
 
v
o
u
s
 
v
o
y
e
z
 
l
e
 
g
Ã
©
r
a
n
t
 
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
s
a
n
t
s
 
e
t
 
a
j
o
u
t
e
r
 
o
u
 
e
n
l
e
v
e
z
 
u
n
 
<
i
>
p
l
u
g
i
n
<
/
i
>
.
 
Q
u
a
n
d
 
m
Ã
ª
m
e
,
 
c
\
'
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
 
q
u
e
 
v
o
u
s
 
n
e
 
p
o
u
v
e
z
 
p
a
s
 
u
t
i
l
i
s
e
r
 
c
e
s
 
c
a
p
a
c
i
t
Ã
©
s
 
p
a
r
 
q
u
e
l
q
u
e
 
r
a
i
s
o
n
.
 
V
o
u
s
 
p
o
u
r
r
e
z
 
d
o
n
c
 
u
t
i
l
i
s
e
r
 
c
e
t
t
e
 
f
o
n
c
t
i
o
n
 
p
o
u
r
 
r
Ã
©
t
a
b
l
i
r
 
l
e
 
r
e
g
i
s
t
r
e
 
m
a
n
u
e
l
l
e
m
e
n
t
.
 
S
i
 
v
o
u
s
 
a
v
e
z
 
a
c
c
Ã
¨
s
 
a
u
 
g
Ã
©
r
a
n
t
 
d
e
 
<
i
>
p
l
u
g
i
n
s
<
/
i
>
 
e
t
 
d
e
 
m
i
s
e
s
 
Ã
 
 
j
o
u
r
,
 
c
e
 
n
\
'
e
s
t
 
p
r
a
t
i
q
u
e
m
e
n
t
 
p
a
s
 
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
u
s
 
a
u
r
e
z
 
b
e
s
o
i
n
 
d
e
 
c
e
t
t
e
 
f
o
n
c
t
i
o
n
.
 
V
o
u
s
 
a
u
r
e
z
 
b
e
s
o
i
n
 
d
e
 
r
Ã
©
t
a
b
l
i
r
 
l
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
 
<
i
>
p
l
u
g
i
n
s
<
/
i
>
 
c
h
a
q
u
e
 
f
o
i
s
 
q
u
e
 
v
o
u
s
 
a
j
o
u
t
e
z
 
u
n
 
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
s
a
n
t
 
e
t
 
n
\
'
a
y
e
z
 
p
a
s
 
u
t
i
l
i
s
Ã
©
 
l
e
 
G
Ã
©
r
a
n
t
 
d
e
 
<
i
>
P
l
u
g
i
n
s
<
/
i
>
 
p
o
r
 
l
e
 
f
a
i
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
i
t
 
a
v
e
c
 
s
u
c
c
Ã
¨
s
'
)
;

j
r
_
d
e
f
i
n
e
(
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
 
'
I
l
 
y
 
a
 
e
u
 
u
n
 
e
r
r
e
u
r
 
e
n
 
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
s
a
n
t
 
l
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
 
m
i
n
i
c
o
m
p
o
s
a
n
t
s
.
 
V
o
u
s
 
d
e
v
r
e
z
 
v
Ã
©
r
i
f
i
e
r
 
l
\
'
e
r
r
e
u
r
 
d
a
n
s
 
l
e
 
<
i
>
l
o
g
<
/
i
>
 
J
o
m
r
e
s
 
p
o
u
r
 
v
o
i
r
 
s
\
'
i
l
 
y
 
a
 
u
n
e
 
r
Ã
©
f
Ã
©
r
e
n
c
e
 
d
e
 
q
u
o
i
 
a
 
o
c
c
a
s
i
o
n
n
Ã
©
 
c
e
t
 
e
r
r
e
u
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
R
e
c
h
e
r
c
h
e
 
p
a
r
 
g
a
m
m
e
 
d
e
 
p
r
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
V
o
u
s
 
n
\
'
a
v
e
z
 
p
a
s
 
e
n
c
o
r
e
 
f
a
i
t
 
a
u
c
u
n
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
e
n
c
o
r
e
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
Ã
‰
d
i
t
e
z
 
l
e
 
t
y
p
e
 
d
e
 
v
o
t
r
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
Ã
©
l
e
c
t
i
o
n
n
e
z
 
l
e
 
t
y
p
e
 
d
e
 
v
o
t
r
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
V
o
t
r
e
 
e
n
q
u
Ã
ª
t
e
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
i
m
i
t
e
 
d
e
 
L
i
s
t
e
 
d
e
s
 
Ã
‰
t
a
b
l
i
s
s
e
m
e
n
t
s
/
P
r
o
p
r
i
Ã
©
t
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
 
'
N
o
m
b
r
e
 
d
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
s
 
Ã
 
 
m
o
n
t
r
e
r
 
d
a
n
s
 
l
a
 
p
a
g
e
 
a
p
r
Ã
¨
s
 
u
n
e
 
r
e
c
h
e
r
c
h
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
r
v
i
c
e
 
d
e
 
r
e
c
h
e
r
c
h
e
 
i
n
t
Ã
©
g
r
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
e
 
s
e
r
v
i
c
e
 
J
o
m
r
e
s
 
i
n
t
Ã
©
g
r
Ã
©
 
d
e
 
r
e
c
h
e
r
c
h
e
 
p
e
r
m
e
t
 
a
u
x
 
u
t
i
l
i
s
a
t
e
u
r
s
 
r
e
c
h
e
r
c
h
e
r
 
p
a
r
m
i
 
d
e
s
 
p
r
o
p
r
i
Ã
©
t
Ã
©
s
 
s
e
l
o
n
 
u
n
e
 
s
Ã
©
q
u
e
n
c
e
 
d
e
 
f
o
n
c
t
i
o
n
s
.
 
S
i
 
v
o
u
s
 
a
v
e
z
 
d
Ã
©
j
Ã
 
 
u
t
i
l
i
s
Ã
©
 
 
l
e
s
 
c
a
p
a
c
i
t
Ã
©
s
 
d
e
 
r
e
c
h
e
r
c
h
e
 
J
o
m
r
e
s
 
d
a
n
s
 
J
o
o
m
l
a
 
v
o
u
s
 
s
e
r
e
z
 
Ã
 
 
l
\
'
a
i
s
e
 
a
v
e
c
 
c
e
s
 
d
Ã
©
f
i
n
i
t
i
o
n
s
.
<
b
r
/
>
C
e
t
t
e
 
c
a
r
a
c
t
Ã
©
r
i
s
t
i
q
u
e
 
n
o
u
s
 
p
e
r
m
e
t
 
d
\
'
o
f
f
r
i
r
 
r
e
c
h
e
r
c
h
e
 
c
o
n
t
e
n
u
e
 
d
a
n
s
 
J
o
m
r
e
s
,
 
p
o
u
r
 
l
e
s
 
u
t
i
l
i
s
a
t
e
u
r
s
 
q
u
i
,
 
o
u
 
n
e
 
v
e
u
l
e
n
t
 
p
a
s
 
u
t
i
l
i
s
e
r
 
d
e
s
 
m
o
d
u
l
e
s
 
d
e
 
r
e
c
h
e
r
c
h
e
 
J
o
o
m
l
a
,
 
o
u
 
u
t
i
l
i
s
e
n
t
 
a
u
t
r
e
s
 
s
y
s
t
Ã
¨
m
e
s
 
d
e
 
g
e
s
t
i
o
n
 
d
e
 
c
o
n
t
e
n
u
s
 
q
u
i
 
n
\
'
a
u
r
a
i
e
n
t
 
p
a
s
 
d
e
s
 
m
o
d
u
l
e
s
 
d
e
 
r
e
c
h
e
r
c
h
e
.
<
b
r
/
>
R
a
p
p
e
l
e
z
-
v
o
u
s
 
q
u
e
,
 
s
i
 
v
o
u
s
 
c
h
o
i
s
i
s
s
e
z
 
r
e
c
h
e
r
c
h
e
r
 
q
u
e
l
q
u
e
 
c
h
o
s
e
 
Ã
 
 
t
r
a
v
e
r
s
 
u
n
 
l
i
e
n
 
(
p
a
s
 
u
n
 
<
i
>
d
r
o
p
d
o
w
n
<
/
i
>
)
 
a
u
t
r
e
s
 
o
p
t
i
o
n
s
 
d
e
 
r
e
c
h
e
r
c
h
e
 
n
e
 
s
e
r
o
n
t
 
p
a
s
 
Ã
©
t
a
b
l
i
e
s
,
 
s
e
u
l
e
m
e
n
t
 
l
\
'
Ã
©
l
Ã
©
m
e
n
t
 
c
o
r
r
e
s
p
o
n
d
a
n
t
 
a
u
 
l
i
e
n
 
o
Ã
¹
 
v
o
u
s
 
a
v
e
z
 
c
l
i
q
u
Ã
©
.
<
b
r
/
>
R
e
m
a
r
q
u
e
z
 
q
u
e
,
 
p
a
r
 
d
Ã
©
f
a
u
t
 
l
a
 
d
i
s
p
o
s
i
t
i
o
n
 
d
e
 
c
e
t
t
e
 
r
e
c
h
e
r
c
h
e
 
i
n
t
Ã
©
g
r
Ã
©
e
 
n
\
'
e
s
t
 
p
a
r
 
t
r
Ã
¨
s
 
j
o
l
i
.
 
C
e
c
i
 
p
a
r
c
e
 
q
u
e
 
l
e
 
f
i
c
h
i
e
r
 
q
u
e
 
f
a
i
t
 
l
a
 
r
e
c
h
e
r
c
h
e
 
d
o
i
t
 
a
g
r
Ã
©
g
e
r
 
t
o
u
t
e
s
 
l
e
s
 
o
p
t
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
 
q
u
e
l
q
u
e
s
 
u
n
e
s
 
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
e
r
 
c
e
t
t
e
 
c
a
r
a
c
t
Ã
©
r
i
s
t
i
q
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
 
l
a
 
c
a
r
a
c
t
Ã
©
r
i
s
t
i
q
u
e
 
e
s
t
 
a
c
t
i
v
Ã
©
e
,
 
t
o
u
s
 
l
e
s
 
d
e
m
a
n
d
e
s
 
Ã
 
 
J
o
m
r
e
s
 
q
u
i
 
m
o
n
t
r
e
n
t
 
l
a
 
l
i
s
t
e
 
d
\
'
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
s
 
s
i
g
n
i
f
i
e
n
t
 
q
u
e
 
l
e
s
 
o
p
t
i
o
n
s
 
d
e
 
r
e
c
h
e
r
c
h
e
 
s
o
n
t
 
a
u
s
s
i
 
m
o
n
t
r
Ã
©
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
s
e
r
 
c
o
l
o
n
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
 
'
A
u
c
u
n
e
 
o
p
t
i
o
n
 
d
e
 
r
e
c
h
e
r
c
h
e
 
q
u
e
 
v
o
u
s
 
a
y
e
z
 
d
Ã
©
f
i
n
i
e
 
d
u
 
t
y
p
e
 
l
i
e
n
 
(
t
a
n
t
 
q
u
\
'
a
p
p
l
i
c
a
b
l
e
)
 
s
e
r
o
n
t
 
m
o
n
t
r
Ã
©
e
s
 
c
o
m
m
e
 
c
o
l
o
n
n
e
s
 
(
c
e
 
q
u
i
 
v
e
u
t
 
d
i
r
e
,
 
b
r
 
m
i
s
 
Ã
 
 
l
a
 
f
i
n
 
d
u
 
l
i
e
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
R
e
c
h
e
r
c
h
e
r
 
r
Ã
©
g
i
o
n
 
p
a
r
 
<
i
>
d
r
o
p
d
o
w
n
<
/
i
>
 
d
e
 
s
Ã
©
l
e
c
t
i
o
n
 
c
o
m
b
i
n
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
f
r
i
r
 
u
n
 
<
i
>
d
r
o
p
d
o
w
n
<
/
i
>
 
d
e
 
r
e
c
h
e
r
c
h
e
 
p
o
u
r
 
f
i
l
t
r
e
r
 
p
a
y
s
/
r
Ã
©
g
i
o
n
s
/
v
i
l
l
e
s
.
 
S
i
 
v
o
u
s
 
a
l
l
e
z
 
u
t
i
l
i
s
e
r
 
c
e
t
t
e
 
o
p
t
i
o
n
 
v
o
u
s
 
a
u
r
e
z
 
m
i
e
u
x
 
d
e
 
n
e
 
p
a
s
 
u
t
i
l
i
s
e
r
 
l
a
 
r
e
c
h
e
r
c
h
e
 
r
Ã
©
g
i
o
n
/
v
i
l
l
e
 
c
i
-
d
e
s
s
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
R
e
c
h
e
r
c
h
e
 
p
a
r
 
n
o
m
 
d
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
n
t
r
e
r
 
l
a
 
r
e
c
h
e
r
c
h
e
 
p
a
r
 
n
o
m
 
d
e
 
l
a
 
p
r
o
p
r
i
Ã
©
t
Ã
©
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
n
t
r
e
r
 
c
o
m
m
e
 
<
i
>
d
r
o
p
d
o
w
n
<
/
i
>
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
 
'
S
Ã
©
l
e
c
t
i
o
n
n
e
z
 
N
o
n
 
p
o
u
r
 
m
o
n
t
r
e
r
 
l
a
 
l
i
s
t
e
 
c
o
m
m
e
 
l
i
e
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
R
e
c
h
e
r
c
h
e
 
p
a
r
 
v
i
l
l
e
/
r
Ã
©
g
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
n
t
r
e
r
 
l
a
 
r
e
c
h
e
r
c
h
e
 
p
a
r
 
r
Ã
©
g
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
n
t
r
e
r
 
c
o
m
m
e
 
<
i
>
d
r
o
p
d
o
w
n
<
/
i
>
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
 
'
S
Ã
©
l
e
c
t
i
o
n
n
e
z
 
N
o
n
 
p
o
u
r
 
m
o
n
t
r
e
r
 
l
a
 
l
i
s
t
e
 
c
o
m
m
e
 
l
i
e
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
R
e
c
h
e
r
c
h
e
 
p
a
r
 
t
y
p
e
 
d
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
n
t
r
e
r
 
l
a
 
r
e
c
h
e
r
c
h
e
 
p
a
r
 
t
y
p
e
 
d
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
n
t
r
e
r
 
c
o
m
m
e
 
<
i
>
d
r
o
p
d
o
w
n
<
/
i
>
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
 
'
S
Ã
©
l
e
c
t
i
o
n
n
e
z
 
N
o
n
 
p
o
u
r
 
m
o
n
t
r
e
r
 
l
a
 
l
i
s
t
e
 
c
o
m
m
e
 
l
i
e
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
 
'
R
e
c
h
e
r
c
h
e
 
p
a
r
 
t
y
p
e
 
d
e
 
c
h
a
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
O
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
 
'
M
o
n
t
r
e
r
 
l
a
 
r
e
c
h
e
r
c
h
e
 
p
a
r
 
t
y
p
e
 
d
e
 
c
h
a
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
O
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
n
t
r
e
r
 
c
o
m
m
e
 
<
i
>
d
r
o
p
d
o
w
n
<
/
i
>
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
 
'
S
Ã
©
l
e
c
t
i
o
n
n
e
z
 
N
o
n
 
p
o
u
r
 
m
o
n
t
r
e
r
 
l
a
 
l
i
s
t
e
 
c
o
m
m
e
 
l
i
e
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
R
e
c
h
e
r
c
h
e
 
p
a
r
 
c
a
r
a
c
t
Ã
©
r
i
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
n
t
r
e
r
 
l
a
 
r
e
c
h
e
r
c
h
e
 
p
a
r
 
c
a
r
a
c
t
Ã
©
r
i
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
n
t
r
e
r
 
c
o
m
m
e
 
<
i
>
d
r
o
p
d
o
w
n
<
/
i
>
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
 
'
S
Ã
©
l
e
c
t
e
r
 
N
o
n
 
p
o
u
r
 
m
o
n
t
r
e
r
 
l
a
 
l
i
s
t
e
 
c
o
m
m
e
 
d
e
s
 
i
m
a
g
e
s
 
d
\
'
o
u
t
i
l
s
 
e
t
 
b
o
Ã
®
t
e
s
 
d
e
 
v
Ã
©
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
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
R
e
c
h
e
r
c
h
e
 
p
a
r
 
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
n
t
r
e
r
 
l
a
 
r
e
c
h
e
r
c
h
e
 
p
a
r
 
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
R
e
c
h
e
r
c
h
e
 
p
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
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
n
t
r
e
r
 
l
a
 
r
e
c
h
e
r
c
h
e
 
p
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
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
M
o
n
t
r
e
r
 
p
a
r
 
g
a
m
m
e
 
d
e
 
p
r
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
n
t
r
e
r
 
l
a
 
r
e
c
h
e
r
c
h
e
 
p
a
r
 
g
a
m
m
e
 
d
e
 
p
r
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
A
c
c
r
o
i
s
s
e
m
e
n
t
s
 
d
e
 
p
r
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
 
r
e
g
a
r
d
e
r
a
 
d
a
n
s
 
t
o
u
t
e
s
 
l
e
s
 
v
a
l
e
u
r
s
 
d
e
s
 
t
a
r
i
f
s
 
e
t
 
p
r
Ã
©
s
e
n
t
e
r
a
 
u
n
e
 
s
Ã
©
r
i
e
 
d
\
'
a
c
c
r
o
i
s
s
e
m
e
n
t
s
 
b
a
s
Ã
©
s
 
s
u
r
 
l
e
s
 
s
p
Ã
©
c
i
f
i
c
a
t
i
o
n
s
 
d
Ã
©
f
i
n
i
e
s
 
i
c
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
 
'
P
a
r
 
d
Ã
©
f
a
u
t
,
 
s
i
 
u
n
 
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
 
n
\
'
e
s
t
 
p
a
s
 
s
Ã
©
l
e
c
t
i
o
n
n
Ã
©
 
Ã
 
 
J
o
m
r
e
s
,
 
u
n
e
 
r
e
c
h
e
r
c
h
e
 
e
s
t
 
f
a
i
t
e
.
 
S
i
 
c
e
t
t
e
 
r
e
c
h
e
r
c
h
e
 
n
\
'
a
 
p
a
s
 
Ã
©
t
Ã
©
 
d
Ã
©
c
l
a
n
c
h
Ã
©
e
 
p
a
r
 
u
n
 
m
o
d
u
l
e
 
d
e
 
r
e
c
h
e
r
c
h
e
,
 
e
l
l
e
 
p
r
o
d
u
i
r
a
 
d
e
s
 
r
Ã
©
s
u
l
t
a
t
s
 
a
l
Ã
©
a
t
o
i
r
e
s
 
(
e
n
 
l
e
 
f
a
i
s
a
n
t
 
e
x
p
r
Ã
¨
s
)
.
 
C
e
t
t
e
 
o
p
t
i
o
n
 
p
e
r
m
e
t
 
d
e
 
l
i
m
i
t
e
r
 
l
e
 
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
t
o
u
r
s
 
d
a
n
s
 
c
e
t
t
e
 
r
e
c
h
e
r
c
h
e
 
a
l
Ã
©
a
t
o
i
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
D
Ã
©
f
i
n
i
t
i
o
n
 
e
l
 
r
Ã
©
s
u
l
t
a
t
s
 
d
e
s
 
t
r
a
v
a
u
x
 
a
u
t
o
m
a
t
i
q
u
e
s
 
(
<
i
>
c
r
o
n
 
j
o
b
s
<
/
i
>
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
I
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
 
d
e
 
t
r
a
v
a
i
l
 
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
.
 
L
a
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
 
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
 
e
s
t
 
n
Ã
©
c
e
s
s
a
i
r
e
 
p
o
u
r
 
l
a
 
m
a
n
i
p
u
l
a
t
i
o
n
 
d
e
 
f
a
c
t
u
r
a
t
i
o
n
 
e
t
 
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
 
'
M
i
n
i
c
o
m
p
o
s
a
n
t
s
 
<
i
>
c
r
o
n
<
/
i
>
 
i
n
s
t
a
l
l
Ã
©
s
.
 
P
o
u
r
 
u
n
 
t
r
a
v
a
i
l
 
a
u
t
o
m
a
t
i
q
u
e
 
i
n
d
i
v
i
d
u
e
l
,
 
u
t
i
l
i
s
e
z
 
l
e
s
 
l
i
e
n
s
 
c
i
-
d
e
s
s
o
u
s
.
 
R
e
m
a
r
q
u
e
z
 
q
u
e
 
l
e
s
 
t
r
a
v
a
u
x
 
a
u
t
o
m
a
t
i
q
u
e
s
 
(
<
i
>
c
r
o
n
 
j
o
b
s
<
/
i
>
)
 
n
e
 
p
r
o
d
u
i
s
e
n
t
 
a
u
c
u
n
e
 
s
o
r
t
i
e
 
d
e
 
d
o
n
n
Ã
©
e
s
,
 
d
o
n
c
 
v
o
u
s
 
n
e
 
v
e
r
r
e
z
 
p
a
s
 
a
u
c
u
n
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
 
s
u
r
 
l
a
 
p
a
g
e
.
 
R
Ã
©
f
Ã
©
r
e
z
-
v
o
u
s
 
p
a
r
 
c
o
n
t
r
e
 
Ã
 
 
l
a
 
l
i
s
t
e
 
d
e
 
t
r
a
v
a
u
x
 
c
i
-
d
e
s
s
o
u
s
.
'
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
©
t
h
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
u
s
 
n
\
'
a
v
e
z
 
p
a
s
 
a
c
c
Ã
¨
s
 
a
u
x
 
t
r
a
v
a
u
x
 
a
u
t
o
m
a
t
i
q
u
e
s
,
 
d
Ã
©
f
i
n
i
s
s
e
z
 
c
e
c
i
 
c
o
m
m
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
s
a
n
t
,
 
a
u
t
r
e
m
e
n
t
 
c
r
Ã
©
e
z
 
u
n
 
t
r
a
v
a
i
l
 
a
u
t
o
m
a
t
i
q
u
e
 
(
<
i
>
c
r
o
n
 
j
o
b
<
/
i
>
)
 
e
t
 
p
r
Ã
©
p
a
r
e
z
-
l
e
 
p
o
u
r
 
e
x
Ã
©
c
u
t
e
r
 
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
n
t
r
e
r
 
<
i
>
l
o
g
g
i
n
g
<
/
i
>
 
d
a
n
s
 
l
e
 
<
i
>
b
r
o
w
s
e
r
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
_
D
E
S
C
'
,
 
'
F
o
n
c
t
i
o
n
n
e
 
s
e
u
l
e
m
e
n
t
 
s
i
 
l
a
 
m
Ã
©
t
h
o
d
e
 
e
s
t
 
d
Ã
©
f
i
n
i
e
 
c
o
m
m
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
s
a
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
L
o
g
g
i
n
g
 
a
c
t
i
v
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
 
'
D
Ã
©
f
i
n
i
s
s
e
z
 
O
u
i
 
p
o
u
r
 
p
e
r
m
e
t
t
r
e
 
l
o
g
g
i
n
g
.
 
L
e
s
 
r
Ã
©
s
u
l
t
a
t
s
 
s
e
r
o
n
t
 
a
f
f
i
c
h
Ã
©
s
 
c
i
-
d
e
s
s
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
L
o
g
g
i
n
g
 
v
e
r
b
e
u
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
G
r
a
n
d
e
s
 
q
u
a
n
t
i
t
Ã
©
s
 
d
e
 
s
o
r
t
i
e
s
 
d
e
 
l
o
g
g
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
Ã
‰
d
i
t
i
o
n
 
d
e
 
t
h
Ã
¨
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
h
a
m
p
s
 
a
d
a
p
t
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
V
o
u
s
 
p
o
u
v
e
z
 
d
Ã
©
f
i
n
i
r
 
i
c
i
 
c
h
a
m
p
s
 
a
d
a
p
t
Ã
©
s
 
s
p
Ã
©
c
i
f
i
q
u
e
s
 
q
u
i
 
s
e
r
o
n
t
 
a
f
f
i
c
h
Ã
©
s
 
d
a
n
s
 
l
e
 
f
o
r
m
u
l
a
i
r
e
 
d
e
 
r
Ã
©
s
e
r
v
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
u
C
h
a
m
p
 
(
s
a
n
s
 
e
s
p
a
c
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
e
u
r
 
d
Ã
©
f
a
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
Ã
©
 
m
a
x
i
m
a
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
 
'
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
Ã
©
 
m
a
x
i
m
a
l
e
 
e
s
t
 
d
Ã
©
f
i
n
i
e
 
d
e
 
f
a
Ã
§
o
n
 
Ã
 
 
Ã
ª
t
r
e
 
p
l
u
s
 
g
r
a
n
d
e
 
q
u
e
 
1
,
 
l
e
s
 
h
Ã
´
t
e
s
 
v
e
r
r
o
n
t
 
u
n
 
<
i
>
d
r
o
p
d
o
w
n
<
/
i
>
 
p
o
u
r
 
c
h
o
i
s
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
Ã
©
 
d
\
'
e
x
t
r
a
s
 
q
u
\
'
i
l
s
 
p
e
u
v
e
n
t
 
d
e
m
a
n
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
T
a
u
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
e
 
d
u
 
t
a
u
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
t
i
o
n
 
d
e
 
t
a
x
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
V
o
u
s
 
n
e
 
p
o
u
v
e
z
 
p
a
s
 
Ã
©
l
i
m
i
n
e
r
 
c
e
 
t
a
u
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
V
a
l
e
u
r
 
d
u
 
t
a
u
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
P
a
s
 
p
a
y
Ã
©
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
P
A
I
D
'
,
 
'
P
a
y
Ã
©
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
A
n
n
u
l
Ã
©
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
S
u
s
p
e
n
d
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
t
i
l
i
s
a
t
e
u
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
S
t
a
t
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
R
a
m
a
s
s
Ã
©
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
D
U
E
'
,
 
'
E
n
 
d
e
t
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
o
u
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
 
g
Ã
©
n
Ã
©
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
Ã
©
q
u
e
n
c
e
 
d
e
 
r
e
n
o
u
v
e
l
l
e
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
J
o
u
r
 
d
u
 
m
o
i
s
,
 
d
e
 
r
e
n
o
u
v
e
l
l
e
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
e
 
d
e
 
d
e
v
i
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
i
g
n
e
 
d
\
'
a
r
t
i
c
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
i
x
 
a
u
 
d
Ã
©
p
a
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
Ã
©
 
a
u
 
d
Ã
©
p
a
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
R
a
b
a
i
s
 
a
u
 
d
Ã
©
p
a
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
 
a
u
 
d
Ã
©
p
a
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
 
'
C
o
d
e
 
d
u
 
t
a
u
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
 
d
u
 
t
a
u
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
V
a
l
e
u
r
 
d
u
 
t
a
u
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
P
a
s
s
e
r
 
a
u
 
d
e
s
s
u
s
 
d
e
s
 
d
Ã
©
f
i
n
i
t
i
o
n
s
 
s
t
a
n
d
a
r
d
 
d
u
 
<
i
>
g
a
t
e
w
a
y
<
/
i
>
 
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
n
t
r
e
r
 
m
a
 
f
a
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
o
u
p
o
n
s
 
d
e
 
r
a
b
a
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
C
o
d
e
s
 
d
e
 
r
a
b
a
i
s
 
p
e
u
v
e
n
t
 
Ã
ª
t
r
e
 
g
Ã
©
n
Ã
©
r
Ã
©
s
 
e
t
 
p
a
s
s
Ã
©
s
 
a
u
x
 
l
e
s
 
h
Ã
´
t
e
s
 
c
o
m
m
e
 
u
n
 
s
t
i
m
u
l
a
n
t
 
p
o
u
r
 
f
a
i
r
e
 
p
l
u
s
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
.
 
V
a
l
a
b
l
e
 
d
Ã
¨
s
 
e
t
 
j
u
s
q
u
\
'
a
u
 
s
e
 
r
Ã
©
f
Ã
¨
r
e
n
t
 
a
u
x
 
d
a
t
e
s
 
q
u
a
n
d
 
l
e
s
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
 
p
e
u
v
e
n
t
 
Ã
ª
t
r
e
 
a
c
c
e
p
t
Ã
©
e
s
,
 
p
a
s
 
a
u
x
 
d
a
t
e
s
 
d
e
 
l
a
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
e
l
l
e
-
m
Ã
ª
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
e
 
d
e
 
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
a
l
a
b
l
e
 
d
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
a
l
a
b
l
e
 
j
u
s
q
u
\
'
a
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
M
o
n
t
a
n
t
 
d
u
 
r
a
b
a
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
L
e
 
r
a
b
a
i
s
 
e
s
t
 
e
n
 
p
o
u
r
c
e
n
t
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
C
h
a
m
b
r
e
 
s
e
u
l
e
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
 
'
S
i
 
v
o
u
s
 
a
v
e
z
 
u
n
 
c
o
d
e
 
d
e
 
c
o
u
p
o
n
,
 
e
n
t
r
e
z
-
l
e
 
i
c
i
 
e
t
 
c
l
i
q
u
e
z
 
s
u
r
 
l
e
 
l
i
e
n
 
"
g
a
r
d
e
r
 
c
o
u
p
o
n
"
 
p
o
u
r
 
s
a
u
v
e
r
 
l
e
s
 
d
Ã
©
t
a
i
l
s
 
v
i
s
 
Ã
 
 
v
i
s
 
v
o
t
r
e
 
r
Ã
©
s
e
r
v
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
a
r
d
e
r
 
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
o
u
p
o
n
 
s
a
u
v
Ã
©
 
v
i
s
 
Ã
 
 
v
i
s
 
l
a
 
r
Ã
©
s
e
r
v
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
u
m
Ã
©
r
o
 
d
e
 
c
o
u
p
o
n
 
p
a
s
 
t
r
o
u
v
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
e
u
r
 
d
u
 
r
a
b
a
i
s
 
d
u
 
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
R
Ã
©
s
e
r
v
a
t
i
o
n
 
r
a
b
a
t
t
u
e
.
 
D
Ã
©
f
i
n
i
t
i
o
n
 
d
u
 
c
o
d
e
 
d
e
 
c
o
u
p
o
n
/
v
a
l
e
u
r
 
d
u
 
r
a
b
a
i
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
C
h
o
i
s
i
s
s
e
z
 
l
a
n
g
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
 
'
C
h
o
i
s
i
s
s
e
z
 
l
e
s
 
o
p
t
i
o
n
s
 
d
e
 
l
a
n
g
u
e
 
Ã
 
 
a
f
f
i
c
h
e
r
 
s
u
r
 
l
e
 
m
e
n
u
 
<
i
>
d
r
o
p
d
o
w
n
<
/
i
>
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
'
,
 
'
A
f
f
i
c
h
e
r
 
l
e
 
<
i
>
d
r
o
p
d
o
w
n
<
/
i
>
 
d
e
 
c
h
o
i
x
 
d
e
s
 
l
a
n
g
u
e
s
?
'
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
C
h
e
r
(
Ã
¨
r
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
M
e
r
c
i
 
d
e
 
v
o
t
r
e
 
e
n
r
e
g
i
s
t
r
e
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
 
'
V
o
t
r
e
 
n
o
m
 
d
\
'
u
t
i
l
i
s
a
t
e
u
r
 
e
s
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
V
o
t
r
e
 
m
o
t
 
d
e
 
p
a
s
s
e
 
e
s
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
V
e
u
i
l
l
e
z
 
v
o
u
s
 
l
o
g
g
e
r
 
p
o
u
r
 
v
o
i
r
 
v
o
s
 
r
Ã
©
s
e
r
v
a
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
o
u
p
o
n
 
g
a
r
d
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
o
u
p
o
n
 
Ã
©
l
i
m
i
n
Ã
©
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
N
o
m
 
d
\
'
u
t
i
l
i
s
a
t
e
u
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
M
o
t
 
d
e
 
p
a
s
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
o
t
i
f
i
c
a
t
i
o
n
 
v
e
r
 
l
e
 
m
o
b
i
l
e
 
n
u
m
Ã
©
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
 
'
U
t
i
l
i
s
e
z
 
l
e
 
f
o
r
m
a
t
 
\
'
c
o
d
e
 
p
a
y
s
,
 
n
u
m
Ã
©
r
o
 
d
e
 
m
o
b
i
l
e
\
'
.
 
P
a
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
 
v
o
u
s
 
a
v
e
z
 
u
n
 
m
o
b
i
l
e
 
u
t
i
l
i
s
Ã
©
 
e
n
 
F
r
a
n
c
e
 
c
e
c
i
 
s
e
r
a
i
t
 
q
u
e
l
q
u
e
 
c
h
o
s
e
 
c
o
m
m
e
 
\
'
3
3
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
\
'
.
 
L
a
i
s
s
e
z
 
v
i
d
e
 
s
i
 
v
o
u
s
 
n
e
 
v
o
u
l
e
z
 
p
a
s
 
r
e
c
e
v
o
i
r
 
d
e
s
 
m
e
s
s
a
g
e
s
 
d
e
 
n
o
r
t
i
f
i
c
a
t
i
o
n
 
s
u
r
 
v
o
t
r
e
 
t
Ã
©
l
Ã
©
p
h
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
 
'

<
b
>
L
o
g
i
q
u
e
m
e
n
t
 
l
\
'
u
s
a
g
e
/
t
e
s
t
 
d
e
 
c
e
 
<
i
>
g
a
t
e
w
a
y
<
/
i
>
 
n
\
'
e
s
t
 
p
a
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
v
e
c
 
u
n
 
s
e
r
v
e
u
r
 
p
r
i
v
Ã
©
 
(
l
o
c
a
l
h
o
s
t
)
,
 
v
o
u
s
 
a
v
e
z
 
b
s
o
i
n
 
d
\
'
u
n
 
s
e
r
v
e
u
r
 
p
u
b
l
i
c
 
a
c
t
i
f
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
o
u
r
 
u
t
i
l
i
s
e
r
 
l
e
 
g
a
t
e
w
a
y
 
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
 
v
o
u
s
 
v
e
z
 
b
e
s
o
i
n
 
d
\
'
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
 
e
t
 
a
u
 
m
o
i
n
s
 
u
n
e
 
c
o
n
n
e
x
i
o
n
 
e
n
r
e
g
i
s
t
r
Ã
©
e
 
(
A
P
I
 
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
,
 
o
u
 
s
o
u
s
-
p
r
o
d
u
i
t
)
 
e
n
t
r
e
 
v
o
t
r
e
 
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
 
e
t
 
l
e
 
g
a
t
e
w
a
y
.
 
C
h
a
q
u
e
 
c
o
n
n
e
x
i
o
n
 
e
s
t
 
c
o
n
n
u
e
 
c
o
m
m
e
 
u
n
 
s
o
u
s
-
p
r
o
d
u
i
t
.
 
V
o
i
c
i
 
c
o
m
m
e
n
t
 
l
e
 
f
a
i
r
e
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
 
1
 
-
 
E
n
r
e
g
i
s
t
r
e
z
-
v
o
u
s
 
p
o
u
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
 
v
o
u
s
 
n
\
'
e
n
 
a
v
e
z
 
p
a
s
 
e
n
c
o
r
e
,
 
v
o
u
s
 
a
u
r
e
z
 
b
e
s
o
i
n
 
d
e
 
v
o
u
s
 
e
n
r
e
g
i
s
t
r
e
r
 
p
o
u
r
 
a
v
o
i
r
 
u
n
 
c
o
m
p
t
e
.
 
A
u
t
r
e
m
e
n
t
,
 
s
u
i
v
e
z
 
d
i
r
e
c
t
e
m
e
n
t
 
v
e
r
s
 
l
e
 
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
l
l
e
z
 
Ã
 
 
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
 
e
t
 
c
h
o
i
s
i
s
s
e
z
 
l
e
 
s
o
u
s
-
p
r
o
d
u
i
t
 
A
P
I
 
a
p
p
r
o
p
r
i
Ã
©
 
(
m
Ã
©
t
h
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
o
n
)
 
q
u
e
 
v
o
u
s
 
v
o
u
l
e
z
 
u
t
i
l
i
s
e
r
 
(
C
e
n
t
r
a
l
 
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
 
C
l
i
q
u
e
 
s
u
r
 
l
\
'
h
i
p
e
r
-
l
i
e
n
 
e
n
r
e
g
i
s
t
r
e
r
.
<
b
r
/
>

*
 
R
e
m
p
l
i
s
s
e
z
 
l
e
 
f
o
r
m
u
l
a
i
r
e
 
d
\
'
e
n
r
e
g
i
s
t
r
e
m
e
n
t
.
<
b
r
/
>

A
p
r
Ã
¨
s
 
l
\
'
a
v
o
i
r
 
s
o
u
m
i
s
 
a
v
e
c
 
s
u
c
c
Ã
¨
s
,
 
v
o
u
s
 
s
e
r
e
z
 
a
u
t
o
m
a
t
i
q
u
e
m
e
n
t
 
l
o
g
g
Ã
©
 
d
a
n
s
 
v
o
t
r
e
 
n
o
u
v
e
a
u
 
c
o
m
p
t
e
 
e
t
 
e
m
m
e
n
Ã
©
 
Ã
 
 
u
n
e
 
p
a
g
e
 
o
Ã
¹
 
v
o
u
s
 
p
o
u
r
r
e
z
 
a
j
o
u
t
e
r
 
v
o
t
r
e
 
c
o
n
n
e
x
i
o
n
 
A
P
I
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
 
A
j
o
u
t
e
z
 
u
n
e
 
c
o
n
n
e
x
i
o
n
 
A
P
I
 
e
n
r
e
g
i
s
t
r
Ã
©
e
 
(
s
o
u
s
-
p
r
o
d
u
i
t
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
 
v
o
u
s
 
n
\
'
Ã
ª
t
e
s
 
p
a
s
 
e
n
c
o
r
e
 
l
o
g
g
Ã
©
 
Ã
 
 
v
o
t
r
e
 
c
o
m
p
t
e
,
 
v
o
u
s
 
d
e
v
r
e
z
 
l
e
 
f
a
i
r
e
 
Ã
 
 
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
<
b
r
/
>

*
 
S
Ã
©
l
e
c
t
i
o
n
n
e
z
 
\
"
G
Ã
©
r
e
r
 
m
e
s
 
p
r
o
d
u
i
t
s
\
"
 
d
a
n
s
 
l
e
 
m
e
n
u
 
d
u
 
s
o
m
m
e
t
.
<
b
r
/
>

*
 
S
Ã
©
l
e
c
t
i
o
n
n
e
z
 
l
a
 
c
o
n
n
e
x
i
o
n
 
A
P
I
 
q
u
e
 
v
o
u
s
 
v
o
u
l
e
z
 
u
t
i
l
i
s
e
r
 
(
H
T
T
P
 
A
P
I
)
 
d
a
n
s
 
l
e
 
m
e
n
u
 
<
i
>
d
r
o
p
d
o
w
n
<
/
i
>
 
(
\
'
A
j
o
u
t
e
r
 
c
o
n
n
e
x
i
o
n
\
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
Ã
©
t
e
z
 
l
e
 
f
o
r
m
u
l
a
i
r
e
.
 
R
a
s
s
u
r
e
z
 
v
o
u
s
 
d
\
'
i
n
t
r
o
d
u
i
r
e
 
l
\
'
I
P
 
b
l
o
q
u
Ã
©
(
l
\
'
I
P
 
d
e
 
c
e
 
s
e
r
v
e
u
r
)
,
 
d
Ã
©
f
i
n
i
s
s
e
z
 
<
i
>
C
a
l
l
b
a
c
k
<
/
i
>
 
c
o
m
m
e
 
H
T
T
P
 
P
O
S
T
.
 
V
o
u
s
 
a
u
r
e
z
 
b
e
s
o
i
n
 
d
e
 
d
Ã
©
f
i
n
i
r
 
l
\
'
a
d
r
e
s
s
e
 
c
a
l
l
b
a
c
k
 
c
o
m
m
e
 
"
.
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
l
i
v
e
_
s
i
t
e
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
 
p
l
u
s
 
u
n
 
n
o
m
 
d
\
'
u
t
i
l
i
s
a
t
e
u
r
 
e
t
 
u
n
 
m
o
t
 
d
e
 
p
a
s
s
e
.
<
b
r
/
>

S
i
 
v
o
u
s
 
a
v
e
z
 
e
n
r
e
g
i
s
t
r
Ã
©
 
p
l
u
s
 
d
\
'
u
n
e
 
c
o
n
n
e
x
i
o
n
 
A
P
I
,
 
l
e
 
n
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
f
 
q
u
e
 
v
o
u
s
 
i
n
t
r
o
d
u
i
s
e
z
 
p
o
u
r
 
c
h
a
c
u
n
e
 
d
o
i
t
 
Ã
ª
t
r
e
 
u
n
i
q
u
e
 
-
 
v
o
u
s
 
n
e
 
p
o
u
v
e
z
 
p
a
s
 
a
v
o
i
r
 
p
l
u
s
i
e
u
r
s
 
A
P
I
 
a
v
e
c
 
l
e
 
m
Ã
ª
m
e
 
n
o
m
.
<
b
r
/
>

A
p
r
Ã
¨
s
 
a
v
o
i
r
 
s
o
u
m
i
s
 
l
e
 
f
o
r
m
u
l
a
i
r
e
 
a
v
e
c
 
s
u
c
c
Ã
¨
s
,
 
l
e
s
 
d
Ã
©
t
a
i
l
s
 
d
e
 
v
o
t
r
e
 
a
u
t
o
r
i
s
a
t
i
o
n
 
s
e
r
o
n
t
 
a
f
f
i
c
h
Ã
©
s
,
 
y
 
i
n
c
l
u
s
 
l
\
'
I
D
 
A
P
I
 
d
e
 
c
h
a
q
u
e
 
c
o
n
n
e
x
i
o
n
.
 
C
e
s
 
d
Ã
©
t
a
i
l
s
 
d
\
'
a
u
t
h
e
n
t
i
f
i
c
a
t
i
o
n
 
s
o
n
t
 
n
Ã
©
c
e
s
s
a
i
r
e
s
 
q
u
a
n
d
 
v
o
u
s
 
v
o
u
s
 
c
o
n
n
e
c
t
e
z
 
a
u
 
g
a
t
e
w
a
y
 
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
o
u
r
 
e
n
v
o
y
e
r
 
u
n
 
m
e
s
s
a
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
s
e
z
 
v
o
t
r
e
 
n
o
m
 
d
\
'
u
t
i
l
i
s
a
t
e
u
r
,
 
m
o
t
 
d
e
 
p
a
s
s
e
 
e
t
 
a
p
i
_
i
d
 
p
o
u
r
 
r
e
m
p
l
i
r
 
l
e
s
 
c
h
a
m
p
s
 
c
i
-
d
e
s
s
u
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

'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
 
'
L
i
s
t
e
 
d
e
 
c
h
a
m
b
r
e
 
d
u
 
f
o
r
m
u
l
a
i
r
e
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
a
f
f
i
c
h
e
 
a
c
c
Ã
¨
s
 
i
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
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
L
i
s
t
e
 
d
e
 
c
h
a
m
b
r
e
 
d
u
 
f
o
r
m
u
l
a
i
r
e
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
a
f
f
i
c
h
e
 
m
a
x
.
 
p
e
r
s
o
n
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
 
'
V
e
u
i
l
l
e
z
 
r
e
m
a
r
q
u
e
r
 
q
u
e
 
l
e
s
 
p
r
i
x
 
d
e
s
 
c
h
a
m
b
r
e
 
m
o
n
t
r
Ã
©
s
 
s
o
n
t
 
e
s
t
i
m
a
t
i
f
s
 
e
t
 
q
u
e
 
l
e
 
p
r
i
x
 
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
Ã
©
s
e
r
v
a
t
i
o
n
 
n
e
 
s
e
r
a
 
c
a
l
c
u
l
Ã
©
 
q
u
e
 
q
u
a
n
d
 
v
o
u
s
 
a
u
r
e
z
 
a
j
o
u
t
Ã
©
 
u
n
e
 
o
u
 
p
l
u
s
i
e
u
r
s
 
c
h
a
m
b
r
e
s
 
d
a
n
s
 
v
o
t
r
e
 
s
Ã
©
l
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
P
a
q
u
e
t
s
 
d
e
 
s
o
u
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
Ã
©
'
)
;

j
r
_
d
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
M
o
n
t
a
n
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
i
m
i
t
e
 
d
\
'
Ã
©
t
a
b
l
i
s
s
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
 
'
S
o
u
s
c
r
i
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
s
e
r
 
l
a
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
 
d
e
 
g
Ã
©
r
a
n
c
e
 
d
e
 
s
o
u
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
Ã
©
e
z
 
u
n
 
n
o
u
v
e
a
u
 
u
t
i
l
i
s
a
t
e
u
r
 
e
n
 
r
Ã
©
s
e
r
v
a
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
 
'
C
r
Ã
©
e
z
 
u
n
 
n
o
u
v
e
a
u
 
c
o
m
p
t
e
 
d
\
'
u
t
i
l
i
s
a
t
e
u
r
 
l
o
r
s
 
d
\
'
u
n
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
p
a
r
 
q
u
e
l
q
\
'
u
n
 
p
a
s
 
e
n
r
e
g
i
s
t
r
Ã
©
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
C
l
i
q
u
e
z
 
i
c
i
 
p
o
u
r
 
e
n
r
e
g
i
s
t
r
e
r
 
v
o
t
r
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
'
)
;

j
r
_
d
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
 
'
M
e
r
c
i
 
d
e
 
v
o
t
r
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
-
 
d
Ã
©
t
a
i
l
s
 
d
e
 
n
o
u
v
e
a
u
 
u
t
i
l
i
s
a
t
e
u
r
 
s
u
i
v
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
s
e
 
y
o
u
r
 
m
o
u
s
e
 
t
o
 
m
o
v
e
 
a
r
o
u
n
d
 
t
h
e
 
m
a
p
,
 
a
n
d
 
d
r
a
g
 
t
h
e
 
p
o
i
n
t
e
r
 
t
o
 
t
h
e
 
l
o
c
a
t
i
o
n
 
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
 
t
o
 
s
e
t
 
t
h
e
 
l
a
t
i
t
u
d
e
 
a
n
d
 
l
o
n
g
i
t
u
d
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
T
a
b
l
e
a
u
 
d
e
 
c
o
n
t
r
Ã
´
l
e
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
A
f
f
i
c
h
e
r
 
f
a
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
A
f
f
i
c
h
e
r
 
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
j
o
u
t
e
r
 
m
a
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
Ã
 
 
c
e
 
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
v
i
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
N
o
u
s
 
r
e
g
r
e
t
t
o
n
s
,
 
m
a
i
s
 
c
e
 
p
a
q
u
e
t
 
n
\
'
e
s
t
 
p
a
s
 
r
e
c
o
n
n
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
N
o
u
s
 
r
e
g
r
e
t
t
o
n
s
,
 
m
a
i
s
 
v
o
u
s
 
a
v
e
z
 
d
Ã
©
j
Ã
 
 
s
o
u
s
c
r
i
t
 
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
i
t
,
 
e
t
 
v
o
u
s
 
n
e
 
p
o
u
v
e
z
 
p
a
s
 
l
e
 
f
a
i
r
e
 
d
e
 
n
o
u
v
e
a
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
V
o
s
 
d
Ã
©
t
a
i
l
s
 
d
\
'
a
f
f
a
i
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
 
c
o
m
m
e
r
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
O
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
o
m
b
r
e
 
T
V
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
_
J
O
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
N
r
 
d
e
 
p
o
r
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
e
 
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
Ã
©
l
e
c
t
i
o
n
e
z
 
l
e
s
 
d
a
t
e
s
 
d
a
n
s
 
l
e
s
q
u
e
l
l
e
s
 
v
o
u
s
 
v
o
u
l
e
z
 
a
p
p
l
i
q
u
e
r
 
l
\
'
i
n
t
e
r
d
i
c
t
i
o
n
 
d
e
 
r
Ã
©
s
e
r
v
e
r
.
 
A
p
r
Ã
¨
s
,
 
c
l
i
q
u
e
z
 
s
u
r
 
l
e
 
b
o
u
t
o
n
 
\
"
A
p
p
l
i
q
u
e
r
\
"
 
p
o
u
r
 
r
e
v
Ã
©
r
i
f
i
e
r
 
l
\
'
i
n
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
Ã
©
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
\
'
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
 
a
 
u
n
 
o
u
 
p
l
u
s
i
e
u
r
s
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
 
p
o
u
r
 
l
a
 
p
Ã
©
r
i
o
d
e
 
m
e
n
t
i
o
n
n
Ã
©
e
,
 
v
o
u
s
 
n
e
 
p
o
u
r
r
e
z
 
p
a
s
 
a
n
n
u
l
e
r
 
l
a
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
j
u
s
q
u
\
'
Ã
 
 
c
e
 
q
u
e
 
l
e
s
 
a
u
t
r
e
s
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
/
i
n
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
Ã
©
s
 
o
n
t
 
Ã
©
t
Ã
©
 
a
n
n
u
l
Ã
©
s
/
r
e
m
a
r
q
u
Ã
©
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
N
o
u
s
 
r
e
g
r
e
t
t
o
n
s
,
 
v
o
u
s
 
n
e
 
p
o
u
v
e
z
 
p
a
s
 
f
a
i
r
e
 
c
e
t
t
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
d
e
v
e
n
i
r
 
i
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
 
p
o
u
r
 
l
e
s
 
d
a
t
e
s
 
i
n
d
i
q
u
Ã
©
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
V
o
u
s
 
p
o
u
v
e
z
 
f
a
i
r
e
 
c
e
t
t
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
d
e
v
e
n
i
r
 
i
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
 
p
o
u
r
 
c
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
 
'
V
o
t
r
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
e
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
Ã
©
e
 
p
o
u
r
 
c
h
a
r
g
e
r
 
p
a
r
 
p
e
r
s
o
n
n
e
 
p
a
r
 
n
u
i
t
,
 
m
a
i
s
 
v
o
u
s
 
n
\
'
a
v
e
z
 
p
a
s
 
c
r
Ã
©
e
 
o
u
 
a
f
f
i
c
h
Ã
©
 
e
n
c
o
r
e
 
a
u
c
u
n
 
t
y
p
e
 
d
\
'
h
Ã
´
t
e
.
 
V
e
u
i
l
l
e
z
 
c
r
Ã
©
e
r
 
e
 
p
u
b
l
i
e
r
 
a
u
 
m
o
i
n
s
 
u
n
 
t
y
p
e
 
d
\
'
h
Ã
´
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
V
o
u
s
 
n
\
'
a
v
e
z
 
p
a
s
 
e
n
c
o
r
e
 
a
u
c
u
n
 
t
a
r
i
f
 
c
o
n
f
i
g
u
r
Ã
©
,
 
d
o
n
c
 
v
o
u
s
 
n
e
 
p
o
u
r
r
e
z
 
p
a
s
 
a
v
o
i
r
 
a
u
c
u
n
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
p
o
u
r
 
v
o
t
r
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
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
 
d
\
'
Ã
©
d
i
t
i
o
n
 
a
c
t
i
v
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
 
d
\
'
Ã
©
d
i
t
i
o
n
 
d
Ã
©
s
a
c
t
i
v
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
h
a
r
g
e
r
 
d
Ã
©
p
Ã
´
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
 
'
D
Ã
©
p
Ã
´
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
 
v
o
u
s
 
p
e
r
m
e
t
t
r
o
n
t
 
d
e
 
d
Ã
©
f
i
n
i
r
 
s
i
 
v
o
u
s
 
a
i
m
e
r
i
e
z
 
c
h
a
r
g
e
r
 
l
e
 
m
o
n
t
a
n
t
 
t
o
t
a
l
 
s
i
 
l
a
 
d
a
t
e
 
d
\
'
a
r
r
i
v
Ã
©
e
 
d
e
 
l
a
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
t
o
m
b
e
 
d
a
n
s
 
u
n
e
 
p
Ã
©
r
i
o
d
e
 
d
e
 
N
 
j
o
u
r
s
 
Ã
 
 
p
a
r
t
i
r
 
d
\
'
a
u
j
o
u
r
d
\
'
h
u
i
.
 
V
e
u
i
l
l
e
z
 
l
a
 
d
Ã
©
f
i
n
i
r
 
O
u
i
 
p
o
u
r
 
a
c
t
i
v
e
r
 
c
e
t
t
e
 
c
a
r
a
c
t
Ã
©
r
i
s
t
i
q
u
e
,
 
e
t
 
i
n
t
r
o
d
u
i
s
e
z
 
l
e
 
n
o
m
b
r
e
 
d
e
 
j
o
u
r
s
 
c
i
-
d
e
s
s
o
u
s
;
 
p
a
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
 
l
\
'
a
r
r
i
v
Ã
©
e
 
e
s
t
 
d
a
n
s
 
6
0
 
j
o
u
r
s
,
 
a
l
o
r
s
 
l
e
 
m
o
n
t
a
n
t
 
d
u
 
d
Ã
©
p
Ã
´
t
 
c
h
a
r
g
Ã
©
 
s
e
r
a
 
l
e
 
t
o
t
a
l
,
 
a
u
t
r
e
m
e
n
t
 
l
e
 
m
o
n
t
a
n
t
 
s
e
r
a
 
b
a
s
Ã
©
 
s
u
r
 
l
e
s
 
o
p
t
i
o
n
s
 
d
e
 
d
Ã
©
p
Ã
´
t
 
c
o
n
f
i
g
u
r
Ã
©
e
s
 
c
i
-
d
e
s
s
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
 
'
N
o
m
b
r
e
 
d
e
 
j
o
u
r
s
 
p
e
n
d
a
n
t
 
l
e
s
q
u
e
l
s
 
l
e
 
m
o
n
t
a
n
t
 
t
o
t
a
l
 
s
e
r
a
 
c
h
a
r
g
Ã
©
 
c
o
m
m
e
 
d
Ã
©
p
Ã
´
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
t
i
o
n
 
e
n
v
o
y
Ã
©
.
 
V
o
u
s
 
p
o
u
v
e
z
 
m
a
i
n
t
e
n
a
n
t
 
f
e
r
m
e
r
 
c
e
t
t
e
 
f
e
n
Ã
ª
t
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
 
'
A
g
e
n
t
 
d
e
 
c
o
n
t
a
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
q
u
e
r
 
f
a
c
t
u
r
e
 
p
a
y
Ã
©
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
e
 
m
a
r
q
u
Ã
©
e
 
c
o
m
m
e
 
p
a
y
Ã
©
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
O
b
t
e
n
i
r
 
n
o
u
v
e
a
u
 
c
l
e
f
 
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
 
'
C
e
t
t
e
 
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
 
e
s
t
 
p
o
u
r
 
u
n
e
 
s
e
u
l
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
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
 
'
S
i
 
c
e
t
t
e
 
o
p
t
i
o
n
 
e
s
t
 
d
Ã
©
f
i
n
i
e
 
c
o
m
m
e
 
O
u
i
,
 
l
a
 
v
u
e
 
<
i
>
f
r
o
n
t
 
e
n
d
<
/
i
>
 
d
e
 
J
o
m
r
e
s
 
a
u
x
 
u
t
i
l
i
s
a
t
e
u
r
s
 
n
o
n
 
a
u
t
o
r
i
s
Ã
©
s
 
d
e
v
i
e
n
t
 
t
r
Ã
¨
s
 
s
i
m
p
l
i
f
i
Ã
©
e
.
 
L
e
s
 
d
e
m
a
n
d
e
s
 
Ã
 
 
J
o
m
r
e
s
 
p
a
r
 
d
Ã
©
f
a
u
t
 
Ã
 
 
p
a
r
t
i
r
 
d
\
'
u
n
e
 
o
p
t
i
o
n
 
d
e
 
m
e
n
u
,
 
a
u
 
l
i
e
u
 
d
\
'
a
v
o
i
r
 
c
o
m
m
e
 
r
Ã
©
p
o
n
s
e
 
u
n
e
 
l
i
s
t
e
 
d
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
s
,
 
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
 
e
m
m
Ã
¨
n
e
 
l
\
'
h
Ã
´
t
e
 
a
u
 
f
o
r
m
u
l
a
i
r
e
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
d
u
 
s
y
s
t
Ã
¨
m
e
.
 
G
Ã
©
r
a
n
t
s
 
d
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
n
e
 
v
e
r
r
o
n
t
 
p
a
s
 
a
u
s
s
i
 
l
e
 
b
o
u
t
o
n
 
d
e
 
p
r
Ã
©
v
i
s
i
o
n
 
d
e
s
 
d
Ã
©
t
a
i
l
s
 
d
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
o
u
 
l
e
 
b
o
u
t
o
n
 
d
\
'
a
j
o
u
t
e
r
 
u
n
e
 
n
o
u
v
e
l
l
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
.
 
L
\
'
i
d
Ã
©
a
l
 
s
i
 
v
o
u
s
 
n
e
 
v
o
u
l
e
z
 
q
u
\
'
a
f
f
i
c
h
e
r
 
u
n
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
e
t
 
e
n
 
a
c
c
e
p
t
e
r
 
d
e
s
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
.
<
b
r
/
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
S
o
l
d
e
 
e
n
 
p
a
i
e
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
 
'
R
e
m
a
r
q
u
e
z
,
 
v
o
u
s
 
a
l
l
e
z
 
u
t
i
l
i
s
e
r
 
l
e
 
M
o
d
e
 
Ã
‰
d
i
t
i
o
n
 
e
n
s
e
m
b
l
e
 
a
v
e
c
 
l
e
 
M
o
d
e
 
G
l
o
b
a
l
 
d
\
'
Ã
‰
d
i
t
i
o
n
 
a
c
t
i
f
.
 
C
e
 
q
u
i
 
e
s
t
 
b
o
n
 
s
i
 
v
o
u
s
 
s
a
v
e
z
 
c
e
 
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
e
 
l
e
 
M
o
d
e
 
G
l
o
b
a
l
 
d
\
'
Ã
‰
d
i
t
i
o
n
,
 
m
a
i
s
 
m
a
u
v
a
i
s
 
s
i
 
v
o
u
s
 
n
\
'
Ã
ª
t
e
s
 
p
a
s
 
a
u
 
c
o
u
r
a
n
t
,
 
c
e
 
q
u
i
 
p
e
u
t
 
o
c
c
a
s
i
o
n
n
e
r
 
d
e
s
 
p
r
o
b
l
Ã
¨
m
e
s
.
 
S
i
 
v
o
u
s
 
n
\
'
Ã
ª
t
r
e
s
 
p
a
s
 
s
u
r
 
d
\
'
u
t
i
l
i
s
e
r
 
J
o
m
r
e
s
 
c
o
m
m
e
 
Ã
§
a
,
 
v
e
u
i
l
l
e
z
 
v
o
i
r
 
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
l
a
 
p
a
g
e
 
d
u
 
m
a
n
u
e
l
 
s
u
r
 
M
o
d
e
 
d
\
'
Ã
‰
d
i
t
i
o
n
<
/
a
>
 
p
o
u
r
 
r
e
n
s
e
i
g
n
e
m
e
n
t
s
 
a
d
d
i
t
i
o
n
n
e
l
s
 
s
u
r
 
c
e
 
s
u
j
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
e
f
 
d
e
 
s
u
p
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
L
e
 
n
u
m
Ã
©
r
o
 
d
e
 
c
l
e
f
 
d
e
 
v
o
t
r
e
 
l
i
c
e
n
c
e
 
d
e
 
s
u
p
p
o
r
t
 
(
a
u
s
i
 
c
o
n
n
u
 
c
o
m
m
e
 
n
u
m
Ã
©
r
o
 
d
e
 
l
i
c
e
n
c
e
)
.
 
V
o
u
s
 
a
u
r
e
z
 
b
e
s
o
i
n
 
d
\
'
u
n
e
 
l
i
c
e
n
c
e
 
v
a
l
a
b
l
e
 
p
o
u
r
 
p
o
u
v
o
i
r
 
d
Ã
©
c
h
a
r
g
e
r
 
d
e
s
 
m
i
s
e
s
-
Ã
 
-
j
o
u
r
 
e
t
 
<
i
>
p
l
u
g
i
n
s
<
/
i
>
 
d
e
 
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
R
a
b
a
i
s
 
p
e
r
s
o
n
n
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
L
i
m
i
t
e
r
 
l
\
'
e
n
r
e
g
i
s
t
r
e
m
e
n
t
 
d
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
s
 
Ã
 
 
u
n
 
s
e
u
l
 
P
a
y
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
 
'
V
o
u
s
 
p
o
u
v
e
z
 
v
o
u
s
 
a
s
s
u
r
e
r
 
q
u
e
 
l
\
'
e
n
r
e
g
i
s
t
r
e
m
e
n
t
 
d
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
s
 
s
o
i
t
 
l
i
m
i
t
Ã
©
 
Ã
 
 
u
n
 
s
e
u
l
 
P
a
y
s
,
 
e
n
 
d
Ã
©
f
i
n
i
s
s
a
n
t
 
c
e
t
t
e
 
o
p
t
i
o
n
 
c
o
m
m
e
 
O
u
i
 
e
t
 
l
e
 
P
a
y
s
 
e
n
 
q
u
e
s
t
i
o
n
 
d
a
n
s
 
l
\
'
o
p
t
i
o
n
 
s
u
i
v
a
n
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
r
i
Ã
©
t
Ã
©
s
 
s
o
n
t
 
l
o
c
a
l
i
s
Ã
©
e
s
 
d
a
n
s
 
c
e
 
P
a
y
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
h
Ã
¨
m
e
 
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
C
h
o
i
s
i
s
s
e
z
 
u
n
 
t
h
Ã
¨
m
e
 
j
Q
u
e
r
y
 
Ã
 
 
u
t
i
l
i
s
e
r
 
d
a
n
s
 
l
e
s
 
s
Ã
©
p
a
r
a
t
e
u
r
s
 
d
e
 
d
Ã
©
t
a
i
l
s
 
d
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
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
N
o
u
s
 
r
e
g
r
e
t
t
o
n
s
,
 
m
a
i
s
 
c
e
t
t
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
n
\
'
e
s
t
 
p
a
s
 
c
o
u
r
a
m
m
e
n
t
 
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
'
)
;

j
r
_
d
e
f
i
n
e
(
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
R
e
v
o
i
r
 
t
i
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
Ã
©
m
i
s
 
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
I
l
 
n
\
'
 
y
 
a
 
p
a
s
 
d
e
 
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
 
e
n
c
o
r
e
 
p
o
u
r
 
c
e
t
t
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
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
A
i
m
e
r
i
e
z
-
v
o
u
s
 
Ã
ª
t
r
e
 
l
e
 
p
r
e
m
i
e
r
 
Ã
 
 
d
o
n
n
e
r
 
u
n
e
 
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
 
'
J
e
 
s
u
i
s
 
d
\
'
a
c
c
o
r
d
 
a
v
e
c
 
c
e
t
t
e
 
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
'
)
;

j
r
_
d
e
f
i
n
e
(
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
 
'
J
e
 
n
e
 
s
u
i
s
 
p
a
s
 
d
\
'
a
c
c
o
r
d
 
a
v
e
c
 
c
e
t
t
e
 
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
'
)
;

j
r
_
d
e
f
i
n
e
(
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
C
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
 
m
o
y
e
n
n
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
T
o
t
a
l
 
d
e
 
v
o
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
j
o
u
t
e
r
 
u
n
e
 
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
V
o
u
s
 
a
v
e
z
 
b
e
s
o
i
n
 
d
\
'
Ã
ª
t
r
e
 
e
n
 
l
o
g
i
n
 
p
o
u
r
 
d
o
n
n
e
r
 
u
n
e
 
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
 
'
D
i
t
e
s
-
n
o
u
s
 
c
e
 
q
u
e
 
v
o
u
s
 
p
e
n
s
e
z
 
d
e
 
c
e
t
 
Ã
©
t
a
b
l
i
s
s
e
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
C
e
t
 
h
Ã
´
t
e
 
n
o
u
s
 
a
 
d
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
F
a
v
e
u
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
S
o
u
m
i
s
 
l
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
u
s
 
a
v
e
z
 
d
Ã
©
j
Ã
 
 
c
l
a
s
s
Ã
©
 
c
e
t
 
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
,
 
d
o
n
c
 
v
o
u
s
 
n
e
 
p
o
u
v
e
z
 
p
a
s
 
l
e
 
f
a
i
r
e
 
d
e
 
n
o
u
v
e
a
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
N
o
u
s
 
r
e
g
r
e
t
t
o
n
s
,
 
m
a
i
s
 
v
o
u
s
 
n
\
'
Ã
ª
t
e
s
 
p
a
s
 
a
u
t
o
r
i
s
Ã
©
 
Ã
 
 
d
o
n
n
e
r
 
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
s
 
s
u
r
 
c
e
 
s
i
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
q
u
e
z
 
p
o
u
r
 
m
o
n
t
r
e
r
 
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
s
'
)
;

j
r
_
d
e
f
i
n
e
(
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
 
'
 
h
Ã
´
t
e
s
 
s
o
n
t
 
d
\
'
a
c
c
o
r
d
 
a
v
e
c
 
c
e
t
t
e
 
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
 
h
Ã
´
t
e
s
 
n
e
 
s
o
n
t
 
p
a
s
 
d
\
'
a
c
c
o
r
d
 
a
v
e
c
 
c
e
t
t
e
 
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
 
'
 
h
Ã
´
t
e
 
e
s
t
 
d
\
'
a
c
c
o
r
d
 
a
v
e
c
 
c
e
t
t
e
 
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
 
h
Ã
´
t
e
 
n
\
'
e
s
t
 
p
a
s
 
d
\
'
a
c
c
o
r
d
 
a
v
e
c
 
c
e
t
t
e
 
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
 
'
M
e
r
c
i
 
d
\
'
a
v
o
i
r
 
p
a
r
t
a
g
Ã
©
 
v
o
t
r
e
 
o
p
i
n
i
o
n
 
Ã
 
 
t
r
a
v
e
r
s
 
c
e
t
t
e
 
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
 
'
R
e
m
e
r
c
i
e
m
e
n
t
s
,
 
m
a
i
s
 
v
o
u
s
 
a
v
e
z
 
d
Ã
©
j
Ã
 
 
p
a
r
t
a
g
Ã
©
 
v
o
t
r
e
 
o
p
i
n
i
o
n
 
s
u
r
 
c
e
t
t
e
 
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
 
'
R
a
s
s
u
r
e
z
-
v
o
u
s
 
q
u
e
 
t
o
u
s
 
l
e
s
 
c
h
a
m
p
s
 
o
n
t
 
Ã
©
t
Ã
©
 
r
e
m
p
l
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
V
e
u
i
l
l
e
z
 
a
b
r
Ã
©
g
e
r
 
v
o
t
r
e
 
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
 
i
n
t
r
o
d
u
i
s
a
n
t
 
u
n
 
t
i
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
V
e
u
i
l
l
e
z
 
i
n
t
r
o
d
u
i
r
e
 
u
n
e
 
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
 
p
l
u
s
 
d
Ã
©
t
a
i
l
l
Ã
©
e
 
d
a
n
s
 
l
a
 
b
o
Ã
®
t
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
v
e
 
s
u
i
v
a
n
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
 
'
I
n
t
r
o
d
u
i
s
e
z
 
l
e
s
 
b
o
n
s
 
m
o
r
c
e
a
u
x
 
d
\
'
a
v
o
i
r
 
Ã
©
t
Ã
©
 
u
n
 
h
Ã
´
t
e
 
d
a
n
s
 
c
e
t
 
Ã
©
t
a
b
l
i
s
s
e
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
 
'
I
n
t
r
o
d
u
i
s
e
z
 
a
u
c
u
n
e
 
p
e
n
s
Ã
©
e
 
n
Ã
©
g
a
t
i
v
e
 
q
u
e
 
v
o
u
s
 
p
o
u
r
r
i
e
z
 
a
v
o
i
r
 
e
u
e
 
d
e
 
v
o
t
r
e
 
e
x
p
Ã
©
r
i
e
n
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
 
'
C
l
a
s
s
e
z
 
l
\
'
h
o
s
p
i
t
a
l
i
t
Ã
©
 
q
u
e
 
v
o
u
s
 
a
v
e
z
 
r
e
Ã
§
u
e
 
d
u
 
p
e
r
s
o
n
n
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
 
'
C
l
a
s
s
e
z
 
c
e
 
q
u
e
 
v
o
u
s
 
p
e
n
s
e
z
 
d
e
 
l
a
 
l
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
 
d
e
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
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
 
'
D
o
n
n
e
z
 
v
o
t
r
e
 
o
p
i
n
i
o
n
 
s
u
r
 
l
a
 
n
e
t
t
e
t
Ã
©
 
d
e
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
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
 
'
C
l
a
s
s
e
z
 
l
\
'
h
Ã
©
b
e
r
g
e
m
e
n
t
.
 
Ã
‰
t
a
i
t
-
i
l
 
c
o
n
f
o
r
t
a
b
l
e
 
o
u
 
s
e
u
l
e
m
e
n
t
 
p
a
s
s
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
D
o
n
n
e
z
 
v
o
t
r
e
 
o
p
i
n
i
o
n
 
s
\
'
i
l
 
a
 
j
u
s
t
i
f
i
Ã
©
 
l
\
'
a
r
g
e
n
t
 
d
Ã
©
p
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
C
l
a
s
s
e
z
 
l
e
s
 
s
e
r
v
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
S
o
m
m
a
i
r
e
 
d
e
 
l
a
 
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
'
)
;

j
r
_
d
e
f
i
n
e
(
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
V
o
t
r
e
 
e
x
p
Ã
©
r
i
e
n
c
e
 
p
l
u
s
 
d
Ã
©
t
a
i
l
l
Ã
©
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
M
e
r
c
i
 
d
e
 
n
o
u
s
 
a
v
o
i
r
 
l
i
v
r
Ã
©
 
v
o
t
r
e
 
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
M
e
r
c
i
 
d
e
 
n
o
u
s
 
a
v
o
i
r
 
d
o
n
n
Ã
©
 
v
o
t
r
e
 
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
.
 
E
l
l
e
 
s
e
r
a
 
p
u
b
l
i
Ã
©
e
 
b
i
e
n
t
Ã
´
t
 
p
a
r
 
u
n
 
d
e
 
n
o
s
 
m
o
d
Ã
©
r
a
t
e
u
r
s
 
e
n
 
s
e
r
v
i
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
s
e
r
 
c
o
d
e
 
d
e
 
m
o
n
n
a
i
e
 
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
D
Ã
©
f
i
n
i
s
s
e
z
 
N
o
n
 
p
o
u
r
 
f
o
r
c
e
r
 
t
o
u
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
r
i
Ã
©
t
Ã
©
s
 
Ã
 
 
u
t
i
l
i
s
e
r
 
l
e
 
m
Ã
ª
m
e
 
c
o
d
e
 
d
e
 
m
o
n
n
a
i
e
 
(
p
a
r
 
e
x
.
,
 
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
s
e
r
 
l
a
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
 
d
e
 
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
q
u
e
m
e
n
t
 
l
e
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
 
'
S
i
 
v
o
u
s
 
d
Ã
©
f
i
n
i
s
s
e
z
 
c
o
m
m
e
 
N
o
n
,
 
v
o
u
s
 
a
u
r
e
z
 
b
e
s
o
i
n
 
d
e
 
p
u
b
l
i
e
r
 
l
e
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
s
 
m
a
n
u
e
l
l
e
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
D
Ã
©
f
i
n
i
r
 
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
s
 
c
o
m
m
e
 
e
n
 
m
o
d
e
 
e
s
s
a
i
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
e
m
e
n
t
 
l
e
s
 
g
Ã
©
r
a
n
t
s
 
d
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
n
e
 
p
e
u
v
e
n
t
 
p
a
s
 
c
l
a
s
s
e
r
 
l
e
s
 
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
s
.
 
S
i
 
l
e
 
m
o
d
e
 
e
s
s
a
i
 
e
s
t
 
a
c
t
i
v
Ã
©
,
 
i
l
s
 
p
e
u
v
e
n
t
 
l
e
 
f
a
i
r
e
.
 
N
a
t
u
r
e
l
l
e
m
e
n
t
,
 
c
e
c
i
 
n
\
'
e
s
t
 
p
a
s
 
l
\
'
i
d
Ã
©
a
l
 
d
a
n
s
 
u
n
 
e
n
v
i
r
o
n
n
e
m
e
n
t
 
d
e
 
t
r
a
v
a
i
l
 
n
o
r
m
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
Ã
´
t
e
s
 
p
a
r
 
c
h
a
m
b
r
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
Ã
´
t
e
s
 
p
a
r
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
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
 
'
N
u
m
Ã
©
r
o
 
d
e
 
c
h
a
m
b
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
 
'
V
o
i
c
i
 
u
n
e
 
l
i
s
t
e
 
d
e
 
t
o
u
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
r
i
Ã
©
t
Ã
©
s
.
 
P
o
u
r
 
d
o
n
n
e
r
 
s
u
i
t
e
 
a
u
x
 
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
s
 
d
\
'
u
n
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
,
 
c
l
i
q
u
e
z
 
s
u
r
 
c
e
t
t
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
.
 
Ã
€
 
p
a
r
t
i
r
 
d
e
 
c
e
 
p
o
i
n
t
 
v
o
u
s
 
p
o
u
r
r
e
z
 
p
u
b
l
i
e
r
 
o
u
 
a
n
n
u
l
e
r
 
u
n
e
 
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
u
m
Ã
©
r
o
 
d
e
 
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
s
 
p
a
s
 
p
u
b
l
i
Ã
©
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
 
d
e
 
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
s
'
)
;

j
r
_
d
e
f
i
n
e
(
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
e
r
/
A
n
n
u
l
e
r
 
l
a
 
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
'
)
;

j
r
_
d
e
f
i
n
e
(
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
Ã
‰
l
i
m
i
n
e
r
 
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
'
)
;

j
r
_
d
e
f
i
n
e
(
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
D
Ã
©
f
Ã
©
r
e
r
 
l
a
 
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
'
)
;

j
r
_
d
e
f
i
n
e
(
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
o
i
r
 
d
Ã
©
f
e
r
r
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
I
n
t
r
o
d
u
i
s
e
z
 
v
o
t
r
e
 
d
Ã
©
f
e
r
r
e
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
 
'
V
o
y
e
z
-
v
o
u
s
 
d
a
n
s
 
c
e
t
t
e
 
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
s
 
q
u
e
l
q
u
e
 
c
h
o
s
e
 
o
b
j
e
c
t
i
v
e
 
o
u
 
i
n
e
x
a
c
t
e
?
 
D
Ã
©
f
Ã
©
r
e
z
-
l
a
 
e
t
 
n
o
u
s
 
n
o
u
s
 
e
n
 
o
c
c
u
p
e
r
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
S
o
u
m
e
t
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
D
Ã
©
f
e
r
r
e
m
e
n
t
 
c
r
Ã
©
e
 
p
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
D
Ã
©
f
e
r
r
e
m
e
n
t
s
 
s
o
n
t
 
Ã
©
m
i
s
 
p
a
r
 
d
e
s
 
u
t
i
l
i
s
a
t
e
u
r
s
 
q
u
i
 
p
e
u
v
e
n
t
 
n
e
 
p
a
s
 
Ã
ª
t
r
e
 
d
\
'
a
c
c
o
r
d
 
a
v
e
c
 
l
e
 
c
o
n
t
e
n
u
 
d
\
'
u
n
e
 
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
.
 
L
a
 
s
e
u
l
e
 
f
a
Ã
§
o
n
 
d
\
'
Ã
©
l
i
m
i
n
e
r
 
u
n
 
d
Ã
©
f
e
r
r
e
m
e
n
t
 
e
s
t
 
Ã
©
l
i
m
i
n
e
r
 
l
a
 
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
A
T
I
N
G
'
,
 
'
P
o
i
n
t
s
 
(
1
 
=
 
p
a
u
v
r
e
 
1
0
 
=
 
e
x
c
e
l
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
Ã
©
 
 
'
)
;

j
r
_
d
e
f
i
n
e
(
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
s
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
t
e
t
Ã
©
 
'
)
;

j
r
_
d
e
f
i
n
e
(
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
Ã
‰
b
e
r
g
e
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
I
l
 
v
a
u
t
 
l
a
 
p
e
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
l
a
s
s
Ã
©
 
p
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
C
a
c
h
e
r
 
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
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
A
f
f
i
c
h
e
r
 
l
e
 
f
o
r
m
u
l
a
i
r
e
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
d
a
n
s
 
l
a
 
p
a
g
e
 
d
e
 
d
Ã
©
t
a
i
l
s
 
d
e
 
l
\
'
Ã
©
t
a
b
l
i
s
s
e
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
 
'
D
Ã
©
f
i
n
i
s
s
e
z
 
O
u
i
 
p
o
u
r
 
m
o
n
t
r
e
r
 
l
e
 
f
o
r
m
u
l
a
i
r
e
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
d
a
n
s
 
l
a
 
p
a
g
e
 
d
e
 
d
Ã
©
t
a
i
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
r
i
Ã
©
t
Ã
©
.
 
S
i
 
v
o
u
s
 
m
a
r
q
u
e
z
 
N
o
n
,
 
u
n
 
l
i
e
n
 
s
e
r
a
 
v
i
s
i
b
l
e
 
d
a
s
 
c
e
t
t
e
 
p
a
g
e
 
m
e
n
a
n
t
 
v
e
r
s
 
l
e
 
f
o
r
m
u
l
a
i
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
L
e
s
 
p
r
i
x
 
c
o
m
p
r
e
n
n
e
n
t
 
l
e
 
t
a
u
x
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
L
e
s
 
p
r
i
x
 
l
e
 
c
o
m
p
r
e
n
n
e
n
t
?
 
S
i
 
v
o
s
 
p
r
i
x
 
f
o
n
t
 
i
n
c
l
u
s
i
o
n
 
d
u
 
t
a
u
x
,
 
s
Ã
©
l
e
c
t
i
o
n
n
e
z
 
O
u
i
,
 
a
u
t
r
e
m
e
n
t
 
N
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
T
a
u
x
 
s
u
r
 
e
x
t
r
a
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
 
'
L
e
 
c
h
a
m
p
 
j
o
u
r
 
d
e
 
l
a
 
s
e
m
a
i
n
e
 
v
o
u
s
 
p
e
r
m
e
t
 
d
e
 
d
Ã
©
f
i
n
i
r
 
u
n
e
 
d
a
t
e
 
p
o
u
r
 
u
n
 
j
o
u
r
 
d
e
 
s
e
m
a
i
n
e
 
p
r
Ã
©
c
i
s
,
 
q
u
a
n
d
 
v
o
u
s
 
c
l
i
q
u
e
z
 
s
u
r
 
l
e
 
b
o
u
t
o
n
 
j
o
u
r
 
d
e
 
l
a
 
s
e
m
a
i
n
e
 
t
o
u
s
 
l
e
s
 
j
o
u
r
s
 
d
e
 
l
a
 
s
e
m
a
i
n
e
 
s
e
r
o
n
t
 
a
s
s
o
c
i
Ã
©
s
 
Ã
 
 
c
e
 
t
a
u
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
 
'
L
e
s
 
s
Ã
©
l
e
c
t
e
u
r
s
 
d
e
 
d
a
t
e
 
e
t
 
l
\
'
i
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
 
d
u
 
t
a
u
x
 
v
o
u
s
 
p
e
r
m
e
t
t
e
n
t
 
d
e
 
d
Ã
©
f
i
n
i
r
 
u
n
 
p
r
i
x
 
p
o
u
r
 
u
n
e
 
s
Ã
©
q
u
e
n
c
e
 
d
e
 
d
a
t
e
s
 
p
r
Ã
©
c
i
s
e
.
 
C
h
o
i
s
i
s
s
e
z
 
u
n
e
 
d
a
t
e
 
d
e
 
d
Ã
©
b
u
t
 
e
t
 
d
e
 
f
i
n
,
 
i
n
t
r
o
d
u
i
s
e
z
 
u
n
 
p
r
i
x
,
 
e
t
 
a
p
p
u
y
e
z
 
s
u
r
 
l
e
 
b
o
u
t
o
n
 
D
Ã
©
f
i
n
i
r
 
T
a
u
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
D
a
t
e
 
d
e
 
d
Ã
©
b
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
D
a
t
e
 
d
e
 
f
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
u
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
D
Ã
©
f
i
n
i
r
 
t
a
u
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
P
a
r
t
e
n
a
i
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
u
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
C
h
a
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
Ã
´
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
 
'
V
o
i
c
i
 
c
o
m
m
e
n
t
 
n
o
u
s
 
a
v
o
n
s
 
a
s
s
o
c
i
Ã
©
 
v
o
s
 
h
Ã
´
t
e
s
 
a
u
x
 
c
h
a
m
b
r
e
s
.
 
S
i
 
v
o
u
s
 
a
i
m
e
r
i
e
z
 
c
h
a
n
g
e
r
 
c
e
t
t
e
 
a
s
s
o
c
i
a
t
i
o
n
,
 
v
o
u
s
 
d
e
v
r
e
z
 
c
o
n
t
a
c
t
e
r
 
l
&
#
3
9
;
h
Ã
´
t
e
l
 
a
p
r
Ã
¨
s
 
a
v
o
i
r
 
c
o
m
p
l
Ã
©
t
Ã
©
 
l
a
 
r
Ã
©
s
e
r
v
a
t
i
o
n
.
 
C
e
c
i
 
p
e
u
t
 
e
n
t
r
a
Ã
®
n
e
r
 
d
e
s
 
f
r
a
i
s
 
e
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
 
'
R
e
m
a
r
q
u
e
z
 
q
u
e
 
v
o
t
r
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
n
\
'
e
s
t
 
p
a
s
 
p
u
b
l
i
Ã
©
e
 
e
n
c
o
r
e
;
 
s
e
u
l
e
m
e
n
t
 
v
o
u
s
 
p
o
u
v
e
z
 
l
a
 
v
o
i
r
,
 
p
a
s
 
l
e
s
 
v
i
s
i
t
e
u
r
s
 
d
u
 
s
i
t
e
'
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
 
p
a
r
 
d
Ã
©
f
a
u
t
 
d
e
 
r
Ã
©
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
 
r
e
c
h
e
r
c
h
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
 
'
C
h
a
n
g
e
z
 
c
e
t
t
e
 
o
p
t
i
o
n
 
p
o
u
r
 
m
o
d
i
f
i
e
r
 
l
\
'
o
r
d
r
e
 
a
p
r
Ã
¨
s
 
l
a
q
u
e
l
l
e
 
l
e
s
 
r
Ã
©
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
 
r
e
c
h
e
r
c
h
e
 
s
e
r
o
n
t
 
p
r
Ã
©
s
e
n
t
Ã
©
s
 
p
a
r
 
d
Ã
©
f
a
u
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
n
t
r
e
r
 
<
i
>
d
r
o
p
d
o
w
n
<
/
i
>
 
d
\
'
o
r
d
r
e
 
d
e
 
r
Ã
©
s
u
l
t
a
t
s
 
d
e
 
r
e
c
h
e
r
c
h
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
T
y
p
e
 
d
e
 
l
i
s
t
e
 
d
e
s
 
c
h
a
m
b
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
 
'
D
a
n
s
 
l
e
 
f
o
r
m
u
l
a
i
r
e
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
,
 
u
t
i
l
i
s
a
n
t
 
l
e
 
t
y
p
e
 
d
e
 
l
i
s
t
e
 
d
e
 
c
h
a
m
b
r
e
 
\
"
c
l
a
s
s
i
q
u
e
\
"
 
v
o
u
s
 
o
f
f
r
e
z
 
a
u
x
 
h
Ã
´
t
e
s
 
c
h
a
m
b
r
e
s
 
i
n
d
i
v
i
d
u
e
l
l
e
s
.
 
A
v
e
c
 
l
a
 
v
u
e
 
p
a
r
 
t
y
p
e
 
d
e
 
c
h
a
m
b
r
e
,
 
l
e
s
 
h
Ã
´
t
e
s
 
c
h
o
i
s
i
s
s
e
n
t
 
l
e
 
n
u
m
Ã
©
r
o
 
d
e
 
c
h
a
m
b
r
e
s
 
d
u
 
t
y
p
e
 
X
 
(
p
a
r
 
Ã
©
x
.
,
 
2
 
x
 
d
o
u
b
l
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
a
s
s
i
q
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
y
p
e
s
 
d
e
 
c
h
a
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
O
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
Q
u
e
l
 
j
o
u
r
 
d
e
 
c
a
l
e
n
d
r
i
e
r
 
p
o
u
r
 
c
o
m
m
e
n
c
e
r
 
l
a
 
s
e
m
a
i
n
e
,
 
D
i
m
a
n
c
h
e
 
o
u
 
L
u
n
d
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
 
'
S
e
u
l
e
m
e
n
t
 
l
e
s
 
h
Ã
´
t
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
r
i
Ã
©
t
Ã
©
 
p
e
u
v
e
n
t
 
d
o
n
n
e
r
 
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
D
Ã
©
f
i
n
i
s
s
e
z
 
O
u
i
 
s
i
 
v
o
u
s
 
v
o
u
l
e
z
 
l
i
m
i
t
e
r
 
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
s
 
s
e
u
l
e
m
e
n
t
 
a
u
x
 
u
t
i
l
i
s
a
t
e
u
r
s
 
q
u
i
 
o
n
t
 
Ã
©
t
Ã
©
 
h
Ã
´
t
e
s
 
d
a
n
s
 
l
a
 
p
r
o
p
r
i
Ã
©
t
Ã
©
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
a
r
 
c
h
a
m
b
r
e
'
)
;

/
/
 
v
 
4
.
5
.
7
 
-
 
a
d
i
c
i
o
n
a
d
o
?

j
r
_
d
e
f
i
n
e
(
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
Ã
´
t
e
s
 
p
a
r
 
c
h
a
m
b
r
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
Ã
´
t
e
s
 
p
a
r
 
r
Ã
©
s
e
r
v
a
t
i
o
n
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
 
'
N
o
m
b
r
e
 
d
e
 
c
h
a
m
b
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
j
a
n
v
i
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
f
Ã
©
v
r
i
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
m
a
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
a
v
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
m
a
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
j
u
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
j
u
i
l
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
a
o
Ã
»
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
s
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
o
c
t
o
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
n
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
d
Ã
©
c
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
 
'
D
Ã
©
f
i
n
i
s
s
e
z
 
O
u
i
 
p
o
u
r
 
r
Ã
©
d
u
i
r
e
 
l
e
 
n
o
m
b
r
e
 
d
\
'
o
p
t
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
 
a
u
x
 
g
Ã
©
r
a
n
t
s
 
d
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
d
a
n
s
 
l
a
 
s
e
c
t
i
o
n
 
d
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
 
G
Ã
©
n
Ã
©
r
a
l
e
.
 
C
e
c
i
 
e
s
t
 
u
t
i
l
e
 
s
i
 
v
o
u
s
 
n
e
 
v
o
u
l
e
z
 
p
a
s
 
q
u
e
 
l
e
s
 
g
Ã
©
r
a
n
t
s
 
d
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
v
o
i
e
n
t
 
t
r
o
p
 
d
e
 
d
Ã
©
f
i
n
i
t
i
o
n
s
,
 
a
u
 
l
i
e
u
 
d
e
 
Ã
§
a
 
v
o
u
s
 
p
o
u
r
r
e
z
 
Ã
©
d
i
t
e
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
o
u
r
 
d
Ã
©
f
i
n
i
r
 
d
e
s
 
o
p
t
i
o
n
s
 
d
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
p
a
r
 
d
Ã
©
f
a
u
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
V
e
u
i
l
l
e
z
 
s
Ã
©
l
e
c
t
i
o
n
n
e
r
 
u
n
e
 
o
p
t
i
o
n
 
p
o
u
r
 
v
o
t
r
e
 
r
Ã
©
s
e
r
v
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
 
'
V
u
e
 
d
e
 
g
Ã
©
r
a
n
c
e
 
d
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
u
e
 
d
e
 
p
r
Ã
©
v
i
s
i
o
n
 
d
u
 
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
R
a
b
a
i
s
 
d
e
 
p
a
r
t
e
n
a
i
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
R
e
c
h
e
r
c
h
e
r
 
u
t
i
l
i
s
a
t
e
u
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
 
'
I
n
t
r
o
d
u
i
s
e
z
 
q
u
e
l
q
u
e
s
 
l
e
t
t
r
e
s
 
p
o
u
r
 
r
e
c
h
e
r
c
h
e
r
 
u
n
 
u
t
i
l
i
s
a
t
e
u
r
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
 
v
o
u
s
 
s
Ã
©
l
e
c
t
i
o
n
n
e
z
 
u
n
 
u
t
i
l
i
s
a
t
e
u
r
 
v
o
u
s
 
l
\
'
a
j
o
u
t
e
r
e
z
 
a
u
t
o
m
a
t
i
q
u
e
m
e
n
t
 
c
o
m
m
e
 
P
a
r
t
e
n
a
i
r
e
 
e
t
 
v
o
u
s
 
s
e
r
e
z
 
e
m
m
e
n
Ã
©
 
Ã
 
 
l
a
 
p
a
g
e
 
s
u
i
v
a
n
t
e
,
 
o
Ã
¹
 
v
o
u
s
 
p
o
u
r
r
e
z
 
l
u
i
 
a
s
s
i
g
n
e
r
 
p
r
o
p
r
i
Ã
©
t
Ã
©
s
 
e
t
 
r
a
b
a
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
P
a
r
t
e
n
a
i
r
e
s
 
c
o
u
r
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
 
'
C
h
o
i
s
i
s
s
e
z
 
u
n
 
p
a
r
t
e
n
a
i
r
e
 
p
o
u
r
 
Ã
ª
t
r
e
 
e
m
m
e
n
Ã
©
 
Ã
 
 
l
a
 
p
a
g
e
 
d
\
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
t
i
o
n
 
d
e
 
p
a
r
t
e
n
a
i
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
P
a
r
t
e
n
a
i
r
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
R
e
c
h
e
r
c
h
e
r
 
u
n
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
 
'
I
n
t
r
o
d
u
i
s
e
z
 
q
u
e
l
q
u
e
s
 
l
e
t
t
r
e
s
 
d
u
 
n
o
m
 
d
e
 
l
a
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
e
t
 
s
Ã
©
l
e
c
t
i
o
n
n
e
z
 
u
n
e
.
<
b
r
/
>
 
A
p
r
Ã
¨
s
 
l
\
'
a
v
o
i
r
 
s
Ã
©
l
e
c
t
i
o
n
n
Ã
©
e
 
v
o
u
s
 
l
\
'
a
j
o
u
t
e
r
e
z
 
a
u
 
p
o
r
t
e
f
e
u
i
l
l
e
 
d
u
 
p
a
r
t
e
n
a
i
r
e
,
 
m
a
i
s
 
i
l
 
n
\
'
a
u
r
a
 
p
a
s
 
e
n
c
o
r
e
 
a
u
c
u
n
 
r
a
b
a
i
s
,
 
v
o
u
s
 
d
e
v
r
e
z
 
l
e
 
d
Ã
©
f
i
n
i
r
 
v
o
u
s
-
m
Ã
ª
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
r
i
Ã
©
t
Ã
©
s
 
c
o
u
r
a
n
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
 
'
C
l
i
q
u
e
z
 
s
u
r
 
u
n
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
p
o
u
r
 
Ã
©
d
i
t
e
r
 
l
e
s
 
d
Ã
©
f
i
n
i
t
i
o
n
s
 
d
e
 
r
a
b
a
i
s
 
p
o
u
r
 
l
e
 
p
a
r
t
e
n
a
i
r
e
 
c
o
n
c
e
r
n
a
n
t
 
c
e
t
t
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
.
'
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
C
e
 
c
o
m
p
t
e
 
a
 
Ã
©
t
Ã
©
 
s
u
s
p
e
n
d
u
,
 
v
o
u
s
 
n
e
 
p
o
u
v
e
z
 
p
l
u
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
e
r
 
v
o
t
r
e
 
(
v
o
s
)
 
p
r
o
p
r
i
Ã
©
t
Ã
©
(
s
)
 
p
a
r
 
c
e
 
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
 
'
C
o
m
p
t
e
 
d
e
 
g
Ã
©
r
a
n
t
 
s
u
s
p
e
n
d
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
 
'
C
o
m
p
t
e
 
d
e
 
g
Ã
©
r
a
n
t
 
r
Ã
©
a
c
t
i
v
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
 
'
V
e
u
i
l
l
e
z
 
r
e
m
a
r
q
u
e
r
 
q
u
e
 
v
o
t
r
e
 
c
o
m
p
t
e
 
d
e
 
g
Ã
©
r
a
n
t
 
d
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
a
 
Ã
©
t
Ã
©
 
s
u
s
p
e
n
d
u
.
 
V
o
u
s
 
n
e
 
p
o
u
r
r
e
z
 
p
a
s
 
a
c
c
o
m
p
l
i
r
 
a
u
c
u
n
e
 
t
Ã
¢
c
h
e
 
d
e
 
g
Ã
©
r
e
n
c
e
 
j
u
s
u
q
u
\
'
Ã
 
 
c
e
 
q
u
e
 
l
e
 
c
o
m
p
t
e
 
a
u
r
a
 
Ã
©
t
Ã
©
 
r
Ã
©
t
a
b
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
 
'
V
e
u
i
l
l
e
z
 
r
e
m
a
r
q
u
e
r
 
q
u
e
 
v
o
t
r
e
 
c
o
m
p
t
e
 
d
e
 
g
Ã
©
r
a
n
t
 
d
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
e
s
t
 
m
a
i
n
t
e
n
a
n
t
 
a
c
t
i
f
.
 
V
o
u
s
 
p
o
u
r
r
e
z
 
c
o
n
t
i
n
u
e
r
 
Ã
 
 
a
c
c
o
m
p
l
i
r
 
d
e
s
 
f
o
n
c
t
i
o
n
s
 
d
e
 
g
Ã
©
r
e
n
c
e
.
 
V
e
u
i
l
l
e
z
 
v
o
u
s
 
l
o
g
g
e
r
 
d
a
n
s
 
v
o
t
r
e
 
c
o
m
p
t
e
 
e
t
 
v
Ã
©
r
i
f
i
e
r
 
s
i
 
v
o
t
r
e
(
v
o
s
)
 
p
r
o
p
r
i
Ã
©
t
Ã
©
(
s
)
 
o
n
t
 
Ã
©
t
Ã
©
 
p
u
b
l
i
Ã
©
e
s
.
 
M
e
r
c
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
n
l
e
v
e
r
 
f
a
v
o
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
c
h
i
v
e
 
d
e
 
d
o
n
n
Ã
©
e
s
 
d
e
 
r
Ã
©
s
e
r
v
a
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
 
'
C
e
t
 
a
r
c
h
i
v
e
 
e
s
t
 
l
e
 
r
Ã
©
s
u
l
t
a
t
 
b
r
u
t
 
d
\
'
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
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
 
c
a
p
t
u
r
t
Ã
©
e
 
a
p
r
Ã
¨
s
 
q
u
e
 
l
e
 
b
o
u
t
o
n
 
c
o
n
f
i
r
m
e
r
 
r
Â
´
s
e
r
v
e
 
a
 
Ã
©
t
Ã
©
 
a
c
t
i
o
n
n
Ã
©
.
 
D
Ã
©
t
e
n
e
z
 
l
a
 
s
o
u
r
i
s
 
s
u
r
e
 
u
n
e
 
d
a
t
e
 
p
o
u
r
 
v
o
i
r
 
l
e
s
 
d
o
n
n
Ã
©
e
s
.
 
C
e
t
t
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
 
e
s
t
 
g
a
r
d
Ã
©
e
 
d
a
n
s
 
l
a
 
t
a
b
l
e
 
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
'
)
;

j
r
_
d
e
f
i
n
e
(
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
Ã
‰
d
i
t
e
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
 
'
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
'
)
;

j
r
_
d
e
f
i
n
e
(
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
G
Ã
©
r
a
n
t
s
 
e
x
i
s
t
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
O
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
 
'
R
e
c
h
e
r
c
h
e
 
p
a
r
 
n
o
m
b
r
e
 
d
\
'
h
Ã
´
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
 
'
M
o
n
t
r
e
r
 
l
a
 
r
e
c
h
e
r
c
h
e
 
p
a
r
 
<
i
>
d
r
o
p
d
o
w
n
<
/
i
>
 
d
e
 
n
o
m
b
r
e
 
d
\
'
h
Ã
´
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
 
'
R
e
c
h
e
r
c
h
e
 
p
a
r
 
Ã
©
t
o
i
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
 
'
M
o
n
t
r
e
r
 
l
a
 
r
e
c
h
e
r
c
h
e
 
p
a
r
 
<
i
>
d
r
o
p
d
o
w
n
<
/
i
>
 
d
\
'
Ã
©
t
o
i
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
 
'
N
o
m
b
r
e
 
d
\
'
h
Ã
´
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
 
'
N
o
m
b
r
e
 
d
\
'
Ã
©
t
o
i
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
o
m
b
r
e
 
d
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
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
h
a
r
g
e
r
 
b
i
b
l
i
o
t
h
Ã
¨
q
u
e
 
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
V
o
u
s
 
p
o
u
v
e
z
 
c
h
o
i
s
i
r
 
N
o
n
 
s
i
 
v
o
u
s
 
a
v
e
z
 
u
n
 
t
h
Ã
¨
m
e
 
q
u
i
 
u
t
i
l
i
s
e
 
j
q
u
e
r
y
.
 
C
e
c
i
 
P
E
U
T
 
r
Ã
©
s
o
u
d
r
e
 
q
u
e
l
q
u
e
s
 
p
r
o
b
l
Ã
¨
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
t
s
 
j
q
u
e
r
y
 
d
a
n
s
 
q
u
e
l
q
u
e
s
 
t
h
Ã
¨
m
e
s
,
 
m
a
i
s
 
p
a
s
 
d
a
n
s
 
t
o
u
s
 
l
e
s
 
c
a
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
 
'
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
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
 
i
m
a
g
e
s
 
d
e
 
r
Ã
©
f
Ã
©
r
e
n
c
e
 
s
o
n
t
 
a
u
t
o
m
a
t
i
q
u
e
m
e
n
t
 
c
r
Ã
©
e
s
 
p
o
u
r
 
t
o
u
t
e
s
 
l
e
s
 
i
m
a
g
e
s
 
c
h
a
r
g
Ã
©
e
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
L
a
r
g
e
u
r
 
m
a
x
.
 
d
\
'
i
m
a
g
e
 
d
e
 
r
Ã
©
f
Ã
©
r
e
n
c
e
 
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
 
'
I
m
a
g
e
s
 
d
e
 
r
Ã
©
f
Ã
©
r
e
n
c
e
 
p
e
t
i
t
t
e
s
 
s
o
n
t
 
u
t
i
l
i
s
Ã
©
e
s
 
d
a
n
s
 
l
a
 
l
i
s
t
e
 
d
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
s
,
 
t
a
n
d
i
s
 
q
u
e
 
c
e
l
l
e
s
 
d
e
 
t
a
i
l
l
e
 
m
o
y
e
n
n
e
 
s
o
n
t
 
u
t
i
l
i
s
Ã
©
e
s
 
d
a
n
s
 
l
\
'
e
n
-
t
Ã
ª
t
e
 
d
e
 
c
h
a
q
u
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
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
H
E
I
G
H
T
'
,
 
'
H
a
u
t
e
u
r
 
m
a
x
.
 
d
\
'
i
m
a
g
e
s
 
d
e
 
r
Ã
©
f
Ã
©
r
e
n
c
e
 
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
L
a
r
g
e
u
r
 
m
a
x
.
 
d
\
'
i
m
a
g
e
s
 
d
e
 
r
Ã
©
f
Ã
©
r
e
n
c
e
 
m
o
y
e
n
n
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
H
a
u
t
e
u
r
 
m
a
x
.
 
d
\
'
i
m
a
g
e
s
 
d
e
 
r
Ã
©
f
Ã
©
r
e
n
c
e
 
m
o
y
e
n
n
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
t
i
o
n
 
d
\
'
Ã
‰
t
i
q
u
e
t
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
s
e
r
 
l
a
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
 
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
 
'
C
h
o
i
s
i
s
s
e
z
 
O
u
i
 
p
o
u
r
 
m
o
n
t
r
e
r
 
a
u
 
g
Ã
©
r
a
n
t
 
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
s
 
Ã
©
m
i
s
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
R
Ã
©
s
e
r
v
a
t
i
o
n
s
 
d
e
 
g
Ã
©
r
a
n
t
 
o
r
i
g
i
n
e
n
t
 
d
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
 
g
Ã
©
r
a
n
t
 
f
a
i
t
 
u
n
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
,
 
c
e
c
i
 
o
r
i
g
i
n
e
 
u
n
 
a
r
t
i
c
l
e
 
d
e
 
l
i
g
n
e
 
s
u
r
 
u
n
e
 
f
a
c
t
u
r
e
 
d
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
'
,
 
'
A
u
t
o
-
s
u
s
p
e
n
d
r
e
 
g
Ã
©
r
a
n
t
s
 
q
u
i
 
o
n
t
 
d
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
 
m
a
r
q
u
Ã
©
e
s
 
c
o
m
m
e
 
p
e
n
d
a
n
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
L
i
m
i
t
e
 
d
\
'
a
u
t
o
-
s
u
s
p
e
n
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
C
e
 
l
i
m
i
t
e
 
e
s
t
 
l
e
 
n
u
m
Ã
©
r
o
 
d
e
 
j
o
u
r
s
 
q
u
\
'
u
n
 
g
Ã
©
r
a
n
t
 
a
 
p
o
u
r
 
p
a
i
e
r
 
u
n
e
 
f
a
c
t
u
r
e
 
a
v
a
n
t
 
q
u
\
'
i
l
 
s
o
i
t
 
s
u
s
p
e
n
d
u
 
e
t
 
s
e
s
 
p
r
o
p
r
i
Ã
©
t
Ã
©
s
 
c
e
s
s
e
n
t
 
d
\
'
Ã
ª
t
r
e
 
p
u
b
l
i
Ã
©
e
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
C
o
n
t
e
x
t
e
 
l
a
n
g
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
 
'
U
t
i
l
i
s
e
z
 
c
e
t
t
e
 
o
p
t
i
o
n
 
p
o
u
r
 
m
o
d
i
f
i
e
r
 
l
e
 
c
o
n
t
e
x
t
e
 
d
e
 
l
a
n
g
a
g
e
 
d
u
 
s
i
t
e
.
 
C
e
c
i
 
p
e
r
m
e
t
 
Ã
 
 
J
o
m
r
e
s
 
d
\
'
u
t
i
l
i
s
e
r
 
Ã
©
t
i
q
u
e
t
t
e
s
 
p
l
u
s
 
c
o
n
v
e
n
a
b
l
e
s
 
p
o
u
r
 
v
o
t
r
e
 
e
n
c
a
d
r
e
m
e
n
t
 
c
o
u
r
a
n
t
,
 
d
o
n
c
 
s
i
 
c
e
t
 
e
n
q
u
a
d
r
e
m
e
n
t
 
e
s
t
 
l
o
c
a
t
i
o
n
 
d
e
 
y
a
c
h
t
s
,
 
c
h
a
n
g
e
r
 
l
e
 
c
o
n
t
e
x
t
e
 
p
e
r
m
e
t
 
Ã
 
 
J
o
m
r
e
s
 
d
e
 
m
o
n
t
r
e
r
 
d
e
s
 
Ã
©
t
i
q
u
e
t
t
e
s
 
d
\
'
u
n
 
f
i
c
i
h
i
e
r
 
d
e
 
l
a
n
g
u
e
 
d
i
f
f
Ã
©
r
e
n
t
.
 
P
a
r
 
Ã
©
x
e
m
p
l
e
,
 
s
i
 
v
o
u
s
 
c
h
o
i
s
i
s
s
e
z
 
d
Ã
©
f
i
n
i
r
 
l
e
 
c
o
n
t
e
x
t
e
 
c
o
m
m
e
 
"
Y
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
"
,
 
J
o
m
r
e
s
 
c
h
e
r
c
h
e
 
p
r
e
m
i
Ã
¨
r
e
m
e
n
t
 
l
a
 
l
a
n
g
u
e
 
c
o
u
r
a
n
t
e
,
 
a
p
r
Ã
¨
s
 
r
e
c
h
e
r
c
h
e
 
l
e
 
d
i
r
e
c
t
o
i
r
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
r
 
u
n
 
d
i
r
e
c
t
o
i
r
e
 
a
p
p
e
l
Ã
©
 
"
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
"
.
 
S
i
 
c
e
 
f
i
c
h
i
e
r
 
e
x
i
s
t
e
 
p
o
u
r
 
l
a
 
l
a
n
g
u
e
 
e
n
 
c
o
u
r
s
,
 
c
e
 
f
i
c
h
i
e
r
 
s
e
r
a
 
u
t
i
l
i
s
Ã
©
.
 
S
i
n
o
n
,
 
J
o
m
r
e
s
 
c
h
e
r
c
h
e
 
l
e
 
f
i
c
h
i
e
r
 
d
e
 
l
a
n
g
u
e
 
a
n
g
l
a
i
s
e
 
s
u
r
 
c
e
 
d
i
r
e
c
t
o
i
r
e
.
 
S
\
'
i
l
 
n
e
 
p
e
u
t
 
p
a
s
 
Ã
ª
t
r
e
 
t
r
o
u
v
Ã
©
,
 
J
o
m
r
s
 
u
t
i
l
i
s
e
r
a
 
l
e
 
f
i
c
h
i
e
r
 
d
e
 
l
a
n
g
u
e
 
p
o
u
r
 
l
a
 
l
a
n
g
u
e
 
c
h
o
i
s
i
e
 
d
a
n
s
 
l
e
 
d
i
r
e
c
t
o
i
r
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
'
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
t
i
o
n
 
a
v
a
n
c
Ã
©
e
 
d
u
 
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
 
'
C
h
o
i
s
i
s
s
e
z
 
O
u
i
 
s
i
 
v
o
u
s
 
v
o
u
l
e
z
 
u
t
i
l
i
s
e
r
 
l
e
s
 
o
p
t
i
o
n
s
 
a
v
a
n
c
Ã
©
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
t
i
o
n
.
 
S
i
 
v
o
u
s
 
v
e
n
e
z
 
d
e
 
c
o
m
m
e
n
c
e
r
 
J
o
m
r
e
s
,
 
v
o
u
s
 
Ã
ª
t
e
s
 
c
o
n
s
e
i
l
l
Ã
©
(
e
)
 
Ã
 
 
l
a
i
s
s
e
r
 
l
\
'
o
p
t
i
o
n
 
N
o
n
,
 
c
a
r
 
l
\
'
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
 
p
a
r
 
d
Ã
©
f
a
u
t
 
e
s
t
 
s
u
f
f
i
s
a
n
t
e
 
p
o
u
r
 
v
o
u
s
 
p
e
r
m
e
t
t
r
e
 
d
e
 
c
o
m
m
e
n
c
e
r
,
 
d
o
n
c
 
i
l
 
s
u
f
f
i
r
a
i
t
 
d
\
'
a
j
o
u
t
e
r
 
J
o
m
r
e
s
 
a
u
 
m
e
n
u
 
p
r
i
n
c
i
p
a
l
 
e
t
 
v
o
u
s
 
l
o
g
g
e
r
 
c
o
m
m
e
 
"
a
d
m
i
n
"
,
 
e
n
 
c
o
m
m
e
n
c
a
n
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
e
r
 
v
o
t
r
e
 
(
v
o
s
)
 
p
r
o
p
r
i
Ã
©
t
Ã
©
(
s
)
.
 
V
e
u
i
l
l
e
z
 
r
e
m
a
r
q
u
e
r
 
q
u
e
 
p
l
u
s
i
e
u
r
s
 
o
p
t
i
o
n
s
 
d
e
 
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
t
i
o
n
 
a
v
a
n
c
Ã
©
e
 
s
o
n
m
t
 
a
p
p
l
i
c
a
b
l
e
s
 
s
e
u
l
e
m
e
n
t
 
Ã
 
 
l
\
'
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
t
 
l
e
s
 
u
t
i
l
i
s
a
t
e
u
r
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
e
 
p
o
u
r
r
o
n
t
 
p
r
e
n
d
r
e
 
c
o
m
p
l
Ã
¨
t
e
m
e
n
t
 
a
v
a
n
t
a
g
e
 
d
\
'
u
n
e
 
q
u
a
n
t
i
t
Ã
©
 
d
e
 
c
h
a
r
a
c
t
Ã
©
r
i
s
t
i
q
u
e
s
 
q
u
e
 
l
\
'
o
p
t
i
o
n
 
p
e
r
m
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
h
a
r
g
e
r
 
b
i
b
l
i
o
t
h
Ã
¨
q
u
e
 
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
i
x
 
(
l
e
 
p
l
u
s
 
h
a
u
t
 
d
\
'
a
b
b
o
r
d
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
i
x
 
(
l
e
 
p
l
u
s
 
b
a
s
 
d
\
'
a
b
b
o
r
d
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
L
e
 
s
o
m
m
a
i
r
e
 
d
e
s
 
p
r
i
x
 
e
t
 
e
s
t
i
m
a
t
i
o
n
s
 
d
o
i
v
e
n
t
 
Ã
ª
t
r
e
 
Ã
©
v
a
l
u
Ã
©
s
 
p
a
r
 
n
u
i
t
/
p
a
r
 
s
e
m
a
i
n
e
/
p
a
r
 
m
o
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
a
r
 
n
u
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
a
r
 
s
e
m
a
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
a
r
 
m
o
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
a
r
 
p
e
r
s
o
n
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
m
a
i
n
e
(
s
)
 
Ã
 
 
'
)
;

j
r
_
d
e
f
i
n
e
(
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
o
i
s
 
Ã
 
 
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
 
'
C
o
m
m
e
w
n
t
 
d
o
i
t
 
f
o
n
c
t
i
o
n
n
e
r
 
l
\
'
o
p
t
i
o
n
 
d
e
 
r
e
c
h
e
r
c
h
e
 
p
a
r
 
n
u
m
Ã
©
r
o
 
d
\
'
h
Ã
´
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
f
e
c
t
e
 
t
o
u
s
 
l
e
s
 
m
o
d
u
l
e
s
 
d
e
 
r
e
c
h
e
r
c
h
e
.
 
E
n
 
u
t
i
l
i
s
a
n
t
 
l
a
 
c
h
a
r
a
c
t
Ã
©
r
i
s
t
i
q
u
e
 
d
e
 
r
e
c
h
e
r
c
h
e
 
p
a
r
 
n
o
m
b
r
e
,
 
d
o
i
t
 
c
e
t
t
e
 
c
h
a
r
a
c
t
Ã
©
r
i
s
t
i
q
u
e
 
c
h
e
r
c
h
e
r
 
p
r
o
p
r
i
Ã
©
t
Ã
©
s
 
d
o
n
t
 
l
e
 
t
a
r
i
f
 
s
u
p
p
o
r
t
e
 
n
o
m
b
r
e
s
 
d
\
'
h
Ã
´
t
e
s
 
j
u
s
q
u
\
'
Ã
 
 
e
t
 
Ã
©
g
a
l
 
a
u
 
n
o
m
b
r
e
 
c
h
o
i
s
i
,
 
Ã
©
g
a
l
 
a
o
 
n
o
m
b
r
e
 
c
h
o
i
s
i
,
 
o
u
 
Ã
©
g
a
l
 
e
t
 
p
l
u
s
 
g
r
a
n
d
 
q
u
e
 
c
e
 
n
o
m
b
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
A
t
t
e
n
d
e
z
 
s
v
p
,
 
v
o
t
r
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
e
s
t
 
e
n
 
t
r
a
i
n
 
d
\
'
Ã
ª
t
r
e
 
p
r
o
c
e
s
s
Ã
©
e
 
e
t
 
v
o
u
s
 
s
e
r
e
z
 
r
e
n
v
o
y
Ã
©
(
e
)
 
v
e
r
s
 
l
e
 
s
i
t
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
 
v
o
u
s
 
n
\
'
Ã
ª
t
e
s
 
p
a
s
 
r
e
d
i
r
e
c
t
i
o
n
n
Ã
©
(
e
)
 
v
e
r
s
 
P
a
y
p
a
l
 
d
a
n
s
 
5
 
s
e
c
o
n
d
e
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
q
u
e
z
 
i
c
i
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
Ã
©
s
e
r
v
a
t
i
o
n
 
v
a
l
a
b
l
e
 
d
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
Ã
©
s
e
r
v
a
t
i
o
n
 
v
a
l
a
b
l
e
 
j
u
s
q
u
\
'
a
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
 
d
e
 
l
\
'
h
Ã
´
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
 
'
D
e
s
 
c
o
d
e
s
 
d
\
'
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
u
v
e
n
t
 
Ã
ª
t
r
e
 
p
r
o
d
u
i
t
s
 
e
t
 
p
a
s
s
Ã
©
s
 
a
u
x
 
h
Ã
´
t
e
s
 
c
o
m
m
e
 
u
n
 
e
n
c
o
u
r
a
g
e
m
e
n
t
 
p
o
u
r
 
r
Ã
©
s
e
r
v
e
r
.
<
b
r
/
>

L
e
s
 
d
a
t
e
s
 
d
e
 
\
'
v
a
l
a
b
l
e
 
d
Ã
¨
s
 
l
e
 
e
t
 
j
u
s
u
q
u
\
'
a
u
\
'
 
s
e
 
r
Ã
©
f
Ã
¨
r
e
n
t
 
a
u
x
 
d
a
t
e
s
 
e
n
t
r
e
 
l
e
s
q
u
e
l
e
s
 
u
n
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
p
e
u
t
 
Ã
ª
t
r
e
 
f
a
i
t
e
,
 
t
a
n
d
i
s
 
q
u
e
 
d
e
s
 
d
a
t
e
s
 
d
e
 
v
a
l
i
d
i
t
Ã
©
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
d
Ã
¨
s
 
l
e
/
j
u
s
q
u
\
'
a
u
 
s
e
 
r
Ã
©
f
Ã
¨
r
e
n
t
 
Ã
 
 
l
a
 
p
Ã
©
r
i
o
d
e
 
p
e
n
d
a
n
t
 
l
a
q
u
e
l
l
e
 
l
a
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
d
o
i
t
 
Ã
ª
t
r
e
 
f
a
i
t
e
 
p
o
u
r
 
q
u
e
 
l
e
 
c
o
u
p
o
n
 
s
o
i
t
 
v
a
l
a
b
l
e
.
 
S
i
 
u
n
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
t
o
m
b
e
 
h
o
r
s
 
d
e
 
c
e
t
t
e
 
p
Ã
©
r
i
o
d
e
 
l
e
s
 
t
a
x
e
s
 
n
o
r
m
a
l
e
s
 
s
o
n
t
 
a
p
p
l
i
c
a
b
l
e
s
 
p
o
u
r
 
l
e
s
 
j
o
u
r
s
 
h
o
r
s
 
d
e
 
l
a
 
p
Ã
©
r
i
o
d
e
 
d
Ã
©
f
i
n
i
e
.
<
b
r
/
>

S
i
 
v
o
u
s
 
v
o
u
l
e
z
 
q
u
e
 
l
a
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
s
o
i
t
 
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
o
u
r
 
u
n
 
h
Ã
´
t
e
 
s
p
Ã
©
c
i
f
i
q
u
e
,
 
c
h
o
i
s
i
s
s
e
z
 
s
o
n
 
n
o
m
 
d
a
n
s
 
l
a
 
l
i
s
t
e
 
<
i
>
d
r
o
p
d
o
w
n
<
/
i
>
 
p
o
u
r
 
l
i
m
i
t
e
r
 
c
e
 
c
o
u
p
o
n
 
a
 
c
e
t
 
h
Ã
´
t
e
 
e
n
 
p
a
r
t
i
c
u
l
i
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
v
e
c
 
v
o
t
r
e
 
c
o
u
p
o
n
,
 
c
e
t
t
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
a
 
Ã
©
t
Ã
©
 
r
Ã
©
d
u
i
t
e
 
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
 
p
o
u
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
 
'
M
a
r
q
u
e
z
 
N
o
n
 
p
o
u
r
 
d
Ã
©
a
c
t
i
v
e
r
 
l
e
 
c
h
a
r
g
e
m
e
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
 
a
u
s
s
i
 
b
i
e
n
 
q
u
e
 
d
e
s
 
f
i
c
h
i
e
r
s
 
C
S
S
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
h
a
r
g
e
r
 
l
a
 
b
i
l
b
i
o
t
h
Ã
¨
q
u
e
 
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
 
'
M
a
r
q
u
e
z
 
N
o
n
 
p
o
u
r
 
d
Ã
©
a
c
t
i
v
e
r
 
s
e
u
l
e
m
e
n
t
 
l
e
 
f
i
c
h
i
e
r
 
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
'
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
.
 
t
a
x
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
P
r
o
p
r
i
Ã
©
t
Ã
©
 
p
a
s
 
e
n
 
l
i
g
n
e
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
s
e
 
l
e
s
 
f
o
n
c
t
i
o
n
s
 
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
 
'
U
t
i
l
i
s
e
z
 
l
a
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
 
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
o
n
 
e
n
 
l
i
g
n
e
 
J
o
m
r
e
s
.
 
C
e
l
a
 
o
f
f
r
i
r
a
 
u
n
e
 
l
i
s
t
e
 
d
Ã
©
r
o
u
l
a
n
t
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
o
n
 
a
u
x
 
u
t
i
l
i
s
a
t
e
u
r
s
 
f
r
o
n
t
e
n
d
;
 
o
Ã
¹
 
i
l
s
 
s
e
r
o
n
t
 
e
n
 
m
e
s
u
r
e
 
d
e
 
c
h
o
i
s
i
r
 
l
a
 
m
o
n
n
a
i
e
 
q
u
\
'
i
l
s
 
s
o
u
h
a
i
t
e
n
t
 
a
f
f
i
c
h
e
r
.
 
L
e
 
p
r
i
x
 
a
f
f
i
c
h
e
r
 
s
e
r
a
 
l
e
 
p
r
i
x
 
d
a
n
s
 
l
a
 
m
o
n
n
a
i
s
 
c
h
o
i
s
i
e
,
 
s
u
i
v
i
 
p
a
r
,
 
e
n
t
r
e
 
p
a
r
e
n
t
h
Ã
¨
s
e
s
,
 
l
e
 
p
r
i
x
 
 
Â
«
 
i
n
d
i
g
Ã
¨
n
e
 
Â
»
 
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
 
'
N
o
u
s
 
a
v
o
n
s
 
u
t
i
l
i
s
Ã
©
 
n
o
s
 
m
e
i
l
l
e
u
r
s
 
e
f
f
o
r
t
s
 
p
o
u
r
 
o
b
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
u
x
 
d
e
 
c
h
a
n
g
e
 
p
l
u
s
 
p
r
Ã
©
c
i
s
e
s
 
e
t
 
Ã
 
 
j
o
u
r
 
q
u
e
 
n
o
u
s
 
p
o
u
v
o
n
s
.
 
N
o
t
r
e
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
 
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
o
n
 
d
e
 
d
e
v
i
s
e
s
 
e
n
 
l
i
g
n
e
 
e
s
t
 
u
n
 
s
e
r
v
i
c
e
 
f
o
u
r
n
i
 
Ã
 
 
t
i
t
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
f
 
s
e
u
l
e
m
e
n
t
 
e
t
 
n
e
 
v
i
s
e
 
p
a
s
 
Ã
 
 
f
o
u
r
n
i
r
 
d
e
s
 
c
h
i
f
f
r
e
s
 
e
x
a
c
t
s
.
 
E
n
 
c
o
n
s
Ã
©
q
u
e
n
c
e
,
 
n
o
u
s
 
n
e
 
g
a
r
a
n
t
i
s
s
o
n
s
 
p
a
s
 
l
\
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
e
 
d
e
s
 
t
a
u
x
 
d
e
 
c
h
a
n
g
e
.
 
E
n
 
u
t
i
l
i
s
a
n
t
 
c
e
t
t
e
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
,
 
v
o
u
s
 
r
e
c
o
n
n
a
i
s
s
e
z
 
q
u
e
 
t
o
u
t
e
 
u
t
i
l
i
s
a
t
i
o
n
 
d
e
 
l
a
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
 
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
o
n
 
d
e
 
t
a
u
x
 
s
e
r
a
 
e
n
t
i
Ã
¨
r
e
m
e
n
t
 
Ã
 
 
v
o
s
 
p
r
o
p
r
e
s
 
r
i
s
q
u
e
s
.
'
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
d
e
s
 
d
e
 
d
e
v
i
s
e
s
/
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
e
 
d
e
v
i
s
e
 
c
o
u
r
a
n
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
I
P
 
d
Ã
©
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
'
)
;

j
r
_
d
e
f
i
n
e
(
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
 
'
P
o
u
r
 
d
Ã
©
f
i
n
i
r
 
a
u
t
o
m
a
t
i
q
u
e
m
e
n
t
 
l
e
 
c
o
d
e
 
d
e
 
l
a
 
m
o
n
n
a
i
e
 
p
o
u
r
 
l
e
 
m
e
n
u
 
d
Ã
©
r
o
u
l
a
n
t
 
d
e
 
c
h
o
i
x
 
d
e
 
m
o
n
n
a
i
e
;
 
J
o
m
r
e
s
 
e
s
t
 
e
n
 
m
e
s
u
r
e
 
d
\
'
u
t
i
l
i
s
e
r
 
u
n
 
s
e
r
v
i
c
e
 
g
r
a
t
u
i
t
 
a
p
p
e
l
Ã
©
 
I
P
i
n
f
o
D
B
 
p
o
u
r
 
d
Ã
©
t
e
c
t
e
r
 
l
e
s
 
p
a
y
s
 
d
e
s
 
v
i
s
i
t
e
u
r
s
,
 
m
a
i
s
 
v
o
u
s
 
d
e
v
e
z
 
v
o
u
s
 
i
n
s
c
r
i
r
e
 
e
t
 
o
b
t
e
n
i
r
 
u
n
e
 
c
l
Ã
©
 
A
P
I
 
Ã
 
 
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
 
e
n
 
p
r
e
m
i
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
Ã
©
b
o
g
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
L
o
c
a
t
i
o
n
 
s
a
n
s
 
t
a
x
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
L
o
c
a
t
i
o
n
 
T
T
C
'
)
;

j
r
_
d
e
f
i
n
e
(
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
T
a
x
e
 
c
h
a
m
b
r
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
u
v
r
i
r
 
l
e
 
f
o
r
m
u
l
a
i
r
e
 
d
e
 
r
Ã
©
s
e
r
v
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
R
e
t
o
u
r
 
a
u
x
 
d
Ã
©
t
a
i
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
r
i
Ã
©
t
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
A
u
t
o
m
a
t
i
q
u
e
m
e
n
t
 
s
Ã
©
l
e
c
t
i
o
n
n
Ã
©
 
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
c
e
 
(
a
p
r
Ã
¨
s
 
l
e
 
p
a
i
e
m
e
n
t
 
d
u
 
d
Ã
©
p
Ã
´
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
e
r
 
l
e
s
 
r
e
s
s
o
u
r
c
e
s
 
s
e
l
o
n
 
l
e
u
r
s
 
o
p
t
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
D
e
r
n
i
Ã
¨
r
e
 
r
Ã
©
s
e
r
v
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
s
e
c
o
n
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
m
i
n
u
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
h
e
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
j
o
u
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
m
a
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
o
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
n
Ã
©
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
D
Ã
©
c
e
n
n
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
I
l
 
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
Ã
 
 
p
a
r
t
i
r
 
d
e
 
m
a
i
n
t
e
n
a
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
Ã
©
s
e
r
v
a
t
i
o
n
s
 
s
o
n
t
 
d
e
s
 
j
o
u
r
s
 
e
n
t
i
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
a
r
 
d
Ã
©
f
a
u
t
 
l
e
 
s
y
s
t
Ã
¨
m
e
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
 
e
s
t
 
h
o
r
s
 
s
e
r
v
i
c
e
 
l
a
 
n
u
i
t
,
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
p
o
s
s
i
b
l
e
 
Ã
 
 
p
a
r
t
i
r
 
d
u
 
1
e
r
 
j
a
n
v
i
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
u
 
2
 
j
a
n
v
i
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
 
p
o
u
r
 
u
n
e
 
s
e
u
l
e
 
n
u
i
t
.
 
S
i
 
v
o
u
s
 
d
Ã
©
f
i
n
i
s
s
e
z
 
c
e
t
t
e
 
o
p
t
i
o
n
 
s
u
r
 
O
u
i
,
 
n
o
t
e
r
 
q
u
e
 
l
a
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
c
o
u
v
r
i
r
a
 
l
a
 
j
o
u
r
n
Ã
©
e
 
e
n
t
i
Ã
¨
r
e
.
 
S
i
 
v
o
u
s
 
c
h
o
i
s
i
s
s
e
z
 
N
O
N
,
 
u
n
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
c
e
s
 
j
o
u
r
s
-
l
Ã
 
 
c
o
u
v
r
i
r
a
 
l
e
s
 
d
e
u
x
 
j
o
u
r
s
 
e
t
 
l
e
 
c
l
i
e
n
t
 
s
e
r
a
i
t
 
f
a
c
t
u
r
Ã
©
 
p
o
u
r
 
d
e
u
x
 
j
o
u
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
a
r
 
j
o
u
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
a
r
 
p
e
r
s
o
n
n
e
 
e
t
 
p
a
r
 
j
o
u
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
D
Ã
©
b
u
t
 
d
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
R
e
t
o
u
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
n
u
i
t
 
(
s
)
 
Ã
 
'
)
;

j
r
_
d
e
f
i
n
e
(
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
e
 
d
e
 
r
e
t
o
u
r
 
i
n
c
o
r
r
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
 
'
L
a
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
e
s
t
 
t
r
o
p
 
c
o
u
r
t
e
.
 
I
l
 
f
a
u
t
 
f
a
i
r
e
 
a
u
 
m
o
i
n
s
 
u
n
 
j
o
u
r
 
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
e
 
d
Ã
©
b
u
t
 
d
e
 
l
o
c
a
t
i
o
n
 
e
t
 
d
e
 
r
e
t
o
u
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
I
n
t
e
r
v
a
l
l
e
 
m
i
n
i
m
a
l
 
p
o
u
r
 
l
e
 
d
Ã
©
b
u
t
 
d
e
 
l
o
c
a
t
i
o
n
/
r
e
t
o
u
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
 
'
L
\
'
i
n
t
e
r
v
a
l
l
e
 
m
i
n
i
m
u
m
 
d
a
n
s
 
l
e
 
f
o
r
m
u
l
a
i
r
e
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
e
n
t
r
e
 
l
e
 
d
Ã
©
b
u
t
 
d
e
 
l
o
c
a
t
i
o
n
 
e
t
 
l
a
 
f
i
n
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
l
e
 
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
e
 
q
u
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
e
 
d
Ã
©
b
u
t
 
e
t
 
d
e
 
f
i
n
 
p
e
u
v
e
n
t
 
Ã
ª
t
r
e
 
r
Ã
©
g
l
Ã
©
s
 
s
u
r
 
l
e
 
m
Ã
ª
m
e
 
j
o
u
r
,
 
m
a
i
s
 
c
e
 
n
\
'
e
s
t
 
p
a
s
 
t
r
i
b
u
t
a
i
r
e
 
d
e
 
l
\
'
i
n
t
e
r
v
a
l
l
e
 
m
i
n
i
m
u
m
 
c
a
l
c
u
l
Ã
©
 
a
u
t
o
m
a
t
i
q
u
e
m
e
n
t
 
p
a
r
 
l
e
 
m
o
t
e
u
r
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
,
 
c
a
r
 
i
l
 
v
Ã
©
r
i
f
i
e
 
l
e
s
 
t
a
r
i
f
s
 
q
u
i
 
s
o
n
t
 
v
a
l
i
d
e
s
 
p
o
u
r
 
l
a
 
p
Ã
©
r
i
o
d
e
 
d
e
 
r
Ã
©
s
e
r
v
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
 
'
L
\
'
e
s
t
i
m
a
t
i
o
n
s
 
e
t
 
l
e
 
r
Ã
©
s
u
m
Ã
©
 
d
e
s
 
p
r
i
x
 
d
e
v
r
a
i
e
n
t
 
Ã
ª
t
r
e
 
t
a
r
i
f
Ã
©
e
s
 
s
e
l
o
n
 
l
e
s
 
j
o
u
r
s
 
/
 
s
e
m
a
i
n
e
s
 
/
 
m
o
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
a
r
 
j
o
u
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
 
'
J
o
u
r
s
 
a
v
a
n
t
 
l
a
 
d
a
t
e
 
d
e
 
r
e
t
o
u
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
 
'
L
e
 
n
o
m
b
r
e
 
m
i
n
i
m
a
l
 
d
e
 
j
o
u
r
s
 
q
u
i
 
d
o
i
t
 
s
\
'
Ã
©
c
o
u
l
e
r
,
 
Ã
 
p
a
r
t
i
r
 
d
\
'
 
Â
«
 
a
u
j
o
u
r
d
\
'
h
u
i
 
Â
»
,
 
a
v
a
n
t
 
l
a
 
d
a
t
e
 
d
e
 
r
e
t
o
u
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
 
'
M
e
t
t
r
e
 
s
u
r
 
O
U
I
 
s
i
 
v
o
u
s
 
s
o
u
h
a
i
t
e
z
 
l
i
m
i
t
e
r
 
l
e
s
 
R
Ã
©
s
e
r
v
a
t
i
o
n
s
 
a
n
t
i
c
i
p
Ã
©
e
s
 
(
u
t
i
l
i
s
e
r
 
l
e
 
c
h
a
m
p
 
s
u
i
v
a
n
t
 
p
o
u
r
 
d
Ã
©
f
i
n
i
r
 
l
a
 
l
i
m
i
t
e
 
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
 
j
o
u
r
s
)
.
 
S
i
 
v
o
u
s
 
n
e
 
d
Ã
©
f
i
n
i
s
s
e
z
 
p
a
s
 
s
u
r
 
O
U
I
 
e
t
 
q
u
e
 
l
\
'
u
t
i
l
i
s
a
t
e
u
r
 
e
s
s
a
i
e
 
d
e
 
r
Ã
©
s
e
r
v
e
r
 
p
l
u
s
 
d
e
 
X
 
j
o
u
r
s
 
Ã
 
 
l
\
'
a
v
a
n
c
e
,
 
l
a
 
d
a
t
e
 
d
e
 
d
Ã
©
b
u
t
 
o
u
 
d
e
 
f
i
n
 
s
e
r
a
 
r
a
m
e
n
Ã
©
e
 
Ã
 
 
c
e
t
t
e
 
d
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
V
o
i
r
 
l
a
 
d
a
t
e
 
d
e
 
r
e
t
o
u
r
 
d
e
 
l
\
'
e
n
t
r
Ã
©
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
 
'
M
e
t
t
r
e
 
s
u
r
 
N
O
N
 
s
i
 
v
o
u
s
 
n
e
 
v
o
u
l
e
z
 
p
a
s
 
a
f
f
i
c
h
e
r
 
l
a
 
b
o
Ã
®
t
e
 
d
e
 
s
a
i
s
i
e
 
d
e
 
d
a
t
e
 
d
e
 
r
e
t
o
u
r
.
 
U
t
i
l
i
s
e
z
 
u
n
i
q
u
e
m
e
n
t
 
q
u
e
 
c
e
 
s
i
 
v
o
u
s
 
s
a
v
e
z
 
c
e
 
q
u
e
 
v
o
u
s
 
f
a
i
t
e
s
,
 
c
o
m
m
e
 
l
a
 
d
a
t
e
 
d
e
 
r
e
t
o
u
r
 
d
a
n
s
 
l
a
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
s
e
r
a
 
t
o
u
j
o
u
r
s
 
r
Ã
©
g
l
Ã
©
 
j
u
s
q
u
\
'
a
u
 
l
e
n
d
e
m
a
i
n
 
d
e
 
l
a
 
d
a
t
e
 
d
e
 
r
e
t
o
u
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
 
'
S
i
 
v
o
u
s
 
c
h
o
i
s
i
s
s
e
z
 
O
u
i
,
 
a
l
o
r
s
 
l
e
s
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
 
s
e
r
o
n
t
 
p
r
i
s
e
s
 
p
o
u
r
 
u
n
e
 
p
Ã
©
r
i
o
d
e
 
d
Ã
©
t
e
r
m
i
n
Ã
©
e
.
 
S
i
 
c
e
l
u
i
-
c
i
 
e
s
t
 
d
Ã
©
f
i
n
i
 
s
u
r
 
n
o
n
,
 
a
s
s
u
r
e
z
 
v
o
u
s
 
q
u
e
 
Â
«
 
d
Ã
©
f
i
n
i
r
 
l
e
 
j
o
u
r
 
d
e
 
r
e
t
o
u
r
 
Â
»
 
e
s
t
 
d
Ã
©
f
i
n
i
 
s
u
r
 
N
O
N
 
(
s
a
u
f
 
s
i
 
v
o
u
s
 
v
o
u
l
e
z
 
s
p
Ã
©
c
i
f
i
q
u
e
m
e
n
t
 
f
o
r
c
e
r
 
l
e
s
 
g
e
n
s
 
a
u
 
r
e
t
o
u
r
 
Ã
 
 
u
n
 
c
e
r
t
a
i
n
 
j
o
u
r
 
d
e
 
l
a
 
s
e
m
a
i
n
e
)
 
s
i
n
o
n
 
v
o
u
s
 
n
\
'
o
b
t
i
e
n
d
r
e
z
 
b
e
a
u
c
o
u
p
 
d
e
 
l
i
e
n
s
 
d
a
n
s
 
l
e
 
c
a
l
e
n
d
r
i
e
r
 
d
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
i
l
i
t
Ã
©
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
 
'
J
o
u
r
 
d
e
 
r
e
t
o
u
r
 
p
r
Ã
©
d
Ã
©
f
i
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
 
'
U
n
i
q
u
e
m
e
n
t
 
p
o
u
r
 
l
e
s
 
s
i
t
e
s
 
o
f
f
r
a
n
t
s
 
u
n
e
 
p
Ã
©
r
i
o
d
e
 
f
i
x
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
.
 
C
h
o
i
s
i
r
 
l
e
 
j
o
u
r
 
d
e
 
l
a
 
s
e
m
a
i
n
e
 
o
Ã
¹
 
l
e
 
r
e
t
o
u
r
 
d
o
i
t
 
Ã
ª
t
r
e
 
e
f
f
e
c
t
u
Ã
©
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
J
o
u
r
 
d
e
 
r
e
t
o
u
r
 
f
i
x
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
 
'
D
a
t
e
s
 
f
i
x
e
s
 
r
Ã
©
c
u
r
r
a
n
t
e
s
 
d
e
 
r
e
t
o
u
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
 
'
L
o
r
s
q
u
e
 
l
e
s
 
d
a
t
e
s
 
f
i
x
e
s
 
d
e
 
c
o
l
l
e
c
t
e
 
s
o
n
t
 
s
Ã
©
l
e
c
t
i
o
n
n
Ã
©
e
s
,
 
l
e
 
n
o
m
b
r
e
 
d
e
 
d
a
t
e
s
 
q
u
i
 
p
e
u
t
 
Ã
ª
t
r
e
 
a
f
f
i
c
h
Ã
©
 
d
a
n
s
 
l
a
 
l
i
s
t
e
 
d
Ã
©
r
o
u
l
a
n
t
e
 
d
e
 
d
a
t
e
s
 
c
h
a
n
g
e
n
t
.
 
C
a
r
 
l
a
 
l
i
s
t
e
 
d
e
s
 
d
a
t
e
s
 
n
\
'
i
n
c
l
u
r
a
 
p
a
s
 
l
e
s
 
d
a
t
e
s
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
p
o
s
s
i
b
l
e
 
e
n
 
r
a
i
s
o
n
 
d
e
s
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
 
p
r
Ã
©
a
l
a
b
l
e
s
,
 
e
t
 
q
u
e
 
l
a
 
l
i
s
t
e
 
s
e
r
a
 
e
f
f
e
c
t
i
v
e
m
e
n
t
 
p
l
u
s
 
l
o
n
g
u
e
 
d
u
 
m
o
m
e
n
t
 
q
u
e
 
v
o
t
r
e
 
s
Ã
©
l
e
c
t
i
o
n
 
i
n
c
l
u
r
a
 
u
n
 
n
o
m
b
r
e
 
d
e
 
d
a
t
e
s
 
a
n
c
i
e
n
n
e
s
 
(
s
i
 
e
x
i
s
t
a
n
t
e
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
a
r
 
p
e
r
s
o
n
n
e
 
e
t
 
p
a
r
 
j
o
u
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
Ã
©
l
e
c
t
i
o
n
n
e
z
 
O
u
i
 
s
i
 
v
o
u
s
 
v
o
u
l
e
z
 
f
a
c
t
u
r
e
r
 
p
a
r
 
P
E
R
S
O
N
N
E
 
p
a
r
 
j
o
u
r
.
 
S
i
 
N
o
n
,
 
a
l
o
r
s
 
l
e
s
 
c
o
Ã
»
t
s
 
s
e
r
o
n
t
 
c
a
l
c
u
l
Ã
©
e
s
 
s
u
r
 
u
n
e
 
b
a
s
e
 
d
e
:
 
 
P
a
r
 
O
P
T
I
O
N
S
 
p
a
r
 
j
o
u
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
 
'
D
Ã
©
p
Ã
´
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
 
d
Ã
©
f
i
n
i
r
 
s
i
 
v
o
u
s
 
s
o
u
h
a
i
t
e
z
 
f
a
c
t
u
r
e
r
 
l
e
 
m
o
n
t
a
n
t
 
t
o
t
a
l
 
s
i
 
l
a
 
d
a
t
e
 
d
e
 
r
e
t
o
u
r
 
d
e
 
l
a
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
e
s
t
 
d
a
n
s
 
N
 
j
o
u
r
s
 
d
Ã
¨
s
 
Â
«
 
a
u
j
o
u
r
d
\
'
h
u
i
 
Â
»
.
 
D
Ã
©
f
i
n
i
s
s
e
z
 
c
e
t
t
e
 
o
p
t
i
o
n
 
s
u
r
 
O
u
i
 
p
o
u
r
 
a
c
t
i
v
e
r
 
c
e
t
t
e
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
 
e
t
 
e
n
t
r
e
z
 
l
e
 
n
o
m
b
r
e
 
d
e
 
j
o
u
r
s
 
c
i
-
d
e
s
s
o
u
s
,
 
a
i
n
s
i
,
 
p
a
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
 
l
e
 
j
o
u
r
 
d
e
 
r
a
m
a
s
s
a
g
e
 
e
s
t
 
d
a
n
s
 
6
0
 
j
o
u
r
s
,
 
a
l
o
r
s
 
l
e
 
m
o
n
t
a
n
t
 
d
u
 
d
Ã
©
p
Ã
´
t
 
f
a
c
t
u
r
Ã
©
 
s
e
r
a
 
l
e
 
m
o
n
t
a
n
t
 
t
o
t
a
l
,
 
s
i
n
o
n
 
l
e
 
m
o
n
t
a
n
t
 
s
e
 
b
a
s
e
r
a
 
s
u
r
 
l
e
s
 
o
p
t
i
o
n
s
 
d
e
 
d
Ã
©
p
Ã
´
t
 
c
o
n
f
i
g
u
r
Ã
©
e
s
 
p
l
u
s
 
h
a
u
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
L
a
 
p
l
u
p
a
r
t
 
d
e
s
 
e
n
t
r
e
p
r
i
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
 
l
e
 
p
r
i
x
 
d
e
s
 
r
e
s
s
o
u
r
c
e
s
/
o
p
t
i
o
n
s
/
o
b
j
e
t
s
 
e
n
 
s
e
 
b
a
s
a
n
t
 
s
u
r
 
l
e
 
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
s
o
u
r
c
e
s
/
o
p
t
i
o
n
s
/
o
b
j
e
t
s
 
d
\
'
u
n
 
t
y
p
e
 
r
e
q
u
i
s
;
 
q
u
i
 
s
o
n
t
 
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
 
Ã
 
 
u
n
e
 
d
a
t
e
 
d
o
n
n
Ã
©
e
.
 
<
b
r
/
>
 
C
e
l
a
 
l
e
u
r
 
p
e
r
m
e
t
 
d
\
'
o
f
f
r
i
r
 
d
e
s
 
r
a
b
a
i
s
 
s
u
r
 
u
n
 
t
y
p
e
 
d
e
 
r
e
s
s
o
u
r
c
e
s
/
o
p
t
i
o
n
s
/
o
b
j
e
t
s
 
q
u
i
 
n
\
'
e
s
t
 
p
a
s
 
o
c
c
u
p
Ã
©
/
u
t
i
l
i
s
Ã
©
 
p
e
n
d
a
n
t
 
u
n
e
 
p
Ã
©
r
i
o
d
e
 
d
o
n
n
Ã
©
e
;
 
d
a
n
s
 
l
e
 
b
u
t
 
d
\
'
a
t
t
i
r
e
r
 
d
e
s
 
c
l
i
e
n
t
s
 
s
u
p
l
Ã
©
m
e
n
t
a
i
r
e
s
.
<
b
r
/
>
 
L
\
'
a
c
t
i
v
a
t
i
o
n
 
e
t
 
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
t
i
o
n
 
d
e
 
c
e
 
p
l
u
g
i
n
 
v
o
u
s
 
p
e
r
m
e
t
 
d
\
'
o
f
f
r
i
r
 
u
n
e
 
t
a
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
 
r
Ã
©
g
l
a
b
l
e
,
 
b
a
s
Ã
©
e
 
s
u
r
 
l
e
 
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
s
o
u
r
c
e
s
/
o
p
t
i
o
n
s
/
o
b
j
e
t
s
 
d
\
'
u
n
 
t
y
p
e
 
s
Ã
©
l
e
c
t
i
o
n
n
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
n
t
 
d
a
n
s
 
l
\
'
e
n
t
r
e
p
r
i
s
e
 
Ã
 
 
u
n
 
j
o
u
r
 
d
o
n
n
Ã
©
.
<
b
r
/
>
L
e
 
s
e
u
i
l
 
d
e
 
j
o
u
r
s
,
 
d
Ã
©
f
i
n
i
t
 
l
e
 
n
o
m
b
r
e
 
d
e
 
j
o
u
r
s
 
p
e
n
d
a
n
t
 
l
e
s
q
u
e
l
s
 
l
a
 
d
a
t
e
 
d
e
 
r
e
t
o
u
r
 
d
o
i
t
 
Ã
ª
t
r
e
 
i
n
c
l
u
e
 
a
v
a
n
t
 
l
e
 
p
r
i
x
 
d
e
s
 
r
e
s
s
o
u
r
c
e
s
/
o
p
t
i
o
n
s
/
o
b
j
e
t
s
 
e
t
 
s
o
n
t
 
a
j
u
s
t
Ã
©
e
s
 
p
a
r
 
c
e
t
t
e
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
,
<
b
r
/
>
 
p
u
i
s
 
l
e
s
 
p
o
u
r
c
e
n
t
a
g
e
s
 
d
a
n
s
 
l
e
s
 
r
e
s
s
o
u
r
c
e
s
/
o
p
t
i
o
n
s
/
o
b
j
e
t
s
 
v
o
u
s
 
p
e
r
m
e
t
t
e
n
t
 
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
e
r
 
l
e
 
p
o
u
r
c
e
n
t
a
g
e
 
d
e
s
 
r
e
s
s
o
u
r
c
e
s
/
o
p
t
i
o
n
s
/
o
b
j
e
t
s
s
 
q
u
i
 
p
e
u
v
e
n
t
 
Ã
ª
t
r
e
 
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
v
a
n
t
 
d
\
'
a
p
p
l
i
q
u
e
 
u
n
e
 
r
Ã
©
d
u
c
t
i
o
n
 
d
o
n
n
Ã
©
e
.
 
N
o
t
e
z
 
c
e
p
e
n
d
a
n
t
,
 
q
u
e
 
s
i
 
p
l
u
s
i
e
u
r
s
 
r
e
s
s
o
u
r
c
e
s
/
o
p
t
i
o
n
s
/
o
b
j
e
t
s
 
o
n
t
 
u
n
 
r
a
b
a
i
s
 
a
c
t
i
f
;
 
l
e
 
r
a
b
a
i
s
 
a
c
t
u
e
l
 
s
\
'
a
p
p
l
i
q
u
e
r
a
 
m
a
i
s
 
n
e
 
s
e
 
s
\
'
a
j
o
u
t
e
r
a
 
p
a
s
 
a
u
 
r
a
b
a
i
s
 
d
Ã
©
j
Ã
 
 
a
c
t
i
f
 
d
e
s
 
r
e
s
s
o
u
r
c
e
s
/
o
p
t
i
o
n
s
/
o
b
j
e
t
s
 
c
h
o
i
s
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
 
'
S
e
u
i
l
 
(
n
o
m
b
r
e
 
d
e
 
j
o
u
r
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
e
 
d
e
 
r
e
t
o
u
r
 
e
t
 
a
u
j
o
u
r
d
\
'
h
u
i
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
R
e
t
o
u
r
 
e
n
 
a
t
t
e
n
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
R
e
t
o
u
r
 
a
u
j
o
u
r
d
\
'
h
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
R
e
t
o
u
r
 
d
e
 
l
o
c
a
t
i
o
n
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
R
e
t
o
u
r
s
 
a
u
j
o
u
r
d
\
'
h
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
R
e
t
o
u
r
 
e
n
 
r
e
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
\
'
a
 
p
a
s
 
Ã
©
t
Ã
©
 
r
e
n
d
u
/
r
a
m
e
n
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
J
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
q
u
e
r
 
u
n
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
d
e
 
r
e
t
o
u
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
q
u
e
r
 
u
n
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
r
e
t
o
u
r
n
Ã
©
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
q
u
e
r
 
u
n
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
r
e
n
d
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
q
u
e
r
 
u
n
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
r
e
t
o
u
r
n
Ã
©
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
Ã
»
t
 
p
a
r
 
j
o
u
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
o
m
b
r
e
 
d
e
 
j
o
u
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
 
'
M
o
d
f
i
f
i
e
r
 
l
e
 
t
o
t
a
l
 
d
e
 
l
\
'
h
Ã
©
b
r
e
g
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
E
n
r
e
g
i
s
t
r
e
r
 
l
a
 
m
o
d
i
f
i
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
 
'
E
n
v
o
y
e
r
 
p
a
r
 
c
o
u
r
r
i
e
l
 
a
u
 
n
o
u
v
e
l
 
u
t
i
l
i
s
a
t
e
u
r
 
l
e
s
 
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
o
n
 
(
l
o
g
i
n
/
m
o
t
 
d
e
 
p
a
s
s
e
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
 
'
S
i
 
l
\
'
o
p
t
i
o
n
 
d
e
 
c
r
Ã
©
e
r
 
u
n
 
n
o
u
v
e
l
 
u
t
i
l
i
s
a
t
e
u
r
 
e
s
t
 
d
Ã
©
f
i
n
i
e
 
s
u
r
 
O
u
i
 
l
o
r
s
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
/
l
o
c
a
t
i
o
n
s
 
c
e
l
u
i
-
c
i
 
r
e
c
e
v
r
a
 
s
e
s
 
i
n
f
o
e
r
m
a
t
i
o
n
s
 
d
e
 
c
o
n
n
e
x
t
i
o
n
 
a
u
t
o
m
a
t
i
q
u
e
m
e
n
t
 
Ã
 
 
l
\
'
a
d
r
e
s
s
e
 
m
a
i
l
 
i
n
s
c
r
i
t
e
 
d
a
n
s
 
s
o
n
 
c
o
m
p
t
e
.
 
V
o
u
s
 
p
o
u
v
e
z
 
d
Ã
©
f
i
n
i
r
 
c
e
t
t
e
 
o
p
t
i
o
n
 
s
u
r
 
N
O
N
 
p
o
u
r
 
q
u
e
 
c
e
s
 
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
s
 
n
e
 
s
o
i
e
n
t
 
p
a
s
 
e
n
v
o
y
Ã
©
e
s
 
l
o
r
s
q
u
e
 
l
\
'
u
t
i
l
i
s
a
t
e
u
r
 
e
s
t
 
c
r
Ã
©
Ã
©
.
 
C
e
l
a
 
p
e
u
t
 
Ã
ª
t
r
e
 
u
t
i
l
e
 
s
i
 
v
o
u
s
 
a
j
o
u
t
e
z
 
a
u
t
o
m
a
t
i
q
u
e
m
e
n
t
 
d
e
 
n
o
u
v
e
a
u
x
 
u
t
i
l
i
s
a
t
e
u
r
s
 
Ã
 
 
u
n
e
 
l
i
s
t
e
 
d
e
 
d
i
f
f
u
s
i
o
n
,
 
p
a
r
 
e
x
e
m
p
l
e
;
 
e
t
 
q
u
e
 
v
o
u
s
 
n
e
 
v
o
u
l
e
z
 
p
a
s
 
q
u
e
 
l
e
s
 
u
t
i
l
i
s
a
t
e
u
r
s
 
p
u
i
s
s
e
n
t
 
s
e
 
c
o
n
n
e
c
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
V
o
i
r
 
l
a
/
l
e
s
 
t
a
x
e
 
d
a
n
s
 
l
e
s
 
t
o
t
a
u
x
 
d
u
 
f
o
r
m
u
l
a
i
r
e
 
d
e
 
r
Ã
©
s
e
r
v
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
 
'
M
e
t
t
r
e
 
c
e
t
t
e
 
o
p
t
i
o
n
 
s
u
r
 
N
O
N
 
s
i
 
v
o
u
s
 
n
e
 
s
o
u
h
a
i
t
e
z
 
p
a
s
 
a
f
f
i
c
h
e
r
 
l
a
/
l
e
s
 
t
a
x
e
 
d
a
n
s
 
l
e
s
 
t
o
t
a
u
x
 
d
e
 
l
a
 
r
Ã
©
s
e
r
v
a
t
i
o
n
/
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
A
n
n
u
l
a
t
i
o
n
 
d
e
 
l
a
 
l
i
m
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
 
'
C
o
n
n
e
c
t
Ã
©
,
 
l
e
s
 
c
l
i
e
n
t
s
 
e
n
r
e
g
i
s
t
r
Ã
©
s
 
p
e
u
v
e
n
t
 
a
n
n
u
l
e
r
 
l
e
u
r
s
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
.
 
I
c
i
,
 
v
o
u
s
 
p
o
u
v
e
z
 
d
Ã
©
f
i
n
i
r
 
l
a
 
l
i
m
i
t
e
,
 
e
n
 
j
o
u
r
s
,
 
o
Ã
¹
 
l
a
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
n
e
 
p
e
u
t
 
Ã
ª
t
r
e
 
a
n
n
u
l
Ã
©
e
 
a
v
a
n
t
 
l
a
 
d
a
t
e
 
d
\
'
a
r
r
i
v
Ã
©
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
M
o
d
i
f
i
e
r
 
l
e
 
p
r
o
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
T
y
p
e
 
d
e
 
l
i
e
n
s
 
d
e
 
l
a
 
p
r
o
p
r
i
Ã
©
t
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
 
'
C
l
i
q
u
e
z
 
s
u
r
 
l
a
 
l
e
t
t
r
e
 
p
o
u
r
 
a
f
f
i
c
h
e
r
 
t
o
u
t
e
s
 
l
e
s
 
e
n
t
r
e
p
r
i
s
e
s
 
c
o
m
m
e
n
c
a
n
t
 
p
a
r
 
c
e
t
t
e
 
l
e
t
t
r
e
.
 
U
n
e
 
f
o
i
s
 
q
u
e
 
v
o
u
s
 
a
v
e
z
 
u
n
e
 
l
i
s
t
e
 
d
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
s
,
 
v
o
u
s
 
p
o
u
v
e
z
 
a
f
f
e
c
t
e
r
 
d
e
s
 
t
a
u
x
 
d
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
 
Ã
 
 
c
e
s
 
p
r
o
p
r
i
Ã
©
t
Ã
©
s
,
 
o
u
 
c
l
i
q
u
e
z
 
s
u
r
 
l
e
u
r
 
i
c
Ã
´
n
e
 
Â
«
 
m
o
d
i
f
i
e
r
 
Â
»
 
p
o
u
r
 
a
f
f
i
c
h
e
r
 
l
e
s
 
s
t
a
t
i
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
\
'
e
n
t
r
e
p
r
i
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
 
'
M
o
d
i
f
i
e
r
 
l
e
 
t
a
u
x
 
d
\
'
i
m
p
o
s
i
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
M
o
d
i
f
i
e
r
 
l
e
 
c
h
a
m
p
 
p
e
r
s
o
n
n
a
l
i
s
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
M
o
t
 
d
e
 
p
a
s
s
e
 
 
d
u
 
s
e
r
v
e
u
r
 
d
e
 
l
i
c
e
n
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
N
o
m
 
d
\
'
u
t
i
l
i
s
a
t
e
u
r
 
d
u
 
s
e
r
v
e
u
r
 
d
e
 
l
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
 
'
S
i
 
v
o
u
s
 
a
v
e
z
 
u
n
 
n
o
m
 
d
\
'
u
t
i
l
i
s
a
t
e
u
r
 
e
t
 
u
n
 
m
o
t
 
d
e
 
p
a
s
s
e
 
p
o
u
r
 
l
e
 
s
e
r
v
e
u
r
 
d
e
 
l
i
c
e
n
c
e
s
,
 
v
e
u
i
l
l
e
z
 
l
e
s
 
e
n
t
r
e
r
 
i
c
i
.
 
C
e
l
a
 
v
o
u
s
 
a
i
d
e
r
a
 
p
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
r
 
l
e
s
 
p
l
u
g
i
n
s
 
.
 
S
i
 
v
o
u
s
 
a
v
e
z
 
e
n
t
r
Ã
©
 
u
n
e
 
c
l
Ã
©
 
d
e
 
S
u
p
p
o
r
t
 
v
a
l
i
d
e
 
d
a
n
s
 
l
e
 
c
h
a
m
p
 
c
i
-
d
e
s
s
u
s
,
 
i
l
 
n
\
'
e
s
t
 
p
a
s
 
n
Ã
©
c
e
s
s
a
i
r
e
 
d
e
 
f
o
u
r
n
i
r
 
l
e
 
n
o
m
 
d
\
'
u
t
i
l
i
s
a
t
e
u
r
/
m
o
t
 
d
e
 
p
a
s
s
e
 
i
c
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
o
n
 
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
D
e
r
n
i
Ã
¨
r
e
 
v
e
r
s
i
o
n
 
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
T
T
E
N
T
I
O
N
 
!
 
:
 
I
l
 
e
x
i
s
t
e
 
u
n
e
 
n
o
u
v
e
l
l
e
 
v
e
r
s
i
o
n
 
d
e
 
J
o
m
r
e
s
,
 
n
o
u
s
 
v
o
u
s
 
c
o
n
s
e
i
l
l
o
n
s
 
d
e
 
m
e
t
t
r
e
 
Ã
 
 
n
i
v
e
a
u
 
v
o
t
r
e
 
v
e
r
s
i
o
n
 
l
e
 
p
l
u
s
 
r
a
p
i
d
e
m
e
n
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
i
e
n
v
e
n
u
e
 
s
u
r
 
J
o
m
r
e
s
,
 
n
o
u
s
 
e
s
p
Ã
©
r
o
n
s
 
q
u
e
 
v
o
u
s
 
a
p
p
r
Ã
©
c
i
e
r
e
z
 
d
\
'
u
t
i
l
i
s
e
r
 
l
e
 
s
y
s
t
Ã
¨
m
e
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
p
r
Ã
©
f
Ã
©
r
Ã
©
 
s
u
r
 
l
e
 
C
M
S
 
J
o
o
m
l
a
.
 
S
i
 
v
o
u
s
 
s
o
u
h
a
i
t
e
z
 
a
c
h
e
t
e
r
 
u
n
e
 
l
i
c
e
n
c
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
 
o
u
 
J
o
m
r
e
s
 
G
o
l
d
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
 
v
i
s
i
t
e
r
 
n
o
t
r
e
 
s
i
t
e
<
/
a
>
 
p
o
u
r
 
p
l
u
s
 
d
\
'
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
s
 
s
u
r
 
c
o
m
m
e
n
t
 
v
o
u
s
 
p
o
u
v
e
z
 
m
e
t
t
r
e
 
Ã
 
 
j
o
u
r
 
v
o
t
r
e
 
l
i
c
e
n
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
 
'
C
e
 
s
y
s
t
Ã
¨
m
e
 
e
s
t
 
i
d
Ã
©
a
l
 
p
o
u
r
 
n
\
'
i
m
p
o
r
t
e
 
q
u
e
l
 
s
c
Ã
©
n
a
r
i
o
,
 
c
\
'
e
s
t
 
u
n
 
s
y
s
t
e
m
e
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
/
l
o
c
a
t
i
o
n
 
s
i
m
p
l
e
 
p
o
u
r
 
u
n
e
 
s
e
u
l
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
,
 
j
u
s
q
u
\
'
Ã
 
 
u
n
 
s
i
t
e
 
d
i
s
p
o
s
a
n
t
 
d
e
 
p
l
u
s
i
e
u
r
s
 
u
t
i
l
i
s
a
t
e
u
r
s
,
 
e
n
 
p
l
u
s
i
e
u
r
s
 
l
a
n
g
u
e
s
,
 
a
v
e
c
 
p
l
u
s
i
e
u
r
s
 
p
r
o
p
r
i
Ã
©
t
Ã
©
s
.
 
V
e
u
i
l
l
e
z
 
c
o
n
s
u
l
t
e
r
 
l
a
 
s
e
c
t
i
o
n
 
Â
«
 
A
i
d
e
 
Â
»
 
Ã
 
 
g
a
u
c
h
e
,
 
e
t
 
l
a
 
p
a
g
e
 
Â
«
 
B
i
e
n
 
c
o
m
m
e
n
c
e
r
 
Â
»
 
q
u
i
 
v
o
u
s
 
g
u
i
d
e
r
a
 
d
a
n
s
 
v
o
s
 
p
r
e
m
i
e
r
s
 
p
a
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
r
i
Ã
©
t
Ã
©
 
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
P
a
r
a
m
Ã
¨
t
r
e
s
 
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
 
'
D
Ã
©
f
i
n
i
s
s
e
z
 
c
e
t
t
e
 
o
p
t
i
o
n
 
s
u
r
 
O
U
I
 
p
o
u
r
 
u
t
i
l
i
s
e
r
 
c
e
s
 
p
a
r
a
m
Ã
¨
t
r
e
s
 
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
f
.
 
U
n
 
n
o
m
b
r
e
 
c
r
o
i
s
s
a
n
t
 
d
\
'
h
Ã
©
b
e
r
g
e
u
r
s
 
s
e
m
b
l
e
 
b
l
o
q
u
e
r
 
l
a
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
 
P
H
P
 
m
a
i
l
,
 
a
i
n
s
i
 
v
o
u
s
 
p
o
u
v
e
z
 
c
h
o
i
s
i
r
 
d
e
 
c
o
n
t
o
u
r
n
e
r
 
l
e
s
 
p
a
r
a
m
Ã
¨
t
r
e
s
 
d
e
 
c
o
u
r
r
i
e
r
 
d
e
 
b
a
s
e
 
p
o
u
r
 
J
o
m
r
e
s
 
d
e
 
v
o
t
r
e
 
h
Ã
©
b
e
r
g
e
u
r
 
e
t
 
d
\
'
u
t
i
l
i
s
e
r
 
l
e
s
 
p
a
r
a
m
Ã
¨
t
r
e
s
 
d
e
 
v
o
t
r
e
 
c
h
o
i
x
 
 
d
e
f
i
n
i
s
 
i
c
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
H
Ã
´
t
e
 
a
l
t
e
r
n
a
t
i
f
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
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
h
a
n
g
e
r
 
v
o
t
r
e
 
s
e
r
v
e
u
r
 
d
e
 
m
e
s
s
a
g
e
r
i
e
 
s
m
t
p
 
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
_
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
f
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
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
C
h
a
n
g
e
r
 
v
o
t
r
e
 
p
o
r
t
 
s
m
t
p
 
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
_
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
 
a
l
t
e
r
b
a
t
i
f
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
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
 
'
S
e
l
o
n
 
v
o
s
 
p
a
r
a
m
Ã
¨
t
r
e
s
 
d
e
 
s
e
r
v
e
u
r
 
s
m
t
p
,
 
v
o
u
s
 
d
e
v
e
z
 
l
a
i
s
s
e
z
 
c
e
 
c
h
a
m
p
 
v
i
d
e
 
o
u
 
e
n
t
r
e
z
 
"
s
s
l
"
 
o
u
 
"
t
l
s
"
.
 
D
e
m
a
n
d
e
z
 
Ã
 
 
v
o
t
r
e
 
f
o
u
r
n
i
s
s
e
u
r
 
d
e
 
S
M
T
P
 
s
i
 
v
o
u
s
 
n
e
 
c
o
n
n
a
i
s
s
e
z
 
p
a
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
s
e
r
 
l
\
'
a
u
t
h
e
n
t
i
f
i
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
 
'
S
i
 
v
o
t
r
e
 
s
e
r
v
e
u
r
 
S
M
T
P
 
e
x
i
g
e
 
u
n
e
 
a
u
t
h
e
n
t
i
f
i
c
a
t
i
o
n
 
p
o
u
r
 
v
o
u
s
 
c
o
n
n
e
c
t
e
r
,
 
i
n
d
i
q
u
e
z
 
c
e
 
O
u
i
.
 
L
e
 
n
o
m
 
d
\
'
u
t
i
l
i
s
a
t
e
u
r
 
e
t
 
l
e
 
m
o
t
 
d
e
 
p
a
s
s
e
 
s
e
r
o
n
t
 
e
n
s
u
i
t
e
 
u
t
i
l
i
s
Ã
©
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
N
o
m
 
d
\
'
u
t
i
l
i
s
a
t
e
u
r
 
a
l
t
e
r
n
a
t
i
f
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
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
M
o
t
 
d
e
 
p
a
s
s
e
 
a
l
t
e
r
n
a
t
i
f
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
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
 
E
x
p
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
V
o
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
C
a
c
h
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
a
r
 
d
Ã
©
f
a
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
T
o
u
t
 
l
e
 
m
o
n
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
E
n
r
e
g
i
s
t
r
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
M
a
n
a
g
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
 
M
a
n
a
g
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
P
e
r
s
o
n
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
 
'
C
o
n
t
r
Ã
´
l
e
 
d
\
'
a
c
c
Ã
¨
s
 
m
e
n
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
 
'
C
e
t
t
e
 
f
o
n
c
t
i
o
n
 
v
o
u
s
 
p
e
r
m
e
t
 
d
e
 
c
o
n
t
r
Ã
´
l
e
r
 
q
u
i
 
s
e
r
a
 
e
n
 
m
e
s
u
r
e
 
d
e
 
v
o
i
r
 
u
n
 
p
l
u
g
i
n
 
d
a
n
s
 
l
e
 
m
e
n
u
 
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
 
G
Ã
©
n
Ã
©
r
a
l
e
m
e
n
t
 
l
e
s
 
o
p
t
i
o
n
s
 
d
\
'
u
t
i
l
i
s
a
t
e
u
r
 
0
0
0
0
9
 
s
o
n
t
 
v
i
s
i
b
l
e
s
 
s
o
i
t
 
p
a
r
 
l
e
s
 
v
i
s
i
t
e
u
r
s
 
d
u
 
s
i
t
e
 
n
o
n
 
e
n
r
e
g
i
s
t
r
Ã
©
s
.
 
<
b
r
/
>
 
0
0
0
1
0
 
s
e
r
t
 
g
Ã
©
n
Ã
©
r
a
l
e
m
e
n
t
 
a
u
x
 
r
Ã
©
c
e
p
t
i
o
n
i
s
t
e
s
 
q
u
i
 
o
n
t
 
u
n
e
 
u
t
i
l
i
s
a
t
i
o
n
 
q
u
o
t
i
d
i
e
n
n
e
,
 
t
a
n
d
i
s
 
q
u
e
 
0
0
0
1
1
 
e
s
t
 
u
t
i
l
i
s
Ã
©
 
p
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
r
 
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
e
r
 
u
n
e
/
d
e
s
 
p
r
o
p
r
i
Ã
©
t
Ã
©
s
,
 
m
a
i
s
 
e
s
t
 
u
t
i
l
i
s
Ã
©
 
e
n
 
m
o
i
n
s
 
s
o
u
v
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
Ã
©
c
e
p
t
i
o
n
n
i
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
 
'
C
o
n
t
r
Ã
´
l
e
 
d
\
'
a
c
c
Ã
¨
s
 
c
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
 
'
D
Ã
©
f
i
n
i
s
s
e
z
 
c
e
t
t
e
 
o
p
t
i
o
n
 
s
u
r
 
O
u
i
 
p
o
u
r
 
a
c
t
i
v
e
r
 
l
a
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
 
d
e
 
c
o
n
t
r
Ã
´
l
e
 
d
\
'
a
c
c
Ã
¨
s
 
c
o
m
p
l
e
t
,
 
C
o
n
t
r
Ã
´
l
e
r
 
e
n
s
u
i
t
e
 
l
\
'
o
p
t
i
o
n
 
d
e
 
c
o
n
t
r
Ã
´
l
e
 
d
\
'
a
c
c
Ã
¨
s
 
d
e
 
l
a
 
M
a
i
n
t
e
n
a
n
c
e
 
d
u
 
s
y
s
t
Ã
¨
m
e
 
p
o
u
r
 
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
 
d
e
s
 
c
o
n
t
r
Ã
´
l
e
s
 
d
\
'
a
c
c
Ã
¨
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
 
'
R
e
m
a
r
q
u
e
,
 
c
e
p
e
n
d
a
n
t
,
 
c
e
s
 
p
a
r
a
m
Ã
¨
t
r
e
s
 
n
e
 
c
o
n
t
r
Ã
´
l
e
n
t
 
p
a
s
 
l
e
s
 
s
c
r
i
p
t
s
 
s
o
u
s
-
j
a
c
e
n
t
s
 
a
i
n
s
i
,
 
p
a
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
 
v
o
u
s
 
d
Ã
©
f
i
n
i
s
s
e
z
 
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
 
Ã
 
 
"
M
a
n
a
g
e
r
"
,
 
u
n
 
u
t
i
l
i
s
a
t
e
u
r
 
q
u
i
 
c
o
n
n
a
i
t
 
J
o
m
r
e
s
 
p
e
u
t
 
t
o
u
j
o
u
r
s
 
a
p
p
e
l
e
r
 
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
 
e
n
 
e
n
t
r
a
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
 
d
a
n
s
 
l
a
 
b
a
r
r
e
 
d
\
'
a
d
r
e
s
s
e
 
d
e
 
l
e
u
r
 
n
a
v
i
g
a
t
e
u
r
.
 
C
\
'
e
s
t
 
v
o
u
l
u
,
 
c
o
m
m
e
 
c
e
t
 
a
c
c
Ã
¨
s
 
M
e
n
u
 
c
o
n
t
r
Ã
´
l
e
 
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
e
 
q
u
i
 
p
e
u
t
 
Ã
ª
t
r
e
 
v
u
 
d
a
n
s
 
l
e
 
M
e
n
u
 
p
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
 
v
o
u
s
 
a
v
e
z
 
b
e
s
o
i
n
 
d
e
 
c
o
n
t
r
Ã
´
l
e
 
p
l
u
s
 
s
t
r
i
c
t
,
r
Ã
©
g
l
e
r
 
l
a
 
C
o
n
f
i
g
 
S
i
t
e
-
>
 
F
u
l
l
 
A
c
c
e
s
s
 
C
o
n
t
r
o
l
 
o
p
t
i
o
n
 
O
u
i
 
e
t
 
c
o
n
t
r
Ã
´
l
e
r
 
l
\
'
o
p
t
i
o
n
 
d
e
 
M
e
n
u
 
c
o
n
t
r
Ã
´
l
e
 
d
\
'
a
c
c
Ã
¨
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
 
'
C
o
n
t
r
Ã
´
l
e
 
d
\
'
a
c
c
Ã
¨
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
C
e
t
t
e
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
 
e
s
t
 
p
o
u
r
 
l
e
s
 
u
t
i
l
i
s
a
t
e
u
r
s
 
a
v
a
n
c
Ã
©
s
 
s
e
u
l
e
m
e
n
t
.
 
S
i
 
v
o
u
s
 
n
e
 
s
a
v
e
z
 
p
a
s
 
Ã
 
 
q
u
o
i
 
Ã
§
a
 
s
e
r
t
 
i
l
n
'
y
 
a
 
a
u
c
u
n
e
 
r
a
i
s
o
n
 
s
p
Ã
©
c
i
f
i
q
u
e
 
p
o
u
r
 
l
\
'
u
t
i
l
i
s
e
r
,
 
s
\
'
i
l
 
v
o
u
s
 
p
l
a
Ã
®
t
 
r
e
v
e
n
e
r
 
Ã
 
 
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
t
i
o
n
 
d
u
 
S
i
t
e
 
e
t
 
d
Ã
©
f
i
n
i
s
s
e
r
 
l
\
'
o
p
t
i
o
n
 
d
e
 
c
o
n
t
r
Ã
´
l
e
 
d
\
'
a
c
c
Ã
¨
s
 
t
o
t
a
l
 
s
u
r
 
N
O
N
<
b
r
>

	
C
e
t
t
e
 
f
o
n
c
t
i
o
n
 
v
o
u
s
 
p
e
r
m
e
t
 
d
e
 
c
o
n
t
r
Ã
´
l
e
r
 
q
u
i
 
p
e
u
t
 
a
c
c
Ã
©
d
e
r
 
Ã
 
 
q
u
e
l
l
e
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
a
v
e
c
 
q
u
e
l
q
u
e
s
 
e
x
c
e
p
t
i
o
n
s
 
q
u
i
 
s
o
n
t
 
c
o
d
Ã
©
e
s
 
e
n
 
d
u
r
e
s
 
d
a
n
s
 
l
e
 
s
y
s
t
Ã
¨
m
e
)
.

	
	
<
b
r
/
>

	
	
L
e
 
n
i
v
e
a
u
 
d
'
a
c
c
Ã
¨
s
 
Ã
 
 
c
Ã
´
t
Ã
©
 
d
u
 
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
 
l
a
 
v
a
l
e
u
r
 
p
a
r
 
d
Ã
©
f
a
u
t
,
 
A
v
e
c
 
l
e
 
p
l
e
i
n
 
c
o
n
t
r
Ã
´
l
e
 
d
e
 
l
'
a
c
c
Ã
¨
s
 
s
u
r
 
O
U
I
 
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
u
t
 
l
e
 
m
o
n
d
e
<
/
s
t
r
o
n
g
>
 
a
c
c
Ã
¨
d
e
 
a
u
x
 
s
c
r
i
p
t
s
 
a
u
q
u
e
l
s
 
i
l
s
 
n
e
 
d
e
v
r
a
i
e
n
t
 
p
a
s
 
p
o
u
v
o
i
r
 
a
c
c
Ã
©
d
e
r
 
d
o
n
c
 
s
i
 
v
o
u
s
 
a
v
e
z
 
l
'
i
n
t
e
n
t
i
o
n
 
d
'
u
t
i
l
i
s
e
r
 
c
e
t
t
e
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
,
 
v
o
u
s
 
d
e
v
e
z
 
d
Ã
©
f
i
n
i
r
 
l
e
 
n
i
v
e
a
u
 
d
e
 
c
o
n
t
r
Ã
´
l
e
 
d
'
a
c
c
Ã
¨
s
 
p
o
u
r
 
<
s
t
r
o
n
g
>
c
h
a
q
u
e
<
/
s
t
r
o
n
g
>
 
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
 
J
o
m
r
e
s
 
Ã
©
n
u
m
Ã
©
r
Ã
©
 
i
c
i
.

	
	
<
b
r
/
>

	
	
S
i
 
v
o
u
s
 
n
e
 
s
a
v
e
z
 
p
a
s
 
c
e
 
q
u
e
 
f
o
n
t
 
c
e
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
 
a
l
o
r
s
 
n
o
u
s
 
v
o
u
s
 
c
o
n
s
e
i
l
l
o
n
s
 
v
i
v
e
m
e
n
t
 
d
e
 
n
e
 
p
a
s
 
u
t
i
l
i
s
e
r
 
c
e
t
t
e
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©

	
	
<
b
r
>

	
	
J
o
m
r
e
s
 
a
 
u
n
 
s
y
s
t
e
m
 
d
'
a
c
c
Ã
¨
s
 
n
i
v
e
a
u
x
 
c
o
m
m
e
 
u
n
e
 
p
y
r
a
m
i
d
e
,
 
d
o
n
c
 
l
e
s
 
S
u
p
e
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
e
u
r
s
 
d
e
 
b
i
e
n
s
,
 
s
o
n
t
 
p
l
u
s
 
i
m
p
o
r
t
a
n
t
s
 
q
u
e
 
l
e
s
 
g
e
s
t
i
o
n
n
a
i
r
e
s
.

	
	
<
b
r
/
>

	
	
E
n
 
b
r
e
f
 
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
 
r
Ã
©
c
e
p
t
i
o
n
n
i
s
t
e
 
>
 
R
e
g
i
s
t
e
r
e
d
 
>
 
n
o
n
 
e
n
r
e
g
i
s
t
r
Ã
©
.
 
S
i
 
u
n
 
u
t
i
l
i
s
a
t
e
u
r
 
e
n
r
e
g
i
s
t
r
Ã
©
 
a
 
a
c
c
Ã
¨
s
 
Ã
 
 
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
 
l
e
 
f
a
i
r
e
 
r
Ã
©
c
e
p
t
i
o
n
n
i
s
t
e
s
 
e
t
 
l
e
s
 
g
e
s
t
i
o
n
n
a
i
r
e
s
 
e
t
 
l
e
s
 
c
a
d
r
e
s
,
 
M
a
n
g
e
r
.

	
	
<
b
r
>

	
	
N
o
t
e
z
 
q
u
e
 
v
o
u
s
 
n
e
 
p
o
u
v
e
z
 
p
a
s
 
c
o
n
t
r
Ã
´
l
e
r
 
l
a
 
z
o
n
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
e
u
r
 
s
a
n
s
 
Ã
ª
t
r
e
 
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
 
T
o
u
t
 
l
e
 
m
o
n
d
e
 
d
a
n
s
 
l
e
 
d
o
m
a
i
n
e
 
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
t
e
u
r
 
e
s
t
 
c
o
n
s
i
d
Ã
©
r
Ã
©
 
c
o
m
m
e
 
u
n
 
u
t
i
l
i
s
a
t
e
u
r
 
d
e
 
c
o
n
f
i
a
n
c
e
 
e
n
 
c
e
 
q
u
'
i
l
s
 
n
e
 
d
e
v
r
a
i
e
n
t
 
p
a
s
 
Ã
ª
t
r
e
 
b
l
o
q
u
Ã
©
s
 
d
'
a
c
c
Ã
©
d
e
r
 
Ã
 
 
n
'
i
m
p
o
r
t
e
 
q
u
e
l
 
s
c
r
i
p
t
 
(
s
u
r
t
o
u
t
 
c
e
l
u
i
-
c
i
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
 
'
M
i
s
e
 
e
n
 
g
a
r
d
e
 
!
 
V
o
u
s
 
a
v
e
z
 
l
e
 
c
o
n
t
r
Ã
´
l
e
 
d
e
 
l
\
'
a
c
c
Ã
¨
s
 
c
o
m
p
l
e
t
 
a
c
t
i
v
Ã
©
,
 
c
e
p
e
n
d
a
n
t
,
 
n
o
u
s
 
a
v
o
n
s
 
c
o
m
p
t
Ã
©
 
l
\
'
a
c
c
Ã
¨
s
 
c
o
n
t
r
Ã
´
l
e
n
t
 
l
e
s
 
p
a
r
a
m
Ã
¨
t
r
e
s
 
e
t
 
l
e
s
 
a
 
c
o
m
p
a
r
Ã
©
s
 
a
u
 
n
o
m
b
r
e
 
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
i
 
d
o
i
t
 
Ã
ª
t
r
e
 
c
o
n
t
r
Ã
´
l
Ã
©
,
 
e
t
 
l
e
s
 
d
e
u
x
 
n
e
 
c
o
r
r
e
s
p
o
n
d
e
n
t
 
p
a
s
,
 
d
o
n
c
 
v
o
u
s
 
p
o
u
v
e
z
 
a
v
o
i
r
 
d
e
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
i
 
n
e
 
s
o
n
t
 
p
a
s
 
c
o
n
t
r
Ã
´
l
Ã
©
s
.
 
C
e
l
a
 
p
o
u
r
r
a
i
t
 
Ã
ª
t
r
e
 
u
n
 
p
r
o
b
l
Ã
¨
m
e
 
d
e
 
s
Ã
©
c
u
r
i
t
Ã
©
 
e
t
 
n
o
u
s
 
v
o
u
s
 
d
e
m
a
n
d
o
n
s
 
d
e
 
l
e
 
r
Ã
©
g
l
e
r
 
Ã
 
 
l
a
 
f
o
i
s
 
e
n
 
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
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
 
d
e
 
c
o
n
t
r
Ã
´
l
e
 
d
\
'
a
c
c
Ã
¨
s
 
e
t
 
e
n
 
v
Ã
©
r
i
f
i
a
n
t
 
q
u
e
 
l
e
s
 
n
i
v
e
a
u
x
 
a
p
p
r
o
p
r
i
Ã
©
s
 
o
n
t
 
Ã
©
t
Ã
©
 
a
p
p
l
i
q
u
Ã
©
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
 
'
U
t
i
l
i
s
a
t
e
u
r
s
 
a
v
e
c
 
l
e
s
 
d
r
o
i
t
s
 
a
d
m
i
n
 
p
o
u
r
 
c
e
t
t
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
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
V
o
t
r
e
 
a
d
r
e
s
s
e
 
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
Ã
¨
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
a
m
Ã
¨
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
i
t
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
j
o
u
t
e
z
 
v
o
t
r
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
:
 
Ã
©
t
a
p
e
 
2
 
s
u
r
 
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
M
e
s
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
 
p
r
o
p
o
s
Ã
©
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
N
o
t
e
r
 
q
u
e
 
c
e
s
 
r
Ã
©
s
e
r
v
a
t
i
o
n
s
 
n
\
'
o
n
t
 
p
a
s
 
e
n
c
o
r
e
 
Ã
©
t
Ã
©
 
e
n
r
e
g
i
s
t
r
Ã
©
e
s
.
 
S
i
 
v
o
u
s
 
v
o
u
s
 
d
Ã
©
c
o
n
n
e
c
t
e
z
 
o
u
 
v
o
t
r
e
 
s
e
s
s
i
o
n
 
e
x
p
i
r
e
,
 
e
l
l
e
s
 
s
e
r
o
n
t
 
p
e
r
d
u
e
s
.
 
N
\
'
o
u
b
l
i
e
z
 
p
a
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
e
r
 
v
o
s
 
r
Ã
©
s
e
r
v
a
t
i
o
n
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
e
r
 
l
a
/
l
e
s
 
r
Ã
©
s
e
r
v
a
t
i
o
n
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
E
n
r
e
g
i
s
t
r
e
r
 
p
o
u
r
 
p
l
u
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
V
o
u
s
 
n
\
'
a
v
e
z
 
p
a
s
 
e
n
c
o
r
e
 
e
n
r
e
g
i
s
t
r
Ã
©
 
l
e
s
 
r
Ã
©
s
e
r
v
a
t
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
A
f
f
i
c
h
e
r
 
l
e
 
p
a
n
i
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
 
'
S
o
u
s
-
r
Ã
©
p
e
r
t
o
i
r
e
 
d
e
 
f
i
c
h
i
e
r
s
 
d
e
 
l
a
n
g
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
 
'
L
a
t
i
t
u
d
e
 
d
e
 
d
Ã
©
p
a
r
t
 
p
a
r
 
d
Ã
©
f
a
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
 
'
L
o
n
g
i
t
u
d
e
 
d
e
 
d
Ã
©
p
a
r
t
 
p
a
r
 
d
Ã
©
f
a
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
 
'
D
a
n
s
 
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
u
r
 
l
a
 
p
a
g
e
 
d
\
'
Ã
©
d
i
t
i
o
n
 
d
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
,
 
a
v
a
n
t
 
q
u
e
 
l
e
 
m
a
r
q
u
e
u
r
 
a
 
Ã
©
t
Ã
©
 
d
Ã
©
p
l
a
c
Ã
©
,
 
v
o
u
s
 
a
v
e
z
 
l
e
s
 
p
o
i
n
t
s
 
d
e
 
d
Ã
©
p
a
r
t
 
d
e
 
l
a
t
i
t
u
d
e
/
l
o
n
g
i
t
u
d
e
 
p
a
r
 
d
Ã
©
f
a
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
 
'
E
m
a
i
l
 
e
n
v
o
y
Ã
©
s
 
Ã
 
 
p
a
r
t
i
r
 
d
e
 
q
u
e
l
l
e
 
a
d
r
e
s
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
L
a
i
s
s
e
z
 
c
e
t
t
e
 
o
p
t
i
o
n
 
v
i
d
e
 
p
o
u
r
 
l
a
 
d
Ã
©
s
a
c
t
i
v
e
r
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
s
e
r
a
 
l
'
a
d
r
e
s
s
e
s
 
e
-
m
a
i
l
 
d
e
 
l
'
Ã
©
t
a
b
l
i
s
s
e
m
e
n
t
 
l
o
r
s
 
d
e
 
l
'
e
n
v
o
i
 
d
'
e
m
a
i
l
s
 
a
u
x
 
c
l
i
e
n
t
s
,
 
m
a
i
s
 
v
o
t
r
e
 
s
e
r
v
i
c
e
 
d
e
 
m
e
s
s
a
g
e
r
i
e
 
p
e
u
t
 
n
e
 
p
a
s
 
a
u
t
o
r
i
s
e
r
 
l
e
s
 
e
-
m
a
i
l
s
 
p
r
o
v
e
n
a
n
t
 
d
'
a
d
r
e
s
s
e
s
 
a
r
b
i
t
r
a
i
r
e
s
 
(
c
'
e
s
t
-
Ã
 
-
d
i
r
e
,
 
s
e
u
l
e
m
e
n
t
 
q
u
e
 
d
e
s
 
m
a
i
l
s
 
d
'
u
n
e
 
a
d
r
e
s
s
e
 
a
u
t
o
r
i
s
Ã
©
e
)
.
 
S
i
 
c
'
e
s
t
 
l
e
 
c
a
s
,
 
v
o
u
s
 
p
o
u
v
e
z
 
u
t
i
l
i
s
e
r
 
c
e
t
t
e
 
e
n
t
r
Ã
©
e
 
p
o
u
r
 
e
n
t
r
e
r
 
u
n
e
 
a
d
r
e
s
s
e
 
q
u
i
 
s
e
r
a
 
c
o
n
s
i
d
Ã
©
r
Ã
©
e
 
c
o
m
m
e
 
l
'
a
d
r
e
s
s
e
 
d
e
 
l
'
e
x
p
Ã
©
d
i
t
e
u
r
 
p
o
u
r
 
t
o
u
s
 
l
e
s
 
e
m
a
i
l
s
 
d
e
 
s
y
s
t
Ã
¨
m
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
A
f
f
i
c
h
a
g
e
 
d
e
 
l
a
 
l
i
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
P
h
o
t
o
 
v
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
M
O
V
E
'
,
 
'
S
u
p
p
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
R
e
t
o
u
r
 
a
u
x
 
r
Ã
©
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
 
r
e
c
h
e
r
c
h
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
j
o
u
t
e
r
 
Ã
 
 
l
a
 
l
i
s
t
e
 
r
e
s
t
r
e
i
n
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
R
e
t
i
r
e
r
 
d
e
 
l
a
 
l
i
s
t
e
 
r
e
s
t
r
e
i
n
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
o
i
r
 
l
a
 
l
i
s
t
e
 
r
e
s
t
r
e
i
n
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
i
t
i
q
u
e
 
d
e
 
C
o
o
k
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
 
'
N
o
u
s
 
u
t
i
l
i
s
o
n
s
 
d
e
s
 
c
o
o
k
i
e
s
 
p
o
u
r
 
a
i
d
e
r
 
Ã
 
 
g
a
r
d
e
r
 
n
o
t
r
e
 
s
i
t
e
 
p
e
r
t
i
n
e
n
t
e
 
e
t
 
f
a
c
i
l
e
 
Ã
 
 
u
t
i
l
i
s
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
i
r
e
 
l
a
 
s
u
i
t
e
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
 
'
L
a
 
l
Ã
©
g
i
s
l
a
t
i
o
n
 
e
u
r
o
p
Ã
©
e
n
n
e
 
e
x
i
g
e
 
q
u
e
 
t
o
u
s
 
l
e
s
 
s
i
t
e
s
 
W
e
b
 
m
e
n
t
i
o
n
n
e
n
t
 
c
l
a
i
r
e
m
e
n
t
 
s
i
 
l
e
s
 
c
o
o
k
i
e
s
 
s
o
n
t
 
u
t
i
l
i
s
Ã
©
s
 
e
t
 
l
e
u
r
 
b
u
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
 
"
L
e
 
m
o
t
e
u
r
 
d
e
 
r
e
c
h
e
r
c
h
e
 
e
t
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
d
e
 
c
e
 
s
i
t
e
 
d
o
i
t
 
p
o
u
v
o
i
r
 
s
e
 
s
o
u
v
e
n
i
r
 
d
e
s
 
o
p
t
i
o
n
s
 
q
u
e
 
v
o
u
s
 
a
v
e
z
 
c
h
o
i
s
i
.
 
P
o
u
r
 
c
e
l
a
 
i
l
 
a
 
b
e
s
o
i
n
 
d
e
 
s
t
o
c
k
e
r
 
d
e
s
 
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
s
 
q
u
i
 
s
o
n
t
 
m
i
s
e
n
t
 
d
a
n
s
 
u
n
 
 
p
e
t
i
t
 
f
i
c
h
i
e
r
 
a
p
p
e
l
Ã
©
 
u
n
 
\
"
c
o
o
k
i
e
\
"
 
q
u
i
 
i
d
e
n
t
i
f
i
e
 
d
e
 
m
a
n
i
Ã
¨
r
e
 
u
n
i
q
u
e
 
v
o
t
r
e
 
n
a
v
i
g
a
t
e
u
r
.
V
o
u
s
 
d
e
v
e
z
 
a
c
c
e
p
t
e
r
 
l
'
e
n
r
e
g
i
s
t
r
e
m
e
n
t
 
d
e
 
c
e
s
 
d
o
b
n
n
Ã
©
e
s
 
a
f
i
n
 
d
e
 
p
o
u
v
o
i
r
 
u
t
i
l
i
s
e
r
 
t
o
u
t
e
s
 
l
e
s
 
f
o
n
c
t
i
o
n
s
 
d
e
 
c
e
 
s
i
t
e
.
 
S
i
 
v
o
u
s
 
n
'
a
c
c
e
p
t
e
z
 
p
a
s
 
c
e
t
t
e
 
p
o
l
i
t
i
q
u
e
 
d
e
 
c
o
o
k
i
e
,
 
p
u
i
s
 
v
o
u
s
 
s
e
r
e
z
 
b
e
a
u
c
o
u
p
 
l
i
m
i
t
Ã
©
 
d
a
n
s
 
c
e
 
q
u
e
 
v
o
u
s
 
p
o
u
v
e
z
 
f
a
i
r
e
 
s
u
r
 
c
e
 
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
 
'
O
u
i
,
 
j
\
'
a
c
c
e
p
t
e
 
l
\
'
u
t
i
l
i
s
a
t
i
o
n
 
d
e
 
c
o
o
k
i
e
s
 
d
e
 
c
e
t
t
e
 
m
a
n
i
Ã
¨
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
L
\
'
a
v
a
n
c
e
/
d
Ã
©
p
Ã
´
t
 
r
e
q
u
i
s
 
e
s
t
-
i
l
 
l
e
 
p
r
i
x
 
d
e
 
l
a
 
p
r
e
m
i
Ã
¨
r
e
 
n
u
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
L
e
s
 
p
r
i
x
 
s
o
n
t
 
c
a
l
c
u
l
Ã
©
s
 
s
u
r
 
u
n
e
 
b
a
s
e
 
p
a
r
 
n
u
i
t
.
 
V
o
u
l
e
z
-
v
o
u
s
 
q
u
e
 
l
\
'
a
v
a
n
c
e
/
d
Ã
©
p
Ã
´
t
 
s
o
i
t
 
c
a
l
c
u
l
e
r
 
s
u
r
 
u
n
e
 
n
u
i
t
 
?
 
D
a
n
s
 
l
\
'
a
f
f
i
r
m
a
t
i
v
e
,
 
v
o
u
s
 
p
o
u
v
e
z
 
i
g
n
o
r
e
r
 
l
e
s
 
o
p
t
i
o
n
s
 
s
u
i
v
a
n
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
 
"
V
o
u
s
 
n
'
a
v
e
z
 
p
a
s
 
a
j
o
u
t
Ã
©
 
d
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
 
Ã
 
 
v
o
t
r
e
 
l
i
s
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
e
r
 
l
e
 
m
o
d
e
 
s
a
n
s
 
Ã
©
c
h
e
c
 
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
 
"
M
e
t
t
r
e
 
c
e
t
t
e
 
v
a
l
e
u
r
 
s
u
r
 
O
u
i
 
p
o
u
r
 
d
Ã
©
c
l
e
n
c
h
e
r
 
l
e
 
m
o
d
e
 
s
a
n
s
 
Ã
©
c
h
e
c
.
 
C
e
l
a
 
v
a
 
d
Ã
©
s
a
c
t
i
v
e
r
 
t
o
u
s
 
l
e
s
 
p
l
u
g
i
n
s
 
p
o
u
r
 
q
u
e
 
J
o
m
r
e
s
 
n
'
u
t
i
l
i
s
e
 
q
u
e
 
s
e
s
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
s
 
d
e
 
b
a
s
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
O
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
u
i
v
a
n
t
(
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
A
n
n
u
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
o
y
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
E
n
r
e
g
i
s
t
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
E
f
f
a
c
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
R
e
t
o
u
r
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
F
e
r
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
R
e
t
o
u
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
H
O
M
E
'
,
 
'
A
c
c
u
e
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
v
e
a
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
o
y
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
 
'
C
a
p
t
c
h
a
 
s
e
r
t
 
Ã
 
 
s
\
'
a
s
s
u
r
e
r
 
q
u
e
 
l
e
 
c
l
i
e
n
t
,
 
Ã
 
 
l
\
'
a
i
d
e
 
d
e
 
f
o
r
m
u
l
a
i
r
e
s
 
w
e
b
 
e
s
t
 
u
n
 
Ã
ª
t
r
e
 
h
u
m
a
i
n
 
e
t
 
e
s
t
 
u
t
i
l
i
s
Ã
©
 
p
o
u
r
 
e
m
p
Ã
ª
c
h
e
r
 
l
e
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
t
e
u
r
s
 
d
e
 
b
i
e
n
s
 
d
\
'
Ã
ª
t
r
e
 
\
"
s
p
a
m
m
e
r
\
"
p
a
r
 
d
e
s
 
r
o
b
o
t
s
 
s
u
r
 
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
o
u
r
 
u
t
i
l
i
s
e
r
 
l
e
 
f
o
r
m
u
l
a
i
r
e
,
 
v
o
u
s
 
d
e
v
r
e
z
 
v
o
u
s
 
i
n
s
c
r
i
r
e
 
Ã
 
 
l
a
 
p
a
g
e
 
d
\
'
a
c
c
u
e
i
l
 
<
a
 
h
r
e
f
=
"
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
"
 
t
a
r
g
e
t
=
"
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
"
>
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
 
G
o
o
g
l
e
<
/
a
>
 
e
t
 
d
Ã
©
f
i
n
i
r
 
v
o
t
r
e
 
d
o
m
a
i
n
e
 
d
e
 
r
e
c
e
v
o
i
r
 
v
o
s
 
c
l
Ã
©
s
 
p
u
b
l
i
q
u
e
 
e
t
 
p
r
i
v
Ã
©
e
.
 
L
o
r
s
q
u
e
 
v
o
u
s
 
a
v
e
z
 
r
e
Ã
§
u
 
c
e
s
 
c
l
Ã
©
s
,
 
v
e
u
i
l
l
e
z
 
l
e
s
 
e
n
t
r
e
r
 
c
i
-
d
e
s
s
o
u
s
.
 
L
e
 
s
e
r
v
i
c
e
 
r
e
C
a
p
c
h
a
 
e
s
t
 
u
n
 
s
e
r
v
i
c
e
 
g
r
a
t
u
i
t
 
f
o
u
r
n
i
 
p
a
r
 
G
o
o
g
l
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
P
u
b
l
i
c
 
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
P
r
i
v
a
t
e
 
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
 
'
L
o
c
k
f
i
l
e
 
t
i
m
e
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
 
'
P
o
u
r
 
Ã
©
v
i
t
e
r
 
l
e
 
d
a
n
g
e
r
 
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
t
i
o
n
 
d
e
s
 
c
h
a
m
b
r
e
s
 
e
n
 
d
o
u
b
l
e
 
j
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
s
e
 
u
n
 
f
i
c
h
i
e
r
 
d
e
 
v
e
r
r
o
u
i
l
l
a
g
e
 
p
o
u
r
 
e
m
p
Ã
ª
c
h
e
r
 
q
u
\
'
u
n
e
 
c
h
a
m
b
r
e
 
a
j
o
u
t
Ã
©
e
 
Ã
 
 
l
a
 
l
i
s
t
e
 
d
e
 
c
h
a
m
b
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
s
 
d
a
n
s
 
l
e
 
f
o
r
m
u
l
a
i
r
e
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
 
s
o
i
t
 
a
u
j
o
u
t
e
r
 
d
a
n
s
 
u
n
 
a
u
t
r
e
 
f
o
r
m
u
l
a
i
r
e
 
Ã
 
 
l
a
 
m
Ã
ª
m
e
 
d
a
t
e
.
 
P
a
r
 
d
Ã
©
f
a
u
t
 
c
e
t
t
e
 
s
Ã
©
c
u
r
i
t
Ã
©
 
e
x
p
i
r
e
 
a
u
 
b
o
u
t
 
d
e
 
3
6
0
0
 
s
e
c
o
n
d
e
s
,
 
o
u
 
u
n
e
 
h
e
u
r
e
.
 
V
o
u
s
 
p
o
u
v
e
z
 
m
o
d
i
f
i
e
r
 
l
e
 
t
e
m
p
s
 
d
\
'
e
x
p
i
r
a
t
i
o
n
 
d
e
 
c
e
 
v
e
r
r
o
u
 
e
n
 
c
h
a
n
g
e
a
n
t
 
c
e
 
c
h
i
f
f
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
 
'
A
c
t
i
v
e
z
 
l
e
 
m
o
d
Ã
¨
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
 
J
o
m
r
e
s
 
e
t
 
s
e
s
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
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
o
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
H
a
u
t
 
d
e
 
p
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
F
a
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
s
'
)
;

j
r
_
d
e
f
i
n
e
(
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
 
'
F
i
l
t
r
e
 
d
\
'
e
n
t
r
Ã
©
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
 
'
E
n
t
r
Ã
©
e
 
n
i
v
e
a
u
 
d
e
 
f
i
l
t
r
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
 
p
l
u
p
a
r
t
 
d
e
s
 
d
o
n
n
Ã
©
e
s
 
e
n
t
r
Ã
©
e
s
 
d
a
n
s
 
l
e
 
s
y
s
t
Ã
¨
m
e
 
s
o
n
t
 
n
e
t
t
o
y
Ã
©
e
s
 
e
n
 
p
r
e
m
i
e
r
 
l
i
e
u
 
d
e
s
 
b
a
l
i
s
e
s
 
h
t
m
l
,
 
p
u
i
s
 
Ã
 
 
l
\
'
a
i
d
e
 
d
e
 
l
a
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
 
d
e
 
f
i
l
t
r
a
g
e
 
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
 
P
H
P
 
p
o
u
r
 
s
Ã
©
c
u
r
i
s
e
r
 
l
e
s
 
d
o
n
n
Ã
©
e
s
 
a
v
a
n
t
 
q
u
\
'
e
l
l
e
s
 
e
n
t
r
e
n
t
 
d
a
n
s
 
l
a
 
b
a
s
e
 
d
e
 
d
o
n
n
Ã
©
e
s
.
 
V
o
u
s
 
p
o
u
v
e
z
 
a
u
t
o
r
i
s
e
r
 
c
e
r
t
a
i
n
e
s
 
i
n
s
t
a
n
c
e
s
 
(
p
a
r
 
e
x
e
m
p
l
e
,
 
l
e
s
 
e
n
t
r
Ã
©
e
s
 
d
e
 
t
e
x
t
e
 
d
a
n
s
 
l
a
 
p
a
g
e
 
d
e
 
d
Ã
©
t
a
i
l
s
 
d
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
)
 
d
\
'
i
n
c
l
u
r
e
 
H
T
M
L
.
 
I
l
 
e
x
i
s
t
e
 
d
e
u
x
 
n
i
v
e
a
u
x
 
d
e
 
f
i
l
t
r
a
g
e
,
 
v
o
u
s
 
p
e
u
v
e
n
t
 
u
t
i
l
i
s
e
r
 
p
o
u
r
 
f
i
l
t
r
e
r
 
c
e
t
t
e
 
e
n
t
r
Ã
©
e
,
 
f
a
i
b
l
e
s
 
o
u
 
f
o
r
t
s
.
 
 
V
o
u
s
 
n
e
 
d
e
v
e
z
 
u
t
i
l
i
s
e
r
 
l
e
 
p
a
r
a
m
Ã
¨
t
r
e
 
f
a
i
b
l
e
,
 
s
e
u
l
m
e
n
t
 
s
i
 
l
e
s
 
u
t
i
l
i
s
a
t
e
u
r
s
 
d
e
 
l
a
 
s
a
i
s
i
e
 
d
e
s
 
d
o
n
n
Ã
©
e
s
 
s
o
n
t
 
a
p
p
r
o
u
v
Ã
©
s
 
p
a
r
 
v
o
u
s
-
m
Ã
ª
m
e
,
 
p
a
r
 
e
x
.
 
c
o
l
l
Ã
¨
g
u
e
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
t
e
u
r
s
 
s
y
s
t
Ã
¨
m
e
 
s
i
n
o
n
 
v
o
u
s
 
d
e
v
r
i
e
z
 
l
a
i
s
s
e
r
 
s
u
r
 
S
t
r
o
n
g
.
 
L
o
r
s
q
u
e
 
l
a
 
v
a
l
e
u
r
 
f
o
r
t
e
 
(
r
e
c
o
m
m
a
n
d
Ã
©
)
,
 
v
o
u
s
 
p
o
u
v
e
z
 
s
p
Ã
©
c
i
f
i
e
r
 
l
e
s
 
b
a
l
i
s
e
s
 
p
o
u
r
 
p
e
r
m
e
t
t
r
e
 
e
n
 
m
o
d
i
f
i
a
n
t
 
l
e
 
r
Ã
©
g
l
a
g
e
 
s
u
i
v
a
n
t
 
Â
«
 
n
e
t
t
o
y
a
g
e
 
H
T
M
L
 
b
a
l
i
s
e
s
 
a
u
t
o
r
i
s
Ã
©
e
s
 
Â
»
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
 
'
B
a
l
i
s
e
s
 
d
\
'
e
n
t
r
Ã
©
e
 
a
u
t
o
r
i
s
Ã
©
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
V
o
u
s
 
p
o
u
v
e
z
 
Ã
©
d
i
t
e
r
 
l
e
s
 
t
a
g
s
 
d
u
 
s
y
s
t
Ã
¨
m
e
 
d
e
 
f
i
l
t
r
a
g
e
 
d
e
s
 
t
a
g
 
H
T
M
L
.
 
L
a
 
v
a
l
e
u
r
 
p
a
r
 
d
Ã
©
f
a
u
t
 
e
s
t
 
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
 
B
O
L
D
 
,
 
S
t
r
o
n
g
,
 
l
i
n
k
s
 
e
t
 
i
t
a
l
i
q
u
e
)
.
 
P
o
u
r
 
p
l
u
s
 
d
'
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
s
 
s
u
r
 
l
e
s
 
b
a
l
i
s
e
s
 
a
u
t
o
r
i
s
Ã
©
e
s
,
 
s
'
i
l
 
v
o
u
s
 
p
l
a
Ã
®
t
 
l
i
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
i
o
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
 
I
l
 
e
s
t
 
c
o
n
s
e
i
l
l
Ã
©
 
d
e
 
l
a
i
s
s
e
r
 
l
a
 
v
a
l
e
u
r
 
p
a
r
 
d
Ã
©
f
a
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
Ã
©
e
s
 
a
u
t
o
r
i
s
Ã
©
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
V
o
u
s
 
p
o
u
v
e
z
 
d
Ã
©
f
i
n
i
r
 
q
u
e
l
s
 
t
a
g
 
d
e
 
f
o
r
m
u
l
a
i
r
e
 
s
o
n
t
 
a
u
t
o
r
i
s
Ã
©
s
,
 
t
o
u
t
e
 
e
n
t
r
Ã
©
e
 
a
j
o
u
t
Ã
©
e
 
Ã
 
 
c
e
t
t
e
 
l
i
s
t
e
 
s
e
r
a
 
a
n
a
l
y
s
Ã
©
e
 
p
a
r
 
l
e
 
b
i
a
i
s
 
d
e
 
H
T
M
L
 
P
u
r
i
f
i
e
r
 
a
u
 
l
i
e
u
 
d
'
a
v
o
i
r
 
t
o
u
t
 
l
e
 
h
t
m
l
 
d
Ã
©
p
o
u
i
l
l
Ã
©
.
 
V
a
l
e
u
r
 
p
a
r
 
d
Ã
©
f
a
u
t
 
e
s
t
:
 
Â
«
 
p
r
o
p
e
r
t
y
_
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
 
p
r
o
p
e
r
t
y
_
c
h
e
c
k
i
n
_
t
i
m
e
s
 
p
r
o
p
e
r
t
y
_
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
 
p
r
o
p
e
r
t
y
_
d
r
i
v
i
n
g
_
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
 
p
r
o
p
e
r
t
y
_
a
i
r
p
o
r
t
s
 
p
r
o
p
e
r
t
y
_
o
t
h
e
r
t
r
a
n
s
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
y
_
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
 
Â
»
.
 
A
j
o
u
t
e
r
 
p
l
u
s
 
d
'
e
n
t
r
Ã
©
e
s
 
e
n
 
a
j
o
u
t
a
n
t
 
l
e
u
r
s
 
n
o
m
s
,
 
s
Ã
©
p
a
r
Ã
©
s
 
p
a
r
 
u
n
 
e
s
p
a
c
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
Ã
©
t
a
i
l
s
 
d
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
d
a
n
s
 
l
e
s
 
o
n
g
l
e
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
D
Ã
©
f
i
n
i
s
s
e
z
 
c
e
t
t
e
 
o
p
t
i
o
n
 
p
o
u
r
 
a
f
f
i
c
h
e
r
 
l
e
s
 
d
Ã
©
t
a
i
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
r
i
Ã
©
t
Ã
©
 
d
a
n
s
 
l
e
s
 
o
n
g
l
e
t
s
.
 
R
Ã
©
g
l
e
z
-
l
e
 
s
u
r
 
n
o
n
 
p
o
u
r
 
l
e
u
r
 
m
o
n
t
r
e
r
 
s
a
n
s
 
o
n
g
l
e
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
 
"
J
o
o
m
l
a
 
3
 
c
o
m
p
r
e
n
d
 
u
n
 
c
a
d
r
e
 
Â
«
 
b
o
o
t
s
t
r
a
p
 
Â
»
 
d
e
 
T
w
i
t
t
e
r
 
p
a
r
 
d
Ã
©
f
a
u
t
,
 
e
t
 
J
o
m
r
e
s
 
a
 
m
o
d
Ã
¨
l
e
s
 
e
t
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
s
 
q
u
i
 
u
t
i
l
i
s
e
r
o
n
t
 
c
e
s
 
m
o
d
Ã
¨
l
e
s
.
 
P
a
r
 
d
Ã
©
f
a
u
t
,
 
s
i
 
v
o
u
s
 
n
'
a
v
e
z
 
p
a
s
 
J
o
m
r
e
s
 
c
e
s
 
c
o
m
m
u
t
a
t
e
u
r
s
 
s
o
n
t
 
r
Ã
©
g
l
Ã
©
s
 
s
u
r
 
J
o
o
m
l
a
 
3
 
O
u
i
,
 
m
a
i
s
 
v
o
u
s
 
p
o
u
v
e
z
 
l
e
s
 
d
Ã
©
f
i
n
i
r
 
s
u
r
 
n
o
n
 
s
i
 
v
o
u
s
 
l
e
 
s
o
u
h
a
i
t
e
z
 
(
n
o
n
 
r
e
c
o
m
m
a
n
d
Ã
©
)
.
 
S
i
 
v
o
u
s
 
e
x
Ã
©
c
u
t
e
z
 
u
n
e
 
v
e
r
s
i
o
n
 
d
e
 
J
o
o
m
l
a
 
i
n
f
Ã
©
r
i
e
u
r
 
Ã
 
 
3
 
J
o
o
m
l
a
,
 
v
o
u
s
 
p
o
u
v
e
z
 
t
o
u
j
o
u
r
s
 
o
p
t
e
r
 
p
o
u
r
 
u
t
i
l
i
s
e
r
 
l
e
s
 
m
o
d
Ã
¨
l
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
t
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
,
 
m
a
i
s
 
p
a
r
 
d
Ã
©
f
a
u
t
,
 
q
u
e
 
c
e
s
 
o
p
t
i
o
n
s
 
s
o
n
t
 
l
a
 
v
a
l
e
u
r
 
N
O
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
s
e
z
 
d
e
s
 
m
o
d
Ã
¨
l
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
a
n
s
 
l
e
 
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
V
o
i
c
i
 
q
u
e
l
q
u
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
,
 
q
u
e
 
v
o
u
s
 
v
o
u
d
r
e
z
 
p
e
u
t
-
Ã
ª
t
r
e
 
e
n
v
i
s
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
Ã
©
t
e
c
t
i
o
n
 
d
u
 
p
a
y
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
 
"
L
e
 
s
y
s
t
Ã
¨
m
e
 
e
s
s
a
i
e
 
d
e
 
d
Ã
©
t
e
c
t
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
q
u
e
m
e
n
t
 
l
e
s
 
p
a
y
s
 
d
e
 
l
'
i
n
v
i
t
Ã
©
.
 
V
o
u
s
 
p
o
u
v
e
z
 
d
Ã
©
f
i
n
i
r
 
c
e
t
t
e
 
o
p
t
i
o
n
 
s
u
r
 
n
o
n
 
e
t
 
d
Ã
©
f
i
n
i
r
 
l
e
 
p
a
y
s
 
q
u
e
 
v
o
u
s
 
p
r
Ã
©
f
Ã
©
r
e
z
 
p
o
u
r
 
a
p
p
a
r
a
Ã
®
t
r
e
 
d
a
n
s
 
l
e
 
f
o
r
m
u
l
a
i
r
e
 
d
e
 
r
Ã
©
s
e
r
v
a
t
i
o
n
,
 
d
a
n
s
 
l
'
o
p
t
i
o
n
 
s
u
i
v
a
n
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
u
r
 
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
A
i
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
M
i
s
e
 
e
n
 
r
o
u
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
Ã
´
l
e
 
d
'
a
c
c
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
O
u
t
i
l
s
 
d
e
 
d
Ã
©
v
e
l
o
p
p
e
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
T
r
a
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
 
'
G
Ã
©
n
Ã
©
r
a
t
i
o
n
 
d
e
 
r
e
v
e
n
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
S
t
r
u
c
t
u
r
e
 
d
u
 
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
M
y
 
A
c
c
o
u
n
t
 
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
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
s
 
d
u
 
p
o
r
t
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
i
o
n
n
a
i
r
e
 
d
e
 
p
l
u
g
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
I
n
t
Ã
©
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
R
a
p
p
o
r
t
s
 
e
t
 
s
t
a
t
i
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
A
i
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
s
e
s
 
Ã
 
 
n
i
v
e
a
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
M
o
d
e
s
 
d
e
 
p
a
i
e
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
 
p
a
r
 
d
Ã
©
f
a
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
C
e
l
a
 
s
'
a
p
p
l
i
q
u
e
 
u
n
i
q
u
e
m
e
n
t
 
a
u
x
 
n
o
u
v
e
a
u
x
 
t
a
r
i
f
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
n
Ã
©
e
s
 
Ã
 
 
v
o
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
Ã
©
f
i
n
i
t
 
l
e
 
n
o
m
b
r
e
 
d
'
a
n
n
Ã
©
e
s
 
Ã
 
 
a
f
f
i
c
h
e
r
 
l
o
r
s
q
u
e
 
v
o
u
s
 
m
o
d
i
f
i
e
z
 
u
n
 
t
y
p
e
 
d
e
 
t
a
r
i
f
"
)
;

j
r
_
d
e
f
i
n
e
(
'
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
D
Ã
©
t
a
i
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
C
o
n
n
e
x
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
Ã
©
c
o
n
n
e
x
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
R
e
c
h
e
r
c
h
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
T
a
b
l
e
a
u
 
d
e
 
b
o
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
R
Ã
©
s
e
r
v
a
t
i
o
n
/
I
n
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
Ã
©
'
)
;

j
r
_
d
e
f
i
n
e
(
'
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
P
a
r
a
m
Ã
¨
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
D
i
v
e
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
M
o
d
i
f
i
e
r
 
l
e
 
p
a
y
s
'
)
;

j
r
_
d
e
f
i
n
e
(
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
I
d
 
d
e
 
p
a
y
s
'
)
;

j
r
_
d
e
f
i
n
e
(
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
e
 
d
e
 
p
a
y
s
'
)
;

j
r
_
d
e
f
i
n
e
(
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
 
p
a
y
s
'
)
;

j
r
_
d
e
f
i
n
e
(
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
M
o
d
i
f
i
e
r
 
l
e
s
 
r
Ã
©
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
I
d
 
d
e
 
r
Ã
©
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
e
 
d
e
s
 
p
a
y
s
'
)
;

j
r
_
d
e
f
i
n
e
(
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
 
d
e
 
r
Ã
©
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
i
s
t
e
 
d
e
s
 
p
a
y
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
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
i
s
t
e
 
d
e
s
 
r
Ã
©
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
e
r
 
l
e
s
 
d
Ã
©
f
i
n
i
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
C
e
t
t
e
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
 
v
o
u
s
 
p
e
r
m
e
t
 
d
'
e
x
p
o
r
t
e
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
t
i
o
n
s
 
q
u
i
 
o
n
t
 
Ã
©
t
Ã
©
 
c
o
n
s
t
r
u
i
t
e
s
 
Ã
 
 
l
'
a
i
d
e
 
d
e
 
l
a
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
 
d
e
 
t
r
a
d
u
c
t
i
o
n
 
d
e
 
l
a
n
g
u
e
.
 
I
l
 
s
'
a
c
c
u
m
u
l
e
 
d
a
n
s
 
u
n
 
c
h
a
m
p
 
d
e
 
t
e
x
t
e
 
a
v
e
c
 
t
o
u
t
e
s
 
l
e
s
 
d
o
n
n
Ã
©
e
s
 
n
Ã
©
c
e
s
s
a
i
r
e
s
 
Ã
 
 
l
a
 
c
o
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
 
d
'
u
n
 
n
o
u
v
e
a
u
 
f
i
c
h
i
e
r
 
d
e
 
l
a
n
g
u
e
,
 
d
e
 
t
o
u
t
 
c
e
 
q
u
e
 
v
o
u
s
 
d
e
v
e
z
 
f
a
i
r
e
 
e
s
t
 
d
e
 
c
o
p
i
e
r
 
e
t
 
c
o
l
l
e
r
 
c
e
t
t
e
 
s
o
r
t
i
e
 
d
a
n
s
 
u
n
 
n
o
u
v
e
a
u
 
f
i
c
h
i
e
r
 
d
e
 
l
a
n
g
u
e
 
q
u
e
 
v
o
u
s
 
p
o
u
v
e
z
 
m
e
t
t
r
e
 
s
u
r
 
u
n
 
n
o
u
v
e
a
u
 
s
e
r
v
e
u
r
 
d
e
 
b
a
s
e
 
d
e
 
J
o
m
r
e
s
,
 
e
n
 
a
r
r
i
Ã
¨
r
e
 
o
u
 
s
i
 
v
o
u
s
 
v
o
u
l
e
z
 
c
o
n
t
r
i
b
u
e
r
 
Ã
 
 
l
a
 
c
o
m
m
u
n
a
u
t
Ã
©
 
d
e
 
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
D
Ã
©
f
i
n
i
t
i
o
n
 
d
e
 
p
a
r
a
m
Ã
¨
t
r
e
s
 
r
Ã
©
g
i
o
n
a
u
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
 
'
T
r
a
d
u
i
r
e
 
l
e
s
 
c
h
a
Ã
®
n
e
s
 
d
u
 
f
i
c
h
i
e
r
 
l
a
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
e
u
r
,
 
l
'
u
t
i
l
i
s
a
t
e
u
r
 
n
'
e
s
t
 
p
a
s
 
u
n
 
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
 
a
u
 
s
e
i
n
 
d
e
 
J
o
m
r
e
s
,
 
v
o
u
s
 
n
\
'
Ã
ª
t
e
s
 
p
a
s
 
e
n
 
m
e
s
u
r
e
 
d
'
u
t
i
l
i
s
e
r
 
c
e
t
t
e
 
f
o
n
c
t
i
o
n
 
j
u
s
q
u
'
Ã
 
 
c
e
 
q
u
e
 
v
o
u
s
 
a
y
e
z
 
m
o
d
i
f
i
e
r
 
l
e
/
l
e
s
 
p
r
o
f
i
l
s
 
p
o
u
r
 
Ã
ª
t
r
e
 
a
u
s
s
i
 
b
i
e
n
 
u
n
 
g
e
s
t
i
o
n
n
a
i
r
e
 
e
t
/
o
u
 
u
n
 
S
u
p
e
r
 
g
e
s
t
i
o
n
n
a
i
r
e
.
 
I
l
 
s
'
a
g
i
t
 
d
'
u
n
e
 
f
o
n
c
t
i
o
n
n
a
l
i
t
Ã
©
 
d
e
 
s
Ã
©
c
u
r
i
t
Ã
©
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
P
r
Ã
©
s
e
n
t
a
t
i
o
n
 
d
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
:
 
l
a
y
o
u
t
 
p
a
r
 
p
a
r
 
d
Ã
©
f
a
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
S
Ã
©
j
o
u
r
 
p
o
u
r
 
u
n
 
m
i
n
i
m
u
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
 
n
u
i
t
s
 
p
o
u
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
Ã
©
t
a
i
l
s
 
d
e
 
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
L
i
s
t
e
s
 
d
'
a
g
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
p
r
o
u
v
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
q
u
e
m
e
n
t
 
l
e
s
 
n
o
u
v
e
l
l
e
s
 
p
r
o
p
r
i
Ã
©
t
Ã
©
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
 
v
o
u
s
 
d
Ã
©
f
i
n
i
s
s
e
z
 
c
e
t
t
e
 
o
p
t
i
o
n
 
s
u
r
 
n
o
n
,
 
v
o
u
s
 
d
e
v
r
e
z
 
a
p
p
r
o
u
v
e
r
 
m
a
n
u
e
l
l
e
m
e
n
t
 
l
e
s
 
n
o
u
v
e
l
l
e
s
 
p
r
o
p
r
i
Ã
©
t
Ã
©
s
.
 
J
u
s
q
u
'
Ã
 
 
c
e
 
q
u
'
u
n
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
a
 
Ã
©
t
Ã
©
 
a
p
p
r
o
u
v
Ã
©
e
;
 
e
l
l
e
 
n
e
 
p
e
u
t
 
Ã
ª
t
r
e
 
p
u
b
l
i
Ã
©
e
 
p
a
r
 
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
t
e
u
r
 
d
e
 
b
i
e
n
s
 
s
e
u
l
e
m
e
n
t
 
p
a
r
 
u
n
 
S
u
p
e
r
A
d
m
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
p
r
o
b
a
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
 
"
C
e
t
t
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
n
'
a
 
p
a
s
 
e
n
c
o
r
e
 
Ã
©
t
Ã
©
 
a
p
p
r
o
u
v
Ã
©
e
.
 
D
Ã
¨
s
 
q
u
'
e
l
l
e
 
s
e
r
a
 
a
p
p
r
o
u
v
Ã
©
e
,
 
v
o
u
s
 
s
e
r
e
z
 
e
n
 
m
e
s
u
r
e
 
d
e
 
l
a
 
p
u
b
l
i
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
 
"
D
Ã
©
s
o
l
Ã
©
,
 
v
o
u
s
 
n
e
 
p
o
u
v
e
z
 
p
a
s
 
p
u
b
l
i
e
r
 
c
e
t
t
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
c
a
r
 
e
l
l
e
 
n
'
a
 
p
a
s
 
e
n
c
o
r
e
 
Ã
©
t
Ã
©
 
a
p
p
r
o
u
v
Ã
©
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
e
 
n
o
u
v
e
l
l
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
r
e
q
u
i
e
r
t
 
u
n
e
 
a
p
p
r
o
b
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
U
n
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
a
 
Ã
©
t
Ã
©
 
a
j
o
u
t
Ã
©
e
 
a
u
 
s
y
s
t
Ã
¨
m
e
 
e
t
 
r
e
q
u
i
e
r
t
 
v
o
t
r
e
 
a
p
p
r
o
b
a
t
i
o
n
.
 
C
l
i
q
u
e
z
 
s
u
r
 
l
e
 
l
i
e
n
 
p
o
u
r
 
a
f
f
i
c
h
e
r
 
l
e
s
 
p
r
o
p
r
i
Ã
©
t
Ã
©
s
 
e
n
 
a
t
t
e
n
t
e
 
d
a
n
s
 
l
a
 
l
i
s
t
e
 
d
'
a
p
p
r
o
b
a
t
i
o
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
V
o
t
r
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
a
 
Ã
©
t
Ã
©
 
a
p
p
r
o
u
v
Ã
©
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
Ã
©
l
i
c
i
t
a
t
i
o
n
s
,
 
v
o
t
r
e
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
a
 
Ã
©
t
Ã
©
 
a
p
p
r
o
u
v
Ã
©
e
,
 
v
e
u
i
l
l
e
z
 
c
l
i
q
u
e
r
 
s
u
r
 
l
e
 
l
i
e
n
 
s
u
i
v
a
n
t
 
p
o
u
r
 
a
f
f
i
c
h
e
r
 
l
e
 
p
a
n
n
e
a
u
 
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
t
i
o
n
 
d
e
 
l
a
 
p
r
o
p
r
i
Ã
©
t
Ã
©
 
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
L
e
s
 
n
o
m
s
 
d
e
 
r
Ã
©
g
i
o
n
 
s
o
n
t
 
t
r
a
d
u
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
a
u
f
 
s
i
 
v
o
u
s
 
u
t
i
l
i
s
e
z
 
u
n
 
s
e
r
v
e
u
r
 
t
r
Ã
¨
s
 
r
a
p
i
d
e
,
 
q
u
'
i
l
 
e
s
t
 
c
o
n
s
e
i
l
l
Ã
©
 
d
e
 
l
a
i
s
s
e
r
 
c
e
t
 
o
p
t
i
o
n
 
s
u
r
 
N
O
N
.
 
E
n
 
r
a
i
s
o
n
 
d
u
 
g
r
a
n
d
 
n
o
m
b
r
e
 
d
e
 
n
o
m
s
 
d
e
 
r
Ã
©
g
i
o
n
,
 
l
a
 
t
r
a
d
u
c
t
i
o
n
 
d
e
 
n
o
m
s
 
d
e
 
r
Ã
©
g
i
o
n
 
u
t
i
l
i
s
e
 
b
e
a
u
c
o
u
p
 
d
e
 
m
Ã
©
m
o
i
r
e
;
 
c
e
 
q
u
i
 
p
e
u
t
 
r
a
l
e
n
t
i
r
 
l
e
 
r
Ã
©
s
u
l
t
a
t
 
d
e
 
v
o
t
r
e
 
r
e
c
h
e
r
c
h
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
 
"
L
i
v
r
e
 
d
'
&
e
a
c
u
t
e
;
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
 
'
D
Ã
©
s
o
l
Ã
©
,
 
c
e
t
t
e
 
a
d
r
e
s
s
e
 
e
-
m
a
i
l
 
e
s
t
 
d
Ã
©
j
Ã
 
 
u
t
i
l
i
s
Ã
©
e
.
 
S
i
 
i
l
 
s
\
'
a
g
i
t
 
d
e
 
v
o
t
r
e
 
a
d
r
e
s
s
e
 
d
e
 
c
o
u
r
r
i
e
l
,
 
v
e
u
i
l
l
e
z
 
v
o
u
s
 
a
s
s
u
r
e
r
 
q
u
e
 
v
o
u
s
 
a
v
e
z
 
c
o
n
n
e
c
t
Ã
©
 
a
v
a
n
t
 
d
\
'
e
s
s
a
y
e
r
 
d
e
 
r
Ã
©
s
e
r
v
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
T
a
p
 
t
o
 
c
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
e
w
 
r
e
v
i
e
w
 
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
A
 
n
e
w
 
r
e
v
i
e
w
 
h
a
s
 
b
e
e
n
 
l
e
f
t
 
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
e
w
 
R
e
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
A
 
r
e
v
i
e
w
 
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
 
'
)
;

j
r
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
A
u
c
u
n
e
 
d
o
n
n
Ã
©
e
 
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
a
n
s
 
l
e
 
t
a
b
l
e
a
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
 
"
A
f
f
i
c
h
a
g
e
 
d
e
 
l
'
&
e
a
c
u
t
e
;
l
e
m
e
n
t
 
_
S
T
A
R
T
_
 
&
a
g
r
a
v
e
;
 
_
E
N
D
_
 
s
u
r
 
_
T
O
T
A
L
_
 
&
e
a
c
u
t
e
;
l
&
e
a
c
u
t
e
;
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
 
"
A
f
f
i
c
h
a
g
e
 
d
e
 
l
'
&
e
a
c
u
t
e
;
l
e
m
e
n
t
 
0
 
&
a
g
r
a
v
e
;
 
0
 
s
u
r
 
0
 
&
e
a
c
u
t
e
;
l
&
e
a
c
u
t
e
;
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
&
e
a
c
u
t
e
;
 
d
e
 
_
M
A
X
_
 
&
e
a
c
u
t
e
;
l
&
e
a
c
u
t
e
;
m
e
n
t
s
 
a
u
 
t
o
t
a
l
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
'
)
;

j
r
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
A
f
f
i
c
h
e
r
 
_
M
E
N
U
_
 
&
e
a
c
u
t
e
;
l
&
e
a
c
u
t
e
;
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
C
h
a
r
g
e
m
e
n
t
 
e
n
 
c
o
u
r
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
T
r
a
i
t
e
m
e
n
t
 
e
n
 
c
o
u
r
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
R
e
c
h
e
r
c
h
e
r
&
n
b
s
p
;
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
 
'
A
u
c
u
n
 
&
e
a
c
u
t
e
;
l
&
e
a
c
u
t
e
;
m
e
n
t
 
&
a
g
r
a
v
e
;
 
a
f
f
i
c
h
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
e
m
i
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
D
e
r
n
i
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
N
E
X
T
'
,
 
'
S
u
i
v
a
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
P
r
&
e
a
c
u
t
e
;
c
&
e
a
c
u
t
e
;
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
:
 
a
c
t
i
v
e
r
 
p
o
u
r
 
t
r
i
e
r
 
l
a
 
c
o
l
o
n
n
e
 
p
a
r
 
o
r
d
r
e
 
c
r
o
i
s
s
a
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
:
 
a
c
t
i
v
e
r
 
p
o
u
r
 
t
r
i
e
r
 
l
a
 
c
o
l
o
n
n
e
 
p
a
r
 
o
r
d
r
e
 
d
Ã
©
c
r
o
i
s
s
a
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

