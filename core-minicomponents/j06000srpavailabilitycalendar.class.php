
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
6
0
0
0
s
r
p
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
 
=
 
n
u
l
l
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
m
r
C
o
n
f
i
g
 
=
 
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
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
(
)
;

 
 
 
 
 
 
 
 
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
t
h
i
s
-
>
r
e
t
V
a
l
s
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
h
o
w
l
i
n
k
s
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
$
q
u
e
r
y
S
t
r
i
n
g
 
=
 
$
_
S
E
R
V
E
R
[
 
'
Q
U
E
R
Y
_
S
T
R
I
N
G
'
 
]
;

 
 
 
 
 
 
 
 
$
q
u
e
r
y
S
t
r
i
n
g
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
&
'
,
 
$
q
u
e
r
y
S
t
r
i
n
g
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
q
u
e
r
y
S
t
r
i
n
g
A
r
r
a
y
 
a
s
 
$
q
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
e
l
e
m
e
n
t
s
[
 
]
 
=
 
s
u
b
s
t
r
(
$
q
s
,
 
s
t
r
p
o
s
(
$
q
s
,
 
'
=
'
)
 
+
 
1
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
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
,
 
$
q
u
e
r
y
e
l
e
m
e
n
t
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
h
o
w
l
i
n
k
s
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
i
f
 
(
$
t
a
s
k
 
=
=
 
'
r
e
m
o
t
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
'
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
i
d
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
 
=
 
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
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
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
 
r
o
o
m
_
u
i
d
 
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
r
o
o
m
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
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
U
i
d
 
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
,
 
1
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
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
!
i
s
s
e
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
[
 
'
r
o
o
m
U
i
d
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
r
o
o
m
_
u
i
d
 
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
r
o
o
m
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
U
i
d
 
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
,
 
1
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
o
o
m
U
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
r
o
o
m
U
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
u
s
e
r
_
c
a
n
_
v
i
e
w
_
t
h
i
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
t
h
i
s
-
>
p
o
p
 
=
 
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
;

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
p
o
p
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
p
r
o
p
e
r
t
y
_
h
e
a
d
e
r
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

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
r
e
q
u
e
s
t
e
d
D
a
t
e
 
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
r
e
q
u
e
s
t
e
d
D
a
t
e
'
 
]
;

 
 
 
 
 
 
 
 
$
r
o
o
m
_
a
v
l
_
e
n
q
u
i
r
y
 
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
r
o
o
m
_
a
v
l
_
e
n
q
u
i
r
y
'
 
]
;
 
/
/
 
T
h
i
s
 
i
s
 
p
a
s
s
e
d
 
s
o
 
t
h
a
t
 
a
n
 
M
R
P
 
c
a
n
 
u
s
e
 
t
h
e
 
S
R
P
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
f
 
w
e
'
r
e
 
r
e
q
u
e
s
t
i
n
g
 
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
 
j
u
s
t
 
o
n
e
 
r
o
o
m
.
 
I
f
 
s
o
,
 
w
e
l
l
 
e
c
h
o
 
t
h
e
 
o
u
t
p
u
t
 
n
o
w
.


 
 
 
 
 
 
 
 
$
s
h
o
w
F
u
l
l
Y
e
a
r
 
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
s
h
o
w
F
u
l
l
Y
e
a
r
'
 
]
;

 
 
 
 
 
 
 
 
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
m
r
C
o
n
f
i
g
[
 
'
C
a
l
e
n
d
a
r
M
o
n
t
h
s
T
o
S
h
o
w
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
h
o
w
F
u
l
l
Y
e
a
r
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
C
a
l
e
n
d
a
r
M
o
n
t
h
s
T
o
S
h
o
w
'
 
]
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
$
m
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
C
a
l
e
n
d
a
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
c
u
r
r
e
n
t
Y
e
a
r
 
=
 
