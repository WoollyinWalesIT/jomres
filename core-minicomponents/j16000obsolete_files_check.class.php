
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
o
b
s
o
l
e
t
e
_
f
i
l
e
s
_
c
h
e
c
k

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
o
b
s
o
l
e
t
e
_
d
i
r
s
_
o
u
t
p
u
t
 
=
 
'
'
;

	
	
$
o
b
s
o
l
e
t
e
_
f
i
l
e
s
_
o
u
t
p
u
t
 
=
 
'
'
;

	
	

	
	
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
o
b
s
o
l
e
t
e
_
f
i
l
e
_
h
a
n
d
l
i
n
g
'
)
;

 
 
 
 
 
 
 
 
$
o
b
s
o
l
e
t
e
_
f
i
l
e
s
 
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
o
b
s
o
l
e
t
e
_
f
i
l
e
_
h
a
n
d
l
i
n
g
(
)
;

	
	

	
	
i
f
 
(
e
m
p
t
y
(
$
o
b
s
o
l
e
t
e
_
f
i
l
e
s
-
>
o
b
s
_
d
i
r
e
c
t
o
r
i
e
s
)
 
&
&
 
e
m
p
t
y
(
$
o
b
s
o
l
e
t
e
_
f
i
l
e
s
-
>
o
b
s
_
f
i
l
e
s
)
)
 
{

	
	
	
e
c
h
o
 
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
s
u
c
c
e
s
s
"
>

	
<
h
3
>
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
 
d
e
t
e
c
t
e
d
.
<
/
h
3
>

	
<
p
>
T
h
e
r
e
 
a
r
e
 
n
o
 
o
b
s
o
l
e
t
e
 
f
i
l
e
s
 
o
r
 
d
i
r
e
c
t
o
r
i
e
s
 
t
o
 
b
e
 
d
e
l
e
t
e
d
.
<
/
p
>

<
/
d
i
v
>
'
;

	
	
}

	
	

	
	
i
f
 
(
!
e
m
p
t
y
(
$
o
b
s
o
l
e
t
e
_
f
i
l
e
s
-
>
o
b
s
_
d
i
r
e
c
t
o
r
i
e
s
)
 
|
|
 
!
e
m
p
t
y
(
$
o
b
s
o
l
e
t
e
_
f
i
l
e
s
-
>
o
b
s
_
f
i
l
e
s
)
)
 
{

	
	
	
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
b
s
o
l
e
t
e
_
f
i
l
e
s
-
>
o
b
s
_
d
i
r
e
c
t
o
r
i
e
s
 
a
s
 
$
k
)
 
{

	
	
	
	
$
o
b
s
o
l
e
t
e
_
d
i
r
s
_
o
u
t
p
u
t
 
.
=
 
$
k
.
'
<
b
r
>
'
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
o
b
s
o
l
e
t
e
_
f
i
l
e
s
-
>
o
b
s
_
f
i
l
e
s
 
a
s
 
$
k
)
 
{

	
	
	
	
$
o
b
s
o
l
e
t
e
_
f
i
l
e
s
_
o
u
t
p
u
t
 
.
=
 
$
k
.
'
<
b
r
>
'
;

	
	
	
}

	
	
	

	
	
	
e
c
h
o
 
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
w
a
r
n
i
n
g
"
>

	
<
h
3
>
W
A
R
N
I
N
G
:
 
O
b
s
o
l
e
t
e
 
f
i
l
e
s
/
d
i
r
e
c
t
o
r
i
e
s
 
a
r
e
 
s
t
i
l
l
 
p
r
e
s
e
n
t
.
<
/
h
3
>

	
<
p
>
T
h
e
s
e
 
f
i
l
e
s
/
d
i
r
e
c
t
o
r
i
e
s
 
a
r
e
 
n
o
t
 
n
e
e
d
e
d
 
a
n
y
m
o
r
e
 
a
n
d
 
k
e
e
p
i
n
g
 
t
h
e
m
 
c
a
n
 
c
a
u
s
e
 
p
r
o
b
l
e
m
s
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
 
b
e
l
o
w
 
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
e
m
.
<
/
p
>

	
<
p
>
'

	
.
$
o
b
s
o
l
e
t
e
_
d
i
r
s
_
o
u
t
p
u
t
.
$
o
b
s
o
l
e
t
e
_
f
i
l
e
s
_
o
u
t
p
u
t
.

	
'
<
/
p
>

	
<
a
 
h
r
e
f
=
"
'
.
j
o
m
r
e
s
U
r
l
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
A
D
M
I
N
.
'
&
t
a
s
k
=
d
e
l
e
t
e
_
o
b
s
o
l
e
t
e
_
f
i
l
e
s
'
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
"
b
t
n
 
b
t
n
-
w
a
r
n
i
n
g
"
>
R
e
m
o
v
e
 
o
b
s
o
l
e
t
e
 
f
i
l
e
s
 
a
n
d
 
d
i
r
e
c
t
o
r
i
e
s
<
/
a
>

<
/
d
i
v
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

