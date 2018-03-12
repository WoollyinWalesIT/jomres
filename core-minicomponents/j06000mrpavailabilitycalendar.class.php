
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
m
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
l
i
n
k
s
'
 
]
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
l
i
n
k
s
'
 
]
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
"
.
(
i
n
t
)
 
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
.
"
'
"
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
n
u
m
b
e
r
O
f
R
o
o
m
s
I
n
P
r
o
p
e
r
t
y
 
=
 
c
o
u
n
t
(
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
)
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
l
o
u
r
_
e
m
p
t
y
 
=
 
'
#
6
A
F
B
9
2
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
l
o
u
r
_
q
u
a
r
t
e
r
 
=
 
'
#
B
1
F
B
1
7
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
l
o
u
r
_
h
a
l
f
 
=
 
'
#
F
F
F
C
1
7
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
l
o
u
r
_
t
h
r
e
e
q
u
a
r
t
e
r
 
=
 
'
#
F
8
8
0
1
7
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
l
o
u
r
_
f
u
l
l
 
=
 
'
#
F
F
0
0
0
0
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
o
o
m
s
_
e
m
p
t
y
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
s
_
q
u
a
r
t
e
r
 
=
 
(
(
$
t
h
i
s
-
>
n
u
m
b
e
r
O
f
R
o
o
m
s
I
n
P
r
o
p
e
r
t
y
 
/
 
1
0
0
)
 
*
 
.
2
5
)
 
*
 
1
0
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
s
_
h
a
l
f
 
=
 
(
(
$
t
h
i
s
-
>
n
u
m
b
e
r
O
f
R
o
o
m
s
I
n
P
r
o
p
e
r
t
y
 
/
 
1
0
0
)
 
*
 
.
5
)
 
*
 
1
0
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
s
_
t
h
r
e
e
q
u
a
r
t
e
r
 
=
 
(
(
$
t
h
i
s
-
>
n
u
m
b
e
r
O
f
R
o
o
m
s
I
n
P
r
o
p
e
r
t
y
 
/
 
1
0
0
)
 
*
 
.
7
5
)
 
*
 
1
0
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
s
_
f
u
l
l
 
=
 
$
t
h
i
s
-
>
n
u
m
b
e
r
O
f
R
o
o
m
s
I
n
P
r
o
p
e
r
t
y
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
 
'
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
"
1
0
0
%
"
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
t
h
i
s
-
>
c
o
l
o
u
r
_
e
m
p
t
y
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
t
h
i
s
-
>
c
o
l
o
u
r
_
q
u
a
r
t
e
r
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
t
h
i
s
-
>
c
o
l
o
u
r
_
h
a
l
f
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
t
h
i
s
-
>
c
o
l
o
u
r
_
t
h
r
e
e
q
u
a
r
t
e
r
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
t
h
i
s
-
>
c
o
l
o
u
r
_
f
u
l
l
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
t
a
r
g
e
t
 
=
 
'
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

 
 
 
 
 
 
 
 
/
/
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
 
 
#
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

 
 
 
 
 
 
 
 
/
/
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
 
 
#
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
t
m
p
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
"
.
(
i
n
t
)
 
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

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
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
$
d
a
t
e
,
 
$
t
m
p
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
t
m
p
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
o
u
n
t
 
=
 
$
t
m
p
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
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
 
$
c
o
u
n
t
 
+
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
t
m
p
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
 
a
s
 
$
k
e
y
 
=
>
 
$
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
t
h
i
s
-
>
c
o
l
o
u
r
_
f
u
l
l
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
T
h
e
s
e
 
t
w
o
 
l
i
n
e
s
 
a
d
d
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
n
'
t
 
m
a
r
k
e
d
 
a
s
 
f
u
l
l
 
u
n
t
i
l
 
i
t
'
s
 
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
u
l
l
 
(
p
r
e
v
i
o
u
s
l
y
 
i
t
 
w
a
s
 
m
a
r
k
e
d
 
f
u
l
l
 
a
f
t
e
r
 
3
/
4
 
s
p
a
c
e
s
 
t
a
k
e
n
 
t
o
 
g
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
i
e
s
 
r
o
o
m
 
t
o
 
m
a
n
e
o
u
v
e
r
)

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
d
 
=
=
 
$
t
h
i
s
-
>
r
o
o
m
s
_
f
u
l
l
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
t
h
i
s
-
>
c
o
l
o
u
r
_
f
u
l
l
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
d
 
<
=
 
$
t
h
i
s
-
>
r
o
o
m
s
_
f
u
l
l
 
-
 
1
 
&
&
 
$
d
 
>
=
 
$
t
h
i
s
-
>
r
o
o
m
s
_
t
h
r
e
e
q
u
a
r
t
e
r
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
t
h
i
s
-
>
c
o
l
o
u
r
_
t
h
r
e
e
q
u
a
r
t
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
d
 
<
 
$
t
h
i
s
-
>
r
o
o
m
s
_
t
h
r
e
e
q
u
a
r
t
e
r
 
&
&
 
$
d
 
>
=
 
$
t
h
i
s
-
>
r
o
o
m
s
_
h
a
l
f
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
t
h
i
s
-
>
c
o
l
o
u
r
_
h
a
l
f
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
d
 
<
 
$
t
h
i
s
-
>
r
o
o
m
s
_
h
a
l
f
 
&
&
 
$
d
 
>
=
 
$
t
h
i
s
-
>
r
o
o
m
s
_
e
m
p
t
y
 
+
 
1
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
t
h
i
s
-
>
c
o
l
o
u
r
_
q
u
a
r
t
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
d
 
=
=
 
$
t
h
i
s
-
>
r
o
o
m
s
_
e
m
p
t
y
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
t
h
i
s
-
>
c
o
l
o
u
r
_
e
m
p
t
y
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
k
e
y
 
]
 
=
 
a
r
r
a
y
(
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
b
g
c
o
l
o
r
 
=
 
$
t
h
i
s
-
>
c
o
l
o
u
r
_
e
m
p
t
y
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
t
h
i
s
-
>
c
o
l
o
u
r
_
f
u
l
l
 
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
v
a
l
i
d
D
a
y
O
f
W
e
e
k
 
=
 
t
r
u
e
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
 
!
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
i
d
D
a
y
O
f
W
e
e
k
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
v
a
l
i
d
D
a
y
O
f
W
e
e
k
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
"
r
e
s
c
a
l
"
 
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