d
a
t
e
(
'
Y
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
c
a
l
s
t
a
r
t
f
r
o
m
b
e
g
i
n
n
i
n
g
o
f
y
e
a
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
c
u
r
r
e
n
t
M
o
n
t
h
 
=
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
M
o
n
t
h
 
=
 
d
a
t
e
(
'
m
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
u
n
t
e
r
 
=
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
n
t
h
s
T
o
Y
e
a
r
E
n
d
 
=
 
1
2
 
-
 
$
c
u
r
r
e
n
t
M
o
n
t
h
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
'

	
	
	
<
c
e
n
t
e
r
>

	
	
	
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
'
<
d
i
v
 
c
l
a
s
s
=
"
w
e
l
l
"
 
s
t
y
l
e
=
"
m
a
r
g
i
n
-
b
o
t
t
o
m
:
 
1
0
p
x
;
"
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
'
<
d
i
v
 
c
l
a
s
s
=
"
u
i
-
w
i
d
g
e
t
-
c
o
n
t
e
n
t
 
u
i
-
c
o
r
n
e
r
-
a
l
l
"
 
s
t
y
l
e
=
"
m
a
r
g
i
n
-
b
o
t
t
o
m
:
 
1
0
p
x
;
"
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"

<
s
c
r
i
p
t
>


j
o
m
r
e
s
J
q
u
e
r
y
(
f
u
n
c
t
i
o
n
(
)
{

 
 
 
 
v
a
r
 
a
r
r
J
C
r
o
s
s
O
u
t
 
=
 
j
o
m
r
e
s
J
q
u
e
r
y
(
'
.
c
r
o
s
s
O
u
t
'
)
;

 
 
 
 
a
r
r
J
C
r
o
s
s
O
u
t
.
e
a
c
h
(
f
u
n
c
t
i
o
n
(
i
)
{

 
 
 
 
 
 
 
 
v
a
r
 
j
T
e
m
p
 
 
 
 
 
 
=
 
j
o
m
r
e
s
J
q
u
e
r
y
(
t
h
i
s
)
,

 
 
 
 
 
 
 
 
 
 
 
 
n
W
i
d
t
h
 
 
 
=
 
j
T
e
m
p
.
i
n
n
e
r
W
i
d
t
h
(
)
,

 
 
 
 
 
 
 
 
 
 
 
 
n
H
e
i
g
h
t
 
 
=
 
j
T
e
m
p
.
i
n
n
e
r
H
e
i
g
h
t
(
)
,

 
 
 
 
 
 
 
 
 
 
 
 
n
H
y
p
 
 
 
 
 
 
=
 
M
a
t
h
.
s
q
r
t
(
n
W
i
d
t
h
*
n
W
i
d
t
h
 
+
 
n
H
e
i
g
h
t
*
n
H
e
i
g
h
t
)
,

 
 
 
 
 
 
 
 
 
 
 
 
n
A
n
g
l
R
a
d
 
=
 
M
a
t
h
.
a
t
a
n
2
(
n
H
e
i
g
h
t
,
n
W
i
d
t
h
)
,

 
 
 
 
 
 
 
 
 
 
 
 
n
A
n
g
l
S
e
x
 
=
 
n
A
n
g
l
R
a
d
*
3
6
0
/
(
2
*
M
a
t
h
.
P
I
)
,
 
n
C
a
t
O
p
,
 
n
C
a
t
A
d
,
 
n
H
y
p
2

 
 
 
 
 
 
 
 
 
 
 
 
s
D
o
m
T
e
m
p
 
=
 
'
<
b
 
c
l
a
s
s
=
\
"
c
h
i
l
d
\
"
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
s
D
o
m
T
e
m
p
 
+
=
 
'
s
t
y
l
e
=
\
"
w
i
d
t
h
:
'
+
n
H
y
p
+
'
p
x
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
s
D
o
m
T
e
m
p
 
+
=
 
'
-
w
e
b
k
i
t
-
t
r
a
n
s
f
o
r
m
:
 
r
o
t
a
t
e
(
-
'
+
n
A
n
g
l
S
e
x
+
'
d
e
g
)
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
s
D
o
m
T
e
m
p
 
+
=
 
'
-
m
o
z
-
t
r
a
n
s
f
o
r
m
:
 
r
o
t
a
t
e
(
-
'
+
n
A
n
g
l
S
e
x
+
'
d
e
g
)
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
s
D
o
m
T
e
m
p
 
+
=
 
'
-
m
s
-
t
r
a
n
s
f
o
r
m
:
 
r
o
t
a
t
e
(
-
'
+
n
A
n
g
l
S
e
x
+
'
d
e
g
)
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
s
D
o
m
T
e
m
p
 
+
=
 
'
-
o
-
t
r
a
n
s
f
o
r
m
:
 
r
o
t
a
t
e
(
-
'
+
n
A
n
g
l
S
e
x
+
'
d
e
g
)
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
s
D
o
m
T
e
m
p
 
+
=
 
'
t
r
a
n
s
f
o
r
m
:
 
r
o
t
a
t
e
(
-
'
+
n
A
n
g
l
S
e
x
+
'
d
e
g
)
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
s
D
o
m
T
e
m
p
 
+
=
 
'
-
s
a
n
d
-
t
r
a
n
s
f
o
r
m
:
 
r
o
t
a
t
e
(
-
'
+
n
A
n
g
l
S
e
x
+
'
d
e
g
)
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
n
H
y
p
2
 
 
 
 
 
=
 
(
n
H
y
p
/
2
)
;

 
 
 
 
 
 
 
 
 
 
 
 
n
C
a
t
O
p
 
 
 
 
 
 
=
 
M
a
t
h
.
s
i
n
(
n
A
n
g
l
R
a
d
)
*
n
H
y
p
2
;

 
 
 
 
 
 
 
 
 
 
 
 
n
C
a
t
A
d
 
 
 
 
 
 
=
 
M
a
t
h
.
s
q
r
t
(
(
n
H
y
p
2
*
n
H
y
p
2
)
 
-
 
(
n
C
a
t
O
p
*
n
C
a
t
O
p
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
s
D
o
m
T
e
m
p
 
+
=
 
'
m
a
r
g
i
n
-
t
o
p
:
 
-
'
+
n
C
a
t
O
p
+
'
p
x
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
s
D
o
m
T
e
m
p
 
+
=
 
'
m
a
r
g
i
n
-
l
e
f
t
:
 
-
'
+
(
n
H
y
p
2
-
n
C
a
t
A
d
)
+
'
p
x
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
s
D
o
m
T
e
m
p
 
+
=
 
'
\
"
>
<
/
b
>
'
;

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
j
T
e
m
p
.
a
p
p
e
n
d
(
s
D
o
m
T
e
m
p
)
;

 
 
 
 
}
)
;

}
)
;


<
/
s
c
r
i
p
t
>


<
s
t
y
l
e
>


.
c
r
o
s
s
O
u
t
 
.
c
h
i
l
d
{

 
 
 
 
p
o
s
i
t
i
o
n
:
a
b
s
o
l
u
t
e
;
 

 
 
 
 
d
i
s
p
l
a
y
:
b
l
o
c
k
;

 
 
 
 
h
e
i
g
h
t
:
1
p
x
;
 

 
 
 
 
b
a
c
k
g
r
o
u
n
d
:
b
l
a
c
k
;

}


<
/
s
t
y
l
e
>

	
	
	
<
t
a
b
l
e
 
w
i
d
t
h
=
\
"
1
0
0
%
\
"
>

	
	
	
	
	
	
	
<
t
r
 
>
"
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
'
<
t
d
 
c
l
a
s
s
=
"
a
l
e
r
t
 
a
l
e
r
t
-
i
n
f
o
"
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
'
<
t
d
 
c
l
a
s
s
=
"
u
i
-
w
i
d
g
e
t
-
h
e
a
d
e
r
 
u
i
-
c
o
r
n
e
r
-
a
l
l
"
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
'
<
t
a
b
l
e
>

	
	
	
	
	
	
	
	
	
	
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
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
b
o
o
k
o
n
l
i
n
e
'
 
]
 
=
=
 
'
1
'
 
&
&
 
$
t
h
i
s
-
>
s
h
o
w
l
i
n
k
s
 
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
b
o
o
k
i
n
g
_
f
o
r
m
_
i
n
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
 
]
 
!
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
'
<
t
r
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
'
<
t
d
 
c
o
l
s
p
a
n
=
"
6
"
>
'
.
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
)
.
'
<
/
t
d
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
'
<
/
t
r
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
'

	
	
	
	
	
	
	
	
	
	
<
t
r
>

	
	
	
	
	
	
	
	
	
	
	
<
t
d
 
b
g
c
o
l
o
r
=
"
'
 
.
$
m
r
C
o
n
f
i
g
[
 
'
a
v
l
c
a
l
_
i
n
b
g
c
o
l
o
u
r
'
 
]
.
'
"
 
>
&
n
b
s
p
;
&
n
b
s
p
;
&
n
b
s
p
;
&
n
b
s
p
;
&
n
b
s
p
;
<
/
t
d
>
<
t
d
>
'
.
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
_
J
O
M
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
)
.
'
<
/
t
d
>

	
	
	
	
	
	
	
	
	
	
	
<
t
d
 
b
g
c
o
l
o
r
=
"
'
 
.
$
m
r
C
o
n
f
i
g
[
 
'
a
v
l
c
a
l
_
o
c
c
u
p
i
e
d
c
o
l
o
u
r
'
 
]
.
'
"
 
>
&
n
b
s
p
;
&
n
b
s
p
;
&
n
b
s
p
;
&
n
b
s
p
;
&
n
b
s
p
;
<
/
t
d
>
<
t
d
>
'
.
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
_
J
O
M
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
)
.
'
<
/
t
d
>

	
	
	
	
	
	
	
	
	
	
	
<
t
d
 
b
g
c
o
l
o
r
=
"
'
 
.
$
m
r
C
o
n
f
i
g
[
 
'
a
v
l
c
a
l
_
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
c
o
l
o
u
r
'
 
]
.
'
"
 
>
&
n
b
s
p
;
&
n
b
s
p
;
&
n
b
s
p
;
&
n
b
s
p
;
&
n
b
s
p
;
<
/
t
d
>
<
t
d
>
'
.
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
_
J
O
M
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
)
.
'
<
/
t
d
>

	
	
	
	
	
	
	
	
	
	
<
/
t
r
>

	
	
	
	
	
	
	
	
	
<
/
t
a
b
l
e
>

	
	
	
	
	
	
	
	
<
/
t
d
>

	
	
	
	
	
	
	
<
/
t
r
>

	
	
	
	
	
	
	
<
t
r
 
c
l
a
s
s
=
"
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
_
c
a
l
e
n
d
a
r
_
c
a
l
e
n
d
a
r
s
"
>

	
	
	
	
	
	
	
	
<
t
d
>
<
c
e
n
t
e
r
>

	
	
	
	
	
	
	
	
	
<
t
a
b
l
e
>

	
	
	
	
	
	
	
	
	
	
<
t
r
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
h
o
w
F
u
l
l
Y
e
a
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
e
c
h
o
 
$
c
u
r
r
e
n
t
M
o
n
t
h
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
 
