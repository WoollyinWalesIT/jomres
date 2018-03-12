
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


c
l
a
s
s
 
j
0
4
9
0
1
e
m
a
i
l
_
p
r
o
p
e
r
t
y
_
w
e
l
c
o
m
e
_
m
e
s
s
a
g
e

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
$
c
o
m
p
o
n
e
n
t
A
r
g
s
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
 
f
a
l
s
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

 
 
 
 
 
 
 
 
$
e
P
o
i
n
t
F
i
l
e
p
a
t
h
 
=
 
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
e
P
o
i
n
t
F
i
l
e
p
a
t
h
'
)
;


 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
'
p
r
o
p
e
r
t
y
_
u
i
d
'
]
;


 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
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
t
a
i
l
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
b
a
s
i
c
_
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
t
a
i
l
s
'
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
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
t
a
i
l
s
-
>
g
a
t
h
e
r
_
d
a
t
a
(
$
p
r
o
p
e
r
t
y
_
u
i
d
)
;


 
 
 
 
 
 
 
 
$
p
a
g
e
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
 
f
a
l
s
e
,
 
f
a
l
s
e
)
.
'
 
'
.
$
c
u
r
r
e
n
t
_
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
t
a
i
l
s
-
>
g
e
t
_
p
r
o
p
e
r
t
y
_
n
a
m
e
(
$
p
r
o
p
e
r
t
y
_
u
i
d
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
 
f
a
l
s
e
,
 
f
a
l
s
e
)
.
'
 
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
s
i
t
e
n
a
m
e
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
 
f
a
l
s
e
,
 
f
a
l
s
e
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
 
f
a
l
s
e
,
 
f
a
l
s
e
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
'
]
 
=
 
j
o
m
r
e
s
U
R
L
(
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
N
O
S
E
F
.
'
&
t
a
s
k
=
c
p
a
n
e
l
&
t
h
i
s
P
r
o
p
e
r
t
y
=
'
.
$
p
r
o
p
e
r
t
y
_
u
i
d
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
 
f
a
l
s
e
,
 
f
a
l
s
e
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
 
f
a
l
s
e
,
 
f
a
l
s
e
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
'
]
 
=
 
g
e
t
_
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
t
a
i
l
s
_
u
r
l
(
$
p
r
o
p
e
r
t
y
_
u
i
d
,
'
n
o
s
e
f
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
 
f
a
l
s
e
,
 
f
a
l
s
e
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
 
f
a
l
s
e
,
 
f
a
l
s
e
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
 
f
a
l
s
e
,
 
f
a
l
s
e
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
 
f
a
l
s
e
,
 
f
a
l
s
e
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
'
]
 
=
 
j
o
m
r
e
s
U
R
L
(
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
N
O
S
E
F
.
'
&
t
a
s
k
=
c
o
n
t
a
c
t
o
w
n
e
r
&
p
r
o
p
e
r
t
y
_
u
i
d
=
0
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
 
f
a
l
s
e
,
 
f
a
l
s
e
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
 
f
a
l
s
e
,
 
f
a
l
s
e
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
 
f
a
l
s
e
,
 
f
a
l
s
e
)
.
'
 
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
s
i
t
e
n
a
m
e
'
)
;


 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
 
]
 
=
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
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
P
A
T
H
_
B
A
C
K
E
N
D
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
e
m
a
i
l
_
h
o
t
e
l
_
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
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
$
t
e
x
t
 
=
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;


 
 
 
 
 
 
 
 
i
f
 
(
!
j
o
m
r
e
s
M
a
i
l
e
r
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
m
a
i
l
f
r
o
m
'
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
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
t
a
i
l
s
-
>
p
r
o
p
e
r
t
y
_
n
a
m
e
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
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
t
a
i
l
s
-
>
p
r
o
p
e
r
t
y
_
e
m
a
i
l
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
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
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
x
t
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
 
=
 
1
)

 
 
 
 
 
 
 
 
 
 
 
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
F
a
i
l
u
r
e
 
i
n
 
s
e
n
d
i
n
g
 
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
 
e
m
a
i
l
 
t
o
 
a
d
m
i
n
.
 
T
a
r
g
e
t
 
a
d
d
r
e
s
s
:
 
'
.
$
s
i
t
e
_
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
[
'
p
a
y
p
a
l
e
m
a
i
l
'
]
.
'
 
S
u
b
j
e
c
t
'
.
$
b
o
o
k
i
n
g
_
e
m
a
i
l
_
d
e
t
a
i
l
s
-
>
p
a
r
s
e
d
_
e
m
a
i
l
[
'
s
u
b
j
e
c
t
'
]
.
$
b
o
o
k
i
n
g
_
e
m
a
i
l
_
d
e
t
a
i
l
s
-
>
p
a
r
s
e
d
_
e
m
a
i
l
[
'
t
e
x
t
'
]
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
s
e
n
d
A
d
m
i
n
E
m
a
i
l
(
$
c
u
r
r
e
n
t
_
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
t
a
i
l
s
-
>
p
r
o
p
e
r
t
y
_
n
a
m
e
,
 
$
t
e
x
t
)
;

 
 
 
 
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

