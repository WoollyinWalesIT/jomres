
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
o
m
r
e
s
_
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

{

 
 
 
 
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;


 
 
 
 
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

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
f
i
g
 
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
h
i
s
-
>
d
e
t
e
c
t
e
d
_
c
o
u
n
t
r
y
 
=
 
'
D
E
'
;

 
 
 
 
 
 
 
 
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
_
d
i
r
_
a
b
s
 
=
 
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
_
A
B
S
P
A
T
H
.
'
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
'
.
J
R
D
S
;

 
 
 
 
 
 
 
 

	
	
i
f
 
(
!
i
s
_
d
i
r
(
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
_
d
i
r
_
a
b
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
@
m
k
d
i
r
(
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
_
d
i
r
_
a
b
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
,
 
u
n
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
 
d
i
r
e
c
t
o
r
y
 
'
.
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
_
d
i
r
_
a
b
s
.
"
 
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
 
c
r
e
a
t
e
 
t
h
e
 
d
i
r
e
c
t
o
r
y
 
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
d
 
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
 
i
t
'
s
 
w
r
i
t
a
b
l
e
 
b
y
 
t
h
e
 
w
e
b
 
s
e
r
v
e
r
"
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
i
n
i
t
(
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
s
t
a
t
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
I
n
s
t
a
n
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
 
=
 
n
e
w
 
s
e
l
f
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
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
 
_
_
c
l
o
n
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
C
l
o
n
i
n
g
 
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
 
o
n
 
a
 
s
i
n
g
l
e
t
o
n
 
o
b
j
e
c
t
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;

 
 
 
 
}


 
 
 
 
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
i
n
i
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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
_
a
p
i
_
k
e
y
'
 
]
)
 
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
_
a
p
i
_
k
e
y
'
 
]
 
!
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
-
>
a
p
i
_
k
e
y
 
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
_
a
p
i
_
k
e
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

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
p
i
_
k
e
y
 
=
 
'
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
d
e
t
e
r
m
i
n
e
_
u
s
e
r
_
l
o
c
a
t
i
o
n
(
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
 
d
e
t
e
r
m
i
n
e
_
u
s
e
r
_
l
o
c
a
t
i
o
n
(
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
$
t
h
i
s
-
>
a
p
i
_
k
e
y
 
!
=
 
'
'
)
 
{

	
	
	
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
g
e
o
l
o
c
a
t
e
d
_
c
o
u
n
t
r
y
'
 
]
)
)
 
{

	
	
	
	
$
i
p
 
=
 
g
e
t
_
r
e
m
o
t
e
_
i
p
_
n
u
m
b
e
r
(
)
;

	
	
	
	
$
h
a
s
h
 
=
 
m
d
5
(
$
i
p
)
;

	
	
	
	

	
	
	
	
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
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
_
d
i
r
_
a
b
s
.
$
h
a
s
h
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
d
e
t
e
c
t
e
d
_
c
o
u
n
t
r
y
 
=
 
f
i
l
e
_
g
e
t
_
c
o
n
t
e
n
t
s
(
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
_
d
i
r
_
a
b
s
.
$
h
a
s
h
)
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
g
e
o
l
o
c
a
t
e
d
_
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
 
$
t
h
i
s
-
>
d
e
t
e
c
t
e
d
_
c
o
u
n
t
r
y
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
i
p
 
!
=
 
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
 
&
&
 
$
i
p
 
!
=
 
'
0
.
0
.
0
.
0
'
)
 
{

	
	
	
	
	
	
j
r
_
i
m
p
o
r
t
(
'
j
o
m
r
e
s
_
i
p
2
l
o
c
a
t
i
o
n
l
i
t
e
'
)
;

	
	
	
	
	
	
$
i
p
L
i
t
e
 
=
 
n
e
w
 
j
o
m
r
e
s
_
i
p
2
l
o
c
a
t
i
o
n
_
l
i
t
e
(
)
;

	
	
	
	
	
	
$
i
p
L
i
t
e
-
>
s
e
t
K
e
y
(
$
t
h
i
s
-
>
a
p
i
_
k
e
y
)
;

	
	
	
	
	
	
$
l
o
c
a
t
i
o
n
s
 
=
 
$
i
p
L
i
t
e
-
>
g
e
t
C
o
u
n
t
r
y
(
$
i
p
)
;

	
	
	
	
	
	

	
	
	
	
	
	
i
f
 
(
$
l
o
c
a
t
i
o
n
s
[
 
'
s
t
a
t
u
s
C
o
d
e
'
 
]
 
=
=
 
'
O
K
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
d
e
t
e
c
t
e
d
_
c
o
u
n
t
r
y
 
=
 
$
l
o
c
a
t
i
o
n
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
C
o
d
e
'
 
]
;

	
	
	
	
	
	
}

	
	
	
	
	
	

	
	
	
	
	
	
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
d
e
t
e
c
t
e
d
_
c
o
u
n
t
r
y
 
=
=
 
'
U
K
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
d
e
t
e
c
t
e
d
_
c
o
u
n
t
r
y
 
=
 
'
G
B
'
;

	
	
	
	
	
	
}
 
/
/
 
I
s
o
 