(
$
c
u
r
r
e
n
t
M
o
n
t
h
;
 
$
c
o
u
n
t
e
r
 
<
=
 
$
s
h
o
w
F
u
l
l
Y
e
a
r
;
 
+
+
$
c
u
r
r
e
n
t
M
o
n
t
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
r
e
t
V
a
l
s
 
.
=
 
"
\
n
<
t
d
 
s
t
y
l
e
=
\
"
v
e
r
t
i
c
a
l
-
a
l
i
g
n
:
 
t
o
p
\
"
>
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
$
t
h
i
s
-
>
m
a
k
e
c
a
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
M
o
n
t
h
,
 
$
c
u
r
r
e
n
t
Y
e
a
r
,
 
$
r
o
o
m
U
i
d
,
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
u
r
r
e
n
t
M
o
n
t
h
 
=
=
 
1
2
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
Y
e
a
r
 
=
 
$
c
u
r
r
e
n
t
Y
e
a
r
 
+
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
M
o
n
t
h
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
/
t
d
>
\
n
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
u
n
t
e
r
 
%
 
3
 
=
=
 
0
 
a
n
d
 
$
c
o
u
n
t
e
r
 
<
 
7
2
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
/
t
r
>
\
n
<
t
r
>
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
+
+
$
c
o
u
n
t
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
t
d
>
\
n
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
$
t
h
i
s
-
>
m
a
k
e
c
a
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
M
o
n
t
h
,
 
$
c
u
r
r
e
n
t
Y
e
a
r
,
 
$
r
o
o
m
U
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
/
t
d
>
\
n
"
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
'

	
	
	
	
	
	
	
	
	
	
<
/
t
r
>

	
	
	
	
	
	
	
	
	
<
/
t
a
b
l
e
>

	
	
	
	
	
	
	
	
<
/
c
e
n
t
e
r
>
<
/
t
d
>

	
	
	
	
	
	
	
<
/
t
r
>

	
	
	
	
	
	
<
/
t
a
b
l
e
>

	
	
	
<
/
d
i
v
>

	
	
	
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
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
r
o
o
m
_
a
v
l
_
e
n
q
u
i
r
y
 
|
|
 
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
c
o
m
p
o
s
i
t
e
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
 
]
 
!
=
 
'
1
'
 
|
|
 
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
t
a
s
k
'
,
 
'
'
)
 
=
=
 
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
)
 
|
|
 
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
i
s
_
s
i
n
g
l
e
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
'
 
]
 
=
=
 
'
1
'
 
|
|
 
$
m
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
O
n
l
y
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
C
a
l
e
n
d
a
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

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
;

 
 
 
 
 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
t
h
i
s
-
>
r
e
t
V
a
l
s
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
_
J
O
M
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
_
J
O
M
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
_
J
O
M
R
E
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
_
J
O
M
R
E
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
_
J
O
M
R
E
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
_
J
O
M
R
E
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
_
J
O
M
R
E
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
_
J
O
M
R
E
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
_
J
O
M
R
E
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
 
m
a
k
e
c
a
l
(
$
s
t
m
o
n
t
h
,
 
$
s
t
y
e
a
r
,
 
$
r
o
o
m
U
i
d
,
 
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

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
 
A
d
a
p
t
e
d
 
f
r
o
m
 
s
o
u
r
c
e

 
 
 
 
 
 
 
 
/
/
 
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
w
e
b
e
r
d
e
v
.
c
o
m
/
g
e
t
_
e
x
a
m
p
l
e
-
1
4
3
0
.
h
t
m
l

 
 
 
 
 
 
 
 
/
/
 
S
u
b
m
i
t
t
e
d
 
b
y
:
 
W
h
i
d
d
o
n
 
J
a
m
e
s
 
o
n
 
D
e
c
 
0
1
s
t
 
1
9
9
9

 
 
 
 
 
 
 
 
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

	
	

 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
 
=
 
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
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
(
)
;

 
 
 
 
 
 
 
 
$
t
a
r
 
=
 
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
t
a
r
'
,
 
0
)
;

 
 
 
 
 
 
 
 
$
s
h
o
w
_
l
i
n
k
s
 
=
 
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
s
l
'
,
 
1
)
;


 
 
 
 
 
 
 
 
$
s
h
o
w
O
u
t
M
o
n
t
h
D
a
t
e
s
 
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
$
t
h
i
s
-
>
p
o
p
 
=
=
 
1
 
|
|
 
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
t
a
s
k
'
,
 
'
'
)
 
=
=
 
'
r
e
m
o
t
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
'
)
 
{
 
/
/
 
I
f
 
w
e
 
a
r
e
 
i
n
 
a
 
p
o
p
u
p
 
t
h
e
n
 
i
t
 
i
s
 
n
o
t
 
s
u
i
t
a
b
l
e
 
t
o
 
l
i
n
k
 
d
i
r
e
c
t
l
y
 
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
 
f
o
r
m
,
 
s
o
 
w
e
'
l
l
 
s
e
t
 
a
 
t
a
r
g
e
t
 
=
 
"
_
B
L
A
N
K
"
 
t
o
 
g
o
 
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
 
f
o
r
m
.

 
 
 
 
 
 
 
 
$
t
a
r
g
e
t
 
=
 
'
 
T
A
R
G
E
T
=
"
_
b
l
a
n
k
"
 
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
r
g
e
t
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
$
t
a
r
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
r
g
e
t
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
s
h
o
w
_
l
i
n
k
s
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
h
o
w
l
i
n
k
s
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
/
/
#
 
d
e
f
i
n
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
-
l
i
t
t
l
e
 
c
l
e
a
n
e
r

 
 
 
 
 
 
 
 
/
/
#
 
t
h
a
n
 
m
u
c
k
i
n
g
 
o
v
e
r
 
t
h
e
 
c
o
d
e
 
t
o

 
 
 
 
 
 
 
 
/
/
#
 
c
h
a
n
g
e
 
s
t
u
f
f


 
 
 
 
 
 
 
 
$
f
a
c
e
 
=
 
'
v
e
r
d
a
n
a
'
;
 
/
/
#
 
f
o
n
t
 
f
a
c
e
 
f
o
r
 
a
l
l
 
t
e
x
t

 
 
 
 
 
 
 
 
$
s
i
z
e
 
=
 
'
1
'
;
 
/
/
#
 
f
o
n
t
 
s
i
z
e
 
f
o
r
 
a
l
l
 
t
e
x
t

 
 
 
 
 
 
 
 
$
h
e
i
g
h
t
 
=
 
'
1
2
'
;
 
/
/
#
 
c
e
l
l
 
h
e
i
g
h
t

 
 
 
 
 
 
 
 
$
w
i
d
t
h
 
=
 
'
1
2
'
;
 
/
/
#
 
c
e
l
l
 
w
i
d
t
h

 
 
 
 
 
 
 
 
$
t
o
d
a
y
c
o
l
o
r
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
a
v
l
c
a
l
_
t
o
d
a
y
c
o
l
o
r
'
 
]
;
 
/
/
#
 
f
o
n
t
 
c
o
l
o
r
 
f
o
r
 
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
 
d
a
t
e

 
 
 
 
 
 
 
 
$
i
n
m
o
n
t
h
f
a
c
e
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
a
v
l
c
a
l
_
i
n
m
o
n
t
h
f
a
c
e
'
 
]
;
 
/
/
#
 
f
o
n
t
 
c
o
l
o
r
 
f
o
r
 
d
a
y
s
 
i
n
 
t
h
e
 
d
i
s
p
l
a
y
 
m
o
n
t
h

 
 
 
 
 
 
 
 
