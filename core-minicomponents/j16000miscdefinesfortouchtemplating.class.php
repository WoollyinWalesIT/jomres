
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


c
l
a
s
s
 
j
1
6
0
0
0
m
i
s
c
d
e
f
i
n
e
s
f
o
r
t
o
u
c
h
t
e
m
p
l
a
t
i
n
g

{

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
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
 
w
i
t
h
 
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
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
$
M
i
n
i
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
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
M
i
n
i
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
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
t
r
u
e
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
 
O
n
 
i
t
'
s
 
o
w
n
,
 
t
h
i
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
 
d
o
e
s
n
'
t
 
d
o
 
a
n
y
t
h
i
n
g
.
 
I
t
'
s
 
a
 
p
l
a
c
e
 
h
o
l
d
e
r
 
f
o
r
 
d
e
f
i
n
i
t
i
o
n
s
 
t
h
a
t
 
d
o
n
'
t
 
h
a
v
e
 
a
 
h
o
m
e
 
i
n
 
a
n
y
 
o
t
h
e
r
 
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

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
t
o
u
c
h
_
t
e
m
p
l
a
t
e
_
l
a
n
g
u
a
g
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
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
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
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
_
J
O
M
R
E
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
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
_
J
O
M
R
E
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
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
_
J
O
M
R
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
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
_
J
O
M
R
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
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
_
J
O
M
R
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
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
_
J
O
M
R
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
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
_
J
O
M
R
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
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
_
J
O
M
R
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
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
_
J
O
M
R
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
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
_
J
O
M
R
E
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
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
_
J
O
M
R
E
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
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
_
J
O
M
R
E
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
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
_
J
O
M
R
E
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
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
_
J
O
M
R
E
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
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
_
J
O
M
R
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
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
_
J
O
M
R
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
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
_
J
O
M
R
E
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
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
_
J
O
M
R
E
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
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
_
J
O
M
R
E
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
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
_
J
O
M
R
E
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
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
_
J
O
M
R
E
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
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
_
J
O
M
R
E
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
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
_
J
O
M
R
E
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
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
_
J
O
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
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
_
J
O
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
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
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
_
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
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
_
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
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
_
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
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
_
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
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
_
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
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
_
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
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
)
;


 
 
 
 
 
 
 
 
/
/
$
o
u
t
p
u
t
[
]
	
	
=
 
j
r
_
g
e
t
t
e
x
t
(
'
C
O
M
M
O
N
_
F
U
L
L
S
C
R
E
E
N
V
I
E
W
'
,
C
O
M
M
O
N
_
F
U
L
L
S
C
R
E
E
N
V
I
E
W
)
;

 
 
 
 
 
 
 
 
/
/
$
o
u
t
p
u
t
[
]
	
	
=
 
j
r
_
g
e
t
t
e
x
t
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
O
R
M
A
L
V
I
E
W
'
,
C
O
M
M
O
N
_
N
O
R
M
A
L
V
I
E
W
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
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
)
;


 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
o
u
t
p
u
t
 
a
s
 
$
o
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
o
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
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
 
e
v
e
r
y
 
E
v
e
n
t
/
M
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

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
R
e
t
V
a
l
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
}

}

