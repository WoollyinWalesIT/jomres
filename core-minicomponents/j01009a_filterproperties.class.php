
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
1
0
0
9
a
_
f
i
l
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
d
a
t
a
_
o
n
l
y
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
i
f
 
(
d
e
f
i
n
e
d
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
O
H
T
M
L
'
)
 
&
&
 
J
O
M
R
E
S
_
N
O
H
T
M
L
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
a
_
o
n
l
y
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
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
[
 
'
d
a
t
a
o
n
l
y
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
a
_
o
n
l
y
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
s
_
u
i
d
s
 
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
s
_
u
i
d
s
'
 
]
;


 
 
 
 
 
 
 
 
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
_
R
E
Q
U
E
S
T
[
 
'
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
s
o
r
t
b
y
'
 
]
)
 
&
&
 
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
s
o
r
t
b
y
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
o
r
t
i
d
 
=
 
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
s
o
r
t
b
y
'
 
]
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
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
[
 
'
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
s
o
r
t
b
y
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
o
r
t
i
d
 
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
s
o
r
t
b
y
'
,
 
1
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
o
r
t
i
d
 
=
 
$
j
r
C
o
n
f
i
g
[
 
'
s
e
a
r
c
h
_
o
r
d
e
r
_
d
e
f
a
u
l
t
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
s
o
r
t
b
y
'
 
]
 
=
 
$
s
o
r
t
i
d
;


 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
s
o
r
t
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
#
#
#
#
#
#
#
#
#
#
#
#
#
#
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
a
s
e
 
'
1
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
s
_
u
i
d
s
 
=
 
$
p
r
o
p
e
r
t
y
s
_
u
i
d
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
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
#
#
#
#
#
#
#
#
#
#
#
#
#
#
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
a
s
e
 
'
2
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
p
r
o
p
e
r
t
y
s
_
u
i
d
,
 
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
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
s
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
s
_
u
i
d
 
I
N
 
(
'
.
j
o
m
r
e
s
_
i
m
p
l
o
d
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
s
_
u
i
d
s
)
.
'
)
 
O
R
D
E
R
 
B
Y
 
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
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
i
d
s
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
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
u
i
d
s
 
a
s
 
$
u
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
s
_
u
i
d
s
[
 
]
 
=
 
$
u
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
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
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
#
#
#
#
#
#
#
#
#
#
#
#
#
#
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
a
s
e
 
'
3
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
p
r
o
p
e
r
t
y
s
_
u
i
d
,
 
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
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
s
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
s
_
u
i
d
 
I
N
 