$
o
u
t
m
o
n
t
h
f
a
c
e
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
a
v
l
c
a
l
_
o
u
t
m
o
n
f
a
c
e
'
 
]
;
 
/
/
#
 
f
o
n
t
 
c
o
l
o
r
 
f
o
r
 
d
a
y
s
 
n
o
t
 
i
n
 
t
h
e
 
d
i
s
p
l
a
y
 
m
o
n
t
h

 
 
 
 
 
 
 
 
$
i
n
b
g
c
o
l
o
r
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
a
v
l
c
a
l
_
i
n
b
g
c
o
l
o
u
r
'
 
]
;
 
/
/
#
 
c
e
l
l
 
b
g
c
o
l
o
r
 
f
o
r
 
d
a
y
s
 
i
n
 
t
h
e
 
d
i
s
p
l
a
y
 
m
o
n
t
h

 
 
 
 
 
 
 
 
$
o
u
t
b
g
c
o
l
o
r
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
a
v
l
c
a
l
_
o
u
t
b
g
c
o
l
o
u
r
'
 
]
;
 
/
/
#
 
c
e
l
l
 
b
g
c
o
l
o
r
 
f
o
r
 
d
a
y
s
 
n
o
t
 
i
n
 
d
i
s
p
l
a
y
 
m
o
n
t
h

 
 
 
 
 
 
 
 
$
o
c
c
u
p
i
e
d
c
o
l
o
u
r
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
a
v
l
c
a
l
_
o
c
c
u
p
i
e
d
c
o
l
o
u
r
'
 
]
;
 
/
/
#
 
c
e
l
l
 
b
g
c
o
l
o
u
r
 
f
o
r
 
o
c
c
u
p
i
e
d
 
d
a
y
s

 
 
 
 
 
 
 
 
$
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
c
o
l
o
u
r
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
a
v
l
c
a
l
_
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
c
o
l
o
u
r
'
 
]
;
 
/
/
#
 
c
e
l
l
 
b
g
c
o
l
o
u
r
 
f
o
r
 
o
c
c
u
p
i
e
d
 
d
a
y
s

 
 
 
 
 
 
 
 
$
p
a
s
t
c
o
l
o
u
r
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
a
v
l
c
a
l
_
p
a
s
t
c
o
l
o
u
r
'
 
]
;
 
/
/
#
 
c
e
l
l
 
b
g
c
o
l
o
u
r
 
f
o
r
 
o
c
c
u
p
i
e
d
 
d
a
y
s


 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
/
/
#
 
m
a
k
e
 
w
o
r
k
i
e
 
c
o
d
e
 
s
t
u
p
h

 
 
 
 
 
 
 
 
/
/
#


 
 
 
 
 
 
 
 
$
t
o
d
a
y
s
D
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
)
;

 
 
 
 
 
 
 
 
$
s
t
d
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
s
t
m
o
n
t
h
,
 
1
,
 
$
s
t
y
e
a
r
)
;

 
 
 
 
 
 
 
 
i
f
 
(
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
c
a
l
e
n
d
a
r
s
t
a
r
t
o
f
w
e
e
k
d
a
y
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
s
t
a
r
t
d
a
t
e
 
=
 
$
c
u
r
r
d
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
s
t
m
o
n
t
h
,
 
1
 
-
 
d
a
t
e
(
'
w
'
,
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
s
t
m
o
n
t
h
,
 
1
,
 
$
s
t
y
e
a
r
)
)
,
 
$
s
t
y
e
a
r
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
t
a
r
t
d
a
t
e
 
=
 
$
c
u
r
r
d
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
s
t
m
o
n
t
h
,
 
1
 
-
 
d
a
t
e
(
'
w
'
,
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
s
t
m
o
n
t
h
,
 
0
,
 
$
s
t
y
e
a
r
)
)
,
 
$
s
t
y
e
a
r
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
e
n
d
d
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
d
a
t
e
(
'
m
'
,
 
$
s
t
d
a
t
e
)
 
+
 
1
,
 
7
 
-
 
d
a
t
e
(
'
w
'
,
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
s
t
m
o
n
t
h
 
+
 
1
,
 
0
,
 
$
s
t
y
e
a
r
)
)
,
 
$
s
t
y
e
a
r
)
;

 
 
 
 
 
 
 
 
$
d
a
t
e
E
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
t
o
d
a
y
s
D
a
t
e
)
;

 
 
 
 
 
 
 
 
$
u
n
i
x
T
o
d
a
y
s
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
E
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
E
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
E
l
e
m
e
n
t
s
[
 
0
 
]
)
;


 
 
 
 
 
 
 
 
$
t
h
i
s
M
o
n
t
h
N
a
m
e
 
=
 
g
e
t
T
h
i
s
M
o
n
t
h
N
a
m
e
(
d
a
t
e
(
'
n
'
,
 
$
s
t
d
a
t
e
)
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
M
o
n
t
h
N
a
m
e
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
M
o
n
t
h
N
a
m
e
 
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
'
.
d
a
t
e
(
'
M
'
,
 
$
s
t
d
a
t
e
)
,
 
s
t
r
f
t
i
m
e
(
'
%
B
'
,
 
$
s
t
d
a
t
e
)
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

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
\
n
<
t
a
b
l
e
 
c
l
a
s
s
=
\
"
r
e
s
c
a
l
\
"
 
c
e
l
l
s
p
a
c
i
n
g
=
\
"
0
\
"
>
\
n
"
;

 
 
 
 
 
 
 
 
i
f
 
(
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
t
r
>
\
n
<
t
h
 
c
l
a
s
s
=
\
"
a
l
e
r
t
-
i
n
f
o
\
"
 
c
o
l
s
p
a
n
=
\
"
7
\
"
 
h
e
i
g
h
t
=
\
"
$
h
e
i
g
h
t
\
"
>
<
f
o
n
t
 
f
a
c
e
=
\
"
$
f
a
c
e
\
"
 
s
i
z
e
=
\
"
$
s
i
z
e
\
"
>
"
.
$
t
h
i
s
M
o
n
t
h
N
a
m
e
.
'
 
'
.
s
t
r
f
t
i
m
e
(
'
%
Y
'
,
 
$
s
t
d
a
t
e
)
.
"
<
/
f
o
n
t
>
<
/
t
h
>
\
n
<
/
t
r
>
\
n
"
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
t
r
>
\
n
<
t
h
 
c
l
a
s
s
=
\
"
u
i
-
w
i
d
g
e
t
-
h
e
a
d
e
r
 
u
i
-
c
o
r
n
e
r
-
a
l
l
\
"
 
c
o
l
s
p
a
n
=
\
"
7
\
"
 
h
e
i
g
h
t
=
\
"
$
h
e
i
g
h
t
\
"
>
<
f
o
n
t
 
f
a
c
e
=
\
"
$
f
a
c
e
\
"
 
s
i
z
e
=
\
"
$
s
i
z
e
\
"
>
"
.
$
t
h
i
s
M
o
n
t
h
N
a
m
e
.
'
 
'
.
s
t
r
f
t
i
m
e
(
'
%
Y
'
,
 
$
s
t
d
a
t
e
)
.
"
<
/
f
o
n
t
>
<
/
t
h
>
\
n
<
/
t
r
>
\
n
"
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
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
c
a
l
e
n
d
a
r
s
t
a
r
t
o
f
w
e
e
k
d
a
y
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
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
t
r
 
c
l
a
s
s
=
\
"
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
_
c
a
l
e
n
d
a
r
_
d
a
y
s
\
"
>
\
n
<
t
h
 
w
i
d
t
h
=
\
"
$
w
i
d
t
h
\
"
 
h
e
i
g
h
t
=
\
"
$
h
e
i
g
h
t
\
"
 
v
a
l
i
g
n
=
\
"
m
i
d
d
l
e
\
"
 
a
l
i
g
n
=
\
"
c
e
n
t
e
r
\
"
>
<
f
o
n
t
 
f
a
c
e
=
\
"
$
f
a
c
e
\
"

	
	
	
	
s
i
z
e
=
\
"
$
s
i
z
e
\
"
>
"
.
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
_
J
O
M
R
E
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
)
.
"
<
/
f
o
n
t
>
<
/
t
h
>
\
n
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
t
h
 
w
i
d
t
h
=
\
"
$
w
i
d
t
h
\
"
 
h
e
i
g
h
t
=
\
"
$
h
e
i
g
h
t
\
"
 
v
a
l
i
g
n
=
\
"
m
i
d
d
l
e
\
"
 
a
l
i
g
n
=
\
"
c
e
n
t
e
r
\
"
>
<
f
o
n
t
 
f
a
c
e
=
\
"
$
f
a
c
e
\
"

	
	
	
	
s
i
z
e
=
\
"
$
s
i
z
e
\
"
>
"
.
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
_
J
O
M
R
E
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
)
.
"
<
/
f
o
n
t
>
<
/
t
h
>
\
n
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
t
h
 
