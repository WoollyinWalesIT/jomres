
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
0
0
0
1
2
p
a
t
h
w
a
y

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

 
 
 
 
 
 
 
 
i
f
 
(
!
t
h
i
s
_
c
m
s
_
i
s
_
j
o
o
m
l
a
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
n
u
m
b
e
r
O
f
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
I
n
S
y
s
t
e
m
 
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
n
u
m
b
e
r
O
f
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
I
n
S
y
s
t
e
m
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
A
J
A
X
C
A
L
L
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
 
W
e
 
c
a
n
'
t
 
s
h
o
w
 
t
h
e
 
p
a
t
h
w
a
y
 
i
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
 
i
s
 
e
n
a
b
l
e
d
,

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
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
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
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

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
s
e
r
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
e
d
i
t
i
n
g
_
o
n
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
s
e
r
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
e
d
i
t
i
n
g
_
o
n
'
 
]
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
s
e
r
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
e
d
i
t
i
n
g
_
o
n
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
s
i
t
e
C
o
n
f
i
g
 
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
_
s
i
t
e
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
'
)
;

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;


 
 
 
 
 
 
 
 
$
p
o
p
u
p
 
=
 
i
n
t
v
a
l
(
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
p
o
p
u
p
'
,
 
0
)
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
e
r
 
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
j
r
_
u
s
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
p
o
p
u
p
 
=
=
 
0
 
&
&
 
$
n
u
m
b
e
r
O
f
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
I
n
S
y
s
t
e
m
 
>
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
w
a
y
A
r
r
a
y
 
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
t
a
s
k
 
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
t
a
s
k
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

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
(
i
n
t
)
 
$
t
h
i
s
J
R
U
s
e
r
-
>
c
u
r
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
y
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
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
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
r
o
p
e
r
t
y
_
t
y
p
e
 
=
 
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
t
y
p
e
_
t
i
t
l
e
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
s
k
s
 
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
t
a
s
k
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
t
y
p
e
'
 
]
 
=
 