s
t
a
n
d
a
r
d
s
 
s
a
y
 
t
h
a
t
 
t
h
e
 
U
K
 
c
o
d
e
 
i
s
 
G
B
,
 
b
u
t
 
i
p
2
l
o
c
a
t
i
o
n
 
r
e
t
u
r
n
s
 
U
K
,
 
s
o
 
w
e
'
l
l
 
c
o
n
v
e
r
t
 
t
h
i
s
 
t
o
 
G
B
 
h
e
r
e
.
 
I
t
'
s
 
l
i
k
e
l
y
 
t
h
a
t
 
o
t
h
e
r
 
c
o
u
n
t
r
i
e
s
 
m
i
g
h
t
 
n
e
e
d
 
t
h
e
 
s
a
m
e
 
t
r
e
a
t
e
m
e
n
t
.
 
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
s
o
.
o
r
g
/
i
s
o
/
h
o
m
e
/
s
t
a
n
d
a
r
d
s
/
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
s
/
c
o
u
n
t
r
y
_
n
a
m
e
s
_
a
n
d
_
c
o
d
e
_
e
l
e
m
e
n
t
s
.
h
t
m

	
	
	
	
	
	

	
	
	
	
	
	
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
g
e
o
l
o
c
a
t
e
d
_
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
 
$
t
h
i
s
-
>
d
e
t
e
c
t
e
d
_
c
o
u
n
t
r
y
;

	
	
	
	
	
}
 
e
l
s
e
 
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
g
e
o
l
o
c
a
t
e
d
_
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
 
$
t
h
i
s
-
>
d
e
t
e
c
t
e
d
_
c
o
u
n
t
r
y
;

	
	
	
	
	
}

	
	
	
	
	

	
	
	
	
	
f
i
l
e
_
p
u
t
_
c
o
n
t
e
n
t
s
(
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
_
d
i
r
_
a
b
s
.
$
h
a
s
h
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
g
e
o
l
o
c
a
t
e
d
_
c
o
u
n
t
r
y
'
 
]
,
 
L
O
C
K
_
E
X
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
g
e
o
l
o
c
a
t
e
d
_
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
 
$
t
h
i
s
-
>
d
e
t
e
c
t
e
d
_
c
o
u
n
t
r
y
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
 
a
u
t
o
_
s
e
t
_
u
s
e
r
_
c
u
r
r
e
n
c
y
_
c
o
d
e
(
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

	
	
	
(
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
g
e
o
l
o
c
a
t
e
d
_
c
o
u
n
t
r
y
'
 
]
)
 
&
&
 
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
g
e
o
l
o
c
a
t
e
d
_
c
o
u
n
t
r
y
'
 
]
 
!
=
 
'
'
)
 
&
&
 

	
	
	
(
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
c
u
r
r
e
n
t
_
e
x
c
h
a
n
g
e
_
r
a
t
e
'
 
]
)
 
&
&
 
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
c
u
r
r
e
n
t
_
e
x
c
h
a
n
g
e
_
r
a
t
e
'
 
]
 
!
=
 
'
'
)
 

	
	
	
)
 
{

	
	
	
r
e
t
u
r
n
 
t
r
u
e
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
c
u
r
r
e
n
c
y
_
c
o
d
e
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
c
u
r
r
e
n
c
y
_
c
o
d
e
s
'
)
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
c
u
r
r
e
n
c
y
_
c
o
d
e
s
-
>
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
s
_
t
o
_
c
u
r
r
e
n
c
y
_
c
o
d
e
s
[
 
$
t
h
i
s
-
>
d
e
t
e
c
t
e
d
_
c
o
u
n
t
r
y
 
]
)
)
 
{

	
	
	
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
a
p
i
_
k
e
y
 
!
=
 
'
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
c
y
_
c
o
d
e
 
=
 
$
c
u
r
r
e
n
c
y
_
c
o
d
e
s
-
>
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
s
_
t
o
_
c
u
r
r
e
n
c
y
_
c
o
d
e
s
[
 
$
t
h
i
s
-
>
d
e
t
e
c
t
e
d
_
c
o
u
n
t
r
y
 
]
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
c
y
_
c
o
d
e
 
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
g
l
o
b
a
l
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
'
]
;

	
	
	
}

 
 
 
 
 
 
 
 
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
c
y
_
c
o
d
e
 
=
 
'
E
U
R
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
c
u
r
r
e
n
c
y
_
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
u
r
r
e
n
c
y
_
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

	
	

 
 
 
 
 
 
 
 
i
f
 
(
$
j
o
m
r
e
s
_
c
u
r
r
e
n
c
y
_
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
>
t
h
i
s
_
c
o
d
e
_
c
a
n
_
b
e
_
c
o
n
v
e
r
t
e
d
(
$
c
u
r
r
e
n
c
y
_
c
o
d
e
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
c
u
r
r
e
n
t
_
e
x
c
h
a
n
g
e
_
r
a
t
e
'
 
]
 
=
 
$
c
u
r
r
e
n
c
y
_
c
o
d
e
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
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
c
u
r
r
e
n
t
_
e
x
c
h
a
n
g
e
_
r
a
t
e
'
 
]
 
=
 
'
E
U
R
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}