w
i
d
t
h
=
\
"
$
w
i
d
t
h
\
"
 
h
e
i
g
h
t
=
\
"
$
h
e
i
g
h
t
\
"
 
v
a
l
i
g
n
=
\
"
m
i
d
d
l
e
\
"
 
a
l
i
g
n
=
\
"
c
e
n
t
e
r
\
"
>
<
f
o
n
t
 
f
a
c
e
=
\
"
$
f
a
c
e
\
"

	
	
	
	
s
i
z
e
=
\
"
$
s
i
z
e
\
"
>
"
.
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
_
J
O
M
R
E
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
)
.
"
<
/
f
o
n
t
>
<
/
t
h
>
\
n
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
t
h
 
w
i
d
t
h
=
\
"
$
w
i
d
t
h
\
"
 
h
e
i
g
h
t
=
\
"
$
h
e
i
g
h
t
\
"
 
v
a
l
i
g
n
=
\
"
m
i
d
d
l
e
\
"
 
a
l
i
g
n
=
\
"
c
e
n
t
e
r
\
"
>
<
f
o
n
t
 
f
a
c
e
=
\
"
$
f
a
c
e
\
"

	
	
	
	
s
i
z
e
=
\
"
$
s
i
z
e
\
"
>
"
.
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
_
J
O
M
R
E
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
)
.
"
<
/
f
o
n
t
>
<
/
t
h
>
\
n
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
t
h
 
w
i
d
t
h
=
\
"
$
w
i
d
t
h
\
"
 
h
e
i
g
h
t
=
\
"
$
h
e
i
g
h
t
\
"
 
v
a
l
i
g
n
=
\
"
m
i
d
d
l
e
\
"
 
a
l
i
g
n
=
\
"
c
e
n
t
e
r
\
"
>
<
f
o
n
t
 
f
a
c
e
=
\
"
$
f
a
c
e
\
"

	
	
	
	
s
i
z
e
=
\
"
$
s
i
z
e
\
"
>
"
.
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
_
J
O
M
R
E
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
)
.
"
<
/
f
o
n
t
>
<
/
t
h
>
\
n
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
t
h
 
w
i
d
t
h
=
\
"
$
w
i
d
t
h
\
"
 
h
e
i
g
h
t
=
\
"
$
h
e
i
g
h
t
\
"
 
v
a
l
i
g
n
=
\
"
m
i
d
d
l
e
\
"
 
a
l
i
g
n
=
\
"
c
e
n
t
e
r
\
"
>
<
f
o
n
t
 
f
a
c
e
=
\
"
$
f
a
c
e
\
"

	
	
	
	
s
i
z
e
=
\
"
$
s
i
z
e
\
"
>
"
.
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
_
J
O
M
R
E
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
)
.
"
<
/
f
o
n
t
>
<
/
t
h
>
\
n
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
t
h
 
w
i
d
t
h
=
\
"
$
w
i
d
t
h
\
"
 
h
e
i
g
h
t
=
\
"
$
h
e
i
g
h
t
\
"
 
v
a
l
i
g
n
=
\
"
m
i
d
d
l
e
\
"
 
a
l
i
g
n
=
\
"
c
e
n
t
e
r
\
"
>
<
f
o
n
t
 
f
a
c
e
=
\
"
$
f
a
c
e
\
"

	
	
	
	
s
i
z
e
=
\
"
$
s
i
z
e
\
"
>
"
.
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
_
J
O
M
R
E
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
)
.
"
<
/
f
o
n
t
>
<
/
t
h
>

	
	
	
	
\
n
<
/
t
r
>
\
n
"
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
t
r
 
c
l
a
s
s
=
\
"
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
_
c
a
l
e
n
d
a
r
_
d
a
y
s
\
"
>
\
n
<
t
h
 
w
i
d
t
h
=
\
"
$
w
i
d
t
h
\
"
 
h
e
i
g
h
t
=
\
"
$
h
e
i
g
h
t
\
"
 
v
a
l
i
g
n
=
\
"
m
i
d
d
l
e
\
"
 
a
l
i
g
n
=
\
"
c
e
n
t
e
r
\
"
>
<
f
o
n
t
 
f
a
c
e
=
\
"
$
f
a
c
e
\
"

	
	
	
	
s
i
z
e
=
\
"
$
s
i
z
e
\
"
>
"
.
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
_
J
O
M
R
E
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
)
.
"
<
/
f
o
n
t
>
<
/
t
h
>
\
n
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
t
h
 
w
i
d
t
h
=
\
"
$
w
i
d
t
h
\
"
 
h
e
i
g
h
t
=
\
"
$
h
e
i
g
h
t
\
"
 
v
a
l
i
g
n
=
\
"
m
i
d
d
l
e
\
"
 
a
l
i
g
n
=
\
"
c
e
n
t
e
r
\
"
>
<
f
o
n
t
 
f
a
c
e
=
\
"
$
f
a
c
e
\
"

	
	
	
	
s
i
z
e
=
\
"
$
s
i
z
e
\
"
>
"
.
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
_
J
O
M
R
E
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
)
.
"
<
/
f
o
n
t
>
<
/
t
h
>
\
n
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
t
h
 
w
i
d
t
h
=
\
"
$
w
i
d
t
h
\
"
 
h
e
i
g
h
t
=
\
"
$
h
e
i
g
h
t
\
"
 
v
a
l
i
g
n
=
\
"
m
i
d
d
l
e
\
"
 
a
l
i
g
n
=
\
"
c
e
n
t
e
r
\
"
>
<
f
o
n
t
 
f
a
c
e
=
\
"
$
f
a
c
e
\
"

	
	
	
	
s
i
z
e
=
\
"
$
s
i
z
e
\
"
>
"
.
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
_
J
O
M
R
E
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
)
.
"
<
/
f
o
n
t
>
<
/
t
h
>
\
n
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
t
h
 
w
i
d
t
h
=
\
"
$
w
i
d
t
h
\
"
 
h
e
i
g
h
t
=
\
"
$
h
e
i
g
h
t
\
"
 
v
a
l
i
g
n
=
\
"
m
i
d
d
l
e
\
"
 
a
l
i
g
n
=
\
"
c
e
n
t
e
r
\
"
>
<
f
o
n
t
 
f
a
c
e
=
\
"
$
f
a
c
e
\
"

	
	
	
	