a
r
r
a
y
(
'
t
e
x
t
'
 
=
>
 
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
t
y
p
e
,
 
'
u
r
l
'
 
=
>
 
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
.
'
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
&
p
t
y
p
e
=
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
p
t
y
p
e
_
i
d
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
s
k
s
[
 
'
c
o
u
n
t
r
y
'
 
]
 
=
 
a
r
r
a
y
(
'
t
e
x
t
'
 
=
>
 
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
c
o
u
n
t
r
y
,
 
'
u
r
l
'
 
=
>
 
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
.
'
&
s
e
n
d
=
S
e
a
r
c
h
&
c
a
l
l
e
d
B
y
M
o
d
u
l
e
=
m
o
d
_
j
o
m
s
e
a
r
c
h
_
m
0
&
c
o
u
n
t
r
y
=
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
o
u
n
t
r
y
_
c
o
d
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
s
k
s
[
 
'
r
e
g
i
o
n
'
 
]
 
=
 
a
r
r
a
y
(
'
t
e
x
t
'
 
=
>
 
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
r
e
g
i
o
n
,
 
'
u
r
l
'
 
=
>
 
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
.
'
&
s
e
n
d
=
S
e
a
r
c
h
&
c
a
l
l
e
d
B
y
M
o
d
u
l
e
=
m
o
d
_
j
o
m
s
e
a
r
c
h
_
m
0
&
r
e
g
i
o
n
=
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
p
r
o
p
e
r
t
y
_
r
e
g
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
s
k
s
[
 
'
t
o
w
n
'
 
]
 
=
 
a
r
r
a
y
(
'
t
e
x
t
'
 
=
>
 
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
t
o
w
n
,
 
'
u
r
l
'
 
=
>
 
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
.
'
&
s
e
n
d
=
S
e
a
r
c
h
&
c
a
l
l
e
d
B
y
M
o
d
u
l
e
=
m
o
d
_
j
o
m
s
e
a
r
c
h
_
m
0
&
t
o
w
n
=
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
p
r
o
p
e
r
t
y
_
t
o
w
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;
 
/
/
 
C
a
n
'
t
 
s
h
o
w
 
t
h
e
 
p
a
t
h
w
a
y
 
i
f
 
t
h
e
r
e
'
s
 
n
o
 
p
r
o
p
e
r
t
y
 
u
i
d
.

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
s
k
s
[
 
'
v
i
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
'
 
]
 
=
 
a
r
r
a
y
(
'
t
e
x
t
'
 
=
>
 
s
t
r
_
r
e
p
l
a
c
e
(
'
&
#
3
9
;
'
,
 
"
'
"
,
 
g
e
t
P
r
o
p
e
r
t
y
N
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
)
,
 
'
u
r
l
'
 
=
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
s
e
f
s
a
f
e
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
s
k
s
[
 
'
s
h
o
w
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
t
a
r
i
f
f
s
'
 
]
 
=
 
a
r
r
a
y
(
'
t
e
x
t
'
 
=
>
 
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
_
J
O
M
R
E
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
)
.
'
 
'
.
s
t
r
_
r
e
p
l
a
c
e
(
'
&
#
3
9
;
'
,
 
"
'
"
,
 
g
e
t
P
r
o
p
e
r
t
y
N
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
)
,
 
'
u
r
l
'
 
=
>
 
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
.
'
&
t
a
s
k
=
s
h
o
w
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
t
a
r
i
f
f
s
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
t
a
s
k
s
[
 
'
d
o
b
o
o
k
i
n
g
'
 
]
 
=
 
a
r
r
a
y
(
'
t
e
x
t
'
 
=
>
 
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
)
,
 
'
u
r
l
'
 
=
>
 
g
e
t
_
b
o
o
k
i
n
g
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
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
s
k
s
[
 
'
s
h
o
w
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
s
l
i
d
e
s
h
o
w
'
 
]
 
=
 
a
r
r
a
y
(
'
t
e
x
t
'
 
=
>
 
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
)
,
 
'
u
r
l
'
 
=
>
 
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
.
'
&
t
a
s
k
=
s
h
o
w
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
s
l
i
d
e
s
h
o
w
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


 
 
 
 
 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
t
a
s
k
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
e
x
t
e
n
d
e
d
_
m
a
p
s
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
	
$
p
a
t
h
w
a
y
A
r
r
a
y
[
]
=
$
t
a
s
k
s
[
'
l
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
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
v
i
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
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
w
a
y
A
r
r
a
y
[
 
]
 
=
 
$
t
a
s
k
s
[
 
'
c
o
u
n
t
r
y
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
w
a
y
A
r
r
a
y
[
 
]
 
=
 
$
t
a
s
k
s
[
 
'
r
e
g
i
o
n
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
w
a
y
A
r
r
a
y
[
 
]
 
=
 
$
t
a
s
k
s
[
 
'
t
o
w
n
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
w
a
y
A
r
r
a
y
[
 
]
 
=
 
$
t
a
s
k
s
[
 
'
v
i
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
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
d
o
b
o
o
k
i
n
g
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
w
a
y
A
r
r
a
y
[
 
]
 
=
 
$
t
a
s
k
s
[
 
'
c
o
u
n
t
r
y
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
w
a
y
A
r
r
a
y
[
 
]
 
=
 
$
t
a
s
k
s
[
 
'
r
e
g
i
o
n
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
w
a
y
A
r
r
a
y
[
 
]
 
=
 
$
t
a
s
k
s
[
 
'
t
o
w
n
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
w
a
y
A
r
r
a
y
[
 
]
 
=
 
$
t
a
s
k
s
[
 
'
v
i
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
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
w
a
y
A
r
r
a
y
[
 
]
 
=
 
$
t
a
s
k
s
[
 
'
d
o
b
o
o
k
i
n
g
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
s
h
o
w
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
t
a
r
i
f
f
s
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
w
a
y
A
r
r
a
y
[
 
]
 
=
 
$
t
a
s
k
s
[
 
'
c
o
u
n
t
r
y
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
w
a
y
A
r
r
a
y
[
 
]
 
=
 
$
t
a
s
k
s
[
 
'
r
e
g
i
o
n
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
w
a
y
A
r
r
a
y
[
 
]
 
=
 
$
t
a
s
k
s
[
 
'
t
o
w
n
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
w
a
y
A
r
r
a
y
[
 
]
 
=
 
$
t
a
s
k
s
[
 
'
v
i
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
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
w
a
y
A
r
r
a
y
[
 
]
 
=
 
$
t
a
s
k
s
[
 
'
s
h
o
w
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
t
a
r
i
f
f
s
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
s
h
o
w
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
s
l
i
d
e
s
h
o
w
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
w
a
y
A
r
r
a
y
[
 
]
 
=
 
$
t
a
s
k
s
[
 
'
c
o
u
n
t
r
y
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
w
a
y
A
r
r
a
y
[
 
]
 
=
 
$
t
a
s
k
s
[
 
'
r
e
g
i
o
n
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
w
a
y
A
r
r
a
y
[
 
]
 
=
 
$
t
a
s
k
s
[
 
'
t
o
w
n
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
w
a
y
A
r
r
a
y
[
 
]
 
=
 
$
t
a
s
k
s
[
 
'
v
i
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
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
w
a
y
A
r
r
a
y
[
 
]
 
=
 
$
t
a
s
k
s
[
 
'
s
h
o
w
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
s
l
i
d
e
s
h
o
w
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
p
a
t
h
w
a
y
A
r
r
a
y
 
a
s
 
$
p
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
p
p
 
=
 
J
F
a
c
t
o
r
y
:
:
g
e
t
A
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
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
w
a
y
 
=
 
$
a
p
p
-
>
g
e
t
P
a
t
h
w
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
h
w
a
y
-
>
a
d
d
I
t
e
m
(
$
p
[
 
'
t
e
x
t
'
 
]
,
 
$
p
[
 
'
u
r
l
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}


/
*
*

 
*
 
M
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
.

 
#

 
*
 
R
e
t
u
r
n
s
 
a
n
y
 
s
e
t
t
i
n
g
s
 
t
h
e
 
t
h
e
 
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
 
w
a
n
t
s
 
t
o
 
s
e
n
d
 
b
a
c
k
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
.
 
I
n
 
a
d
d
i
t
i
o
n
 
t
o
 
b
e
i
n
g
 
r
e
t
u
r
n
e
d
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
 
t
h
e
y
 
a
r
e
 
p
u
t
 
i
n
t
o
 
a
n
 
a
r
r
a
y
 
i
n
 
t
h
e
 
m
c
H
a
n
d
l
e
r
 
o
b
j
e
c
t
 
a
s
 
e
g
.
 
$
m
c
H
a
n
d
l
e
r
-
>
m
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
D
a
t
a
[
$
e
P
o
i
n
t
]
[
$
e
N
a
m
e
]

 
*
/

 
 
 
 
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