(
'
.
j
o
m
r
e
s
_
i
m
p
l
o
d
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
s
_
u
i
d
s
)
.
'
)
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
g
i
o
n
s
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
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
r
e
g
i
o
n
s
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
n
u
m
e
r
i
c
(
$
r
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
r
e
g
i
o
n
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
j
o
m
r
e
s
_
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
R
E
G
I
O
N
S
_
'
.
$
r
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
 
$
j
o
m
r
e
s
_
r
e
g
i
o
n
s
-
>
g
e
t
_
r
e
g
i
o
n
_
n
a
m
e
(
$
r
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
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
O
N
'
,
 
$
r
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
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
u
n
c
t
i
o
n
 
c
m
p
(
$
a
,
 
$
b
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
t
r
c
m
p
(
$
a
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
 
$
b
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
s
o
r
t
(
$
r
e
g
i
o
n
s
,
 
'
c
m
p
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
r
e
g
i
o
n
s
 
a
s
 
$
u
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
s
_
u
i
d
s
[
 
]
 
=
 
$
u
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
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
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
#
#
#
#
#
#
#
#
#
#
#
#
#
#
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
a
s
e
 
'
4
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
p
r
o
p
e
r
t
y
s
_
u
i
d
,
 
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
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
s
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
s
_
u
i
d
 
I
N
 
(
'
.
j
o
m
r
e
s
_
i
m
p
l
o
d
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
s
_
u
i
d
s
)
.
'
)
 
O
R
D
E
R
 
B
Y
 
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
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
i
d
s
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
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
u
i
d
s
 
a
s
 
$
u
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
s
_
u
i
d
s
[
 
]
 
=
 
$
u
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
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
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
#
#
#
#
#
#
#
#
#
#
#
#
#
#
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
a
s
e
 
'
5
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
p
r
o
p
e
r
t
y
s
_
u
i
d
,
 
s
t
a
r
s
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
s
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
s
_
u
i
d
 
I
N
 
(
'
.
j
o
m
r
e
s
_
i
m
p
l
o
d
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
s
_
u
i
d
s
)
.
'
)
 
O
R
D
E
R
 
B
Y
 
s
t
a
r
s
 
D
E
S
C
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
i
d
s
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
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
u
i
d
s
 
a
s
 
$
u
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
s
_
u
i
d
s
[
 
]
 
=
 
$
u
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
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
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
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
M
a
n
y
 
t
h
a
n
k
s
 
D
e
r
e
k
 
B
 
f
r
o
m
 
A
d
o
n
i
s
 
M
e
d
i
a
 
L
t
d

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
6
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
p
.
p
r
o
p
e
r
t
y
s
_
u
i
d
,
 
r
r
.
r
o
o
m
r
a
t
e
p
e
r
d
a
y
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
s
 
A
S
 
p
 
L
E
F
T
 
J
O
I
N
 
#
_
_
j
o
m
r
e
s
_
r
a
t
e
s
 
A
S
 
r
r
 
O
N
 
p
.
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
 
r
r
.
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
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
s
_
u
i
d
 
I
N
 
(
'
.
j
o
m
r
e
s
_
i
m
p
l
o
d
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
s
_
u
i
d
s
)
.
'
)
 
O
R
D
E
R
 
B
Y
 
r
r
.
r
o
o
m
r
a
t
e
p
e
r
d
a
y
 
A
S
C
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
i
d
s
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
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
u
i
d
s
 
a
s
 
$
u
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
i
f
 
(
 
(
f
l
o
a
t
)
$
u
-
>
r
o
o
m
r
a
t
e
p
e
r
d
a
y
 
>
 
0
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
s
_
u
i
d
s
[
 
]
 
=
 
$
u
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
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
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
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
M
a
n
y
 
t
h
a
n
k
s
 
D
e
r
e
k
 
B
 
f
r
o
m
 
A
d
o
n
i
s
 
M
e
d
i
a
 
L
t
d

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
7
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
p
.
p
r
o
p
e
r
t
y
s
_
u
i
d
,
 
r
r
.
r
o
o
m
r
a
t
e
p
e
r
d
a
y
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
s
 
A
S
 
p
 
L
E
F
T
 
J
O
I
N
 
#
_
_
j
o
m
r
e
s
_
r
a
t
e
s
 
A
S
 
r
r
 
O
N
 
p
.
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
 
r
r
.
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
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
s
_
u
i
d
 
I
N
 
(
'
.
j
o
m
r
e
s
_
i
m
p
l
o
d
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
s
_
u
i
d
s
)
.
'
)
 
O
R
D
E
R
 
B
Y
 
r
r
.
r
o
o
m
r
a
t
e
p
e
r
d
a
y
 
D
E
S
C
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
i
d
s
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
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
u
i
d
s
 
a
s
 
$
u
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
s
_
u
i
d
s
[
 
]
 
=
 
$
u
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
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
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
#
#
#
#
#
#
#
#
#
#
#
#
#
#
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
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
s
_
u
i
d
s
 
=
 
$
p
r
o
p
e
r
t
y
s
_
u
i
d
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
w
e
`
l
l
 
s
e
t
 
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
i
d
s
 
a
r
r
a
y
 
t
o
 
s
h
o
w
t
i
m
e
 
s
o
 
w
e
 
c
a
n
 
f
u
r
t
h
e
r
 
f
i
l
t
e
r
 
t
h
e
m
 
i
f
 
n
e
c
e
s
s
a
r
y
 
i
n
 
o
t
h
e
r
 
j
0
1
0
0
9
 
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

 
 
 
 
 
 
 
 
s
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
f
i
l
t
e
r
e
d
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
u
i
d
s
'
,
 
$
t
h
i
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
s
_
u
i
d
s
)
;


 
 
 
 
 
 
 
 
$
s
o
r
t
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
s
o
r
t
A
r
r
a
y
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
1
'
,
 
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
)
;

 
 
 
 
 
 
 
 
$
s
o
r
t
A
r
r
a
y
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
2
'
,
 
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
)
;

 
 
 
 
 
 
 
 
$
s
o
r
t
A
r
r
a
y
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
3
'
,
 
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
)
;

 
 
 
 
 
 
 
 
$
s
o
r
t
A
r
r
a
y
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
4
'
,
 
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
)
;

 
 
 
 
 
 
 
 
$
s
o
r
t
A
r
r
a
y
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
5
'
,
 
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
)
;

 
 
 
 
 
 
 
 
/
/
$
s
o
r
t
A
r
r
a
y
[
]
=
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
"
6
"
,
 
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
)
;

 
 
 
 
 
 
 
 
/
/
$
s
o
r
t
A
r
r
a
y
[
]
=
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
"
7
"
,
 
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
)
;


 
 
 
 
 
 
 
 
$
o
r
d
e
r
[
 
'
H
O
R
D
E
R
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
O
R
D
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
O
R
D
E
R
'
)
;


 
 
 
 
 
 
 
 
$
o
r
d
e
r
[
 
'
O
R
D
E
R
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
s
o
r
t
A
r
r
a
y
,
 
'
s
o
r
t
b
y
'
,
 
'
o
n
c
h
a
n
g
e
=
"
g
e
n
e
r
i
c
_
r
e
l
o
a
d
(
\
'
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
s
o
r
t
b
y
\
'
,
t
h
i
s
.
v
a
l
u
e
)
;
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
s
o
r
t
i
d
)
;

 
 
 
 
 
 
 
 
$
s
o
r
t
o
r
d
e
r
 
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
s
o
r
t
o
r
d
e
r
[
 
]
 
=
 
$
o
r
d
e
r
;


 
 
 
 
 
 
 
 
i
f
 
(
!
$
d
a
t
a
_
o
n
l
y
 
&
&
 
$
j
r
C
o
n
f
i
g
[
 
'
s
h
o
w
_
s
e
a
r
c
h
_
o
r
d
e
r
'
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
F
R
O
N
T
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
o
r
d
e
r
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
s
o
r
t
_
o
r
d
e
r
'
,
 
$
s
o
r
t
o
r
d
e
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
s
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
o
r
d
e
r
_
d
r
o
p
d
o
w
n
'
,
 
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
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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
 
$
t
h
i
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
s
_
u
i
d
s
;

 
 
 
 
}

}