s
i
z
e
=
\
"
$
s
i
z
e
\
"
>
"
.
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
_
J
O
M
R
E
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
)
.
"
<
/
f
o
n
t
>
<
/
t
h
>
\
n
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
t
h
 
w
i
d
t
h
=
\
"
$
w
i
d
t
h
\
"
 
h
e
i
g
h
t
=
\
"
$
h
e
i
g
h
t
\
"
 
v
a
l
i
g
n
=
\
"
m
i
d
d
l
e
\
"
 
a
l
i
g
n
=
\
"
c
e
n
t
e
r
\
"
>
<
f
o
n
t
 
f
a
c
e
=
\
"
$
f
a
c
e
\
"

	
	
	
	
s
i
z
e
=
\
"
$
s
i
z
e
\
"
>
"
.
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
_
J
O
M
R
E
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
)
.
"
<
/
f
o
n
t
>
<
/
t
h
>
\
n
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
t
h
 
w
i
d
t
h
=
\
"
$
w
i
d
t
h
\
"
 
h
e
i
g
h
t
=
\
"
$
h
e
i
g
h
t
\
"
 
v
a
l
i
g
n
=
\
"
m
i
d
d
l
e
\
"
 
a
l
i
g
n
=
\
"
c
e
n
t
e
r
\
"
>
<
f
o
n
t
 
f
a
c
e
=
\
"
$
f
a
c
e
\
"

	
	
	
	
s
i
z
e
=
\
"
$
s
i
z
e
\
"
>
"
.
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
_
J
O
M
R
E
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
)
.
"
<
/
f
o
n
t
>
<
/
t
h
>
\
n
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
t
h
 
w
i
d
t
h
=
\
"
$
w
i
d
t
h
\
"
 
h
e
i
g
h
t
=
\
"
$
h
e
i
g
h
t
\
"
 
v
a
l
i
g
n
=
\
"
m
i
d
d
l
e
\
"
 
a
l
i
g
n
=
\
"
c
e
n
t
e
r
\
"
>
<
f
o
n
t
 
f
a
c
e
=
\
"
$
f
a
c
e
\
"

	
	
	
	
s
i
z
e
=
\
"
$
s
i
z
e
\
"
>
"
.
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
_
J
O
M
R
E
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
)
.
"
<
/
f
o
n
t
>
<
/
t
h
>

	
	
	
	
\
n
<
/
t
r
>
\
n
"
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
l
i
m
i
t
A
d
v
a
n
c
e
B
o
o
k
i
n
g
s
Y
e
s
N
o
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
d
a
t
e
E
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
t
o
d
a
y
s
D
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
L
a
t
e
s
t
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
E
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
E
l
e
m
e
n
t
s
[
 
2
 
]
 
+
 
$
m
r
C
o
n
f
i
g
[
 
'
a
d
v
a
n
c
e
B
o
o
k
i
n
g
s
L
i
m
i
t
'
 
]
,
 
$
d
a
t
e
E
l
e
m
e
n
t
s
[
 
0
 
]
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
i
 
=
 
0
;

 
 
 
 
 
 
 
 
$
s
q
l
D
a
t
e
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
d
a
t
e
s
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


 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
$
c
u
r
r
d
a
t
e
 
<
 
$
e
n
d
d
a
t
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
q
l
D
a
t
e
s
[
 
]
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
$
c
u
r
r
d
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
+
+
$
i
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
d
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
d
a
t
e
(
'
m
'
,
 
$
s
t
a
r
t
d
a
t
e
)
,
 
d
a
t
e
(
'
d
'
,
 
$
s
t
a
r
t
d
a
t
e
)
 
+
 
$
i
,
 
d
a
t
e
(
'
Y
'
,
 
$
s
t
a
r
t
d
a
t
e
)
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
c
o
n
t
r
a
c
t
_
u
i
d
,
b
l
a
c
k
_
b
o
o
k
i
n
g
,
`
d
a
t
e
`
 
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
r
o
o
m
_
b
o
o
k
i
n
g
s
 
W
H
E
R
E
 
r
o
o
m
_
u
i
d
 
=
 
'
"
.
(
i
n
t
)
 
$
r
o
o
m
U
i
d
.
"
'
 
A
N
D
 
`
d
a
t
e
`
 
I
N
 
(
 
"
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
s
q
l
D
a
t
e
s
,
 
f
a
l
s
e
)
.
'
 
)
 
'
;

 
 
 
 
 
 
 
 
$
r
o
o
m
L
i
s
t
 
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

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
s
t
a
r
t
_
d
a
t
e
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
b
o
o
k
i
n
g
_
e
n
d
_
d
a
t
e
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
o
o
m
L
i
s
t
 
a
s
 
$
c
o
n
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
 
=
 
$
c
o
n
t
-
>
d
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
$
c
o
n
t
-
>
c
o
n
t
r
a
c
t
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
l
a
c
k
_
b
o
o
k
i
n
g
 
=
 
$
c
o
n
t
-
>
b
l
a
c
k
_
b
o
o
k
i
n
g
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
o
s
i
t
_
p
a
i
d
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
g
c
o
l
o
r
 
=
 
$
i
n
b
g
c
o
l
o
r
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
l
a
c
k
_
b
o
o
k
i
n
g
 
!
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
g
c
o
l
o
r
 
=
 
$
o
c
c
u
p
i
e
d
c
o
l
o
u
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
a
r
r
i
v
a
l
,
d
e
p
a
r
t
u
r
e
,
d
e
p
o
s
i
t
_
p
a
i
d
 
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
c
o
n
t
r
a
c
t
s
 
W
H
E
R
E
 
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
'
"
.
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
_
u
i
d
.
"
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
t
r
a
c
t
L
i
s
t
 
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
c
o
n
t
r
a
c
t
L
i
s
t
 
a
s
 
$
c
o
n
t
r
a
c
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
o
s
i
t
_
p
a
i
d
 
=
 
$
c
o
n
t
r
a
c
t
-
>
d
e
p
o
s
i
t
_
p
a
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
s
t
a
r
t
_
d
a
t
e
s
[
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
a
r
r
i
v
a
l
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
n
d
_
d
a
t
e
s
[
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
d
e
p
a
r
t
u
r
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
d
e
p
o
s
i
t
_
p
a
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
g
c
o
l
o
r
 
=
 
$
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
c
o
l
o
u
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
g
c
o
l
o
r
 
=
 
$
o
c
c
u
p
i
e
d
c
o
l
o
u
r
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
s
A
r
r
a
y
[
 
$
d
a
t
e
 
]
 
=
 
a
r
r
a
y
(
'
c
o
n
t
r
a
c
t
_
u
i
d
'
 
=
>
 
$
c
o
n
t
r
a
c
t
_
u
i
d
,
 
'
b
g
c
o
l
o
r
'
 
=
>
 
$
b
g
c
o
l
o
r
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
i
 
=
 
0
;

 
 
 
 
 
 
 
 
$
c
u
r
r
d
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
d
a
t
e
(
'
m
'
,
 
$
s
t
a
r
t
d
a
t
e
)
,
 
d
a
t
e
(
'
d
'
,
 
$
s
t
a
r
t
d
a
t
e
)
,
 
d
a
t
e
(
'
Y
'
,
 
$
s
t
a
r
t
d
a
t
e
)
)
;

 
 
 
 
 
 
 
 
$
s
t
a
r
t
i
n
g
m
o
n
t
h
 
=
 
d
a
t
e
(
'
m
'
,
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
d
a
t
e
(
'
m
'
,
 
$
s
t
a
r
t
d
a
t
e
)
,
 
d
a
t
e
(
'
d
'
,
 
$
s
t
a
r
t
d
a
t
e
)
,
 
d
a
t
e
(
'
Y
'
,
 
$
s
t
a
r
t
d
a
t
e
)
)
)
;

 
 
 
 
 
 
 
 
$
e
n
d
i
n
g
m
o
n
t
h
 
=
 
d
a
t
e
(
'
m
'
,
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
d
a
t
e
(
'
m
'
,
 
$
s
t
d
a
t
e
)
 
+
 
1
,
 
7
 
-
 
d
a
t
e
(
'
w
'
,
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
s
t
m
o
n
t
h
 
+
 
1
,
 
0
,
 
$
s
t
y
e
a
r
)
)
,
 
$
s
t
y
e
a
r
)
)
;

 
 
 
 
 
 
 
 
/
/
v
a
r
_
d
u
m
p
(
$
c
u
r
r
d
a
t
e
)
;
v
a
r
_
d
u
m
p
(
$
e
n
d
d
a
t
e
)
;
e
x
i
t
;

 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
$
c
u
r
r
d
a
t
e
 
<
 
$
e
n
d
d
a
t
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
t
r
>
\
n
"
;

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
 
(
$
c
 
=
 
0
;
 
$
c
 
<
 
7
;
 
+
+
$
c
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
o
s
i
t
_
p
a
i
d
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
g
c
o
l
o
r
 
=
 
$
i
n
b
g
c
o
l
o
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
q
l
D
a
t
e
2
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
$
c
u
r
r
d
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
q
l
D
a
t
e
2
 
=
 
J
S
C
a
l
m
a
k
e
I
n
p
u
t
D
a
t
e
s
(
$
s
q
l
D
a
t
e
2
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
q
l
D
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
$
c
u
r
r
d
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
c
u
r
r
d
o
w
=
d
a
t
e
(
"
w
"
,
$
s
q
l
D
a
t
e
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
M
o
n
t
h
 
=
 
d
a
t
e
(
'
m
'
,
 
$
c
u
r
r
d
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
$
c
u
r
r
d
a
t
e
)
,
 
$
d
a
t
e
s
A
r
r
a
y
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
g
c
o
l
o
r
 
=
 
$
d
a
t
e
s
A
r
r
a
y
[
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
$
c
u
r
r
d
a
t
e
)
 
]
[
 
'
b
g
c
o
l
o
r
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
$
d
a
t
e
s
A
r
r
a
y
[
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
$
c
u
r
r
d
a
t
e
)
 
]
[
 
'
c
o
n
t
r
a
c
t
_
u
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
C
u
r
r
D
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
$
c
u
r
r
d
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
E
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
j
o
m
r
e
s
C
u
r
r
D
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
C
u
r
r
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
E
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
E
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
E
l
e
m
e
n
t
s
[
 
0
 
]
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
u
r
r
d
a
t
e
 
<
 
$
s
t
d
a
t
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
g
c
o
l
o
r
 
=
 
$
o
u
t
b
g
c
o
l
o
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
l
i
m
i
t
A
d
v
a
n
c
e
B
o
o
k
i
n
g
s
Y
e
s
N
o
'
 
]
 
=
=
 
'
1
'
 
&
&
 
(
$
u
n
i
x
C
u
r
r
D
a
t
e
 
>
=
 
$
u
n
i
x
L
a
t
e
s
t
D
a
t
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
g
c
o
l
o
r
 
=
 
$
p
a
s
t
c
o
l
o
u
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
u
n
i
x
C
u
r
r
D
a
t
e
 
<
 
$
u
n
i
x
T
o
d
a
y
s
D
a
t
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
g
c
o
l
o
r
 
=
 
$
p
a
s
t
c
o
l
o
u
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
d
a
t
e
(
'
m
'
,
 
$
s
t
d
a
t
e
)
 
=
=
 
d
a
t
e
(
'
m
'
,
 
$
c
u
r
r
d
a
t
e
)
)
 
&
&
 
(
$
b
g
c
o
l
o
r
 
!
=
 
$
o
c
c
u
p
i
e
d
c
o
l
o
u
r
)
 
&
&
 
(
$
b
g
c
o
l
o
r
 
!
=
 
$
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
c
o
l
o
u
r
)
 
&
&
 
(
$
b
g
c
o
l
o
r
 
!
=
 
$
p
a
s
t
c
o
l
o
u
r
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
g
c
o
l
o
r
 
=
 
$
i
n
b
g
c
o
l
o
r
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
(
$
b
g
c
o
l
o
r
 
!
=
 
$
o
c
c
u
p
i
e
d
c
o
l
o
u
r
)
 
&
&
 
(
$
b
g
c
o
l
o
r
 
!
=
 
$
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
c
o
l
o
u
r
)
 
&
&
 
(
$
b
g
c
o
l
o
r
 
!
=
 
$
p
a
s
t
c
o
l
o
u
r
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
g
c
o
l
o
r
 
=
 
$
o
u
t
b
g
c
o
l
o
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
d
a
t
e
(
'
d
'
,
 
$
c
u
r
r
d
a
t
e
)
 
=
=
 
d
a
t
e
(
'
d
'
)
 
&
&
 
d
a
t
e
(
'
m
'
,
 
$
c
u
r
r
d
a
t
e
)
 
=
=
 
d
a
t
e
(
'
m
'
)
 
&
&
 
d
a
t
e
(
'
Y
'
,
 
$
c
u
r
r
d
a
t
e
)
 
=
=
 
d
a
t
e
(
'
Y
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
c
o
l
o
r
 
=
 
$
t
o
d
a
y
c
o
l
o
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
d
a
t
e
(
'
m
'
,
 
$
c
u
r
r
d
a
t
e
)
 
=
=
 
d
a
t
e
(
'
m
'
,
 
$
s
t
d
a
t
e
)
 
&
&
 
d
a
t
e
(
'
Y
'
,
 
$
c
u
r
r
d
a
t
e
)
 
=
=
 
d
a
t
e
(
'
Y
'
,
 
$
s
t
d
a
t
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
c
o
l
o
r
 
=
 
$
i
n
m
o
n
t
h
f
a
c
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
c
o
l
o
r
 
=
 
$
o
u
t
m
o
n
t
h
f
a
c
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
e
c
h
o
 
$
s
t
a
r
t
i
n
g
m
o
n
t
h
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
M
o
n
t
h
.
'
 
'
.
$
e
n
d
i
n
g
m
o
n
t
h
.
'
<
b
r
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
u
r
r
e
n
t
M
o
n
t
h
 
=
=
 
$
s
t
a
r
t
i
n
g
m
o
n
t
h
 
&
&
 
d
a
t
e
(
'
m
'
,
 
$
s
t
d
a
t
e
)
 
>
 
d
a
t
e
(
'
m
'
,
 
$
s
t
a
r
t
d
a
t
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
g
c
o
l
o
r
 
=
 
$
o
u
t
b
g
c
o
l
o
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
d
a
t
e
(
'
m
'
,
 
$
c
u
r
r
d
a
t
e
)
 
=
=
 
d
a
t
e
(
'
m
'
,
 
$
e
n
d
d
a
t
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
g
c
o
l
o
r
 
=
 
$
o
u
t
b
g
c
o
l
o
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
s
s
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
$
c
u
r
r
d
a
t
e
)
,
 
$
b
o
o
k
i
n
g
_
s
t
a
r
t
_
d
a
t
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
s
s
 
=
 
'
c
l
a
s
s
=
"
c
r
o
s
s
O
u
t
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
s
h
o
w
O
u
t
M
o
n
t
h
D
a
t
e
s
 
&
&
 
$
b
g
c
o
l
o
r
 
=
=
 
$
o
u
t
b
g
c
o
l
o
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
t
d
 
h
e
i
g
h
t
=
\
"
$
h
e
i
g
h
t
\
"
 
w
i
d
t
h
=
\
"
$
w
i
d
t
h
\
"
 
v
a
l
i
g
n
=
\
"
m
i
d
d
l
e
\
"
 
>
<
f
o
n
t
 
f
a
c
e
=
\
"
$
f
a
c
e
\
"
 
s
i
z
e
=
\
"
$
s
i
z
e
\
"
 
c
o
l
o
r
=
\
"
$
f
c
o
l
o
r
\
"
>
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
'
<
t
d
 
'
.
$
c
l
a
s
s
.
"
 
h
e
i
g
h
t
=
\
"
$
h
e
i
g
h
t
\
"
 
w
i
d
t
h
=
\
"
$
w
i
d
t
h
\
"
 
v
a
l
i
g
n
=
\
"
m
i
d
d
l
e
\
"
 
b
g
c
o
l
o
r
=
\
"
$
b
g
c
o
l
o
r
\
"
>
<
f
o
n
t
 
f
a
c
e
=
\
"
$
f
a
c
e
\
"
 
s
i
z
e
=
\
"
$
s
i
z
e
\
"
 
c
o
l
o
r
=
\
"
$
f
c
o
l
o
r
\
"
>
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
a
s
k
 
!
=
 
'
r
e
m
o
t
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
'
 
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
b
o
o
k
i
n
g
_
f
o
r
m
_
i
n
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
h
i
s
-
>
s
h
o
w
l
i
n
k
s
 
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
m
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
O
n
l
y
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
C
a
l
e
n
d
a
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
h
i
s
-
>
s
h
o
w
l
i
n
k
s
 
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
!
$
s
h
o
w
O
u
t
M
o
n
t
h
D
a
t
e
s
 
&
&
 
$
b
g
c
o
l
o
r
 
=
=
 
$
o
u
t
b
g
c
o
l
o
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
'
&
n
b
s
p
;
'
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
$
b
g
c
o
l
o
r
 
!
=
 
$
o
c
c
u
p
i
e
d
c
o
l
o
u
r
 
&
&
 
$
b
g
c
o
l
o
r
 
!
=
 
$
o
u
t
m
o
n
t
h
f
a
c
e
 
&
&
 
$
b
g
c
o
l
o
r
 
!
=
 
$
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
c
o
l
o
u
r
 
&
&
 
(
$
b
g
c
o
l
o
r
 
!
=
 
$
p
a
s
t
c
o
l
o
u
r
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
f
i
x
e
d
A
r
r
i
v
a
l
D
a
t
e
Y
e
s
N
o
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
d
o
w
 
=
 
d
a
t
e
(
'
w
'
,
 
$
c
u
r
r
d
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
g
c
o
l
o
r
 
!
=
 
$
o
u
t
b
g
c
o
l
o
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
f
i
x
e
d
A
r
r
i
v
a
l
D
a
y
'
 
]
 
=
=
 
d
a
t
e
(
'
w
'
,
 
$
c
u
r
r
d
a
t
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
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
b
o
o
k
o
n
l
i
n
e
'
 
]
 
&
&
 
$
t
h
i
s
-
>
s
h
o
w
l
i
n
k
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
=
 
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
,
 
'
'
,
 
'
&
a
r
r
i
v
a
l
D
a
t
e
=
'
.
$
s
q
l
D
a
t
e
2
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
m
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
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
.
=
 
'
&
r
e
m
u
s
=
'
.
$
r
o
o
m
U
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
	
	
	
	
	
	
	
$
l
i
n
k
 
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
$
l
i
n
k
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
=
 
j
o
m
r
e
s
V
a
l
i
d
a
t
e
U
r
l
(
$
l
i
n
k
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
e
l
i
n
k
 
=
 
'
<
a
 
'
.
$
t
a
r
g
e
t
.
'
 
h
r
e
f
=
"
'
.
$
l
i
n
k
.
'
"
 
c
l
a
s
s
=
r
e
s
c
a
l
 
r
e
l
=
"
n
o
f
o
l
l
o
w
"
>
'
.
d
a
t
e
(
'
j
'
,
 
$
c
u
r
r
d
a
t
e
)
.
'
<
/
a
>
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
$
t
h
e
l
i
n
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
d
a
t
e
(
'
j
'
,
 
$
c
u
r
r
d
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
d
a
t
e
(
'
j
'
,
 
$
c
u
r
r
d
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
d
a
t
e
(
'
j
'
,
 
$
c
u
r
r
d
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
g
c
o
l
o
r
 
!
=
 
$
o
u
t
b
g
c
o
l
o
r
 
&
&
 
$
m
r
C
o
n
f
i
g
[
 
'
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
b
o
o
k
o
n
l
i
n
e
'
 
]
 
&
&
 
$
t
h
i
s
-
>
s
h
o
w
l
i
n
k
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
=
 
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
,
 
'
'
,
 
'
&
a
r
r
i
v
a
l
D
a
t
e
=
'
.
$
s
q
l
D
a
t
e
2
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
m
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
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
.
=
 
'
&
r
e
m
u
s
=
'
.
$
r
o
o
m
U
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
u
s
e
S
S
L
i
n
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
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
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
$
l
i
n
k
,
 
1
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
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
$
l
i
n
k
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
e
l
i
n
k
 
=
 
'
<
a
 
'
.
$
t
a
r
g
e
t
.
'
 
h
r
e
f
=
"
'
.
$
l
i
n
k
.
'
"
 
c
l
a
s
s
=
r
e
s
c
a
l
 
r
e
l
=
"
n
o
f
o
l
l
o
w
"
>
'
.
d
a
t
e
(
'
j
'
,
 
$
c
u
r
r
d
a
t
e
)
.
'
<
/
a
>
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
$
t
h
e
l
i
n
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
d
a
t
e
(
'
j
'
,
 
$
c
u
r
r
d
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
n
t
r
a
c
t
_
u
i
d
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
=
 
"
<
a
 
$
t
a
r
g
e
t
 
h
r
e
f
=
\
"
"
.
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
"
&
t
a
s
k
=
e
d
i
t
_
b
o
o
k
i
n
g
&
a
m
p
;
c
o
n
t
r
a
c
t
_
u
i
d
=
$
c
o
n
t
r
a
c
t
_
u
i
d
"
)
.
'
"
 
c
l
a
s
s
=
r
e
s
c
a
l
 
>
'
.
(
d
a
t
e
(
'
j
'
,
 
$
c
u
r
r
d
a
t
e
)
)
.
'
<
/
a
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
$
l
i
n
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
d
a
t
e
(
'
j
'
,
 
$
c
u
r
r
d
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
d
a
t
e
(
'
j
'
,
 
$
c
u
r
r
d
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
/
f
o
n
t
>
<
/
t
d
>
\
n
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
+
+
$
i
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
d
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
d
a
t
e
(
'
m
'
,
 
$
s
t
a
r
t
d
a
t
e
)
,
 
d
a
t
e
(
'
d
'
,
 
$
s
t
a
r
t
d
a
t
e
)
 
+
 
$
i
,
 
d
a
t
e
(
'
Y
'
,
 
$
s
t
a
r
t
d
a
t
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
/
t
r
>
\
n
"
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
.
=
 
"
<
/
t
a
b
l
e
>
\
n
"
;

 
 
 
 
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
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
;

 
 
 
 
}

}

